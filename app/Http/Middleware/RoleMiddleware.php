<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role_id)
    {
        if (!Auth::check() || !in_array(Auth::user()->role_id, $role_id)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}

