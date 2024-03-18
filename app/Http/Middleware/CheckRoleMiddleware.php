<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {

        if ($role == 'company' && $request->user()->role == 'company') {
            view()->share('sidebar', 'backend.layouts.inc.company-sidebar'); // Set company sidebar
        } elseif ($role == 'admin' && $request->user()->role == 'super_admin') {
            view()->share('sidebar', 'backend.layouts.inc.admin-sidebar'); // Set admin sidebar
        }

        return $next($request);
    }
}
