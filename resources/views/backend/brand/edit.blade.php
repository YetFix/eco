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

                                    <h5 class="card-title">Update Brand</h5>
                                    <form action="{{route('brand.update',$brand->id)}}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                        <div class="position-relative row form-group"><label for="title"
                                                class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10"><input name="title" id="title"
                                                    placeholder="Enter a title" value="{{$brand->title}}" id="title"
                                                    type="text" class="form-control" required>
                                            </div>
                                        </div>


                                        <div class="position-relative row form-group"><label for="status"
                                                class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select name="status" id="status" class="form-control" required>
                                                    <option value="active" {{$brand->status=='active'?"selected":""}}>
                                                        Active</option>
                                                    <option value="inactive"
                                                        {{$brand->status=='inactive'?"selected":""}}>
                                                        Inactive</option>
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
                                                <p class="text-danger text-center">* For Brand Best quality image should
                                                    be 530px X 285 px</p>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <a href="{{route('brand.index')}}" class="btn btn-warning"
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