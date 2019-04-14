<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="本實驗計畫透過在讓藝術家申請藝術作品碼ARI的過程，讓作品在市場與網際網路中有對其作品的指向性，並同時保有各種詮釋的可能。">

    @hasSection('title')
    <title>@yield('title') | OPEN-ARI 藝術作品資源識別碼 (Art Resource Identifier)</title>
    @else
    <title>OPEN-ARI 藝術作品資源識別碼 (Art Resource Identifier)</title>
    @endif

    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700%7CPlayfair+Display:400,400i"
          rel="stylesheet">

    <!--=== All Plugins CSS ===-->
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="{{asset('assets/css/vendor.css')}}" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="preloader-active">

<!--== Start PreLoader Wrap ==-->
<div class="preloader-area-wrap">
    <div class="spinner d-flex justify-content-center align-items-center h-100">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!--== End PreLoader Wrap ==-->

@yield('aside')

<!--== Start Header Area Wrapper ==-->
<header class="header-area-wrapper @yield('headerOptions', 'transparent-header') sticky-header">
    <div class="container-fluid">
        <div class="row">
            <!-- Mobile Responsive Menu -->
            <div class="col-3 d-block d-lg-none">
                <button class="mobile-menu text-white"><i class="fa fa-bars"></i></button>
            </div>

            <!-- Start Logo Area Wrap -->
            <div class="col-6 col-lg-2 col-xl-3 text-center text-lg-left">
                <a href="{{ url('/') }}" class="logo-wrap d-block">
                    <!-- <img src="{{asset('assets/img/logo-white.png')}}" alt="White Logo"/> -->
                    @hasSection('logo')
                        @yield('logo')
                    @else
                        <img src="{{asset('assets/img/logo-black.png')}}" class="sticky-logo" alt="Black Logo"/>
                    @endif
                </a>
            </div>
            <!-- End Logo Area Wrap -->

            <!-- Start Main Navigation Wrap -->
            <div class="col-3 col-lg-10 col-xl-9 my-auto ml-auto position-static">
                <div class="header-right-area d-flex justify-content-end align-items-center">
                    <div class="navigation-area-wrap d-none d-lg-block">
                        <nav class="main-navigation">
                            <ul class="main-menu nav justify-content-end">
                                <li class="dropdown-navbar"><a href="{{ url('/about') }}">關於</a>
                                </li>
                                <li class="dropdown-navbar arrow"><a href="#">作品碼申請</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="{{ url('/artists-apply') }}">輸入邀請碼</a></li>
                                        <li><a href="{{ url('/register-step1-open-ari') }}">作品碼申請表</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-navbar full-width"><a href="{{ url('/browse') }}">查詢</a>
                                </li>
                                <li class="dropdown-navbar arrow full-width"><a href="#">第三方應用與申請</a>
                                    <ul class="dropdown-nav mega-menu-wrap">
                                        <li class="mega-menu-item"><a href="#" class="mega-title">第三方應用角色</a>
                                            <ul>
                                                <li><a href="{{ url('/3rd-party-applications') }}">線上藝廊</a></li>
                                                <li><a href="{{ url('/3rd-party-applications') }}">創作者</a></li>
                                                <li><a href="{{ url('/3rd-party-applications') }}">藝術拍賣</a></li>
                                                <li><a href="{{ url('/3rd-party-applications') }}">美術館與藝術研究機構</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-item"><a href="#" class="mega-title">資源與申請</a>
                                            <ul>
                                                <li><a href="{{ url('/3rd-open-ari') }}">第三方架構說明</a></li>
                                                <li><a href="https://openari.docs.apiary.io/" target="_blank">API</a></li>
                                                <li><a href="{{ url('/applications/register') }}">我要申請</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-navbar arrow full-width bg-menu"><a href="#">實驗計畫與說明</a>
                                    <ul class="dropdown-nav mega-menu-wrap">
                                        <li class="mega-menu-item"><a href="#" class="mega-title d-none">區塊鍊應用與開源</a>
                                            <ul>
                                                <li><a href="{{ url('/ETH-open-ari') }}">以太坊 (Ethereum)實驗架構說明</a></li>
                                                <li><a href="https://github.com/openari" target="_blank">開源計畫</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-navbar full-width"><a href="{{ url('/faq') }}">Q & A</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="off-canvas-area-wrap">
                        <!--<button class="search-box-open d-block d-lg-none"><i class="fa fa-search"></i></button>
                        <button class="off-canvas-btn d-none d-lg-block"><i class="fa fa-bars"></i></button>-->
                    </div>
                </div>
            </div>
            <!-- End Main Navigation Wrap -->
        </div>
    </div>
</header>
<!--== End Header Area Wrapper ==-->

@yield('content')

<!--== Start Off Canvas Area Wrapper ==-->
<aside class="off-canvas-area-wrapper">
    <!-- Off Canvas Overlay -->
    <div class="off-canvas-overlay"></div>

    <!-- Start Off Canvas Content Area -->
    <div class="off-canvas-content-wrap">
        <div class="off-canvas-content">
            <!-- Start Search Box Wrap -->
            <div class="search-box-wrap off-canvas-item">
                <form action="#" method="post">
                    <input type="search" placeholder="Search.."/>
                    <button class="btn-search"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <!-- Start About Content Wrap -->
            <div class="about-content off-canvas-item">
                <h2>Who We Are</h2>
                <p>Organic seitan post-ironic, four loko bicycle rights art party tousled. Mlkshk tote bag
                    stumptown.</p>
            </div>

            <!-- Start Useful Links Content -->
            <div class="useful-link-wrap off-canvas-item">
                <h2>Useful Links</h2>

                <ul class="useful-link-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>

            <!-- Start Social Links Content -->
            <div class="social-links-wrap off-canvas-item">
                <h2>Connect</h2>

                <div class="social-links">
                    <a href="#" class="trio-tooltip" data-tippy-content="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="trio-tooltip" data-tippy-content="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="trio-tooltip" data-tippy-content="Pinterest"><i class="fa fa-pinterest"></i></a>
                    <a href="#" class="trio-tooltip" data-tippy-content="Instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Off Canvas Close Icon -->
        <button class="btn-close trio-tooltip" data-tippy-content="Close" data-tippy-placement="left"><i
                class="fa fa-close"></i></button>
    </div>
    <!-- End Off Canvas Content Area -->
</aside>
<!--== End Off Canvas Area Wrapper ==-->

<!--== Start Off Canvas Area Wrapper ==-->
<aside class="off-canvas-responsive-menu">
    <!-- Off Canvas Overlay -->
    <div class="off-canvas-overlay"></div>

    <!-- Start Off Canvas Content Area -->
    <div class="off-canvas-content-wrap">
        <div class="off-canvas-content">

        </div>
        <!-- Off Canvas Close Icon -->
        <button class="btn-close trio-tooltip" data-tippy-content="Close" data-tippy-placement="right"><i
                class="fa fa-close"></i></button>
    </div>
    <!-- End Off Canvas Content Area -->
</aside>
<!--== End Off Canvas Area Wrapper ==-->

<!--== Start Footer Area Wrapper ==-->
<footer class="footer-wrapper @yield('extraFooterClass')">
    <!-- Start Footer Widget Area -->
    <div class="footer-widget-wrapper pt-120 pt-md-80 pt-sm-60 pb-116 pb-md-78 pb-sm-60">
        <div class="container">
            <div class="row mtm-44">
                <!-- Start Single Widget Wrap -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget-wrap">
                        <h3 class="widget-title">C-lab<br><br>空總臺灣當代文化實驗場</h3>
                        <div class="widget-body">
                            <div class="about-text">
                                <address>
                                    10655臺北市 <br>
                                    大安區建國南路一段177號 <br>
                                    +886 2 87735087<br>
                                    +886 2 87735035
                                </address>
                                <a href="mailto:hello@open-ari.com">hello@open-ari.com</a><br>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget Wrap -->

                <!-- Start Single Widget Wrap -->
                <div class="col-lg-2 col-md-6">
                    <div class="single-widget-wrap">
                        <h3 class="widget-title">Links</h3>
                        <div class="widget-body">
                            <ul class="widget-list">
                                <li><a href="https://clab.org.tw/" target="_blank">C-lab</a></li>
                                <li><a href="https://www.atmorning.com" target="_blank">Morning Design</a></li>
                                <li><a href="https://github.com/openari" target="_blank">github</a></li>
                                <li><a href="https://github.com/openari/api" target="_blank">API</a></li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget Wrap -->

                <!-- Start Single Widget Wrap -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-widget-wrap">
                        <h3 class="widget-title">Latest Updated</h3>
                        <div class="widget-body">
                            <div class="latest-blog-widget">
                                <div class="single-blog-item">
                                    <h3><a href="blog-details.html">Work Passionately</a></h3>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>  March 9, 2019</span>
                                </div>
                                <div class="single-blog-item">
                                    <h3><a href="blog-details.html">Creating electronic beats in the</a></h3>
                                    <span class="post-date"><i class="fa fa-clock-o"></i>  March 8, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget Wrap -->

                <!-- Start Single Widget Wrap -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-widget-wrap">
                        <h3 class="widget-title">Get In Touch</h3>
                        <div class="widget-body">
                            <div class="newsletter-widget-wrap">
                                <p>Enter your email and receive the latest news from us.</p>
                                <div class="newsletter-form-wrap">
                                    <form action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a"
                                          method="post" id="mc-form" class="mc-form">
                                        <input type="email" id="mc-email" placeholder="Enter Email Address" required/>
                                        <button class="btn-newsletter"><i class="fa fa-envelope"></i></button>
                                    </form>

                                    <!-- MailChimp Alerts Start -->
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div>
                                        <div class="mailchimp-success"></div>
                                        <div class="mailchimp-error"></div>
                                    </div>
                                    <!-- MailChimp Alerts End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Widget Wrap -->
            </div>
        </div>
    </div>
    <!-- End Footer Widget Area -->

    <!-- Start Footer Bottom Area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-7 order-last">
                    <div class="footer-copyright-area mt-xs-10 text-center text-sm-left">
                        <p>Copyright © 2019 OPEN-ARI All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-5 order-first order-sm-last">
                    <div class="footer-social-icons nav justify-content-center justify-content-md-end">
                        <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Facebook"><i
                                class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Twitter"><i
                                class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Pinterest"><i
                                class="fa fa-pinterest"></i></a>
                        <a href="#" target="_blank" class="trio-tooltip" data-tippy-content="Instagram"><i
                                class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom Area -->
</footer>
<!--== End Footer Area Wrapper ==-->

@stack('modals')

@stack('scripts')

<!--=======================Javascript============================-->
<!--=== All Vendor Js ===-->
<script src="{{asset('assets/js/vendor.js')}}"></script>
<!--=== All Plugins Js ===-->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<!--=== Active Js ===-->
<script src="{{asset('assets/js/active.min.js')}}"></script>

<!--=== Revolution Slider Js ===-->
<script src="{{asset('assets/js/revslider/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/js/revslider/extensions/revolution.extension.video.min.js')}}"></script>


<script src="{{asset('assets/js/revslider/revslider-active.js')}}"></script>
</body>
</html>