@extends('layout')

@section('aside')
<!--== Start Off Canvas Area Wrapper ==-->
<aside class="off-canvas-search-box">
    <!-- Off Canvas Overlay -->
    <div class="off-canvas-overlay"></div>

    <!--== Start Search Box Area ==-->
    <div class="search-box-wrapper text-center">
        <div class="search-box-content">
            <form action="#" method="post">
                <input type="search" placeholder="Search"/>
                <button class="btn-search"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <!--== End Search Box Area ==-->
</aside>
<!--== End Off Canvas Area Wrapper ==-->
@endsection

@section('content')
<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <!--== Start Services Content Wrapper ==-->
    <section class="services-content-wrapper pb-100 pb-md-70 pb-sm-60">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6 mt-150 mt-sm-50 mt-md-70 order-1">
                    <div class="service-left-side-content pl-16 pr-16 w-75 w-sm-100 m-auto">
                        <div class="service-left-con-inner">
                            <h2>Find Out How We Can Support You</h2>
                            <p>After 6 years of designing for good causes and good people, we are taking things to the
                                next level.</p>
                        </div>

                        <div class="services-wrapper mt-80 mt-sm-50 mt-md-60">
                            <!-- Start Single Service Item -->
                            <div class="service-item-wrap service-item-2">
                                <div class="service-item-icon">
                                    <i class="fa fa-laptop"></i>
                                </div>
                                <div class="service-item-desc">
                                    <h3>Web Design</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id metus eget mi
                                        elementum egestas finibus id lacus.</p>
                                </div>
                            </div>
                            <!-- End Single Service Item -->

                            <!-- Start Single Service Item -->
                            <div class="service-item-wrap service-item-2">
                                <div class="service-item-icon">
                                    <i class="fa fa-camera-retro"></i>
                                </div>
                                <div class="service-item-desc">
                                    <h3>Photography</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id metus eget mi
                                        elementum egestas finibus id lacus.</p>
                                </div>
                            </div>
                            <!-- End Single Service Item -->

                            <!-- Start Single Service Item -->
                            <div class="service-item-wrap service-item-2">
                                <div class="service-item-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="service-item-desc">
                                    <h3>Social</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id metus eget mi
                                        elementum egestas finibus id lacus.</p>
                                </div>
                            </div>
                            <!-- End Single Service Item -->

                            <!-- Start Single Service Item -->
                            <div class="service-item-wrap service-item-2">
                                <div class="service-item-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="service-item-desc">
                                    <h3>E-commerce</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id metus eget mi
                                        elementum egestas finibus id lacus.</p>
                                </div>
                            </div>
                            <!-- End Single Service Item -->

                            <!-- Start Single Service Item -->
                            <div class="service-item-wrap service-item-2">
                                <div class="service-item-icon">
                                    <i class="fa fa-bar-chart"></i>
                                </div>
                                <div class="service-item-desc">
                                    <h3>Marketing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id metus eget mi
                                        elementum egestas finibus id lacus.</p>
                                </div>
                            </div>
                            <!-- End Single Service Item -->

                            <!-- Start Single Service Item -->
                            <div class="service-item-wrap service-item-2">
                                <div class="service-item-icon">
                                    <i class="fa fa-font"></i>
                                </div>
                                <div class="service-item-desc">
                                    <h3>Copywriting</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id metus eget mi
                                        elementum egestas finibus id lacus.</p>
                                </div>
                            </div>
                            <!-- End Single Service Item -->

                            <!-- Start Single Service Item -->
                            <div class="service-item-wrap service-item-2">
                                <div class="service-item-icon">
                                    <i class="fa fa-file-code-o"></i>
                                </div>
                                <div class="service-item-desc">
                                    <h3>Development</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id metus eget mi
                                        elementum egestas finibus id lacus.</p>
                                </div>
                            </div>
                            <!-- End Single Service Item -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 order-0 order-lg-1">
                    <!-- Start Service Bg Image Area -->
                    <div class="service-bg-img bg-img" data-bg="assets/img/services/service-bg-img.png"></div>
                    <!-- End Service Bg Image Area -->
                </div>
            </div>
        </div>
    </section>
    <!--== End Services Content Wrapper ==-->
</div>
<!--== End Page Content Wrapper ==-->

<!--== Start Off Canvas Area Wrapper ==-->
<aside class="off-canvas-area-wrapper">
    <!-- Off Canvas Overlay -->
    <div class="off-canvas-overlay"></div>

    <!-- Start Off Canvas Content Area -->
    <div class="off-canvas-content-wrap">
        <div class="off-canvas-content">
            <!-- Start Search Box Wrap -->
            <div class="search-box-wrap off-canvas-item">
                <form action="#" method="post">
                    <input type="search" placeholder="Search.."/>
                    <button class="btn-search"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <!-- Start About Content Wrap -->
            <div class="about-content off-canvas-item">
                <h2>Who We Are</h2>
                <p>Organic seitan post-ironic, four loko bicycle rights art party tousled. Mlkshk tote bag
                    stumptown.</p>
            </div>

            <!-- Start Useful Links Content -->
            <div class="useful-link-wrap off-canvas-item">
                <h2>Useful Links</h2>

                <ul class="useful-link-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>

            <!-- Start Social Links Content -->
            <div class="social-links-wrap off-canvas-item">
                <h2>Connect</h2>

                <div class="social-links">
                    <a href="#" class="trio-tooltip" data-tippy-content="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="trio-tooltip" data-tippy-content="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="trio-tooltip" data-tippy-content="Pinterest"><i class="fa fa-pinterest"></i></a>
                    <a href="#" class="trio-tooltip" data-tippy-content="Instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Off Canvas Close Icon -->
        <button class="btn-close trio-tooltip" data-tippy-content="Close" data-tippy-placement="left"><i
                class="fa fa-close"></i></button>
    </div>
    <!-- End Off Canvas Content Area -->
</aside>
<!--== End Off Canvas Area Wrapper ==-->

<!--== Start Off Canvas Area Wrapper ==-->
<aside class="off-canvas-responsive-menu">
    <!-- Off Canvas Overlay -->
    <div class="off-canvas-overlay"></div>

    <!-- Start Off Canvas Content Area -->
    <div class="off-canvas-content-wrap">
        <div class="off-canvas-content">

        </div>
        <!-- Off Canvas Close Icon -->
        <button class="btn-close trio-tooltip" data-tippy-content="Close" data-tippy-placement="right"><i
                class="fa fa-close"></i></button>
    </div>
    <!-- End Off Canvas Content Area -->
</aside>
<!--== End Off Canvas Area Wrapper ==-->
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
