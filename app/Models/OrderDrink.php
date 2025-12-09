<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDrink extends Model
{
    protected $table = 'order_drink';
    protected $fillable = [
        'drink_id',
        'name',
        'amount',
        'total_price',
        'payment_method',
    ];

    public function drink()
    {
        return $this->belongsTo(Drink::class);
    }
}
