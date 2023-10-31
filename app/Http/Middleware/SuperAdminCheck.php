<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if there are any super admins in the database
        $superAdmin = DB::table('admins')->where('admintype_id', 1)->exists();

        if ($superAdmin === true) {
            // If super admins exist, allow access to the current route
            return $next($request);
        } else {
            // If super admins exist, deny access to all other routes
            return redirect()->route('super_signup');
        }
    }
}
