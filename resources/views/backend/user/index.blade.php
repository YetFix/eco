@extends('backend.layouts.master')

@section('content')
<div class="app-main">
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <div class="col-md-12 mx-auto">
                    @include('backend.layouts.notifications')
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title float-left">All Users</h5>
                            <a href="{{route('user.create')}}" class="btn btn-sm btn-primary float-right mb-3">Add New
                                User</a>

                            <table class="mb-0 table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Photo</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$user->full_name}}</td>

                                        <td><?php
                                               $path = public_path('backend/users/'.$user->photo);
                                            ?>
                                            @if(file_exists($path))
                                            <img src="{{URL::asset('backend/users/')}}/{{$user->photo}}"
                                                style="max-width:70px" alt="" />
                                            @else
                                            <img src="{{$user->photo}}" style="max-width:70px" alt="" />
                                            @endif
                                        </td>
                                        <td>
                                            {{$user->email}}
                                        </td>
                                        <td>{{$user->role}}</td>
                                        <td>{{$user->status}}</td>
                                        <td>
                                            <a href="{{route('user.edit',$user->id)}}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form method="POST" action="{{route('user.destroy',$user->id)}}"
                                                style="display: inline;">
                                                @csrf
                                                @method("DELETE")
                                                <button class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            <div class="d-flex justify-content-center mt-2">
                                {{$users->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection