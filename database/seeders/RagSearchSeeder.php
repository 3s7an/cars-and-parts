<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarCategory;
use App\Models\Part;
use App\Models\PartCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use InvalidArgumentException;

class RagSearchSeeder extends Seeder
{
    /** @var array<string, int> */
    private array $carCategoryIds = [];

    /** @var array<string, int> */
    private array $partCategoryIds = [];

    public function run(): void
    {
        $this->seedCarCategories();
        $this->seedPartCategories();

        $cars = require database_path('seeders/data/rag_search.php');

        foreach ($cars as $carData) {
            $categorySlugs = $carData['category_slugs'] ?? [];
            $parts = $carData['parts'] ?? [];
            unset($carData['category_slugs'], $carData['parts']);

            $carData['slug'] = $carData['slug'] ?? $this->uniqueSlug(Car::class, $carData['name']);

            $car = Car::create($carData);
            $car->categories()->sync($this->resolveCarCategoryIds($categorySlugs));

            foreach ($parts as $partData) {
                $partCategorySlugs = $partData['category_slugs'] ?? [];
                unset($partData['category_slugs']);

                $partData['slug'] = $partData['slug'] ?? $this->uniqueSlug(Part::class, $partData['name']);

                $part = Part::create([
                    ...$partData,
                    'car_id' => $car->id,
                ]);

                $part->categories()->sync($this->resolvePartCategoryIds($partCategorySlugs));
            }
        }
    }

    private function seedCarCategories(): void
    {
        $categories = require database_path('seeders/data/rag_car_categories.php');

        foreach ($categories as $row) {
            $category = CarCategory::firstOrCreate(
                ['slug' => $row['slug']],
                ['name' => $row['name']],
            );

            $this->carCategoryIds[$row['slug']] = $category->id;
        }
    }

    private function seedPartCategories(): void
    {
        $categories = require database_path('seeders/data/rag_part_categories.php');

        foreach ($categories as $row) {
            $category = PartCategory::firstOrCreate(
                ['slug' => $row['slug']],
                ['name' => $row['name']],
            );

            $this->partCategoryIds[$row['slug']] = $category->id;
        }
    }

    /**
     * @param  list<string>  $slugs
     * @return list<int>
     */
    private function resolveCarCategoryIds(array $slugs): array
    {
        return $this->resolveIds($slugs, $this->carCategoryIds, 'car');
    }

    /**
     * @param  list<string>  $slugs
     * @return list<int>
     */
    private function resolvePartCategoryIds(array $slugs): array
    {
        return $this->resolveIds($slugs, $this->partCategoryIds, 'part');
    }

    /**
     * @param  list<string>  $slugs
     * @param  array<string, int>  $map
     * @return list<int>
     */
    private function resolveIds(array $slugs, array $map, string $type): array
    {
        $ids = [];

        foreach ($slugs as $slug) {
            if (! isset($map[$slug])) {
                throw new InvalidArgumentException("Unknown {$type} category slug: {$slug}");
            }

            $ids[] = $map[$slug];
        }

        return $ids;
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
