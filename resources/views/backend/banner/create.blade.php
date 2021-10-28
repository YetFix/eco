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

                                    <h5 class="card-title">Add a Banner</h5>
                                    <form action="{{route('banner.store')}}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="position-relative row form-group"><label for="title"
                                                class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10"><input name="title" id="title"
                                                    placeholder="Enter a title" value="{{old('title')}}" id="title"
                                                    type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="description"
                                                class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="description" id="description"
                                                    rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="position-relative row form-group"><label for="status"
                                                class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select name="status" id="status" class="form-control" required>
                                                    <option value="active" {{old('status')=='active'? 'selected':''}}>
                                                        Active</option>
                                                    <option value="inactive"
                                                        {{old('status')=='inactive'? 'selected':''}}>
                                                        Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="condition"
                                                class="col-sm-2 col-form-label">Condition</label>
                                            <div class="col-sm-10">
                                                <select name="condition" id="condition" class="form-control" required>
                                                    <option value="banner" @if(old( "condition" ))=="banner"
                                                        ?"selected":"" @endif>
                                                        Banner</option>
                                                    <option value="promo" @if(old( "condition"=="promo" ?"selected":""
                                                        ))@endif>
                                                        Promo</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="position-relative row form-group"><label for="photo"
                                                class="col-sm-2 col-form-label">File</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="photo" id="photo">
                                            </div>
                                            <div class="col-sm-10">

                                            </div>

                                        </div>
                                        <div class="position-relative row form-group">
                                            <div class="col-sm-10">
                                                <p class="text-danger text-center">* For Banner best quality image
                                                    should be
                                                    1230px X 425px</p>
                                            </div>

                                        </div>
                                        <div class="position-relative row form-group">
                                            <div class="col-sm-10">
                                                <p class="text-danger text-center">* For Promo best quality image should
                                                    be
                                                    390px X 193px</p>
                                            </div>

                                        </div>
                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <a href="{{route('banner.index')}}" class="btn btn-warning">Back</a>
                                                <button class="btn btn-primary" type="submit">Submit</button>
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