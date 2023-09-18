<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
Route::prefix('products')->name('product.')->group(function(){
    Route::get('/',[ProductController::class,'index'])->name('index');
    Route::get('/create',[ProductController::class,'create'])->name('create');
    Route::post('/create',[ProductController::class,'store'])->name('create');
    Route::get('/show{id}',[ProductController::class,'show'])->name('show');
    Route::get('/edit{id}',[ProductController::class,'edit'])->name('edit');
    Route::put('/edit{id}',[ProductController::class,'update'])->name('update');
    Route::get('/destroy{id}',[ProductController::class,'destroy'])->name('destroy');
});


