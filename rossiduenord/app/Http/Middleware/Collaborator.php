<?php

namespace App\Http\Middleware;

use Closure;

class Collaborator
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
        if (Auth()->user()->role == 'collaborator') {
            return $next($request);
        }
        return redirect('login');
    }
}
