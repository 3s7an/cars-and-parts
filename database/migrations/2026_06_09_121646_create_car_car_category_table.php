<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // car_car_category
        Schema::create('car_car_category', function (Blueprint $table) {
            $table->foreignId('car_id')->constrained()->cascadeOnDelete();
            $table->foreignId('car_category_id')->constrained()->cascadeOnDelete();
            $table->primary(['car_id', 'car_category_id']);
        });

// part_part_category — analogicky
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_car_category');
    }
};
