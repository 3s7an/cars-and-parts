<?php

namespace Database\Factories;

use App\Models\Part;
use App\Models\PartCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PartCategory>
 */
class PartCategoryFactory extends Factory
{
    protected $model = PartCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->randomElement([
            'Engine', 'Brakes', 'Electrical', 'Body', 'Suspension', 'Interior',
        ]);

        return [
            'name' => $name,
            'slug' => Str::slug($name) . '-' . fake()->unique()->regexify('[a-z0-9]{4}'),
        ];
    }
}
