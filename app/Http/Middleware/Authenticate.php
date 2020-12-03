<?php

namespace App\Http\Middleware;

use http\Env\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            $uri = $request->getRequestUri();
            $prefix = (explode('/', $uri))[1];
            if($prefix == config('app.panel_prefix') && Route::has('admin_login'))
            {
                if(Route::getCurrentRoute()->getName() != 'admin_login')
                {
                    return route('admin_login');
                }
            }
            if(Route::has('home_page'))
                return route('home_page');
            return '/';
        }
    }
}
