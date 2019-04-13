@extends('layout')

@section('headerOptions', 'black-header header-padding')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-img" data-bg="assets/img/port-details/portfolio-page-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content layout--2 d-flex">
                    <h1>最新申請作品</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <!-- Start Portfolio Content Wrapper -->
    <div class="portfolio-page-content-wrapper fix mt-120 mt-md-80 mt-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Portfolio Filterable Menu -->
                    <div class="portfolio-filter-menu mb-md-50">
                        <ul class="port-filter-menu nav justify-content-center">
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".brand">Branding</li>
                            <li data-filter=".design">Design</li>
                            <li data-filter=".markup">Markup</li>
                            <li data-filter=".modeling">Modeling</li>
                            <li data-filter=".photo">Photography</li>
                        </ul>
                    </div>
                    <!-- End Portfolio Filterable Menu -->

                    <!-- Start Portfolio Content Wrap -->
                    <div class="portfolio-content basic-title">
                        <div class="row mtm-44 mtm-sm-30 masonry-grid">
                            <!-- Single Portfolio Item #01 -->
                            <div class="col-sm-6 col-lg-4 photo design markup">
                                <div class="single-portfolio-wrap layout--2">
                                    <figure class="portfolio-thumb">
                                        <img src="assets/img/portfolio/portfolio_02.jpg" alt="Portfolio Image"/>
                                        <a href="{{ url('/showcase-details') }}" class="btn-view-work"><i
                                                class="fa fa-link"></i></a>
                                    </figure>

                                    <div class="portfolio-details">
                                        <div class="port-info">
                                            <h3><a href="{{ url('/showcase-details') }}">Hardcover Book Cover</a></h3>
                                            <nav class="nav portfolio-cate">
                                                <a href="{{ url('/showcase-details') }}">Design</a>
                                                <a href="{{ url('/showcase-details') }}">Photography</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Portfolio Item #02 -->
                            <div class="col-sm-6 col-lg-4 photo markup brand">
                                <div class="single-portfolio-wrap layout--2">
                                    <figure class="portfolio-thumb">
                                        <img src="assets/img/portfolio/portfolio_06.jpg" alt="Portfolio Image"/>
                                        <a href="{{ url('/showcase-details') }}" class="btn-view-work"><i
                                                class="fa fa-link"></i></a>
                                    </figure>

                                    <div class="portfolio-details">
                                        <div class="port-info">
                                            <h3><a href="{{ url('/showcase-details') }}">Flying Macbook</a></h3>
                                            <nav class="nav portfolio-cate">
                                                <a href="{{ url('/showcase-details') }}">Design</a>
                                                <a href="{{ url('/showcase-details') }}">Photography</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Portfolio Item #03 -->
                            <div class="col-sm-6 col-lg-4 photo markup">
                                <div class="single-portfolio-wrap layout--2">
                                    <figure class="portfolio-thumb">
                                        <img src="assets/img/portfolio/portfolio_05.jpg" alt="Portfolio Image"/>
                                        <a href="{{ url('/showcase-details') }}" class="btn-view-work"><i
                                                class="fa fa-link"></i></a>
                                    </figure>

                                    <div class="portfolio-details">
                                        <div class="port-info">
                                            <h3><a href="{{ url('/showcase-details') }}">Floating Card</a></h3>
                                            <nav class="nav portfolio-cate">
                                                <a href="{{ url('/showcase-details') }}">Design</a>
                                                <a href="{{ url('/showcase-details') }}">Photography</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Portfolio Item #04 -->
                            <div class="col-sm-6 col-lg-4 photo modeling">
                                <div class="single-portfolio-wrap layout--2">
                                    <figure class="portfolio-thumb">
                                        <img src="assets/img/portfolio/portfolio_10.jpg" alt="Portfolio Image"/>
                                        <a href="{{ url('/showcase-details') }}" class="btn-view-work"><i
                                                class="fa fa-link"></i></a>
                                    </figure>

                                    <div class="portfolio-details">
                                        <div class="port-info">
                                            <h3><a href="{{ url('/showcase-details') }}">Tri-O Typeface</a></h3>
                                            <nav class="nav portfolio-cate">
                                                <a href="{{ url('/showcase-details') }}">Design</a>
                                                <a href="{{ url('/showcase-details') }}">Photography</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Portfolio Item #05 -->
                            <div class="col-sm-6 col-lg-4 photo markup brand">
                                <div class="single-portfolio-wrap layout--2">
                                    <figure class="portfolio-thumb">
                                        <img src="assets/img/portfolio/portfolio_02.jpg" alt="Portfolio Image"/>
                                        <a href="{{ url('/showcase-details') }}" class="btn-view-work"><i
                                                class="fa fa-link"></i></a>
                                    </figure>

                                    <div class="portfolio-details">
                                        <div class="port-info">
                                            <h3><a href="{{ url('/showcase-details') }}">Hardcover Book Cover</a></h3>
                                            <nav class="nav portfolio-cate">
                                                <a href="{{ url('/showcase-details') }}">Design</a>
                                                <a href="{{ url('/showcase-details') }}">Photography</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Portfolio Item #06 -->
                            <div class="col-sm-6 col-lg-4 photo design modeling">
                                <div class="single-portfolio-wrap layout--2">
                                    <figure class="portfolio-thumb">
                                        <img src="assets/img/portfolio/portfolio_06.jpg" alt="Portfolio Image"/>
                                        <a href="{{ url('/showcase-details') }}" class="btn-view-work"><i
                                                class="fa fa-link"></i></a>
                                    </figure>

                                    <div class="portfolio-details">
                                        <div class="port-info">
                                            <h3><a href="{{ url('/showcase-details') }}">Flying Macbook</a></h3>
                                            <nav class="nav portfolio-cate">
                                                <a href="{{ url('/showcase-details') }}">Design</a>
                                                <a href="{{ url('/showcase-details') }}">Photography</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Portfolio Item #07 -->
                            <div class="col-sm-6 col-lg-4 photo design markup">
                                <div class="single-portfolio-wrap layout--2">
                                    <figure class="portfolio-thumb">
                                        <img src="assets/img/portfolio/portfolio_02.jpg" alt="Portfolio Image"/>
                                        <a href="{{ url('/showcase-details') }}" class="btn-view-work"><i
                                                class="fa fa-link"></i></a>
                                    </figure>

                                    <div class="portfolio-details">
                                        <div class="port-info">
                                            <h3><a href="{{ url('/showcase-details') }}">Hardcover Book Cover</a></h3>
                                            <nav class="nav portfolio-cate">
                                                <a href="{{ url('/showcase-details') }}">Design</a>
                                                <a href="{{ url('/showcase-details') }}">Photography</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Portfolio Item #08 -->
                            <div class="col-sm-6 col-lg-4 photo markup brand">
                                <div class="single-portfolio-wrap layout--2">
                                    <figure class="portfolio-thumb">
                                        <img src="assets/img/portfolio/portfolio_06.jpg" alt="Portfolio Image"/>
                                        <a href="{{ url('/showcase-details') }}" class="btn-view-work"><i
                                                class="fa fa-link"></i></a>
                                    </figure>

                                    <div class="portfolio-details">
                                        <div class="port-info">
                                            <h3><a href="{{ url('/showcase-details') }}">Flying Macbook</a></h3>
                                            <nav class="nav portfolio-cate">
                                                <a href="{{ url('/showcase-details') }}">Design</a>
                                                <a href="{{ url('/showcase-details') }}">Photography</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Portfolio Item #09 -->
                            <div class="col-sm-6 col-lg-4 photo markup">
                                <div class="single-portfolio-wrap layout--2">
                                    <figure class="portfolio-thumb">
                                        <img src="assets/img/portfolio/portfolio_05.jpg" alt="Portfolio Image"/>
                                        <a href="{{ url('/showcase-details') }}" class="btn-view-work"><i
                                                class="fa fa-link"></i></a>
                                    </figure>

                                    <div class="portfolio-details">
                                        <div class="port-info">
                                            <h3><a href="{{ url('/showcase-details') }}">Floating Card</a></h3>
                                            <nav class="nav portfolio-cate">
                                                <a href="{{ url('/showcase-details') }}">Design</a>
                                                <a href="{{ url('/showcase-details') }}">Photography</a>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Portfolio Content Wrap -->
                </div>

                <div class="col-12">
                    <!--== Start Pagination Area ==-->
                    <div class="pagination-content bg-offwhite mt-114 mt-md-80 mt-sm-60">
                        <ul class="nav">
                            <li class="btn-arrow btn-prev mr-auto"><a href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="btn-arrow btn-next ml-auto"><a href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--== End Pagination Area ==-->
                </div>
            </div>
        </div>
        <!-- End Portfolio Content Wrapper -->
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
