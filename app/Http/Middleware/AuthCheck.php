<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;



class AuthCheck 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if(!Session()->has('loginId')){ 
            // dd($request->session()->has('loginId'));
            
        if($request->session()->has('loginId')){
            
            return $next($request);
            // if(auth()->check()){
            // return redirect('login');
            // return $next($request);
        }
        // else{
            // return response()->view('auth.login');
            return redirect("/login")->with('message', 'Login Failed');

    }
} 
