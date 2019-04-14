@extends('layout')
@section('title', '作品碼申請 Step-4')

@section('headerOptions', 'black-header header-padding')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    <h1>讓我們一起為ＡＲI區塊鏈實驗計畫而努力</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <section class="cart-page-area-wrapper mt-120 mt-md-80 mt-sm-60 mb-120 mb-md-80 mb-sm-60">
        <div class="container">
            <form action="{{ action('ArtController@store_step4') }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-12">
                        <div class="checkout-page-coupon-area">

                            <!-- Alert Start -->
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ $error }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endforeach
                            @endif
                            <!-- Alert End -->

                            <!-- Alert Start -->
                            <!--
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <strong>buffer</strong> You should check in on some of those fields below.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div> -->
                            <!-- Alert End -->
                        </div>
                    </div>
                </div>

                <div class="row">
                     <div class="checkout-billing-details-wrap col-lg-12">
                            <h2><strong>{{ session('artist')->name }}</strong> 歡迎您的加入</h2>
                        </div>
                     <div class="col-lg-4">
                        <!-- Cart Calculate Area -->
                        <div class="cart-calculate-area mt-sm-30 mt-md-30">
                            <h5 class="cal-title">申請步驟</h5>

                            <div class="cart-cal-table table-responsive">
                                <table class="table table-borderless">
                                    <tr class="shipping">
                                        <th>步驟</th>
                                        <td>
                                            <ul class="shipping-method">
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="flat_shipping" name="shipping_method"
                                                               class="custom-control-input"/>
                                                        <label class="custom-control-label" for="step">第一步 關於物件基本資料</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="free_shipping" name="shipping_method"
                                                               class="custom-control-input"/>
                                                        <label class="custom-control-label" for="step">第二步 關於物件的說明</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="cod_shipping" name="shipping_method"
                                                               class="custom-control-input"/>
                                                        <label class="custom-control-label" for="step">第三步 關於物件的保存</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="cod_shipping" name="shipping_method"
                                                               class="custom-control-input" checked/>
                                                        <label class="custom-control-label" for="step">第四步 物件路徑與圖片預覽</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <th>申請人/單位</th>
                                        <td>{{ session('artist')->name }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="single-input-item">
                                    <div class="single-input-item">
                                        <strong>SHA3 指紋碼綁定您的物件</strong></label>
                                    </div>
                                    <div class="single-input-item">
                                        依照 Object ID 協定拍照對於確認物品極其重要，除了全貌以外，還應對銘文，標誌以及破損或修補部位進行特別拍照。如果可能，還應在圖像中附上與原物的比例與實物。
                                    </div>
                                    <!--
                                    <div class="single-input-item">
                                        <label for="f_people" class="required">您的物件連結</label>
                                        <input type="text" id="f_people" placeholder="http://xxx.xxx.xx" required/>
                                    </div>
                                     -->
                                    <div class="single-input-item">
                                        <label for="f_people" class="">作品圖片</label>
                                    <input type="text" id="f_people" placeholder="上傳圖片"/>
                                    </div>
                                     <div class="proceed-checkout-btn m-2 float-left">
                                        <a href="#" class="btn btn-black">送出</a>
                                    </div>
                                    <div class="proceed-checkout-btn m-2 float-left">
                                        <a href="#" class="btn btn-black">取消</a>
                                    </div>
                        </div>
                        <div class="shopping-cart-table table-responsive p-2">
                            <table class="table table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>作品指向</th>
                                    <th>時間</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td class="product-list">
                                        <div class="cart-product-item d-flex align-items-center">
                                            <div class="remove-icon">
                                                <button><i class="fa fa-trash-o"></i></button>
                                            </div>
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
                                </tr>
                                </tbody>
                            </table>
                            {!! Captcha::display() !!}
                            <div class="proceed-checkout-btn">

                                <button type="submit" class="btn btn-brand d-block w-100">完成</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
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