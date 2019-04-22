@extends('layout')
@section('title', isset($revision) ? '作品碼異動 Step-3' : '作品碼申請 Step-3')

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
            <form action="{{ action('ArtRevisionController@create_step3', ['artId' => $artId ]) }}" method="post">
            @else
            <form action="{{ action('ArtController@store_step3') }}" method="post">
            @endif
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
                                                               class="custom-control-input" checked/>
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
                        <div class="single-input-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="thesame_opt" onclick="fillDefaultValues();">
                                        <label class="custom-control-label" for="thesame_opt"><strong>物件保存人單位，同上作品碼申請人或單位</strong></label>
                                    </div>
                        </div>
                        <div class="single-input-item">
                                    <label for="owner" class="required">物件保存人或單位</label>
                                    <input type="text" id="owner" name="owner" placeholder="物品保存在和單位？" value="{{ session('newart.ownership.owner') }}" required/>
                        </div>
                        <div class="single-input-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="open_people" name="owner_public" value="1" {{ session('newart.ownership.owner_public') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="open_people">公開</label>
                                    </div>
                        </div>
                        <div class="single-input-item">
                                    <label for="email" class="required">物件保存人或單位聯繫方式</label>
                                    <input class="m-2" type="text" id="email" name="email" placeholder="Email" value="{{ session('newart.ownership.email') }}" required/>
                                    <input class="m-2" type="text" id="phone" name="phone" placeholder="聯繫電話" value="{{ session('newart.ownership.phone') }}" required/>
                        </div>
                        <div class="single-input-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="open_contact" name="contact_public" value="1" {{ session('newart.ownership.contact_public') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="open_contact">公開</label>
                                    </div>
                        </div>
                        <div class="single-input-item">
                                    <label for="price" class="required">交易紀錄</label>
                                    <input type="text" id="price" name="price" placeholder="交易金額" value="{{ session('newart.ownership.price') }}" />
                        </div>
                        <div class="single-input-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="open_exchanged" name="price_public" value="1" {{ session('newart.ownership.price_public') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="open_exchanged">公開</label>
                                    </div>
                        </div>
                        <div class="proceed-checkout-btn m-2 float-left">
                            @if (isset($revision))
                            <a href="{{ action('ArtRevisionController@create_step2', ['artId' => $artId ]) }}" class="btn btn-brand">上一步</a>
                            @else
                            <a href="{{ url('/register-step2-open-ari') }}" class="btn btn-brand">上一步</a>
                            @endif
                        </div>
                        <div class="proceed-checkout-btn m-2 float-left">
                            <button type="submit" class="btn btn-brand">下一步</button>
                        </div>
                     </div>

                </div>
            </form>
        </div>
    </section>
</div>
<!--== End Page Content Wrapper ==-->
@endsection

@push('scripts')
<script>
function fillDefaultValues() {
    if ($('#thesame_opt:checked').length == 0) {
        return;
    }
    $('#owner').val('{{ session('artist')->name }}');
    $('#email').val('{{ session('artist')->email }}');
    $('#phone').val('{{ session('artist')->phone }}');
}
</script>
@endpush

@push('modals')
@endpush