<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Part;
use Illuminate\Database\Seeder;

class CarPartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = Car::factory(3)->create();

        foreach ($cars as $car) {
            Part::factory(2)->for($car)->create();
        }
    }
}
