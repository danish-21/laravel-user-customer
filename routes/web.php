<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// routes/web.php

Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('user-customer', [CustomerController::class,'showUserCustomerList'])->name('user-customer.list');
Route::post('customers', [CustomerController::class, 'store'])->name('customer.store');


