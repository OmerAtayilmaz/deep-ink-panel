<?php

use App\Http\Controllers\HomeController;
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

 Route::prefix("/backoffice")->name("backoffice.")->group(function(){

     # Siteyi Bakım Moduna Almak - Sitenin Adress Bilgileri
     Route::middleware('auth')->prefix("/settings")->group(function () {
         Route::get('/', [SettingsController::class, 'edit'])->name('settings.edit');
         Route::patch('/', [SettingsController::class, 'update'])->name('settings.update');
         Route::delete('/', [SettingsController::class, 'destroy'])->name('settings.destroy');
     });

     #News Management - Blog Yazısı Ekle, Sil, Güncelle


     #Projects Management  - Projelerimizi Ekle, Sil, Güncelle

     #Message Management -


 });


require __DIR__.'/auth.php';
