<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Utils\ViewRoute;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        $products = Product::orderBy("created_at","desc")->paginate(10);

        return view(ViewRoute::$VIEW_NAME['HOME'], ['products'=> $products]);
    }

    public function profilePage(){
        return view(ViewRoute::$VIEW_NAME['PROFILE']);
    }
}
