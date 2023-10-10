<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthAdmin
{
    
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() && Auth::user()->utpye !== 'ADM') {
            return redirect()->route('login')->with('error', 'You do not have access to this page.');
        }
        
        return $next($request);
    }

    
}
