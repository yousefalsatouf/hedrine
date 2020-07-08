<?php

namespace App\Providers;

use App\Drug;
use App\Herb;
use App\DrugFamily;
use App\TemporaryData;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

use App\Post;
use App\Atc;
use App\Reference;
use App\Target;
use App\TargetType;
use App\AtcLevel4;
use App\HerbForm;
use App\Hinteraction;
use App\Dinteraction;

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

        /*-------------------- Posts ---------------------- */

        View::composer('*', function ($view) {

            $view->with('posts', Post::orderBy('important', 'desc')
                ->orderBy('created_at', 'desc')
                ->Take(20)->get());
        });

        /*-------------------- TargetType ---------------------- */

        View::composer('*', function ($view) {

            $view->with('target_types', TargetType::all());
        });

        /*--------------------  Atc ------------------------------ */

        View::composer('*', function ($view) {

            $view->with('atcs', Atc::all());
        });
        /*--------------------  HerbForm ------------------------------ */

        View::composer('*', function ($view) {

            $view->with('herb_forms', HerbForm::all());
        });

         /*--------------------  DrugFamily ------------------------------ */

        View::composer('*', function ($view) {

            $view->with('drug_families', DrugFamily::all());
        });

        /*-------------------- Drugs ---------------------- */

        view()->composer('*', function ($view) {
            $view->with('noValidDrugs',Drug::where('validated', '<=', 0)->get());
        });
        View::composer('*', function ($view) {

            $view->with('drugs', Drug::orderBy('name')->get());
        });

        /*-------------------- Herbs ---------------------- */

        View::composer('*', function ($view) {

            $view->with('herbs', Herb::orderBy('name')->get());
        });

        view()->composer('*', function ($view) {
            $view->with('validatedHerb',Herb::where('validated',1)->get());
        });
        view()->composer('*', function ($view) {
            $view->with('noValidCount',Herb::where('validated',0)->get());
        });

        view()->composer('partials.table-add-del-view', function ($view) {
            $view->with('waitingHerb',auth()->user()->herbs()->where('validated',0)->get());
        });

        view()->composer('partials.modifier-plante', function ($view) {
            $view->with('modifierHerb',auth()->user()->herbs()->where('validated',-1)->get());
        });

        view()->composer('*', function ($view) {
            $counter = DB::table('temporary_data')->where('type_table', 'herbs')->count() + DB::table('herbs')->where('validated', 0)->count();
            //dd($counter);
            $view->with('noValidHerbsCounter', $counter);
        });


        /*-------------------- References ---------------------- */

        view()->composer('*', function ($view) {
            $view->with('noValidReferences',Reference::where('validated', '<=', 0)->count());
        });
        view()->composer('*', function ($view) {
            $view->with('validReferences',Reference::where('validated', 1)->get());
        });
        View::composer('*', function ($view) {

            $view->with('references', Reference::all());
        });

         /*-------------------- Targets ---------------------- */

         view()->composer('*', function ($view) {
            $view->with('noValidTargets',Target::where('validated', '<=', 0)->count());
        });
        view()->composer('*', function ($view) {
            $view->with('validTargets',Target::where('validated', 1)->get());
        });
        View::composer('*', function ($view) {

            $view->with('targets', Target::all());
        });

        /*-------------------- Hinteractions ---------------------- */

        view()->composer('*', function ($view) {
            $view->with('noValidHinteractions',Hinteraction::where('validated', '<=', 0)->count());
        });
        view()->composer('*', function ($view) {
            $view->with('validatedHinteractions',Hinteraction::where('validated',1)->get());
        });

        /*-------------------- Dinteractions ---------------------- */

        view()->composer('*', function ($view) {
            $view->with('validatedDinteractions',Dinteraction::where('validated',1)->get());
        });
        view()->composer('*', function ($view) {
            $view->with('noValidDinteractions',Dinteraction::where('validated', '<=', 0)->count());
        });


        /*-------------------- Dashboard ---------------------- */

        View::composer('dashboard.layout', function ($view) {
            $title = config('titles.' . Route::currentRouteName());
            $notifications = auth()->user()->unreadNotifications()->count();
            $newHerbs = auth()->user()->unreadNotifications()->where('type','App\Notifications\NewHerb')->where('data->validated','<= 0')->count();
            $newDrugs = auth()->user()->unreadNotifications()->where('type','App\Notifications\NewDrugs')->where('data->validated','<= 0')->count();
            $newTargets = auth()->user()->unreadNotifications()->where('type','App\Notifications\NewTarget')->count();
            $newUsersCount = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->whereNull('denied')->count();
            $mostRecentUsers = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->whereNull('denied')->orderBy('email_verified_at', 'DESC')->paginate(5);
            $allNewUsers = auth()->user()->whereNotNull('email_verified_at')->where('is_active', '=', 0)->whereNull('denied')->get();
            $view->with(compact('title','notifications','newHerbs','newDrugs','newTargets','newUsersCount', 'mostRecentUsers', 'allNewUsers'));
        });

        //view()->composer('dashboard.layout', \App\Http\ViewComposers\HerbComposer::class);
    }
}
