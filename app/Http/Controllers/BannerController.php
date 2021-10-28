<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id','DESC')->paginate(10);
        return view('backend.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
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
        'description'=>'string|nullable',
        'photo'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
        'condition'=>'required',
        'status'=>'required'
      ]);

      if ($image = $request->file('photo')) {
        $destinationPath = 'backend/Banners/';
        $bannerImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $bannerImage);

        $slug= Str::slug($request->title);
        $slug_count= Banner::where('slug',$slug)->count();
        if($slug_count>0){
          $slug.=time().'-'.$slug;
        }
        
       $status= Banner::create([
            'title'=>$request->title,
            'photo'=>$bannerImage,
            'description'=>$request->description,
            'condition'=>$request->condition,
            'status'=>$request->status,
            'slug'=>$slug,
        ]);

    }
      if($status){
        return redirect()->route('banner.index')->with('success','Successfully banner added');
      }else{
            return back()->with('error','Something went wrong');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('backend.banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
         
      $request->validate([
        'title'=>'required|string',
        'description'=>'string|nullable',
        'photo'=> 'image|mimes:jpeg,png,jpg,gif,svg',
        'condition'=>'required',
        'status'=>'required'
      ]);
      $slug= Str::slug($request->title);
      $slug_count= Banner::where('slug',$slug)->count();
      if($slug_count>0){
        $slug.=time().'-'.$slug;
      }
        if( $image = $request->file('photo')){

           
   
            if(File::exists(public_path('backend/Banners').'/'.$banner->photo)) {
                unlink(public_path('backend/Banners').'/'.$banner->photo);
            }
            $image = $request->file('photo');
            $destinationPath = 'backend/Banners/';
            $bannerImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $bannerImage);
            

           
            $banner->update([
              'title'=>$request->title,
              'photo'=>$bannerImage,
              'description'=>$request->description,
              'condition'=>$request->condition,
              'status'=>$request->status,
              'slug'=>$slug,
            ]);
        }else{
          $banner->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'condition'=>$request->condition,
            'status'=>$request->status,
            'slug'=>$slug,
          ]);
        }
        return redirect()->route('banner.index')->with('success','Successfully banner updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
   
       
      if(File::exists(public_path('backend/Banners').'/'.$banner->photo)) {
          unlink(public_path('backend/Banners').'/'.$banner->photo);
      }
       $banner->delete();
       return redirect()->route('banner.index')->with('success','Successfully banner deleted');
    }
}