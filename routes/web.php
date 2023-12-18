<?php

use App\Http\Controllers\FaqCategoryController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\TestimonialPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, "index"])->name('web.home');

Route::get('/service', [HomeController::class, "services"])->name('web.services');
Route::get('/service/{slug}', [HomeController::class, "single_service"])->name('web.service');

Route::get('/post', [HomeController::class, "posts"])->name('web.posts');
Route::get('/post/{slug}', [HomeController::class, "single_post"])->name('web.post');

Route::get('/testimonial', [HomeController::class, "testimonials"])->name('web.testimonials');
Route::get('/about', [HomeController::class, "about"])->name('web.about');
Route::get('/contact', [HomeController::class, "contact"])->name('web.contact');
Route::get('/faq', [HomeController::class, "faq"])->name('web.faq');


Route::post('/submit-lead', [LeadController::class, "store"])->name('web.lead');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    // Admin Routes
    Route::get('/admin', [DashboardController::class, "index"])->name('dashboard');
    Route::resource("testimonials", TestimonialPageController::class);
    Route::resource("posts", PostController::class);
    Route::resource("users", UserController::class);
    Route::resource("faqs", FaqController::class);
    Route::resource("faqcategories", FaqCategoryController::class);
    Route::resource("services", ServiceController::class);
    Route::resource("banners", BannerController::class);
});
