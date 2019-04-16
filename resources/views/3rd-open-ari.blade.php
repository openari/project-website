@extends('layout')
@section('title', '說明與資源')
@section('headerOptions', 'transparent-header')
@section('logo')
    <img src="assets/img/logo-white.png" alt="White Logo"/>
@endsection

@section('content')
<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <!--== Start Service Hero Area ==-->
    <section class="service-hero-area hv-100 parallaxBg bg-img" data-bg="assets/img/services/service-hero-bg.jpg">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-lg-11 text-center m-auto">
                    <div class="about-us-content white mt-sm-70 mt-md-70">
                        <h2>OPEN-ARI</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Service Hero Area ==-->

    <!--== Start Our Services Area ==-->
    <section class="our-services-wrapper mt-120 mt-md-80 mt-sm-60 mb-110 mb-md-70 mb-sm-50">
        <div class="container">
            <div class="row mtm-30">
                <!-- Start Single Service Item -->
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item-wrap">
                        <figure class="service-thumb">
                            <a herf="https://icom.museum/en/" target="_blank"><img src="assets/img/services/service-1.jpg" alt="Service"/></a>
                        </figure>

                        <div class="single-desc-item-wrap mt-24">
                            <h3 class="mb-20">ObjectID</h3>
                            <p>本實驗計劃 藝術品物件的描述規格 </p>

                            <ul class="showcase-desc-list">
                                <li>藝術作品的URI 作品名冊的規格</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Start Single Service Item -->
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item-wrap">
                        <figure class="service-thumb">
                            <img src="assets/img/services/service-2.jpg" alt="Service"/>
                        </figure>

                        <div class="single-desc-item-wrap mt-24">
                            <h3 class="mb-20">Ethereum 乙太坊</h3>
                            <p>本實驗計畫，作品名冊上鏈於乙太坊</p>

                            <ul class="showcase-desc-list">
                                <li>去中心化區塊鏈技術存放作品名冊</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Service Item -->

                <!-- Start Single Service Item -->
                <div class="col-sm-6 col-lg-4">
                    <div class="service-item-wrap">
                        <figure class="service-thumb">
                            <img src="assets/img/services/service-3.jpg" alt="Service"/>
                        </figure>

                        <div class="single-desc-item-wrap mt-24">
                            <h3 class="mb-20">Google Cloud Plateform</h3>
                            <p>本實驗計畫，系統與資料大數據於GCP上支持</p>

                            <ul class="showcase-desc-list">
                                <li>藝術作品碼申請與查詢平台</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Service Item -->
            </div>
        </div>
    </section>
    <!--== End Our Services Area ==-->

    <!--== Start Our Services Feature Area ==-->
    <section class="our-services-feature-area bg-offwhite pt-60 pt-md-66 pt-sm-46 pb-98 pb-md-60 pb-sm-40">
        <div class="container">
            <div class="row">
                <!-- Start Single Services Feature -->
                <div class="col-lg-6 col-sm-6">
                    <div class="single-welcome-feature d-flex">

                        <div class="feature-info">
                            <h3>此實驗計畫 白皮書</h3>
                            <p>「當代藝術數位加密交易所實驗」ARI 平台建置計畫</p>
                        </div>
                    </div>
                    <div class="feature-info">
                    <a class="btn btn-bordered m-2 w-100" href="download/OPEN-ARI-LAB.pdf" target="_blank"><i class="fa fa-codepen"></i>下載</a>
                    </div>
                </div>
                <!-- End Single Services Feature -->

                <!-- Start Single Services Feature -->
                <div class="col-lg-6 col-sm-6">
                    <div class="single-welcome-feature d-flex">
                        <div class="feature-info">
                            <h3>此實驗計畫 區塊鏈應用白皮書</h3>
                            <p>如何運用藝術品資訊，透過區塊鏈驗證真偽</p>
                        </div>
                    </div>
                    <div class="feature-info">
                    <a class="btn btn-bordered m-2 w-100" href="download/OPEN-ARI-LAB-BLACKCHAIN-white-paper.pdf" target="_blank"><i class="fa fa-codepen"></i>下載</a>
                    </div>
                </div>
                <!-- End Single Services Feature -->
            </div>
        </div>
    </section>
    <!--== End Our Services Feature Area ==-->
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
