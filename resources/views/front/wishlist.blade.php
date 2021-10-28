@extends('front.master')
@section('content')
<div class="ps-container">
    <div class="mt-40 mb-40">
        <div class="ps-section--shopping pt-40">
            <div class="container">
                <div class="ps-section__header">
                    <h1>Wishlist</h1>
                </div>
                <div class="ps-section__content">
                    <div class="table-responsive">
                        <table class="table ps-table--wishlist ps-table--responsive">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="text-left">Image</th>
                                    <th class="text-left">Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Remove">&nbsp;<a class="js-remove-from-wishlist-button" href="#"
                                            data-url="https://martfury.botble.com/wishlist/5"><i
                                                class="icon-cross"></i></a></td>
                                    <td data-label="Product">
                                        <div class="ps-product--cart">
                                            <div class="ps-product__thumbnail"><a
                                                    href="https://martfury.botble.com/products/smart-watch-external"><img
                                                        src="https://martfury.botble.com/storage/products/5-150x150.jpg"
                                                        alt="Smart Watch External"></a></div>
                                            <div class="ps-product__content">
                                                <a href="https://martfury.botble.com/products/smart-watch-external">Smart
                                                    Watch External</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 60%"></div>
                                                    </div>
                                                    <span class="rating_num">(4)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price" data-label="Price"><span>$448.99</span> <del>$761.00 </del> </td>
                                    <td data-label="Action"><a class="ps-btn add-to-cart-button" data-id="5" href="#"
                                            data-url="https://martfury.botble.com/cart/add-to-cart">Add to cart</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Remove">&nbsp;<a class="js-remove-from-wishlist-button" href="#"
                                            data-url="https://martfury.botble.com/wishlist/9"><i
                                                class="icon-cross"></i></a></td>
                                    <td data-label="Product">
                                        <div class="ps-product--cart">
                                            <div class="ps-product__thumbnail"><a
                                                    href="https://martfury.botble.com/products/samsung-smart-phone"><img
                                                        src="https://martfury.botble.com/storage/products/9-150x150.jpg"
                                                        alt="Samsung Smart Phone"></a></div>
                                            <div class="ps-product__content">
                                                <a href="https://martfury.botble.com/products/samsung-smart-phone">Samsung
                                                    Smart Phone</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 53.333333333333%"></div>
                                                    </div>
                                                    <span class="rating_num">(3)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price" data-label="Price"><span>$324.24</span> <del>$579.00 </del> </td>
                                    <td data-label="Action"><a class="ps-btn add-to-cart-button" data-id="9" href="#"
                                            data-url="https://martfury.botble.com/cart/add-to-cart">Add to cart</a></td>
                                </tr>
                                <tr>
                                    <td data-label="Remove">&nbsp;<a class="js-remove-from-wishlist-button" href="#"
                                            data-url="https://martfury.botble.com/wishlist/19"><i
                                                class="icon-cross"></i></a></td>
                                    <td data-label="Product">
                                        <div class="ps-product--cart">
                                            <div class="ps-product__thumbnail"><a
                                                    href="https://martfury.botble.com/products/nyx-beauty-couton-pallete-makeup-12"><img
                                                        src="https://martfury.botble.com/storage/products/19-150x150.jpg"
                                                        alt="NYX Beauty Couton Pallete Makeup 12"></a></div>
                                            <div class="ps-product__content">
                                                <a
                                                    href="https://martfury.botble.com/products/nyx-beauty-couton-pallete-makeup-12">NYX
                                                    Beauty Couton Pallete Makeup 12</a>
                                                <div class="rating_wrap">
                                                    <div class="rating">
                                                        <div class="product_rate" style="width: 60%"></div>
                                                    </div>
                                                    <span class="rating_num">(5)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price" data-label="Price"><span>$1,132.00</span> </td>
                                    <td data-label="Action"><a class="ps-btn add-to-cart-button" data-id="19" href="#"
                                            data-url="https://martfury.botble.com/cart/add-to-cart">Add to cart</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection