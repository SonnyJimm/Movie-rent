<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Staff;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/**  For the products thumnail getting might be ugly but it works   **/
Route::get("storage/{filename}",function($filename){
  $path = storage_path('public/thumbnails/');
  if (!File::exists($path.$filename)) {
      $path=$path."defualt.jpg";
  }else
      $path=$path.$filename.".jpg";
  $response = Response::download($path);
  return $response;
});
/** Getting all the products from database **/
Route::get("/product/all",function(){
  $products=Product::select("id","name","banner_image","rented_time")->get();
  return $products;
});

  Route::post("/product/add",function(Request $request){
    if(!isset($request->api_token)) abort(404);
    $staff=Staff::where("api_token",$request->api_token)->get();
    if(isset($staff->api_token)){
      Product::create([
        "name"=>$request->name,
        "author"=>$request->author,
        'producer'=>$request->producer,
        "banner_image"=>Hash::make($request->thumnail),
        "genre"=>$request->genre,
        "length"=>$request->length,
        "rented_time"=>"0",
        "trailer"=>$request->trailerLink,
        "branch_id"=>$request->branch_id,
        "type_id"=>$request->type
      ]);
      return response(["Result"=>"Success"],200);
    }
    return response(["message"=>"unautherised user"],401);
});
Route::get("/product/{id}",function($id){
    $product = Prodct :: select("id","name","author","producer","genre","length","banner_image","rented_time")->where("id",$id)->get();
});

Route::post("/customer/login",function(Request $request){
      $Customer = Customer :: where('user_name',$request->userName)->first();
      if($Customer){
        if(Hash::check($request->password,$Customer->password)){
          $token = Str::random(60);
          $Customer->api_token=$token;
          $Customer->save();
          $response=array();
          $response["api_token"]=$token;
          return json_encode($response);
        }
      }
      return response(["message"=>"password or username wrong"],401);
});
Route::post("/staff/logout",function(Request $request){
  if(!isset($request->api_token)) abort(404);
  $staff=Staff::where("api_token",$request->api_token)->get();
  if(isset($staff->api_token)){

  }
});
Route::post("/staff/login",function(Request $request){
      $Staff = Staff :: where('email',$request->email)->first();
      if($Staff){
        if(Hash::check($request->password,$Staff->password)){
          $token = Str::random(60);
          $Staff->api_token=$token;
          $Staff->save();
          $Staff=array();
          $Staff["api_token"]=$token;
          return json_encode($response);
        }
      }
      return response(["message"=>"password or username wrong"],401);
});
