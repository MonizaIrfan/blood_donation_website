<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        {
            if(!session()->has('admin') && ($request->path() != 'admin/login' &&
            $request->path()!='/register')){
                return redirect('/');

            }
            if(session()->has('loggedInUser') && ($request->path() == '/' ||
            $request->path()=='/register')){
                return back();

            }
            return $next($request)->header('Cache-Control','no-cache,no-store, max-age=0,must-revalidate')
            ->header('pragma','no-cache')->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
        }
    }
}
