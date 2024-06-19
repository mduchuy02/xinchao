<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DemoController;
=======
>>>>>>> 5a456c77dafe5cac806dbd5907b68b5524d35ed4

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

<<<<<<< HEAD

Route::get('/', function () {
    $sach = DB::table('book')->get();
    // dd($sach);
    return view('welcome', ['data' => $sach]);
});

// route::get('/san-pham',function(){
//     $id = ['id'=>1, 'name'=>'Duc huy'];
//     return view('sanpham',['info'=>$id]);
// });
route::get('/dang-nhap', function () {
    return view('dangnhap');
});
route::get('/dang-ky', function () {
    return view('dangky');
});

// =========================== Buoi 5
route::get('/list-book', [BookController::class, 'danhsach']);
route::get('/list-book2', [BookController::class, 'index']);
route::get('/chi-tiet-sach/{id}', [BookController::class, 'show']);

// =========================== Buoi 6
Route::get('/san-pham', function () {
    return view('user.sanpham'); // load views/user/sanpham.blade.php
});


/// 
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{ma}', [CategoryController::class, 'show']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::put('/category/update/{id}', [CategoryController::class, 'update']);
Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy']);
Route::post('/category', [CategoryController::class, 'store']);
//
Route::get('/book', [BookController::class, 'index']);
Route::get('/book/create', [BookController::class, 'create']);
/*
Tao bookController, Viet ham Index
Tao Book model
*/
//=========================
Route::get('/demo1', [DemoController::class, 'f1']);
Route::get('/demo2', [DemoController::class, 'f2']);
Route::get('/demo3', [DemoController::class, 'f3']);
Route::get('/danh-muc/{slug}.html', [DemoController::class, 'f4']);
Route::get('/nha-xuat-ban/{id}', [DemoController::class, 'f5']);
//====================

Route::get('/demo21', [DemoController::class, 'f21']);
Route::get('/demo22', [DemoController::class, 'f22']);

Route::get('/search', [DemoController::class,'search']);

Route::get('/pub', [DemoController::class,'pub']);
Route::post('/pub', [DemoController::class,'storePub']);
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 5a456c77dafe5cac806dbd5907b68b5524d35ed4
