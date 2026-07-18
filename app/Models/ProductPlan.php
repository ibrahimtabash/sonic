<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPlan extends Model
{
    protected $fillable = [

        'product_id',

        'name',

        'duration',

        'usd_price',

        'local_price',

        'is_default',

        'is_active',
    ];

    protected $casts = [

        'is_default' => 'boolean',

        'is_active' => 'boolean',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
