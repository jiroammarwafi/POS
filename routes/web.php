<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/home', [HomeController::class, 'home']);

Route::get ('/products/category/food-beverage', [ProductController::class, 'ctgFoodBeverage']);

Route::get ('/products/category/beauty-health', [ProductController::class, 'ctgBeautyHealth']);

Route::get ('/products/category/home-care', [ProductController::class, 'ctgHomeCare']);

Route::get ('/products/category/baby-kids', [ProductController::class, 'ctgBabyKids']);