<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function store() {
        $r=request();
        $image=$r->file('product-image');
        $image->move('image', $image->getClientOriginalName());
        $imageName=$image->getClientOriginaLName();

        $addProduct=Product::create([
            'name'=>$r->productName,
            'description'=>$r->description,
            'price'=>$r->price,
            'quantity'=>$r->quantity,
            'image'=>$imageName,
            'categoryID'=>$r->categoryID,

        ]);

        Return redirect()->route('viewProduct');
    }

    public function view() {
        $product=Product::all();  //apply SQL select * from products

        Return view('showProduct')->with('products', $product);
    }
}
