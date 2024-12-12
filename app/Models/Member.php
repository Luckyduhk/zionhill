<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    public const CLOTHING_SIZES = ['XS', 'S', 'M', 'L', 'XL', '2XL', '3XL', '4XL'];

    use HasFactory;

    protected $fillable = [
        'family_id',
        'first_name',
        'last_name',
        'address',
        'phone',
        'email',
        'notes',
        'prayer_requests',
        'last_visited_date',
        'clothing_size',
        'picture',
    ];

    public function scopeFilter(Builder $query, array $filters): void
    {
        if (isset($filters['family_id'])) {
            $familyId = request('family_id');

            $query->where('family_id', $familyId);
        }

        if (isset($filters['s'])) {
            $s = request('s');

            $query->where('id', 'like', "%{$s}%")
                ->orWhere('first_name', 'like', "%{$s}%")
                ->orWhere('last_name', 'like', "%{$s}%")
                ->orWhere('email', 'like', "%{$s}%")
                ->orWhere('phone', 'like', "%{$s}%");
        }
    }

    public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class);
    }
}
