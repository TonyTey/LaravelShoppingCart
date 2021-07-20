<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;  //import Database
use App\Models\Category; //import Category model
use PhpParser\Node\Stmt\Return_;

class CategoryController extends Controller
{
    public function store() {
        $r=request();
        $addCategory= Category::create([
            'id' =>$r->categoryID,      //'id' is database field name and categoryID is HTML input name
            'name' =>$r->categoryName,   //'name' is database field name and categoryName is HTML input name
        ]);
        
        Return redirect()->route('viewCategory');  //after inset redirect to showCategory page
    }

    public function view() {
        $category=Category::all();  //apply SQL select * from categories
        Return view('showCategory')->with('categories',$category);
    }

}
