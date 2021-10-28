@extends('front.master')
@section('content')
<div class="mt-40 mb-40">
    <div class="ps-page--product">
        <div class="ps-container">
            <div class="ps-page__container">
                <div class="ps-page__left">
                    <div class="ps-product--detail ps-product--fullwidth">
                        <div class="ps-product__header">
                            <div class="ps-product__thumbnail" data-vertical="true">
                                <figure>
                                    <div class="ps-wrapper">
                                        <div class="ps-product__gallery slick-initialized slick-slider"
                                            data-arrow="true">
                                            <div class="slick-list draggable">
                                                <div class="slick-track" style="opacity: 1; width: 367px;">
                                                    <div class="slick-slide slick-current slick-active"
                                                        data-slick-index="0" aria-hidden="false"
                                                        style="width: 367px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                                        <div>
                                                            <div class="item"
                                                                style="width: 100%; display: inline-block;">
                                                                <a href="{{URL::asset('backend/products')}}/{{$product->photo}}"
                                                                    tabindex="0">
                                                                    <img src="{{URL::asset('backend/products')}}/{{$product->photo}}"
                                                                        alt="{{$product->name}}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                                <div class="ps-product__variants slick-initialized slick-slider slick-vertical"
                                    data-item="4" data-md="4" data-sm="4" data-arrow="false">
                                    <div class="slick-list draggable" style="height: 264px;">
                                        <div class="slick-track"
                                            style="opacity: 1; height: 66px; transform: translate3d(0px, 0px, 0px);">
                                            <div class="slick-slide slick-current slick-active" data-slick-index="0"
                                                aria-hidden="false" style="width: 60px;">
                                                <div>
                                                    <div class="item" style="width: 100%; display: inline-block;">
                                                        <img src="{{URL::asset('backend/products')}}/{{$product->photo}}"
                                                            alt="{{$product->name}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product__info">
                                <h1>{{$product->name}}</h1>
                                <div class="ps-product__meta">
                                    <p>Brand: <a href="">{{\App\Models\Brand::find($product->brand_id)->title}}</a>
                                    </p>
                                    <div class="rating_wrap">
                                        <a href="#tab-reviews">
                                            <div class="rating">
                                                <div class="product_rate" style="width: 71.428571428571%"></div>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                                <h4 class="ps-product__price  sale "><span>{{$product->offer_price}}</span>
                                    <del>{{$product->price}} </del>
                                </h4>
                                <div class="ps-product__desc">
                                    <p>Sold By: <a
                                            href="#"><strong>{{\App\Models\User::find($product->vendor_id)->full_name}}</strong></a>
                                    </p>
                                    <div class="ps-list--dot">
                                        {{$product->summary}}
                                    </div>
                                </div>


                                <div class="number-items-available mb-3">
                                    <span class="text-success">
                                        ({{$product->stock}} products available)
                                    </span>
                                </div>
                                <form class="add-to-cart-form" method="POST"
                                    action="https://martfury.botble.com/cart/add-to-cart">
                                    <input type="hidden" name="_token" value="rGmIhzQnCbJ4DnAl8M7QwSPlWCLmWeec3trz3hfr">
                                    <div class="ps-product__shopping">
                                        <figure>
                                            <figcaption>Quantity</figcaption>
                                            <div class="form-group--number product__qty">
                                                <button class="up" type="button"><i class="icon-plus"></i></button>
                                                <button class="down" type="button"><i class="icon-minus"></i></button>
                                                <input class="form-control qty-input" type="text" name="qty" value="1"
                                                    placeholder="1" readonly="">
                                            </div>
                                        </figure>
                                        <input type="hidden" name="id" class="hidden-product-id" value="24">
                                        <button class="ps-btn ps-btn--black " type="submit">Add to cart</button>
                                        <button class="ps-btn " type="submit" name="checkout">Buy Now</button>
                                        <div class="ps-product__actions">
                                            <a class="js-add-to-wishlist-button" href="#"
                                                data-url="https://martfury.botble.com/wishlist/1"><i
                                                    class="icon-heart"></i></a>
                                        </div>
                                    </div>
                                </form>
                                <div class="ps-product__specification">

                                    <p class="categories"><strong> Category:</strong>
                                        {{\App\Models\Category::find($product->category_id)->title}}
                                    </p>

                                </div>
                                <div class="ps-product__sharing">
                                    <a class="facebook"
                                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fmartfury.botble.com%2Fproducts%2Fdual-camera-20mp"
                                        target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fmartfury.botble.com%2Fproducts%2Fdual-camera-20mp&amp;summary= Unrestrained and portable active stereo speaker
             Free from the confines of wires and chords
             20 hours of portable capabilities
             Double-ended Coil Cord with 3.5mm Stereo Plugs Included
             3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    <a class="twitter" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fmartfury.botble.com%2Fproducts%2Fdual-camera-20mp&amp;text= Unrestrained and portable active stereo speaker
             Free from the confines of wires and chords
             20 hours of portable capabilities
             Double-ended Coil Cord with 3.5mm Stereo Plugs Included
             3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X" target="_blank"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ps-product__content ps-tab-root">
                            <ul class="ps-tab-list">
                                <li class="active"><a href="#tab-description">Description</a></li>


                            </ul>
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="tab-description">
                                    <div class="ps-document">
                                        <div>
                                            {{$product->description}}
                                        </div>
                                        <br>
                                        <div class="facebook-comment">
                                            <div class="fb-comments" data-href="/product" data-numposts="5"
                                                data-width="100%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-page__right">
                    <aside class="widget widget_product widget_features">
                        <p><i class="icon-network"></i> Shipping worldwide</p>
                        <p><i class="icon-3d-rotate"></i> Free 7-day return if eligible, so easy</p>
                        <p><i class="icon-receipt"></i> Supplier give bills for this product.</p>
                        <p><i class="icon-credit-card"></i> Pay online or when receiving goods</p>
                    </aside>

                </div>
            </div>

            <div id="products" class="ps-section--default">
                <div class="ps-section__header">
                    <h3>Related products</h3>
                </div>
                <div class="ps-section__content">

                    <div data-owl-auto="true" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30"
                        data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2"
                        data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5"
                        data-owl-duration="1000" data-owl-mousedrag="on"
                        class="ps-carousel--nav owl-slider owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-273px, 0px, 0px); transition: all 1s ease 0s; width: 1638px;">
                                @foreach($rproducts as $product)
                                <div class="owl-item" style="width: 243px; margin-right: 30px;">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail">
                                            <a href="/product/{{$product->id}}">
                                                <img src="{{URL::asset('backend/products')}}/{{$product->photo}}"
                                                    alt="Smart Watches">
                                            </a>
                                            <div class="ps-product__badge">
                                                {{round((($product->discount/$product->price)*100),2)}}%</div>
                                            <ul class="ps-product__actions">
                                                <li><a class="add-to-cart-button" data-id="2" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                <li><a class="js-quick-view-button" href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/2"
                                                        title="Quick View"><i class="icon-eye"></i></a></li>
                                                <li><a class="js-add-to-wishlist-button" href="#"
                                                        data-url="https://martfury.botble.com/wishlist/2"
                                                        title="Add to Wishlist"><i class="icon-heart"></i></a></li>
                                                <li><a class="js-add-to-compare-button" href="#"
                                                        data-url="https://martfury.botble.com/compare/2"
                                                        title="Compare"><i class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container">
                                            <a class="ps-product__vendor" href="#">Dr. Pascale
                                                Collins</a>
                                            <div class="ps-product__content">
                                                <a class="ps-product__title"
                                                    href="/product/{{$product->id}}">{{$product->title}}</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 65%"></div>
                                                    </div>

                                                </div>

                                                <p class="ps-product__price  sale ">{{$product->offer_price}}BDT.
                                                    <del>{{$product->price}}BDT. </del>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                                    class="icon-chevron-left"></i></button><button type="button" role="presentation"
                                class="owl-next disabled"><i class="icon-chevron-right"></i></button></div>
                        <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button
                                role="button" class="owl-dot active"><span></span></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection