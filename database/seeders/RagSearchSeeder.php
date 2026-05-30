<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarCategory;
use App\Models\Part;
use App\Models\PartCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RagSearchSeeder extends Seeder
{
    /**
     * Seed kurátorovaných dát pre testovanie RAG vyhľadávania.
     */
    public function run(): void
    {
        $cars = require database_path('seeders/data/rag_search.php');

        foreach ($cars as $carData) {
            $categories = $carData['categories'] ?? [];
            $parts = $carData['parts'] ?? [];
            unset($carData['categories'], $carData['parts']);

            $carData['slug'] = $carData['slug'] ?? $this->uniqueSlug(Car::class, $carData['name']);

            $car = Car::create($carData);

            foreach ($categories as $category) {
                CarCategory::create([
                    ...$category,
                    'car_id' => $car->id,
                ]);
            }

            foreach ($parts as $partData) {
                $partCategories = $partData['categories'] ?? [];
                unset($partData['categories']);

                $partData['slug'] = $partData['slug'] ?? $this->uniqueSlug(Part::class, $partData['name']);

                $part = Part::create([
                    ...$partData,
                    'car_id' => $car->id,
                ]);

                foreach ($partCategories as $category) {
                    PartCategory::create([
                        ...$category,
                        'part_id' => $part->id,
                    ]);
                }
            }
        }
    }

    /**
     * @param  class-string<Model>  $modelClass
     */
    private function uniqueSlug(string $modelClass, string $name): string
    {
        $base = Str::slug($name);
        $slug = $base;
        $suffix = 1;

        while ($modelClass::query()->where('slug', $slug)->exists()) {
            $slug = $base.'-'.$suffix;
            $suffix++;
        }

        return $slug;
    }
}
