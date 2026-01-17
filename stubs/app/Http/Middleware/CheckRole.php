<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string $role  // We add this third parameter
     */

    public function handle(Request $request, Closure $next, ...$roles): Response
        {
            if (!Auth::check()) {
                abort(401);
            }

            if (!in_array(Auth::user()->role, $roles)) {
                abort(403, Auth::user()->role . ' not allowed');
            }

            return $next($request);
        }
}
