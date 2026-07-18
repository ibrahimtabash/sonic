<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [

        'name',

        'logo',

        'instructions',

        'account_number',

        'is_active',

        'sort_order',
    ];

    protected $casts = [

        'is_active' => 'boolean',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
