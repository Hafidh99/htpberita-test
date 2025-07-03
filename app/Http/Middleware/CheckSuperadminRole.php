<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Symfony\Component\HttpFoundation\Response;

class CheckSuperadminRole
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->role !== 'superadmin') {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return redirect('/editor/login')->with('error', 'Anda tidak punya hak akses.');
        }

        return $next($request);
    }
}