<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SettingsController;
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

 Route::middleware('auth')->prefix("/backoffice")->name("backoffice.")->group(function(){
     Route::get("/",[AdminController::class,"index"])->name("dashboard");

     # Siteyi Bakım Moduna Almak - Sitenin Adress Bilgileri
     Route::prefix("/settings")->controller(SettingsController::class)->group(function () {
         Route::get('/','index')->name('settings.index');
         Route::patch('/','update')->name('settings.update');
         Route::delete('/','destroy')->name('settings.destroy');
     });

     #Blog Management - Blog Yazısı Ekle, Sil, Güncelle
    Route::prefix("/blog")->name("blog.")->group(function (){
       Route::get('/', [BlogController::class,"index"])->name("index");
    });


     #Projects Management  - Projelerimizi Ekle, Sil, Güncelle

     Route::prefix("/projects")->name("projects.")->controller(ProjectsController::class)->group(function(){
         Route::get("/","index")->name("index");
     });

     #Message Management -
     Route::prefix("/messages")
         ->name("messages.")
         ->controller(MessagesController::class)
         ->group(function(){
        Route::get("/","index")->name("index");
     });

 });


require __DIR__.'/auth.php';
