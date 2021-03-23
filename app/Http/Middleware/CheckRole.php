<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class CheckRole extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login');
        } else if (!Auth::user()->role == "super_admin") {
            return redirect('/super_admin');
        } else if (!Auth::user()->role == "admin") {
            return redirect('/admin');
        }
    }
}
