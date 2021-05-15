<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;


class ProductController extends Controller
{
    public function allProducts(){
        $products=Product::select("id","name","banner_image","rented_time")->get();
        return view("index",["title"=>"Welcome","products"=>$products]);
    }
    public function addProduct(Request $request){

    }
    public function getProduct($id){
      $products=Product::find($id);
      return view("product",["title"=>"Movie","product"=>$products]);
    }
}
