<?php

namespace App\Http\Controllers;


use Illuminate\View\View;

class MessagesController extends Controller
{

    public function index(): View{
        return view("backoffice.messages.index");
    }
}
