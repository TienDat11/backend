<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Test database connection



Route::prefix('user')->name('user.')->group(function() {
    Route::get('/',[UsersController::class,'index'])->name('index');
    Route::get('/add',[UsersController::class,'add'])->name('add');
    Route::post('/add',[UsersController::class,'PostAdd'])->name('postAdd');
    Route::get('/update/{id}',[UsersController::class,'edit'])->name('edit');
    Route::post('/update/{id}',[UsersController::class,'update'])->name('update');
    Route::get('/delete/{id}',[UsersController::class,'view'])->name('view');
    Route::post('/delete/{id}',[UsersController::class,'delete'])->name('delete');
});
