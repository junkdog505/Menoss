<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['firstName', 'lastName', 'birthDate', 'moneySpent', 'anniversary'];

    // Relación uno a muchos con Order
    public function orders()
    {
        return $this->hasMany(Order::class, 'customerID');
    }
}
