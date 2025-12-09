<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'food';
    protected $fillable = [
        'name',
        'price',
        'image',
    ];

    public function orderFoods()
    {
        return $this->hasMany(OrderFood::class);
    }
}
