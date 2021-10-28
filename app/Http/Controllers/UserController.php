<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','DESC')->paginate(10);
        return view('backend.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.create');
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
            'username'=>'required|string',
            'full_name'=>'required|string',
            'email'=>'required|string|unique:users',
            'address'=>'string|nullable',
            'photo'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'phone'=>'required|numeric',
            'role'=>'required',
            'status'=>'required'
          ]);
    
          if ($image = $request->file('photo')) {
            $destinationPath = 'backend/users/';
            $userImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $userImage);
    
            
           $status= User::create([
                'username'=>$request->username,
                'full_name'=>$request->full_name,
                'photo'=>$userImage,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'phone'=>$request->phone,
                'address'=>$request->address,
                'role'=>$request->role,
                'status'=>$request->status,
            ]);
    
        }
          if($status){
            return redirect()->route('user.index')->with('success','Successfully user added');
          }else{
                return back()->with('error','Something went wrong');
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('backend.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'username'=>'required|string',
            'full_name'=>'required|string',
            'email'=>'required|string',
            'address'=>'string|nullable',
            'photo'=> 'image|mimes:jpeg,png,jpg,gif,svg',
            'phone'=>'required|numeric',
            'status'=>'required',
            'role'=>'required'
          ]);
    
          if ($image = $request->file('photo')) {
            if(File::exists(public_path('backend/users').'/'.$user->photo)) {
                unlink(public_path('backend/users').'/'.$user->photo);
            }
            $destinationPath = 'backend/users/';
            $userImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $userImage);
    
            
           $status=$user->update([
                'username'=>$request->username,
                'full_name'=>$request->full_name,
                'photo'=>$userImage,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'phone'=>$request->phone,
                'address'=>$request->address,
                'status'=>$request->status,
                'status'=>$request->role,
            ]);
    
        }else{
            $status=$user->update([
                'username'=>$request->username,
                'full_name'=>$request->full_name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'phone'=>$request->phone,
                'address'=>$request->address,
                'status'=>$request->status,
                'status'=>$request->role,
            ]);
    

        }
          if($status){
            return redirect()->route('user.index')->with('success','Successfully user update');
          }else{
                return back()->with('error','Something went wrong');
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(File::exists(public_path('backend/users').'/'.$user->photo)) {
            unlink(public_path('backend/users').'/'.$user->photo);
        }
         $user->delete();
         return redirect()->route('user.index')->with('success','Successfully user deleted');
    }
}