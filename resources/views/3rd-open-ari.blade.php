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
@endpush
