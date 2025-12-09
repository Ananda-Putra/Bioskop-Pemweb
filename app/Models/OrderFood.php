<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderFood extends Model
{
    protected $table = 'order_food';
    protected $fillable = [
        'food_id',
        'name',
        'amount',
        'total_price',
        'payment_method',
    ];

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
