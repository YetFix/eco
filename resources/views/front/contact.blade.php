@extends('front.master')
@section('content')
<div style="height: 400px; width: 100%; position: relative; text-align: right; margin-top:20px;">
    <div style="height: 400px; width: 100%; overflow: hidden; background: none !important;"><iframe width="100%"
            height="500"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14604.170053089907!2d90.41620897694628!3d23.78150040197204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdef60fa580b185ff!2sH%20R%20REAZ!5e0!3m2!1sen!2sbd!4v1634683041041!5m2!1sen!2sbd"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
</div>
<div>
    <div class="ps-contact-info">
        <div class="container">
            <div class="ps-section__header">
                <h3>Contact Us For Any Questions</h3>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="ps-block--contact-info">
                            <h4>Contact Directly</h4>
                            <p><span class="d-block"> info@gmail.com</span><span>+8809611763871</span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-12">
                        <div class="ps-block--contact-info">
                            <h4>Headquarters</h4>
                            <p><span class="d-block">1179, Narcissus Shopping Point,Uttar Badda,
                                    Dhaka-1212</span><span></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="ps-contact-form">
        <div class="container">
            <form action="https://martfury.botble.com/contact/send" method="post"
                class="ps-form--contact-us contact-form"><input type="hidden" name="_token"
                    value="rGmIhzQnCbJ4DnAl8M7QwSPlWCLmWeec3trz3hfr">
                <h3>Get In Touch</h3>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                        <div class="form-group"><input name="name" type="text" placeholder="Name *"
                                class="form-control"></div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="form-group"><input type="email" name="email" placeholder="Email *"
                                class="form-control"></div>
                    </div>
                    <div class="col-12 ">
                        <div class="form-group"><input type="text" name="phone" placeholder="Phone"
                                class="form-control"></div>
                    </div>
                    <div class="col-12 ">
                        <div class="form-group"><textarea name="content" rows="6" minlength="10" placeholder="Message *"
                                required="required" class="form-control"></textarea></div>
                    </div>
                </div>
                <div class="form-group"><input type="hidden" name="g-recaptcha-response"
                        id="g-recaptcha-response-616f482ac79c5"
                        value="03AGdBq27OerBVXJSKgf-lb8cEGc7wZVdcLWXjxYjK0QJbdKD_09Z7vRZxzG1_5_JT3UPslGukomjAzHOukK4TIG28Tv932KUiYqS2i-6T5hJHg7Vf9hJd2yT81RHvB1md9-TECzhI7kfNhPvkrmibcf_iDLjCHDDLhBxvPGCnThS4BP8V3GIcSzUAUhVKhKI-JYqijvqruEbQy-CagxPPayoS2ehfQxFNE_Xnyt2hSHhBePfNn_5UMiZcrFFwdmhGpNoH-jMB2bCRuPUOy-8pmb_T6McJyrFec_2awMr9LVe_FgKz7iU2Fbtuq2xtmQDx7zPEYnTh834wLWjlZO1SbBecpiyHqlXqsJF9sjybo5kzQd91AS1HJgivslP7KCFpdCkSAS2p9kKc3V5HV3TVoa975Drk3xsAz8xQormyrzjmwojakl-H8Xyi9WbdV9tFTIB9Jlcw4lXV">
                </div>
                <div class="form-group submit"><button type="submit" class="ps-btn">Send message</button></div>
                <div class="contact-form-group">
                    <div class="contact-message contact-success-message" style="display: none;"></div>
                    <div class="contact-message contact-error-message" style="display: none;"></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection