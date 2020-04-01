<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!Auth::user()->isAdmin){
            Session::flash('info', 'Sorry! you have not permissions to access!');
            return redirect()->back();
        }
        return $next($request);
    }
}
