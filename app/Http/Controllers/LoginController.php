<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()->to('/login')->with('successLogout', 'Successfully Logout');
    }

    public function registerAction(Request $request)
    {
        $validated = $request->validate(
        [
            'email' => 'required|unique:users| max:64',
            'password' => 'required|max:255',
            'name' => 'nullable'
        ]);

        $validated['name'] = $request->get('name') ?? $request->get('email');

        User::create($validated);

        return redirect('/login')->with('registerSuccess', $validated['name'].'is Successfully Registered');
    }
}
