<?php

namespace App\Http\Controllers;


use Illuminate\View\View;

class ProjectsController extends Controller{

    public function index() :View{
        return view("backoffice.projects.index");
    }
}
