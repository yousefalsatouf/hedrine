<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;
use RealRashid\SweetAlert\Facades\Alert;

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
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/logout', 'SessionController@destroy');

//DD 2 mai 2020 permet d'indiquer qu'un mail va être envoyé à la personne qui s'enregistre pour la première fois sur hedrine pour vérifier son mail
Auth::routes(['verify' => true]);

//DD 2/5/20 pour atteindre la première page du site (home), il faut que le user ait vérifié son adresse mail en cliquant sur le lien reçu à cette dernière (->middleware('verified');)
//J'ai créé un middleware nommé checkuserisactive qui permet de vérifier si le user a été activé par un admin (Florence par exemple)
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified', 'checkuserisactive');

Route::get('/test',function(){
    return view("auth/usernotvalidated.blade.php");
});



