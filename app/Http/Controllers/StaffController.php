<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Auth;

class StaffController extends Controller{

  public function __construct()
     {
         $this->middleware('guest:staff')->except('logout');
     }
  public function login(Request $request){
    if(Auth::guard("staff")->attempt(["user_name"=>$request->user_name,"password"=>$request->password])){
      return redirect("");
    }
      return redirect("staff/login");
  }
}
