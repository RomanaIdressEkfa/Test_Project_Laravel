<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $products=User::all();
        return view('backend.users.index',compact('products'));
    }


    public function create(){
        return view('backend.users.create');
    }


    public function store(Request $request){

//ONLY for data show---->START CODE//

        try{
            $data = $request->all();
            User::create($data);
            return redirect()->route('index');
        }catch(Exception $e){
            dd($e->getMessage());
        }

        //ONLY for data show---->END CODE//

        //for image and data show---->START CODE//

        // $request->validate([
        //     'vendor_name'=>'required',
        //     'store_name'=>'required',
        //     'store_link'=>'required',
        //     'location'=>'required',
        //     'store_image'=>'required|mimes:png,jpg,jpeg',

        // ]);
        // $imageName='';
        // if($store_image=$request->file('store_image')){
        //     $imageName=time().'-'.uniqid().'.'.$store_image->getClientOriginalExtension();
        //     $store_image->move('images/products',$imageName);
        // }

        // Vendor_Details::create([
        //     'vendor_name'=>$request->vendor_name,
        //     'store_name'=>$request->store_name,
        //     'store_link'=>$request->store_link,
        //     'location'=>$request->location,
        //     'store_image'=>$imageName,
        // ]);
        // session()->flash('message', 'Post successfully updated.');
        // return redirect()->route('vendor_details_index');

        //for image and data show---->END CODE//
    }


    public function edit($id)
    {
        $product = User::find($id);
        return view('backend.users.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('_token');
            User::where('id', $id)->update($data);
            return redirect()->route('index');

        }catch(Exception $e){
            dd($e->getMessage());
        }

        //for image and data show---->START CODE//
// $product= Category::findOrFail($id);
//         $request->validate([
//             'vendor_name'=>'required',
//             'store_name'=>'required',
//             'store_link'=>'required',
//             'location'=>'required',
//         ]);
//         $imageName='';
//         $deleteOldImage= 'images/products/'.$product->store_image;

//         if($store_image=$request->file('store_image')){
//             if(file_exists($deleteOldImage)){
//                 File::delete($deleteOldImage);
//             }
//             else{
//                 $imageName=$product->store_image;
//             }
//             $imageName=time().'-'.uniqid().'.'.$store_image->getClientOriginalExtension();
//             $store_image->move('images/products',$imageName);
//         }

//         Category::where('id', $id)->update([
//             'vendor_name'=>$request->vendor_name,
//             'store_name'=>$request->store_name,
//             'store_link'=>$request->store_link,
//             'location'=>$request->location,
//             'store_image'=>$imageName,
//         ]);
//         session()->flash('message', 'Post successfully updated.');
//         return redirect()->route('vendor_details_index');

        //for image and data show---->END CODE//
    }

    public function delete($id)
    {
        $product =User::find($id);
        $product->delete();
        return redirect()->back();
    }
}
