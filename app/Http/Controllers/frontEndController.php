<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aboutus;
use App\Models\narbar;
use App\Models\subnavbar;
use App\Models\slider;
use App\Models\ourbrands;
use App\Models\websetup;
use App\Models\ContactInfo;
use App\Models\OurClient;
use App\Models\Team;
use App\Models\bannersection;
use App\Models\bannersectionsec;
use App\Models\bannersectionimage;
use App\Models\our_service;
use App\Models\introduction;
use App\Models\blog;
use App\Models\product;

class frontEndController extends Controller
{


    public function homeContent(){

      $aboutus = null;
      if (aboutus::where("id", 1)->exists()) {
           $aboutus = aboutus::find(1);
      }

      $slider = null;
      if (slider::count() > 0) {
         $slider = slider::get();
      }

      $ourbrands = null;
      if (ourbrands::count() > 0) {
         $ourbrands = ourbrands::get();
      }


      $websetup = null;
      if (websetup::count() > 0) {
         $websetup = websetup::find(1);
      }

      $narbar = null;
      if (narbar::count() > 0) {
         $narbar = narbar::get();
      }

      $bannersection = null;
      if (bannersection::count() > 0) {
         $bannersection = bannersection::find(1);
      }
      $bannersectionsec = null;
      if (bannersectionsec::count() > 0) {
         $bannersectionsec = bannersectionsec::find(1);
      }

      $bannersectionimage = null;
      if (bannersectionimage::count() > 0) {
         $bannersectionimage = bannersectionimage::find(1);
      }

      $our_service = null;
      if (our_service::count() > 0) {
         $our_service = our_service::orderBy('id', 'desc')->get();
      }
  
      $products = product::orderBy('id', 'desc')->get();

     

      $teams         = Team::get();
      $contact       = ContactInfo::get();
      $OurClient     = OurClient::get();
      $clint_count   = OurClient::count();
      $brands_count  = ourbrands::count();
      $teams_count   = Team::count();

      return view('frontend.index', compact("aboutus","slider","ourbrands","websetup", "narbar","teams","contact","OurClient","clint_count","brands_count","teams_count","bannersection","bannersectionsec","bannersectionimage","our_service" ,"products"));

      
    }

   public function product_details($id){

      $slider = null;
      if (slider::count() > 0) {
         $slider = slider::get();
      }
 
      $websetup = null;
      if (websetup::count() > 0) {
         $websetup = websetup::find(1);
      }

      $narbar = null;
      if (narbar::count() > 0) {
      $narbar        = narbar::get();
      }
      $products      = product::findorfail($id);

      $contact       = ContactInfo::get();

      $rel_products  = product::where('id', '!=', $id)->latest()->take(4)->get();

      return view('frontend.product_details' , compact("websetup", "narbar","contact" ,"products", "rel_products","slider"));
  }

  function contact(){
   $websetup = null;
      if (websetup::count() > 0) {
         $websetup = websetup::find(1);
      }

      $narbar = null;
      if (narbar::count() > 0) {
         $narbar = narbar::get();
      }
      $slider = null;
      if (slider::count() > 0) {
         $slider = slider::get();
      }

      $contact       = ContactInfo::get();
   return view('frontend.contact' , compact("websetup", "narbar","contact","slider"));
  }

  public function our_progress(){
   $websetup = null;
      if (websetup::count() > 0) {
         $websetup = websetup::find(1);
      }

      $narbar = null;
      if (narbar::count() > 0) {
         $narbar = narbar::get();
      }

      $bannersection = null;
      if (bannersection::count() > 0) {
         $bannersection = bannersection::find(1);
      }
      $slider = null;
      if (slider::count() > 0) {
         $slider = slider::get();
      }

      $blog = null;
      if (blog::count() > 0) {
         $blog = blog::get();
      }

      $contact       = ContactInfo::get();
   return view('frontend.our_progress' , compact("websetup", "narbar","contact" ,"bannersection" ,"slider","blog"));
  }


  public function about(){
   $websetup = null;
      if (websetup::count() > 0) {
         $websetup = websetup::find(1);
      }

      $narbar = null;
      if (narbar::count() > 0) {
         $narbar = narbar::get();
      }

      $bannersection = null;
      if (bannersection::count() > 0) {
         $bannersection = bannersection::find(1);
      }

      $slider = null;
      if (slider::count() > 0) {
         $slider = slider::get();
      }

      $introduction = null;
        if (introduction::where("id", 1)->exists()) {
           $introduction = introduction::find(1);
        }

        $teams = null;
        if (Team::count() > 0) {
           $teams = Team::orderBy('id', 'desc')->get();
        }

      $contact       = ContactInfo::get();
      $OurClient     = OurClient::get();
      $clint_count   = OurClient::count();
      $brands_count  = ourbrands::count();
      $teams_count   = Team::count();
   return view('frontend.about' , compact("websetup", "narbar","contact" ,"bannersection", "clint_count" ,"brands_count" , "teams_count" ,"slider","introduction","teams"));
  }
}
