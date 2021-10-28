@extends('front.master')
@section('content')

<div class="ps-page--shop">
    <div id="app" class="ps-container mt-20">
        <div class="ps-layout--shop">
            <div class="ps-layout__left">
                <div class="screen-darken"></div>
                <div class="ps-layout__left-container">

                    <div class="ps-layout__left-content">

                        <aside class="widget widget_shop">
                            <h4 class="widget-title">Product Categories</h4>
                            <ul class="ps-list--categories">
                                @foreach($categories as $category)
                                <a href="/products/category/{{$category->id}}">
                                    <li>
                                        <p>{{$category->title}}</p>
                                    </li>
                                </a>
                                @endforeach
                            </ul>
                        </aside>
                        <aside class="widget widget_shop">
                            <h4 class="widget-title">By Brands</h4>
                            <figure data-height="250" class="ps-custom-scrollbar">
                                @foreach($brands as $brand)
                                <!-- <div class="ps-checkbox"><input type="checkbox" name="brands[]" id="brand-2124219388-1"
                                        value="1" class="form-control product-filter-item">
                                    <label for="brand-2124219388-1"><span>{{$brand->title}} <span
                                                class="d-inline-block">(3)</span></span></label>
                                </div> -->
                                <a href="/products/brands/{{$brand->id}}">
                                    <p>{{$brand->title}}</p>
                                </a>
                                @endforeach
                            </figure>
                        </aside>

                    </div>
                </div>
            </div>
            <div class="ps-layout__right">

                <div class="ps-shopping ps-tab-root">
                    <div class="row bg-light py-2 mb-3">
                        <div class="col-12 col-sm-6 col-md-3 d-xl-none px-2 px-sm-3">
                            <div class="header__filter d-xl-none mx-auto mb-3 mb-sm-0"><button
                                    id="products-filter-sidebar" type="button"><i class="icon-equalizer"></i><span
                                        class="ml-2">Filter</span></button></div>
                        </div>
                        <div class="col-12 col-md-3 col-xl-6 d-none d-md-block">
                            <div class="products-found pt-2"><strong>{{$products->count()}}</strong><span
                                    class="ml-1">Products found</span>
                            </div>
                        </div>

                    </div>
                    <div class="ps-tabs ps-products-listing">
                        <div class="loading">
                            <div class="half-circle-spinner">
                                <div class="circle circle-1"></div>
                                <div class="circle circle-2"></div>
                            </div>
                        </div> <input type="hidden" name="page" data-value="1">
                        <div class="ps-shopping-product">
                            <div class="row">
                                @foreach($products as $product)
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a href="product/{{$product->id}}"><img
                                                    src="{{URL::asset('backend/products')}}/{{$product->photo}}"
                                                    alt="Dual Camera 20MP"></a>
                                            <div class="ps-product__badge">
                                                {{round((($product->discount/$product->price)*100),2)}}%</div>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="1" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/ajax/quick-view/1"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/1"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a href="/product/{{$product->id}}"
                                                class="ps-product__vendor">{{\App\Models\User::find($product->vendor_id)->full_name}}</a>
                                            <div class="ps-product__content"><a href="product"
                                                    class="ps-product__title">{{$product->title}}</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 71.4286%;"></div>

                                                    </div>
                                                    <p class="ps-product__price  sale ">{{$product->offer_price}}BDT.
                                                        <del>{{$product->price}}BDT. </del>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="ps-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection