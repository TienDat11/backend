<?php

use App\Http\Controllers\Admin\Category;
use App\Http\Controllers\DashBoardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('admin') -> group(function(){
    Route::get('/index',[Category::class,'index']);
});

Route::get('/', [DashBoardController::class, 'index']);

// Route::get('/view',function(){
//     $title = "CGC3 Laravel";
//     $content = "Content";
//     $data = [
//         'titleData' => $title,
//         'contentData' => $content
//     ];
//     return view('user/index',$data);
// });

Route::get('/index',[UserController::class,'index']);
