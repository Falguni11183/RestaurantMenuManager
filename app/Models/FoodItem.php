<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'image',
        'is_special',
        'is_visible',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_special' => 'boolean',
        'is_visible' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}