<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/ziston/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:43:02 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Gawe.Id</title>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/black.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/black.png">
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

</head>

<body>

    <div class="preloader">
        <img src="images/loader.png" class="preloader__image" alt="">
    </div><!-- /.preloader -->

    <div class="page-wrapper">


        <div class="site-header__header-one-wrap clearfix">

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
                                    <li><a href="{{ url('gawe/mail') }}"><i class="fas fa-mail"></i>Inbox</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <header class="main-nav__header-one">
                <nav class="header-navigation one stricky">
                    <div class="container-box clearfix">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="main-nav__left main-nav__left_one float-left">
                            <div class="logo_one">
                                <a href="{{ url('/gawe') }}" class="main-nav__logo">
                                    <img src="{{ asset('images/resources/logo.png') }}" class="main-logo" alt="Awesome Image">
                                </a>
                            </div>
                            <a href="#" class="side-menu__toggler">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>

                        <div class="main-nav__main-navigation one float-left">
                            <ul class=" main-nav__navigation-box">
                                <li >
                                    <a href="{{ url('gawe') }}">Home</a>
                                </li>
                                <li >
                                    <a href="{{ url('gawe/listings') }}">Pekerja</a>
                                </li>
                                <li class="current">
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

                        <div class="main-nav__right main-nav__right_one float-right">

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

        <!--Page Header Start-->
        <section class="page-header" style="background-image: url({{ asset('images/backgrounds/page-header-contact.jpg') }});">
            <div class="container">
                <h2>Berbagai macam tips ada disini</h2>
            </div>
        </section>
        <section class="filter">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="filter_inner_content">
                            <div class="left">
                            </div>
                            <div class="right">
                                <div class="shorting">
                                    <form action="#" class="sidebar__search-form">
                                        <input type="search" placeholder="Search">
                                        <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                    </form>
                                    <select class="selectpicker" data-width="100%">
                                        <option selected="selected">Sort by</option>
                                        <option>Terpopuler</option>
                                        <option>Terbaru</option>
                                        <option>1 minggu yang lalu</option>
                                        <option>1 bulan yang lalu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Blog Two Start-->
        <section class="blog_one two blog-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <!--Blog One single-->
                        <div class="blog_one_single wow fadeInUp" data-wow-delay="100ms">
                            <div class="blog_image">
                                <img src="{{ asset('images/blog/blog1.jpg') }}" alt="Blog One Image">
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_one_title">
                                    <h3><a href="{{ asset('gawe/blog-detail') }}">Ini Dia Tips Sukses Pengembangan Karier di Industri Bisnis Retail!</a></h3>
                                </div>
                                <div class="blog_one_text">
                                    <p>Bisnis retail di Indonesia merupakan salah satu sektor industri dengan laju pertumbuhan yang paling menjanjikan se-Asia. Hal ini karena industri retail merupakan sektor utama yang mendukung keberlangsungan berbagai sektor industri lainnya. Mulai dari industri pangan, elektronik, otomotif, pakaian, kosmetik, dan kebutuhan..</p>
                                </div>
                                <div class="blog_one_date">
                                    <p>07<br>Aug</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <!--Blog One single-->
                        <div class="blog_one_single wow fadeInDown" data-wow-delay="200ms">
                            <div class="blog_image">
                                <img src="{{ asset('images/blog/blog2.jpg') }}" alt="Blog One Image">
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_one_title">
                                    <h3><a href="{{ asset('gawe/blog-detail') }}">Pindah Kerja Tanpa Naik Jabatan Tak Selalu Buruk, Ini Alasannya!</a>
                                    </h3>
                                </div>
                                <div class="blog_one_text">
                                    <p>Pinda kerja secara lateral atau horizontal adalah kondisi di mana seseorang pindah kerja ke posisi yang kurang lebih setara dengan pekerjaan sebelumnya. Contohnya adalah ketika seorang pekerja berpindah ke bidang pekerjaan dan tingkat yang sama, namun..</p>
                                </div>
                                <div class="blog_one_date">
                                    <p>07<br>Aug</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <!--Blog One single-->
                        <div class="blog_one_single wow fadeInUp" data-wow-delay="300ms">
                            <div class="blog_image">
                                <img src="{{ asset('images/blog/blog3.jpg') }}" alt="Blog One Image">
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_one_title">
                                    <h3><a href="{{ asset('gawe/blog-detail') }}">Jalur Karier yang Bisa Dipertimbangkan Ketika Menjadi Satpam</a>
                                    </h3>
                                </div>
                                <div class="blog_one_text">
                                    <p>Apa kamu sedang mencari pekerjaan sebagai satpam? Jika pengalamanmu terpusat di bidang keamanan, kamu mungkin memang akan mempertimbangkan pekerjaan tersebut terlebih dahulu. Tidak ada salahnya jika kamu ingin tetap menjadi satpam, tetapi sangat disarankan untuk mengembangkan kariermu ke posisi yang lebih tinggi</p>
                                </div>
                                <div class="blog_one_date">
                                    <p>07<br>Aug</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <!--Blog One single-->
                        <div class="blog_one_single wow fadeInDown" data-wow-delay="400ms">
                            <div class="blog_image">
                                <img src="{{ asset('images/blog/blog4.jpg') }}" alt="Blog One Image">
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_one_title">
                                    <h3><a href="{{ asset('gawe/blog-detail') }}">Tips Menghindari Ageisme Saat Melamar Kerja</a></h3>
                                </div>
                                <div class="blog_one_text">
                                    <p>Perlakuan diskriminasi ketika melamar pekerjaan bentuknya bermacam-macam, salah satunya adalah diskriminasi usia atau ageisme (ageism). Ageisme sendiri biasa ditemukan di lingkungan kerja yang dekat dengan teknologi dan/atau di lingkungan yang memang menggunakan usia sebagai salah satu syarat.</p>
                                </div>
                                <div class="blog_one_date">
                                    <p>07<br>Aug</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <!--Blog One single-->
                        <div class="blog_one_single wow fadeInUp" data-wow-delay="500ms">
                            <div class="blog_image">
                                <img src="{{ asset('images/blog/blog5.jpg') }}" alt="Blog One Image">
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_one_title">
                                    <h3><a href="{{ asset('gawe/blog-detail') }}">Inilah Cara Perkenalan Diri Terbaik Saat Interview Sales!</a></h3>
                                </div>
                                <div class="blog_one_text">
                                    <p>>Memiliki karir dalam bidang retail mengharuskanmu menghadapi berbagai tugas yang berhubungan dengan pelanggan. Mulai dari memecahkan masalah, mempromosikan produk dan layanan, hingga menentukan teraihnya target penjualan. Dalam industri ini, tugas seorang sales sangat berperan penting dalam.</p>
                                </div>
                                <div class="blog_one_date">
                                    <p>07<br>Aug</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <!--Blog One single-->
                        <div class="blog_one_single wow fadeInDown" data-wow-delay="600ms">
                            <div class="blog_image">
                                <img src="{{ asset('images/blog/blog6.jpg') }}" alt="Blog One Image">
                            </div>
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_one_title">
                                    <h3><a href="{{ asset('gawe/blog-detail') }}">Lolos Interview Kerja Dengan 10 Tips Ini!</a></h3>
                                </div>
                                <div class="blog_one_text">
                                    <p>Dalam proses mendapatkan sebuah pekerjaan, ada beberapa tahapan yang harus dijalani oleh kandidat. Mulai dari mencari lowongan pekerjaan, memasukkan berkas lamaran, menghadapi perekrut dalam interview kerja, hingga finalisasi perekrutan, dan tanda..</p>
                                </div>
                                <div class="blog_one_date">
                                    <p>07<br>Aug</p>
                                </div>
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


<!-- Mirrored from layerdrops.com/ziston/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:43:18 GMT -->
</html>