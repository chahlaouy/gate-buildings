<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UploadCkEditor;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;

Route::get('/dashboar', [DashboardController::class, 'index'])->name('dashboar');

/**
 * Landing page routes
 */
Route::get('/', [HomeController::class, 'homePage'])->name('home.page');
Route::get('/contact', [HomeController::class, 'contactPage'])->name('contact.page');
Route::get('/about', [HomeController::class, 'aboutPage'])->name('about.page');
Route::get('/gallery', [HomeController::class, 'galleryPage'])->name('gallery.page');

Route::get('/products/all', [HomeController::class, 'productsPage'])->name('products.page');
Route::get('/products/partner/category/{slug}', [HomeController::class, 'singleProduct'])->name('single-product.page');

Route::get('/blog', [HomeController::class, 'blog'])->name('landing.page.blog');
Route::get('/blog/{slug}', [HomeController::class, 'showArticle'])->name('landing.page.blog.show');

Route::post('/mail/contact', [MailController::class, 'contact'])->name('landing.page.contact');
Route::post('/mail/devis', [MailController::class, 'devis'])->name('landing.page.devis');

/**
 * Dashboard and ressources controlling routes
 */

Route::group([
    'middleware' => ['auth'],

], function ($router) {

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
    Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');

    Route::get('/partners', [PartnerController::class, 'index'])->name('partners.index');
    Route::get('/partners/create', [PartnerController::class, 'create'])->name('partners.create');
    Route::post('/partners', [PartnerController::class, 'store'])->name('partners.store');
    Route::delete('/partners/{partner}', [PartnerController::class, 'destroy'])->name('partners.destroy');
    Route::get('/partners/{partner}/edit', [PartnerController::class, 'edit'])->name('partners.edit');
    Route::put('/partners/{partner}', [PartnerController::class, 'update'])->name('partners.update');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users/{id}', [UserController::class, 'show'])->name('profile');
    Route::put('/users', [UserController::class, 'update'])->name('profile.update');

});

/**  Upload Images For CKEditor */

Route::post('/upload', [UploadCkEditor::class, 'store'])->name('CKEditor.store');

require __DIR__.'/auth.php';
