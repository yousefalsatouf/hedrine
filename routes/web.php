<?php

use App\Http\Controllers\PostController;
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
})->name('welcome');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/logout', 'SessionController@destroy')->name('logout');

//DD 2 mai 2020 permet d'indiquer qu'un mail va être envoyé à la personne qui s'enregistre pour la première fois sur hedrine pour vérifier son mail
Auth::routes(['verify' => true]);

//DD 2/5/20 pour atteindre la première page du site (home), il faut que le user ait vérifié son adresse mail en cliquant sur le lien reçu à cette dernière (->middleware('verified');)
//J'ai créé un middleware nommé checkuserisactive qui permet de vérifier si le user a été activé par un admin (Florence par exemple)
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified', 'checkuserisactive');

Route::get('/test',function(){
    return view("auth/usernotvalidated.blade.php");
});

Route::get('/master', function () {
    return view("layouts/master_dashboard");
});

//N.Thierry pour atteindre la page de herbe
Route::get('/herb','HerbController@index')->name('herbs.index');
Route::get('herb/details_plante/{id}','HerbController@details')->name('herbs.details');

//N.Thierry pour atteindre la page de drugs
Route::get('/drug','DrugController@index')->name('drugs.index');
Route::get('drug/details_drug/{id}','DrugController@details')->name('drugs.details');

//N.Thierry pour atteindre la page de targets
Route::get('/target','TargetController@index')->name('targets.index');
Route::get('target/details_target/{id}','TargetController@details')->name('targets.details');

//DD pour atteindre le formulaire d'ajout d'un poste
Route::get('posts/add_post_form','PostController@show_form')->name('posts.show_form');
Route::post('posts/add_post','PostController@create')->name('posts.create');

Route::get('drug_families/details/{id}','DrugFamilyController@details')->name('drugs.family');



//N.Thierry Admin route
Route::view('admin','admin.layout');

Route::prefix('admin')->middleware('admin')->namespace('Back')->group(function() {

    Route::name('admin')->get('/','AdminController@index');
    Route::name('post.update')->put('post', 'PostController@update');
    Route::name('post.edit')->get('post', 'PostController@edit');
    Route::name('post.details')->get('post', 'PostController@details');
    Route::resource('post', 'PostController')->parameters([
        'post' => 'post'
      ]);
    Route::name('post.destroy.alert')->get('post/{post}', 'PostController@alert');

    // Route pour drugs
    Route::name('drug.update')->put('drug', 'DrugController@update');
    Route::name('drug.edit')->get('drug', 'DrugController@edit');
    Route::name('drug.index')->get('drug', 'DrugController@index');

    Route::name('drug.details')->get('drug', 'DrugController@details');
    Route::resource('drug', 'DrugController')->parameters([
        'drug' => 'drug'
      ]);
    Route::name('drug.destroy.alert')->get('drug/{drug}', 'DrugController@alert');
});

//N.Thierry : Les routes pour interagir entre les plante et DCI

// Route::name('hinteractions.hdi')->get('hinteraction','HinteractionController@index');
Route::get('hinteractions/hdi','HinteractionController@index')->name('hinteractions.hdi');
Route::get('hinteractions/hti','HinteractionController@show_mecanisme_form')->name('hinteractions.hti');
