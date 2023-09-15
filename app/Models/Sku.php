<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Sku extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [

        'sku_id',
        'feature_id',
        'value',
    ];

    public function skus():BelongsToMany
    {
        return $this->belongsToMany(Order::class)->using(OrderSku::class);
    }

    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class)
            ->using(FeatureSku::class)
            ->withPivot('value');
    }
}

