<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/ziston/listings-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:42:45 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pekerja</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/black.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/black.png') }}">
    <link rel="manifest" href="images/favicons/site.html">

    <!-- Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&amp;display=swap" rel="stylesheet">

    <!-- Css-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nouislider.pips.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ziston-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ziston-new-icons.css') }}">
    <!-- Template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <style>
        td{
            padding: 8px;
            width: 335px;
        }
    </style>

</head>

<body>

    <div class="preloader">
        <img src="{{ asset('images/resources/black gawe.jpg') }}" class="preloader__image" height="150" alt="">
    </div><!-- /.preloader -->

    <div class="page-wrapper">

        <div class="site-header__header-one-wrap header_three_wrap listings__page clearfix">

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
                                <a href="index.html" class="main-nav__logo">
                                    <img src="{{ asset('images/resources/black logo gawe.png') }}" class="main-logo" height="50" alt="Awesome Image">
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
                                </li>
                                <li>
                                    <a href="{{ url('gawe/listings') }}">Pekerja</a>
                                </li>
                                <li>
                                    <a href="{{ url('gawe/blog') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{ url('gawe/contact') }}">Contact</a>
                                </li>
                                <li>
                                    <a href="{{ url('gawe/about') }}">About</a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->

                        <div class="main-nav__right main-nav__right_one three float-right">
                            <div class="main-nav__right main-nav__right_one three float-right">
                                <ul class="navbar-nav ">
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <img src="{{ asset('images/resources/latest_listings_au-img-2.png') }}" width="55" height="55" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="{{ url('gawe/login') }}">LOGIN</a>
                                    </div>
                                  </li>   
                                </ul>
                        </div>

                    </div>
                </nav>
            </header>
        </div>

        <!-- Listings Details Main Image Box Start-->
        <section class="listings_details_main_image_box">
            <div class="container-full-width">
                <div class="thm__owl-carousel owl-carousel owl-theme" data-options='{"margin":3, "loop": true, "smartSpeed": 700, "autoplay": true, "autoplayHoverPause": true, "autoplayTimeout": 5000, "items": 3, "responsive": {
                    "0": {
                        "items": 1
                    },
                    "480": {
                        "items": 2
                    },
                    "992": {
                        "items": 3
                    }
                }}'>
                    <div class="item">
                        <!--Listings Details Main Image Box Single-->
                        <div class="listings_details_main_image_box_single">
                            <div class="listings_details_main_image_box__img">
                                <img src="{{ asset('images/resources/foto.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!--Listings Details Main Image Box Single-->
                        <div class="listings_details_main_image_box_single">
                            <div class="listings_details_main_image_box__img">
                                <img src="{{ asset('images/resources/2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!--Listings Details Main Image Box Single-->
                        <div class="listings_details_main_image_box_single">
                            <div class="listings_details_main_image_box__img">
                                <img src="{{ asset('images/resources/y.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Main Bottom Start-->
        @foreach ($errors as $profile)
        <section class="main_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="main_bottom_left">
                            <div class="main_bottom_content">
                                <div class="author_image">
                                    <img src="{{ asset('images/resources/listings-2-page-au-img-5.png') }}" height="70" alt="">
                                </div>
                                <div class="icon">
                                    <span class=""></span>
                                </div>
                            </div>
                            <div class="main_bottom_left_title">
                                <h3>{{ $profile->nama }}<i class="fa fa-check"></i></h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="main_bottom_right">
                            <ul class="list-unstyled">
                                <li><a href="#">Add to Wishlist<i class="far fa-heart"></i></a></li>
                                <li><a href="{{ url('gawe/rekrut') }}"><button class="btn  btn-success btn-outline btn-rounded">Rekrut</button></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Listings Details Start-->
        <section class="listings_details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="listings_details_left">
                            <div class="listings_details_text">
                                <p class="first_text">
                                    <div class="listings_details_left">
                                        <div class="col-12 mt-3">
                                            <div class="custom-form p-4 border rounded">
                                                <center><h3>BIODATA DIRI</h3></center><br><br>
                                            
                                            
                                            <table border="1">
                                             <tr>
                                                <td>Nama Lengkap</td><br>
                                                <td><div class="col-sm-9 text-secondary">
                                                    {{ $profile->nama }}
                                                  </div></td>
                                            </tr>
                                            <tr>
                                                <td>E-Mail</td>
                                                <td>div class="col-sm-9 text-secondary">
                                                    {{ $profile->email }}
                                                </div></td><
                                            </tr>
                                            <tr>
                                                <td>Pekerja</td>
                                                <td><div class="col-sm-9 text-secondary">
                                                {{ $profile->pekerja }}    
                                                </div></td>
                                            </tr>
                                            </table>
                                            <table border="1">
                                                <tr>
                                                    <td>Tanggal Lahir</td>
                                                    <td><div class="col-sm-9 text-secondary">
                                                    {{ $profile->ultah }}    
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>No. Telepon</td>
                                                    <td><div class="col-sm-9 text-secondary">
                                                    {{ $profile->telepon }}    
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td><div class="col-sm-9 text-secondary">
                                                    {{ $profile->alamat }}    
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Bidang</td>
                                                    <td><div class="col-sm-9 text-secondary">
                                                    {{ $profile->bidang }}    
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Keterangan</td>
                                                    <td><div class="col-sm-9 text-secondary">
                                                    {{ $profile->keterangan }}    
                                                    </div></td>
                                                </tr>
                                            </table>
                                            <table border="1">
                                                <tr>
                                                    <td>Riwayat Pendidikan</td>
                                                    <td><div class="col-sm-9 text-secondary">
                                                    {{ $profile->lulusansd }}
                                                    {{ $profile->sd }}    
                                                    </div></td>
                                                    <td><div class="col-sm-9 text-secondary">
                                                        {{ $profile->lulusansmp }}
                                                        {{ $profile->smp }}
                                                    </div>
                                                    <td><div class="col-sm-9 text-secondary">
                                                    {{ $profile->lulusansma }}
                                                    {{ $profile->sma }}    
                                                    </div></td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bio</td>
                                                    <td><div class="col-sm-9 text-secondary">
                                                    {{ $profile->bio }}    
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Prestasi</td>
                                                    <td><div class="col-sm-9 text-secondary">
                                                    {{ $profile->prestasi }}    
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Pengalaman</td>
                                                    <td><div class="col-sm-9 text-secondary">
                                                    {{ $profile->pengalaman }}    
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td>Kemampuan</td>
                                                    <td><div class="col-sm-9 text-secondary">
                                                    {{ $profile->kemampuan }}    
                                                    </div></td>
                                                </tr>
                                            </table>
                                            <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-info " href="{{ url('gawe/edit-profile') }}">Edit</a>
                        </div>
                      </div>
                     </div>
                                </p>
                                
                            </div>
                            <div class="listings_details_features">
                                <div class="listings_details_features_title">
                                    <h3>Skills</h3>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4">
                                        <ul class="listings_details_features_list list-unstyled">
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-purse"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>C++</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-wifi"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Java</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-parking-sign"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Python</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-4 col-lg-4">
                                        <ul class="listings_details_features_list list-unstyled">
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-credit-card"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>PHP</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-coupon"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Photosop</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="listings_details_icon">
                                                    <span class="icon-paw"></span>
                                                </div>
                                                <div class="listings_details_content">
                                                    <p>Corel</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="listings_details_tag">
                                <h3>Tags</h3>
                                <div class="listings_details__tags-list">
                                    <a href="#">Programmer</a>
                                    <a href="#">Designer</a>
                                </div>
                            </div>
                            
                  
                            <!--Review Two Box-->
                            <div class="review_two_box">
                                <h3 class="review_two_box__title">3 Komentar</h3>
                                <!--Review Two Box Single-->
                                <div class="review_two_box__single">
                                    <div class="review_two_box__image">
                                        <img src="{{ asset('images/resources/review-2-img-1.png') }}" alt="">
                                    </div>
                                    <div class="review_two_box__content">
                                        <h3>Kevin Martin</h3>
                                        <p>Itu tidak hanya bertahan selama lima abad, tetapi juga lompatan ke elektronik
                                            pengaturan huruf tidak berubah. Itu dipopulerkan dalam lembaran yang berisi lorem
                                            ipsum hanyalah teks gratis yang tersedia di pasar untuk digunakan sekarang.</p>
                                    </div>
                                </div>
                                <!--Review Two Box Single-->
                                <div class="review_two_box__single">
                                    <div class="review_two_box__image">
                                        <img src="{{ asset('images/resources/review-2-img-2.png') }}" alt="">
                                    </div>
                                    <div class="review_two_box__content">
                                        <h3>Sarah Albert</h3>
                                        <p>Itu tidak hanya bertahan selama lima abad, tetapi juga lompatan ke elektronik
                                            pengaturan huruf tidak berubah. Itu dipopulerkan dalam lembaran yang berisi lorem
                                            ipsum hanyalah teks gratis yang tersedia di pasar untuk digunakan sekarang.</p>
                                    </div>
                                </div>
                                <!--Review Two Box Single-->
                                <div class="review_two_box__single">
                                    <div class="review_two_box__image">
                                        <img src="{{ asset('images/resources/review-2-img-3.png') }}" alt="">
                                    </div>
                                    <div class="review_two_box__content">
                                        <h3>Mike Hardson</h3>
                                        <p>Itu tidak hanya bertahan selama lima abad, tetapi juga lompatan ke elektronik
                                            pengaturan huruf tidak berubah. Itu dipopulerkan dalam lembaran yang berisi lorem
                                            ipsum hanyalah teks gratis yang tersedia di pasar untuk digunakan sekarang.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review_two_box_form">
                                <h3 class="review_two_box_form__title">Tulis Komentar</h3>
                                <form action="http://layerdrops.com/ziston/inc/sendemail.php" class="review_two__form">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="review_two_input_box">
                                                <input type="text" placeholder="Your review title" name="Review Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="review_two_input_box">
                                                <textarea name="message" placeholder="Tulis Komentar"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="review_two_input_box">
                                                <input type="text" placeholder="Full name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="review_two_input_box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <button type="submit" class="thm-btn review_from__btn">Kirim</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-xl-4">
                        <div class="listings_details_sidebar">
                            <div class="listings_details_sidebar__single sidebar__map_contact_info">
                                <div class="contact_info">
                                   <center><h3>Personal</h3></center><br>
                                    <ul class="list-unstyled contact_info_list">
                                        <li><i class="fas fa-map-marker-alt"></i>80 Broklyn Golden Street USA</li>
                                        <li><a href="tel:+13456789"><i class="fa fa-phone"></i>92 666 888 0000</a></li>
                                        <li><a href="mailto:needhelp@ziston.com"><i class="fas fa-envelope"></i>needhelp@ziston.com</a></li>
                                        <li><i class="fa fa-calendar"></i>18-01-1998</li>
                                    </ul>
                                    <div class="contact_info__social">
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="listings_details_sidebar__single contact_business">
                                <h3 class="listings_details_sidebar__title">Contact Business</h3>
                                <div class="contact_business_details">
                                    <input type="text" placeholder="Your name" name="name">
                                    <input type="email" placeholder="Email address" name="email">
                                    <textarea placeholder="Write Message"></textarea>
                                    <a href="#" class="thm-btn contact_business_btn">Send message</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach


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
                                <a href="#"><img src="{{ asset('images/resources/footer-logo.png') }}" alt=""></a>
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
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>


    <!-- template scripts -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>


</body>


<!-- Mirrored from layerdrops.com/ziston/listings-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:42:58 GMT -->
</html>