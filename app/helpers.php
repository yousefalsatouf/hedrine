<?php
use Illuminate\Support\Facades\Route;

if (!function_exists('menuOpen')) {
    function menuOpen(...$routes)
    {
        foreach ($routes as $route) {
            if(Route::currentRouteName() === $route) return 'menu-open';
        }
    }
}
if (!function_exists('currentRouteActive')) {
    function currentRouteActive(...$routes)
    {
        foreach ($routes as $route) {
            if(Route::currentRouteName() === $route) return 'active';
        }
    }
}
