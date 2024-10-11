<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('customers', CustomerController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return redirect()->route('customers.index'); // Cambia 'customers.index' por la ruta que desees mostrar.
// });
