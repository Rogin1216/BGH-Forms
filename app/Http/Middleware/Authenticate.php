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
        

        // if(!$request->session()->has('loginId')){
        // // if($request->expectsJson()){
            
        //     // return '/login';
        //     return route('login');
        // }
        // dd($request->session());
        // dd($request->session()->has('loginId'));
        // dd(auth()->check());
        if(!$request->session()->has('loginId')){
            // dd('!request');
            // redirect ('login');
            return view("patients.index");
            // return '/index';
        }
        else{
            
            // dd('route(index)');
        // } 
        // else {
            // Auth::logout(); // user must logout before redirect them
            // return redirect()->guest('login');
        //   }
            // return view('patients.index');
            // redirect('/index');
            // return response()->view('patients.index');
            // return '/index';
        }

        
        // if(auth()->check()){
            // dd('route(index)');
        //     return route('login');
        // }
        // else{
            // dd('else');

        // }
        // elseif($request->session()->has('loginId')){
        //   dd('index');
        // }
        


    }
}
