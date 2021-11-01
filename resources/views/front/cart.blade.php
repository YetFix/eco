@extends('front.master')
@section('content')
@if(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count()>0)
<div class="container mt-40">
    <div class="ps-section__header">
        <h1>Shopping Cart</h1>
    </div>
    <div class="ps-section__content mb-3">
        <form class="form--shopping-cart" method="post" action="">

            <div class="table-responsive" id="cart_list">
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
                        @foreach(\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
                        <tr>
                            <td>
                                <div class="ps-product--cart">
                                    <div class="ps-product__thumbnail">
                                        <a href="">
                                            <img src="{{URL::asset('backend/products')}}/{{$item->model->photo}}"
                                                alt="{{$item->name}}">
                                        </a>
                                    </div>
                                    <div class="ps-product__content">
                                        <a href="">{{$item->name}}</a>
                                        <p class="d-block mb-0 sold-by"><small>Sold
                                                by:{{\App\Models\User::find($item->model->vendor_id)->full_name}} <a
                                                    href=""></a></small>
                                        </p>

                                    </div>
                                </div>
                            </td>
                            <td class="price text-center">
                                <div class="product__price  sale ">
                                    <span>{{number_format($item->price,2)}}</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="form-group--number product__qty">

                                    <input type="number" step="1" min="1" max="99" class="form-control qty-input"
                                        data-id="{{$item->rowId}}" id="qty-input-{{$item->rowId}}"
                                        value="{{$item->qty}}" title="Qty" name="cart-iten">
                                    <input type="hidden" data-id="{{$item->rowId}}"
                                        data-product-quantity="{{$item->model->stock}}"
                                        id="update-cart-{{$item->rowId}}">
                                </div>
                            </td>
                            <td class="text-center">{{$item->subtotal()}}</td>
                            <td><a href="#" class="remove-cart-button delete-item-button" data-id="{{$item->rowId}}"><i
                                        class="icon-cross"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <div class="ps-section__footer">
        <div class="row">
            <div class="col-lg-6 col-md-12 form-coupon-wrapper">
                @include('backend.layouts.notifications')
                <form action="{{route('cupon.add')}}" id="cupon-form" method="POST">
                    @csrf
                    <figcaption>Coupon Discount</figcaption>
                    <div class="form-group">
                        <input class="form-control coupon-code" type="text" name="code" placeholder="Enter coupon code">
                    </div>
                    <div class="form-group">
                        <button class="ps-btn ps-btn--outline coupon-code add-cupon" type="submit">Apply</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 ">
                <div class="ps-block--shopping-total">
                    <div class="ps-block__header">
                        <p>Subtotal
                            <span>{{\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->subtotal()}}</span>
                        </p>
                    </div>
                    <div class="ps-block__content">
                        <h3>Total
                            @if(session('cupon'))
                            <span>{{\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->subtotal()-session('cupon')['value']}}</span>
                            @else
                            <span>{{\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->subtotal()}}</span>
                            @endif
                        </h3>
                        <p><small>(Shipping fees not included)</small></p>
                    </div>
                </div>
                <a class="ps-btn btn-cart-button-action" href="/shop"><i class="icon-arrow-left"></i> Back to
                    Shop</a>
                <a class="ps-btn ps-btn btn-cart-button-action" href="/checkout">Proceed to checkout <i
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
                                href="https://martfury.botble.com/stores/dr-pascale-collins">Dr.
                                Pascale Collins</a>
                            <div class="ps-product__content">
                                <a class="ps-product__title"
                                    href="https://martfury.botble.com/products/dual-camera-20mp">Dual Camera
                                    20MP</a>
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
                                    href="https://martfury.botble.com/products/beat-headphone">Beat
                                    Headphone</a>
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
                                href="https://martfury.botble.com/stores/prof-catalina-abbott">Prof. Catalina
                                Abbott</a>
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
@else

<div class="row">
    <div class="col-sm-8 mx-auto text-center">
        <img src="{{URL::asset('/noproduct.jpeg')}}" width="400" alt="empty-cart">
        <h4>No Products in your cart! Go Shopping!</h4>
    </div>
</div>
@endif
@endsection


@section('js')
<script>
$(document).on('click', '.qty-input', function(e) {
    e.preventDefault();
    var id = $(this).data('id');
    var spinner = $(this);
    var input = spinner.closest("div.product__qty").find('input[type="number"]');
    // if (input.val() == 1) {
    //     var newVal = parseFloat(input.val());
    //     $('#qty-input-' + id).val(newVal);
    // }
    if (input.val() > 1) {
        var newVal = parseFloat(input.val());
        $('#qty-input-' + id).val(newVal);
    }

    var productQuantity = $('#update-cart-' + id).data('product-quantity');
    update_cart(id, productQuantity);
})

function update_cart(id, productQuantity) {
    var rowId = id;
    var product_quantity = $('#qty-input-' + rowId).val();
    var token = "{{csrf_token()}}"
    var path = "{{route('cart.update')}}";

    $.ajax({
        url: path,
        method: 'POST',
        dataType: 'JSON',
        data: {
            rowId: rowId,
            product_qty: product_quantity,
            productQuantity: productQuantity,
            _token: token
        },
        success: function(data) {

            if (!data['status']) {
                alert(data['message']);
            }
            $('body #header-ajax').html(data['header']);

        },
        complete: function() {
            location.reload();
        },
    })
}


$(document).on('click', '.add-cupon', function(e) {
    e.preventDefault();
    var code = $('input[name=code]').val();
    $('.add-cupon').html('<i class="fa fa-spinner fa-spin"></i>Applying...');
    $('#cupon-form').submit();

    // var token = "{{csrf_token()}}"
    // var path = "{{route('cart.delete')}}";

    // $.ajax({
    //     url: path,
    //     method: 'POST',
    //     dataType: 'JSON',
    //     data: {
    //         cart_id: id,
    //         _token: token
    //     },
    //     success: function(data) {
    //         if (data['status']) {
    //             swal({
    //                 title: "Deleted from the cart!",
    //                 icon: "success",
    //                 button: "ok!",
    //             });
    //         }
    //         $('body #header-ajax').html(data['header']);
    //     },
    //     complete: function() {
    //         location.reload();
    //     },
    //     error: function(error) {
    //         console.log(error)
    //     },
    // });

})
</script>
@endsection