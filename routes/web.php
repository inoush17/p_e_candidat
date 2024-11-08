<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\RessourceController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('welcome');
});

// Route::middleware([
//     AdminMiddleware::class
// ])->group(function(){
    // });
    
Route::get('/admins.admin',[ViewController::class, 'admin'])->name('admins.admin');
Route::get('/admins/show/',[ViewController::class, 'show'])->name('admins.show');

Route::get('/perso.perso',[ViewController::class, 'perso'])->name('perso.perso');



Route::get('/index', [ViewController::class, 'index'])->name('index');
Route::get('/indexOffers', [ViewController::class, 'indexOffers'])->name('indexOffers');


Route::get('/list', [ViewController::class, 'list'])->name('ressource.list');
Route::get('/listOffers', [ViewController::class, 'listOffers'])->name('offers.list');

Route::get('/logout', [ViewController::class, 'logout'])->name('logout');
Route::get('/home', [ViewController::class, 'home'])->name('home');
Route::get('/specifics/{id}', [ViewController::class, 'specifics'])->name('specifics');
Route::get('/form1', [ViewController::class, 'form1'])->name('form1');
Route::get('/form2', [ViewController::class, 'form2'])->name('form2');
Route::get('/admin', [ViewController::class, 'admin'])->name('admin');
Route::get('/profil', [ViewController::class, 'profil'])->name('profil');


Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::get('/registration', [ViewController::class, 'registration'])->name('registration');
Route::get('/forgotten-password', [ViewController::class, 'forgottenpassword'])->name('forgottenpassword');
Route::get('/otp-code', [ViewController::class, 'checkotpcode'])->name('otpcode');
Route::get('/new-password', [ViewController::class, 'newpassword'])->name('newpassword');





Route::post('/profil', [AuthController::class, 'profil'])->name('profil.process');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration.process');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/forgotten-password', [AuthController::class, 'forgottenpassword'])->name('forgottenpassword.process');
Route::post('/otp-code', [AuthController::class, 'checkotpcode'])->name('otpcode.process');
Route::post('/new-password', [AuthController::class, 'newpassword'])->name('newpassword.process');
Route::post('/form1', [FolderController::class, 'form1'])->name('form1.process');
Route::post('form2', [FolderController::class, 'form2'])->name('form2.process');

Route::post('/upload-file', [FolderController::class, 'create'])->name('create.process');
Route::post('/offers', [FolderController::class, 'createOffers'])->name('createOffers.process');

Route::post('/folder/{id}/accept', [FolderController::class, 'accept'])->name('folder.accept');
Route::post('/folder/{id}/reject', [FolderController::class, 'reject'])->name('folder.reject');






