@extends('layout')
@section('title', '申請邀請碼')

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

                        <!-- Checkout Coupon Accordion Start -->
                        <div class="checkoutAccordion" id="checkOutAccordion">
                            <div class="card">
                                <h3><i class="fa fa-info-circle"></i>  <span data-toggle="collapse" data-target="#couponaccordion">已經有邀請碼嗎?</span>
                                </h3>
                                <div id="couponaccordion" class="collapse" data-parent="#checkOutAccordion">
                                    <div class="card-body">
                                        <div class="apply-coupon-wrapper">
                                            <p>謝謝您與我們一起，開始體驗 OPEN-ARI 實驗計劃 <a href="{{ url('/artists-apply') }}"> 前往輸入邀請碼 </a></p>
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
                <form action="{{ action('ArtistController@store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="checkout-billing-details-wrap col-lg-12">
                        <h2>我要申請</h2>
                    </div>
                    <div class="col-lg-6">
                    <!-- Checkout Form Area Start -->
                            <div class="billing-form-wrap">
                                <div class="single-input-item">
                                        <label for="name" class="required">申請人姓名/單位</label>
                                        <input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required/>
                                </div>
                                <div class="single-input-item">
                                    <label for="phone" class="required">聯絡電話</label>
                                    <input type="tel" id="phone" name="phone" placeholder="Phone" value="{{ old('phone') }}" required />
                                </div>
<!--
                                <div class="single-input-item">
                                    <label for="oganization" class="required">我是</label>
                                    <select name="oganization" id="oganization">
                                        <option value="artist">藝術家或創作者</option>
                                        <option value="media">藝評媒體</option>
                                        <option value="mesuem">美術館或展覽空間</option>
                                        <option value="gallery">藝廊</option>
                                    </select>
                                </div>
                                 -->
                                <div class="single-input-item">
                                    <label for="source" class="required">如何得知這個計劃</label>
                                    <select name="source" id="source">
                                        <option value="artist" {{ old('source') == 'artist' ? 'selected' : '' }}>藝術家或創作者</option>
                                        <option value="media" {{ old('source') == 'media' ? 'selected' : '' }}>藝評媒體</option>
                                        <option value="mesuem" {{ old('source') == 'mesuem' ? 'selected' : '' }}>美術館或展覽空間</option>
                                        <option value="gallery" {{ old('source') == 'gallery' ? 'selected' : '' }}>藝廊</option>
                                    </select>
                                </div>
                                <div class="checkout-box-wrap">
                                    <div class="single-input-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="agree_terms" name="agree_terms">
                                            <label class="custom-control-label" for="agree_terms">我了解 OPEN-ARI 相關計畫與隱私權條款</label>
                                        </div>
                                    </div>
                                    <div class="account-create single-form-row">
                                        <p>關於您註冊或使用本服務時所提供之個人資料，本實驗計畫將依「隱私權保護政策」為蒐集、處理、利用與保護。</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="billing-form-wrap">
                                <div class="single-input-item">
                                    <label for="email" class="required">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
                                </div>
                                <div class="single-input-item">
                                    <label for="url" class="required">單位或個人社群網頁</label>
                                    <input type="url" id="url" name="url" placeholder="連結網址 Ex: https://open-ari.art" value="{{ old('url') }}" required/>
                                </div>
                                <!--
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
                                </div> -->

                                <div class="single-input-item">
                                    <label for="description">簡述申請原因</label>
                                    <textarea id="description" name="description" cols="60" rows="3"
                                              placeholder="Notes about your application, e.g. 創作者或單位" required>{{ old('description') }}</textarea>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-6">
                        {!! Captcha::display() !!}

                        <div class="single-input-item m-0 justify-content-center align-items-center">
                                <button class="btn btn-brand w-100 mt-26" type="submit">送出</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--== End Page Content Wrapper ==-->
@endsection

@push('modals')
@endpush