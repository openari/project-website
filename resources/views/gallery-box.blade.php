@extends('layout')
@section('title', '第三方應用與申請')
@section('headerOptions', 'black-header header-padding')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    <h1>第三方應用與申請</h1>
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
                            <h2>我們開源，建立應用的藝術生態圈</h2>
                            <p>本計劃支持開源計劃，透過 GITHUB 開源，包含API/BLACKCHAIN/DASHBOARD，引用與延伸整個藝術生態圈的可能性</p>
                            <a href="https://github.com/openari" class="btn btn-black">GITHUB</a>
                        </div>
                        <!-- End Who About Content -->
                    </div>

                    <div class="col-lg-7">
                        <!-- Start About Gallery Wrap-->
                        <div class="about-gallery-content mt-sm-40 mt-md-40">
                            <div class="row masonry-grid mtm-30" style="position: relative; height: 589.375px;">
                                <div class="col-sm-6 mt-30" style="position: absolute; left: 0px; top: 0px;">
                                    <figure class="gallery-image">
                                        <a href="https://openari.docs.apiary.io/#" target="_blank"><img src="assets/img/home-fashion/about/01.jpg" alt="apiary openari"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-6 mt-30" style="position: absolute; left: 332.5px; top: 0px;">
                                    <figure class="gallery-image">
                                        <a href="https://github.com/openari/dashboard" target="_blank"><img src="assets/img/home-fashion/about/02.jpg" alt="github openari"></a>
                                    </figure>
                                </div>
                                <div class="col-sm-6 mt-30" style="position: absolute; left: 0px; top: 237.969px;">
                                    <figure class="gallery-image">
                                        <a href="https://github.com/openari/blockchain-gateway" target="_blank"><img src="assets/img/home-fashion/about/03.jpg" alt="github blockchain-gateway"></a>
                                    </figure>
                                </div>
                                <!--<div class="col-sm-6 mt-30" style="position: absolute; left: 332.5px; top: 351.406px;">
                                    <figure class="gallery-image">
                                        <img src="assets/img/home-fashion/about/04.jpg" alt="Gallery">
                                    </figure>-->
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
                            <h2 class="mb-36 mb-sm-16">適合對象</h2>
                            <p>作者的特質（藝術家）、學術的詮釋（藝術相關研究討論者）、公共的參與（收藏、藝術資料多元提供者）透過API串接，建立第三方應用的藝術生態圈。</p>
                             <a href="{{ url('/applications/register') }}" class="btn btn-black">我要申請</a>
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
    </section>
</div>
<!--== End Page Content Wrapper ==-->
@endsection

@push('modals')
@endpush
