<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Product;
use App\Models\Category;
use Session;

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
        Session::flash('success', "Product added!");
        Return redirect()->route('viewProduct');
    }

    public function view() {
        $product=DB::table('products')
        ->leftjoin('categories', 'categories.id', '=', 'products.categoryID')
        ->select('products.*', 'categories.id as catid', 'categories.name as catname')
        ->get();
        Return view('showProduct')->with('products', $product);
    }

    public function viewAll() {
        $product=Product::all();  //apply SQL select * from products

        Return view('products')->with('products', $product);
    }

    public function searchProduct() {
        $r=request();
        $keyword=$r->keyword;
        $product=DB::table('products')
        ->where('products.name', 'like', '%'.$keyword.'%')
        ->orwhere('products.description', 'like', '%'.$keyword.'%') //select * from products where name like '%keyword%'
        ->get();

        Return view('products')->with('products', $product);
    }

    public function edit($id) {

        //select * from products where id='$id'
        $products=Product::all()->where('id', $id);

        Return view('editProduct')->with('products', $products)
                                ->with('categoryID', Category::all());
    }

    public function update() {
        $r=request();
        $products=Product::find($r->id); //retrieve the record based on id
        if($r->file('product-image')!= '') {
            $image=$r->file('product-image');
            $image->move('images', $image->getClientOriginalName()); //images is the location
            $imageName=$image->getClientOriginalName(); // upload the image 
            $products->image=$imageName; // update product table record
        }

        $products->name=$r->productName;
        $products->description=$r->description;
        $products->price=$r->price;
        $products->quantity=$r->quantity;
        $products->categoryID=$r->categoryID;
        $products->save();
        Session::flash('success', "Product updated successful");

        Return redirect()->route('viewProduct');
    }

    public function productDetail($id) {
        $product=Product::all()->where('id', $id); //apply SQL select * from products

        Return view('productDetail')->with('products', $product);
    }
}
