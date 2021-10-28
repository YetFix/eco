<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function index(Request $request)
   {
       $banners = Banner::all();
       $products=Product::all();
       $pproducts=Product::where('conditions','popular')->get();
       $categories=Category::all();
       $brands=Brand::all();
       return view('front.index',compact('banners','products','categories','brands','pproducts'));
   }
   public function shop(Request $request)
   {
        $banners = Banner::all();
        $products=Product::all();
        $categories=Category::all();
        $brands=Brand::all();
    return view('front.shop',compact('banners','products','categories','brands'));
   }
   public function blog(Request $request)
   {
    $categories=Category::all();
    return view('front.blog',compact('categories'));
   }
   public function contact(Request $request)
   {
    $categories=Category::all();
    return view('front.contact',compact('categories'));
   }
   public function about(Request $request)
   {
    $categories=Category::all();
    return view('front.about',compact('categories'));
   }
   public function faq(Request $request)
   {
    $categories=Category::all();
    return view('front.faq',compact('categories'));
   }
   public function cart(Request $request)
   {
    $categories=Category::all();
    return view('front.cart',compact('categories'));
   }
   public function wishlist(Request $request)
   {
    $categories=Category::all();
    return view('front.whishlist',compact('categories'));
   }
   public function track(Request $request)
   {
    $categories=Category::all();
    return view('front.track',compact('categories'));
   }
   public function checkout(Request $request)
   {
    $categories=Category::all();
    return view('front.checkout',compact('categories'));
   }
   public function single(Request $request,$id)
   {
       
       $product=Product::find($id);
       $rproducts=Product::where('category_id',$product->category_id)->get();
       return view('front.product',compact('product','rproducts'));
   }
   public function productsByCategory(Request $request,$id)
   {
      
       $products=Product::where('category_id',$id)->get();
       $categories=Category::all();
       $brands=Brand::all();
       return view('front.productsByCategory',compact('products','categories','brands'));
   }
   public function productsByBrands(Request $request,$id)
   {
      
       $products=Product::where('brand_id',$id)->get();
       $categories=Category::all();
       $brands=Brand::all();
       return view('front.productsByBrand',compact('products','categories','brands'));
   }
   
}