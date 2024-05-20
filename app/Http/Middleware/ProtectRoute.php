<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProtectRoute
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next)
    {
        // Misalnya, blokir semua akses
        return response('Unauthorized.', 403);

        // Jika ingin memeriksa sesuatu sebelum melanjutkan
        // if ($request->user() && $request->user()->isAdmin()) {
        //     return $next($request);
        // }
        // return redirect('home');
    }
}
