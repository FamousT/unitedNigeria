<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\UserController;

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
    return view('home');
});


Route::get('/test', [UserController::class, 'create']);
Route::post('/test', [UserController::class, 'store']);

Route::get("/register", [RegController::class,'index']);
Route::post("/register", [RegController::class,'register']);

Route::get("/registerUser", [UserController::class,'registerForm']);
Route::post("/registerUser", [UserController::class,'save']);

Route::get("/login", [UserController::class,'index']);
Route::post("/login", [UserController::class,'login']);

Route::get("/viewRegistrants", [RegController::class,'regList']);
Route::any("/filterRegistrants", [RegController::class,'filter']);
Route::any("/delete/{id}", [RegController::class,'destroy']);



Route::get('/logout', function () {
    session()->forget('user');
    return redirect('/');
});
