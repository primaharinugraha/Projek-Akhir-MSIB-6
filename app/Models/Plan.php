<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'goal',
        'start_date',
        'date',
    ];

    public function getInstallment()
    {
        $startDate = Carbon::parse($this->start_date);
        $endDate = Carbon::parse($this->date);

        $monthsDifference = $startDate->diffInMonths($endDate);

        if ($monthsDifference > 0) {
            $installment = $this->goal / $monthsDifference;
        } else {
            $installment = 0;
        }

        return $installment;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
