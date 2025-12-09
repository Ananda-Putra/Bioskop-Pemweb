<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';
    protected $fillable = [
        'title',
        'image',
        'payment_mehtod',
        'price'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
