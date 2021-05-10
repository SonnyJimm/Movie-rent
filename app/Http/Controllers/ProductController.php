<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function allProducts(){

        return view("index",["title"=>"Welcome"]);
    }
    public function addProduct(){

    }
    public function getProdcit($id){

    }
}
