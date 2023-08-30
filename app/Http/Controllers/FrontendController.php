<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $products = Product::where('status', 1)->get();
        // $products=Product::all();
        return view('frontend.index',compact('products'));
    }
}
