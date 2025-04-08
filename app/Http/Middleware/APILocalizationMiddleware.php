<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class APILocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->header('locale') == 'ar') {
            App::setLocale('ar');
        }
        elseif($request->header('locale') == 'fr') {
            App::setLocale('fr');
        }
        else  {
            App::setLocale('en');
        }
        return $next($request);
    }
}