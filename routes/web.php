<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WebinarController;

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

Route::get('/', function (){
    return view('home');
});
Route::get('/about', function(){
    return view('about');
});
Route::get('/home',function(){
    return view('home');
});

Route::get('/webinar',[WebinarController::class,'index']);
Route::get('/register-webinar',[WebinarController::class,'register']);

Route::get('/login',[LoginController::class,'index']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register', [RegisterController::class, 'store']);
