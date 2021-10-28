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
                            <h5 class="card-title float-left">All Brands</h5>
                            <a href="{{route('brand.create')}}" class="btn btn-sm btn-primary float-right mb-3">Add New
                                Brand</a>

                            <table class="mb-0 table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Photo</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($brands as $brand)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$brand->title}}</td>

                                        <td>
                                            <?php
                                               $path = public_path('backend/brands/'.$brand->photo);
                                            ?>
                                            @if(file_exists($path))
                                            <img src="{{URL::asset('backend/brands/')}}/{{$brand->photo}}"
                                                style="max-width:70px" alt="" />
                                            @else
                                            <img src="{{$brand->photo}}" style="max-width:70px" alt="" />
                                            @endif
                                        </td>
                                        <td>
                                            @if($brand->status=='inactive')
                                            <span class="badge badge-danger">{{$brand->status}}</span>
                                            @else
                                            <span class="badge badge-success">{{$brand->status}}</span>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{route('brand.edit',$brand->id)}}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form method="POST" action="{{route('brand.destroy',$brand->id)}}"
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
                                {{$brands->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection