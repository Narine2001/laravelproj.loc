<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;

class LoginController extends Controller
{
    public function index(){
        return view("login.index");
    }
    public function check(Request $request){
        $credentials = $request->validate([
        "email"=> ["required","email"],
        "password"=> ["required"],
        ]);

        if (Auth::attempt($credentials)) {
            // return response()->json(['status' => true]);
            return view("login.home");
        }
        // return response()->json(['status' => false]);
        return "<h2> Username or password invalid!</h2>";
    }
}
