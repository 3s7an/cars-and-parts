<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Part extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'serial_number', 'description', 'car_id'];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(PartCategory::class);
    }

    public function scopeNameLike($query, ?string $value): void
    {
        $query->when($value !== null && $value !== '', fn ($q) =>
            $q->where('name', 'like', '%' . $value . '%')
        );
    }

    public function scopeSerialNumberLike($query, ?string $value): void
    {
        $query->when($value !== null && $value !== '', fn ($q) =>
            $q->where('serial_number', 'like', '%' . $value . '%')
        );
    }

    public function scopeForCar($query, $carId): void
    {
        $query->when($carId !== null && $carId !== '' && $carId !== 'all', fn ($q) =>
            $q->where('car_id', $carId)
        );
    }
}
