@extends('backend.layouts.master')

@section('content')
<div class="app-main">
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="tab-content">
                        <div>
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <h5 class="card-title">Update Product</h5>
                                    <form action="{{route('product.update',$product->id)}}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                        <div class="position-relative row form-group"><label for="title"
                                                class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10"><input name="title" id="title"
                                                    placeholder="Enter a title" value="{{$product->title}}" type="text"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="summary"
                                                class="col-sm-2 col-form-label">Product Summary</label>
                                            <div class="col-sm-10">
                                                <textarea name="summary" id="summary"
                                                    class="form-control">{{$product->summary}}</textarea>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="description"
                                                class="col-sm-2 col-form-label">Product Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" id="description"
                                                    class="form-control">{{$product->description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="status"
                                                class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select name="status" id="status" class="form-control" required>
                                                    <option value="active"
                                                        {{$product->status=='active'? 'selected':''}}>
                                                        Active</option>
                                                    <option value="inactive" {$product->status=='inactive'?
                                                        'selected':''}}>
                                                        Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="price"
                                                class="col-sm-2 col-form-label">Price</label>
                                            <div class="col-sm-10"><input name="price" id="price"
                                                    placeholder="Enter a price" value="{{$product->price}}"
                                                    type="number" step="any" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="offer_price"
                                                class="col-sm-2 col-form-label">Offer Price</label>
                                            <div class="col-sm-10"><input name="offer_price" id="offer_price"
                                                    placeholder="Enter a offer price" value="{{$product->offer_price}}"
                                                    type="number" step="any" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="discount"
                                                class="col-sm-2 col-form-label">Discount</label>
                                            <div class="col-sm-10"><input name="discount" id="discount"
                                                    placeholder="Enter a discount" value="{{$product->discount}}"
                                                    type="number" step="any" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="stock"
                                                class="col-sm-2 col-form-label">Stock</label>
                                            <div class="col-sm-10"><input name="stock" id="stock"
                                                    placeholder="Enter stocks" value="{{$product->stock}}" type="number"
                                                    step="any" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="brand"
                                                class="col-sm-2 col-form-label">Brand</label>
                                            <div class="col-sm-10">
                                                <select name="brand" id="brand" class="form-control" required>
                                                    @foreach($brands as $brand)
                                                    <option value="{{$brand->id}}">
                                                        {{$brand->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="category"
                                                class="col-sm-2 col-form-label">Category</label>
                                            <div class="col-sm-10">
                                                <select name="category" id="category" class="form-control" required>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}">
                                                        {{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="position-relative row form-group"><label for="size"
                                                class="col-sm-2 col-form-label">Size</label>
                                            <div class="col-sm-10">
                                                <select name="size" id="size" class="form-control" required>

                                                    <option value="S">
                                                        Small
                                                    </option>
                                                    <option value="M">
                                                        Medium
                                                    </option>
                                                    <option value="L">
                                                        Large
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="conditions"
                                                class="col-sm-2 col-form-label">Conditions</label>
                                            <div class="col-sm-10">
                                                <select name="conditions" id="conditions" class="form-control" required>

                                                    <option value="new" {{$product->conditions=='new'? 'selected':""}}>
                                                        New
                                                    </option>
                                                    <option value="popular"
                                                        {{$product->conditions=='popular'? 'selected':""}}>
                                                        Popular
                                                    </option>
                                                    <option value="winter"
                                                        {{$product->conditions=='winter'? 'selected':""}}>
                                                        Winter
                                                    </option>
                                                    <option value="summer"
                                                        {{$product->conditions=='summer'? 'selected':""}}>
                                                        Summer
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="photo"
                                                class="col-sm-2 col-form-label">File</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="photo" id="photo">
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group">
                                            <div class="col-sm-10">
                                                <p class="text-danger text-center">* For product best quality image size
                                                    shoild be 300px X300px </p>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <a href="{{route('product.index')}}" class="btn btn-warning"
                                                    type="submit">Cancel</a>
                                                <button class="btn btn-primary" type="submit">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection