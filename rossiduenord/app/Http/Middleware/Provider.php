<?php

namespace App\Http\Middleware;

use Closure;

class Provider
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
        if (Auth()->user()->role == 'provider') {
            return $next($request);
        }
        return redirect('login');
    }
}
