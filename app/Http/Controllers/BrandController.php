<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id','DESC')->paginate(5);
        return view('backend.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       $request->validate([
        'title'=>'required|string',
        'photo'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
        'status'=>'required'
      ]);

      if ($image = $request->file('photo')) {
        $destinationPath = 'backend/brands/';
        $brandImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $brandImage);

        $slug= Str::slug($request->title);
        $slug_count= Brand::where('slug',$slug)->count();
        if($slug_count>0){
          $slug.=time().'-'.$slug;
        }
        
       $status= Brand::create([
            'title'=>$request->title,
            'photo'=>$brandImage,
            'status'=>$request->status,
            'slug'=>$slug,
        ]);

    }
      if($status){
        return redirect()->route('brand.index')->with('success','Successfully brand added');
      }else{
            return back()->with('error','Something went wrong');
      }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('backend.brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'title'=>'required|string',
            'photo'=> 'image|mimes:jpeg,png,jpg,gif,svg',
            'status'=>'required'
          ]);
          $slug= Str::slug($request->title);
          $slug_count= Brand::where('slug',$slug)->count();
          if($slug_count>0){
            $slug.=time().'-'.$slug;
          }
            if( $image = $request->file('photo')){
    
               
       
                if(File::exists(public_path('backend/brands').'/'.$brand->photo)) {
                    unlink(public_path('backend/brands').'/'.$brand->photo);
                }
                $image = $request->file('photo');
                $destinationPath = 'backend/brands/';
                $bannerImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $bannerImage);
                
    
               
                $brand->update([
                  'title'=>$request->title,
                  'photo'=>$bannerImage,

                  'status'=>$request->status,
                  'slug'=>$slug,
                ]);
            }else{
              $brand->update([
                'title'=>$request->title,
                'status'=>$request->status,
                'slug'=>$slug,
              ]);
            }
            return redirect()->route('brand.index')->with('success','Successfully brand updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
         
      if(File::exists(public_path('backend/brands/').'/'.$brand->photo)) {
        unlink(public_path('backend/brands').'/'.$brand->photo);
        }
        $brand->delete();
        return redirect()->route('brand.index')->with('success','Successfully brand deleted');
        }
        
}