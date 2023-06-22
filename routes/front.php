<?php

use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\BlogCategoriesController;
use App\Http\Controllers\Admin\BlogTagsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/faq', function (){
    return view('front.faq');
});

Route::get('/team', function (){
    return view('front.team');
});

Route::get('/testimonials', function (){
    return view('front.testimonials');
});
