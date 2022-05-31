<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/ziston/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:42:25 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact || Gawe.id || Ziston Form HTML Template</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicons/site.html') }}">

    <!-- Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet" \>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&amp;display=swap" rel="stylesheet" \>

    <!-- Css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome-all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/swiper.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vegas.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nouislider.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nouislider.pips.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ziston-icon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ziston-new-icons.css') }}" />
    <!-- Template styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />

</head>

<body>

    <div class="preloader">
        <img src="{{ asset('images/loader.png') }}" class="preloader__image" alt="">
    </div><!-- /.preloader -->

    <div class="page-wrapper">

        @if(session()->has('sukses'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('sukses') }}
        </div>
        @endif

        <div class="site-header__header-one-wrap header_three_wrap clearfix">

            <div class="header_top_one">
                <div class="header_top_one_container">
                    <div class="header_top_one_inner clearfix">

                        <div class="header_top_one_inner_left float-left">
                            <div class="header_social_1">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                                    <li><a href="#"><i class="fab fa-facebook-square"></i>Facebook</a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i>Pinterest</a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i>Youtube</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="header_top_one_inner_right float-right">
                            <div class="header_topmenu_1">
                                <ul class="list-unstyled">
                                    <li><a href="#"><i class="fas fa-heart"></i>Wishlist</a></li>
                                    
                                    <li><a href="{{ url('/inbox') }}"><i class="fa fa-inbox"></i>inbox</a></li>
                                  
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <header class="main-nav__header-one">
            <nav class="header-navigation three stricky">
                <div class="container-box clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="main-nav__left main-nav__left_one float-left">
                        <div class="logo_one">
                            <a href="{{ url('gawe/index2') }}" class="main-nav__logo">
                                <img src="{{ asset('images/resources/logo-black.png') }}" alt="Awesome image" class="logo-light" height="75">
                            </a>
                        </div>
                        <a href="#" class="side-menu__toggler">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>

                    <div class="main-nav__main-navigation three float-left">
                        <ul class=" main-nav__navigation-box">
                            <li>
                                <a href="{{ url('/gawe') }}">Home</a>
                               <!-- /.sub-menu -->
                            </li>
                           
                            <li>
                                <a href="{{ url('/listings') }}">Pekerja</a>
                                <!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="{{ url('/blog') }}">Blog</a>
                            </li>
                            <li class="current">
                                <a href="{{ url('/kontak') }}">Contact</a>
                            </li>
                            <li>
                                <a href="{{ url('/tentang-kami') }}">About</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->

                    <div class="main-nav__right main-nav__right_one three float-right">
                        
                            <div class="main-nav__right main-nav__right_one three float-right">
                             @if(Auth::user())
                             
                                <ul class="navbar-nav ">
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <img src="{{ asset('gambar/'.Auth::user()->foto) }}" width="55" height="55" class="rounded-circle">
                                    </a>
                                    
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        
                                      <a class="dropdown-item" href="{{ url('/profile/'.Auth::user()->email) }}">Profile</a>                                              
                                      <a class="dropdown-item" href="{{ url('/inbox/'.Auth::user()->email) }}">Pesan</a>
                                        
                                      <hr class="dropdown-divider">
                                      <form action="{{ url('/logout') }}" method="POST">
                                          @csrf
                                        <button type="submit" class="dropdown-item"><i class="bibi-box-arrow-right"></i>Logout</button>
                                      </form>
                                    </div>
                                  </li>   
                                </ul>
                            @else 
                                <div class="header_btn_1">
                                    <a href="{{ url('/login') }}"><span class="icon-add"></span>Login</a>
                                </div>
                            @endif
                               
                            
                    </div>
                </div>
            </nav>
        </header>
        </div>

        <!--Page Header Start-->
        <section class="page-header" style="background-image: url(images/backgrounds/page-header-contact.jpg);">
            <div class="container">
                <h2>Contact</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Contact</span></li>
                </ul>
            </div>
        </section>

        <!--Contact Details Start-->
        <section class="contact_details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <!--contact Details Single-->
                        <div class="contact_details_single">
                            <div class="contact_details_icon">
                                <span class="icon-map-location"></span>
                            </div>
                            <div class="contact_details_inner">
                                <div class="contact_details_content">
                                    <h3>Kunjungi Kami Kapan Saja</h3>
                                    <p>karang plso.malang.indonesia</p>
                                </div>
                                <div class="contact_details_hover_icon">
                                    <span class="icon-map-location"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--contact Details Single-->
                        <div class="contact_details_single">
                            <div class="contact_details_icon">
                                <span class="icon-email"></span>
                            </div>
                            <div class="contact_details_inner">
                                <div class="contact_details_content">
                                    <h3>Email</h3>
                                    <p><a href="gawe.id@gmail.com">gawe.id@gmail,com</a></p>
                                </div>
                                <div class="contact_details_hover_icon">
                                    <span class="icon-email"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <!--contact Details Single-->
                        <div class="contact_details_single">
                            <div class="contact_details_icon">
                                <span class="icon-phone"></span>
                            </div>
                            <div class="contact_details_inner">
                                <div class="contact_details_content">
                                    <h3>Call Center</h3>
                                    <p><a href="tel:+123456789">0123456789</a></p>
                                </div>
                                <div class="contact_details_hover_icon">
                                    <span class="icon-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Contact One single-->
        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="contact_one_left">
                            <div class="block-title text-left">
                                <h4>hubungi kami</h4>
                                <h2>Bagaimana Kami Dapat Membantu Anda?</h2>
                                <p> senang bisa membantu anda kami akan berusaha yang terbaik supaya anda merasa puas.</p>
                            </div>
                            <div class="contact-one-left__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3"></div>
                    <div class="col-xl-5">
                        <div class="contact-one__form__wrap">
                            <div class="row">        
                                    <form action="{{ url('chat-kontak') }}" method="POST">
                                        @csrf
                                    <div class="col-12 my-2">
                                        <div class="input-group">
                                            <input type="text" name="name" placeholder="Nama" class="pr-4 mr-1">
                                            <input type="email" name="email" placeholder="Alamat Email" class="pl-4 ml-1">
                                        </div>
                                    </div>    
                                    <div class="col-12 my-2">
                                        <div class="input-group">
                                            <textarea name="pesan" placeholder="penulis pesan" cols="50" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 my-2">
                                        <div class="input-group contact__btn">
                                            <button type="submit" class="thm-btn contact-one__btn">Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site_footer_shape-1" style="background-image: url(images/resources/footer-shape-1.png)">
            </div>
            <div class="site_footer_map" style="background-image: url(images/resources/footer-map.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget__column footer-widget__about wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__logo">
                                <a href="#"><img src="images/resources/footer-logo.png" alt=""></a>
                            </div>
                            <div class="footer-widget_about_text">
                                <p>Lorem ipsum dolor sit amet, consect etur adi pisicing elit sed do eiusmod tempor
                                    incididunt ut labore.</p>
                            </div>
                            <div class="footer_contact_info">
                                <div class="footer_contact_icon">
                                    <span class="icon-calling"></span>
                                </div>
                                <div class="footer_contact_number">
                                    <p>Phone</p>
                                    <h4><a href="tel:+123456789">92 666 888 0000</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-widget__column footer-widget__explore wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__title">
                                <h3>Explore</h3>
                            </div>
                            <ul class="footer-widget__explore-list list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#"> My Account</a></li>
                                <li><a href="#">My Listings</a></li>
                                <li><a href="#">Pricing Packages</a></li>
                                <li><a href="#">User Dashboard</a></li>
                                <li><a href="#">Bookmarks</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-widget__column footer-widget__categories wow fadeInUp"
                            data-wow-delay="300ms">
                            <div class="footer-widget__title">
                                <h3>Categories</h3>
                            </div>
                            <ul class="footer-widget__categories_list list-unstyled">
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#">Culture</a></li>
                                <li><a href="#">Shopping</a></li>
                                <li><a href="#">Beauty</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Hospitals</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget__column footer-widget__newsletter wow fadeInUp"
                            data-wow-delay="400ms">
                            <div class="footer-widget__title">
                                <h3>Newsletter</h3>
                            </div>
                            <ul class="footer-widget_newsletter_address list-unstyled">
                                <li>88 Broklyn Golden Street, New York. USA</li>
                                <li><a href="mailto:needhelp@ziston.com">needhelp@ziston.com</a></li>
                            </ul>
                            <form>
                                <div class="footer_input-box">
                                    <input type="Email" placeholder="Enter email address">
                                    <button type="submit" class="button"><i
                                            class="fas fa-paper-plane"></i>Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="site-footer_bottom">
            <div class="container">
                <div class="site-footer_bottom_copyright">
                    <p>© Copyright 2020 by <a href="#">Layerdrops.com</a></p>
                </div>
                <div class="site-footer__social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>





    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <div class="side-menu__block">
        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">
                <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                        src="images/shapes/close-1-1.png" alt=""></a>
            </div><!-- /.side-menu__top -->

            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>

            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->

            <div class="side-menu__content">
                <p><a href="mailto:needhelp@tripo.com">needhelp@ziston.com</a> <br> <a href="tel:888-999-0000">888 999
                        0000</a></p>
                <div class="side-menu__social">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>



    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/typed-2.0.11.js') }}"></script>
    <script src="{{ asset('assets/js/vegas.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>


    <!-- template scripts -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>


</body>


<!-- Mirrored from layerdrops.com/ziston/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:42:25 GMT -->