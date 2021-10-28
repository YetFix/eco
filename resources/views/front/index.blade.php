@extends('front.master')
@section('content')

<div id="homepage-1">
    <div id="app">
        <div>
            <div class="ps-home-banner ps-home-banner--1">
                <div class="ps-container">
                    <div class="ps-section__left">
                        <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true"
                            data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true"
                            data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1"
                            data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on"
                            data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                            @foreach($banners as $banner)
                            @if($banner->condition=='banner')
                            <div class="ps-banner bg--cover"
                                data-background="{{URL::asset('backend/Banners')}}/{{$banner->photo}}">
                                <a class="ps-banner__overlay" href="/product"></a>
                            </div>
                            @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="ps-section__right">
                        <div class="ps-collection">
                            @foreach($banners as $banner)
                            @if($banner->condition=='promo')
                            <div><a href="/product" target="_blank">
                                    <img src="{{URL::asset('backend/Banners')}}/{{$banner->photo}}"
                                        style="max-width: 100%" alt="Top Slider Image 1"></a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="ps-site-features">
                <div class="ps-container">
                    <div class="ps-block--site-features">
                        <div class="ps-block__item">
                            <div class="ps-block__left"><i class="icon-rocket"></i></div>
                            <div class="ps-block__right">
                                <h4>Free Delivery</h4>
                                <p>For all orders over $99</p>
                            </div>
                        </div>
                        <div class="ps-block__item">
                            <div class="ps-block__left"><i class="icon-sync"></i></div>
                            <div class="ps-block__right">
                                <h4>90 Days Return</h4>
                                <p>If goods have problems</p>
                            </div>
                        </div>
                        <div class="ps-block__item">
                            <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                            <div class="ps-block__right">
                                <h4>Secure Payment</h4>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                        <div class="ps-block__item">
                            <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                            <div class="ps-block__right">
                                <h4>24/7 Support</h4>
                                <p>Dedicated support</p>
                            </div>
                        </div>
                        <div class="ps-block__item">
                            <div class="ps-block__left"><i class="icon-gift"></i></div>
                            <div class="ps-block__right">
                                <h4>Gift Service</h4>
                                <p>Support gift service</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="ps-container">
                <h3>Top Categories</h3>
                <div class="row ">
                    @foreach($categories as $category)
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6">
                        <div class="ps-block--category"><a href="/shop" class="ps-block__overlay"></a><img
                                src="{{URL::asset('backend/categories')}}/{{$category->photo}}" alt="Phones">
                            <p>Phones</p>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
        <div>
            <div class="ps-product-list mt-40 mb-40">
                <div class="ps-container">
                    <div class="ps-section__header">
                        <h3>Best Selling products</h3>
                        <ul class="ps-section__links">
                            <li><a href="/shop">View All</a></li>
                        </ul>
                    </div>
                    <featured-products-component url="/" limit=""></featured-products-component>
                    <div class="ps-section__content">

                        <div data-owl-auto="true" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0"
                            data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2"
                            data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="6"
                            data-owl-duration="1000" data-owl-mousedrag="on"
                            class="ps-carousel--responsive owl-slider owl-carousel owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                    style="transform: translate3d(-462px, 0px, 0px); transition: all 1s ease 0s; width: 2083px;">
                                    @foreach($pproducts as $product)
                                    <div class="owl-item" style="width: 231.429px;">
                                        <div class="ps-product">
                                            <div class="ps-product__thumbnail">
                                                <a href="/product/{{$product->id}}">
                                                    <img src="{{URL::asset('backend/products')}}/{{$product->photo}}"
                                                        alt="Dual Camera 20MP">
                                                </a>
                                                <div class="ps-product__badge">{{$product->discount/100}}%</div>
                                                <ul class="ps-product__actions">
                                                    <li><a class="add-to-cart-button" data-quantity="1"
                                                            data-product-id="{{$product->id}}"
                                                            id="add-to-cart-{{$product->id}}" title="Add To Cart"><i
                                                                class="icon-bag2"></i></a></li>
                                                    <li><a class="js-quick-view-button" title="Quick View"><i
                                                                class="icon-eye"></i></a></li>
                                                    <li><a class="js-add-to-wishlist-button" title="Add to Wishlist"><i
                                                                class="icon-heart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__container">
                                                <a class="ps-product__vendor"
                                                    href="/product/{{$product->id}}">{{\App\Models\User::find($product->vendor_id)->full_name}}</a>
                                                <div class="ps-product__content">
                                                    <a class="ps-product__title"
                                                        href="/product/{{$product->id}}">{{$product->title}}</a>
                                                    <div class="rating_wrap">
                                                        <div class="rating">
                                                            <div class="product_rate" style="width: 71.428571428571%">
                                                            </div>
                                                        </div>
                                                        <span class="rating_num">({{rand(5,40)}})</span>
                                                    </div>

                                                    <p class="ps-product__price  sale ">{{$product->offer_price}}
                                                        <del>{{$product->price}} </del>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i
                                        class="icon-chevron-left"></i></button><button type="button" role="presentation"
                                    class="owl-next"><i class="icon-chevron-right"></i></button></div>
                            <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button
                                    role="button" class="owl-dot active"><span></span></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="ps-home-ads mt-40 mb-40">
                <div class="ps-container">
                    <h1 class="text-center">Brands</h1>
                    <div class="row">
                        @foreach($brands as $brand)
                        <div class="col-lg-6">
                            <div class="ps-collection">
                                <div>
                                    <a href="/product" target="_blank">
                                        <img src="{{URL::asset('backend/brands')}}/{{$brand->photo}}"
                                            style="max-width: 100%;height:200px" alt="Homepage big 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div>
                <div class="ps-newsletter mt-40">
                    <div class="ps-container newsletter-form">
                        <form class="ps-form--newsletter" method="post"
                            action="https://martfury.botble.com/newsletter/subscribe">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="ps-form__left">
                                        <h3>Join Our Newsletter Now</h3>
                                        <p>Subscribe to get information about products and coupons</p>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="ps-form__right">
                                        <input type="hidden" name="_token"
                                            value="rYSzEgqHbYHaVdDH55hGqpHGOGvoBf8Ko9MIQeuj">
                                        <div class="form-group--nest">
                                            <input class="form-control" name="email" type="email"
                                                placeholder="Email address">
                                            <button class="ps-btn" type="submit">Subscribe</button>
                                        </div>
                                        <div style="margin-top: 10px;">
                                            <input type="hidden" name="g-recaptcha-response"
                                                id="g-recaptcha-response-615424bb8b969">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @section('js')

    @endsection
    @endsection