<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <meta name="csrf-token" content="rYSzEgqHbYHaVdDH55hGqpHGOGvoBf8Ko9MIQeuj">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext"
        rel="stylesheet" type="text/css">

    <style>
    :root {
        --color-1st: #fcb800;
        --color-2nd: #222222;
        --primary-font: 'Work Sans', sans-serif;
        --button-text-color: #000;
        --header-text-color: #000;
        --header-text-hover-color: #fff;
        --header-text-accent-color: #222222;
        --header-diliver-border-color: rgba(0, 0, 0, 0.15);
    }
    </style>
    <link rel="shortcut icon" href="storage/general/favicon.png">
    <title>Bshuddhoshop - Popularl Ecommerce Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42586526-15"
        type="2fc93ab7b3487bec21ef2992-text/javascript"></script>

    <meta property="og:site_name" content="">
    <meta property="og:title" content="Martfury - Laravel Ecommerce system">
    <meta property="og:description" content="">
    <meta property="og:url" content="https://martfury.botble.com">
    <meta property="og:type" content="article">
    <meta name="twitter:title" content="Bshuddhoshop- Laravel Ecommerce system">
    <meta name="twitter:description" content="">


    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('assets1/themes/martfury/fonts/Linearicons/Linearicons/Font/demo-files/demo.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('assets1/themes/martfury/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('assets1/themes/martfury/plugins/owl-carousel/assets/owl.carousel.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('assets1/themes/martfury/plugins/owl-carousel/assets/owl.theme.default.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('assets1/themes/martfury/plugins/slick/slick.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('assets1/themes/martfury/plugins/nouislider/nouislider.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('assets1/themes/martfury/plugins/lightGallery/css/lightgallery.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('assets1/themes/martfury/plugins/jquery-bar-rating/themes/fontawesome-stars.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('assets1/themes/martfury/plugins/select2/css/select2.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('assets1/themes/martfury/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link media="all" type="text/css" rel="stylesheet"
        href="{{ asset('assets1/themes/martfury/css/stylefa29.css?v=1.13.0') }}">
</head>

<body>
    <?php
            $categories=\App\Models\Category::all();
            ?>

    <header class="header header--1" data-sticky="true" id="header-ajax">
        <div class="header__top">
            <div class="ps-container">
                <div class="header__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span></span></div>
                        <div class="menu__content" style="display: none">
                            <ul class="menu--dropdown">
                                @foreach($categories as $category)
                                <li>
                                    <a href="products/category/{{$category->id}}">
                                        <i class="icon-wrench"></i>
                                        {{$category->title}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <a href="/">
                        <h2>Bshuddhoshop</h2>
                    </a>
                </div>
                <div class="header__center">
                    <form class="ps-form--quick-search" action="" method="get">
                        <div class="form-group--icon">
                            <div class="product-cat-label">All</div>
                            <select class="form-control product-category-select" name="categories[]">
                                <option value="0">All</option>

                                <option class="level-0" value="2">Electronics</option>

                                <option class="level-2" value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home Audio &amp;
                                    Theaters</option>
                                <option class="level-2" value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TV &amp; Videos
                                </option>
                                <option class="level-2" value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Camera, Photos
                                    &amp; Videos</option>
                                <option class="level-2" value="7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cellphones &amp;
                                    Accessories</option>
                                <option class="level-2" value="8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Headphones
                                </option>
                                <option class="level-2" value="9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Videos games
                                </option>


                                <option class="level-0" value="16">Clothing</option>
                                <option class="level-0" value="17">Computers</option>
                                <option class="level-1" value="18">&nbsp;&nbsp;&nbsp;Computer &amp; Technologies
                                </option>
                                <option class="level-2" value="19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computer &amp;
                                    Tablets</option>
                                <option class="level-2" value="20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laptop</option>
                                <option class="level-2" value="21">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Monitors</option>
                                <option class="level-2" value="22">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Computer

                                <option class="level-0" value="28">Home &amp; Kitchen</option>
                                <option class="level-0" value="29">Health &amp; Beauty</option>
                                <option class="level-0" value="30">Jewelry &amp; Watch</option>

                            </select>
                        </div>
                        <input class="form-control" name="q" type="text" placeholder="I&#039;m shopping for..."
                            id="input-search" autocomplete="off">
                        <div class="spinner-icon">
                            <i class="fa fa-spin fa-spinner"></i>
                        </div>
                        <button type="submit">Search</button>
                        <div class="ps-panel--search-result"></div>
                    </form>
                </div>
                <div class="header__right">
                    <div class="header__actions">
                        <a class="header__extra btn-wishlist" href="/wishlist"><i
                                class="icon-heart"></i><span><i>0</i></span></a>
                        <div class="ps-cart--mini">
                            <a class="header__extra btn-shopping-cart" href="/cart"><i
                                    class="icon-bag2"></i><span><i>{{\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count()}}</i></span></a>
                            <div class="ps-cart--mobile">
                                <div class="ps-cart__content">
                                    <div class="ps-cart__items ps-cart_no_items">
                                        <span class="cart-empty-message">No products in the cart.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-block--user-header">
                            <div class="ps-block__left"><i class="icon-user"></i></div>
                            <div class="ps-block__right">
                                <a href="{{route('login')}}">Login</a><a href="{{route('register')}}">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="ps-container">
                <div class="navigation__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Categroies</span></div>
                        <div class="menu__content" style="display: none">
                            <ul class="menu--dropdown">
                                @foreach($categories as $category)
                                <li>
                                    <a href="products/category/{{$category->id}}">
                                        <i class="icon-wrench"></i>
                                        {{$category->title}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navigation__right">
                    <ul class="menu">
                        <li class="{{ request()->is('/') ? 'current-menu-item' : '' }}">
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/shop" class="{{ request()->is('/shop') ? 'current-menu-item' : '' }}">
                                Shop
                            </a>

                        </li>
                        <li class="  ">
                            <a href="/blog">
                                Blog
                            </a>
                        </li>
                        <li class="  ">
                            <a href="/faq">
                                FAQs
                            </a>
                        </li>
                        <li class="  ">
                            <a href="/contact">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <ul class="navigation__extra">
                        <li><a href="#">Sell On Martfury</a></li>
                        <li><a href="/orders/track">Track your order</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <header class="header header--mobile mt-0 pt-0" data-sticky="true">

        <div class="navigation--mobile m-0 p-0">
            <div class="navigation__left">
                <a href="/">
                    <h1 class="text-center">Bshuddhoshop</h1>
                </a>
            </div>
            <div class="navigation__right">
                <div class="header__actions">
                    <div class="ps-cart--mini">
                        <a class="header__extra btn-shopping-cart" href="/cart">
                            <i
                                class="icon-bag2"></i><span><i>{{\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count()}}</i></span>
                        </a>
                        <div class="ps-cart--mobile">
                            <div class="ps-cart__content">
                                <div class="ps-cart__items ps-cart_no_items">
                                    <span class="cart-empty-message">No products in the cart.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-block--user-header">
                        <div class="ps-block__left"><a href="{{route('login')}}"><i class="icon-user"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="" method="get">
                <div class="form-group--nest">
                    <input class="form-control" name="q" value="" type="text" placeholder="Search something...">
                    <button type="submit"><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
    </header>
    <div class="ps-panel--sidebar" id="cart-mobile" style="display: none">
        <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                    <div class="ps-cart__items ps-cart_no_items">
                        <span class="cart-empty-message">No products in the cart.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-panel--sidebar" id="navigation-mobile" style="display: none">
        <div class="ps-panel__header">
            <h3>Categories</h3>


        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                @foreach($categories as $category)
                <li>
                    <a href="products/category/{{$category->id}}">
                        <i class="icon-wrench"></i>
                        {{$category->title}}
                    </a>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
    <div class="navigation--list">
        <div class="navigation__content">
            <a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-list4"></i><span>
                    Menu</span></a>
            <a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span>
                    Search</span></a>
            <a class="navigation__item " href="{{route('cart')}}"><i class="icon-bag2"></i><span>
                    Cart</span></a>
        </div>
    </div>
    <div class="ps-panel--sidebar" id="search-sidebar" style="display: block">
        <div class="ps-panel__header">
            <form class="ps-form--search-mobile" action="" method="get">
                <div class="form-group--nest">
                    <input class="form-control" name="q" value="" type="text" placeholder="Search something...">
                    <button type="submit"><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
        <div class="navigation__content"></div>
    </div>
    <div class="ps-panel--sidebar" id="menu-mobile" style="display: block">
        <div class="ps-panel__header">
            <h3>Menu</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li class="current-menu-item ">
                    <a href="/">
                        Home
                    </a>
                </li>

                <li class=" menu-item-has-children   ">
                    <a href="/shop">
                        Shop
                    </a>
                </li>
                <li class="  ">
                    <a href="/blog">
                        Blog
                    </a>
                </li>
                <li class="  ">
                    <a href="/faq">
                        FAQs
                    </a>
                </li>
                <li class="  ">
                    <a href="/contact">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>