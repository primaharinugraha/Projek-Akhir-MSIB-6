<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'gender',
        'job',
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}