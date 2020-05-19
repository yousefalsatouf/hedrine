<?php

namespace App\Providers;

use App\Drug;
use App\Herb;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Post;
use App\Target;

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

            $view->with('posts',Post::orderBy('created_at','desc')->get());
        });
        View::composer('*', function($view) {

            $view->with('herbs',Herb::all());
        });
        View::composer('*', function($view) {

            $view->with('drugs',Drug::all());
        });
        View::composer('*', function($view) {

            $view->with('targets',Target::all());
        });
    }
}
