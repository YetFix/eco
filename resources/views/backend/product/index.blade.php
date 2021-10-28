@extends('backend.layouts.master')

@section('content')
<div class="app-main">
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <div class="mx-auto">
                    @include('backend.layouts.notifications')
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title float-left">All Products</h5>
                            <a href="{{route('product.create')}}" class="btn btn-sm btn-primary float-right mb-3">Add
                                New
                                Product</a>

                            <table class="mb-0 table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Photo</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Brand</th>
                                        <th>Category</th>
                                        <th>Vendor</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$product->title}}</td>

                                        <td>
                                            <?php
                                               $path = public_path('backend/products/'.$product->photo);
                                            ?>
                                            @if(file_exists($path))
                                            <img src="{{URL::asset('backend/products/')}}/{{$product->photo}}"
                                                style="max-width:70px" alt="" />
                                            @else
                                            <img src="{{$product->photo}}" style="max-width:70px" alt="" />
                                            @endif
                                        </td>
                                        <td>{{$product->stock}}</td>
                                        <td>{{number_format($product->price,2)}}</td>
                                        <td>{{\App\Models\Brand::where('id',$product->brand_id)->value('title')}}</td>
                                        <td>{{\App\Models\Category::where('id',$product->category_id)->value('title')}}
                                        </td>
                                        <td>{{\App\Models\User::where('id',$product->vendor_id)->value('full_name')}}
                                        </td>
                                        <td>
                                            @if($product->status=='inactive')
                                            <span class="badge badge-danger">{{$product->status}}</span>
                                            @else
                                            <span class="badge badge-success">{{$product->status}}</span>
                                            @endif
                                        </td>

                                        <td>
                                            <a href="{{route('product.edit',$product->id)}}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form method="POST" action="{{route('product.destroy',$product->id)}}"
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
                                {{$products->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection