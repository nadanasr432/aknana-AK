<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotCompany
{
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('company')->check()) {
            return redirect('/company/login');
        }

        return $next($request);
    }
}
