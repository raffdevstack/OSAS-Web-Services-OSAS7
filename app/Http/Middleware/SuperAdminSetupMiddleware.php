<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminSetupMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
 
        $superAdmin = DB::table('osas5.admins')->where('admintype_id', 1)->exists();

        if ($superAdmin === true) {
            return redirect('/admin/login')->with('error', 'Cannot create new admin account, contact super admin to create new admin account');
        }

        return $next($request);
    }

    // public function handle(Request $request, Closure $next)
    // {
    //     // Get the setup_completed status from the database.
    //     $superAdmin = DB::table('settings')->where('name', 'setup_completed')->value('value');

    //     // If the setup_completed status is true, redirect the user.
    //     if ($setupCompleted === true) {
    //         return redirect('/');
    //     }

    //     // Otherwise, allow access to the setup page.
    //     return $next($request);
    // }
}
