<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use File;
use Session;

class ProductController extends Controller
{
    public function index(){

        $products=Product::all();
        return view('backend.products.index',compact('products'));
    }


    public function create(){
        return view('backend.products.create');
    }


    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
            'price'=>'required',
            'status'=>'required',
        ]);
        $imageName='';
        if($image=$request->file('image')){
            $imageName=time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/products',$imageName);
        }

         Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$imageName,
            'price'=>$request->price,
            'status'=>$request->status,

        ]);
        session()->flash('message', 'Post successfully updated.');
        return redirect()->route('product_index');

        //for image and data show---->END CODE//
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.products.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
$product=Product::findOrFail($id);
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'status'=>'required',
        ]);
        $imageName='';
        $deleteOldImage= 'images/products/'.$product->image;

        if($image=$request->file('image')){
            if(file_exists($deleteOldImage)){
                File::delete($deleteOldImage);
            }
            else{
                $imageName=$product->image;
            }
            $imageName=time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/products',$imageName);
        }

      Product::where('id', $id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$imageName,
            'price'=>$request->price,
            'status'=>$request->status,
        ]);
        session()->flash('message', 'Post successfully updated.');
        return redirect()->route('product_index');

        //for image and data show---->END CODE//
    }

    public function delete($id)
    {
        $product =Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function active($id)
    {
        Product::where('id', $id)->first()->update([
            'status' => 1,
        ]);
        return redirect()->back();
    }

    public function inactive($id)
    {
        $product = Product::where('id', $id)->first()->update([
            'status' => 0,
        ]);
        return redirect()->back();
    }
}
