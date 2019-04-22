@extends('layout')
@section('title', '指向申請')

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
            <form action="{{ action('PointerController@store', [ 'artId' => $art->id ]) }}" method="post">
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

                            <!-- Checkout Coupon Accordion Start -->
                            <div class="checkoutAccordion">
                                <div class="card">
                                    <h3 class="float-left">作品碼：{{ $art->id }} |  作品碼連結：<a href="{{ action('ArtController@show', [ 'artId' => $art->id ]) }}">{{ action('ArtController@show', [ 'artId' => $art->id ]) }}</a></h3>
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
                            <label for="applicant" class="required">申請人/單位</label>
                            <input type="text" id="applicant" name="applicant" placeholder="姓名或單位名稱" value="{{ old('applicant') }}" required/>
                        </div>
                        <div class="single-input-item">
                            <label for="email" class="required">Email</label>
                            <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
                        </div>
                        <div class="single-input-item">
                            <label for="phone" class="required">主要聯繫電話</label>
                            <input type="tel" id="phone" name="phone" placeholder="02-2343-2343" value="{{ old('phone') }}" required />
                        </div>
                    </div>
                    <div class="col-lg-6 billing-form-wrap">
                        <div class="single-input-item">
                            <label for="title" class="required">標題</label>
                            <input type="text" id="title" name="title" placeholder="標題" value="{{ old('title') }}" required />
                        </div>
                        <div class="single-input-item">
                            <label for="pointer_url" class="required">指向連結</label>
                            <input type="url" id="pointer_url" name="pointer_url" placeholder="http://xxx.xxx.x" value="{{ old('pointer_url') }}" required />
                        </div>
                        <div class="single-input-item">
                            <label for="abstract">描述</label>
                            <textarea id="abstract" name="abstract" cols="60" rows="3"
                                      placeholder="簡單描述指向的目的" required>{{ old('abstract') }}</textarea>
                        </div>
                        <div class="checkout-box-wrap">
                            <div class="single-input-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="agree" name="agree">
                                    <label class="custom-control-label" for="agree">我了解 指向連結，如有修改或更動將會失效</label>
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
                    <div class="col-lg-12">
                        {!! Captcha::display() !!}

                        <div class="single-input-item m-0 justify-content-center align-items-center">
                            <a href="{{ action('ArtController@show', [ 'artId' => $art->id, 'part' => 'pointers' ]) }}" class="btn btn-black m-2"> &lt; 上一頁</a>
                            <button type="submit" class="btn btn-black m-2">送出</button>
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
@endpush
