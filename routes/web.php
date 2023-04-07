<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// HOME PAGE ROUTES
 Route::controller(HomeController::class)->name('storefront.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/services', 'services')->name('services');
        Route::get('/projects', 'projects')->name('projects');
        Route::get('/references', 'references')->name('references');
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/faq', 'faq')->name('faq');
 });

Route::middleware('auth')->prefix("/settings")->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('backoffice.settings.edit');
    Route::patch('/', [ProfileController::class, 'update'])->name('backoffice.settings.update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('backoffice.settings.destroy');
});

require __DIR__.'/auth.php';
