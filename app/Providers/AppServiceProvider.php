<?php

namespace App\Providers;

use App\Drug;
use App\Herb;
use App\DrugFamily;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        View::composer('*', function ($view) {

            $view->with('posts', Post::orderBy('important', 'desc')
                ->orderBy('created_at', 'desc')
                ->Take(20)->get());
        });
        View::composer('*', function ($view) {

            $view->with('herbs', Herb::orderBy('name')->get());
        });

        view()->composer('*', function ($view) {
            $view->with('noValidCount',Herb::where('validated',false)->get());
        });
        view()->composer('*', function ($view) {
            $view->with('validatedHerb',Herb::where('validated',true)->get());
        });

        View::composer('*', function ($view) {

            $view->with('drugs', Drug::orderBy('name')->get());
        });


        View::composer('*', function ($view) {

            $view->with('targets', Target::all());
        });

       // view()->share('postsToValidate', Post::whereColumn('created_at','!=', 'updated_at')->orderBy('updated_at','desc')->get());


        View::composer('*', function ($view) {

            $view->with('references', Reference::all());
        });

        View::composer('*', function ($view) {

            $view->with('target_types', TargetType::all());
        });

        View::composer('*', function ($view) {

            $view->with('atc_level_4s', AtcLevel4::all());
        });

        View::composer('*', function ($view) {

            $view->with('herb_forms', HerbForm::all());
        });

        View::composer('*', function ($view) {

            $view->with('drug_families', DrugFamily::all());
        });

        view()->composer('*', function ($view) {
            $view->with('noValidCount',Herb::where('validated',false)->get());
        });

        view()->composer('*', function ($view) {
            $view->with('validatedHerb',Herb::where('validated',true)->get());
        });

        view()->composer('*', function ($view) {
            $view->with('noValidCount',Herb::where('validated',false)->get());
        });
        view()->composer('*', function ($view) {
            $view->with('validatedHerb',Herb::where('validated',true)->get());
        });


        View::composer('dashboard.layout', function ($view) {
            $title = config('titles.' . Route::currentRouteName());
            $notifications = auth()->user()->unreadNotifications()->count();
            $newHerbs = auth()->user()->unreadNotifications()->where('type','App\Notifications\NewHerb')->get();
            $newDrugs = auth()->user()->unreadNotifications()->where('type','App\Notifications\NewDrug')->count();
            $newTargets = auth()->user()->unreadNotifications()->where('type','App\Notifications\NewTarget')->count();
            $newUsersCount = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->whereNull('denied')->count();
            $mostRecentUsers = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->whereNull('denied')->orderBy('email_verified_at', 'DESC')->paginate(5);
            $allNewUsers = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->whereNull('denied')->get();
            $view->with(compact('title','notifications','newHerbs','newDrugs','newTargets','newUsersCount', 'mostRecentUsers', 'allNewUsers'));
        });

        //view()->composer('dashboard.layout', \App\Http\ViewComposers\HerbComposer::class);
    }
}
