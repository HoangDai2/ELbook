<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id',
        'product_code',
        'name',
        'image',
        'price',
        'category_id',
        'description',
        'quantity',
        'author',
        'publisher',
        'specified_age',
        'language',
        'year_of_publication',
        'page_number'
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function image()
    {
        return asset('storage/' . $this->image);
    }
}
