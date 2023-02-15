<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ourbrands;
use App\Models\bannersection;
use App\Models\bannersectionsec;
use App\Models\bannersectionimage;
use App\Models\our_service;
use App\Models\blog;
use carbon\carbon;

class ourbrandsController extends Controller
{

 //for our services section

 public function our_service(){
    $our_service = null;
    if (our_service::count() > 0) {
        $our_service = our_service::orderBy('id', 'desc')->get();
    }
    return view("backend.our_service", compact("our_service"));
}
function our_services(Request $request){

    $request->validate([
        'heading'=>'required',
        'text'=>'required',
    ]);

    our_service::insert([
        'heading'=>$request->heading,
        'text'=>$request->text,
        'created_at'=>Carbon::now(),
    ]);
    return back()->with('success' , 'Our Service Added Successfully'); 
}

public function our_services_del($id){
    our_service::find($id)->delete();
    return redirect()->back();
}

    /*For Our Brands */

    public function our_Brands(){
        return view("backend.ourbrandsadd");
    }

    //for banner image section

    public function banner_section_image(){
        $bannersectionimage = null;
        if (bannersectionimage::count() > 0) {
            $bannersectionimage = bannersectionimage::find(1);
        }
        
        return view("backend.bannersection_image", compact("bannersectionimage"));
    }

    public function banner_section_update_image(Request $req){

        if ($req->isMethod("post")) {

            if (bannersectionimage::where("id", 1)->exists()) {

                    $exfile = null;

                        $req->validate([
                            "image_one" => "required|image"
                        ]);
                        $bannersectionimage = bannersectionimage::find(1);
                        @unlink($bannersectionimage->image_one);
                        $bannersectionimage = bannersectionimage::find(1);
                        @unlink($bannersection->image_one);
                        $file               = $req->image_one;
                        $ext                = $file->getClientOriginalExtension();
                        $exfile             = substr(md5(time()), 0, 10).".".$ext;
                
                    $bannersectionimage           = bannersectionimage::find(1);
                    if (isset($exfile)) {
                       $bannersectionimage->image_one = "Image/banner/".$exfile;
                       $file->move("Image/banner/", $exfile);
                    }
                    $bannersectionimage->save();
                    return back()->with("success_update","Banner Image updated successfully!");

                }

        }
    }

    public function banner_section_update_image_two(Request $req){

        if ($req->isMethod("post")) {

            if (bannersectionimage::where("id", 1)->exists()) {

                    $exfile = null;

                        $req->validate([
                            "image_two" => "required|image"
                        ]);
                        $bannersectionimage = bannersectionimage::find(1);
                        @unlink($bannersectionimage->image_two);
                        $bannersectionimage = bannersectionimage::find(1);
                        @unlink($bannersection->image_two);
                        $file               = $req->image_two;
                        $ext                = $file->getClientOriginalExtension();
                        $exfile             = substr(md5(time()), 0, 10).".".$ext;
                
                    $bannersectionimage           = bannersectionimage::find(1);
                    if (isset($exfile)) {
                       $bannersectionimage->image_two = "Image/banner/".$exfile;
                       $file->move("Image/banner/", $exfile);
                    }
                    $bannersectionimage->save();
                    return back()->with("success_update","Banner Image updated successfully!");

                }

        }
    }

public function banner_section_update_image_three(Request $req){

    if ($req->isMethod("post")) {

        if (bannersectionimage::where("id", 1)->exists()) {

                $exfile = null;

                    $req->validate([
                        "image_three" => "required|image"
                    ]);
                    $bannersectionimage = bannersectionimage::find(1);
                    @unlink($bannersectionimage->image_three);
                    $bannersectionimage = bannersectionimage::find(1);
                    @unlink($bannersection->image_three);
                    $file               = $req->image_three;
                    $ext                = $file->getClientOriginalExtension();
                    $exfile             = substr(md5(time()), 0, 10).".".$ext;
            
                $bannersectionimage           = bannersectionimage::find(1);
                if (isset($exfile)) {
                   $bannersectionimage->image_three = "Image/banner/".$exfile;
                   $file->move("Image/banner/", $exfile);
                }
                $bannersectionimage->save();
                return back()->with("success_update","Banner Image updated successfully!");

            }

    }
}
    //for banner section
    public function banner_section(){
        $bannersection = null;
        $bannersectionsec = null;
        if (bannersection::count() > 0) {
            $bannersection = bannersection::find(1);
        }
        if (bannersectionsec::count() > 0) {
            $bannersectionsec = bannersectionsec::find(1);
        }
        
        return view("backend.bannersection", compact("bannersection","bannersectionsec"));
    }

    public function banner_section_update(Request $req){

        if ($req->isMethod("post")) {

            if (bannersection::where("id", 1)->exists()) {
                    $req->validate([
                        "name" => "required",
                        "description" => "required"
                    ]);

                    $exfile = null;

                    if ($req->hasFile("image")) {
                        $req->validate([
                            "image" => "required|image"
                        ]);
                        $bannersection = bannersection::find(1);
                        @unlink($bannersection->image);
                        $file               = $req->image;
                        $ext                = $file->getClientOriginalExtension();
                        $exfile             = substr(md5(time()), 0, 10).".".$ext;
                    }

                    $bannersection           = bannersection::find(1);
                    $bannersection->name    = $req->name;
                    $bannersection->description  = $req->description;
                    if (isset($exfile)) {
                       $bannersection->image = "Image/banner/".$exfile;
                       $file->move("Image/banner/", $exfile);
                    }
                    $bannersection->save();
                    return redirect()->back()->with("success_update","Banner section update successfully!");

                }else{

                    $req->validate([
                        "name" => "required",
                        "description" => "required",
                        "image" => "required|image"
                    ]);

                    $file               = $req->image;
                    $ext                = $file->getClientOriginalExtension();
                    $exfile             = substr(md5(time()), 0, 10).".".$ext;

                    $bannersection           = new bannersection();
                    $bannersection->name    = $req->name;
                    $bannersection->description  = $req->description;
                    $bannersection->image = "Image/banner/".$exfile;
                    $bannersection->save();
                    $file->move("Image/banner/", $exfile);
                    return redirect()->back()->with("success_insert","Banner added successfully!");

                }
        }
    }

    public function banner_section_updates(Request $req){

        if ($req->isMethod("post")) {

            if (bannersectionsec::where("id", 1)->exists()) {
                    $req->validate([
                        "name" => "required",
                        "description" => "required"
                    ]);

                    $exfile = null;

                    if ($req->hasFile("image")) {
                        $req->validate([
                            "image" => "required|image"
                        ]);
                        $bannersection = bannersectionsec::find(1);
                        @unlink($bannersection->image);
                        $file               = $req->image;
                        $ext                = $file->getClientOriginalExtension();
                        $exfile             = substr(md5(time()), 0, 10).".".$ext;
                    }

                    $bannersection           = bannersectionsec::find(1);
                    $bannersection->name    = $req->name;
                    $bannersection->description  = $req->description;
                    if (isset($exfile)) {
                       $bannersection->image = "Image/banner/".$exfile;
                       $file->move("Image/banner/", $exfile);
                    }
                    $bannersection->save();
                    return redirect()->back()->with("success_update","Banner section 2 update successfully!");

                }else{

                    $req->validate([
                        "name" => "required",
                        "description" => "required",
                        "image" => "required|image"
                    ]);

                    $file               = $req->image;
                    $ext                = $file->getClientOriginalExtension();
                    $exfile             = substr(md5(time()), 0, 10).".".$ext;

                    $bannersection           = new bannersectionsec();
                    $bannersection->name    = $req->name;
                    $bannersection->description  = $req->description;
                    $bannersection->image = "Image/banner/".$exfile;
                    $bannersection->save();
                    $file->move("Image/banner/", $exfile);
                    return redirect()->back()->with("success_insert","Banner 2 added successfully!");

                }
        }
    }
    





    public function ourBrnad_insert(Request $req){
         if ($req->isMethod("post")) {
            $req->validate([
                //"tea_img" => "required|mimes:jpg,png|max:300",
                "image" => "required|image"
            ]);
            $file   = $req->image;
            $ext    = $file->getClientOriginalExtension();
            $exfile = substr(md5(time()), 0, 10).".".$ext;
            $slider = new ourbrands();
            $slider->name = "Image/brands/".$exfile;
            $slider->save();
            $file->move("Image/brands", $exfile);
            return redirect()->back()->with("image_sucess","Image uploaded successfully!");
         }

    }


    public function brand_list(){
        $ourbrands = null;
        if (ourbrands::count() > 0) {
            $ourbrands = ourbrands::get();
        }
        return view("backend.ourbrandslist", compact("ourbrands"));
    }

    public function ourbrands_up($id){
        return view("backend.ourbrandsupdate", compact("id"));
    }

    public function brands_update(Request $req){

        if ($req->isMethod("post")) {
            $req->validate([
                //"tea_img" => "required|mimes:jpg,png|max:300",
                "image" => "required|image"
            ]);
            $ourbrands = ourbrands::find($req->id);
            @unlink($ourbrands->name);

            $file   = $req->image;
            $ext    = $file->getClientOriginalExtension();
            $exfile = substr(md5(time()), 0, 10).".".$ext;

            $ourbrands = ourbrands::find($req->id);
            $ourbrands->name = "Image/brands/".$exfile;
            $ourbrands->save();
            $file->move("Image/brands/", $exfile);
            return redirect("/brandlist");
         }

    }
    

    public function ourbrand_del($id){
        ourbrands::find($id)->delete();
        return redirect()->back();
    }




    public function blog(){
        return view("backend.blog");
    }

    public function blog_post(Request $req){

        if ($req->isMethod("post")) {
            $req->validate([
                //"tea_img" => "required|mimes:jpg,png|max:300",
                "name" => "required",
                "description" => "required",
                "image" => "required|image",
            ]);

            $file   = $req->image;
            $ext    = $file->getClientOriginalExtension();
            $exfile = substr(md5(time()), 0, 10).".".$ext;

            $ourbrands = new blog;
            $ourbrands->name = $req->name;
            $ourbrands->description = $req->description;
            $ourbrands->image = "Image/brands/".$exfile;
            $ourbrands->save();

            $file->move("Image/brands/", $exfile);
            return redirect("/blog")->with("success"," Uploaded successfully!");
         }

    }

    public function blog_list(){
        $blog = null;
        if (blog::count() > 0) {
            $blog = blog::get();
        }
        return view("backend.blog_list", compact("blog"));
    }

    public function blog_delete($id){
        blog::find($id)->delete();
        return redirect()->back();
    }






}
