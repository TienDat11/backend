<?php

use App\Http\Controllers\ProductsControllers;
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

Route::prefix('category' ) -> group(function(){
    Route::get('/', function(){
        return view('welcome');
    });
    Route::post('/formTest',function(){
        return 'Bạn đã thêm vào danh sách';
    });

    Route::delete('/formTest',function(){
        return 'Bạn đã xoá 1 sản phẩm';
    });
    Route::patch('/formTest',function(){
        return 'Hãy sửa sản phẩm';
    });

});

Route::prefix('products') -> group(function(){
    // Route::get('/',{ProductsControllers::class, 'index'}--> name('product.list'));
    Route::get('/', [ProductsControllers::class, 'index'])->name('product.list');
    Route::get('/edit/{id}',[ProductsControllers::class,'getProduct'])->name('get.list');
    Route::delete('/remove/{id}',[ProductsControllers::class,'removeProduct'])->name('remove.list');
    Route::post('/edit/{id}',[ProductsControllers::class,'updateProduct']);
    Route::get('/add',[ProductsControllers::class,'addProduct'])->name('product.add');
    Route::post('/add',[ProductsControllers::class,'handleProduct']);
});
