<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Utils\ViewRoute;

class ViewController extends Controller
{
    public function mainPage(){
        $products = Product::orderBy("created_at","desc")->paginate(5);

        print_r($products);


        return view(ViewRoute::$VIEW_NAME['HOME'], ['products'=> $products]);
    }

    public function addProductPage(){
        return view(ViewRoute::$VIEW_NAME['ADD_PRODUCT']);;
    }

    public function addCategoryPage(){
        return view(ViewRoute::$VIEW_NAME['ADD_CATEGORY']);
    }

    public function profilePage(){
        return view(ViewRoute::$VIEW_NAME['PROFILE']);
    }

    public function loginPage(){
        return view(ViewRoute::$VIEW_NAME['LOGIN']);
    }

    public function registerPage(){
        return view(ViewRoute::$VIEW_NAME['REGISTER']);
    }
}
