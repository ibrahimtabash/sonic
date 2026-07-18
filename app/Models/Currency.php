<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'code',
        'name',
        'symbol',
        'country_code',
        'is_default',
        'is_active',
    ];


    public function prices()
    {
        return $this->hasMany(ProductPrice::class);
    }
}
