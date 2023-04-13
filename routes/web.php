<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Frontend\F_HomeController;
use App\Http\Controllers\Frontend\F_BookController;
use App\Http\Controllers\TestimonialController;

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
// Facebook
// 1597974367384614
// 8588a8535026adc8dfb91c43f158e0d7
// Google
// 362828633338-c098hp8d21df0gt2vncsuk3u8c4qk7cr.apps.googleusercontent.com
// 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

// Router Authentication
Route::get('/sign-in', [SigninController::class, 'index'])->middleware('guest')->name('login');
Route::post('/sign-in', [SigninController::class, 'authentication']);
Route::get('/sign-up', [SignupController::class, 'index'])->middleware('guest');
Route::post('/sign-up/store', [SignupController::class, 'store']);
Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->middleware('guest');

// Login faceebook
Route::controller(FacebookController::class)->group(function () {
  Route::get('auth/facebook', 'redirect_to_facebook')->name('auth.facebook');
  Route::get('auth/facebook/callback', 'handle_facebook_callback');
});
// Login Google
Route::controller(GoogleController::class)->group(function () {
  Route::get('auth/google', 'redirect_to_google')->name('auth.google');
  Route::get('auth/google/callback', 'handle_google_callback');
});

Route::post('/my/logout', [SigninController::class, 'logout'])->middleware('auth');
// ======================================================================
//                    P A G E S    F R O N T E N D
// ======================================================================
Route::get('/', [F_HomeController::class, 'index'])->middleware('guest');
Route::get('/books', [F_BookController::class, 'index'])->middleware('guest');
Route::get('/read-books', [F_BookController::class, 'read_data'])->middleware('guest');
Route::get('/book/books', [F_BookController::class, 'index'])->middleware('guest');
Route::get('/book/{slug}', [F_BookController::class, 'detail'])->middleware('guest');

Route::get('/about', function () {
  return view('frontend.pages.about', [
    'title' => 'About Us'
  ]);
})->middleware('guest');
Route::get('/contact', function () {
  return view('frontend.pages.contact', [
    'title' => 'Contact Us'
  ]);
})->middleware('guest');


// ======================================================================
//                      P A G E S    B A C K E N D
// ======================================================================
// Router Dashboard
Route::get('/my/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Router Books
Route::get('/my/books', [BookController::class, 'index'])->middleware('auth');
Route::get('/my/read-books', [BookController::class, 'read_data'])->middleware('auth');
Route::get('/my/book/add-book', [BookController::class, 'create'])->middleware('auth');
Route::post('/my/book/store-book', [BookController::class, 'store'])->middleware('auth');
Route::get('/my/book/{slug}', [BookController::class, 'show'])->middleware('auth');
Route::get('/my/books/search', [BookController::class, 'search'])->middleware('auth');


// Route Testimonial
Route::get('/my/testimonial', [TestimonialController::class, 'index'])->middleware('auth');
Route::post('/my/testimonial/add', [TestimonialController::class, 'store'])->middleware('auth');

// Router Profile
Route::get('/my/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/my/profile/read-book', [ProfileController::class, 'read_book'])->middleware('auth');
Route::get('/my/profile/read-setting', [ProfileController::class, 'read_setting'])->middleware('auth');
Route::get('/my/profile/my-book/{slug}', [ProfileController::class, 'detail_book'])->middleware('auth');
Route::get('/my/profile/my-book/edit/{slug}', [ProfileController::class, 'edit_book'])->middleware('auth');
Route::get('/my/profile/my-book/delete/{id}', [ProfileController::class, 'delete_book'])->middleware('auth');
