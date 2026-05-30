<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarPartSeeder extends Seeder
{
    /**
     * @deprecated Použi RagSearchSeeder — zachované kvôli spätnej kompatibilite volania.
     */
    public function run(): void
    {
        $this->call(RagSearchSeeder::class);
    }
}
