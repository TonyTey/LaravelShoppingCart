<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\Category;
use App\Models\myCart;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Session;

class CartController extends Controller
{
    public function __construct() {  //the construct require user login before access the controller function
        $this->middleware('auth');
    }

    public function add() {
        $r=request();
        $addItem=myCart::create([
            'quantity'=>$r->quantity,
            'orderID'=>'',
            'productID'=>$r->id,
            'userID'=>Auth::id(),
        ]);

        Return redirect()->route('Product');
    }

    public function showMyCart() {
        $carts=DB::table('my_carts')
        ->leftjoin('product','products.id','=','my_carts.productID')
        ->select('my_carts.quantity as cartQty','my_carts.id as cid','product.*')
        ->where('my_carts.orderID','=','')//the item haven't make payment
        ->where('my_carts.userID','=',Auth::id())
        ->get();
        
        /*select my_carts.quantity as cartQty, my_carts.id as cid, products.* from my_carts left join
        left join products on products.id=my_carts.productsID where my_cart.orderID = '' and
        my_carts.userID='Auth::id()'*/

        Return view('myCart')->with('carts', $carts);
    }
}
