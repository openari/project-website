@extends('layout')

@section('headerOptions', 'black-header header-padding')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    <h1>指向申請</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <div class="checkout-area-wrapper mt-120 mt-md-80 mt-sm-60 mb-120 mb-md-80 mb-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="checkout-page-coupon-area">
                        <!-- Checkout Coupon Accordion Start -->
                        <div class="checkoutAccordion">
                            <div class="card">
                                <h3 class="float-left">作品碼：xcr3456789 |  作品碼連結：http://xcr3456789</h3>
                            </div>
                        </div>
                        <!-- Checkout Coupon Accordion End -->
                    </div>
                </div>
            </div>

            <div class="row">
                    <!-- Checkout Form Area Start -->
                        <div class="col-lg-12 checkout-billing-details-wrap">
                            <h2>指向申請</h2>
                            <div class="single-input-item">
                                <h3>目前實驗計畫期間，需經過審核。</h3>
                                <p>針對作品碼所指向的作品，回應，轉述，詮釋等其他需指向回本作品碼的各式公開連結，都可在此申請並對作品碼做附加。
                                秉持公開精神，任何單位只要是公共公開連結都能在此申請指向但因本專案為實驗階段有預算限制，本欄位需經審核。</p>
                            </div>
                        </div>
                        <div class="col-lg-6 billing-form-wrap">
                                <div class="single-input-item">
                                    <label for="street-address" class="required">申請人/單位</label>
                                    <input type="text" id="street-address" placeholder="姓名或單位名稱"
                                           required/>
                                </div>
                                <div class="single-input-item">
                                    <label for="town" class="required">電子郵件</label>
                                    <input type="text" id="town" placeholder="Email" required/>
                                </div>
                                <div class="single-input-item">
                                    <label for="postcode" class="required">主要聯繫電話</label>
                                    <input type="text" id="postcode" placeholder="02-2343-2343" required/>
                                </div>
                        </div>
                        <div class="col-lg-6 billing-form-wrap">
                            <div class="single-input-item">
                                    <label for="postcode" class="required">標題</label>
                                    <input type="text" id="postcode" placeholder="標題" required/>
                            </div>
                            <div class="single-input-item">
                                    <label for="postcode" class="required">指向連結</label>
                                    <input type="text" id="postcode" placeholder="http://xxx.xxx.x" required/>
                            </div>
                            <div class="single-input-item">
                                    <label for="ordernote">描述</label>
                                    <textarea name="ordernote" id="ordernote" cols="60" rows="3"
                                              placeholder="簡單描述指向的目的"></textarea>
                                </div>
                                <div class="checkout-box-wrap">
                                    <div class="single-input-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="create_pwd">
                                            <label class="custom-control-label" for="create_pwd">我了解 指向連結，如有修改或更動將會失效</label>
                                        </div>
                                    </div>
                                    <div class="account-create single-form-row">
                                        <p>我們針對備存原始檔案會產生數位指紋碼，核心系統內只會將數位指紋碼存取於區塊鏈上，申請方自行備存的檔案如有修改將會導致數位指紋碼失效。
我們以此數位指紋碼提供物件申請作品碼時在確保檔案辨識時使用。</p>
<p>數位指紋碼：我們使用指紋碼技術，透過指紋碼將原檔案經 SHA3-512 做指紋碼比對防止串改，而這份存在區塊鏈上的作品名冊只會存入附件連結與指紋碼，以判定連結是否有效。SHA-3第三代安全雜湊演算法(Secure Hash Algorithm 3) 相關說明： https://zh.wikipedia.org/wiki/SHA-3
</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-input-item m-0 justify-content-center align-items-center">
                                <button class="btn btn-black m-2"> < 上一頁</button><button class="btn btn-black m-2">送出</button>
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
