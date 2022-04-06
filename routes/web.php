<?php

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
//trang chủ
Route::get('/', function () {
    return view('index');
});
//danh sach phim
Route::get('/movie-list', function () {
    return view('movie-list');
});
//khuyên mãi
Route::get('/events', function () {
    return view('events');
});
//liên hệ
Route::get('/contact', function () {
    return view('contact');
});
// chi tiết phim
Route::get('/movie-details', function () {
    return view('movie-details');
});
// chọn ghế
Route::get('/movie-seat-plan', function () {
    return view('movie-seat-plan');
});
// thanh toan
Route::get('/movie-checkout', function () {
    return view('movie-checkout');
});
// đăng nhập
Route::get('/sign-in', function () {
    return view('sign-in');
});
//dang ki
Route::get('/sign-up', function () {
    return view('sign-up');
});
