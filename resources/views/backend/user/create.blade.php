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

                                    <h5 class="card-title">Add a User</h5>
                                    <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="position-relative row form-group"><label for="username"
                                                class="col-sm-2 col-form-label">User Name</label>
                                            <div class="col-sm-10"><input name="username" id="username"
                                                    placeholder="Enter an username" value="{{old('username')}}"
                                                    id="username" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="full_name"
                                                class="col-sm-2 col-form-label">Full Name</label>
                                            <div class="col-sm-10"><input name="full_name" id="full_name"
                                                    placeholder="Enter Full Name" value="{{old('full_name')}}"
                                                    id="full_name" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="phone"
                                                class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10"><input name="phone" id="phone"
                                                    placeholder="Enter Phone Number" value="{{old('phone')}}" id="phone"
                                                    type="number" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="email"
                                                class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10"><input name="email" id="email"
                                                    placeholder="Enter an email" value="{{old('email')}}" id="email"
                                                    type="email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="password"
                                                class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10"><input name="password" id="password"
                                                    placeholder="Enter Password" value="{{old('password')}}"
                                                    id="password" type="password" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="address"
                                                class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="address" id="address"></textarea>
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
                                        <div class="position-relative row form-group"><label for="role"
                                                class="col-sm-2 col-form-label">Role</label>
                                            <div class="col-sm-10">
                                                <select name="role" id="role" class="form-control" required>
                                                    <option value="vendor" {{old('role')=='vendor'? 'selected':''}}>
                                                        Vendor</option>
                                                    <option value="admin" {{old('role')=='admin'? 'selected':''}}>
                                                        Admin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="position-relative row form-group"><label for="photo"
                                                class="col-sm-2 col-form-label">Photo</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="photo" id="photo">
                                            </div>
                                        </div>

                                        <div class="position-relative row form-check">
                                            <div class="col-sm-10 offset-sm-2">
                                                <a href="{{route('user.index')}}" class="btn btn-warning">Back</a>
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