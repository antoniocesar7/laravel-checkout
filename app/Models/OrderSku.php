<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderSku extends Pivot 
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'sku_id',
        'product',
        'quantity',
        'unitary_price',
    ];

    protected $casts = [
        'product' => 'json'
    ];

    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
    
    public function sku():BelongsTo 
    {
        return $this->belongsTo(Sku::class)->using(OrderSku::class);
    }
}
