<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return ['key'=>'api_key here'];
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
