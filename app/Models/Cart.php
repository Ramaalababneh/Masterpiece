<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'item_id',
        'item_price',
        'total',
        'logo',
        'quantity',
    ];

    // Set default values for certain fields
    protected $attributes = [
        'logo' => 'default_logo_value',  // Replace with your desired default value
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
    public function discounts()
    {
        return $this->hasOne(Discount::class);
    }
}