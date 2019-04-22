@extends('layout')

@section('headerOptions', 'black-header header-padding')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-offwhite">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content d-flex">
                    <h1>檢舉</h1>
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
            <form action="{{ action('ArtFeedbackController@store', [ 'artId' => $artId ]) }}" method="post">
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
                                    <h3 class="float-left">作品碼：{{ $artId }} |  作品碼連結：<a href="{{ action('ArtController@show', [ 'artId' => $artId ]) }}">{{ action('ArtController@show', [ 'artId' => $artId ]) }}</a></h3>
                                </div>
                            </div>
                            <!-- Checkout Coupon Accordion End -->
                        </div>
                    </div>
                </div>

                <div class="row">
                        <!-- Checkout Form Area Start -->
                        <div class="col-lg-12 checkout-billing-details-wrap">
                            <h2>檢舉</h2>
                        </div>
                        <div class="col-lg-6 billing-form-wrap">
                                <div class="single-input-item">
                                    <label for="applicant" class="required">檢舉人/單位</label>
                                    <input type="text" id="applicant" name="applicant" value="{{ old('applicant') }}" placeholder="姓名或單位名稱"
                                           required/>
                                </div>
                                <div class="single-input-item">
                                    <label for="email" class="required">電子郵件</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required/>
                                </div>
                        </div>
                        <div class="col-lg-6 billing-form-wrap">
                            <div class="single-input-item">
                                    <label for="phone" class="required">主要聯繫電話</label>
                                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}" placeholder="02-2343-2343" required/>
                                </div>
                            <div class="single-input-item">
                                    <label for="feedback" class="required">檢舉原因</label>
                                    <textarea id="feedback" name="feedback" cols="60" rows="3"
                                              placeholder="簡單描述檢舉原因" required>{{ old('feedback') }}</textarea>
                                </div>
                        </div>
                        <div class="col-lg-12">
                            {!! Captcha::display() !!}

                            <div class="single-input-item m-0 justify-content-center align-items-center">
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
