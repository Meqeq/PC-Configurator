<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->user_type == 'admin') {
            return $next($request);
        }
        return redirect('/');
    }
}
