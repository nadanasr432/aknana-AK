<?php
namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RtlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
        public function handle($request, Closure $next)
{
    if (session('locale') == 'ar') {
        // Set the text direction for Arabic (RTL)
        app()->setLocale('ar');
        app()->singleton('direction', function () {
            return 'ltr';
        });
    } else {
        // Default to English (LTR)
        app()->setLocale('en');
        app()->singleton('direction', function () {
            return 'rtl';
        });
    }

    return $next($request);
}
}
