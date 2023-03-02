<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Localization
{

    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);
        if (in_array($locale, config('app.locales'))) {
            app()->setLocale($locale);
        } else {
            $segments = $request->segments();
            array_unshift($segments, config('app.fallback_locale'));
            return redirect()->to(implode('/', $segments));
        }
        return $next($request);
    }
}
