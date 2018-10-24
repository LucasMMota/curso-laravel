<?php

namespace App\Http\Middleware;

use Closure;

class ProdutoAdmin
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
        if ($request->session()->exists('login')) {
            $login = $request->session()->get('login');
            $isadmin = $login['isadmin'];
            if ($isadmin)
                return $next($request);
        }
        return redirect()->route('negado');
    }
}
