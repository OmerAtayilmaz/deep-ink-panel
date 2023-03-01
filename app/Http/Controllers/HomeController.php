<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\App;

class HomeController extends Controller {

    public function index(){
        return view('storefront.pages.home');
    }
    public function services(){
        return view('storefront.pages.services');
    }
    public function projects(){
        return view('storefront.pages.projects');
    }
    public function references(){
        return view('storefront.pages.references');
    }
    public function blog(){
        return view('storefront.pages.blog');
    }
    public function about(){
        return view('storefront.pages.about');
    }
    public function contact(){
        return view('storefront.pages.contact');
    }
    public function faq(){
        return view('storefront.pages.faq');
    }
}
