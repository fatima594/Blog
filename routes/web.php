<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMailController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

// Home page route
Route::get('/', function () {
    // Find categories with names 'health', 'Herbal Remedies', and 'sports'
    $categories = Category::whereIn('name', ['health', 'Herbal Remedies', 'sports'])->pluck('id');

    // Get all blogs belonging to the selected categories
    $blogs = Blog::whereIn('category_id', $categories)->get();

    // Return the home view with blogs data
    return view('home', [
        'blogs' => $blogs,
    ]);
});

// Contact routes
Route::post('send-contact', [ContactMailController::class, 'sendContact'])->name('send.contact');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Static pages routes
Route::get('/about', function () {
    return view('layouts.pages.about');
});
Route::get('/contact', function () {
    return view('layouts.pages.contact');
});

// Blog detail route
Route::get('/single/{slug}', [DetailsController::class, 'show'])->name('single');

// Category-based blog index route
Route::get('category/{categoryId}', [DetailsController::class, 'indexByCategory'])->name('blogs.indexByCategory');

// Blog detail route by ID
Route::get('blog/{id}', [DetailsController::class, 'show'])->name('blogs.show');

// Blog page route
Route::get('/blog', function () {
    $blogs = Blog::all();
    return view('layouts.blogpage', ['blogs' => $blogs]);
});

// Language switch route
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});

// Comments route
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

// Email sending route
Route::post('/send-email', [MailController::class, 'sendEmail'])->name('send.email');

// Dashboard route with authentication and verification middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Admin routes with prefix 'admin'
Route::prefix('admin')->name('admin.')->group(function () {
    // Show admin login form
    Route::get('/adminlogin', [AdminController::class, 'showLoginForm'])->name('adminlogin');
    // Handle admin login
    Route::post('/adminlogin', [AdminController::class, 'adminlogin'])->name('adminlogin.submit');
    // Show admin registration form
    Route::get('/adminregister', [AdminController::class, 'showRegistrationForm'])->name('adminregister');
    // Handle admin registration
    Route::post('/adminregister', [AdminController::class, 'adminregister'])->name('adminregister.submit');
    // Protect following routes with 'auth:admin' middleware
    Route::middleware('auth:admin')->group(function () {
        // Show admin dashboard
        Route::get('/index', [AdminController::class, 'dashboard'])->name('index');
        // Resource routes for blogs and categories
        Route::resource('blogs', BlogController::class);
        Route::resource('categories', CategoryController::class);
        // Admin logout route
        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});

// Authentication routes
require __DIR__.'/auth.php';
