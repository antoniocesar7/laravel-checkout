<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'address',
        'city',
        'state',
        'zipcode',
        'district',
        'number',
        'complement',
    ];

    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
