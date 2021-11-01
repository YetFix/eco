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
                            <a href="{{route('cupon.create')}}" class="btn btn-sm btn-primary float-right mb-3">Add New
                                Cupon</a>

                            <table class="mb-0 table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Code</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cupons as $cupon)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td>{{$cupon->code}}</td>

                                        <td>
                                            {{$cupon->type}}
                                        </td>
                                        <td>
                                            {{$cupon->status}}
                                        </td>

                                        <td>
                                            <a href="{{route('cupon.edit',$cupon->id)}}"
                                                class="btn btn-sm btn-primary">Edit</a>
                                            <form method="POST" action="{{route('cupon.destroy',$cupon->id)}}"
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
                                {{$cupons->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection