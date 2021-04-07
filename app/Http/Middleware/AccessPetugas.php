<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class AccessPetugas
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

        if (Auth::user()->hasAnyRole('admin')) {
            return $next($request);
        }

        return redirect('akses-error');
    }

}
