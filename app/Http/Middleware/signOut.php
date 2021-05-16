<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class signOut
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
         if(Auth::guard("staff")->check()){
           Auth::guard("staff")->logout();
         }
         else if(Auth::guard("customer")->check()){
           Auth::guard("customer")->logout();
         }
         return redirect("");
     }
}
