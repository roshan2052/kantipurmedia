<?php

use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\BlogCategoriesController;
use App\Http\Controllers\Admin\BlogTagsController;
use App\Http\Controllers\Front\HomeController;
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

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('front.about_us');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('front.contact_us');
Route::get('/teams', [HomeController::class, 'teams'])->name('front.teams');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('front.testimonials');
Route::get('/services', [HomeController::class, 'services'])->name('front.services');
Route::get('/services/{slug}', [HomeController::class, 'singleService'])->name('front.single_service');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('front.faqs');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('front.blogs');
Route::get('/blogs/{slug}', [HomeController::class, 'singleBlog'])->name('front.single_blog');

Route::post('/contact-us', [HomeController::class, 'saveContactUs'])->name('front.contact_us.save');





