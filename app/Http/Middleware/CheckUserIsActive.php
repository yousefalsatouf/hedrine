<?php

namespace App\Http\Middleware;

use Closure;
//DD 2-05-20 permet d'utiliser les sweet-alert, si pas présent, pas d'alerte
use RealRashid\SweetAlert\Facades\Alert;

class CheckUserIsActive
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
        //DD 2/05/20 ce middleware customisé permet de vérifier que le champ is_active est bien supérieur à 0, autrmenet, c'est que Florence n'a pas activé le compte, on retourne alors sur la page d'accueil.
        if(auth()->user()->is_active != 0)
        { 
            return $next($request); 
        } 
        

        //DD 2/05/20 si is_active est égal à 0, c'est qu'un admin n'a pas encore activé le compte, je lance donc une sweet-alert
        Alert::error('Votre compte n\'est pas actif !', 'Votre compte est en attente d\'activation par un administrateur du site');
        
        return redirect('/'); 
        

    }

}
