<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\Brand;
use App\Models\Cupon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CuponController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cupons = Cupon::orderBy('id','DESC')->paginate(5);
        return view('backend.cupon.index',compact('cupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cupon.create');
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
        'code'=>'required|string|unique:cupons',
        'type'=> 'required',
        'status'=>'required',
        'value'=> 'required',
      ]);
       $status= Cupon::create([
            'code'=>$request->code,
            'type'=>$request->type,
            'value'=>$request->value,
            'status'=>$request->status,
        ]);

      if($status){
        return redirect()->route('cupon.index')->with('success','Successfully cupon added');
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
    public function edit(Cupon $cupon)
    {
        return view('backend.cupon.edit',compact('cupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cupon  $cupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cupon $cupon)
    {
          $request->validate([
            'code'=>'required|string',
            'type'=> 'required',
            'status'=>'required',
            'value'=> 'required',
          ]);
          $cupon->update([
            'code'=>$request->code,
            'type'=>$request->type,
            'value'=>$request->value,
            'status'=>$request->status,
           
          ]);
          return redirect()->route('cupon.index')->with('success','Successfully cupon updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cupon $cupon)
    {
  
        $cupon->delete();
        return redirect()->route('cupon.index')->with('success','Successfully cupon deleted');
    }
        
}