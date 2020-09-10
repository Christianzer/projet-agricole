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

Route::get('/', function () {
    return view('welcome');
})->name('acceuil');

Route::get('/concours','Inscription\InscriptionControllers@index')->name('candidat');
Route::resource('/concours/inscription','InscriptionControllers');

Route::get('/contact',function () {
    return view('Inscription.contact');
})->name('contact');

Route::get('/finish',function () {
    return view('Inscription.finish');
})->name('finish');

Route::get('/candidat/connexion','InscriptionControllers@connexion')->name('login');

Route::post('candidat/connexion/login','InscriptionControllers@connecter')->name('conect');

Route::get('/administrateur','Admin\AdminControllers@index')->name('admin.index');
