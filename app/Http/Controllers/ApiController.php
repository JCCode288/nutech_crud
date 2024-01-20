<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Validator;

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

}
