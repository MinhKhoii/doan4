<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\SanPhamController;
use App\Http\Controller\CartController;
use App\Http\Controller\LoaiSPController;
use App\Http\Controllers\NguoiDungController;

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



Route::controller(App\Http\Controllers\HomeController::class)->group(function(){
    Route::get('','index')->name('home');
    Route::get('/category/{id?}','category')->name('category');
    Route::get('/cart','cart')->name('cart');
    Route::get('/checkout','checkout')->name('checkout');
    Route::get('/login','login')->name('login');
    Route::get('/blog','blog')->name('blog');
    Route::get('/shopgrid/{id?}','shopgrid')->name('shopgrid');
    Route::get('/shopcart/{id?}','shopcart')->name('shopcart');
    Route::get('/shopdetails/{id?}','shopdetails')->name('shopdetails');
    Route::get('/blogdetails','blogdetails')->name('blogdetails');
    Route::get('/register','register')->name('register');
    Route::post('/login/register','dangky')->name('dangky');
    Route::get('/login','login')->name('loginuser');
    Route::get('/login/longout','longout')->name('longoutuser');
    Route::post('/login/check','checklogin')->name('checklogin');
    Route::post('/addbill/{id}','addbill')->name('addbill');
});

Route::controller(App\Http\Controllers\CartController::class)->group(function(){
    
    Route::get('cart',  'cartList')->name('cart.list');
    Route::post('cart', 'addToCart')->name('cart.store');
    Route::post('update-cart', 'updateCart')->name('cart.update');
    Route::post('remove', 'removeCart')->name('cart.remove');
    Route::post('clear', 'clearAllCart')->name('cart.clear');

});

Route::controller(App\Http\Controllers\SanPhamController::class)->group(function(){
    Route::get('/admin/sanpham/index','index')->name('/admin/sanpham/index');
    Route::get('/admin/sanpham/create','create')->name('/admin/sanpham/create');
    Route::post('/admin/sanpham/store','store')->name('/admin/sanpham/store');
    Route::get('/admin/sanpham/edit/{id}','edit')->name('/admin/sanpham/edit');
    Route::post('/admin/sanpham/update/{id}','update')->name('/admin/sanpham/update');
    Route::get('/admin/sanpham/delete/{id}','destroy')->name('/admin/sanpham/delete');
    Route::get('/admin/sanpham/read/{id}', 'show')->name('/admin/sanpham/show');
});

Route::controller(App\Http\Controllers\LoaiSPController::class)->group(function(){
    Route::get('/admin/loaisanpham/index','index')->name('index');
    Route::get('/admin/loaisanpham/create','create')->name('create');
    Route::post('/admin/loaisanpham/store','store')->name('store');
    Route::get('/admin/loaisanpham/edit/{id}','edit')->name('edit');
    Route::post('/admin/loaisanpham/update/{id}','update')->name('update');
    Route::get('/admin/loaisanpham/delete/{id}','destroy')->name('delete');
    Route::get('/admin/loaisanpham/read/{id}', 'show')->name('show');

});

Route::controller(App\Http\Controllers\NguoiDungController::class)->group(function(){
    Route::get('/admin/nguoidung/index','index')->name('/admin/nguoidung/index');
    Route::get('/admin/nguoidung/create','create')->name('/admin/nguoidung/create');
    Route::post('/admin/nguoidung/store','store')->name('/admin/nguoidung/store');
    Route::get('/admin/nguoidung/edit/{id?}','edit')->name('/admin/nguoidung/edit');
    Route::post('/admin/nguoidung/update/{id?}','update')->name('/admin/nguoidung/update');
    Route::get('/admin/nguoidung/delete/{id}','destroy')->name('/admin/nguoidung/delete');
    Route::get('/admin/nguoidung/read/{id}', 'show')->name('/admin/nguoidung/show');
    Route::get('/admin/nguoidung/viewlogin', 'viewlogin')->name('nguoidung.viewlogin');
    Route::get('/admin/nguoidung/login', 'login')->name('nguoidung.login');
    Route::get('/admin/nguoidung/logout', 'logout')->name('nguoidung.logout');

});

Route::controller(App\Http\Controllers\KhachHangController::class)->group(function(){
    Route::get('/admin/khachhang/index','index')->name('/admin/khachhang/index');
    Route::get('/admin/khachhang/create','create')->name('/admin/khachhang/create');
    Route::post('/admin/khachhang/store','store')->name('/admin/khachhang/store');
    Route::get('/admin/khachhang/edit/{id?}','edit')->name('/admin/khachhang/edit');
    Route::post('/admin/khachhang/update/{id?}','update')->name('/admin/khachhang/update');
    Route::get('/admin/khachhang/delete/{id}','destroy')->name('/admin/khachhang/delete');
    Route::get('/admin/khachhang/read/{id}', 'show')->name('/admin/khachhang/show');

});

Route::controller(App\Http\Controllers\NhaCungCapController::class)->group(function(){
    Route::get('/admin/nhacungcap/index','index')->name('/admin/nhacungcap/index');
    Route::get('/admin/nhacungcap/create','create')->name('/admin/nhacungcap/create');
    Route::post('/admin/nhacungcap/store','store')->name('/admin/nhacungcap/store');
    Route::get('/admin/nhacungcap/edit/{id?}','edit')->name('/admin/nhacungcap/edit');
    Route::post('/admin/nhacungcap/update/{id?}','update')->name('/admin/nhacungcap/update');
    Route::get('/admin/nhacungcap/delete/{id}','destroy')->name('/admin/nhacungcap/delete');
    Route::get('/admin/nhacungcap/read/{id}', 'show')->name('/admin/nhacungcap/show');

});

Route::controller(App\Http\Controllers\HoaDonBanController::class)->group(function () {
    Route::get('/admin/hoadonban', 'index')->name('hoadonban.index');
    Route::get('/admin/hoadonban/detail/{id}', 'detail')->name('hoadonban.detail');
    Route::get('/admin/hoadonban/xacnhan/{id}', 'xacnhan')->name('hoadonban.xacnhan');
    Route::get('/admin/hoadonban/xacnhandagiao/{id}', 'xacnhandagiao')->name('hoadonban.xacnhandagiao');
    Route::get('/admin/hoadonban/donhangcho', 'donhangcho')->name('donhangcho');
    Route::get('/admin/hoadonban/donhangdaban', 'donhangdaban')->name('donhangdaban');
});