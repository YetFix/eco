<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use SebastianBergmann\Environment\Console;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','DESC')->paginate(10);
        return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::orderBy('title','ASC')->get();
        return view('backend.category.create',compact('cats'));
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
            'title'=>'string|required',
            'summary'=>'nullable|string',
            'status'=>'required',
            'photo'=>'required'
        ]);
        if ($image = $request->file('photo')) {
            $destinationPath = 'backend/categories/';
            $categoryImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $categoryImage);
    
            $slug= Str::slug($request->title);
            $slug_count= Category::where('slug',$slug)->count();
            if($slug_count>0){
              $slug.=time().'-'.$slug;
            }
          
                $status= Category::create([
                    'title'=>$request->title,
                    'photo'=>$categoryImage,
                    'summary'=>$request->summary,
                    'status'=>$request->status,
                    'slug'=>$slug,
                  
                ]);
           
               
            
         
    
        }
          if($status){
            return redirect()->route('category.index')->with('success','Successfully Category added');
          }else{
                return back()->with('error','Something went wrong');
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $cats = Category::orderBy('title','ASC')->get();
        return view('backend.category.edit',compact('category','cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->all();
        $request->validate([
            'title'=>'string|required',
            'summary'=>'nullable|string', 
            'status'=>'required',
           
        ]);
        if ($image = $request->file('photo')) {

            if(File::exists(public_path('backend/categories').'/'.$category->photo)) {
                unlink(public_path('backend/categories').'/'.$category->photo);
            }
            $destinationPath = 'backend/categories/';
            $categoryImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $categoryImage);
    
            $slug= Str::slug($request->title);
            $slug_count= Category::where('slug',$slug)->count();
            if($slug_count>0){
              $slug.=time().'-'.$slug;
            }
            $status= $category->update([
                'title'=>$request->title,
                'photo'=>$categoryImage,
                'summary'=>$request->summary,
                'status'=>$request->status,
                'slug'=>$slug,
              
            ]);
    
        }else{
            $slug= Str::slug($request->title);
            $slug_count= Category::where('slug',$slug)->count();
            if($slug_count>0){
              $slug.=time().'-'.$slug;
            }
            $status= $category->update([
                'title'=>$request->title,
                'summary'=>$request->summary,
                'status'=>$request->status,
                'slug'=>$slug,
            ]);
         
        }
          if($status){
            return redirect()->route('category.index')->with('success','Successfully Category updated');
          }else{
                return back()->with('error','Something went wrong');
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        
       
      if(File::exists(public_path('backend/categories').'/'.$category->photo)) {
        unlink(public_path('backend/categories').'/'.$category->photo);
    }
     $category->delete();
     return redirect()->route('category.index')->with('success','Successfully category deleted');
    }



    public function getChildByParentId(Request $request,$id){
        
        $category=Category::find($request->cat);
        if($category){
            $childCat=Category::where('parent_id',$request->cat)->get();
          
            if($childCat->count()<=0){
                
                return response()->json(['status'=>'false','data'=>'null','msg'=>'']);
            }
           
            return response()->json(['status'=>'true','data'=>$childCat,'msg'=>'']);
        }else{
            return response()->json(['status'=>'false','data'=>'null','msg'=>'']);
        }
    }
}