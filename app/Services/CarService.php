<?php

namespace App\Services;

use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;
use App\Services\RagDocumentExportService;
use App\Services\RagSyncService;


class CarService
{   
    public function __construct(
        private RagDocumentExportService $ragExport,
        private RagSyncService $ragSync
    ){}

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
        $car = Car::create($data);

        $this->ragSync->queue('created', [$this->ragExport->exportCar($car)], []);

        return $car;
    }

    public function update(Car $car, array $data): bool
    {   
        $updated = $car->update($data);

        if($updated){
            $car->refresh();

            $documents = [$this->ragExport->exportCar($car)];

            // reindexovanie dielov
            foreach ($car->parts()->with(['categories', 'car'])->get() as $part) {
                $documents[] = $this->ragExport->exportPart($part);
            }

             $this->ragSync->queue('updated', $documents, []);
        }

        return $updated;
    }

    public function delete(Car $car): bool
    {
        $car->loadMissing('parts');

        $deletedIds = [
            'car_'.$car->id,
            ...$car->parts->map(fn($p) => 'part_'.$p->id)->all(),
        ];

        $deleted = $car->delete();

        if($deleted){
            $this->ragSync->queue('deleted', [], $deletedIds);
        }

        return $deleted;
    }
}
