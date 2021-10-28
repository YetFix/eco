@extends('front.master')
@section('content')
<div class="container mt-40">
    <form method="POST" action="https://martfury.botble.com/checkout/fc6f48ec949f1c8e792c515e0440936c/process"
        accept-charset="UTF-8" class="checkout-form payment-checkout-form" id="checkout-form"><input name="_token"
            type="hidden" value="05b98l7yxjRjUVrM47l10tlS3EL3HiZ5E2zJ81tT">
        <input type="hidden" name="checkout-token" id="checkout-token" value="fc6f48ec949f1c8e792c515e0440936c">
        <div class="container" id="main-checkout-product-info">
            <div class="row">
                <div class="order-1 order-md-2 col-lg-5 col-md-6 right">
                    <div class="d-block d-sm-none">
                        <div class="checkout-logo">
                            <div class="container">
                                <a href="https://martfury.botble.com" title="Martfury - Laravel Ecommerce system">
                                    <h2>Bshuddhoshop</h2>
                                </a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div id="cart-item" class="position-relative">
                        <div class="payment-info-loading" style="display: none;">
                            <div class="payment-info-loading-content">
                                <i class="fas fa-spinner fa-spin"></i>
                            </div>
                        </div>

                        <div class="bg-light p-2">
                            <p class="font-weight-bold mb-0">Product(s):</p>
                        </div>
                        <div class="checkout-products-marketplace" id="shipping-method-wrapper">
                            <div class="mt-3 bg-light mb-3">
                                <div class="p-2" style="background: antiquewhite;">
                                    <img src="https://martfury.botble.com/storage/stores/3-300x300.png"
                                        alt="Prof. Catalina Abbott" class="img-fluid rounded" width="30">
                                    <span class="font-weight-bold">Prof. Catalina Abbott</span>
                                    <div class="rating_wrap">
                                        <div class="rating">
                                            <div class="product_rate" style="width: 80%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3">
                                    <div class="row cart-item">
                                        <div class="col-3">
                                            <div class="checkout-product-img-wrapper">
                                                <img class="item-thumb img-thumbnail img-rounded"
                                                    src="https://martfury.botble.com/storage/products/6-150x150.jpg"
                                                    alt="Nikon HD camera">
                                                <span class="checkout-quantity">2</span>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <p class="mb-0">Nikon HD camera</p>
                                            <p class="mb-0">
                                                <small>(Color: Green, Size: XXL)</small>
                                            </p>
                                        </div>
                                        <div class="col-4 text-end">
                                            <p>$338.66</p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="shipping-method-wrapper p-3">
                                    <div class="payment-checkout-form">
                                        <div class="mx-0">
                                            <h6>Shipping method:</h6>
                                        </div>
                                        <input type="hidden" name="shipping_option[3]" value="1">
                                        <div id="shipping-method-3">
                                            <ul class="list-group list_payment_method">
                                                <li class="list-group-item">
                                                    <input class="magic-radio shipping_method_input" type="radio"
                                                        name="shipping_method[3]" id="shipping-method-3-default-1"
                                                        checked="" value="default" data-option="1" data-id="3">
                                                    <label for="shipping-method-3-default-1">
                                                        Delivery -
                                                        <strong>Free shipping</strong>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 p-2">
                            <div class="row">
                                <div class="col-6">
                                    <p>Subtotal:</p>
                                </div>
                                <div class="col-6">
                                    <p class="price-text sub-total-text text-end"> $677.32 </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p>Shipping fee:</p>
                                </div>
                                <div class="col-6 float-end">
                                    <p class="price-text shipping-price-text">$0.00</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p>Tax:</p>
                                </div>
                                <div class="col-6 float-end">
                                    <p class="price-text tax-price-text">$67.73</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <p><strong>Total</strong>:</p>
                                </div>
                                <div class="col-6 float-end">
                                    <p class="total-text raw-total-text" data-price="745.052"> $745.05 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                </div>
                <div class="col-lg-7 col-md-6 left">

                    <div class="form-checkout">

                        <input type="hidden" name="_token" value="05b98l7yxjRjUVrM47l10tlS3EL3HiZ5E2zJ81tT">
                        <div>
                            <h5 class="checkout-payment-title">Shipping information</h5>
                            <input type="hidden"
                                value="https://martfury.botble.com/checkout/fc6f48ec949f1c8e792c515e0440936c/information"
                                id="save-shipping-information-url">
                            <div class="customer-address-payment-form">
                                <div class="form-group mb-3">
                                    <p>Already have an account? <a href="/login">Login</a>
                                    </p>
                                </div>
                                <div class="address-form-wrapper">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-3 ">
                                                <input type="text" name="address[name]" id="address_name"
                                                    placeholder="Full Name"
                                                    class="form-control address-control-item address-control-item-required checkout-input"
                                                    value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 col-12">
                                            <div class="form-group  ">
                                                <input type="text" name="address[email]" id="address_email"
                                                    placeholder="Email"
                                                    class="form-control address-control-item address-control-item-required checkout-input"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div class="form-group  ">
                                                <input type="text" name="address[phone]" id="address_phone"
                                                    placeholder="Phone "
                                                    class="form-control address-control-item address-control-item-required checkout-input"
                                                    value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-3 ">
                                                <div class="select--arrow">
                                                    <select name="address[country]"
                                                        class="form-control address-control-item address-control-item-required"
                                                        id="address_country">
                                                        <option value="" selected="">Select country...</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Åland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="PW">Belau</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia</option>
                                                        <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="BN">Brunei</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo (Brazzaville)</option>
                                                        <option value="CD">Congo (Kinshasa)</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">Cura&amp;ccedil;ao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="CI">Ivory Coast</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="XK">Kosovo</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Laos</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao</option>
                                                        <option value="MK">North Macedonia</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia</option>
                                                        <option value="MD">Moldova</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="KP">North Korea</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PS">Palestinian Territory</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Reunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russia</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="BL">Saint Barth&amp;eacute;lemy</option>
                                                        <option value="SH">Saint Helena</option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="SX">Saint Martin (Dutch part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">S&amp;atilde;o Tom&amp;eacute; and
                                                            Pr&amp;iacute;ncipe</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia/Sandwich Islands</option>
                                                        <option value="KR">South Korea</option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syria</option>
                                                        <option value="TW">Taiwan</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom (UK)</option>
                                                        <option value="US">United States (US)</option>
                                                        <option value="UM">United States (US) Minor Outlying Islands
                                                        </option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VA">Vatican</option>
                                                        <option value="VE">Venezuela</option>
                                                        <option value="VN">Vietnam</option>
                                                        <option value="VG">Virgin Islands (British)</option>
                                                        <option value="VI">Virgin Islands (US)</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="form-group mb-3 ">
                                                <input id="address_state" type="text"
                                                    class="form-control address-control-item address-control-item-required checkout-input"
                                                    placeholder="State" name="address[state]" value="">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <div class="form-group  ">
                                                <input id="address_city" type="text"
                                                    class="form-control address-control-item address-control-item-required checkout-input"
                                                    placeholder="City" name="address[city]" value="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3 ">
                                                <input id="address_address" type="text"
                                                    class="form-control address-control-item address-control-item-required checkout-input"
                                                    placeholder="Address" name="address[address]" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <input type="checkbox" name="create_account" value="1" id="create_account">
                                            <label for="create_account" class="control-label"
                                                style="padding-left: 5px">Register an account with above
                                                information?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="password-group" style="display: none;">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <input id="password" type="password" class="form-control checkout-input"
                                                    name="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <input id="password-confirm" type="password"
                                                    class="form-control checkout-input"
                                                    placeholder="Password confirmation" name="password_confirmation">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="position-relative">
                            <div class="payment-info-loading" style="display: none;">
                                <div class="payment-info-loading-content">
                                    <i class="fas fa-spinner fa-spin"></i>
                                </div>
                            </div>
                            <h5 class="checkout-payment-title">Payment method</h5>
                            <input type="hidden" name="amount" value="745.052">
                            <input type="hidden" name="currency" value="USD">
                            <input type="hidden" name="callback_url" value="https://martfury.botble.com/payment/status">
                            <input type="hidden" name="return_url"
                                value="https://martfury.botble.com/checkout/fc6f48ec949f1c8e792c515e0440936c/success">
                            <ul class="list-group list_payment_method">

                                <li class="list-group-item">
                                    <input class="magic-radio js_payment_method" type="radio" name="payment_method"
                                        id="payment_cod" value="cod" data-bs-toggle="collapse"
                                        data-bs-target=".payment_cod_wrap" data-parent=".list_payment_method"
                                        aria-expanded="true">
                                    <label for="payment_cod" class="text-start">Cash on delivery (COD)</label>
                                    <div class="payment_cod_wrap payment_collapse_wrap" style="padding: 15px 0px;">
                                        Please pay money directly to the postman, if you choose cash on delivery method
                                        (COD).
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <input class="magic-radio js_payment_method" type="radio" name="payment_method"
                                        id="payment_bank_transfer" value="bank_transfer" data-bs-toggle="collapse"
                                        data-bs-target=".payment_bank_transfer_wrap" data-parent=".list_payment_method"
                                        aria-expanded="true">
                                    <label for="payment_bank_transfer" class="text-start">Bksh</label>
                                    <div class="payment_bank_transfer_wrap payment_collapse_wrap collapse show"
                                        style="padding: 15px 0px;">
                                        Send Bksh to our account:01681046437
                                        Transaction id: <br>
                                        <input type="text" name="bksh" id="bksh">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <input class="magic-radio js_payment_method" type="radio" name="payment_method"
                                        id="payment_bank_transfer" value="bank_transfer" data-bs-toggle="collapse"
                                        data-bs-target=".payment_bank_transfer_wrap" data-parent=".list_payment_method"
                                        aria-expanded="true">
                                    <label for="payment_bank_transfer" class="text-start">Nagad</label>
                                    <div class="payment_bank_transfer_wrap payment_collapse_wrap collapse show"
                                        style="padding: 15px 0px;">
                                        Send Nagad to our account:01681046437
                                        Transaction id: <br>
                                        <input type="text" name="ngd" id="ngd">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <br>
                        <div class="form-group mb-3 ">
                            <label for="description" class="control-label">Order notes</label>
                            <br>
                            <textarea name="description" id="description" rows="3" class="form-control"
                                placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-md-6 d-none d-md-block" style="line-height: 53px">
                                    <a class="text-info" href="https://martfury.botble.com/cart"><i
                                            class="fas fa-long-arrow-alt-left"></i> <span
                                            class="d-inline-block back-to-cart">Back to cart</span></a>
                                </div>
                                <div class="col-md-6 checkout-button-group">
                                    <button type="submit"
                                        class="btn payment-checkout-btn payment-checkout-btn-step float-end mt-5"
                                        data-processing-text="Processing. Please wait..." data-error-header="Error">
                                        <button class="btn btn-lg btn-warning">Checkout</button>
                                    </button>
                                </div>
                            </div>
                            <div class="d-block d-md-none back-to-cart-button-group ">
                                <a class="text-info" href="https://martfury.botble.com/cart"><i
                                        class="fas fa-long-arrow-alt-left"></i> <span class="d-inline-block">Back to
                                        cart</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection