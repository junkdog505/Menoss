<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('orderID'); // Campo ID
            $table->foreignId('customerID')->constrained('customers', 'customerID'); // Referencia a customerID
            $table->foreignId('employeeID')->constrained('employees', 'employeeID'); // Referencia a employeeID
            $table->foreignId('productID')->constrained('products', 'productID'); // Referencia a productID
            $table->decimal('orderTotal', 10, 2);
            $table->date('orderDate');
            $table->timestamps();
        });
    }
    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
