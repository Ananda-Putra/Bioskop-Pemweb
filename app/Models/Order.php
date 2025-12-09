<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $fillable = [
        'film_id',
        'title',
        'amount',
        'total_price',
        'payment_mehtod',
    ];

    public function film()
    {
        return $this->belongsTo(Film::class);
    }

 
}
