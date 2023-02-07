<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Jika request user adalah admin maka requestnya di teruskan
        if ($request->user()->role == 'admin') {
            return $next($request);
        }

        // Jika request user yang masuk bukan admin maka redirect
        abort(403, 'Aksess khusus admin!');
    }
}
