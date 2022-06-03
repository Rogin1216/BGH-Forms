<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;


use phpDocumentor\Reflection\PseudoTypes\True_;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create(request $request)
    {
        // dd('create()');
        // $collection = Http::get("http://192.168.7.188:8040/api/login");
        // dd($collection);
        // return view('auth.login',['collection'=>$collection['data']]);
        return view('auth.login');

        // return Http::get("http://192.168.7.188:8040/api/login");
        // return $collection->json();
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // $adsf= Http::post("http://192.168.7.188:8040/api");
        // dd('adsf');
        // $request->authenticate(); 
        
        // $request->session()->regenerate();

        // Http::post("http://192.168.7.188:8040/api/login");
        // return redirect()->intended(RouteServiceProvider::HOME);
        // $username = $request->input('name');
        // $password = $request->input('password');
        // dd($username);
        // return Http::post("http://192.168.7.188:8040/api/login",[
        //     'username' => $username,
        //     'password' => $password
        // ]);
        $username = $request->input('email');
        $password = $request->input('password');
        // dd($username);
        $post =  Http::post("http://192.168.7.188:8040/api/login",[
            'username' => $username,
            'password' => $password
        ]);
        // $client = new GuzzleHttp\Client();
        // $user = ('GET', 'http://192.168.7.188:8040/api/login', [
        //     'auth' => ['user', 'pass']
        // ]);
        // dd($post);

        // $contents = $post->getBody()->getContents(); // token or error
        // $data = json_decode($post->getBody(), true); // returns an array
        $statusCode =json_decode($post->getStatusCode());
        // $statusCode =($post->getStatusCode());
        // $header = ($post->getHeader('Content-Type')[0]);
        // dd($statusCode);
        // if (Auth::check()) {
        //     // The user is logged in...
            
        // }
        // $request->session()->put('loginId', $username);  

        //         return redirect("/index");

        // --------------------
        if($username){
            if($statusCode == 200){
                // dd($username);
                $request->session()->put('loginId', $username);  
                // $user = Auth::username();
                // dd(auth()->check());
        // dd(auth()->$username);
        // dd(auth()->check());
                
                return redirect("/index");
            }else{
                
                return view("auth.login");
            }
        }else
        {
            return redirect("/login");
        }
        // --------------------


        // 4bghrmc
        // 4yw
                // $request->session()->put('loginId', $username);  
                // return redirect("/index");
    }
    // public function __construct()
    // {
    //     $this->middleware('loggedin');
    // }
 
    public function index(request $request){
        // dd('INDEX');
        $loginId = $request->session()->get('loginId');
        // dd($request->session()->get('loginId'));
        // if(!Session::has('loginId')){
            
        // }
        // else{
            
            return view('patients.index',)->with('loginId', $loginId);;
        // }
        // return redirect()->intended('home');
    }

    


    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        dd('adsf');
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
