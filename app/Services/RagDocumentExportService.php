<?php

namespace App\Services;

use App\Models\Car;
use App\Models\CarCategory;
use App\Models\Part;
use App\Models\PartCategory;

class RagDocumentExportService
{
    /**
     * @return list<array{id: string, type: string, name: string, slug: string, description: null, search_text: string}>
     */
    public function exportCategories(): array
    {
        $carCategories = CarCategory::query()
            ->orderBy('id')
            ->get()
            ->map(fn (CarCategory $category) => $this->formatCategory($category, 'car_category'));

        $partCategories = PartCategory::query()
            ->orderBy('id')
            ->get()
            ->map(fn (PartCategory $category) => $this->formatCategory($category, 'part_category'));

        return $carCategories
            ->concat($partCategories)
            ->values()
            ->all();
    }

    /**
     * @return list<array{id: string, type: string, name: string, slug: string, description: string|null, category_ids: list<string>, category_slugs: list<string>, search_text: string}>
     */
    public function exportProducts(): array
    {
        $cars = Car::query()
            ->with('categories')
            ->orderBy('id')
            ->get()
            ->map(fn (Car $car) => $this->formatProduct(
                id: 'car_'.$car->id,
                type: 'car',
                name: $car->name,
                slug: $car->slug,
                description: $car->description,
                categories: $car->categories,
                categoryIdPrefix: 'car_category',
                carId: null,
                carName: null,
            ));

        $parts = Part::query()
            ->with(['categories', 'car'])
            ->orderBy('id')
            ->get()
            ->map(fn (Part $part) => $this->formatProduct(
                id: 'part_'.$part->id,
                type: 'part',
                name: $part->name,
                slug: $part->slug,
                description: $part->description,
                categories: $part->categories,
                categoryIdPrefix: 'part_category',
                carId: $part->car_id ? 'car_'.$part->car_id : null,
                carName: $part->car?->name,
            ));

        return $cars
            ->concat($parts)
            ->values()
            ->all();
    }

    public function exportCar(Car $car): array
    {
        $car->loadMissing('categories');

        return $this->formatProduct(
            id: 'car_'.$car->id,
            type: 'car',
            name: $car->name,
            slug: $car->slug,
            description: $car->description,
            categories: $car->categories,
            categoryIdPrefix: 'car_category',
            carId: null,
            carName: null,
        );
    }

    public function exportPart(Part $part): array
    {
        $part->loadMissing(['categories', 'car']);

        return $this->formatProduct(
            id: 'part_'.$part->id,
            type: 'part',
            name: $part->name,
            slug: $part->slug,
            description: $part->description,
            categories: $part->categories,
            categoryIdPrefix: 'part_category',
            carId: $part->car_id ? 'car_'.$part->car_id : null,
            carName: $part->car?->name,
        );
    }

    /**
     * @return array{id: string, type: string, name: string, slug: string, description: null, search_text: string}
     */
    private function formatCategory(CarCategory|PartCategory $category, string $type): array
    {
        return [
            'id' => $type.'_'.$category->id,
            'type' => $type,
            'name' => $category->name,
            'slug' => $category->slug,
            'description' => null,
            'search_text' => $category->name.' | '.$category->slug,
        ];
    }

    /**
     * @param  iterable<int, CarCategory|PartCategory>  $categories
     * @return array{id: string, type: string, name: string, slug: string|null, description: string|null, category_ids: list<string>, category_slugs: list<string>, car_id: string|null, car_name: string|null, search_text: string}
     */
    private function formatProduct(
        string $id,
        string $type,
        string $name,
        ?string $slug,
        ?string $description,
        iterable $categories,
        string $categoryIdPrefix,
        ?string $carId = null,
        ?string $carName = null,
    ): array {
        $categoryIds = [];
        $categorySlugs = [];
        $categoryNames = [];

        foreach ($categories as $category) {
            $categoryIds[] = $categoryIdPrefix.'_'.$category->id;
            $categorySlugs[] = $category->slug;
            $categoryNames[] = $category->name;
        }

        $searchParts = array_filter([
            $name,
            $description,
            $carName,
            $categoryNames !== [] ? 'Kategórie: '.implode(', ', $categoryNames) : null,
        ]);

        return [
            'id' => $id,
            'type' => $type,
            'name' => $name,
            'slug' => $slug,
            'description' => $description,
            'category_ids' => $categoryIds,
            'category_slugs' => $categorySlugs,
            'car_id' => $carId,
            'car_name' => $carName,
            'search_text' => implode(' | ', $searchParts),
        ];
    }
}
