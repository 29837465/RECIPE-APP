<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleBased
{
    public function handle(Request $request, Closure $next)
    {
        if (!$this->isAdmin($request)) 
        {
            abort(403);
        }

        return $next($request);
    }

    private function isAdmin(Request $request): bool
    {
        return $request->user() && $request->user()->role === 'admin';
    }
}