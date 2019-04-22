@extends('layout')
@section('title', '輸入邀請碼')

@section('headerOptions', 'black-header header-padding')

@section('content')

<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    <h1>輸入邀請碼</h1>
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

                        @if (empty($invitation_code))
                        <!-- Checkout Coupon Accordion Start -->
                        <div class="checkoutAccordion" id="checkOutAccordion">
                            <div class="card">
                                <h3><i class="fa fa-info-circle"></i> 沒有邀請碼嗎? <span data-toggle="collapse" data-target="#couponaccordion">我要申請</span>
                                </h3>
                                <div id="couponaccordion" class="collapse" data-parent="#checkOutAccordion">
                                    <div class="card-body">
                                        <div class="apply-coupon-wrapper">
                                            <p>目前OPEN-ARI 實驗計畫，採邀約制 <a href="{{ url('/artists-register') }}"> 填寫申請資料 </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Checkout Coupon Accordion End -->
                        @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <!-- Checkout Form Area Start -->
                    <div class="checkout-billing-details-wrap">
                        <h2>輸入我的邀請碼</h2>
                        <div class="billing-form-wrap">
                            <form action="{{ action('ArtistController@apply') }}" method="post">
                                {{ csrf_field() }}
                                <div class="single-input-item">
                                    <label for="invitation_code" class="required">邀請碼</label>
                                    <input type="text" id="invitation_code" name="invitation_code" placeholder="邀請碼" value="{{ $invitation_code }}" required/>
                                </div>

                                {!! Captcha::display() !!}

                                <div class="single-input-item">
                                    <button type="submit" class="btn btn-brand w-100 mt-26">送出</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!--== End Page Content Wrapper ==-->
@endsection

@push('modals')
@endpush