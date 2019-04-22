@extends('layout')
@section('title', '作品認證典藏')

@section('headerOptions', 'black-header header-padding')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    <h5></h5>
                    <form class="form-inline my-2 my-lg-0" action="{{ action('ArtController@query') }}" method="get">
                      <input class="form-control mr-sm-2" type="search" name="art-id" placeholder="查詢 作品碼" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <div class="blog-details-content-wrapper mt-120 mt-md-80 mt-sm-60 mb-120 mb-md-80 mb-sm-60">
        <div class="container">
            <div class="row">

            <div class="col-lg-12">
                    <div class="single-sidebar-item-wrap">
                            <h1 class="sidebar-title">作品碼 {{ $art->id }}</h1>
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                      <li class="nav-item">
                                        <a class="nav-link" href="{{ action('ArtController@show', [ 'artId' => $art->id, 'part' => 'identification' ]) }}">標示 <span class="sr-only">(current)</span></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="{{ action('ArtController@show', [ 'artId' => $art->id, 'part' => 'ownership' ]) }}">所有權</a>
                                      </li>
                                      <li class="nav-item active">
                                        <a class="nav-link" href="#">認證典藏</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="{{ action('ArtController@show', [ 'artId' => $art->id, 'part' => 'pointers' ]) }}">指向</a>
                                      </li>
                                    </ul>
                                  </div>
                                 <div class="proceed-checkout-btn m-2 float-left">
                                            <a href="{{ url('/apply-feedback-open-ari') }}" class="btn btn-black">檢舉</a>
                                        </div>
                                        <div class="proceed-checkout-btn m-2 float-left">
                                            <a href="{{ action('ArtRevisionController@create', ['artId' => $art->id ]) }}" class="btn btn-black">異動</a>
                                        </div>
                                </div>
                            </nav>
                             <div class="single-input-item">
                                        <h5>ARI 認證典藏部分，目前尚未公開。</h5>
                                        <p>認證典藏-面對真偽以及藝術盜竊和學術研究等需求，方便藝術品貿易，保險業以及藝術和古董評估師，保留合作開發的空間，希望未來透過各個博物館，典藏單位，藝廊等與各方合作。</p>
                                </div>
                                 <div class="comment-box-form mt-48">
                            <h5>有興趣請與我們聯絡</h5>
                            <form action="#">
                                <div class="row row-20">
                                    <div class="col-12">
                                        <div class="form-input-item mb-20">
                                            <textarea name="comments" id="comments" cols="30" rows="5"
                                                      placeholder="Comment*" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-sm-20">
                                        <div class="form-input-item">
                                            <input type="text" placeholder="Name*" required/>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-sm-20">
                                        <div class="form-input-item">
                                            <input type="email" placeholder="Email*" required/>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-input-item mb-20">
                                            <input type="url" placeholder="Website"/>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-brand w-100">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <hr>
                    </div>
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
