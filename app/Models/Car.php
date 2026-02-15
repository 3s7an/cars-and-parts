<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'registration_number', 'is_registered'];

    public function parts()
    {
        return $this->hasMany(Part::class);
    }

    public function scopeNameLike($query, ?string $value): void
    {
        $query->when($value !== null && $value !== '', fn ($q) =>
            $q->where('name', 'like', '%' . $value . '%')
        );
    }

    public function scopeIsRegistered($query, ?string $value): void
    {
        $query->when($value !== null && $value !== '', function ($q) use ($value) {
            if ($value === 'true') {
                $q->where('is_registered', true);
            }
            if ($value === 'false') {
                $q->where('is_registered', false);
            }
        });
    }

    public function scopeRegistrationNumberLike($query, ?string $value): void
    {
        $query->when($value !== null && $value !== '', fn ($q) =>
            $q->where('registration_number', 'like', '%' . $value . '%')
        );
    }
}
