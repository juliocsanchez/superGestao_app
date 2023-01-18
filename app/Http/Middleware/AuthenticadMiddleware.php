<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticadMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$metodo_autenticacao)
    {
        //return $next($request);
        echo $metodo_autenticacao;
        return Response('Acesso Negado! Rota exige autenticação!');
    }
}
