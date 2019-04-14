@extends('layout')
@section('title', '關於')
@section('headerOptions', 'transparent-header black-header header-padding')
@section('extraFooterClass', 'about-me-bottom-area')

@section('content')

<!--== Start About Profile Picture Wrapper ==-->
<div class="agency-about-wrapper about-me bg-img" data-bg="assets/img/extra/home_portfolio_agency_01.jpg"></div>
<!--== End About Profile Picture Wrapper ==-->

<!--== Start Page Content Wrapper ==-->
<main class="page-wrapper w-50 w-sm-100 w-md-100 ml-auto">
    <!--== Start About Container Wrapper ==-->
    <section class="about-us-content-wrapper hv-100 mt-md-20">
        <div class="container-fluid h-100">
            <div class="row align-items-center h-100">
                <!-- Start About Content Area -->
                <div class="col-md-10 m-auto text-center">
                    <div class="about-us-content">
                        <h2>ARI 應用流程</h2>

<p>本實驗計畫透過在讓藝術家申請藝術作品碼ARI的過程，讓作品在市場與網際網路中有對其作品的指向性，並同時保有各種詮釋的可能。<br><br>
同時能在一個去中心化架構下能讓大家「信任」其作品名冊（帳本），透過第三方服務示範應用於藝術交易，同時也對其作品名冊也保有開放性與延展性，讓未來第三方服務與單位持續研究與表述的可能。
</p>
                        <!--<div class="about-social-icons mt-40">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>-->
                    </div>
                </div>
                <!-- End About Content Area -->
            </div>
        </div>
    </section>
    <!--== End About Container Wrapper ==-->

    <!--== Start What I Do Area Wrapper ==-->
    <section class="what-i-do-area hv-100 mt-md-22">
        <div class="container-fluid h-100">
            <div class="row align-items-center h-100">
                <div class="col-12 my-auto">
                    <div class="fashion-call-action-left a-m-3">
                        <h2>ARI 特點</h2>
                    </div>

                    <div class="row mtm-sm-30">
                        <!-- Single Feature Item #1 -->
                        <div class="col-md-6">
                            <div class="single-desc-item-wrap layout--2 d-flex">
                                <div class="busi-fea-info">
                                    <h3>作品碼的唯一性</h3>
                                    <p class="m-0">「藝術作品資源識別碼」只有一個或一件相應的作品與之對應</p>
                                    <!--<a href="#" class="btn-view">View Demo</a>-->
                                </div>
                            </div>
                        </div>

                        <!-- Single Feature Item #2 -->
                        <div class="col-md-6">
                            <div class="single-desc-item-wrap layout--2 d-flex">
                                <div class="busi-fea-info">
                                    <h3>作品碼的系列延展</h3>
                                    <p class="m-0">作品的每一版或其他的變化，能夠申請到另一個新的統一藝術作品資源識別碼</p>
                                    <!--<a href="#" class="btn-view">View Demo</a>-->
                                </div>
                            </div>
                        </div>

                        <!-- Single Feature Item #3 -->
                        <div class="col-md-6">
                            <div class="single-desc-item-wrap layout--2 d-flex">
                                <div class="busi-fea-info">
                                    <h3>作品碼的註明</h3>
                                    <p class="m-0">系列作品如果在原來舊版的基礎上沒有內容上太大的變動，但為獨立的作品元件，經過註明依然可以唯一藝術作品資源識別碼</p>
                                    <!--<a href="#" class="btn-view">View Demo</a>-->
                                </div>
                            </div>
                        </div>
                        <!-- Single Feature Item #3 -->
                        <div class="col-md-6">
                            <div class="single-desc-item-wrap layout--2 d-flex">
                                <div class="busi-fea-info">
                                    <h3>乙太鏈 Etherum</h3>
                                    <p class="m-0">作品名冊存放於開放的乙太鏈中，產生相對費用，本專案以實驗為目的，目前規劃屬於非盈利，由官方吸收存入乙太網的費用。</p>

                                    <!--<a href="#" class="btn-view">View Demo</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-desc-item-wrap layout--2 d-flex">
                                <div class="busi-fea-info">
                                    <h3>指紋碼技術</h3>
                                    <p class="m-0">系統備的原始檔案，或是未來附加的指向文件檔案，我們使用指紋碼技術，透過指紋碼將原檔案經 SHA3-512 做指紋碼比對防止串改，而這份存在區塊鏈上的作品名冊只會存入附件連結與指紋碼，以判定連結是否有效。</p>

                                    <!--<a href="#" class="btn-view">View Demo</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-desc-item-wrap layout--2 d-flex">
                                <div class="busi-fea-info">
                                    <h3>SHA3 512</h3>
                                    <p class="m-0">快速與安全的加密是無用置疑的，我們採用SHA-3 在2015年8月5日由 NIST 通過 FIPS 202 正式發表。設計者宣稱在 Intel Core 2 的CPU上面，此演算法的效能是12.5cpb。在硬體實做上面，這個演算法比起其他演算法明顯的快上很多。</p>

                                    <!--<a href="#" class="btn-view">View Demo</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End What I Do Area Wrapper ==-->

    <!--== Start My Skills Area Wrapper ==-->
    <section class="my-skills-area hv-100 mt-sm-60 mt-md-80">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-10 my-auto">
                    <div class="fashion-call-action-left a-m-3">
                        <h2>ARI 區塊鍊上的作品帳冊</h2>
                    </div>

                    <div class="my-skills-content-wrap">
                        <ul class="m-0"><strong>邏輯上我們設計為四層</strong>
                            <li>A 標示：申請文件＋對應備存原始檔案指紋碼 (Hash)</li>
                            <li>B 所有權：所有人標記，交易紀錄，合約＋對應備存原始檔案指紋碼 (Hash)</li>
                            <li>C 查核認證（本次未啟用）：未來提供官方或職業收藏，典藏計畫，第三方專業鑑別做註記＋對應備存原始檔案指紋碼 (Hush)</li>
                            <li>D 其他 ：（本次未啟用）：未來各類第三方服務， 研究論述，論文，評論，表述等等應用...........＋對應備存原始檔案指紋碼 (Hash)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End My Skills Wrapper ==-->
</main>
<!--== End Page Content Wrapper ==-->

<!--== Start About Me Bottom Area ==-->
<div class="about-me-bottom-area mt-sm-60 mt-md-80">
    <div class="about-story-contact-content row no-gutters">
        <!--=== Start Office Area Wrapper ===-->
        <div class="col-md-6 our-office-area bg-egg-white hv-100">
            <div class="h-100">
                <div class="row align-items-center no-gutters h-100">
                    <!-- Start Story Content Area -->
                    <div class="col-md-12 my-auto text-center">
                        <div class="about-us-content">
                            <h2>第一步 申請邀請碼</h2>
                            <p>目前計畫期間為邀請制 <br> 藝術家或第三方機構請填寫您的資料，進一步核發邀請碼提供</p>

                            <a href="{{ url('/artists-register') }}" class="btn btn-event mt-54 mt-md-22 mt-sm-22">馬上開始</a>
                        </div>
                    </div>
                    <!-- End Story Content Area -->
                </div>
            </div>
        </div>
        <!--=== End Office Area Wrapper ===-->

        <!-- Start Our Story Wrapper -->
        <div class="col-md-6 story-content-wrapper bg-img hv-100" data-bg="assets/img/about/about_11.jpg">
            <div class="h-100">
                <div class="row align-items-center no-gutters h-100">
                    <!-- Start Story Content Area -->
                    <div class="col-xl-8 m-auto text-center">
                        <div class="about-us-content white">
                            <h2>第二步 建立作品碼</h2>
                            <p>恭喜你！獲得邀請碼，可以立即開始你的整趟旅程！<br>
                            有任何問題可以與我們聯繫 Email: your@example.com </p>

                            <a href="{{ url('/register-step1-open-ari') }}" class="btn btn-offWhite mt-54 mt-md-22 mt-sm-22">開始前往</a>
                        </div>
                    </div>
                    <!-- End Story Content Area -->
                </div>
            </div>
        </div>
        <!-- End Our Story Wrapper -->
    </div>
</div>
<!--== End About Me Bottom Area ==-->

@endsection