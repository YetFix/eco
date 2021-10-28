@extends('backend.layouts.master')

@section('content')
<div class="app-main">
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <div class=" mx-auto">
                    @include('backend.layouts.notifications')
                    <div class="main-card mb-3 card">

                        <div class="card-body">
                            <h5 class="card-title float-left">All Categories</h5>
                            <a href="{{route('category.create')}}" class="btn btn-sm btn-primary float-right mb-3">Add
                                New
                                Category</a>

                            <table class="mb-0 table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Summary</th>
                                        <th>Photo</th>
                                        <th>Is_Parent</th>
                                        <th>Parent Category</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$category->title}}</td>
                                        <td>{{$category->summary}}</td>
                                        <td>
                                            <?php
                                               $path = public_path('backend/categories/'.$category->photo);
                                            ?>
                                            @if(file_exists($path))
                                            <img src="{{URL::asset('backend/categories')}}/{{$category->photo}}"
                                                style="max-width:70px" alt="" />
                                            @else
                                            <img src="{{$category->photo}}" style="max-width:70px" alt="" />
                                            @endif
                                        </td>
                                        <td>{{$category->is_parent==1?'Yes':'No'}}</td>
                                        <td>{{\App\Models\Category::where('id',$category->parent_id)->value('title')}}
                                        </td>
                                        <td>
                                            @if($category->status=='inactive')
                                            <span class="badge badge-danger">{{$category->status}}</span>
                                            @else
                                            <span class="badge badge-success">{{$category->status}}</span>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{route('category.edit',$category->id)}}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form method="POST" action="{{route('category.destroy',$category->id)}}"
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
                                {{$categories->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection