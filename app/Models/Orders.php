<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'id',
        'user_id',
        'Total_price',
        'status',
        'voucher_id',
        'payment_method',
        'note',
        'order_date',
        'shipping_address',
        'order_code',
        'phone_number',
        'order_detail_id',
        'voucher_id',
    ];
}
