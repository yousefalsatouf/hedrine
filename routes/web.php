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

//Yousef for the filter searching

//here is the url for the char searching ...
Route::get('/herb/{char}', 'HerbController@filterByChar');


//N.Thierry pour atteindre la page de herbe
Route::get('/herb','HerbController@index')->name('herbs.index');
Route::get('herb/details_plante/{id}','HerbController@details')->name('herbs.details');

//N.Thierry pour atteindre la page de drugs
Route::get('/drug','DrugController@index')->name('drugs.index');
Route::get('drug/details_drug/{id}','DrugController@details')->name('drugs.details');
//Yousef for the filter searching
//here is the url for the char searching ...
Route::get('/drug/{char}', 'DrugController@filterByChar');


//N.Thierry pour atteindre la page de targets
Route::get('/target','TargetController@index')->name('targets.index');
Route::get('target/details_target/{id}','TargetController@details')->name('targets.details');

//Yousef for the filter searching
//here is the url for the char searching ...
Route::get('/target/{char}', 'TargetController@filterByChar');

//DD pour atteindre le formulaire d'ajout d'un poste
Route::get('posts/add_post_form','PostController@show_form')->name('posts.show_form');
Route::post('posts/add_post','PostController@create')->name('posts.create');

Route::get('drug_families/details/{id}','DrugFamilyController@details')->name('drugs.family');



//N.Thierry Admin route
Route::view('admin','admin.layout');

//Message
Route::middleware('ajax')->group(function () {
    Route::post('message', 'UserController@message')->name('message');
});
Route::prefix('admin')->middleware('admin')->namespace('Back')->group(function() {

    // Route pour Admins
    Route::name('admin')->get('/','AdminController@index');
    Route::get('/', 'AdminController@herbs')->name('admin.herbs');
    Route::prefix('herb')->group(function () {

        Route::middleware('ajax')->group(function() {
            Route::post('approve/{herb}','AdminController@approve')->name('admin.approve');
            Route::post('refuse','AdminController@refuse')->name('admin.refuse');
        });
    });

    //Pour Post
    Route::name('post.update')->put('post', 'PostController@update');
    Route::name('post.edit')->get('post', 'PostController@edit');
    Route::name('post.details')->get('post', 'PostController@details');
    Route::resource('post', 'PostController')->parameters([
        'post' => 'post'
      ]);
    Route::name('post.destroy.alert')->get('post/{post}', 'PostController@alert');

    //Route pour Posts Important
    Route::name('post.validate')->get('post/validate/{id}', 'PostController@validpost');

    // Route pour drugs
    Route::name('drug.update')->put('drug', 'DrugController@update');
    Route::name('drug.edit')->get('drug', 'DrugController@edit');
    Route::name('drug.index')->get('drug', 'DrugController@index');

    Route::name('drug.details')->get('drug', 'DrugController@details');
    Route::resource('drug', 'DrugController')->parameters([
        'drug' => 'drug'
      ]);
    Route::name('drug.destroy.alert')->get('drug/{drug}', 'DrugController@alert');

    // Route pour Drugs Family ..
    Route::name('drug_family.update')->put('drug_family', 'DrugFamilyController@update');
    Route::name('drug_family.edit')->get('drug_family', 'DrugFamilyController@edit');
    Route::name('drug_family.index')->get('drug_family', 'DrugFamilyController@index');
    Route::name('drug_family.show')->get('drug_family', 'DrugFamilyController@show');

    Route::name('drug_family.details')->get('drug_family', 'DrugFamilyController@details');
    Route::resource('drug_family', 'DrugFamilyController')->parameters([
        'drug_family' => 'drug_family'
      ]);
    Route::name('drug_family.destroy.alert')->get('drug_family/{drug_family}', 'HerbController@alert');

    //Route pour plante
    Route::name('herb.update')->put('herb', 'HerbController@update');
    Route::name('herb.edit')->get('herb', 'HerbController@edit');
    Route::name('herb.index')->get('herb', 'HerbController@index');
    Route::name('herb.show')->get('herb', 'HerbController@show');

    Route::name('herb.details')->get('herb', 'HerbController@details');
    Route::resource('herb', 'HerbController')->parameters([
        'herb' => 'herb'
      ]);
    Route::name('herb.destroy.alert')->get('herb/{herb}', 'HerbController@alert');

     //Route pour target
     Route::name('target.update')->put('target', 'TargetController@update');
     Route::name('target.edit')->get('target', 'TargetController@edit');
     Route::name('target.index')->get('target', 'TargetController@index');

     Route::name('target.details')->get('target', 'TargetController@details');
     Route::resource('target', 'TargetController')->parameters([
         'target' => 'target'
       ]);
     Route::name('target.destroy.alert')->get('target/{target}', 'TargetController@alert');

     // Route pour roles
    Route::name('role.update')->put('role', 'RoleController@update');
    Route::name('role.edit')->get('role', 'RoleController@edit');
    Route::name('role.index')->get('role', 'RoleController@index');

    Route::name('role.details')->get('role', 'RoleController@details');
    Route::resource('role', 'RoleController')->parameters([
        'role' => 'role'
      ]);
    Route::name('role.destroy.alert')->get('role/{role}', 'RoleController@alert');

    // Route pour Target Type
    Route::name('target_type.update')->put('target_type', 'TargetTypeController@update');
    Route::name('target_type.edit')->get('target_type', 'TargetTypeController@edit');
    Route::name('target_type.index')->get('target_type', 'TargetTypeController@index');

    Route::name('target_type.details')->get('force', 'TargetTypeController@details');
    Route::resource('target_type', 'TargetTypeController')->parameters([
        'target_type' => 'target_type'
      ]);
    Route::name('target_type.destroy.alert')->get('target_type/{target_type}', 'TargetTypeController@alert');

    // Reference pour references
    Route::name('reference.update')->put('reference', 'ReferenceController@update');
    Route::name('reference.edit')->get('reference', 'ReferenceController@edit');
    Route::name('reference.index')->get('reference', 'ReferenceController@index');

    Route::name('reference.details')->get('reference', 'ReferenceController@details');
    Route::resource('reference', 'ReferenceController')->parameters([
        'reference' => 'reference'
      ]);
    Route::name('reference.destroy.alert')->get('reference/{reference}', 'ReferenceController@alert');

    //pour les nouveau utilisateurs
    Route::name('newUser.request')->get('/list_user_requests', 'NotificationController@showNewUserRequests');
    Route::name('newSingleUser.request')->get('/single_user_requests/{id}', 'NotificationController@showSingleNewUserRequest');
    Route::name('activeUser')->get('/activated_user/{id}', 'NotificationController@activateNewUser');
    Route::name('denyingUser')->get('/denied_user/{id}', 'NotificationController@denyUser');
    Route::name('sendDenyingMsg')->post('/send_denying/{id}', 'NotificationController@SendDenyingMsg');

    // Notifications
     Route::name ('notification.')->prefix('notification')->group(function () {
        Route::name ('index')->get ('/', 'NotificationController@index');
        Route::name ('update')->patch ('{notification}', 'NotificationController@update');
        Route::name ('index_drugs')->get ('/index_drugs', 'NotificationController@show_drugs');
        Route::name ('index_targets')->get ('/index_targets', 'NotificationController@show_targets');
    });
    //Route Pour Les Alertes
    Route::name('alert.')->prefix('alert')->group(function() {

        Route::get('/','AlertsController@index')->name('index');
    });

});

//N.Thierry : Les routes pour interagir entre les plante et DCI

// Route::name('hinteractions.hdi')->get('hinteraction','HinteractionController@index');
Route::get('hinteractions/hdi','HinteractionController@index')->name('hinteractions.hdi');
Route::get('hinteractions/hti','HinteractionController@show_mecanisme_form')->name('hinteractions.hti');
