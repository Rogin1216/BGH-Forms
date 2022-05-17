<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class indexMiddleware
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
        // dd('indexMiddleware');
        // $username = $request->input('email');
        // $password = $request->input('password');
        // $post =  Http::post("http://192.168.7.188:8040/api/login",[
        //     'username' => $username,
        //     'password' => $password
        // ]);
        // dd($username);
        // // $contents = $post->getBody()->getContents(); // token or error
        // // $data = json_decode($post->getBody(), true); // returns an array
        // $jsonpost =json_decode($post->getStatusCode());
        // // $header = ($post->getHeader('Content-Type')[0]);
        // // dd($post);
        // if($jsonpost == 200 ){
        //     return redirect("/index");
        // }else
        // {
        //     return redirect("/login");
        // }
        return redirect("/index");
        // return redirect()->intended(RouteServiceProvider::HOME);
        
        return $next($request);
    }
}
