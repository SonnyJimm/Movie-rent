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

//All products
Route::get("","App\Http\Controllers\ProductController@allProducts")->name('home');
Route::get("product/add",function(){})->middleware("auth:staff");
Route::get("product/{id}","App\Http\Controllers\ProductController@getProduct")->middleware('check');
Route::post("product/add","App\Http\Controllers\ProductController@addProduct")->middleware('auth:staff');
Route::post("product/delete", "ProductController@deleteProduct")->middleware("auth:staff");
Route::post("product/edit", "ProductController@editProduct")->middleware("auth:staff");

//Orders

Route::get("allOrder","OrderController@allOrder")->middleware("auth:staff");

Route::get("order/{$id}","OrderController@getOrder")->middleware("auth:staff");

Route::post("approveOrder","OrderController@approveOrder")->middleware("auth:staff");

Route::post("declineOrder","OrderController@declineOrder")->middleware("auth:staff");

Route::post("extendOrder","OrderController@extendOrder")->middleware("auth:staff");

Route::post("expireOrder","OrderController@expireOrder")->middleware("auth:staff");
Route::post("Order","OrderController@dOrder")->middleware("auth:customer");

//user login stuff
Route::get("login",function(){return view("login",["title"=>"Login","route"=>"login"]);});
Route::post("login","App\Http\Controllers\CustomerController@login");
Route::get("register",function(){});
Route::get("logout",function(){})->middleware("signout");

//staff
Route::get("staff/login",function(){return view("login",["title"=>"Staff Login","route"=>"staff/login"]);});
Route::post("staff/login","App\Http\Controllers\StaffController@login");
