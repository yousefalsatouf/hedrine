<?php

namespace App\Http\Middleware;

use Closure;

class AdminEditor
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

        if($user && $user->role_id == 3){
            return $next($request);

        }

        return redirect()->route('home')->with('error','You have no admin access');
    }
}
