<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/ziston/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:43:18 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Detail || Ziston || Ziston Form HTML Template</title>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons/site.html">

    <!-- Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&amp;display=swap" rel="stylesheet">

    <!-- Css-->
    <link rel="stylesheet" href="cssweb/animate.min.css">
    <link rel="stylesheet" href="cssweb/bootstrap.min.css">
    <link rel="stylesheet" href="cssweb/owl.carousel.min.css">
    <link rel="stylesheet" href="cssweb/owl.theme.default.min.css">
    <link rel="stylesheet" href="cssweb/magnific-popup.css">
    <link rel="stylesheet" href="cssweb/fontawesome-all.min.css">
    <link rel="stylesheet" href="cssweb/swiper.min.css">
    <link rel="stylesheet" href="cssweb/bootstrap-select.min.css">

    <link rel="stylesheet" href="cssweb/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="cssweb/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="cssweb/vegas.min.css">
    <link rel="stylesheet" href="cssweb/nouislider.min.css">
    <link rel="stylesheet" href="cssweb/nouislider.pips.css">
    <link rel="stylesheet" href="cssweb/ziston-icon.css">
    <link rel="stylesheet" href="cssweb/ziston-new-icons.css">
    <!-- Template styles -->
    <link rel="stylesheet" href="cssweb/style.css">
    <link rel="stylesheet" href="cssweb/responsive.css">

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
                                    <li><a href="zapily/ltr/mail.html"><i class="fas fa-mail"></i>inbox</a></li>
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
                                <a href="index.html" class="main-nav__logo">
                                    <img src="images/resources/logo.png" class="main-logo" alt="Awesome Image">
                                </a>
                            </div>
                            <a href="#" class="side-menu__toggler">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>

                        <div class="main-nav__main-navigation one float-left">
                            <ul class=" main-nav__navigation-box">
                                <li >
                                    <a href="{{ url('gawe/index3') }}">Home</a>
                                </li>
                                <li >
                                    <a href="{{ url('gawe/listings3') }}">Pekerja</a>
                                </li>
                                <li class="Current">
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
                                      <img src="images/resources/latest_listings_au-img-2.png" width="55" height="55" class="rounded-circle">
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
        <section class="page-header" style="background-image: url(images/backgrounds/page-header-contact.jpg);">
            <div class="container">
                <h2>Blog Detail</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Blog Detail</span></li>
                </ul>
            </div>
        </section>

        <!--Blog Deail Start-->
        <section class="blog_detail">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="blog_detail_left">
                            <div class="blog-detail_image_box">
                                <img src="images/blog/blog1.jpg" alt="">
                            </div>
                            <div class="blog-detail__content">
                                <ul class="list-unstyled blog-detail__meta">
                                    <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                    </li>
                                </ul>
                                <div class="blog_detail_title">
                                    <h3><a href="#">Ini Dia Tips Sukses Pengembangan Karier di Industri Bisnis Retail!</a></h3>
                                </div>
                                <div class="blog_detail_text">
                                    <p class="blog_detail_text_1">Bisnis retail di Indonesia merupakan salah satu sektor industri dengan laju pertumbuhan yang paling menjanjikan se-Asia. Hal ini karena industri retail merupakan sektor utama yang mendukung keberlangsungan berbagai sektor industri lainnya. Mulai dari industri pangan, elektronik, otomotif, pakaian, kosmetik, dan kebutuhan.. </p>
                                    <p class="blog_detail_text_2">1. Pahami kualifikasi dari posisi yang hendak dilamar Profesional Human Resources (HR) yang juga menjabat sebagai Senior Manager, Employer Branding di Lazada Indonesia Samuel Ray mengungkapkan, ke mana pun tujuan pekerjaan Anda, hal paling utama yang harus diketahui adalah keahlian yang dimiliki.</p>
                                    <p class="blog_detail_text_3">2. Susun resume atau curriculum vitae (CV) sebaik mungkin Samuel mengatakan, untuk menarik minta HRD perusahaan, pelamar harus memiliki kesan pertama dari HRD, melalui CV. Menurut dia, HRD tentunya tidak punya waktu untuk membaca CV yang panjang. Susun CV Anda dengan singkat namun jelas sehingga bisa menjelaskan seluruh pengalamanmu. “CV menjadi kesan pertama dari setiap pelamar. Tim HR di perusahaan ternama biasanya menerima ratusan bahkan ribuan CV setiap bulannya. Sebaiknya gunakan layout yang sederhana sehingga CV-Anda mudah di-skim atau dibaca cepat oleh tim HR</p>
                                </div>
                                <div class="blog_detail_date">
                                    <p>07<br>Aug</p>
                                </div>
                            </div>
                            <div class="blog_detail__bottom">
                                <p class="blog_detail__tags">
                                    <span>Tags:</span>
                                    <a href="#">Daftar,</a>
                                    <a href="#">Bisnis</a>
                                </p>
                                <div class="blog_detail__social-list">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                            <div class="author-one">
                                <div class="author-one__image">
                                    <img src="images/blog/author-1-1.jpg" alt="">
                                </div>
                                <div class="author-one__content">
                                    <h3>Christine Eve</h3>
                                    <p>terima kasih tips yang sangat baik,dengan saya menerapkan tips ini saya bisa masuk kerja dengan mudah </p>
                                </div>
                            </div>
                            <div class="comment-one">
                                <h3 class="comment-one__title">2 Comments</h3>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="images/blog/comment-1-1.png" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Kevin Martin</h3>
                                        <p>terima kasih tips yang sangat baik,dengan saya menerapkan tips ini saya bisa masuk kerja dengan mudah</p>
                                        <a href="#" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="images/blog/comment-1-2.png" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Sarah Albert</h3>
                                        <p>terima kasih tips yang sangat baik,dengan saya menerapkan tips ini saya bisa masuk kerja dengan mudah.</p>
                                        <a href="#" class="thm-btn comment-one__btn">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave a Comment</h3>
                                <form action="http://layerdrops.com/ziston/inc/sendemail.php" class="comment-one__form">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment_input_box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment_input_box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment_input_box">
                                                <input type="text" placeholder="Phone number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment_input_box">
                                                <input type="email" placeholder="Subject" name="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment_input_box">
                                                <textarea name="message" placeholder="Write message"></textarea>
                                            </div>
                                            <button type="submit" class="thm-btn comment-form__btn">Submit
                                                Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <h3 class="sidebar__title clr-white">Search</h3>
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest Posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="images/blog/lp-1-1.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="#" class="sidebar__post-content_meta"><i
                                                        class="far fa-user-circle"></i>by Admin</a>
                                                <a href="news_detail.html">8 Tempat Menakjubkan Terbaik untuk Menginap di Kanada
                                                </a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="images/blog/lp-1-2.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="#" class="sidebar__post-content_meta"><i
                                                        class="far fa-user-circle"></i>by Admin</a>
                                                <a href="news_detail.html">8 Tempat Menakjubkan Terbaik untuk Menginap di Kanada</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="images/blog/lp-1-3.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="#" class="sidebar__post-content_meta"><i
                                                        class="far fa-user-circle"></i>by Admin</a>
                                                <a href="news_detail.html">8 Tempat Menakjubkan Terbaik untuk Menginap di Kanada</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__category-list list-unstyled">
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Nightlife</a></li>
                                    <li><a href="#">Real Estate</a></li>
                                    <li><a href="#">Traveling</a></li>
                                    <li><a href="#">Hotels</a></li>
                                </ul>
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



    <script src="jsweb/jquery.min.js"></script>
    <script src="jsweb/bootstrap.bundle.min.js"></script>
    <script src="jsweb/owl.carousel.min.js"></script>
    <script src="jsweb/waypoints.min.js"></script>
    <script src="jsweb/jquery.counterup.min.js"></script>
    <script src="jsweb/TweenMax.min.js"></script>
    <script src="jsweb/wow.js"></script>
    <script src="jsweb/jquery.magnific-popup.min.js"></script>
    <script src="jsweb/jquery.ajaxchimp.min.js"></script>
    <script src="jsweb/swiper.min.js"></script>
    <script src="jsweb/typed-2.0.11.js"></script>
    <script src="jsweb/vegas.min.js"></script>
    <script src="jsweb/jquery.validate.min.js"></script>
    <script src="jsweb/bootstrap-select.min.js"></script>
    <script src="jsweb/countdown.min.js"></script>
    <script src="jsweb/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="jsweb/bootstrap-datepicker.min.js"></script>
    <script src="jsweb/nouislider.min.js"></script>
    <script src="jsweb/isotope.js"></script>
    <script src="jsweb/appear.js"></script>


    <!-- template scripts -->
    <script src="jsweb/theme.js"></script>


</body>


<!-- Mirrored from layerdrops.com/ziston/blog-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:43:30 GMT -->
</html>