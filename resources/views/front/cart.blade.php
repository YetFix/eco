@extends('front.master')
@section('content')
<div class="container mt-40">
    <div class="ps-section__header">
        <h1>Shopping Cart</h1>
    </div>
    <div class="ps-section__content">
        <form class="form--shopping-cart" method="post" action="">
            <input type="hidden" name="_token" value="rGmIhzQnCbJ4DnAl8M7QwSPlWCLmWeec3trz3hfr">
            <div class="table-responsive">
                <table class="table ps-table--shopping-cart">
                    <thead>
                        <tr>
                            <th>Product's name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="hidden" name="items[9faab3c21db474a9d05a07b370f66ae2][rowId]"
                                    value="9faab3c21db474a9d05a07b370f66ae2">
                                <div class="ps-product--cart">
                                    <div class="ps-product__thumbnail">
                                        <a href="https://martfury.botble.com/products/dual-camera-20mp">
                                            <img src="https://martfury.botble.com/storage/products/1-150x150.jpg"
                                                alt="Dual Camera 20MP">
                                        </a>
                                    </div>
                                    <div class="ps-product__content">
                                        <a href="https://martfury.botble.com/products/dual-camera-20mp">Dual Camera
                                            20MP</a>
                                        <p class="d-block mb-0 sold-by"><small>Sold by: <a
                                                    href="https://martfury.botble.com/stores/dr-pascale-collins">Dr.
                                                    Pascale Collins</a></small></p>
                                        <p class="mb-0"><small>(Color: Black, Size: XXL)</small></p>
                                    </div>
                                </div>
                            </td>
                            <td class="price text-center">
                                <div class="product__price  sale ">
                                    <span>$47.35</span>
                                    <small><del>$80.25</del></small>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="form-group--number product__qty">
                                    <button class="up">+</button>
                                    <button class="down">-</button>
                                    <input type="text" class="form-control qty-input" value="1" title="Qty"
                                        name="items[9faab3c21db474a9d05a07b370f66ae2][values][qty]" readonly="">
                                </div>
                            </td>
                            <td class="text-center">$47.35</td>
                            <td><a href="#"
                                    data-url="https://martfury.botble.com/cart/remove/9faab3c21db474a9d05a07b370f66ae2"
                                    class="remove-cart-button"><i class="icon-cross"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" name="items[d6d477b2293d3ce2768807158047c19f][rowId]"
                                    value="d6d477b2293d3ce2768807158047c19f">
                                <div class="ps-product--cart">
                                    <div class="ps-product__thumbnail">
                                        <a href="https://martfury.botble.com/products/smart-watches">
                                            <img src="https://martfury.botble.com/storage/products/2-150x150.jpg"
                                                alt="Smart Watches">
                                        </a>
                                    </div>
                                    <div class="ps-product__content">
                                        <a href="https://martfury.botble.com/products/smart-watches">Smart Watches</a>
                                        <p class="d-block mb-0 sold-by"><small>Sold by: <a
                                                    href="https://martfury.botble.com/stores/dr-pascale-collins">Dr.
                                                    Pascale Collins</a></small></p>
                                        <p class="mb-0"><small>(Color: Black, Size: S)</small></p>
                                    </div>
                                </div>
                            </td>
                            <td class="price text-center">
                                <div class="product__price  sale ">
                                    <span>$34.02</span>
                                    <small><del>$40.50</del></small>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="form-group--number product__qty">
                                    <button class="up">+</button>
                                    <button class="down">-</button>
                                    <input type="text" class="form-control qty-input" value="1" title="Qty"
                                        name="items[d6d477b2293d3ce2768807158047c19f][values][qty]" readonly="">
                                </div>
                            </td>
                            <td class="text-center">$34.02</td>
                            <td><a href="#"
                                    data-url="https://martfury.botble.com/cart/remove/d6d477b2293d3ce2768807158047c19f"
                                    class="remove-cart-button"><i class="icon-cross"></i></a></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="hidden" name="items[197fda056988beee45e22b626858538c][rowId]"
                                    value="197fda056988beee45e22b626858538c">
                                <div class="ps-product--cart">
                                    <div class="ps-product__thumbnail">
                                        <a href="https://martfury.botble.com/products/nikon-hd-camera">
                                            <img src="https://martfury.botble.com/storage/products/6-150x150.jpg"
                                                alt="Nikon HD camera">
                                        </a>
                                    </div>
                                    <div class="ps-product__content">
                                        <a href="https://martfury.botble.com/products/nikon-hd-camera">Nikon HD
                                            camera</a>
                                        <p class="d-block mb-0 sold-by"><small>Sold by: <a
                                                    href="https://martfury.botble.com/stores/prof-catalina-abbott">Prof.
                                                    Catalina Abbott</a></small></p>
                                        <p class="mb-0"><small>(Color: Green, Size: XXL)</small></p>
                                    </div>
                                </div>
                            </td>
                            <td class="price text-center">
                                <div class="product__price  sale ">
                                    <span>$338.66</span>
                                    <small><del>$413.00</del></small>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="form-group--number product__qty">
                                    <button class="up">+</button>
                                    <button class="down">-</button>
                                    <input type="text" class="form-control qty-input" value="1" title="Qty"
                                        name="items[197fda056988beee45e22b626858538c][values][qty]" readonly="">
                                </div>
                            </td>
                            <td class="text-center">$338.66</td>
                            <td><a href="#"
                                    data-url="https://martfury.botble.com/cart/remove/197fda056988beee45e22b626858538c"
                                    class="remove-cart-button"><i class="icon-cross"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <div class="ps-section__footer">
        <div class="row">
            <div class="col-lg-6 col-md-12 form-coupon-wrapper">
                <figure>
                    <figcaption>Coupon Discount</figcaption>
                    <div class="form-group">
                        <input class="form-control coupon-code" type="text" name="coupon_code" value=""
                            placeholder="Enter coupon code">
                    </div>
                    <div class="form-group">
                        <button class="ps-btn ps-btn--outline btn-apply-coupon-code" type="button"
                            data-url="https://martfury.botble.com/coupon/apply">Apply</button>
                    </div>
                </figure>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <div class="ps-block--shopping-total">
                    <div class="ps-block__header">
                        <p>Subtotal <span> $420.03</span></p>
                    </div>
                    <div class="ps-block__header">
                        <p>Tax <span> $42.00</span></p>
                    </div>
                    <div class="ps-block__content">
                        <h3>Total <span>$462.03</span></h3>
                        <p><small>(Shipping fees not included)</small></p>
                    </div>
                </div>
                <a class="ps-btn btn-cart-button-action" href="https://martfury.botble.com/products"><i
                        class="icon-arrow-left"></i> Back to Shop</a>
                <a class="ps-btn ps-btn btn-cart-button-action"
                    href="https://martfury.botble.com/checkout/3e0a4a095e069df4fd417184f40f296e">Proceed to checkout <i
                        class="icon-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="ps-section--default ps-customer-bought mt-60">
        <div class="ps-section__header text-left pb-0 mb-4">
            <h3 class="mb-2">Customers who bought this item also bought</h3>
        </div>
        <div class="ps-section__content">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="https://martfury.botble.com/products/dual-camera-20mp">
                                <img src="https://martfury.botble.com/storage/products/1-300x300.jpg"
                                    alt="Dual Camera 20MP">
                            </a>
                            <div class="ps-product__badge">-41%</div>
                            <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="1" href="#"
                                        data-url="https://martfury.botble.com/cart/add-to-cart" title="Add To Cart"><i
                                            class="icon-bag2"></i></a></li>
                                <li><a class="js-quick-view-button" href="#"
                                        data-url="https://martfury.botble.com/ajax/quick-view/1" title="Quick View"><i
                                            class="icon-eye"></i></a></li>
                                <li><a class="js-add-to-wishlist-button" href="#"
                                        data-url="https://martfury.botble.com/wishlist/1" title="Add to Wishlist"><i
                                            class="icon-heart"></i></a></li>
                                <li><a class="js-add-to-compare-button" href="#"
                                        data-url="https://martfury.botble.com/compare/1" title="Compare"><i
                                            class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <a class="ps-product__vendor"
                                href="https://martfury.botble.com/stores/dr-pascale-collins">Dr. Pascale Collins</a>
                            <div class="ps-product__content">
                                <a class="ps-product__title"
                                    href="https://martfury.botble.com/products/dual-camera-20mp">Dual Camera 20MP</a>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 71.428571428571%"></div>
                                    </div>
                                    <span class="rating_num">(7)</span>
                                </div>
                                <p class="ps-product__price  sale ">$47.35 <del>$80.25 </del> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="https://martfury.botble.com/products/beat-headphone">
                                <img src="https://martfury.botble.com/storage/products/3-300x300.jpg"
                                    alt="Beat Headphone">
                            </a>
                            <span class="ps-product__badge" style="background-color: #fe9931">Sale</span>
                            <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="3" href="#"
                                        data-url="https://martfury.botble.com/cart/add-to-cart" title="Add To Cart"><i
                                            class="icon-bag2"></i></a></li>
                                <li><a class="js-quick-view-button" href="#"
                                        data-url="https://martfury.botble.com/ajax/quick-view/3" title="Quick View"><i
                                            class="icon-eye"></i></a></li>
                                <li><a class="js-add-to-wishlist-button" href="#"
                                        data-url="https://martfury.botble.com/wishlist/3" title="Add to Wishlist"><i
                                            class="icon-heart"></i></a></li>
                                <li><a class="js-add-to-compare-button" href="#"
                                        data-url="https://martfury.botble.com/compare/3" title="Compare"><i
                                            class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <a class="ps-product__vendor" href="https://martfury.botble.com/stores/jack-flatley">Jack
                                Flatley</a>
                            <div class="ps-product__content">
                                <a class="ps-product__title"
                                    href="https://martfury.botble.com/products/beat-headphone">Beat Headphone</a>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 0%"></div>
                                    </div>
                                    <span class="rating_num">(0)</span>
                                </div>
                                <p class="ps-product__price  sale ">$8.00 <del>$20.00 </del> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="https://martfury.botble.com/products/red-black-headphone">
                                <img src="https://martfury.botble.com/storage/products/4-300x300.jpg"
                                    alt="Red &amp; Black Headphone">
                            </a>
                            <div class="ps-product__badge">-57%</div>
                            <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="4" href="#"
                                        data-url="https://martfury.botble.com/cart/add-to-cart" title="Add To Cart"><i
                                            class="icon-bag2"></i></a></li>
                                <li><a class="js-quick-view-button" href="#"
                                        data-url="https://martfury.botble.com/ajax/quick-view/4" title="Quick View"><i
                                            class="icon-eye"></i></a></li>
                                <li><a class="js-add-to-wishlist-button" href="#"
                                        data-url="https://martfury.botble.com/wishlist/4" title="Add to Wishlist"><i
                                            class="icon-heart"></i></a></li>
                                <li><a class="js-add-to-compare-button" href="#"
                                        data-url="https://martfury.botble.com/compare/4" title="Compare"><i
                                            class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <a class="ps-product__vendor"
                                href="https://martfury.botble.com/stores/prof-catalina-abbott">Prof. Catalina Abbott</a>
                            <div class="ps-product__content">
                                <a class="ps-product__title"
                                    href="https://martfury.botble.com/products/red-black-headphone">Red &amp; Black
                                    Headphone</a>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 53.333333333333%"></div>
                                    </div>
                                    <span class="rating_num">(3)</span>
                                </div>
                                <p class="ps-product__price  sale ">$241.11 <del>$570.00 </del> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="https://martfury.botble.com/products/smart-watch-external">
                                <img src="https://martfury.botble.com/storage/products/5-300x300.jpg"
                                    alt="Smart Watch External">
                            </a>
                            <div class="ps-product__badge">-41%</div>
                            <ul class="ps-product__actions">
                                <li><a class="add-to-cart-button" data-id="5" href="#"
                                        data-url="https://martfury.botble.com/cart/add-to-cart" title="Add To Cart"><i
                                            class="icon-bag2"></i></a></li>
                                <li><a class="js-quick-view-button" href="#"
                                        data-url="https://martfury.botble.com/ajax/quick-view/5" title="Quick View"><i
                                            class="icon-eye"></i></a></li>
                                <li><a class="js-add-to-wishlist-button" href="#"
                                        data-url="https://martfury.botble.com/wishlist/5" title="Add to Wishlist"><i
                                            class="icon-heart"></i></a></li>
                                <li><a class="js-add-to-compare-button" href="#"
                                        data-url="https://martfury.botble.com/compare/5" title="Compare"><i
                                            class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <a class="ps-product__vendor"
                                href="https://martfury.botble.com/stores/rogelio-trantow-v">Rogelio Trantow V</a>
                            <div class="ps-product__content">
                                <a class="ps-product__title"
                                    href="https://martfury.botble.com/products/smart-watch-external">Smart Watch
                                    External</a>
                                <div class="rating_wrap">
                                    <div class="rating">
                                        <div class="product_rate" style="width: 60%"></div>
                                    </div>
                                    <span class="rating_num">(4)</span>
                                </div>
                                <p class="ps-product__price  sale ">$448.99 <del>$761.00 </del> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection