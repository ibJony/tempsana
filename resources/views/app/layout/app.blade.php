<!DOCTYPE html>
<html class="no-js" lang="zxx">
@php
    $setting = DB::table('sitesetting')->first();
@endphp


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sanaa Space Furniture</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('sanaaspace/assets/images/favicon.ico')}}">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('sanaaspace/assets/css/vendor/bootstrap.min.css')}}">

    <!-- Icons Css -->
    <link rel="stylesheet" href="{{ asset('sanaaspace/assets/css/vendor/linearicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('sanaaspace/assets/css/vendor/fontawesome-all.min.css')}}">

    <!-- Animation Css -->
    <link rel="stylesheet" href="{{ asset('sanaaspace/assets/css/plugins/animation.min.css')}}">

    <!-- Slick Slier Css -->
    <link rel="stylesheet" href="{{ asset('sanaaspace/assets/css/plugins/slick.min.css')}}">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('sanaaspace/assets/css/plugins/magnific-popup.css')}}">

    <!-- Easyzoom CSS -->
    <link rel="stylesheet" href="{{ asset('sanaaspace/assets/css/plugins/easyzoom.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('sanaaspace/assets/css/style.css')}}">

</head>

<body class="">















    <!--====================  header area ====================-->
    <div class="header-area header-area--default">

        <!-- Header Bottom Wrap Start -->
        <header class="header-area header_absolute header_height-90 header-sticky">
            <div class="container-fluid container-fluid--cp-60">
                <div class="row align-items-center">

                    <div class="col-lg-4 col-md-4 col-6 ">
                        <div class="logo d-block d-lg-none">
                            <a href="#"><img class="w-10" src="assets/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-6">
                        <div class="header-right-side text-right">
                            <div class="header-right-items  d-none d-md-block">
                                <a href="#" data-toggle="modal" data-target="#exampleModal">
                                    <i class="icon-user"></i>
                                </a>
                            </div>
                            <div class="header-right-items d-none d-md-block">
                                <a href="#" class="header-cart">
                                    <i class="icon-heart"></i>
                                    <span class="item-counter">0</span>
                                </a>
                            </div>

                            <div class="header-right-items">
                                <a href="#miniCart" class=" header-cart minicart-btn toolbar-btn header-icon">
                                    <i class="icon-bag2"></i>
                                    <span class="item-counter">0</span>
                                </a>
                            </div>
                            <div class="header-right-items d-block d-md-none">
                                <a href="javascript:void(0)" class="search-icon" id="search-overlay-trigger">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </div>
                            <div class="header-right-items">
                                <a href="#" class="mobile-navigation-icon" id="mobile-menu-trigger">
                                    <i class="icon-menu"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Bottom Wrap End -->

    </div>
    <!--====================  End of header area  ====================-->





















    <div class="header-left-sidebar">
        <div class="header-left-sidebar__content">
            <div class="header-left-sidebar__content-header">

            </div>
            <div class="header-left-sidebar__content-body">
                <div class="logo">
                    Sanaa Space
                </div>
                <div class="mobile-menu-overlay__body pl-0 pr-0">

                    <nav class="offcanvas-navigation mt-30">
                        <ul>
                            <li class="has-children">
                                <a href="#">Home</a>
                            </li>
                            <li class="has-children">
                                <a href="#">Shop</a>
                            </li>
                            <li class="has-children">
                                <a href="#">About us</a>
                            </li>
                        </ul>
                    </nav>

                    <div class="currency-selector-top-area section-space--mt_60  border-top">
                        <div class=" row section-space--mt_60 ">
                            <div class="widget-language col-md-12 mb-20">
                                <ul>
                                    <li class="actived"> <a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="widget-currency col-md-12">
                                <ul>
                                    <li class="actived"><a href="#">Kenya Shillings</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mobile-menu-social-share section-space--mt_60">
                        <p>Follow US On Socials</p>
                        <ul class="social-share">
                            <li><a href="#"><i class="social social_facebook"></i></a></li>
                            <li><a href="#"><i class="social social_twitter"></i></a></li>
                            <li><a href="#"><i class="social social_linkedin"></i></a></li>
                        </ul>
                    </div>


                </div>
            </div>
            <div class="header-left-sidebar__content-footer"></div>
        </div>

    </div>

    <div class="page-template-template-home-left-sidebar">
        <div class="site-wrapper-reveal">
            @yield('content')
        </div>














        <!--====================  footer area ====================-->
        <div class="footer-area-wrapper bg-gray">
            <div class="footer-area section-space--ptb_120">
                <div class="container">
                    <div class="row footer-widget-wrapper">
                        <div class="col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Company</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">About us</a></li>
                                <li><a href="#" class="hover-style-link">FAQs</a></li>
                                <li> <i class="icon_phone"></i><a href="M: +254 (0) 794 813 835" class="hover-style-link">M: +254 (0) 794 813 835</a></li>
                            </ul>
                            <ul class="list footer-social-networks mt-25">

                                <li class="item">
                                    <a href="#" target="_blank" aria-label="Twitter">
                                        <i class="social social_facebook"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#" target="_blank" aria-label="Facebook">
                                        <i class="social social_twitter"></i>
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="#" target="_blank" aria-label="Instagram">
                                        <i class="social social_tumblr"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Help & Information</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Terms of Service</a></li>
                                <li><a href="#" class="hover-style-link">Privacy Policy</a></li>
                                <li><a href="#" class="hover-style-link">Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Social media</h6>
                            <ul class="footer-widget__list">
                                <li><a href="#" class="hover-style-link">Twitter</a></li>
                                <li><a href="#" class="hover-style-link">Facebook</a></li>
                                <li><a href="#" class="hover-style-link">Instagram</a></li>
                                <li><a href="#" class="hover-style-link">Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area section-space--pb_30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="copyright-text text-center  section-space--mt_40">&copy; 2020 Sanaa Space. <a href="https://sanaaspace.co" target="_blank">All Rights Reserved.</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of footer area  ====================-->















    </div>

    <!-- Modal -->
    <div class="header-login-register-wrapper modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-box-wrapper">
                    <div class="helendo-tabs">
                        <ul class="nav" role="tablist">
                            <li class="tab__item nav-item active">
                                <a class="nav-link active" data-toggle="tab" href="#tab_list_06" role="tab">Login</a>
                            </li>
                            <li class="tab__item nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab_list_07" role="tab">Our Register</a>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-content content-modal-box">
                        <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                            <form action="#" class="account-form-box">
                                <h6>Login your account</h6>
                                <div class="single-input">
                                    <input type="text" placeholder="Username">
                                </div>
                                <div class="single-input">
                                    <input type="password" placeholder="Password">
                                </div>
                                <div class="checkbox-wrap mt-10">
                                    <label class="label-for-checkbox inline mt-15">
                                        <input class="input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                    </label>
                                    <a href="#" class=" mt-10">Lost your password?</a>
                                </div>
                                <div class="button-box mt-25">
                                    <a href="#" class="btn btn--full btn--black">Log in</a>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab_list_07" role="tabpanel">

                            <form action="#" class="account-form-box">
                                <h6>Register An Account</h6>
                                <div class="single-input">
                                    <input type="text" placeholder="Username">
                                </div>
                                <div class="single-input">
                                    <input type="text" placeholder="Email address">
                                </div>
                                <div class="single-input">
                                    <input type="password" placeholder="Password">
                                </div>
                                <p class="mt-15">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="privacy-policy-link" target="_blank">privacy policy</a>.</p>
                                <div class="button-box mt-25">
                                    <a href="#" class="btn btn--full btn--black">Register</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="header-login-register-wrapper modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-box-wrapper">
                    <div class="helendo-tabs">
                        <ul class="nav" role="tablist">
                            <li class="tab__item nav-item active">
                                <a class="nav-link active" data-toggle="tab" href="#tab_list_06" role="tab">Login</a>
                            </li>
                            <li class="tab__item nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab_list_07" role="tab">Our Register</a>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-content content-modal-box">
                        <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                            <form action="#" class="account-form-box">
                                <h6>Login your account</h6>
                                <div class="single-input">
                                    <input type="text" placeholder="Username">
                                </div>
                                <div class="single-input">
                                    <input type="password" placeholder="Password">
                                </div>
                                <div class="checkbox-wrap mt-10">
                                    <label class="label-for-checkbox inline mt-15">
                                        <input class="input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                    </label>
                                    <a href="#" class=" mt-10">Lost your password?</a>
                                </div>
                                <div class="button-box mt-25">
                                    <a href="#" class="btn btn--full btn--black">Log in</a>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab_list_07" role="tabpanel">

                            <form action="#" class="account-form-box">
                                <h6>Register An Account</h6>
                                <div class="single-input">
                                    <input type="text" placeholder="Username">
                                </div>
                                <div class="single-input">
                                    <input type="text" placeholder="Email address">
                                </div>
                                <div class="single-input">
                                    <input type="password" placeholder="Password">
                                </div>
                                <p class="mt-15">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="privacy-policy-link" target="_blank">privacy policy</a>.</p>
                                <div class="button-box mt-25">
                                    <a href="#" class="btn btn--full btn--black">Register</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">

        <div class="mobile-menu-overlay__inner">

            <div class="mobile-menu-close-box text-left">
                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"> <i class="icon-cross2"></i></span>
            </div>


            <div class="mobile-menu-overlay__body">
                <div class="offcanvas-menu-header d-md-block d-none">
                    <div class="helendo-language-currency row-flex row section-space--mb_60 ">
                        <div class="widget-language col-md-6">
                            <h6> Language</h6>
                            <ul>
                                <li class="actived"> <a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="widget-currency col-md-6">
                            <h6> Currencies</h6>
                            <ul>
                                <li class="actived"><a href="#">Kenya Shillings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class="has-children">
                            <a href="#">Home</a>
                        </li>
                        <li class="has-children">
                            <a href="#">Shop</a>
                        </li>
                        <li class="has-children">
                            <a href="#">About us</a>
                        </li>
                    </ul>
                </nav>

                <div class="mobile-menu-contact-info section-space--mt_60">
                    <h6>Contact Us</h6>
                    <p>Sanaa Space Nairobi, Kenya <br> hello@sanaaspace.co <br>M: +254 (0) 794 813 835</p>
                </div>

                <div class="mobile-menu-social-share section-space--mt_60">
                    <p>Follow US On Socials</p>
                        <ul class="social-share">
                            <li><a href="#"><i class="social social_facebook"></i></a></li>
                            <li><a href="#"><i class="social social_twitter"></i></a></li>
                            <li><a href="#"><i class="social social_linkedin"></i></a></li>
                        </ul>
                </div>

            </div>

        </div>


    </div>
    <!--====================  End of mobile menu overlay  ====================-->


    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top icon-arrow-up"></i>
        <i class="arrow-bottom icon-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->


    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('sanaaspace/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <!-- jQuery JS -->
    <script src="{{ asset('sanaaspace/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('sanaaspace/assets/js/vendor/bootstrap.min.js')}}"></script>

    <!-- Fullpage JS -->
    <script src="{{ asset('sanaaspace/assets/js/plugins/fullpage.min.js')}}"></script>

    <!-- Slick Slider JS -->
    <script src="{{ asset('sanaaspace/assets/js/plugins/slick.min.js')}}"></script>

    <!-- Countdown JS -->
    <script src="{{ asset('sanaaspace/assets/js/plugins/countdown.min.js')}}"></script>

    <!-- Magnific Popup JS -->
    <script src="{{ asset('sanaaspace/assets/js/plugins/magnific-popup.js')}}"></script>

    <!-- Easyzoom JS -->
    <script src="{{ asset('sanaaspace/assets/js/plugins/easyzoom.js')}}"></script>

    <!-- ImagesLoaded JS -->
    <script src="{{ asset('sanaaspace/assets/js/plugins/images-loaded.min.js')}}"></script>

    <!-- Isotope JS -->
    <script src="{{ asset('sanaaspace/assets/js/plugins/isotope.min.js')}}"></script>

    <!-- YTplayer JS -->
    <script src="{{ asset('sanaaspace/assets/js/plugins/YTplayer.js')}}"></script>

    <!-- Instagramfeed JS -->
    <script src="{{ asset('sanaaspace/assets/js/plugins/jquery.instagramfeed.min.js')}}"></script>

    <!-- Ajax Mail JS -->
    <script src="{{ asset('sanaaspace/assets/js/plugins/ajax.mail.js')}}"></script>

    <!-- wow JS -->
    <script src="{{ asset('sanaaspace/assets/js/plugins/wow.min.js')}}"></script>



    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

    <!--
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main JS -->
    <script src="{{ asset('sanaaspace/assets/js/main.js')}}"></script>


</body>

</html>