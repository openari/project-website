@extends('layout')
@section('title', '作品所有權')

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
                                      <li class="nav-item active">
                                        <a class="nav-link" href="#">所有權</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link" href="{{ action('ArtController@show', [ 'artId' => $art->id, 'part' => 'certificate' ]) }}">認證典藏</a>
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
                            <div class="row">

                                <div class="col-lg-3">

                                                <div class="single-input-item">
                                                        <h5>{{ \Carbon\Carbon::createFromTimestampMs($art->ownership->created_at)->format('Y.m.d') }}</h5>
                                                        <p>所有權部 V1.0</p>
                                                </div>

                                </div>
                                <div class="col-lg-3">
                                                <div class="single-input-item">
                                                    <h5>物件保存人或單位</h5>
                                                    @if (isset($art->ownership->owner_public) && $art->ownership->owner_public)
                                                    <p>{{ $art->ownership->owner }}</p>
                                                    @else
                                                    <p>不公開</p>
                                                    @endif
                                                </div>
                                                <div class="single-input-item">
                                                    <h5>物件保存人或單位聯繫方式</h5>
                                                    @if (isset($art->ownership->contact_public) && $art->ownership->contact_public)
                                                    <p>{{ $art->ownership->email }}</p>
                                                    <p>{{ $art->ownership->phone }}</p>
                                                    @else
                                                    <p>不公開</p>
                                                    @endif
                                                </div>
                                                <div class="single-input-item">
                                                    <h5>交易紀錄</h5>
                                                    @if (isset($art->ownership->price_public) && $art->ownership->price_public)
                                                    <p>{{ $art->ownership->price }}</p>
                                                    @else
                                                    <p>不公開</p>
                                                    @endif
                                                </div>
                                </div>
                                <div class="col-lg-3"></div>
                                <div class="col-lg-3"></div>
                            </div>
                        <hr>
                            <!-- <div class="row">

                                <div class="col-lg-3">

                                                <div class="single-input-item">
                                                        <h5>2019.03.13</h5>
                                                        <p>所有權部 V1.0</p>
                                                </div>

                                </div>
                                <div class="col-lg-3">
                                                <div class="single-input-item">
                                                    <h5>物件保存人或單位</h5>
                                                    <p>哈其昌</p>
                                                </div>
                                                <div class="single-input-item">
                                                    <h5>物件保存人或單位聯繫方式</h5>
                                                    <p>dizzyha@atmorning.com</p>
                                                </div>
                                                <div class="single-input-item">
                                                    <h5>交易紀錄</h5>
                                                    <p>不公開</p>
                                                </div>
                                </div>
                                <div class="col-lg-3"></div>
                                <div class="col-lg-3"></div>
                            </div> -->
                        <hr>
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
