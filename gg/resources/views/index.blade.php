<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/ziston/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:40:45 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gawe.Id</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/black.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/black.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/black.png') }}">
    <link rel="manifest" href="{{ asset('images/favicons/black.png') }}">

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">
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
    <div class="page-wrapper">


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
                                <li class="current">
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
                                <li>
                                    <a href="{{ url('/kontak') }}">Contact</a>
                                </li>
                                <li>
                                    <a href="{{ url('/tentang-kami') }}">About</a>
                                </li>
                                @if (Auth::user())
                                <li class="nav-item dropdown">
                                    <i class="fas fa-solid fa-bell">
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <div class="notification-box-head-wrap">
                                                <div class="pull-right text-right">
                                                    <form action="{{ Route('/') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="hapus" value="hapus">  
                                                        <button type="submit" class="btn btn-danger btn-inline rounded">Hapus</button>
                                                    </form>
                                                </div>
                                                <div class="clearfix"></div>
                                                <hr class="light-grey-hr ma-0"/>
                                            </div>
                                            <hr class="dropdown-divider">
                                            @if(isset($notifs))
                                            @if (Auth::user()->user == 'Pekerja')
                                            
                                            @foreach($notifs as $notif) 
                                            <div class="streamline message-nicescroll-bar">
                                                <div class="sl-item">
                                                    <a href="javascript:void(0)">
                                                        <div class="icon bg-green">
                                                            <i class="zmdi zmdi-flag"></i>
                                                        </div>
                                                        <div class="sl-content">
                                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                            Terdapat Pesan Baru</span>
                                                            <span class="inline-block font-11  pull-right notifications-time">{{ $notif->created_at }}</span>
                                                            <div class="clearfix"></div>
                                                            <p class="truncate">{{ $notif->nama }} ingin merekrut anda</p>
                                                        </div>
                                                    </a>	
                                                </div>
                                                <hr class="light-grey-hr ma-0"/>
                                            </div>
                                            @endforeach
                                            
                                            @elseif (Auth::user()->user == 'Perusahaan')
                                            @foreach ($notifs as $notif)
                                            <div class="streamline message-nicescroll-bar">
                                                <div class="sl-item">
                                                    <a href="javascript:void(0)">
                                                        <div class="icon bg-green">
                                                            <i class="zmdi zmdi-flag"></i>
                                                        </div>
                                                        <div class="sl-content">
                                                            <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                            Ada Pesan baru</span>
                                                            <span class="inline-block font-11  pull-right notifications-time">{{ $notif->created_at }}</span>
                                                            <div class="clearfix"></div>
                                                            <p class="truncate">{{ $notif->untuk }} telah memberikan jawaban</p>
                                                        </div>
                                                    </a>	
                                                </div>
                                                <hr class="light-grey-hr ma-0"/>
                                            </div>
                                            @endforeach
                                            @endif
                                            @endif
                                 
                                            <div>
                                                <span class="">Baca Semua</span>
                                            </div>
                                        </div>
                                    </a>
                                    </i>
                                </li>
                                @else

                                @endif
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
                                            
                                          <p class="dropdown-item">{{Auth::user()->name}}<span class="text-success ml-3">{{ auth::user()->user }}</span></p>
                                          <hr class="dropdown-divider">
                                          <a class="dropdown-item" href="{{ url('/notif') }}">Notifikasi</a>
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
                                        <a href="{{ url('/login') }}"><span class="icon-add d-inline"></span>Login</a>
                                    </div>
                                @endif
                                   
                                
                        </div>
                    </div>
                </nav>
            </header>
        </div>

        <!--Banner Three Start-->
        <section class="banner_three">
            <img src="{{ asset('images/main-slider/slide_v3_bg-1.png') }}" alt="" class="banner-three-vector-img">
            <img src="{{ asset('images/shapes/slider-3-cloud.png') }}" alt="" class="banner-three-cloud-img animate-left-right">
            <img src="{{ asset('images/shapes/slider-3-line.png') }}" alt="" class="banner-three-line-img">
            <img src="{{ asset('images/shapes/slider-3-shape-1.png') }}" alt="" class="banner_three_shape_1">
            <img src="{{ asset('images/shapes/slider-3-shape-2.png') }}" alt="" class="banner_three_shape_2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner_three_top-title">
                            <h1>Layanan Terbaik <span>Gawe.Id</span></h1>
                            <p>Cari Pekerja Sesuai Kebutuhan Anda </p>
                        </div>
                        <form class="banner_three_form" action="{{ url('/') }}" method="POST">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class="banner_three_input_box">
                                        <input type="text" name="keyword" placeholder="Cari yang anda ingin cari?">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                    <div class="banner_three_input_box banner_three_select_one">
                                        <select class="selectpicker" data-width="100%">
                                            <option selected="selected">Lokasi</option>
                                            <option>JAKARTA</option>
                                            <option>BANDUNG</option>
                                            <option>SEMARANG</option>
                                            <option>JOGJA</option>
                                            <option>SURABAYA</option>
                                            <option>MEDAN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="banner_three_input_box banner_three_select_two">
                                        <select class="selectpicker" data-width="100%">
                                            <option selected="selected">Kategori</option>
                                            <option>KOKI</option>
                                            <option>PELAYAN</option>
                                            <option>AKUTANSI</option>
                                            <option>MUMLTIMEDIA</option>
                                            <option>INFORMATIKA</option>
                                            <option>MONTIR</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                     
                        <div class="banner_three_form_btn">
                            <button class="thm-btn" type="submit"><span
                                    class="icon-magnifying-glass"></span>Search</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="categories_one">
            <div class="categories_one_shape wow slideInLeft animated" data-wow-delay="600ms"
                style="background-image: url(images/shapes/map-1.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="categories_one_carousel owl-theme owl-carousel">
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-cutlery"></span>
                                </div>
                                <h4>KOKI</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-cocktail"></span>
                                </div>
                                <h4>BARISTA</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-health"></span>
                                </div>
                                <h4>PERAWAT</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-skincare"></span>
                                </div>
                                <h4>TATA RIAS</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-shop"></span>
                                </div>
                                <h4>KASIR</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-car"></span>
                                </div>
                                <h4>SOPIR</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-cutlery"></span>
                                </div>
                                <h4>PRAMUSAJI</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-cocktail"></span>
                                </div>
                                <h4>BARISTA</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-health"></span>
                                </div>
                                <h4>APOTEKER</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-skincare"></span>
                                </div>
                                <h4>MODEL</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-shop"></span>
                                </div>
                                <h4>PELAYAN</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-car"></span>
                                </div>
                                <h4>MONTIR</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Four Boxes Two Start-->
        <section class="categories_one">
            <div class="categories_one_shape wow slideInLeft animated" data-wow-delay="600ms"
                style="background-image: url(images/shapes/map-1.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="categories_one_carousel owl-theme owl-carousel">
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-cutlery"></span>
                                </div>
                                <h4>KOKI</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-cocktail"></span>
                                </div>
                                <h4>BARISTA</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-health"></span>
                                </div>
                                <h4>PERAWAT</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-skincare"></span>
                                </div>
                                <h4>TATA RIAS</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-shop"></span>
                                </div>
                                <h4>KASIR</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-car"></span>
                                </div>
                                <h4>SOPIR</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-cutlery"></span>
                                </div>
                                <h4>PRAMUSAJI</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-cocktail"></span>
                                </div>
                                <h4>BARISTA</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-health"></span>
                                </div>
                                <h4>APOTEKER</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-skincare"></span>
                                </div>
                                <h4>MODEL</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-shop"></span>
                                </div>
                                <h4>PELAYAN</h4>
                            </div>
                            <!--Categories One Single-->
                            <div class="categories_one_single">
                                <div class="categories_one_icon">
                                    <span class="icon-car"></span>
                                </div>
                                <h4>MONTIR</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="four_boxes-two">
            <div class="four_boxes_tow_map_bg"
                style="background-image: url(images/backgrounds/four_boxes_two_bg.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Four Boxes Two Single-->
                        <div class="four_boxes-two_single wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                            <div class="four_boxes-two_image">
                                <img src="images/resources/4-boxes-2-img-1.jpg" alt="">
                                <div class="four_boxes-two_content">
                                    <h3>Perusahaan</h3>
                                </div>
                                <div class="four_boxes_two_hover_content">
                                    <p>Ada Banyak Perusahaan Yang Telah Berhasil Mendapatkan Pekerja Yang Sesuai Dengan Kebutuhan Mereka</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Four Boxes Two Single-->
                        <div class="four_boxes-two_single wow fadeInUp" data-wow-delay="300ms"
                            data-wow-duration="1200ms">
                            <div class="four_boxes-two_image">
                                <img src="images/resources/4-boxes-2-img-2.jpg" alt="">
                                <div class="four_boxes-two_content">
                                    <h3>User</h3>
                                </div>
                                <div class="four_boxes_two_hover_content">
                                    <p>Untuk User Dari Situs Kami Ada Dari Seluruh Penjuru Indonesia</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Four Boxes Two Single-->
                        <div class="four_boxes-two_single wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1200ms">
                            <div class="four_boxes-two_image">
                                <img src="images/resources/4-boxes-2-img-3.jpg" alt="">
                                <div class="four_boxes-two_content">
                                    <h3>Kerjasama</h3>
                                </div>
                                <div class="four_boxes_two_hover_content">
                                    <p>Situs Kami Sudah Bekerja Sama Dengan Perusahaan-Perusahaan Besar</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <!--Four Boxes Two Single-->
                        <div class="four_boxes-two_single wow fadeInUp" data-wow-delay="900ms"
                            data-wow-duration="1200ms">
                            <div class="four_boxes-two_image">
                                <img src="images/resources/4-boxes-2-img-4.jpg" alt="">
                                <div class="four_boxes-two_content">
                                    <h3>Pekerja</h3>
                                </div>
                                <div class="four_boxes_two_hover_content">
                                    <p>Berbagai Macam Pekerja Ada Disini </p>
                                    <div class="four_boxes_two_hover_content_btn">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Brand Three Start-->
        

        <section class="food_lovers_two" style="background-image: url(images/backgrounds/food-lovers-2_bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="food_lovers_two_inner">
                            <p>Data</p>
                            <h2>Pilih Daftar Pekerja <br>Yang Sesuai Dengan Kebutuhan Anda</h2>
                            <div class="food_lovers_two_btn">
                                <a href="#" class="thm-btn"><span class="icon-magnifying-glass"></span>Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Latest Listings Three Start-->
        <section class="latest_listings_three">
            <div class="container">
                <div class="block-title text-center">
                    <h4>Bidang</h4>
                    <h2>Pekerja Yang Sering Dicari</h2>
                    <p>Berikut Adalah Daftar Bidang Pekerja Yang Sering Dicari</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <!--Latest Listings Single-->
                        <div class="latest_listings_three_single wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1200ms">
                            <div class="latest_listings_three_image">
                                <img src="images/resources/latest-listings-3-img-1.jpg" alt="">
                                <div class="open">
                                    <p>Free Lance</p>
                                </div>
                                <div class="heart_icon">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="author_img">
                                    <img src="images/resources/latest_listings-3_au-img-1.png" alt="">
                                </div>
                                <div class="shopping_circle">
                                    <span class="icon"></span>
                                </div>
                            </div>
                            <div class="latest_listings_three_content">
                                <div class="title">
                                    <h3><a href="listings-details1.html">Silver Rose Store<span
                                                class="fa fa-check"></span></a></h3>
                                </div>
                                <ul class="list-unstyled latest_listings_three_contact_info">
                                    <li><i class="fas fa-map-marker-alt"></i>80 Broklyn Street USA</li>
                                    <li><i class="fa fa-user"></i>IT</li>
                                    <li><a href="tel:+13456789"><i class="fa fa-phone"></i>92 666 888 0000</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <!--Latest Listings Single-->
                        <div class="latest_listings_three_single wow fadeInUp" data-wow-delay="200ms"
                            data-wow-duration="1200ms">
                            <div class="latest_listings_three_image">
                                <img src="images/resources/latest-listings-3-img-2.jpg" alt="">
                                <div class="open">
                                    <p>Part Time</p>
                                </div>
                                <div class="heart_icon">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="author_img">
                                    <img src="images/resources/latest_listings-3_au-img-2.png" alt="">
                                </div>
                                <div class="shopping_circle">
                                    <span class="e"></span>
                                </div>
                            </div>
                            <div class="latest_listings_three_content">
                                <div class="title">
                                    <h3><a href="listings-details1.html">Riki <span
                                                class="fa fa-check"></span></a></h3>
                                </div>
                                <ul class="list-unstyled latest_listings_three_contact_info">
                                    <li><i class="fas fa-map-marker-alt"></i>80 Broklyn Street USA</li>
                                    <li><i class="fa fa-user"></i>IT</li>
                                    <li><a href="tel:+13456789"><i class="fa fa-phone"></i>92 666 888 0000</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <!--Latest Listings Single-->
                        <div class="latest_listings_three_single wow fadeInUp" data-wow-delay="400ms"
                            data-wow-duration="1200ms">
                            <div class="latest_listings_three_image">
                                <img src="images/resources/latest-listings-3-img-3.jpg" alt="">
                                <div class="open">
                                    <p>Full Time</p>
                                </div>
                                <div class="heart_icon">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="author_img">
                                    <img src="images/resources/latest_listings-3_au-img-3.png" alt="">
                                </div>
                                <div class="shopping_circle">
                                    <span class=""></span>
                                </div>
                            </div>
                            <div class="latest_listings_three_content">
                                <div class="title">
                                    <h3><a href="listings-details1.html">Udin<span
                                                class="fa fa-check"></span></a></h3>
                                </div>
                                <ul class="list-unstyled latest_listings_three_contact_info">
                                    <li><i class="fas fa-map-marker-alt"></i>80 Broklyn Street USA</li>
                                    <li><i class="fa fa-user"></i>IT</li>
                                    <li><a href="tel:+13456789"><i class="fa fa-phone"></i>92 666 888 0000</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <!--Latest Listings Single-->
                        <div class="latest_listings_three_single wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1200ms">
                            <div class="latest_listings_three_image">
                                <img src="images/resources/latest-listings-3-img-4.jpg" alt="">
                                <div class="open">
                                    <p>Free Lance</p>
                                </div>
                                <div class="heart_icon">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="author_img">
                                    <img src="images/resources/latest_listings-3_au-img-4.png" alt="">
                                </div>
                                <div class="shopping_circle">
                                    <span class="icon"></span>
                                </div>
                            </div>
                            <div class="latest_listings_three_content">
                                <div class="title">
                                    <h3><a href="listings-details1.html">Asep<span
                                                class="fa fa-check"></span></a></h3>
                                </div>
                                <ul class="list-unstyled latest_listings_three_contact_info">
                                    <li><i class="fas fa-map-marker-alt"></i>80 Broklyn Street USA</li>
                                    <li><i class="fa fa-user"></i>IT</li>
                                    <li><a href="tel:+13456789"><i class="fa fa-phone"></i>92 666 888 0000</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <!--Latest Listings Single-->
                        <div class="latest_listings_three_single wow fadeInUp" data-wow-delay="800ms"
                            data-wow-duration="1200ms">
                            <div class="latest_listings_three_image">
                                <img src="images/resources/latest-listings-3-img-5.jpg" alt="">
                                <div class="open">
                                    <p>Part Time</p>
                                </div>
                                <div class="heart_icon">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="author_img">
                                    <img src="images/resources/latest_listings-3_au-img-5.png" alt="">
                                </div>
                                <div class="shopping_circle">
                                    <span class=""></span>
                                </div>
                            </div>
                            <div class="latest_listings_three_content">
                                <div class="title">
                                    <h3><a href="listings-details1.html">Junaid<span
                                                class="fa fa-check"></span></a></h3>
                                </div>
                                <ul class="list-unstyled latest_listings_three_contact_info">
                                    <li><i class="fas fa-map-marker-alt"></i>80 Broklyn Street USA</li>
                                    <li><i class="fa fa-user"></i>IT</li>
                                    <li><a href="tel:+13456789"><i class="fa fa-phone"></i>92 666 888 0000</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <!--Latest Listings Single-->
                        <div class="latest_listings_three_single wow fadeInUp" data-wow-delay="1000ms"
                            data-wow-duration="1200ms">
                            <div class="latest_listings_three_image">
                                <img src="images/resources/latest-listings-3-img-6.jpg" alt="">
                                <div class="open">
                                    <p>Full Time </p>
                                </div>
                                <div class="heart_icon">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="author_img">
                                    <img src="images/resources/latest_listings-3_au-img-6.png" alt="">
                                </div>
                                <div class="shopping_circle">
                                    <span class=""></span>
                                </div>
                            </div>
                            <div class="latest_listings_three_content">
                                <div class="title">
                                    <h3><a href="listings-details1.html">Jumain<span
                                                class="fa fa-check"></span></a></h3>
                                </div>
                                <ul class="list-unstyled latest_listings_three_contact_info">
                                    <li><i class="fas fa-map-marker-alt"></i>80 Broklyn Street USA</li>
                                    <li><i class="fa fa-user"></i>IT</li>
                                    <li><a href="tel:+13456789"><i class="fa fa-phone"></i>92 666 888 0000</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <!--Latest Listings Single-->
                        <div class="latest_listings_three_single wow fadeInUp" data-wow-delay="1200ms"
                            data-wow-duration="1200ms">
                            <div class="latest_listings_three_image">
                                <img src="images/resources/latest-listings-3-img-7.jpg" alt="">
                                <div class="open">
                                    <p>Part Time</p>
                                </div>
                                <div class="heart_icon">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="author_img">
                                    <img src="images/resources/latest_listings-3_au-img-7.png" alt="">
                                </div>
                                <div class="shopping_circle">
                                    <span class=""></span>
                                </div>
                            </div>
                            <div class="latest_listings_three_content">
                                <div class="title">
                                    <h3><a href="listings-details1.html">Shelly<span
                                                class="fa fa-check"></span></a></h3>
                                </div>
                                <ul class="list-unstyled latest_listings_three_contact_info">
                                    <li><i class="fas fa-map-marker-alt"></i>80 Broklyn Street USA</li>
                                    <li><i class="fa fa-user"></i>IT</li>
                                    <li><a href="tel:+13456789"><i class="fa fa-phone"></i>92 666 888 0000</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <!--Latest Listings Single-->
                        <div class="latest_listings_three_single wow fadeInUp" data-wow-delay="1400ms"
                            data-wow-duration="1200ms">
                            <div class="latest_listings_three_image">
                                <img src="images/resources/latest-listings-3-img-8.jpg" alt="">
                                <div class="open">
                                    <p>Free Lance</p>
                                </div>
                                <div class="heart_icon">
                                    <i class="icon-heart"></i>
                                </div>
                                <div class="author_img">
                                    <img src="images/resources/latest_listings-3_au-img-8.png" alt="">
                                </div>
                                <div class="shopping_circle">
                                    <span class=""></span>
                                </div>
                            </div>
                            <div class="latest_listings_three_content">
                                <div class="title">
                                    <h3><a href="listings-details1.html">Ria<span
                                                class="fa fa-check"></span></a></h3>
                                </div>
                                <ul class="list-unstyled latest_listings_three_contact_info">
                                    <li><i class="fas fa-map-marker-alt"></i>80 Broklyn Street USA</li>
                                    <li><i class="fa fa-user"></i>IT</li>
                                    <li><a href="tel:+13456789"><i class="fa fa-phone"></i>92 666 888 0000</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Why Choose Start-->
        <section class="why_choose">
            <div class="why_choose_shape-1" style="background-image: url(images/shapes/why-choose-shape-1.png)">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why_choose_left">
                            <div class="why_choose_left_one-img">
                                <img src="images/resources/why-choose-img-1.jpg" alt="">
                                <div class="why_choose_left-two-img">
                                    <img src="images/resources/why-choose-img-2.jpg" alt="">
                                </div>
                                <div class="why_choose_search">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why_choose_right_content">
                            <div class="block-title text-left">
                                <h4>Keuntungan Memilih Kami</h4>
                                <h2>Mengapa Anda Harus Memilih Situs Kami</h2>
                            </div>
                            <div class="why_choose_right_text">
                                <p>Karena Gawe.Id Merupakan Situs Pencari Pekerja Untuk Perusahaan Yang Sedang Membutuhkan Pekerjaan, Di Gawe.Id Ada Banyak Bidang Pekerja   .</p>
                            </div>
                            <div class="why_choose_right_bottom_text">
                                <div class="why_choose_right_bottom_text_single">
                                    <div class="title">
                                        <h4><i class="fa fa-check"></i>Kami Profesional dan Bersertifikat</h4>
                                        <p>Gawe.Id Sudah Banyak Membantu Perusahaan-Perusahaan Untuk Mencari Pekerja Dan Kami Juga Terpercaya</p>
                                    </div>
                                </div>
                                <div class="why_choose_right_bottom_text_single">
                                    <div class="title">
                                        <h4><i class="fa fa-check"></i>Dapatkan Berbagai Kemudahan Saat Menggunakan Situs kami</h4>
                                        <p>Disini Anda Di berikan Kemudahan Untuk Mencari Pekerja Di Seluruh Indonesia Hanya Dengan lewat Situs Kami   </p>
                                    </div>
                                </div>
                                <div class="why_choose_btn">
                                    <a href="about.html" class="thm-btn">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Two Section Start-->
        

        <!--Weekly Start-->
      

        <!--Testimonials One Start-->
        <section class="testimonials_one three">
            <div class="testimonial_one_map"
                style="background-image: url(images/shapes/testimonial-one-map.png)"></div>
            <div class="container-box">
                <div class="block-title text-center">
                    <h4>Ulasan</h4>
                    <h2>Apa Yang Mereka Katakan</h2>
                    <p>Berikut Beberapa Pendapat Dari Pengguna Situs Gawe.Id</p>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonials_one_carousel owl-theme owl-carousel">
                            <!--Testimonials One Single-->
                            <div class="testimonials_one_single">
                                <div class="shadow-box"></div>
                                <div class="testimonials_one_image">
                                    <img src="images/testimonials/testimonials-1-img-1.png" alt="">
                                </div>
                                <div class="testimonials_one_text">
                                    <div class="testimonials_one_rating_box">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="testimonials_one_text_box">
                                        <p>I was very impresed by the laundry services lorem ipsum is simply free text
                                            available used by copy typing refreshing. Neque porro noting est qui dolorem
                                            ipsum quia.</p>
                                    </div>
                                    <div class="testimonials_quote_icon">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <div class="customer_info">
                                        <h3>Kevin Martin,<span>Customer</span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonials One Single-->
                            <div class="testimonials_one_single">
                                <div class="shadow-box"></div>
                                <div class="testimonials_one_image">
                                    <img src="images/testimonials/testimonials-1-img-2.png" alt="">
                                </div>
                                <div class="testimonials_one_text">
                                    <div class="testimonials_one_rating_box">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="testimonials_one_text_box">
                                        <p>I was very impresed by the laundry services lorem ipsum is simply free text
                                            available used by copy typing refreshing. Neque porro noting est qui dolorem
                                            ipsum quia.</p>
                                    </div>
                                    <div class="testimonials_quote_icon">
                                        <span class="icon-quote"></span>
                                    </div>
                                    <div class="customer_info">
                                        <h3>Jessica Brown,<span>Customer</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Blog One Start-->
        <section class="blog_one">
            <div class="container">
                <div class="block-title text-center">
                    <h4>Dari Blog</h4>
                    <h2>Tips Dan Informasi</h2>
                    <p>Berikut Adalah Beberapa Tips Dan Informasi Yang Ada</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <!--Blog One single-->
                            <div class="blog_one_single wow fadeInUp" data-wow-delay="100ms">
                                <div class="blog_image">
                                    <img src="images/blog/blog1.jpg" alt="Blog One Image">
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul>
                                    <div class="blog_one_title">
                                        <h3><a href="blog-detail.html">Ini Dia Tips Sukses Pengembangan Karier di Industri Bisnis Retail!</a></h3>
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
                                    <img src="images/blog/blog2.jpg" alt="Blog One Image">
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul>
                                    <div class="blog_one_title">
                                        <h3><a href="blog-detail.html">Pindah Kerja Tanpa Naik Jabatan Tak Selalu Buruk, Ini Alasannya!</a>
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
                                    <img src="images/blog/blog3.jpg" alt="Blog One Image">
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul>
                                    <div class="blog_one_title">
                                        <h3><a href="blog-detail.html">Jalur Karier yang Bisa Dipertimbangkan Ketika Menjadi Satpam</a>
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
                                    <img src="images/blog/blog4.jpg" alt="Blog One Image">
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul>
                                    <div class="blog_one_title">
                                        <h3><a href="blog-detail.html">Tips Menghindari Ageisme Saat Melamar Kerja</a></h3>
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
                                    <img src="images/blog/blog5.jpg" alt="Blog One Image">
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul>
                                    <div class="blog_one_title">
                                        <h3><a href="blog-detail.html">Inilah Cara Perkenalan Diri Terbaik Saat Interview Sales!</a></h3>
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
                                    <img src="images/blog/blog6.jpg" alt="Blog One Image">
                                </div>
                                <div class="blog-one__content">
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="#"><i class="far fa-user-circle"></i>by Admin</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>2 Comments</a>
                                        </li>
                                    </ul>
                                    <div class="blog_one_title">
                                        <h3><a href="blog-detail.html">Lolos Interview Kerja Dengan 10 Tips Ini!</a></h3>
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
            </div>
        </section>

        <!--CTA Two Start-->
        

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

    	{{-- <!-- Modal -->
        <div aria-hidden="true" role="dialog" tabindex="-1" id="ModalDel" class="modal fade" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Pesan</h5>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin ingin menghapus notif ini?
                    </div>
                    <div class="modal-footer">
                        <form action="{{ url('/'.$notif->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="hapus" value="hapus">  
                            <button type="submit" class="btn btn-success btn-inline rounded">Yakin</button>
                            <button aria-hidden="true" data-dismiss="modal" class="btn btn-danger btn-inline rounded" type="button">tidak</button>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal --> --}}



    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/typed-2.0.11.js') }}"></script>
    <script src="{{ asset('js/vegas.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/countdown.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>


    <!-- template scripts -->
    <script src="{{ asset('js/theme.js') }}"></script>


</body>


<!-- Mirrored from layerdrops.com/ziston/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:41:49 GMT -->
</html>