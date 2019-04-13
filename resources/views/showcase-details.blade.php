@extends('layout')

@section('headerOptions', 'black-header header-padding')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    <h5></h5>
                    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="查詢 作品" aria-label="Search">
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
                            <h1 class="sidebar-title">作品碼 xcr3456789</h1>
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                      <li class="nav-item active">
                                        <a class="nav-link" href="#">標示 <span class="sr-only">(current)</span></a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/showcase-details-2') }}">所有權</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/showcase-details-3') }}">認證典藏</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/showcase-details-4') }}">指向</a>
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
                                        <p>物品屬於何類？</p>
                                </div>
                                <div class="single-input-item">
                                        <h5>材料</h5>
                                        <p>物品是用什麼材料製作的？<p/>
                                 </div>

                                <div class="single-input-item">
                                    <h5>技術</h5>
                                    <p>物品是怎樣製作的？（如，雕刻、燒鑄、蝕刻等）</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>度量</h5>
                                    <p>物品大小 和/或 重量是多少？ EX.10M or 20.3KG</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>編號或標誌</h5>
                                    <p>物品大小 和/或 重量是多少？ EX.10M or 20.3KG</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>突出的特徵</h5>
                                    <p>物品上是否有能夠幫助辨認的任何有形特徵？（如破損、修補或製作上的缺陷）</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>標題</h5>
                                    <p>物品上是否有為人所知、或供辨認的標題？（如，《The Scream》呼救）</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>題材</h5>
                                    <p>物品描述或反映了什麼？（如，風景、戰鬥、抱小孩的婦女 ）</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>日期或時代</h5>
                                    <p>物品製作的時間（如1893年、十七世紀初、青銅器時代末期）</p>
                                </div>
                                <div class="single-input-item">
                                    <h5>製作者</h5>
                                    <p>物品製作者是誰？藝術家、公司組織或文化群體（如：Hopis）</p>
                                </div>

                            <hr>
                    <!-- Start Blog Post Details Content -->
                    <article class="single-post-details">
                        <h5>簡單說明</h5>
                        <div class="single-post-details__body">

                            <p>Viewed from above, the Gailed or Lesachtal also runs in a straighted lined. There is a
                                clear
                                distinction in appearance between the northern and southern sides of the valley. N ons
                                side the gentle foothills of the Lienzer Dolomites, with its wide alp areas, on the
                                other sided the rocky contourse of the Carniced ridged towering above thick mountain
                                forest
                                and marking the state border with Italy.</p>
                            <p>“Golzentipp“ is the name of the local mountain in this area. A perfect vantage point with
                                a grandiose panorama view, encompassing the Hohen Tauern and the Schober group of
                                mountains, the Lienzer Dolomites, the Carnic Alps, the Sextener Dolomites and far into
                                the Pustertal. The chances are good that the view can also be enjoyed, as testified by
                                the many years of meteorological records taken in this region, showing an above-average
                                number of sunny days. Fans of high rocky cliffs will prefer the south side of the valley
                                and head for one of the many side valleys of the Carnic ridge.</p>



                            <p>Pfannspitze, Großer Kinigat, Porze, Cima Manzon, Gamskofel, Hochspitz, Steinkarspitz –
                                between the Obstanser See and the Luggauer Scharte there are countless opportunities to
                                test your stamina and alpine abilities in the midst of grandiose mountain scenery.</p>
                        </div>
                        <hr>
                            <header class="single-post-details__header">
                                 <h5>描述檔案</h5>
                                <p>依照 Object ID 協定拍照對於確認物品極其重要，除了全貌以外，還應對銘文，標誌以及破損或修補部位進行特別拍照。如果可能，還應在圖像中附上與
原物的比例與實物。</p>
                                    <figure class="blog-post-thumb">
                                        <img src="assets/img/home-blog/hb-obj-06.jpg" alt="Blog Details"/>
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
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Interior</a></li>
                                        <li><a href="#">Multi</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="single-post-details__footer__item">
                                <div class="footer-item-left">
                                    <h5 class="item-head"><i class="fa fa-comments-o"></i> 時間:</h5>
                                </div>
                                <div class="footer-item-right">
                                    <span class="count">2019.04.10</span>
                                </div>
                            </div>

                            <div class="single-post-details__footer__item">
                                <div class="footer-item-left">
                                    <h5 class="item-head"><i class="fa fa-share-alt"></i> 物件保存人或單位:</h5>
                                </div>

                                <div class="footer-item-right">
                                    <span class="count">哈其昌</span>
                                </div>
                            </div>

                            <div class="single-post-details__footer__item">
                                <div class="footer-item-left">
                                    <h5 class="item-head"><i class="fa fa-heart-o"></i> 價格:</h5>
                                </div>
                                <div class="footer-item-right">
                                    <span class="count">不公開</span>
                                </div>
                            </div>
                            <hr>
                            <div class="shopping-cart-table table-responsive p-2">
                            <table class="table table-bordered text-center">
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
                                                <img src="assets/img/products/prod-01.jpg" alt="Product"/>
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
                            </table>
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
