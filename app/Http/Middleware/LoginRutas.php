<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class LoginRutas
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
        if ($this->permiso()) {

        return $next($request);

        }
        Session::flash('error','No tiene los permisos para entrar a esta pagina');
        return redirect('/admin')->with('error','No tiene los permisos para entrar a esta pagina');
    
    
    
    
    }


    private function permiso(){
        return session()->get('tipo_usuario') == 1;
    }

}
