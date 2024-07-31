<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,'index']);

Route::post('/save',[HomeController::class,'save'])->name('save');

Route::get('/edit/{id}',[HomeController::class,'edit'])->name('edit');

Route::put('/updata/{id}',[HomeController::class,'updata'])->name('updata');

Route::get('/delete/{id}',[HomeController::class,'delete'])->name('delete');
