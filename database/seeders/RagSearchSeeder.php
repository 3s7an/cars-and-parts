<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarCategory;
use App\Models\Part;
use App\Models\PartCategory;
use Illuminate\Database\Seeder;

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
}
