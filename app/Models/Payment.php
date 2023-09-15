<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'external_id',
        'order_id',
        'method',
        'status',
        'installments',
        'approved_at',
        'qr_code_64',
        'qr_code',
        'ticket_url',

    ];

    /*protected $casts = [
        'method' => PaymentMethodEnum::class,
        'status' => PaymentStatusEnum::class,
    ];*/


    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
