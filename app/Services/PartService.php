<?php

namespace App\Services;

use App\Models\Part;
use Illuminate\Database\Eloquent\Collection;

class PartService
{
    public function __construct(
        private RagDocumentExportService $ragExport,
        private RagSyncService $ragSync
    ) {}

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
        $part = Part::create($data);

        $this->ragSync->queue('created', [$this->ragExport->exportPart($part)], []);

        return $part;
    }

    public function update(Part $part, array $data): bool
    {
        $updated = $part->update($data);

        if ($updated) {
            $part->refresh();
            $this->ragSync->queue('updated', [$this->ragExport->exportPart($part)], []);
        }

        return $updated;
    }

    public function delete(Part $part): bool
    {
        $deleted = $part->delete();
        $deletedIds = ['part_'.$part->id];

        if ($deleted) {
            $this->ragSync->queue('deleted', [], $deletedIds);
        }

        return $deleted;
    }
}
