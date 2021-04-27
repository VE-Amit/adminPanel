<?php

namespace App\Http\Middleware\Check;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::User()->role_id == 1){
            return $next($request);
        }
        return redirect('/')->with('success', 'You are not admin');
    }
}
