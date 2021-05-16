<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,...$guards)
    {
        if(Auth::guard("staff")->check() OR Auth::guard("customer")->check())
              return $next($request);
        else
        return redirect("login");
    }
}
