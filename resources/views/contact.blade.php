@extends('layout')

@section('content')
<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <!-- Start Contact Hero Map Area -->
    <div class="contact-map-hero-area hv-100">
        <div id="map_content" class="h-100" data-lat="23.763491" data-lng="90.431167" data-zoom="6"></div>
    </div>
    <!-- Start Contact Hero Map Area -->

    <!--== Start Contact Content Area ==-->
    <section class="contact-content-area bg-offwhite pt-120 pt-md-80 pt-sm-60 pb-120 pb-md-80 pb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <!-- Start Contact Form Area -->
                    <div class="contact-form-area-wrapper">
                        <div class="area-title mb-52 mb-sm-32">
                            <h2 class="mb-20">Contact Form</h2>
                            <p class="m-0">Let's write down your email in the above box to receive the useful
                                information.</p>
                        </div>

                        <div class="contact-form-wrapper">
                            <form action="http://hasthemes.com/file/mail.php" method="post" id="contact-form">
                                <div class="form-input-item white-layout">
                                    <input type="text" name="con_name" placeholder="Your Name (Required)" required/>
                                </div>

                                <div class="form-input-item white-layout">
                                    <input type="email" name="con_email" placeholder="Your Email (Required)"
                                           required/>
                                </div>

                                <div class="form-input-item white-layout">
                                    <textarea name="con_message" id="message" cols="30" rows="10"
                                              placeholder="Your Message"></textarea>
                                </div>

                                <div class="form-input-item white-layout">
                                    <button type="submit" class="btn btn-black">Send Message</button>
                                </div>

                                <!-- Show Message Notification -->
                                <div class="form-message"></div>
                            </form>
                        </div>
                    </div>
                    <!-- End Contact Form Area -->
                </div>
            </div>
        </div>
    </section>
    <!--== End Contact Content Area ==-->
</div>
<!--== End Page Content Wrapper ==-->
@endsection

@push('modals')
<!--=== Start Quick View Content Wrapper ==-->
<div class="modal fade" id="quick-view">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="quick-view-content-wrap">
                    <div class="row">
                        <!-- Start Product Thumbnail Area -->
                        <div class="col-md-6">
                            <div class="product-thumb-area">
                                <div class="ht-slick-slider dots-style-three prod-thumb-inner"
                                     data-slick='{"slidesToShow": 1, "infinite": false, "dots": true}'>
                                    <figure class="port-details-thumb-item">
                                        <img src="assets/img/home-landing-page/portfolio/05.jpg" alt="product"/>
                                    </figure>
                                    <figure class="port-details-thumb-item">
                                        <img src="assets/img/home-landing-page/portfolio/02.jpg" alt="product"/>
                                    </figure>
                                    <figure class="port-details-thumb-item">
                                        <img src="assets/img/home-landing-page/portfolio/03.jpg" alt="product"/>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Thumbnail Area -->

                        <!-- Start Product Info Area -->
                        <div class="col-md-6">
                            <div class="product-details-info-content-wrap">
                                <div class="prod-details-info-content">
                                    <h2>Lamp Shade</h2>
                                    <div class="price-group">
                                        <span class="price">$9.99</span>
                                    </div>

                                    <p>Created from either wood or recycled materials, it can be moulded into just about
                                        any
                                        shape and hardens to provide a hard shell. Additives can make it water
                                        resistant.</p>

                                    <div class="product-action mt-38 mb-20">
                                        <div class="action-top mb-40">
                                            <div class="pro-qty mr-10">
                                                <input type="text" id="quantity" title="Quantity" value="1"/>
                                            </div>
                                            <button class="btn btn-brand">Add to Cart</button>
                                        </div>

                                        <button class="btn-wishlist trio-tooltip" data-tippy-content="Add to Wishlist">
                                            <i
                                                    class="fa fa-heart-o"></i>Add to Wishlist
                                        </button>
                                    </div>

                                    <div class="port-details-con-inner">
                                        <div class="single-post-details__footer m-0">
                                            <div class="single-post-details__footer__item">
                                                <div class="footer-item-left">
                                                    <h5 class="item-head"><i class="fa fa-tags"></i> Categories:</h5>
                                                </div>
                                                <div class="footer-item-right">
                                                    <ul class="cate-list nav">
                                                        <li><a href="#">Design</a></li>
                                                        <li><a href="#">Interior</a></li>
                                                        <li><a href="#">Multi</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="single-post-details__footer__item">
                                                <div class="footer-item-left">
                                                    <h5 class="item-head"><i class="fa fa-share-alt"></i> Share:</h5>
                                                </div>

                                                <div class="footer-item-right">
                                                    <div class="share-item">
                                                        <a href="#" class="trio-tooltip"
                                                           data-tippy-content="Share On Facebook"><i
                                                                class="fa fa-facebook"></i></a>
                                                        <a href="#" class="trio-tooltip"
                                                           data-tippy-content="Share On Twitter"><i
                                                                class="fa fa-twitter"></i></a>
                                                        <a href="#" class="trio-tooltip"
                                                           data-tippy-content="Share On Google Plus"><i
                                                                class="fa fa-google-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Info Area -->
                    </div>
                </div>
            </div>

            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
    </div>
</div>
<!--=== End Quick View Content Wrapper ==-->
@endpush