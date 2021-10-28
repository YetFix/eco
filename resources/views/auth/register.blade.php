@extends('front.master')
@section('content')
<?php
  $categories=\App\Models\Category::all();
?>
<div class="ps-my-account">
    <div class="container">
        <form class="ps-form--account ps-tab-root" method="POST" action="https://martfury.botble.com/register">
            <input type="hidden" name="_token" value="AxrlrEF2irpGVuvfkkGdhcZHSvqVzc2a06mDFPDK">
            <div class="ps-form__content">
                <h4>Register An Account</h4>
                <div class="form-group">
                    <input class="form-control" name="name" id="txt-name" type="text" value="" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input class="form-control" name="email" id="txt-email" type="email" value="" autocomplete="email"
                        placeholder="Your Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="txt-password"
                        autocomplete="new-password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password_confirmation"
                        id="txt-password-confirmation" autocomplete="new-password" placeholder="Password">
                </div>
                <div class="show-if-vendor" style="display: none">
                    <div class="form-group">
                        <label for="shop-name" class="required">Shop Name</label>
                        <input class="form-control" name="shop_name" id="shop-name" type="text" value=""
                            placeholder="Shop Name">
                    </div>
                    <div class="form-group shop-url-wrapper">
                        <label for="shop-url" class="required float-left">Shop URL</label>
                        <span class="d-inline-block float-right shop-url-status"></span>
                        <input class="form-control" name="shop_url" id="shop-url" type="text" value=""
                            placeholder="Shop URL" data-url="https://martfury.botble.com/ajax/stores/check-store-url">
                        <span class="d-inline-block"><small
                                data-base-url="https://martfury.botble.com/stores">https://martfury.botble.com/stores</small></span>
                    </div>
                    <div class="form-group">
                        <label for="shop-phone" class="required">Phone Number</label>
                        <input class="form-control" name="shop_phone" id="shop-phone" type="text" value=""
                            placeholder="Shop phone">
                    </div>
                </div>
                <!-- <div class="form-group user-role">
                    <p>
                        <label>
                            <input type="radio" name="is_vendor" value="0" checked="checked">
                            <span class="d-inline-block">
                                I am a customer
                            </span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input type="radio" name="is_vendor" value="1">
                            <span class="d-inline-block">
                                I am a vendor
                            </span>
                        </label>
                    </p>
                </div> -->
                <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-616f278967eb4"
                    value="03AGdBq27hVfOYv0caKoYsVc7kI2-r604N47OXEC7XK9EhIDirFCfxCIMRAKZJGRbwHA8NXwbMArAg2wDUFYbAfn3WGHVQ0_rcruObkYahm1tkpyTT4K_DTn1rK_UUEw0gigmnx_TZsnvbuyJtqvsqz9-_MZlXeLG5uHkUnLdPv9BsCCfx45vCWgf6_iCDdFdWAnSRTDzKR2_AddvqJ_yvGAvVHrm_oiWvEraIF1-KHPXjsItZvac6Blo8YRwkv2WOFwvdw1UlEK_YL6YazemEeLc4xoWPqHvVnLDtZH7Xz14wYbvWhAQfwjc9L-XxrcIoMjiu56V_IKPrW3dBhXcCZbPWUNUvXciPipNX9E2S3y6J3ExEpeNfYnBAwuyKvVfqnExEkHzZgvrrsFOdT6H1xeMo9oZuYC6PibiCbvTJMDRFv654_XbRevMZb75d3w5q6czqgJMEovYI">
                <div class="form-group submit">
                    <button class="ps-btn ps-btn--fullwidth" type="submit">Sign up</button>
                </div>
                <div class="form-group">
                    <p class="text-center">Already have an account? <a href="{{route('login')}}"
                            class="d-inline-block">Log in</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection('content')