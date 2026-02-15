<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Part;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Part>
 */
class PartFactory extends Factory
{
    protected $model = Part::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Brake disc', 'Air filter', 'Oil filter',
                'Headlights', 'Alternator', 'Starter', 'Radiator',
                'Distributor', 'Ignition coil', 'Door lock',
            ]),
            'serial_number' => fake()->unique()->regexify('[A-Z0-9]{8}'),
            'car_id' => Car::factory(),
        ];
    }
}
