<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Component\HttpFoundation\Response;

class Localization
{

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->has('locale')){
            if ($request->server('HTTP_ACCEPT_LANGUAGE')) {
                $lang = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
                $this->setLanguage($lang == "tr" ? "tr" : "en");
            }else{
                $this->setLanguage("en");
            }
        }
        else{
            $this->setLanguage($request->segment(1) == "tr" ? "tr" : "en");
        }
        app()->setLocale(session()->get('locale'));
        return $next($request);
    }

    public function setLanguage($language): void {
        $availableLanguages = ['en', 'tr'];
        if (!in_array($language, $availableLanguages)) {
            $language = 'en';
        }
        session()->put('locale', $language);
        \URL::defaults(['locale' => $language]);
    }
}
