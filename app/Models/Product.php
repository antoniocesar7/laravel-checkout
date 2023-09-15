<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'products',
        'brand_id',
        'category_id',
        'name',
        'slug',
        'description',
        'technical_description',
    ];

    public function brand():BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function category():BelongsTo
    {
        return belongsTo(Category::class);
    }

    public function sku():HasMany
    {
        return $this->hasMany(Sku::class);
    }
}
