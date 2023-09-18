<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class FeatureSku extends Pivot
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sku_id',
        'feature_id',
        'value',
    ];
}
