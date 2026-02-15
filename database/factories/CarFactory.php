<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $isRegistered = fake()->boolean(40);

        return [
            'name' => fake()->unique()->regexify('Car [A-Z0-9]{4,8}'),
            'registration_number' => $isRegistered ? fake()->unique()->regexify('[A-Z]{2}[0-9]{6}') : null,
            'is_registered' => $isRegistered,
        ];
    }

    /**
     * Indicate that the car is registered (with registration number).
     */
    public function registered(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_registered' => true,
            'registration_number' => fake()->unique()->regexify('[A-Z]{2}[0-9]{6}'),
        ]);
    }

    /**
     * Indicate that the car is not registered.
     */
    public function unregistered(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_registered' => false,
            'registration_number' => null,
        ]);
    }
}
