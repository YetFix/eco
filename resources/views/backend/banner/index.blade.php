@extends('backend.layouts.master')

@section('content')
<div class="app-main">
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    @include('backend.layouts.notifications')
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title float-left">All Banners</h5>
                            <a href="{{route('banner.create')}}" class="btn btn-sm btn-primary float-right mb-3">Add New
                                Banner</a>

                            <table class="mb-0 table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                        <th>Status</th>
                                        <th>Condition</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($banners as $banner)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$banner->title}}</td>
                                        <td>{{$banner->description}}</td>
                                        <td><img src="{{URL::asset('backend/Banners')}}/{{$banner->photo}}"
                                                style="max-width:70px" alt="" /></td>
                                        <td>
                                            @if($banner->status=='inactive')
                                            <span class="badge badge-danger">{{$banner->status}}</span>
                                            @else
                                            <span class="badge badge-success">{{$banner->status}}</span>
                                            @endif
                                        </td>
                                        <td>{{$banner->condition}}</td>
                                        <td>
                                            <a href="{{route('banner.edit',$banner->id)}}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form method="POST" action="{{route('banner.destroy',$banner->id)}}"
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
                                {{$banners->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection