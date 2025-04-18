<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_detail extends Model
{
    use HasFactory;
    protected $table = 'cart_detail';
    protected $fillable = [
        'id',
        'cart_id',
        'product_id',
        'quantity',
        'price',
        'total_price',
        'checked'
    ];
}
