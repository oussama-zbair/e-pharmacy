<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\epharmacontroller;

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
    return view('auth.epharmacie');
});
Route::get('/inscription',[epharmacontroller::class,'inscription']);
Route::get('/registration',[epharmacontroller::class,'registration']);
Route::post('/register-user',[epharmacontroller::class,'registeruser'])->name('register-user');
Route::post('/login-user',[epharmacontroller::class,'loginuser'])->name('login-user');
Route::get('/dashboard',[epharmacontroller::class,'dashboard']);
Route::get('/logout',[epharmacontroller::class,'logout']);
Route::get('/pharmap',[epharmacontroller::class,'pharmap']);
Route::get('/userinfo',[epharmacontroller::class,'userinfo']);
Route::get('/infospersonnel',[epharmacontroller::class,'infospersonnel']);
Route::get('/infopharma',[epharmacontroller::class,'infopharma']);
Route::get('/home',[epharmacontroller::class,'home']);
Route::get('/findpharma',[epharmacontroller::class,'findpharma']);
Route::get('/menu',[epharmacontroller::class,'menu']);
Route::get('/dashboard-admin',[epharmacontroller::class,'showadmin'])->name('dashboard-admin');
Route::get('/dashboard-user',[epharmacontroller::class,'showuser'])->name('dashboard-user');
Route::get('/dashboard-pharma',[epharmacontroller::class,'showpharma'])->name('dashboard-pharma');
Route::get('/pharmalist',[epharmacontroller::class,'showpharmalist'])->name('pharmalist');
Route::delete('/delete.epharma/{id}',[epharmacontroller::class,'delete_epharma'])->name('delete.epharma');
Route::post('/register-user1',[epharmacontroller::class,'registeruser1'])->name('register-user1');
Route::get('/pharmacie',[epharmacontroller::class,'showpharmacie'])->name('showpharmacie');
Route::post('/addpharmacie',[epharmacontroller::class,'addpharmacie'])->name('addpharmacie');
Route::get('/commande',[epharmacontroller::class,'commande']);
Route::post('/addcommande',[epharmacontroller::class,'addcommande'])->name('addcommande');
Route::get('/rejoindrepharmacie',[epharmacontroller::class,'rejoindrepharmacie']);
Route::post('/pharmajoin',[epharmacontroller::class,'rejoindre'])->name('joinpharmacie');
Route::get('/pharmacmd',[epharmacontroller::class,'pharmacmd']);
Route::post('/validation',[epharmacontroller::class,'validation'])->name('validation');
Route::delete('/delete.pharma/{id}',[epharmacontroller::class,'delete_pharmacie'])->name('delete.pharmacie');

