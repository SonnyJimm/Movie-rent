<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;

class CustomerController extends Controller{
          public function __construct()
             {
                 $this->middleware('guest:customer')->except('logout');
             }
        public function login(Request $request){
          if(Auth::guard("customer")->attempt(["user_name"=>$request->user_name,"password"=>$request->password])){
            return redirect("");
          }
            return redirect("/login");
        }
}
