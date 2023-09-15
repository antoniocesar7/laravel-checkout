<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FeatureSku extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'sku_id',
        'feature_id',
        'value',
    ];
}
