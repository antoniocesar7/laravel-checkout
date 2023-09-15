<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shipping extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        
        'order_id',
        'address',
        'city',
        'state',
        'zipcode',
        'district',
        'number',
        'complement',
        'tracking_code',
        'status',
    ];

    public function order():BelongsTo
    {
        $this->belongsTo(Order::class);
    }
}
