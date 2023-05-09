<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OrderController;
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
Route::redirect("/","/backoffice");

 Route::middleware('auth')->prefix("/backoffice")->name("backoffice.")->group(function(){
     Route::get("/",[AdminController::class,"index"])->name("dashboard");

     Route::prefix("/order")->controller(OrderController::class)->name("order.")->group(function(){

         #order routes
         Route::get("/","index")->name("index");
         Route::get("/completed-orders","completed")->name("completed");
         Route::get("/show/{id}","show")->name("show");
         Route::get("/edit/{id}","edit")->name("edit");
         Route::post("/update/{id}","update")->name("update");
         Route::get("/create","create")->name("create");
         Route::post("/store","store")->name("store");
         Route::post("/destroy/{id}","destroy")->name("destroy");
         Route::post("/status/{id}","status")->name("status");

         #
         Route::get("/gallery/{id}","gallery")->name("image.index");
         Route::post("/gallery/{id}","image_store")->name("image.store");
         Route::delete("/gallery/{id}","image_destroy")->name("image.destroy");

         Route::get("/payments/{id}","payments")->name("payments");
         Route::post("/payments/{id}","payments_store")->name("payments.store");
         Route::delete("/payments/{id}","payments_destroy")->name("payments.destroy");
     });

     # Appointment
     Route::prefix("/appointments")->name("appointment.")->controller(AppointmentController::class)->group(function(){
         Route::get('/',  'index')->name("index");
         Route::get('/today',  'today_appointments')->name("today");
         Route::get('/create', 'create')->name("create");
         Route::post('/store',  'store')->name("store");
         Route::get('/edit/{id}',  'edit')->name("edit");
         Route::post('/update/{id}',  'update')->name("update");
         Route::post('/destroy/{id}',  'destroy')->name("destroy");
     });



 });


require __DIR__.'/auth.php';
