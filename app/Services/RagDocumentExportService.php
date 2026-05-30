<?php

namespace App\Services;

use App\Models\Car;
use App\Models\CarCategory;
use App\Models\Part;
use App\Models\PartCategory;

class RagDocumentExportService
{
    /**
     * @return list<array{id: string, name: string, slug: string, description: null}>
     */
    public function exportCategories(): array
    {
        $carCategories = CarCategory::query()
            ->orderBy('id')
            ->get()
            ->map(fn (CarCategory $category) => [
                'id' => 'car_category_'.$category->id,
                'name' => $category->name,
                'slug' => $category->slug,
                'description' => null,
            ]);

        $partCategories = PartCategory::query()
            ->orderBy('id')
            ->get()
            ->map(fn (PartCategory $category) => [
                'id' => 'part_category_'.$category->id,
                'name' => $category->name,
                'slug' => $category->slug,
                'description' => null,
            ]);

        return $carCategories
            ->concat($partCategories)
            ->values()
            ->all();
    }

    /**
     * @return list<array{id: string, name: string, slug: string, description: string|null}>
     */
    public function exportProducts(): array
    {
        $cars = Car::query()
            ->orderBy('id')
            ->get()
            ->map(fn (Car $car) => [
                'id' => 'car_'.$car->id,
                'name' => $car->name,
                'slug' => $car->slug,
                'description' => $car->description,
            ]);

        $parts = Part::query()
            ->orderBy('id')
            ->get()
            ->map(fn (Part $part) => [
                'id' => 'part_'.$part->id,
                'name' => $part->name,
                'slug' => $part->slug,
                'description' => $part->description,
            ]);

        return $cars
            ->concat($parts)
            ->values()
            ->all();
    }
}
