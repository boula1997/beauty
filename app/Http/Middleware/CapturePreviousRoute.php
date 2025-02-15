<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CapturePreviousRoute
{
    public function handle($request, Closure $next)
    {
        // Save the previous URL
        if (url()->previous() != url()->current()) {
            // Save the last previous route in session before overriding
            Session::put('twoRoutesAgo', Session::get('previousRoute'));
            // Now store the current previous route
            Session::put('previousRoute', url()->previous());
        }
        
        return $next($request);
    }
}
