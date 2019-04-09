@extends('layout')

@section('headerOptions', 'black-header header-padding')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    <h1>我要申請</h1>
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
            <form action="#" method="post">
            <div class="row">
                <div class="col-12">
                    <div class="checkout-page-coupon-area">
                        <!-- Checkout Coupon Accordion Start -->
                        <div class="checkoutAccordion" id="checkOutAccordion">
                            <div class="card">
                                <h3><i class="fa fa-info-circle"></i>  <span data-toggle="collapse"
                                                                                           data-target="#couponaccordion">已經有邀請碼嗎?</span>
                                </h3>
                                <div id="couponaccordion" class="collapse" data-parent="#checkOutAccordion">
                                    <div class="card-body">
                                        <div class="apply-coupon-wrapper">
                                            <p>謝謝您與我們一起，開始體驗 OPEN-ARI 實驗計劃 <a href="apply-open-ari.html"> 前往輸入邀請碼 </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Checkout Coupon Accordion End -->
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="checkout-billing-details-wrap col-lg-12">
                        <h2>我要申請</h2>
                    </div>
                    <div class="col-lg-6">
                    <!-- Checkout Form Area Start -->
                            <div class="billing-form-wrap">
                                <div class="single-input-item">
                                        <label for="f_name_2" class="required">名</label>
                                        <input type="text" id="f_name" placeholder="First Name" required/>
                                </div>
                                <div class="single-input-item">
                                        <label for="l_name_2" class="required">姓</label>
                                        <input type="text" id="l_name" placeholder="Last Name" required/>
                                 </div>

                                <div class="single-input-item">
                                    <label for="com-name" class="required">申請人單位</label>
                                    <input type="text" id="com-name" placeholder="Company Name"/>
                                </div>
                                <div class="single-input-item">
                                    <label for="phone" class="required">聯絡電話</label>
                                    <input type="text" id="phone" placeholder="Phone"/>
                                </div>
                                <div class="single-input-item">
                                    <label for="oganization" class="required">我是</label>
                                    <select name="oganization" id="oganization">
                                        <option value="artist">藝術家或創作者</option>
                                        <option value="media">藝評媒體</option>
                                        <option value="mesuem">美術館或展覽空間</option>
                                        <option value="gallery">藝廊</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="billing-form-wrap">
                                <div class="single-input-item">
                                    <label for="street-address" class="required">地址</label>
                                    <input type="text" id="street-address" placeholder="Street address Line 1"
                                           required/>
                                </div>
                                <div class="single-input-item">
                                    <label for="town" class="required">縣市</label>
                                    <input type="text" id="town" placeholder="Town / City" required/>
                                </div>
                                <div class="single-input-item">
                                    <label for="postcode" class="required">郵遞區號</label>
                                    <input type="text" id="postcode" placeholder="Postcode / ZIP" required/>
                                </div>
                                <div class="single-input-item">
                                    <label for="ordernote">簡述申請原因</label>
                                    <textarea name="ordernote" id="ordernote" cols="60" rows="3"
                                              placeholder="Notes about your application, e.g. 創作者或單位"></textarea>
                                </div>
                                <div class="checkout-box-wrap">
                                    <div class="single-input-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="create_pwd">
                                            <label class="custom-control-label" for="create_pwd">我了解 OPEN-ARI 相關計畫與隱私權條款</label>
                                        </div>
                                    </div>
                                    <div class="account-create single-form-row">
                                        <p>關於您註冊或使用本服務時所提供之個人資料，本實驗計畫將依「隱私權保護政策」為蒐集、處理、利用與保護。</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-input-item m-0 justify-content-center align-items-center">
                                <button class="btn btn-black">送出</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
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