<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view("/login");
    }

    public function register(){
        return view('/register');
    }

     public function login(Request $request)
    {
        $validated = $request->validate(
        [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($validated))
        {
            $user = Auth::user();
            Auth::login($user);

            return redirect('/')->with('loginSuccess', 'Successfully Login');
        }

        $request->session()->flash('error', 'Email atau Password tidak sesuai');

        return redirect('/login')->withErrors(["loginFail"=>"Email or Password is wrong"]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('/login');
    }

    public function registerAction(Request $request)
    {
        return ['register'=>'success'];
    }
}
