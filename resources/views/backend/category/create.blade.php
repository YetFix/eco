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

                                    <h5 class="card-title">Add a Category</h5>

                                    <form action="{{route('category.store')}}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="position-relative row form-group"><label for="title"
                                                class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10"><input name="title" id="title"
                                                    placeholder="Enter a name" value="{{old('title')}}" id="title"
                                                    type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="summary"
                                                class="col-sm-2 col-form-label">Summary</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="summary" id="summary"
                                                    rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="position-relative row form-group d-none" id="parent_cat_div"><label
                                                for="parent_id" class="col-sm-2 col-form-label">Parent Category</label>
                                            <div class="col-sm-10">
                                                <select name="parent_id" id="parent_id" class="form-control" required>
                                                    <option value="0">Select Parent Category</option>
                                                    @foreach($cats as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="status"
                                                class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select name="status" id="status" class="form-control" required>
                                                    <option value="active" @if(old( "status"=="active" ?"selected":""
                                                        ))@endif>
                                                        Active</option>
                                                    <option value="inactive" @if(old( "status"=="inactive"
                                                        ?"selected":"" ))@endif>
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
                                                <p class="text-danger text-center">* For Banner best quality image
                                                    should be
                                                    300px X 300px</p>
                                            </div>

                                        </div>

                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <a href="{{route('category.index')}}" class="btn btn-warning">Back</a>
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

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$('#is_parent').change(function(e) {
    e.preventDefault();
    var is_checked = $('#is_parent').prop('checked');
    if (is_checked) {
        $('#parent_cat_div').addClass('d-none');
        $('#parent_cat_div').val('');
    } else {
        $('#parent_cat_div').removeClass('d-none');
    }
});
</script>
@endsection