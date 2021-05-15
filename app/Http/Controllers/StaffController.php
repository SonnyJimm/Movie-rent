<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Auth;

class StaffController extends Controller{
  public function __construct()
     {
         $this->middleware('guest:staff');
     }
  public function login(Request $request){

  }
  public function logout(){

  }

}
