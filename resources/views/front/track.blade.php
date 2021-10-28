@extends('front.master')
@section('content')
<div class="ps-container">
    <div class="mt-40 mb-40">
        <div class="ps-my-account">
            <div class="container">
                <form class="ps-form--account ps-tab-root" method="GET"
                    action="https://martfury.botble.com/orders/tracking">
                    <div class="ps-form__content">
                        <h4 style="margin-bottom: 0;">Order tracking</h4>
                        <p class="text-center" style="margin-bottom: 30px;">Tracking your order status</p>
                        <div class="form-group">
                            <label for="txt-order-id">Order ID<sup>*</sup></label>
                            <input class="form-control" name="order_id" id="txt-order-id" type="text" value=""
                                placeholder="Order ID">
                        </div>
                        <div class="form-group">
                            <label for="txt-email">Email Address<sup>*</sup></label>
                            <input class="form-control" name="email" id="txt-email" type="email" value=""
                                placeholder="Your Email">
                        </div>
                        <div class="form-group submit">
                            <button class="ps-btn ps-btn--fullwidth" type="submit">Find</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection