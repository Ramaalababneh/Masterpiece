<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table='users';
    protected $primaryKey ='id';
    protected $gaurded = [];


    public function reviews()
        {
            return $this->hasMany(Review::class);
        }

        public function orders()
        {
            return $this->hasMany(Order::class);
        }

    public function carts()
    {
        return $this->hasOne(Cart::class);
    }

}
