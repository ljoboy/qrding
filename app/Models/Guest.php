<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'qr_code',
        'type',
        'is_active',
        'table_id',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected array $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function table(): BelongsTo
    {
        return $this->belongsTo(Table::class);
    }

    public function party(): BelongsTo
    {
        return $this->belongsTo(Party::class);
    }

    public function scopeSingle($query)
    {
        return $query->where('type', 'single');
    }

    public function scopeCouple($query)
    {
        return $query->where('type', 'couple');
    }

    public function scopeFamily($query)
    {
        return $query->where('type', 'family');
    }

    public function scopeGroup($query)
    {
        return $query->where('type', 'group');
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeByTable($query, $tableId)
    {
        return $query->where('table_id', $tableId);
    }

    public function scopeByParty($query, $partyId)
    {
        return $query->where('party_id', $partyId);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeInactive($query)
    {
        return $query->where('is_active', false);
    }

    public function scopeSeated($query)
    {
        return $query->whereNotNull('table_id');
    }

    public function scopeUnseated($query)
    {
        return $query->whereNull('table_id');
    }

    protected function serializeDate(DateTimeInterface $date): string
    {
        return $date->format('Y-m-d H:i:s');
    }
}
