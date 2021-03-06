<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        $user = $request->user();

        if($user && $user->role_id == 1 || $user->role_id == 2 || $user->role_id == 3 || $user->role_id == 4 ){
            return $next($request);
        }

        return redirect()->route('home')->with('error','You have no admin access');
    }
}
