@extends('layout')
@section('title', isset($revision) ? '作品碼異動 Step-1' : '作品碼申請 Step-1')

@section('headerOptions', 'black-header header-padding')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    @if (isset($revision))
                    <h1>異動</h1>
                    @else
                    <h1>讓我們一起為ＡＲI區塊鏈實驗計畫而努力</h1>
                    @endif
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
            @if (isset($revision))
            <form action="{{ action('ArtRevisionController@create_step1', ['artId' => $artId ]) }}" method="post">
            @else
            <form action="{{ action('ArtController@store_step1') }}" method="post">
            @endif
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-12">
                        <div class="checkout-page-coupon-area">

                            <!-- Message Start -->
                            @if (session('message'))
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <strong>{{ session('message') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <!-- Message End -->

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
                                    <strong>{{ session('artist')->name }}</strong> You should check in on some of those fields below.
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
                            @if (isset($revision))
                            <h5 class="cal-title">異動步驟</h5>
                            @else
                            <h5 class="cal-title">申請步驟</h5>
                            @endif

                            <div class="cart-cal-table table-responsive">
                                <table class="table table-borderless">
                                    <tr class="shipping">
                                        <th>步驟</th>
                                        <td>
                                            <ul class="shipping-method">
                                                <li>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="flat_shipping" name="shipping_method"
                                                               class="custom-control-input" checked/>
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
                                                               class="custom-control-input"/>
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
                        <div class="billing-form-wrap">
                            <div class="single-input-item">
                                    <label for="type_of_object" class="required">物品類型</label>
                                    <input type="text" id="type_of_object" name="type_of_object" placeholder="物品屬於何類？（如，繪畫、雕刻、時鐘、面具等）" value="{{ session('newart.identification.type_of_object') }}" required/>
                            </div>
                            <div class="single-input-item">
                                    <label for="materials" class="required">材料</label>
                                    <input type="text" id="materials" name="materials" placeholder="物品是用什麼材料製作的？（如，黃銅、木材、帆布、油畫等）" value="{{ session('newart.identification.materials') }}" required/>
                             </div>

                            <div class="single-input-item">
                                <label for="techniques" class="required">技術</label>
                                <input type="text" id="techniques" name="techniques" placeholder="物品是怎樣製作的？（如，雕刻、燒鑄、蝕刻等）" value="{{ session('newart.identification.techniques') }}" required/>
                            </div>
                            <div class="single-input-item">
                                <label for="measurements" class="required">度量</label>
                                <input type="text" id="measurements" name="measurements" placeholder="物品大小 和/或 重量是多少？ EX.10M or 20.3KG" value="{{ session('newart.identification.measurements') }}" required/>
                            </div>
                            <div class="single-input-item">
                                <label for="inscriptions_and_markings" class="required">編號或標誌</label>
                                <input type="text" id="inscriptions_and_markings" name="inscriptions_and_markings" placeholder="物品大小 和/或 重量是多少？ EX.10M or 20.3KG" value="{{ session('newart.identification.inscriptions_and_markings') }}" required/>
                            </div>
                            <div class="single-input-item">
                                <label for="distinguishing_features" class="required">突出的特徵</label>
                                <input type="text" id="distinguishing_features" name="distinguishing_features" placeholder="物品上是否有能夠幫助辨認的任何有形特徵？（如破損、修補或製作上的缺陷）" value="{{ session('newart.identification.distinguishing_features') }}" required/>
                            </div>
                            <div class="single-input-item">
                                <label for="title" class="required">標題</label>
                                <input type="text" id="title" name="title" placeholder="物品上是否有為人所知、或供辨認的標題？（如，《The Scream》呼救）" value="{{ session('newart.identification.title') }}" required/>
                            </div>
                            <div class="single-input-item">
                                <label for="subject" class="required">題材</label>
                                <input type="text" id="subject" name="subject" placeholder="物品描述或反映了什麼？（如，風景、戰鬥、抱小孩的婦女 ）" value="{{ session('newart.identification.subject') }}" required/>
                            </div>
                            <div class="single-input-item">
                                <label for="date_or_period" class="required">日期或時代</label>
                                <input type="text" id="date_or_period" name="date_or_period" placeholder="物品製作的時間（如1893年、十七世紀初、青銅器時代末期）" value="{{ session('newart.identification.date_or_period') }}" required/>
                            </div>
                            <div class="single-input-item">
                                <label for="maker" class="required">製作者</label>
                                <input type="text" id="maker" name="maker" placeholder="物品製作者是誰？藝術家、公司組織或文化群體（如：Hopis）" value="{{ session('newart.identification.maker') }}" required/>
                            </div>
                        </div>
                        <div class="proceed-checkout-btn">
                            <button type="submit" class="btn btn-brand d-block w-100">下一步</button>
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