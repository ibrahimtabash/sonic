<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [

        'category_id',

        'name',
        'slug',

        'short_description',
        'description',

        'cover_image',
        'gallery',

        'usd_price',
        'local_price',

        'currency',

        'delivery_time',

        'type',

        'is_featured',
        'is_active',

        'sort_order',

        'seo_title',
        'seo_description',
    ];

    protected $casts = [

        'gallery' => 'array',

        'is_featured' => 'boolean',

        'is_active' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function plans()
    {
        return $this->hasMany(ProductPlan::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function prices()
    {
        return $this->hasMany(ProductPrice::class);
    }
}
