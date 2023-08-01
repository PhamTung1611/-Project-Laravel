<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FontController extends Controller
{

    public function FontProduct(Request $request)
    {
        $category = Category::all();
        $product = Product::all();
        return view('fontend.home', compact('category','product'));
    }

    public function detailProduct($id){
        $category = Category::all();
        $detail = DB::table('products')->where('id',$id)->first();
        $product = Product::all();
        return view('fontend.product',compact('category','detail','product'));
    }
}
