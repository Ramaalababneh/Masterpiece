<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'stock_quantity',
        'size',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function order_details()
    {
        return $this->belongsTo(OrderDetails::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
