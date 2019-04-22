@extends('layout')
@section('title', '作品認證典藏')

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
            <form action="{{ action('ContactController@store', [ 'artId' => $art->id ]) }}" method="post">
                {{ csrf_field() }}

                <div class="row">

                <div class="col-lg-12">
                        <div class="single-sidebar-item-wrap">
                                <h1 class="sidebar-title">作品碼 {{ $art->id }}</h1>
                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                          <li class="nav-item">
                                            <a class="nav-link" href="{{ action('ArtController@show', [ 'artId' => $art->id, 'part' => 'identification' ]) }}">標示 <span class="sr-only">(current)</span></a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="{{ action('ArtController@show', [ 'artId' => $art->id, 'part' => 'ownership' ]) }}">所有權</a>
                                          </li>
                                          <li class="nav-item active">
                                            <a class="nav-link" href="#">認證典藏</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="{{ action('ArtController@show', [ 'artId' => $art->id, 'part' => 'pointers' ]) }}">指向</a>
                                          </li>
                                          @if (isset($art->txhash))
                                          <li class="nav-item">
                                            <a class="nav-link" href="https://ropsten.etherscan.io/tx/{{ $art->txhash }}" target="_blank">區塊鏈紀錄 <i class="fa fa-external-link"></i></a>
                                          </li>
                                          @endif
                                        </ul>
                                      </div>
                                     <div class="proceed-checkout-btn m-2 float-left">
                                                <a href="{{ action('ArtFeedbackController@create', ['artId' => $art->id ]) }}" class="btn btn-black">檢舉</a>
                                            </div>
                                            <div class="proceed-checkout-btn m-2 float-left">
                                                <a href="{{ action('ArtRevisionController@create', ['artId' => $art->id ]) }}" class="btn btn-black">異動</a>
                                            </div>
                                    </div>
                                </nav>
                                 <div class="single-input-item">
                                            <h5>ARI 認證典藏部分，目前尚未公開。</h5>
                                            <p>認證典藏-面對真偽以及藝術盜竊和學術研究等需求，方便藝術品貿易，保險業以及藝術和古董評估師，保留合作開發的空間，希望未來透過各個博物館，典藏單位，藝廊等與各方合作。</p>
                                    </div>
                                     <div class="comment-box-form mt-48">

                                <h5>有興趣請與我們聯絡</h5>

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
                                        </div>
                                    </div>
                                </div>
                                <form action="#">
                                    <div class="row row-20">
                                        <div class="col-12">
                                            <div class="form-input-item mb-20">
                                                <textarea name="comments" id="comments" cols="30" rows="5"
                                                          placeholder="聯絡事項*" required>{{ old('comments') }}</textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-sm-20">
                                            <div class="form-input-item">
                                                <input type="text" name="name" value="{{ old('name') }}" placeholder="姓名/單位名稱*" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-sm-20">
                                            <div class="form-input-item">
                                                <input type="email" name="email" value="{{ old('email') }}" placeholder="電子郵件*" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-input-item mb-20">
                                                <input type="url" name="website" value="{{ old('website') }}" placeholder="網站"/>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            {!! Captcha::display() !!}

                                            <button type="submit" class="btn btn-brand w-100">送出</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <hr>
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
