<?php

namespace App\Services;

use App\Models\Part;
use Illuminate\Database\Eloquent\Collection;

class PartService
{
    public function getAllWithCar(): Collection
    {
        return Part::with('car')->get();
    }

    public function getById(int $id): ?Part
    {
        return Part::find($id);
    }

    public function create(array $data): Part
    {
        return Part::create($data);
    }

    public function update(Part $part, array $data): bool
    {
        return $part->update($data);
    }

    public function delete(Part $part): bool
    {
        return $part->delete();
    }
}
