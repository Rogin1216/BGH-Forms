<?php

namespace App\Http\Middleware;

use Closure;
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
        // dd(!$request->session()->has('loginId'));
        if(!$request->session()->has('loginId')){
            // dd('loginId');
            // dd($request->session());
            // return redirect('login');
            return '/login';
        }
        else{
            // return ('index');
        }

        // dd($request->expectsJson());
        // dd($request);
        // if (!$request->expectsJson()) {
            // dd(!$request->expectsJson());
            // return route('login');
            // return ('login');
            // return redirect('/index');
        // }
    }
}
