<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Finance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'name',
        'value',
        'date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeAsset($q)
    {
        return $q->where('type', 'asset');
    }

    public function scopeLiability($q)
    {
        return $q->where('type', 'liability');
    }

    public function scopeYear($q, $year)
    {
        return $q->whereYear('date', $year);
    }

    public function scopeMonth($q, $month)
    {
        return $q->whereMonth('date', $month);
    }

    public function scopeTotal($q)
    {
        return $q->sum('value');
    }

    public function scopeTotalAll($q)
    {
        return $q->clone()->asset()->total() - $q->clone()->liability()->total();
    }
}
