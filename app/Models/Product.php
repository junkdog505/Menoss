<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'price'];

    // Relación uno a muchos con Order
    public function orders()
    {
        return $this->hasMany(Order::class, 'productID');
    }
}
