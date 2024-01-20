<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ApiController extends Controller
{
    public function addProduct(Request $request)
    {
        return $request->all();
    }
    public function addCategory(Request $request)
    {
        return $request->all();
    }
    public function login(Request $request)
    {
        $cred = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if(Auth::attempt($cred))
        {
            $user = Auth::user();
            Auth::login($user);

            echo $user->name;
            return redirect('/');
        }

        Session::flash('error', 'Email atau Password tidak sesuai');

        return redirect('/login');
    }
    public function logout(Request $request)
    {
        return ['msg'=>'OK'];
    }
    public function register(Request $request)
    {
        return ['register'=>'success'];
    }
}
