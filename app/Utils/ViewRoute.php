<?php

namespace App\Utils;

class ViewRoute
{
    public static $HOME = '/';
    public static $CATEGORIES = '/category';
    public static $ADD_PRODUCT = '/product/create';
    public static $EDIT_PRODUCT = '/product/edit/{id}';
    public static $DELETE_PRODUCT = '/product/del/{id}';
    public static $EXCEL_PRODUCT = '/product/excel';
    public static $ADD_CATEGORY = '/category/create';
    public static $DELETE_CATEGORY = '/category/del/{id}';
    public static $EXCEL_CATEGORY = '/category/excel';
    public static $PROFILE = '/profile';
    public static $LOGIN = '/login';
    public static $REGISTER = '/register';

    public static $VIEW_NAME = [
        'HOME' => 'home',
        'CATEGORIES' => 'categories',
        'ADD_PRODUCT' => 'add_product',
        'EDIT_PRODUCT' => 'upd_product',
        'ADD_CATEGORY' => 'add_category',
        'PROFILE' => 'profile',
        'LOGIN' => 'login',
        'REGISTER' => 'register'
    ];

    public static $VUE = [
        'DASH' => "Dashboard", 
        'ADD_PROD' => "AddProduct",
        'ADD_CAT' => "AddCategory"
    ];
}
