<?php

namespace App\Http\Middleware;

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
        if(!Session()->has('loginId')){ 
        // if(!$request->session()->has('loginId')){
            // dd('loginId');
            // return redirect('login');
            return $next($request);
        }
        else{
            // dd($next($request));

        return $next($request);
            // return redirect('login');


        }
    }
    // {
    //     if(Session()->has('loginId')){
    //         return $next($request);
    //     }
   
    //     return redirect("/login");
    // }
}
