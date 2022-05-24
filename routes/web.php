<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserSetting\PermissionController;
use App\Http\Controllers\UserSetting\RoleController;
use App\Http\Controllers\UserSetting\UserSettingController;
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

Route::get('/', function () {
    return view('welcome');
})->name("/");

Route::get('/*', function (){
    return view('pages.error-404');
});

/* Authentication */
Route::get('/login',[AuthController::class,'login_page'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

/* Dashboard */
Route::get('/home',[HomeController::class,'index'])->name('home');

/* Setting */
Route::get('/permission',[PermissionController::class,'index'])->name('permission');
Route::get('/role',[RoleController::class,'index'])->name('role');
Route::get('/user',[UserSettingController::class,'index'])->name('user');

