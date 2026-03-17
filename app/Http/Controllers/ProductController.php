<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ctgFoodBeverage()
    {
        return view('ProductCategory', ['category' => 'Food & Beverage']);
    }

    public function ctgBeautyHealth()
    {
        return view('ProductCategory', ['category' => 'Beauty & Health']);
    }

    public function ctgHomeCare()
    {
        return view('ProductCategory', ['category' => 'Home Care']);
    }

    public function ctgBabyKids()
    {
        return view('ProductCategory', ['category' => 'Baby & Kids']);
    }
}
