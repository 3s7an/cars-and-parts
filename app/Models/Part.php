<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'serial_number', 'car_id'];

    public function car()
    {
        return $this->belongsTo(Car::class);
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
