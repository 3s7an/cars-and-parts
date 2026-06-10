<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('name');
        });

        Schema::table('parts', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('name');
        });

        foreach (\App\Models\Car::query()->cursor() as $car) {
            $car->update(['slug' => self::uniqueCarSlug($car->name, $car->id)]);
        }

        foreach (\App\Models\Part::query()->cursor() as $part) {
            $part->update(['slug' => self::uniquePartSlug($part->name, $part->id)]);
        }

        Schema::table('cars', function (Blueprint $table) {
            $table->unique('slug');
        });

        Schema::table('parts', function (Blueprint $table) {
            $table->unique('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn('slug');
        });

        Schema::table('parts', function (Blueprint $table) {
            $table->dropUnique(['slug']);
            $table->dropColumn('slug');
        });
    }

    private static function uniqueCarSlug(string $name, int $id): string
    {
        $base = Str::slug($name);
        $slug = $base;
        $suffix = 1;

        while (
            \App\Models\Car::query()
                ->where('slug', $slug)
                ->where('id', '!=', $id)
                ->exists()
        ) {
            $slug = $base.'-'.$suffix;
            $suffix++;
        }

        return $slug;
    }

    private static function uniquePartSlug(string $name, int $id): string
    {
        $base = Str::slug($name);
        $slug = $base;
        $suffix = 1;

        while (
            \App\Models\Part::query()
                ->where('slug', $slug)
                ->where('id', '!=', $id)
                ->exists()
        ) {
            $slug = $base.'-'.$suffix;
            $suffix++;
        }

        return $slug;
    }
};
