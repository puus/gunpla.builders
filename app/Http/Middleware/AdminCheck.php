<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminCheck
{

    public function handle($request, Closure $next, $guard = null)
    {
        $user = Auth::user();

        if (!$user || !$user->hasRole('Admin')) {
            return response('Unauthorized', 401);
        }

        return $next($request);
    }
}
