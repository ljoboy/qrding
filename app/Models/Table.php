<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Table extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'seats',
        'is_occupied',
        'party_id',
    ];

    protected array $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function party(): BelongsTo
    {
        return $this->belongsTo(Party::class);
    }

    public function scopeOccupied($query)
    {
        return $query->where('is_occupied', true);
    }

    public function scopeUnoccupied($query)
    {
        return $query->where('is_occupied', false);
    }

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
