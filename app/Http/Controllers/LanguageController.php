<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request, $language)
    {
        //burada dil degistirme uygulanmalıdır.
        return redirect()->back();
    }

}
