<?php

namespace App\Models;

use Database\Seeders\OrderDetailsSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    public function order_details()
        {
            return $this->hasMany(OrderDetails::class);
        }

    public function reviews()
    {
        return $this->hasOne(Review::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
