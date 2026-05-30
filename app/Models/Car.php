<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'registration_number', 'is_registered', 'description'];

    public function parts(): HasMany
    {
        return $this->hasMany(Part::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(CarCategory::class);
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
