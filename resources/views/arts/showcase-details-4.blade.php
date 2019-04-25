@extends('layout')
@section('title', '作品指向')

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
                    </div>
                </div>

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
                                      <li class="nav-item">
                                        <a class="nav-link" href="{{ action('ArtController@show', [ 'artId' => $art->id, 'part' => 'certificate' ]) }}">認證典藏</a>
                                      </li>
                                      <li class="nav-item active">
                                        <a class="nav-link" href="#">指向</a>
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
                                        <h5>指向申請</h5>
                                        <p>外部的論述研究，評論，詮釋，引述，都能透過指向申請，將作品碼指向您的作品，近一步統整回應，轉述，詮釋等各式公開連結，都可申請並對作品碼做附加。秉持公開精神，任何單位只要是公共公開連結都能在此申請指向。</p>
                                        <div class="proceed-checkout-btn m-2 float-left">
                                            <a href="{{ action('PointerController@create', [ 'artId' => $art->id ]) }}" class="btn btn-black">我要申請</a>
                                        </div>
                                </div>

                            <div class="shopping-cart-table table-responsive p-2">
                            <hr>
                            <h5>指向清單</h5>
                            <table class="table table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>標題</th>
                                    <th>指向連結</th>
                                    <th>描述</th>
                                    <th>時間</th>
                                    <th>有效性</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($art->pointers as $pointer)
                                <tr>
                                    <td><span>{{ $pointer->title }}</span></td>
                                    <td class="product-list">
                                        <div class="cart-product-item d-flex align-items-center">
                                            <a href="{{ $pointer->pointer_url }}" class="product-name" target="_blank">{{ $pointer->pointer_url }} <i class="fa fa-external-link"></i></a>
                                        </div>
                                    </td>
                                    <td><span>{{ $pointer->abstract }}</span></td>
                                    <td>
                                        <span class="price">{{ \Carbon\Carbon::createFromTimestampMs($pointer->created_at)->format('Y.m.d') }}</span>
                                    </td>
                                    <td>
                                        <a href="" onclick="validateUrl('{{ $pointer->pointer_url }}');return false;">validate</a>
                                    </td>
                                </tr>
                                @endforeach
                                @if (!isset($art->pointers) || count($art->pointers) == 0)
                                <tr>
                                    <td colspan="4">
                                        <span class="text-center">無資料</span>
                                    </td>
                                </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                                </div>
                        <hr>

                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Content Wrapper ==-->

@endsection

@push('scripts')
    <script>
        function validateUrl(url) {
            try {
                var req = new XMLHttpRequest();
                req.open('HEAD', url, false);
                req.send(null);
                if (req.status !== 200) {
                    throw 'invalid';
                }
                $(event.target).replaceWith('有效');
            } catch(e) {
                $(event.target).replaceWith('失效');
            }
        }
    </script>
@endpush

