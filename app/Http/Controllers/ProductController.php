<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Product::orderBy('id','DESC')->paginate(10);
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands=Brand::all();
        $categories=Category::all();
        return view('backend.product.create',compact('categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $validated = $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'offer_price'=>'required|numeric',
            'discount'=>'required|numeric',
            'stock'=>'required|numeric',
            'brand'=>'required',
            'category'=>'required',
            'size'=>'required',
            'conditions'=>'required',
            'photo'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'status'=>'required'
        ]);
  
       if ($image = $request->file('photo')) {

        $destinationPath = 'backend/products/';
        $prodImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $prodImage);

        $slug= Str::slug($request->title);
        $slug_count= Product::where('slug',$slug)->count();
        if($slug_count>0){
          $slug.=time().'-'.$slug;
        }
            $status= Product::create([
                'title'=>$request->title,
                'photo'=>$prodImage,
                'summary'=>$request->summary,
                'status'=>$request->status,
                'slug'=>$slug,
                'description'=>$request->description,
                'price'=>$request->price,
                'offer_price'=>$request->offer_price,
                'discount'=>$request->discount,
                'stock'=>$request->stock,
                'size'=>$request->size,
                'conditions'=>$request->conditions,
                'brand_id'=>$request->brand,
                'category_id'=>$request->category,
                'vendor_id'=>auth()->user()->id,
            ]);
    
    }
      if($status){
        return redirect()->route('product.index')->with('success','Successfully Product updated');
      }else{
            return back()->with('error','Something went wrong');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $brands=Brand::all();
        $categories=Category::all();
        return view('backend.product.edit',compact('product','brands','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'description'=>'required',
            'price'=>'required|numeric',
            'offer_price'=>'required|numeric',
            'discount'=>'required|numeric',
            'stock'=>'required|numeric',
            'brand'=>'required',
            'category'=>'required',
            'size'=>'required',
            'conditions'=>'required',
            'photo'=> 'image|mimes:jpeg,png,jpg,gif,svg',
            'status'=>'required'
        ]);
        $slug= Str::slug($request->title);
        $slug_count= Product::where('slug',$slug)->count();
        if($slug_count>0){
          $slug.=time().'-'.$slug;
        }
       if ($image = $request->file('photo')) {

        if(File::exists(public_path('backend/products').'/'.$product->photo)) {
          unlink(public_path('backend/products').'/'.$product->photo);
      }
        $destinationPath = 'backend/products/';
        $prodImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $prodImage);

       
            $status=$product->update([
                'title'=>$request->title,
                'photo'=>$prodImage,
                'summary'=>$request->summary,
                'status'=>$request->status,
                'slug'=>$slug,
                'description'=>$request->description,
                'price'=>$request->price,
                'offer_price'=>$request->offer_price,
                'discount'=>$request->discount,
                'stock'=>$request->stock,
                'size'=>$request->size,
                'conditions'=>$request->conditions,
                'brand_id'=>$request->brand,
                'category_id'=>$request->category,
                'vendor_id'=>auth()->user()->id,
            ]);
    
    }else{
      $status=$product->update([
        'title'=>$request->title,
        'summary'=>$request->summary,
        'status'=>$request->status,
        'slug'=>$slug,
        'description'=>$request->description,
        'price'=>$request->price,
        'offer_price'=>$request->offer_price,
        'discount'=>$request->discount,
        'stock'=>$request->stock,
        'size'=>$request->size,
        'conditions'=>$request->conditions,
        'brand_id'=>$request->brand,
        'category_id'=>$request->category,
        'vendor_id'=>auth()->user()->id,
    ]);
    }
      if($status){
        return redirect()->route('product.index')->with('success','Successfully Product updated');
      }else{
            return back()->with('error','Something went wrong');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
          
        if(File::exists(public_path('backend/products').'/'.$product->photo)) {
            unlink(public_path('backend/products').'/'.$product->photo);
        }
        $product->delete();
        return redirect()->route('product.index')->with('success','Successfully product deleted');
    }
}