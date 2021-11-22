<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function add(){
        $r=request(); //received the data by Get or Post mothod
        $image=$r->file('product-image');
        $image->move('images',$image->getClientOriginalName()); //image is the location
        $imageName=$image->getClientOriginalName();

        $addProduct=Product::create([
            'name'=>$r->productName,
            'description'=>$r->productDescription,
            'quantity'=>$r->productQuantity,
            'price'=>$r->productPrice,
            'categoryID'=>$r->CategoryID,
            'image'=>$imageName,
        ]);
        Return view('addProduct');
    }
}
