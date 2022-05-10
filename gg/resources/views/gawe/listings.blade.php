<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/ziston/listings3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:42:45 GMT -->
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

</head>

<body>

    <!-- /.preloader -->

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
                                    <li><a href="{{ url('/inbox') }}"><i class="fas fa-mail"></i>Inbox</a></li>
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
                                <a href="{{ url('/') }}" class="main-nav__logo">
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
                                    <a href="{{ url('/') }}">Home</a>
                                   <!-- /.sub-menu -->
                                </li>
                               
                                <li class="current">
                                    <a href="{{ url('/listings') }}">Pekerja</a>
                                    <!-- /.sub-menu -->
                                </li>
                                <li>
                                    <a href="{{ url('/blog') }}">Blog</a>
                                </li>
                                <li>
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
                                          <img src="{{ asset('images/resources/latest_listings_au-img-2.png') }}" width="55" height="55" class="rounded-circle">
                                        </a>
                                        
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            
                                          <a class="dropdown-item" href="{{ url('/profile') }}">Profile</a>                                              
                                          <a class="dropdown-item" href="{{ url('/inbox') }}"> Pesan</a>
                                            
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


        <section class="listings_three_content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <form class="listings_one_content_left_form" action="/listings">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6">
                                    <div class="input_box">
                                        <input type="text" name="keyword" placeholder="What are you looking for?">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6">
                                    <div class="input_box">
                                        <select class="selectpicker" data-width="100%">
                                            <option selected="selected">Kategories</option>
                                            <option>Desain Grafis</option>
                                            <option>Content Writer</option>
                                            <option>Fotografer</option>
                                            <option>Editor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6">
                                    <div class="input_box">
                                        <select class="selectpicker" data-width="100%">
                                            <option selected="selected">Location</option>
                                            <option>Malang</option>
                                            <option>Surabaya</option>
                                            <option>Gresik</option>
                                            <option>Trenggalek</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="col-xl-4 col-lg-5 ">
                                        <div class="listings_btn">
                                            <button type="submit" class="thm-btn"><span class="icon-magnifying-glass"></span>Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <!--Filter Start-->
        <section class="filter">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="filter_inner_content">
                            <div class="left">
                                <div class="left_text">
                                    <h4>Ditemukan 6 pekerja dengan bidang ini</h4>
                                </div>
                            </div>




                            <ul class="navbar-nav right">
                                <li class="nav-item dropdown shorting">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="input selectpicker dropdown-toggle thm-btn px-4 py-2">Urutkan</div>
                                    </a>
                                    
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <form action="/listings">
                                        <input type="hidden" name="urutan" value="terbaru">
                                        <button type="submit" class="dropdown-item" >Terbaru</button>
                                        </form>
                                        <form action="/listings">
                                            <input type="hidden" name="urutan" value="terlama">
                                        <button type="submit" class="dropdown-item" > Terlama</button>
                                        </form>
                                    </div>
                              </li>   
                            </ul>





                           
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="listings_three-page">
            <div class="container">
                <div class="row">
                    @foreach ($errors as $profile)
                    <div class="col-3">
                        <!--Latest Listings Single-->
                        <div class="listings_three-page_single wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="10ms">
                            <div class="listings_three-page_image">
                                <img src="{{ asset('images/resources/listings-3-page-img-1.jpg') }}" alt="">
                                <div class="open">
                                    <p>{{ $profile->pekerja }}</p>
                                </div>
                                <div class="heart_icon">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="author_img">
                                    <img src="{{ asset('images/resources/latest_listings-3_au-img-1.png') }}" alt="">
                                </div>
                                @if( $profile->keterangan == 'Memiliki Pekerjaan' )
                                <div class="shopping_circle">
                                    <span class=""></span>
                                </div>
                                @elseif($profile->keterangan == 'Belum Memiliki Pekerjaan')
                                    <div class="shopping_circle">
                                    <div class="rounded-circle" style="width:38px;height:38px;background-color:lime">
                                </div>
                                </div>

                                @endif
                            </div>
                            <div class="listings_three-page_content">
                                <div class="title">
                                    <h3><a href="detail-pekerja/{{ $profile->email }}">{{ $profile->name }}<span
                                                class="fa fa-check"></span></a></h3>
                                </div>
                                <ul class="list-unstyled listings_three-page_contact_info">
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $profile->alamat }}</li>
                                    <li><i class="fas fa-user"></i>{{ $profile->bidang }}</li>
                                    <li><a href="tel:+13456789"><i class="fa fa-phone"></i>{{ $profile->telepon }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                                <a href="#"><img src="images/resources/Gawe.id.png" height="100" alt=""></a>
                            </div>
                            <div class="footer-widget_about_text">
                                <p>Sepenuh  Hati Membantu Anda Dalam Mencari Pekerja Dengan Menampilkan Berbagai Kriteria Yang Dibutuhkan Pada Sekarang Ini</p>
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
                                <h3>Eksplorasi</h3>
                            </div>
                            <ul class="footer-widget__explore-list list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="listings3.html">Pekerja</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="about.html">About</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-widget__column footer-widget__categories wow fadeInUp"
                            data-wow-delay="300ms">
                            <div class="footer-widget__title">
                                <h3>Kategori</h3>
                            </div>
                            <ul class="footer-widget__categories_list list-unstyled">
                                <li><a href="#">KOki</a></li>
                                <li><a href="#">Pelayan</a></li>
                                <li><a href="#">Akuntansi</a></li>
                                <li><a href="#">Informatika</a></li>
                                <li><a href="#">Montir</a></li>
                                <li><a href="#">Multimedia</a></li>
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
                                <li>17 Malang, Di Depan Rumah</li>
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
                    <p>© Copyright 2020 by <a href="#">Ultramen team</a></p>
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
                        src="{{ asset('images/shapes/close-1-1.png') }}" alt=""></a>
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



    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('assets/js/TweenMax.min.js') }}"></script>
    <script src="{{ url('assets/js/wow.js') }}"></script>
    <script src="{{ url('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ url('assets/js/swiper.min.js') }}"></script>
    <script src="{{ url('assets/js/typed-2.0.11.js') }}"></script>
    <script src="{{ url('assets/js/vegas.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('assets/js/countdown.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ url('assets/js/nouislider.min.js') }}"></script>
    <script src="{{ url('assets/js/isotope.js') }}"></script>
    <script src="{{ url('assets/js/appear.js') }}"></script>


    <!-- template scripts -->
    <script src="{{ url('assets/js/theme.js') }}"></script>


</body>


<!-- Mirrored from layerdrops.com/ziston/listings3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:42:45 GMT -->
</html>