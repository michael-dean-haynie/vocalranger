<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotSuperAdmin
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
        if (!Auth::check() && !Auth::user()->super_admin){
            return redirect('root');
        }
        return $next($request);
    }
}
