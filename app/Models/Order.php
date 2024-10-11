<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['customerID', 'employeeID', 'productID', 'orderTotal', 'orderDate'];

    // Relación muchos a uno con Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerID');
    }

    // Relación muchos a uno con Employee
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employeeID');
    }

    // Relación muchos a uno con Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'productID');
    }
}
