<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id',
        'name',
        'phone_number',
        'gender',
        'job',
        'source_income',
        'country',
        'last_education',
        'postal_code',
        'address',
        'photo_path',
        'age',
        'married_status',
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}