<?php

use App\Http\Controllers\ProductoController;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Route::resource('producto', ProductoController::class)->middleware('auth');

Auth::routes(['register'=>true, 'reset'=>false]);

Route::get('/home', [ProductoController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/', [ProductoController::class, 'index'])->name('home');
});

