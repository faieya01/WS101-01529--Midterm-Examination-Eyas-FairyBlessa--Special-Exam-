<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [App\Http\Controllers\RentalCarsController::class, 'SignUp']);
Route::get('SignUp', [App\Http\Controllers\RentalCarsController::class, 'SignUp' ]);
Route::get('LogIn', [App\Http\Controllers\RentalCarsController::class, 'LogIn' ]);
Route::get('Dashboard', [App\Http\Controllers\RentalCarsController::class, 'Dashboard' ]);
Route::get('Transaction', [App\Http\Controllers\RentalCarsController::class, 'Transaction' ]);
Route::get('Settings', [App\Http\Controllers\RentalCarsController::class, 'Settings' ]);
