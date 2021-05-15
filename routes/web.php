<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get("","App\Http\Controllers\ProductController@allProducts");
Route::get("product/add",function(){

});
Route::post("product/add","App\Http\Controllers\ProductController@addProduct")->middleware('auth:staff');;
Route::get("product/{id}","App\Http\Controllers\ProductController@getProduct")->middleware('auth:customer');


//user login stuff
Route::get("login",function(){

  return view("login",["title"=>"Login"]);
});
Route::post("login","App\Http\Controllers\CustomerController@login");

Route::get("register",function(){

});
Route::get("logout","App\Http\Controllers\CustomerController@logout");

//staff
Route::post("staff/login","App\Http\Controllers\StaffController@login");
