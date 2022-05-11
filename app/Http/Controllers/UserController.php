<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class UserController extends Controller
{
    function index()
    {
        return Http::post("http://192.168.7.188:8040/api/login");
    }
    function loginform(){
        dd('asdf');
        $collection = Http::get("http://192.168.7.188:8040/api/login");
        return view('users',['collection'=>$collection['data']]);

    }
    function loginSuccess(){
        return Http::post("http://192.168.7.188:8040/api/login");
    }
}
