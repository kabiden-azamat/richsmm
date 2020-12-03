<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $uri = $request->getRequestUri();
                $prefix = (explode('/', $uri))[1];
                if($prefix == config('app.panel_prefix') && Route::has('admin_home'))
                {
                    if(Route::getCurrentRoute()->getName() != 'admin_home')
                    {
                        return redirect(route('admin_home'));
                    }
                }
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
