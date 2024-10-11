<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers'; 
    protected $primaryKey = 'customerID';
    public $incrementing = true; 
    protected $keyType = 'int'; 
    protected $fillable = [
        'firstName', 
        'lastName', 
        'dni',
        'birthDate', 
        'address', 
        'phone', 
        'photo', //porsiacaso xd
        'anniversary', 
        //'moneySpent',
        'email',
        'created', 
        'updated', 
    ];

    // Relación uno a muchos con Order
    public function orders()
    {
        return $this->hasMany(Order::class, 'customerID');
    }
}
