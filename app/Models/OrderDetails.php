<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'price',
        'logo',
        'order_id',
        'item_id',
    ];


    protected $attributes = [
        'logo' => 'default_logo_value',  // Replace with your desired default value
    ];

    public function items()
        {
            return $this->hasMany(Item::class);
        }

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
