<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class verifyUserType
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
        // dd(session()->get('admin'));
        if($request->session()->get('admin'))
        {
           // dd(1);
           return $next($request);
        }
        return redirect()->route('admin.login');
    }
}
