<?php

namespace App\Http\Middleware;

use Closure;

class Lector
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        if(Auth::check() && Auth::user()->role_id == 4){
            return $next($request);

        }

        return redirect()->route('welcome')->with('error','You have no admin access');
    }
}
