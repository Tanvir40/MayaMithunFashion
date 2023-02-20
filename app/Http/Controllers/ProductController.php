<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use carbon\carbon;

class ProductController extends Controller
{
    function add_product(){
        return view('backend.add_product');
    }

    //insert product
    function insert_product(Request $request){

        $request->validate([
            'product_name'=>'required',
            'product_short_title'=>'required',
            'long_desp'=>'required',
            'image'=>'image | max:2048 | mimes:jpeg,png,jpg',
        ]);

        $uploaded_file = $request->image;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = substr(md5(time()), 0, 10).'.'.$extension;
        $uploaded_file->move("backend/img/product/", $file_name);

        product::insert([
            'image'=>$file_name,
            'product_name'=>$request->product_name,
            'product_short_title'=>$request->product_short_title,
            'long_desp'=>$request->long_desp,
            'created_at'=>Carbon::now(),
        ]);
        return back()->with('success' , 'Product Added Successfully'); 
    }

    //product list
    function product(){
        $products = product::get();
        return view('backend.product',[
            'products'=>$products,
        ]);
    }

    //product delete
    function product_delete($id){
        $product_images = product::find($id);
        $product_images->image;
        @unlink('backend/img/product/'.$product_images->image);

        product::find($id)->delete();

        return back()->with('delete', 'Product Deleted Successfully!');
    }

    //product edit page view
    function edit_product($id){
        $products = product::find($id);
        return view('backend.edit_product',[
            'products'=>$products,
        ]);
    }

    function update_product(Request $request){
        $request->validate([
            'product_name'=>'required',
            'product_short_title'=>'required',
            'long_desp'=>'required',
            'image'=>'image | max:2048 | mimes:jpeg,png,jpg',
        ]);

        if($request->image != ''){

        $product_images = product::find($request->id);
        $product_images->image;
        @unlink('backend/img/product/'.$product_images->image);
        

        $uploaded_file = $request->image;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = substr(md5(time()), 0, 10).'.'.$extension;
        $uploaded_file->move("backend/img/product/", $file_name);

            product::find($request->id)->update([
                'image'=>$file_name,
                'product_name'=>$request->product_name,
                'product_short_title'=>$request->product_short_title,
                'long_desp'=>$request->long_desp,
                'updated_at'=>Carbon::now(),

            ]);
            return redirect('/product')->with('updated' , 'Product Updated Successfully');

        }else{
                product::find($request->id)->update([
                    'product_name'=>$request->product_name,
                    'product_short_title'=>$request->product_short_title,
                    'long_desp'=>$request->long_desp,
                    'updated_at'=>Carbon::now(),
            ]);
        }
        
        return redirect('/product')->with('updated' , 'Product Updated Successfully');

    }
}
