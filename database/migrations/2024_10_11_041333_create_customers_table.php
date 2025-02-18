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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customerID'); 
            $table->string('firstName');
            $table->string('lastName');
            $table->unsignedInteger('dni')->unique();
            $table->date('birthDate');
            $table->string('address')->nullable(); 
            $table->string('phone')->nullable(); 
            $table->string('photo')->nullable(); 
            $table->decimal('moneySpent', 10, 2)->nullable();
            $table->date('anniversary')->nullable(); 
            $table->string('email')->unique(); 
            $table->timestamps(); 
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
