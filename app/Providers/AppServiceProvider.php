<?php

namespace App\Providers;

use App\Drug;
use App\Herb;
use App\DrugFamily;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;

use App\Post;
use App\Reference;
use App\Target;
use App\TargetType;
use App\AtcLevel4;
use App\HerbForm;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view) {

            $view->with('posts',Post::orderBy('important','desc')->Take(20)->get());
        });
        View::composer('*', function($view) {

            $view->with('herbs',Herb::orderBy('name')->get());
        });
        View::composer('*', function($view) {

            $view->with('drugs',Drug::orderBy('name')->get());
        });
        View::composer('*', function($view) {

            $view->with('targets',Target::all());
        });

        view()->share('postsToValidate', Post::whereColumn('created_at','!=', 'updated_at')->get());

        View::composer('*', function($view) {

            $view->with('references',Reference::all());
        });

        View::composer('*', function($view) {

            $view->with('drug_families',DrugFamily::all());
        });

        View::composer('*', function($view) {

            $view->with('target_types',TargetType::all());
        });

        View::composer('*', function($view) {

            $view->with('atc_level_4s_ids',AtcLevel4::all());
        });

        View::composer('*', function($view) {

            $view->with('herb_forms',HerbForm::all());
        });


        View::composer('layouts.master_dashboard', function ($view) {
            $title = config('titles.' . Route::currentRouteName());
            $view->with(compact('title'));
        });

    }
}
