<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;



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
Route::get('/', [ContactController::class, 'index']);
Route::get('/', [AuthController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login'); // ←  profile.blade.php を表示
});

Route::get('/mypage/profile', function () {
    return view('auth.edit'); // ←  edit.blade.php を表示
});

Route::get('/', function () {
    return view('auth.list'); // ←  list.blade.php を表示
});