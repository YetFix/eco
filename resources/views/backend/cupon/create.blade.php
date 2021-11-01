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

                                    <h5 class="card-title">Add a Cupon</h5>
                                    <form action="{{route('cupon.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="position-relative row form-group"><label for="code"
                                                class="col-sm-2 col-form-label">Code</label>
                                            <div class="col-sm-10"><input name="code" id="code"
                                                    placeholder="Enter a code" value="{{old('code')}}" id="code"
                                                    type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="type"
                                                class="col-sm-2 col-form-label">Type</label>
                                            <div class="col-sm-10">
                                                <select name="type" id="type" class="form-control" required>
                                                    <option value="fixed" {{old('type')=='fixed'? 'selected':''}}>
                                                        Fixed</option>
                                                    <option value="percentage"
                                                        {{old('type')=='percentage'? 'selected':''}}>
                                                        Percentage</option>
                                                </select>
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


                                        <div class="position-relative row form-group"><label for="value"
                                                class="col-sm-2 col-form-label">Value</label>
                                            <div class="col-sm-10"><input name="value" id="value"
                                                    placeholder="Enter a value" value="{{old('value')}}" id="value"
                                                    type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <a href="{{route('cupon.index')}}" class="btn btn-warning">Back</a>
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