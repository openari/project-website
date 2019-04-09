@extends('layout')
@section('headerOptions', 'black-header header-padding')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    <h1>Accordion</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <div class="accordion-content-wrapper mt-120 mt-md-80 mt-sm-60 mb-120 mb-md-80 mb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <!-- Start Accordion Element #01 -->
                    <div class="accordion-element-1">
                        <div class="restaurant-why-us-accordion" id="accordionOne">
                            <!-- Start Accordion item #01 -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h3 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                        <span>01.</span> Results-driven marketing
                                    </h3>
                                </div>

                                <div id="collapseOne" class="collapse show" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>Keytar DIY cred thundercats direct trade viral umami, fanny pack ugh authen
                                            shabby chic chartreuse. Lo-fi roof party.Lorem ipsum dolor sit amet, ut
                                            vidis
                                            commune scriptorem. Ad his suavitate com plectitur ruis dicant</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Accordion item #02 -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h3 data-toggle="collapse" data-target="#collapseTwo">
                                        <span>02.</span>Persona-driven design
                                    </h3>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>Keytar DIY cred thundercats direct trade viral umami, fanny pack ugh authen
                                            shabby chic chartreuse. Lo-fi roof party.Lorem ipsum dolor sit amet, ut
                                            vidis
                                            commune scriptorem. Ad his suavitate</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Accordion item #03 -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h3 data-toggle="collapse" data-target="#collapseThree">
                                        <span>03.</span> Essential applications
                                    </h3>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>Keytar DIY cred thundercats direct trade viral umami, fanny pack ugh authen
                                            shabby chic chartreuse. Lo-fi roof party.Lorem ipsum dolor sit amet, ut
                                            vidis
                                            commune scriptorem.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Accordion item #04 -->
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h3 data-toggle="collapse" data-target="#collapseFour">
                                        <span> 04.</span> Lead generation
                                    </h3>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordionOne">
                                    <div class="card-body">
                                        <p>Keytar DIY cred thundercats direct trade viral umami, fanny pack ugh authen
                                            shabby chic chartreuse. Lo-fi roof party.Lorem ipsum dolor sit amet, ut
                                            vidis
                                            commune scriptorem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion Element #01 -->

                    <!-- Start Accordion Element #02 -->
                    <div class="accordion-element-2 mt-80 mt-sm-40">
                        <div class="event-about-accordion" id="accordionTwo">
                            <!-- Start Event Accordion #01 -->
                            <div class="card">
                                <div class="card-header" id="headingOne2">
                                    <h3 data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true">
                                        General Information
                                        <span class="icons">
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>
                                    </span>
                                    </h3>
                                </div>

                                <div id="collapseOne2" class="collapse show" data-parent="#accordionTwo">
                                    <div class="card-body">
                                        <p>Keytar DIY cred thundercats direct trade viral umami, fanny pack ugh authen
                                            shabby chic chartreuse. Lo-fi roof party.Lorem ipsum dolor sit amet, ut
                                            vidis
                                            commune scriptorem. Ad his suavitate com plectitur ruis dicant</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Event Accordion #02 -->
                            <div class="card">
                                <div class="card-header" id="headingTwo2">
                                    <h3 data-toggle="collapse" data-target="#collapseTwo2">
                                        Workshops
                                        <span class="icons">
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>
                                    </span>
                                    </h3>
                                </div>
                                <div id="collapseTwo2" class="collapse" data-parent="#accordionTwo">
                                    <div class="card-body">
                                        <p>Keytar DIY cred thundercats direct trade viral umami, fanny pack ugh authen
                                            shabby chic chartreuse. Lo-fi roof party.Lorem ipsum dolor sit amet, ut
                                            vidis
                                            commune scriptorem. Ad his suavitate</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Start Event Accordion #03 -->
                            <div class="card">
                                <div class="card-header" id="headingThree2">
                                    <h3 data-toggle="collapse" data-target="#collapseThree2">
                                        Sponsor Information
                                        <span class="icons">
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus"></i>
                                    </span>
                                    </h3>
                                </div>
                                <div id="collapseThree2" class="collapse" data-parent="#accordionTwo">
                                    <div class="card-body">
                                        <p>Keytar DIY cred thundercats direct trade viral umami, fanny pack ugh authen
                                            shabby chic chartreuse. Lo-fi roof party.Lorem ipsum dolor sit amet, ut
                                            vidis
                                            commune scriptorem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion Element #02 -->
                </div>
            </div>
        </div>
    </div>
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
