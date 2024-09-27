<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $role = Auth::user()->role;
    
            // Redirect based on user role
            switch ($role) {
                case 'homeowner':
                    return redirect('/homeowner/dashboard');
                    break;
                case 'engineer':
                    return redirect('/engineer/dashboard');
                    break;
                default:
                    return redirect('/home');
                    break;
            }
   
          }
          return $next($request);
        }

   
}
