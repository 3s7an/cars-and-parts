<?php

namespace Database\Factories;

use App\Models\CarCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarCategory>
 */
class CarCategoryFactory extends Factory
{
    protected $model = CarCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->randomElement([
            'Sedan', 'SUV', 'Hatchback', 'Coupe', 'Convertible', 'Wagon',
        ]);

        return [
            'name' => $name,
            'slug' => Str::slug($name).'-'.fake()->unique()->regexify('[a-z0-9]{4}'),
        ];
    }
}
