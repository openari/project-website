@extends('layout')

@section('headerOptions', 'black-header header-padding')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    <h1>Gallery Box</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <section class="gallery-box-content-wrapper">
        <!-- Start Gallery Box Item #01 -->
        <div class="gallery-box-1 pt-120 pt-md-80 pt-sm-60 pb-120 pb-md-80 pb-sm-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 my-auto">
                        <!-- Start Who About Content -->
                        <div class="restaurant-about-content">
                            <h2>Who We Are?</h2>
                            <p>Tri-O has become well known for signature prints and we are constantly looking to find
                                new,
                                innovative and easy to wear prints from all over the world. We pride ourselves on
                                delivering
                                high quality clothing at an affordable price.</p>
                            <a href="#" class="btn btn-black">Discover More</a>
                        </div>
                        <!-- End Who About Content -->
                    </div>

                    <div class="col-lg-7">
                        <!-- Start About Gallery Wrap-->
                        <div class="about-gallery-content mt-sm-40 mt-md-40">
                            <div class="row masonry-grid mtm-30" style="position: relative; height: 589.375px;">
                                <div class="col-sm-6 mt-30" style="position: absolute; left: 0px; top: 0px;">
                                    <figure class="gallery-image">
                                        <img src="assets/img/home-fashion/about/01.jpg" alt="Gallery">
                                    </figure>
                                </div>
                                <div class="col-sm-6 mt-30" style="position: absolute; left: 332.5px; top: 0px;">
                                    <figure class="gallery-image">
                                        <img src="assets/img/home-fashion/about/02.jpg" alt="Gallery">
                                    </figure>
                                </div>
                                <div class="col-sm-6 mt-30" style="position: absolute; left: 0px; top: 237.969px;">
                                    <figure class="gallery-image">
                                        <img src="assets/img/home-fashion/about/03.jpg" alt="Gallery">
                                    </figure>
                                </div>
                                <div class="col-sm-6 mt-30" style="position: absolute; left: 332.5px; top: 351.406px;">
                                    <figure class="gallery-image">
                                        <img src="assets/img/home-fashion/about/04.jpg" alt="Gallery">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <!-- End About Gallery Wrap-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Gallery Box Item #01 -->

        <!-- Start Gallery Box Item #02 -->
        <div class="gallery-box-2 bg-offwhite pt-120 pt-md-80 pt-sm-60 pb-120 pb-md-80 pb-sm-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 m-auto">
                        <div class="fashion-call-action-left">
                            <h2 class="mb-36 mb-sm-16">An <span>Unique</span> Fashion Demo.</h2>
                            <p>Our key aim is to provide an exciting clothing collection alongside an excellent shopping
                                experience for all our customers.</p>

                            <div class="row mt-44 mt-sm-24">
                                <div class="col-sm-6">
                                    <figure class="call-action-img">
                                        <img src="assets/img/home-fashion/call-action/01.jpg" alt="Call Action Thumb">
                                    </figure>
                                </div>

                                <div class="col-sm-6 mt-xs-30">
                                    <figure class="call-action-img">
                                        <img src="assets/img/home-fashion/call-action/02.jpg" alt="Call Action Thumb">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 mt-md-30 mt-sm-30">
                        <figure class="call-action-thumbnail">
                            <img src="assets/img/home-fashion/call-action/03.jpg" alt="Call Action Thumb">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Gallery Box Item #02 -->

        <!-- Start Gallery Box Item #03 -->
        <div class="gallery-box-3 pt-120 pt-md-80 pt-sm-60 pb-120 pb-md-80 pb-sm-60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 order-1 my-auto">
                        <!-- Start Restaurant About Content -->
                        <div class="restaurant-about-content">
                            <h2>Discover Our Story.</h2>
                            <p>At our restaurant the premise is simple; we seek to tell our story through the food we
                                serve. We
                                have retained our Michelin star since 2013. Inspired by chef Tom Sellers’ culinary
                                career and
                                the history of British food, certain dishes are influenced by memory or provenance of
                                ingredients.</p>
                            <a href="#" class="btn btn-brand">Discover Restaurant</a>
                        </div>
                        <!-- End Restaurant About Content -->
                    </div>

                    <div class="col-lg-7 order-0 order-lg-1">
                        <!-- Start Restaurant About Gallery -->
                        <div class="restaurant-about-gallery mb-sm-50 mb-md-50">
                            <div class="row masonry-grid" style="position: relative; height: 445.938px;">
                                <div class="col-sm-6" style="position: absolute; left: 0px; top: 0px;">
                                    <a href="#"><img src="assets/img/home-restaurant/restaurant-01.jpg"
                                                     alt="Restaurant"></a>
                                </div>
                                <div class="col-sm-6 mt-xs-30" style="position: absolute; left: 332.5px; top: 0px;">
                                    <a href="#"><img src="assets/img/home-restaurant/restaurant-02.jpg"
                                                     alt="Restaurant"></a>
                                </div>
                                <div class="col-sm-6 mt-30" style="position: absolute; left: 0px; top: 207.969px;">
                                    <a href="#"><img src="assets/img/home-restaurant/restaurant-03.jpg"
                                                     alt="Restaurant"></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Restaurant About Gallery -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Gallery Box Item #03 -->
    </section>
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
