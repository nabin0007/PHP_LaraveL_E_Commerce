<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'description',
        'label',
        'price',
        'discount_price',
        'image',
        'is_popular',
        'is_daily_best_sell',
        'status',
        'rating',
        'rating_count', // add this
    ];

    // Relation to category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
