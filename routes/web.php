<?php

use Illuminate\Support\Facades\Artisan;
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


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});



Route::get('/jury','Jury\JuryControllers@index')->name('index.jury');

Route::get('/jury/appreciation','Jury\JuryControllers@appreciation')->name('jury.appreciation');

Route::get('/jury/appreciation/note/{id}','Jury\JuryControllers@notes')->name('jury.note');

Route::get('/jury/deconnexion','Jury\JuryControllers@deconnexion')->name('jury.deconnecter');

Route::post('/jury/connexion','Jury\JuryControllers@connexion')->name('connexion.jury');

Route::post('/administrateur/admis/validation','Admin\AdminControllers@rendez_vous')->name('rendez.part');

Route::get('/administrateur/dossier/{id}','Admin\AdminControllers@dossier')->name('dossier.perso');

Route::post('administrateur/dossier/etat','Admin\AdminControllers@etat')->name('dossier.etat');

Route::get('administrateur/admis','Admin\AdminControllers@admis')->name('admin.admis');
