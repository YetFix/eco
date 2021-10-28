@extends('front.master')
@section('content')
<?php
 $categories=\App\Models\Category::all();
 ?>
<div class="ps-container">
    <div class="mt-40 mb-40">
        <div class="ps-my-account">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
                <form class="ps-form--account ps-tab-root" method="POST" action="/login">
                    @csrf
                    <div class="ps-form__content">
                        <h4>Log In Your Account</h4>
                        <div class="form-group">
                            <input class="form-control" name="email" type="email" value="" placeholder="Your Email">
                        </div>
                        <div class="form-group form-forgot">
                            <input class="form-control" type="password" name="password" placeholder="Password"><a
                                href="/reset">Forgot?</a>
                        </div>

                        <div class="form-group submit">
                            <button class="ps-btn ps-btn--fullwidth" type="submit">Login</button>
                        </div>
                        <div class="form-group">
                            <p class="text-center">Don't Have an Account? <a href="{{route('register')}}"
                                    class="d-inline-block">Sign up now</a></p>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @endsection('content')


    <!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bshuddhoshop Admin Dashboard</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <h3>Bshuddhoshop</h3>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
        </div>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-main">
                <div class="app-main__inner ">
                    <div class="tab-content mx-auto">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6 mx-auto">
                                    <div class="main-card mb-3 card ">
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
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="col-md-4 mx-auto">
                                                        <div class="position-relative form-group"><label
                                                                for="exampleEmail11" class="">Email</label><input
                                                                name="email" id="exampleEmail11"
                                                                placeholder="Enter Email" type="email"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-4 mx-auto">
                                                        <div class="position-relative form-group"><label
                                                                for="exampleEmail11" class="">Password</label><input
                                                                name="password" id="exampleEmail11"
                                                                placeholder="Enter Password" type="password"
                                                                class="form-control">
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-4 mx-auto">
                                                        <button class="mt-2 btn btn-primary">Sign in</button>
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
        <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>


<div class="app-wrapper-footer">
    <div class="app-footer">
        <div class="app-footer__inner">
            <div class="app-footer-left">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            Footer Link 1
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            Footer Link 2
                        </a>
                    </li>
                </ul>
            </div>
            <div class="app-footer-right">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            Footer Link 3
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            <div class="badge badge-success mr-1 ml-0">
                                <small>NEW</small>
                            </div>
                            Footer Link 4
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>
<script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html> -->