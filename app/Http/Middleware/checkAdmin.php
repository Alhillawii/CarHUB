<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            // If the user is an admin or super admin, allow access
            if ($user->role == "1" || $user->role == "-1") {
                return $next($request);
            }

            // Prevent regular users from accessing anything starting with 'dashboard'
            if ($user->role == "0" && $request->is('dashboard*')) {
                return redirect('/');
            }
        }
        return redirect()->route('login');
    }
}
