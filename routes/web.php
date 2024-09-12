<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('welcome');
});

Route::middleware([
    AdminMiddleware::class
])->group(function(){
    Route::get('admins.admin', function(){
        return view('admins.admin');
    })->name('admins.admin');
});

Route::get('logout', [ViewController::class, 'logout'])->name('logout');
Route::get('home', [ViewController::class, 'home'])->name('home');
Route::get('ouroffers', [ViewController::class, 'ouroffers'])->name('ouroffers');
Route::get('specifics', [ViewController::class, 'specifics'])->name('specifics');
Route::get('apply1', [ViewController::class, 'apply1'])->name('apply1');
Route::get('apply2', [ViewController::class, 'apply2'])->name('apply2');
Route::get('admin', [ViewController::class, 'admin'])->name('admin');


Route::get('login', [ViewController::class, 'login'])->name('login');
Route::get('registration', [ViewController::class, 'registration'])->name('registration');
Route::get('forgotten-password', [ViewController::class, 'forgottenpassword'])->name('forgottenpassword');
Route::get('otp-code', [ViewController::class, 'checkotpcode'])->name('otpcode');
Route::get('new-password', [ViewController::class, 'newpassword'])->name('newpassword');






Route::post('/registration', [AuthController::class, 'registration'])->name('registration.process');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/forgotten-password', [AuthController::class, 'forgottenpassword'])->name('forgottenpassword.process');
Route::post('otp-code', [AuthController::class, 'checkotpcode'])->name('otpcode.process');
Route::post('new-password', [AuthController::class, 'newpassword'])->name('newpassword.process');



