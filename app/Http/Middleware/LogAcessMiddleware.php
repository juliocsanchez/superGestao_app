<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcess;

class LogAcessMiddleware
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
        $ip = $request ->server->get('REMOTE_ADDR');
        $rota = $request->getRequestUri('');
        LogAcess::create(['log'=>"$ip access the route $rota"]);
        
        $mudarStatusCode = $next($request);
        $mudarStatusCode->setStatusCode(201,'modificando dado');
        return $mudarStatusCode;
    }
}
