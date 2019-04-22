@extends('layout')
@section('title', '作品列表')
@section('headerOptions', 'black-header header-padding')

@section('content')
<!--== Start Page Header Area ==-->
<div class="page-header-wrapper bg-img" data-bg="assets/img/port-details/portfolio-page-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="page-header-content layout--2 d-flex">
                    <h1>最新申請作品</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Page Content Wrapper ==-->
<div class="page-wrapper">
    <!-- Start Portfolio Content Wrapper -->
    <div class="portfolio-page-content-wrapper fix mt-120 mt-md-80 mt-sm-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Portfolio Filterable Menu -->
                    <!--
                    <div class="portfolio-filter-menu mb-md-50">
                        <ul class="port-filter-menu nav justify-content-center">
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".brand">Branding</li>
                            <li data-filter=".design">Design</li>
                            <li data-filter=".markup">Markup</li>
                            <li data-filter=".modeling">Modeling</li>
                            <li data-filter=".photo">Photography</li>
                        </ul>
                    </div> -->
                    <!-- End Portfolio Filterable Menu -->

                    <!-- Start Portfolio Content Wrap -->
                    <div class="portfolio-content basic-title">
                        <div class="row mtm-44 mtm-sm-30 masonry-grid">
                            @foreach($arts as $art)
                            <!-- Single Portfolio Item -->
                            <div class="col-sm-6 col-lg-4 photo design markup">
                                <div class="single-portfolio-wrap layout--2">
                                    <figure class="portfolio-thumb">
                                        @if (empty($art->identification->image))
                                        <img src="assets/img/portfolio/portfolio_02.jpg" alt="{{ $art->identification->title }}"/>
                                        @else
                                        <img src="{{ $art->identification->image }}" alt="{{ $art->identification->title }}"/>
                                        @endif
                                        <a href="{{ action('ArtController@show', [ 'artId' => $art->id ]) }}" class="btn-view-work"><i class="fa fa-link"></i></a>
                                    </figure>

                                    <div class="portfolio-details">
                                        <div class="port-info">
                                            <h3><a href="{{ action('ArtController@show', [ 'artId' => $art->id ]) }}">{{ $art->identification->title }}</a></h3>
                                            <!--
                                            <nav class="nav portfolio-cate">
                                                <a href="{{ url('/showcase-details') }}">Design</a>
                                                <a href="{{ url('/showcase-details') }}">Photography</a>
                                            </nav> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <!-- End Portfolio Content Wrap -->
                </div>

                <div class="col-12">
                    <!--== Start Pagination Area ==-->
                    <div class="pagination-content bg-offwhite mt-114 mt-md-80 mt-sm-60">
                        <!-- <ul class="nav">
                            <li class="btn-arrow btn-prev mr-auto"><a href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="btn-arrow btn-next ml-auto"><a href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul> -->
                    </div>
                    <!--== End Pagination Area ==-->
                </div>
            </div>
        </div>
        <!-- End Portfolio Content Wrapper -->
    </div>
</div>
<!--== End Page Content Wrapper ==-->
@endsection

@push('modals')
@endpush
