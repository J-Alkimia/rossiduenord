<?php

namespace App\Http\Middleware;

use Closure;

class IsFinancial
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
        if(auth()->user()->is_financial == 1){
            return $next($request);
        }
        return redirect('home')->with('error', "Non hai i permessi di accesso!");
    }
}
