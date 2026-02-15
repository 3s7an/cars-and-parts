<?php

namespace App\Services;

use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;

class CarService
{
    public function getAllWithParts(): Collection
    {
        return Car::with('parts')->get();
    }

    public function getAll(): Collection
    {
        return Car::query()->orderBy('name')->get();
    }


    public function getById(int $id): ?Car
    {
        return Car::find($id);
    }

    public function create(array $data): Car
    {
        return Car::create($data);
    }

    public function update(Car $car, array $data): bool
    {
        return $car->update($data);
    }

    public function delete(Car $car): bool
    {
        return $car->delete();
    }
}
