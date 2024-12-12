<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Family extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function scopeFilter(Builder $query, array $filters): void
    {
        if (isset($filters['s'])) {
            $s = request('s');

            $query->where('id', 'like', "%{$s}%")
                ->orWhere('name', 'like', "%{$s}%");
        }
    }

    public function members(): HasMany
    {
        return $this->hasMany(Member::class);
    }
}
