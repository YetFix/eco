@extends('front.master')
@section('content')

<div class="ps-page--shop">
    <div id="app" class="ps-container mt-20">
        <div class="ps-layout--shop">
            <div class="ps-layout__left">
                <div class="screen-darken"></div>
                <div class="ps-layout__left-container">
                    <div class="ps-filter__header d-block d-xl-none">
                        <h3>Filter Products</h3><a href="#" class="ps-btn--close ps-btn--no-boder"></a>
                    </div>
                    <div class="ps-layout__left-content">
                        <form action="https://martfury.botble.com/products"
                            data-action="https://martfury.botble.com/products" method="GET" id="products-filter-form">
                            <aside class="widget widget_shop">
                                <h4 class="widget-title">Product Categories</h4>
                                <ul class="ps-list--categories">
                                    <li class=" "><a href="product">Hot
                                            Promotions</a></li>

                                    <li class=" "><a
                                            href="https://martfury.botble.com/product-categories/clothing">Clothing</a>
                                    </li>
                                    <li class="  menu-item-has-children "><a
                                            href="https://martfury.botble.com/product-categories/computers">Computers</a>
                                        <span class="sub-toggle"><i class="icon-angle"></i></span>
                                        <ul class="sub-menu">
                                            <li class="  menu-item-has-children "><a
                                                    href="https://martfury.botble.com/product-categories/computer-technologies">Computer
                                                    &amp; Technologies</a> <span class="sub-toggle"><i
                                                        class="icon-angle"></i></span>
                                                <ul class="sub-menu">
                                                    <li class=" "><a
                                                            href="https://martfury.botble.com/product-categories/computer-tablets">Computer
                                                            &amp; Tablets</a></li>
                                                    <li class=" "><a
                                                            href="https://martfury.botble.com/product-categories/laptop">Laptop</a>
                                                    </li>
                                                    <li class=" "><a
                                                            href="https://martfury.botble.com/product-categories/monitors">Monitors</a>
                                                    </li>
                                                    <li class=" "><a
                                                            href="https://martfury.botble.com/product-categories/computer-components">Computer
                                                            Components</a></li>
                                                </ul>
                                            </li>
                                            <li class="  menu-item-has-children "><a
                                                    href="https://martfury.botble.com/product-categories/networking">Networking</a>
                                                <span class="sub-toggle"><i class="icon-angle"></i></span>
                                                <ul class="sub-menu">
                                                    <li class=" "><a
                                                            href="https://martfury.botble.com/product-categories/drive-storages">Drive
                                                            &amp; Storages</a></li>
                                                    <li class=" "><a
                                                            href="https://martfury.botble.com/product-categories/gaming-laptop">Gaming
                                                            Laptop</a></li>
                                                    <li class=" "><a
                                                            href="https://martfury.botble.com/product-categories/security-protection">Security
                                                            &amp; Protection</a></li>
                                                    <li class=" "><a
                                                            href="https://martfury.botble.com/product-categories/accessories">Accessories</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" "><a
                                            href="https://martfury.botble.com/product-categories/home-kitchen">Home
                                            &amp; Kitchen</a></li>
                                    <li class=" "><a
                                            href="https://martfury.botble.com/product-categories/health-beauty">Health
                                            &amp; Beauty</a></li>
                                    <li class=" "><a
                                            href="https://martfury.botble.com/product-categories/jewelry-watch">Jewelry
                                            &amp; Watch</a></li>
                                    <li class=" "><a
                                            href="https://martfury.botble.com/product-categories/technology-toys">Technology
                                            Toys</a></li>
                                    <li class=" "><a
                                            href="https://martfury.botble.com/product-categories/phones">Phones</a></li>
                                    <li class=" "><a
                                            href="https://martfury.botble.com/product-categories/babies-moms">Babies
                                            &amp; Moms</a></li>
                                    <li class=" "><a
                                            href="https://martfury.botble.com/product-categories/sport-outdoor">Sport
                                            &amp; Outdoor</a></li>
                                    <li class=" "><a
                                            href="https://martfury.botble.com/product-categories/books-office">Books
                                            &amp; Office</a></li>
                                    <li class=" "><a
                                            href="https://martfury.botble.com/product-categories/cars-motorcycles">Cars
                                            &amp; Motorcycles</a></li>
                                    <li class=" "><a
                                            href="https://martfury.botble.com/product-categories/home-improvements">Home
                                            Improvements</a></li>
                                </ul>
                            </aside>
                            <aside class="widget widget_shop">
                                <h4 class="widget-title">By Brands</h4>
                                <figure data-height="250" class="ps-custom-scrollbar">
                                    <div class="ps-checkbox"><input type="checkbox" name="brands[]"
                                            id="brand-2124219388-1" value="1" class="form-control product-filter-item">
                                        <label for="brand-2124219388-1"><span>Fashion live <span
                                                    class="d-inline-block">(3)</span></span></label>
                                    </div>
                                    <div class="ps-checkbox"><input type="checkbox" name="brands[]"
                                            id="brand-2124219388-2" value="2" class="form-control product-filter-item">
                                        <label for="brand-2124219388-2"><span>Hand crafted <span
                                                    class="d-inline-block">(5)</span></span></label>
                                    </div>
                                    <div class="ps-checkbox"><input type="checkbox" name="brands[]"
                                            id="brand-2124219388-3" value="3" class="form-control product-filter-item">
                                        <label for="brand-2124219388-3"><span>Mestonix <span
                                                    class="d-inline-block">(2)</span></span></label>
                                    </div>
                                    <div class="ps-checkbox"><input type="checkbox" name="brands[]"
                                            id="brand-2124219388-4" value="4" class="form-control product-filter-item">
                                        <label for="brand-2124219388-4"><span>Sunshine <span
                                                    class="d-inline-block">(3)</span></span></label>
                                    </div>
                                    <div class="ps-checkbox"><input type="checkbox" name="brands[]"
                                            id="brand-2124219388-5" value="5" class="form-control product-filter-item">
                                        <label for="brand-2124219388-5"><span>Pure <span
                                                    class="d-inline-block">(3)</span></span></label>
                                    </div>
                                    <div class="ps-checkbox"><input type="checkbox" name="brands[]"
                                            id="brand-2124219388-6" value="6" class="form-control product-filter-item">
                                        <label for="brand-2124219388-6"><span>Anfold <span
                                                    class="d-inline-block">(5)</span></span></label>
                                    </div>
                                    <div class="ps-checkbox"><input type="checkbox" name="brands[]"
                                            id="brand-2124219388-7" value="7" class="form-control product-filter-item">
                                        <label for="brand-2124219388-7"><span>Automotive <span
                                                    class="d-inline-block">(2)</span></span></label>
                                    </div>
                                </figure>
                            </aside>
                            <aside class="widget widget_shop">
                                <h4 class="widget-title">By Tags</h4>
                                <figure data-height="250" class="ps-custom-scrollbar">
                                    <div class="ps-checkbox"><input type="checkbox" name="tags[]" id="tag-2124219388-5"
                                            value="5" class="form-control product-filter-item"> <label
                                            for="tag-2124219388-5"><span>Office <span
                                                    class="d-inline-block">(12)</span></span></label></div>
                                    <div class="ps-checkbox"><input type="checkbox" name="tags[]" id="tag-2124219388-2"
                                            value="2" class="form-control product-filter-item"> <label
                                            for="tag-2124219388-2"><span>Mobile <span
                                                    class="d-inline-block">(11)</span></span></label></div>
                                    <div class="ps-checkbox"><input type="checkbox" name="tags[]" id="tag-2124219388-6"
                                            value="6" class="form-control product-filter-item"> <label
                                            for="tag-2124219388-6"><span>IT <span
                                                    class="d-inline-block">(11)</span></span></label></div>
                                    <div class="ps-checkbox"><input type="checkbox" name="tags[]" id="tag-2124219388-1"
                                            value="1" class="form-control product-filter-item"> <label
                                            for="tag-2124219388-1"><span>Electronic <span
                                                    class="d-inline-block">(9)</span></span></label></div>
                                    <div class="ps-checkbox"><input type="checkbox" name="tags[]" id="tag-2124219388-3"
                                            value="3" class="form-control product-filter-item"> <label
                                            for="tag-2124219388-3"><span>Iphone <span
                                                    class="d-inline-block">(8)</span></span></label></div>
                                    <div class="ps-checkbox"><input type="checkbox" name="tags[]" id="tag-2124219388-4"
                                            value="4" class="form-control product-filter-item"> <label
                                            for="tag-2124219388-4"><span>Printer <span
                                                    class="d-inline-block">(7)</span></span></label></div>
                                </figure>
                            </aside>
                            <aside class="widget widget_shop">
                                <h4 class="widget-title">By Price</h4>
                                <div class="widget__content nonlinear-wrapper">
                                    <div data-min="0" data-max="100000"
                                        class="nonlinear noUi-target noUi-ltr noUi-horizontal">
                                        <div class="noUi-base">
                                            <div class="noUi-connects">
                                                <div class="noUi-connect"
                                                    style="transform: translate(0%, 0px) scale(1, 1);"></div>
                                            </div>
                                            <div class="noUi-origin"
                                                style="transform: translate(-1000%, 0px); z-index: 5;">
                                                <div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0"
                                                    role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                                    aria-valuemax="100000.0" aria-valuenow="0.0" aria-valuetext="0.00">
                                                    <div class="noUi-touch-area"></div>
                                                </div>
                                            </div>
                                            <div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;">
                                                <div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0"
                                                    role="slider" aria-orientation="horizontal" aria-valuemin="0.0"
                                                    aria-valuemax="100000.0" aria-valuenow="100000.0"
                                                    aria-valuetext="100000.00">
                                                    <div class="noUi-touch-area"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-slider__meta">
                                        <div data-current-exchange-rate="1"></div> <input name="min_price" data-min="0"
                                            value="0" type="hidden"
                                            class="product-filter-item product-filter-item-price-0"> <input
                                            name="max_price" data-max="100000" value="100000" type="hidden"
                                            class="product-filter-item product-filter-item-price-1"> <span
                                            class="ps-slider__value"><span class="ps-slider__min">0</span> USD</span> -
                                        <span class="ps-slider__value"><span class="ps-slider__max">100,000</span> USD
                                        </span>
                                    </div>
                                </div>
                                <figure data-type="visual"
                                    class="visual-swatches-wrapper widget--colors widget-filter-item">
                                    <h4 class="widget-title">By Color</h4>
                                    <div class="widget__content">
                                        <div class="attribute-values">
                                            <ul class="visual-swatch color-swatch">
                                                <li data-slug="green" title="Green">
                                                    <div class="custom-checkbox"><label><input type="checkbox"
                                                                name="attributes[]" value="1"
                                                                class="form-control product-filter-item"> <span
                                                                style="background-color: rgb(95, 183, 212);"></span></label>
                                                    </div>
                                                </li>
                                                <li data-slug="blue" title="Blue">
                                                    <div class="custom-checkbox"><label><input type="checkbox"
                                                                name="attributes[]" value="2"
                                                                class="form-control product-filter-item"> <span
                                                                style="background-color: rgb(51, 51, 51);"></span></label>
                                                    </div>
                                                </li>
                                                <li data-slug="red" title="Red">
                                                    <div class="custom-checkbox"><label><input type="checkbox"
                                                                name="attributes[]" value="3"
                                                                class="form-control product-filter-item"> <span
                                                                style="background-color: rgb(218, 50, 63);"></span></label>
                                                    </div>
                                                </li>
                                                <li data-slug="back" title="Black">
                                                    <div class="custom-checkbox"><label><input type="checkbox"
                                                                name="attributes[]" value="4"
                                                                class="form-control product-filter-item"> <span
                                                                style="background-color: rgb(47, 54, 108);"></span></label>
                                                    </div>
                                                </li>
                                                <li data-slug="brown" title="Brown">
                                                    <div class="custom-checkbox"><label><input type="checkbox"
                                                                name="attributes[]" value="5"
                                                                class="form-control product-filter-item"> <span
                                                                style="background-color: rgb(135, 85, 75);"></span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                                <figure data-type="text" class="text-swatches-wrapper widget-filter-item">
                                    <h4 class="widget-title">By Size</h4>
                                    <div class="widget-content">
                                        <div class="attribute-values">
                                            <ul class="text-swatch">
                                                <li data-slug="s">
                                                    <div><label><input type="checkbox" name="attributes[]" value="6"
                                                                class="product-filter-item"> <span>S</span></label>
                                                    </div>
                                                </li>
                                                <li data-slug="m">
                                                    <div><label><input type="checkbox" name="attributes[]" value="7"
                                                                class="product-filter-item"> <span>M</span></label>
                                                    </div>
                                                </li>
                                                <li data-slug="l">
                                                    <div><label><input type="checkbox" name="attributes[]" value="8"
                                                                class="product-filter-item"> <span>L</span></label>
                                                    </div>
                                                </li>
                                                <li data-slug="xl">
                                                    <div><label><input type="checkbox" name="attributes[]" value="9"
                                                                class="product-filter-item"> <span>XL</span></label>
                                                    </div>
                                                </li>
                                                <li data-slug="xxl">
                                                    <div><label><input type="checkbox" name="attributes[]" value="10"
                                                                class="product-filter-item"> <span>XXL</span></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </figure>
                            </aside> <input type="hidden" name="sort-by" value="" class="product-filter-item"> <input
                                type="hidden" name="layout" value="" class="product-filter-item">
                        </form>
                    </div>
                </div>
            </div>
            <div class="ps-layout__right">
                <div class="ps-block--shop-features">
                    <div class="ps-block__header">
                        <h3>Recommended Items</h3>
                        <div class="ps-block__navigation"><a href="#recommended-products" class="ps-carousel__prev"><i
                                    class="icon-chevron-left"></i></a> <a href="#recommended-products"
                                class="ps-carousel__next"><i class="icon-chevron-right"></i></a></div>
                    </div>
                    <div class="ps-block__content">
                        <div class="ps-section__content">
                            <!---->
                            <div id="recommended-products" data-owl-auto="true" data-owl-loop="false"
                                data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true"
                                data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3"
                                data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000"
                                data-owl-mousedrag="on"
                                class="ps-carousel--responsive owl-slider owl-carousel owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-507px, 0px, 0px); transition: all 1s ease 0s; width: 1523px;">
                                        <div class="owl-item" style="width: 169.167px;">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail">
                                                    <a href="https://martfury.botble.com/products/dual-camera-20mp">
                                                        <img src="https://martfury.botble.com/storage/products/1-300x300.jpg"
                                                            alt="Dual Camera 20MP">
                                                    </a>
                                                    <div class="ps-product__badge">-41%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a class="add-to-cart-button" data-id="1" href="#"
                                                                data-url="https://martfury.botble.com/cart/add-to-cart"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a class="js-quick-view-button" href="#"
                                                                data-url="https://martfury.botble.com/ajax/quick-view/1"
                                                                title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a class="js-add-to-wishlist-button" href="#"
                                                                data-url="https://martfury.botble.com/wishlist/1"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a class="js-add-to-compare-button" href="#"
                                                                data-url="https://martfury.botble.com/compare/1"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container">
                                                    <a class="ps-product__vendor"
                                                        href="https://martfury.botble.com/stores/dr-pascale-collins">Dr.
                                                        Pascale Collins</a>
                                                    <div class="ps-product__content">
                                                        <a class="ps-product__title"
                                                            href="https://martfury.botble.com/products/dual-camera-20mp">Dual
                                                            Camera 20MP</a>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate"
                                                                    style="width: 71.428571428571%"></div>
                                                            </div>
                                                            <span class="rating_num">(7)</span>
                                                        </div>

                                                        <p class="ps-product__price  sale ">$47.35 <del>$80.25 </del>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 169.167px;">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail">
                                                    <a href="https://martfury.botble.com/products/smart-watches">
                                                        <img src="https://martfury.botble.com/storage/products/2-300x300.jpg"
                                                            alt="Smart Watches">
                                                    </a>
                                                    <div class="ps-product__badge">-15%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a class="add-to-cart-button" data-id="2" href="#"
                                                                data-url="https://martfury.botble.com/cart/add-to-cart"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a class="js-quick-view-button" href="#"
                                                                data-url="https://martfury.botble.com/ajax/quick-view/2"
                                                                title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a class="js-add-to-wishlist-button" href="#"
                                                                data-url="https://martfury.botble.com/wishlist/2"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a class="js-add-to-compare-button" href="#"
                                                                data-url="https://martfury.botble.com/compare/2"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container">
                                                    <a class="ps-product__vendor"
                                                        href="https://martfury.botble.com/stores/dr-pascale-collins">Dr.
                                                        Pascale Collins</a>
                                                    <div class="ps-product__content">
                                                        <a class="ps-product__title"
                                                            href="https://martfury.botble.com/products/smart-watches">Smart
                                                            Watches</a>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width: 65%"></div>
                                                            </div>
                                                            <span class="rating_num">(4)</span>
                                                        </div>

                                                        <p class="ps-product__price  sale ">$34.02 <del>$40.50 </del>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 169.167px;">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail">
                                                    <a href="https://martfury.botble.com/products/beat-headphone">
                                                        <img src="https://martfury.botble.com/storage/products/3-300x300.jpg"
                                                            alt="Beat Headphone">
                                                    </a>
                                                    <span class="ps-product__badge"
                                                        style="background-color: #fe9931">Sale</span>
                                                    <ul class="ps-product__actions">
                                                        <li><a class="add-to-cart-button" data-id="3" href="#"
                                                                data-url="https://martfury.botble.com/cart/add-to-cart"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a class="js-quick-view-button" href="#"
                                                                data-url="https://martfury.botble.com/ajax/quick-view/3"
                                                                title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a class="js-add-to-wishlist-button" href="#"
                                                                data-url="https://martfury.botble.com/wishlist/3"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a class="js-add-to-compare-button" href="#"
                                                                data-url="https://martfury.botble.com/compare/3"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container">
                                                    <a class="ps-product__vendor"
                                                        href="https://martfury.botble.com/stores/jack-flatley">Jack
                                                        Flatley</a>
                                                    <div class="ps-product__content">
                                                        <a class="ps-product__title"
                                                            href="https://martfury.botble.com/products/beat-headphone">Beat
                                                            Headphone</a>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width: 0%"></div>
                                                            </div>
                                                            <span class="rating_num">(0)</span>
                                                        </div>

                                                        <p class="ps-product__price  sale ">$8.00 <del>$20.00 </del>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 169.167px;">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail">
                                                    <a href="https://martfury.botble.com/products/red-black-headphone">
                                                        <img src="https://martfury.botble.com/storage/products/4-300x300.jpg"
                                                            alt="Red &amp; Black Headphone">
                                                    </a>
                                                    <div class="ps-product__badge">-57%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a class="add-to-cart-button" data-id="4" href="#"
                                                                data-url="https://martfury.botble.com/cart/add-to-cart"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a class="js-quick-view-button" href="#"
                                                                data-url="https://martfury.botble.com/ajax/quick-view/4"
                                                                title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a class="js-add-to-wishlist-button" href="#"
                                                                data-url="https://martfury.botble.com/wishlist/4"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a class="js-add-to-compare-button" href="#"
                                                                data-url="https://martfury.botble.com/compare/4"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container">
                                                    <a class="ps-product__vendor"
                                                        href="https://martfury.botble.com/stores/prof-catalina-abbott">Prof.
                                                        Catalina Abbott</a>
                                                    <div class="ps-product__content">
                                                        <a class="ps-product__title"
                                                            href="https://martfury.botble.com/products/red-black-headphone">Red
                                                            &amp; Black Headphone</a>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate"
                                                                    style="width: 53.333333333333%"></div>
                                                            </div>
                                                            <span class="rating_num">(3)</span>
                                                        </div>

                                                        <p class="ps-product__price  sale ">$241.11 <del>$570.00 </del>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 169.167px;">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail">
                                                    <a href="https://martfury.botble.com/products/smart-watch-external">
                                                        <img src="https://martfury.botble.com/storage/products/5-300x300.jpg"
                                                            alt="Smart Watch External">
                                                    </a>
                                                    <div class="ps-product__badge">-41%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a class="add-to-cart-button" data-id="5" href="#"
                                                                data-url="https://martfury.botble.com/cart/add-to-cart"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a class="js-quick-view-button" href="#"
                                                                data-url="https://martfury.botble.com/ajax/quick-view/5"
                                                                title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a class="js-add-to-wishlist-button" href="#"
                                                                data-url="https://martfury.botble.com/wishlist/5"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a class="js-add-to-compare-button" href="#"
                                                                data-url="https://martfury.botble.com/compare/5"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container">
                                                    <a class="ps-product__vendor"
                                                        href="https://martfury.botble.com/stores/rogelio-trantow-v">Rogelio
                                                        Trantow V</a>
                                                    <div class="ps-product__content">
                                                        <a class="ps-product__title"
                                                            href="https://martfury.botble.com/products/smart-watch-external">Smart
                                                            Watch External</a>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width: 60%"></div>
                                                            </div>
                                                            <span class="rating_num">(4)</span>
                                                        </div>

                                                        <p class="ps-product__price  sale ">$448.99 <del>$761.00 </del>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 169.167px;">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail">
                                                    <a href="https://martfury.botble.com/products/nikon-hd-camera">
                                                        <img src="https://martfury.botble.com/storage/products/6-300x300.jpg"
                                                            alt="Nikon HD camera">
                                                    </a>
                                                    <span class="ps-product__badge"
                                                        style="background-color: #00c9a7">New</span>
                                                    <ul class="ps-product__actions">
                                                        <li><a class="add-to-cart-button" data-id="6" href="#"
                                                                data-url="https://martfury.botble.com/cart/add-to-cart"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a class="js-quick-view-button" href="#"
                                                                data-url="https://martfury.botble.com/ajax/quick-view/6"
                                                                title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a class="js-add-to-wishlist-button" href="#"
                                                                data-url="https://martfury.botble.com/wishlist/6"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a class="js-add-to-compare-button" href="#"
                                                                data-url="https://martfury.botble.com/compare/6"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container">
                                                    <a class="ps-product__vendor"
                                                        href="https://martfury.botble.com/stores/prof-catalina-abbott">Prof.
                                                        Catalina Abbott</a>
                                                    <div class="ps-product__content">
                                                        <a class="ps-product__title"
                                                            href="https://martfury.botble.com/products/nikon-hd-camera">Nikon
                                                            HD camera</a>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate" style="width: 57.5%"></div>
                                                            </div>
                                                            <span class="rating_num">(8)</span>
                                                        </div>

                                                        <p class="ps-product__price  sale ">$338.66 <del>$413.00 </del>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 169.167px;">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail">
                                                    <a href="https://martfury.botble.com/products/audio-equipment">
                                                        <img src="https://martfury.botble.com/storage/products/7-300x300.jpg"
                                                            alt="Audio Equipment">
                                                    </a>
                                                    <div class="ps-product__badge">-65%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a class="add-to-cart-button" data-id="7" href="#"
                                                                data-url="https://martfury.botble.com/cart/add-to-cart"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a class="js-quick-view-button" href="#"
                                                                data-url="https://martfury.botble.com/ajax/quick-view/7"
                                                                title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a class="js-add-to-wishlist-button" href="#"
                                                                data-url="https://martfury.botble.com/wishlist/7"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a class="js-add-to-compare-button" href="#"
                                                                data-url="https://martfury.botble.com/compare/7"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container">
                                                    <a class="ps-product__vendor"
                                                        href="https://martfury.botble.com/stores/quentin-dooley">Quentin
                                                        Dooley</a>
                                                    <div class="ps-product__content">
                                                        <a class="ps-product__title"
                                                            href="https://martfury.botble.com/products/audio-equipment">Audio
                                                            Equipment</a>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate"
                                                                    style="width: 53.333333333333%"></div>
                                                            </div>
                                                            <span class="rating_num">(6)</span>
                                                        </div>

                                                        <p class="ps-product__price  sale ">$209.30 <del>$598.00 </del>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 169.167px;">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail">
                                                    <a href="https://martfury.botble.com/products/smart-televisions">
                                                        <img src="https://martfury.botble.com/storage/products/8-300x300.jpg"
                                                            alt="Smart Televisions">
                                                    </a>
                                                    <div class="ps-product__badge">-49%</div>
                                                    <ul class="ps-product__actions">
                                                        <li><a class="add-to-cart-button" data-id="8" href="#"
                                                                data-url="https://martfury.botble.com/cart/add-to-cart"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a class="js-quick-view-button" href="#"
                                                                data-url="https://martfury.botble.com/ajax/quick-view/8"
                                                                title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a class="js-add-to-wishlist-button" href="#"
                                                                data-url="https://martfury.botble.com/wishlist/8"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a class="js-add-to-compare-button" href="#"
                                                                data-url="https://martfury.botble.com/compare/8"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container">
                                                    <a class="ps-product__vendor"
                                                        href="https://martfury.botble.com/stores/jack-flatley">Jack
                                                        Flatley</a>
                                                    <div class="ps-product__content">
                                                        <a class="ps-product__title"
                                                            href="https://martfury.botble.com/products/smart-televisions">Smart
                                                            Televisions</a>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate"
                                                                    style="width: 93.333333333333%"></div>
                                                            </div>
                                                            <span class="rating_num">(3)</span>
                                                        </div>

                                                        <p class="ps-product__price  sale ">$621.22 <del>$1,237.00
                                                            </del> </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 169.167px;">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail">
                                                    <a href="https://martfury.botble.com/products/samsung-smart-phone">
                                                        <img src="https://martfury.botble.com/storage/products/9-300x300.jpg"
                                                            alt="Samsung Smart Phone">
                                                    </a>
                                                    <span class="ps-product__badge"
                                                        style="background-color: #00c9a7">New</span>
                                                    <ul class="ps-product__actions">
                                                        <li><a class="add-to-cart-button" data-id="9" href="#"
                                                                data-url="https://martfury.botble.com/cart/add-to-cart"
                                                                title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                                        <li><a class="js-quick-view-button" href="#"
                                                                data-url="https://martfury.botble.com/ajax/quick-view/9"
                                                                title="Quick View"><i class="icon-eye"></i></a></li>
                                                        <li><a class="js-add-to-wishlist-button" href="#"
                                                                data-url="https://martfury.botble.com/wishlist/9"
                                                                title="Add to Wishlist"><i class="icon-heart"></i></a>
                                                        </li>
                                                        <li><a class="js-add-to-compare-button" href="#"
                                                                data-url="https://martfury.botble.com/compare/9"
                                                                title="Compare"><i class="icon-chart-bars"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container">
                                                    <a class="ps-product__vendor"
                                                        href="https://martfury.botble.com/stores/dr-pascale-collins">Dr.
                                                        Pascale Collins</a>
                                                    <div class="ps-product__content">
                                                        <a class="ps-product__title"
                                                            href="https://martfury.botble.com/products/samsung-smart-phone">Samsung
                                                            Smart Phone</a>
                                                        <div class="rating_wrap">
                                                            <div class="rating">
                                                                <div class="product_rate"
                                                                    style="width: 53.333333333333%"></div>
                                                            </div>
                                                            <span class="rating_num">(3)</span>
                                                        </div>

                                                        <p class="ps-product__price  sale ">$324.24 <del>$579.00 </del>
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav disabled"><button type="button" role="presentation"
                                        class="owl-prev"><i class="icon-chevron-left"></i></button><button type="button"
                                        role="presentation" class="owl-next"><i class="icon-chevron-right"></i></button>
                                </div>
                                <div class="owl-dots"><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot active"><span></span></button></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-shopping ps-tab-root">
                    <div class="row bg-light py-2 mb-3">
                        <div class="col-12 col-sm-6 col-md-3 d-xl-none px-2 px-sm-3">
                            <div class="header__filter d-xl-none mx-auto mb-3 mb-sm-0"><button
                                    id="products-filter-sidebar" type="button"><i class="icon-equalizer"></i><span
                                        class="ml-2">Filter</span></button></div>
                        </div>
                        <div class="col-12 col-md-3 col-xl-6 d-none d-md-block">
                            <div class="products-found pt-2"><strong>23</strong><span class="ml-1">Products found</span>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 px-2 px-sm-3">
                            <div class="d-flex justify-content-center justify-content-sm-end"><select
                                    data-placeholder="Sort Items"
                                    class="ps-select ps-select-shop-sort select2-hidden-accessible" data-select2-id="1"
                                    tabindex="-1" aria-hidden="true">
                                    <option value="default_sorting" data-select2-id="3">Default</option>
                                    <option value="date_asc">Oldest</option>
                                    <option value="date_desc">Newest</option>
                                    <option value="price_asc">Price: low to high</option>
                                    <option value="price_desc">Price: high to low</option>
                                    <option value="name_asc">Name: A-Z</option>
                                    <option value="name_desc">Name : Z-A</option>
                                    <option value="rating_asc">Rating: low to high</option>
                                    <option value="rating_desc">Rating: high to low</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                    data-select2-id="2" style="width: 151px;"><span class="selection"><span
                                            class="select2-selection select2-selection--single" role="combobox"
                                            aria-haspopup="true" aria-expanded="false" tabindex="0"
                                            aria-labelledby="select2-8wnm-container"><span
                                                class="select2-selection__rendered" id="select2-8wnm-container"
                                                role="textbox" aria-readonly="true" title="Default">Default</span><span
                                                class="select2-selection__arrow" role="presentation"><b
                                                    role="presentation"></b></span></span></span><span
                                        class="dropdown-wrapper" aria-hidden="true"></span></span>
                                <div class="ps-shopping__view ml-2">
                                    <ul class="prodducts-layout mb-0 p-0">
                                        <li class="active"><a href="#grid" data-layout="grid"><i
                                                    class="icon-grid"></i></a></li>
                                        <li><a href="#list" data-layout="list"><i class="icon-list4"></i></a></li>
                                    </ul>
                                </div>
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
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/dual-camera-20mp"><img
                                                    src="https://martfury.botble.com/storage/products/1-300x300.jpg"
                                                    alt="Dual Camera 20MP"></a>
                                            <div class="ps-product__badge">-41%</div>
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
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/1"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/dr-pascale-collins"
                                                class="ps-product__vendor">Dr. Pascale Collins</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/dual-camera-20mp"
                                                    class="ps-product__title">Dual Camera 20MP</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 71.4286%;"></div>
                                                    </div> <span class="rating_num">(7)</span>
                                                </div>
                                                <p class="ps-product__price  sale ">$47.35 <del>$80.25 </del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/smart-watches"><img
                                                    src="https://martfury.botble.com/storage/products/2-300x300.jpg"
                                                    alt="Smart Watches"></a>
                                            <div class="ps-product__badge">-15%</div>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="2" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/ajax/quick-view/2"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/2"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/2"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/dr-pascale-collins"
                                                class="ps-product__vendor">Dr. Pascale Collins</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/smart-watches"
                                                    class="ps-product__title">Smart Watches</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 65%;"></div>
                                                    </div> <span class="rating_num">(4)</span>
                                                </div>
                                                <p class="ps-product__price  sale ">$34.02 <del>$40.50 </del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/beat-headphone"><img
                                                    src="https://martfury.botble.com/storage/products/3-300x300.jpg"
                                                    alt="Beat Headphone"></a> <span class="ps-product__badge"
                                                style="background-color: rgb(254, 153, 49);">Sale</span>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="3" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/ajax/quick-view/3"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/3"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/3"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/jack-flatley"
                                                class="ps-product__vendor">Jack Flatley</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/beat-headphone"
                                                    class="ps-product__title">Beat Headphone</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 0%;"></div>
                                                    </div> <span class="rating_num">(0)</span>
                                                </div>
                                                <p class="ps-product__price  sale ">$8.00 <del>$20.00 </del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/red-black-headphone"><img
                                                    src="https://martfury.botble.com/storage/products/4-300x300.jpg"
                                                    alt="Red &amp; Black Headphone"></a>
                                            <div class="ps-product__badge">-57%</div>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="4" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/ajax/quick-view/4"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/4"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/4"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/prof-catalina-abbott"
                                                class="ps-product__vendor">Prof. Catalina Abbott</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/red-black-headphone"
                                                    class="ps-product__title">Red &amp; Black Headphone</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 53.3333%;"></div>
                                                    </div> <span class="rating_num">(3)</span>
                                                </div>
                                                <p class="ps-product__price  sale ">$241.11 <del>$570.00 </del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/smart-watch-external"><img
                                                    src="https://martfury.botble.com/storage/products/5-300x300.jpg"
                                                    alt="Smart Watch External"></a>
                                            <div class="ps-product__badge">-41%</div>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="5" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/ajax/quick-view/5"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/5"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/5"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/rogelio-trantow-v"
                                                class="ps-product__vendor">Rogelio Trantow V</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/smart-watch-external"
                                                    class="ps-product__title">Smart Watch External</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 60%;"></div>
                                                    </div> <span class="rating_num">(4)</span>
                                                </div>
                                                <p class="ps-product__price  sale ">$448.99 <del>$761.00 </del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/nikon-hd-camera"><img
                                                    src="https://martfury.botble.com/storage/products/6-300x300.jpg"
                                                    alt="Nikon HD camera"></a> <span class="ps-product__badge"
                                                style="background-color: rgb(0, 201, 167);">New</span>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="6" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/ajax/quick-view/6"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/6"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/6"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/prof-catalina-abbott"
                                                class="ps-product__vendor">Prof. Catalina Abbott</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/nikon-hd-camera"
                                                    class="ps-product__title">Nikon HD camera</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 57.5%;"></div>
                                                    </div> <span class="rating_num">(8)</span>
                                                </div>
                                                <p class="ps-product__price  sale ">$338.66 <del>$413.00 </del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/audio-equipment"><img
                                                    src="https://martfury.botble.com/storage/products/7-300x300.jpg"
                                                    alt="Audio Equipment"></a>
                                            <div class="ps-product__badge">-65%</div>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="7" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/ajax/quick-view/7"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/7"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/7"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/quentin-dooley"
                                                class="ps-product__vendor">Quentin Dooley</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/audio-equipment"
                                                    class="ps-product__title">Audio Equipment</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 53.3333%;"></div>
                                                    </div> <span class="rating_num">(6)</span>
                                                </div>
                                                <p class="ps-product__price  sale ">$209.30 <del>$598.00 </del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/smart-televisions"><img
                                                    src="https://martfury.botble.com/storage/products/8-300x300.jpg"
                                                    alt="Smart Televisions"></a>
                                            <div class="ps-product__badge">-49%</div>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="8" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/ajax/quick-view/8"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/8"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/8"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/jack-flatley"
                                                class="ps-product__vendor">Jack Flatley</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/smart-televisions"
                                                    class="ps-product__title">Smart Televisions</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 93.3333%;"></div>
                                                    </div> <span class="rating_num">(3)</span>
                                                </div>
                                                <p class="ps-product__price  sale ">$621.22 <del>$1,237.00 </del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/samsung-smart-phone"><img
                                                    src="https://martfury.botble.com/storage/products/9-300x300.jpg"
                                                    alt="Samsung Smart Phone"></a> <span class="ps-product__badge"
                                                style="background-color: rgb(0, 201, 167);">New</span>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="9" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/ajax/quick-view/9"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/9"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/9"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/dr-pascale-collins"
                                                class="ps-product__vendor">Dr. Pascale Collins</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/samsung-smart-phone"
                                                    class="ps-product__title">Samsung Smart Phone</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 53.3333%;"></div>
                                                    </div> <span class="rating_num">(3)</span>
                                                </div>
                                                <p class="ps-product__price  sale ">$324.24 <del>$579.00 </del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/herschel-leather-duffle-bag-in-brown-color"><img
                                                    src="https://martfury.botble.com/storage/products/10-300x300.jpg"
                                                    alt="Herschel Leather Duffle Bag In Brown Color"></a>
                                            <div class="ps-product__badge">-54%</div>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="10" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/10"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/10"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/10"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/prof-catalina-abbott"
                                                class="ps-product__vendor">Prof. Catalina Abbott</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/herschel-leather-duffle-bag-in-brown-color"
                                                    class="ps-product__title">Herschel Leather Duffle Bag In Brown
                                                    Color</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 50%;"></div>
                                                    </div> <span class="rating_num">(4)</span>
                                                </div>
                                                <p class="ps-product__price  sale ">$575.10 <del>$1,278.00 </del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/xbox-one-wireless-controller-black-color"><img
                                                    src="https://martfury.botble.com/storage/products/11-300x300.jpg"
                                                    alt="Xbox One Wireless Controller Black Color"></a>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="11" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/11"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/11"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/11"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/rogelio-trantow-v"
                                                class="ps-product__vendor">Rogelio Trantow V</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/xbox-one-wireless-controller-black-color"
                                                    class="ps-product__title">Xbox One Wireless Controller Black
                                                    Color</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 40%;"></div>
                                                    </div> <span class="rating_num">(2)</span>
                                                </div>
                                                <p class="ps-product__price ">$1,270.00 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/epsion-plaster-printer"><img
                                                    src="https://martfury.botble.com/storage/products/12-300x300.jpg"
                                                    alt="EPSION Plaster Printer"></a> <span class="ps-product__badge"
                                                style="background-color: rgb(236, 36, 52);">Hot</span>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="12" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/12"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/12"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/12"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/jack-flatley"
                                                class="ps-product__vendor">Jack Flatley</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/epsion-plaster-printer"
                                                    class="ps-product__title">EPSION Plaster Printer</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 62.8571%;"></div>
                                                    </div> <span class="rating_num">(7)</span>
                                                </div>
                                                <p class="ps-product__price  sale ">$455.84 <del>$518.00 </del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/sound-intone-i65-earphone-white-version"><img
                                                    src="https://martfury.botble.com/storage/products/13-300x300.jpg"
                                                    alt="Sound Intone I65 Earphone White Version"></a>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="13" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/13"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/13"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/13"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/montana-rau"
                                                class="ps-product__vendor">Montana Rau</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/sound-intone-i65-earphone-white-version"
                                                    class="ps-product__title">Sound Intone I65 Earphone White
                                                    Version</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 47.5%;"></div>
                                                    </div> <span class="rating_num">(8)</span>
                                                </div>
                                                <p class="ps-product__price ">$507.00 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/bo-play-mini-bluetooth-speaker"><img
                                                    src="https://martfury.botble.com/storage/products/14-300x300.jpg"
                                                    alt="B&amp;O Play Mini Bluetooth Speaker"></a>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="14" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/14"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/14"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/14"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/rogelio-trantow-v"
                                                class="ps-product__vendor">Rogelio Trantow V</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/bo-play-mini-bluetooth-speaker"
                                                    class="ps-product__title">B&amp;O Play Mini Bluetooth Speaker</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 60%;"></div>
                                                    </div> <span class="rating_num">(2)</span>
                                                </div>
                                                <p class="ps-product__price ">$515.00 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/apple-macbook-air-retina-133-inch-laptop"><img
                                                    src="https://martfury.botble.com/storage/products/15-300x300.jpg"
                                                    alt="Apple MacBook Air Retina 13.3-Inch Laptop"></a> <span
                                                class="ps-product__badge"
                                                style="background-color: rgb(0, 201, 167);">New</span>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="15" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/15"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/15"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/15"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/rogelio-trantow-v"
                                                class="ps-product__vendor">Rogelio Trantow V</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/apple-macbook-air-retina-133-inch-laptop"
                                                    class="ps-product__title">Apple MacBook Air Retina 13.3-Inch
                                                    Laptop</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 75%;"></div>
                                                    </div> <span class="rating_num">(4)</span>
                                                </div>
                                                <p class="ps-product__price ">$531.00 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/apple-macbook-air-retina-12-inch-laptop"><img
                                                    src="https://martfury.botble.com/storage/products/16-300x300.jpg"
                                                    alt="Apple MacBook Air Retina 12-Inch Laptop"></a>
                                            <div class="ps-product__badge">-19%</div>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="16" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/16"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/16"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/16"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/quentin-dooley"
                                                class="ps-product__vendor">Quentin Dooley</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/apple-macbook-air-retina-12-inch-laptop"
                                                    class="ps-product__title">Apple MacBook Air Retina 12-Inch
                                                    Laptop</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 63.3333%;"></div>
                                                    </div> <span class="rating_num">(6)</span>
                                                </div>
                                                <p class="ps-product__price  sale ">$421.20 <del>$520.00 </del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/samsung-gear-vr-virtual-reality-headset"><img
                                                    src="https://martfury.botble.com/storage/products/17-300x300.jpg"
                                                    alt="Samsung Gear VR Virtual Reality Headset"></a>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="17" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/17"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/17"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/17"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/prof-catalina-abbott"
                                                class="ps-product__vendor">Prof. Catalina Abbott</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/samsung-gear-vr-virtual-reality-headset"
                                                    class="ps-product__title">Samsung Gear VR Virtual Reality
                                                    Headset</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 68.5714%;"></div>
                                                    </div> <span class="rating_num">(7)</span>
                                                </div>
                                                <p class="ps-product__price ">$550.00 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/aveeno-moisturizing-body-shower-450ml"><img
                                                    src="https://martfury.botble.com/storage/products/18-300x300.jpg"
                                                    alt="Aveeno Moisturizing Body Shower 450ml"></a> <span
                                                class="ps-product__badge"
                                                style="background-color: rgb(254, 153, 49);">Sale</span>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="18" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/18"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/18"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/18"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/montana-rau"
                                                class="ps-product__vendor">Montana Rau</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/aveeno-moisturizing-body-shower-450ml"
                                                    class="ps-product__title">Aveeno Moisturizing Body Shower 450ml</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 70%;"></div>
                                                    </div> <span class="rating_num">(4)</span>
                                                </div>
                                                <p class="ps-product__price ">$1,179.00 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/nyx-beauty-couton-pallete-makeup-12"><img
                                                    src="https://martfury.botble.com/storage/products/19-300x300.jpg"
                                                    alt="NYX Beauty Couton Pallete Makeup 12"></a>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="19" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/19"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/19"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/19"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/jack-flatley"
                                                class="ps-product__vendor">Jack Flatley</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/nyx-beauty-couton-pallete-makeup-12"
                                                    class="ps-product__title">NYX Beauty Couton Pallete Makeup 12</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 60%;"></div>
                                                    </div> <span class="rating_num">(5)</span>
                                                </div>
                                                <p class="ps-product__price ">$1,132.00 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/nyx-beauty-couton-pallete-makeup-12"><img
                                                    src="https://martfury.botble.com/storage/products/20-300x300.jpg"
                                                    alt="NYX Beauty Couton Pallete Makeup 12"></a>
                                            <div class="ps-product__badge">-26%</div>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="20" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/20"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/20"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/20"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/rogelio-trantow-v"
                                                class="ps-product__vendor">Rogelio Trantow V</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/nyx-beauty-couton-pallete-makeup-12"
                                                    class="ps-product__title">NYX Beauty Couton Pallete Makeup 12</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 0%;"></div>
                                                    </div> <span class="rating_num">(0)</span>
                                                </div>
                                                <p class="ps-product__price  sale ">$677.44 <del>$928.00 </del></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/mvmth-classical-leather-watch-in-black"><img
                                                    src="https://martfury.botble.com/storage/products/21-300x300.jpg"
                                                    alt="MVMTH Classical Leather Watch In Black"></a> <span
                                                class="ps-product__badge"
                                                style="background-color: rgb(0, 201, 167);">New</span>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="21" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/21"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/21"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/21"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/montana-rau"
                                                class="ps-product__vendor">Montana Rau</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/mvmth-classical-leather-watch-in-black"
                                                    class="ps-product__title">MVMTH Classical Leather Watch In Black</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 76%;"></div>
                                                    </div> <span class="rating_num">(5)</span>
                                                </div>
                                                <p class="ps-product__price ">$694.00 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/baxter-care-hair-kit-for-bearded-mens"><img
                                                    src="https://martfury.botble.com/storage/products/22-300x300.jpg"
                                                    alt="Baxter Care Hair Kit For Bearded Mens"></a>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="22" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/22"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/22"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/22"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/prof-catalina-abbott"
                                                class="ps-product__vendor">Prof. Catalina Abbott</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/baxter-care-hair-kit-for-bearded-mens"
                                                    class="ps-product__title">Baxter Care Hair Kit For Bearded Mens</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 64%;"></div>
                                                    </div> <span class="rating_num">(5)</span>
                                                </div>
                                                <p class="ps-product__price ">$539.00 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="ps-product">
                                        <div class="ps-product__thumbnail"><a
                                                href="https://martfury.botble.com/products/ciate-palemore-lipstick-bold-red-color"><img
                                                    src="https://martfury.botble.com/storage/products/23-300x300.jpg"
                                                    alt="Ciate Palemore Lipstick Bold Red Color"></a>
                                            <ul class="ps-product__actions">
                                                <li><a data-id="23" href="#"
                                                        data-url="https://martfury.botble.com/cart/add-to-cart"
                                                        title="Add To Cart" class="add-to-cart-button"><i
                                                            class="icon-bag2"></i></a></li>
                                                <li><a href="#"
                                                        data-url="https://martfury.botble.com/ajax/quick-view/23"
                                                        title="Quick View" class="js-quick-view-button"><i
                                                            class="icon-eye"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/wishlist/23"
                                                        title="Add to Wishlist" class="js-add-to-wishlist-button"><i
                                                            class="icon-heart"></i></a></li>
                                                <li><a href="#" data-url="https://martfury.botble.com/compare/23"
                                                        title="Compare" class="js-add-to-compare-button"><i
                                                            class="icon-chart-bars"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__container"><a
                                                href="https://martfury.botble.com/stores/quentin-dooley"
                                                class="ps-product__vendor">Quentin Dooley</a>
                                            <div class="ps-product__content"><a
                                                    href="https://martfury.botble.com/products/ciate-palemore-lipstick-bold-red-color"
                                                    class="ps-product__title">Ciate Palemore Lipstick Bold Red Color</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 26.6667%;"></div>
                                                    </div> <span class="rating_num">(3)</span>
                                                </div>
                                                <p class="ps-product__price ">$719.00 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection