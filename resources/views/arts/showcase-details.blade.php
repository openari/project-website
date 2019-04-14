@extends('layout')
@section('title', '作品標示')

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
                                      <li class="nav-item active">
                                        <a class="nav-link" href="#">標示 <span class="sr-only">(current)</span></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="{{ action('ArtController@show', [ 'artId' => $art->id, 'part' => 'ownership' ]) }}">所有權</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="{{ action('ArtController@show', [ 'artId' => $art->id, 'part' => 'certificate' ]) }}">認證典藏</a>
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
                                            <a href="{{ url('/apply-modified-open-ari') }}" class="btn btn-black">異動</a>
                                        </div>
                                </div>
                            </nav>
                                <div class="single-input-item">
                                    <h5>物品類型</h5>
                                    <p>{{ $identification->type_of_object }}</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>材料</h5>
                                    <p>{{ $identification->materials }}<p/>
                                 </div>

                                <div class="single-input-item">
                                    <h5>技術</h5>
                                    <p>{{ $identification->techniques }}</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>度量</h5>
                                    <p>{{ $identification->measurements }}</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>編號或標誌</h5>
                                    <p>{{ $identification->inscriptions_and_markings }}</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>突出的特徵</h5>
                                    <p>{{ $identification->distinguishing_features }}</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>標題</h5>
                                    <p>{{ $identification->title }}</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>題材</h5>
                                    <p>{{ $identification->subject }}</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>日期或時代</h5>
                                    <p>{{ $identification->date_or_period }}</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>製作者</h5>
                                    <p>{{ $identification->maker }}</p>
                                </div>

                            <hr>
                    <!-- Start Blog Post Details Content -->
                    <article class="single-post-details">
                        <h5>簡單說明</h5>
                        <div class="single-post-details__body">

                            <p>{{ $identification->brief }}</p>
                        </div>
                        <hr>
                            <header class="single-post-details__header">
                                 <h5>描述檔案</h5>
                                <p>依照 Object ID 協定拍照對於確認物品極其重要，除了全貌以外，還應對銘文，標誌以及破損或修補部位進行特別拍照。如果可能，還應在圖像中附上與原物的比例與實物。</p>
                                    <figure class="blog-post-thumb">
                                        <img src="{{asset('assets/img/home-blog/hb-obj-06.jpg')}}" alt="Blog Details"/>
                                    </figure>

                            <div class="blog-post-head">

                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-hourglass-o"></i>圖說</a>
                                    <!--<a href="#"><i class="fa fa-clock-o"></i> January 15, 2019</a>-->
                                </div>
                            </div>
                        </header>
                        <footer class="single-post-details__footer">
                            <div class="single-post-details__footer__item">
                                <div class="footer-item-left">
                                    <h5 class="item-head"><i class="fa fa-tags"></i> 類別:</h5>
                                </div>
                                <div class="footer-item-right">
                                    <ul class="cate-list nav">
                                        <li><a href="#">Artwork</a></li>
<!--                                         <li><a href="#">Interior</a></li>
                                        <li><a href="#">Multi</a></li>
 -->                                    </ul>
                                </div>
                            </div>

                            <div class="single-post-details__footer__item">
                                <div class="footer-item-left">
                                    <h5 class="item-head"><i class="fa fa-comments-o"></i> 時間:</h5>
                                </div>
                                <div class="footer-item-right">
                                    <span class="count">{{ \Carbon\Carbon::createFromTimestampMs($art->created_at)->format('Y.m.d') }}</span>
                                </div>
                            </div>

                            <div class="single-post-details__footer__item">
                                <div class="footer-item-left">
                                    <h5 class="item-head"><i class="fa fa-share-alt"></i> 物件保存人或單位:</h5>
                                </div>

                                <div class="footer-item-right">
                                    <span class="count">{{ $art->ownership->owner }}</span>
                                </div>
                            </div>

                            <div class="single-post-details__footer__item">
                                <div class="footer-item-left">
                                    <h5 class="item-head"><i class="fa fa-heart-o"></i> 價格:</h5>
                                </div>
                                <div class="footer-item-right">
                                    <span class="count">
                                    <span class="count">{{ $art->ownership->price }}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="shopping-cart-table table-responsive p-2">
                            <!-- <table class="table table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>作品指向</th>
                                    <th>時間</th>
                                    <th colspan="2">SHA-3指紋碼</th>

                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="product-list">
                                        <div class="cart-product-item d-flex align-items-center">
                                            <a href="#" class="product-thumb">
                                                <img src="{{asset('assets/img/products/prod-01.jpg')}}" alt="Product"/>
                                            </a>
                                            <a href="#" class="product-name">Metallic cotton
                                                dress</a>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="price">2019.04.04</span>
                                    </td>
                                    <td>
                                        <span class="price">保護中</span>
                                    </td>
                                    <td>
                                        <span class="price"><a href="#">download</a></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table> -->
                        </div>
                            </div>
                            <!-- End Single Sidebar Wrap -->
                        </footer>
                    </article>

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
                                        <img src="{{asset('assets/img/home-landing-page/portfolio/05.jpg')}}" alt="product"/>
                                    </figure>
                                    <figure class="port-details-thumb-item">
                                        <img src="{{asset('assets/img/home-landing-page/portfolio/02.jpg')}}" alt="product"/>
                                    </figure>
                                    <figure class="port-details-thumb-item">
                                        <img src="{{asset('assets/img/home-landing-page/portfolio/03.jpg')}}" alt="product"/>
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
