<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Dokter
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
        // Jika request user adalah dokter maka requestnya di teruskan
        if ($request->user()->role == 'dokter') {
            return $next($request);
        }

        // Jika request user yang masuk bukan dokter maka redirect
        abort(403, 'Aksess khusus dokter!');
    }
}
