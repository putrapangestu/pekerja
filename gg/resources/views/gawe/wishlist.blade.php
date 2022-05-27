<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wishlist</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">

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

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="my-0">
<div class="wrapper">
  <!-- Navbar -->
  

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="site-header__header-one header_three_wrap clearfix">

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
                              <a href="{{ url('/') }}">Home</a>
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
    <!-- Main content -->
       <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Wishlist</h3>
                    </div>
                </div>
            </div>
        </div>
       </div>
    <section class="listings_three-page">
        <div class="container">
            <div class="row">
                @if(isset($errors))
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
                            <form action="{{ Route('hapus-wishlist') }}" method="POST">
                                @csrf
                            <div class="heart_icon">
                                <input type="hidden" name="hapuswishlist" value="hapus">
                                <input type="hidden" name="untuk" value="{{ $profile->email }}">
                            <button class="wishlist bg-transparent border-0"><i class="fas fa-heart @if($sapi->untuk == $profile->email) text-danger @endif"></i></button>
                            </div>
                            </form>
                            <div class="author_img">
                                <img src="{{ asset('gambar/'.$profile->foto) }}" alt="">
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
                @endif
            </div>
        </div>
    </section>
   

    
    <!-- /.content -->
</div>


<!-- jQuery -->
<script src="js/jsweb/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="bootstrap.bundle.min.js"></script>
<!-- AdminLTE App --> 
<script src="js/jsweb/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/jsweb/demo.js"></script>

<style type="text/css">
  body{
      background: #f5f5f5;
      margin-top:20px;
  }
  
  .ui-w-80 {
      width: 80px !important;
      height: auto;
  }
  
  .btn-default {
      border-color: rgba(24,28,33,0.1);
      background: rgba(0,0,0,0);
      color: #4E5155;
  }
  
  label.btn {
      margin-bottom: 0;
  }
  
  .btn-outline-primary {
      border-color: #26B4FF;
      background: transparent;
      color: #26B4FF;
  }
  
  .btn {
      cursor: pointer;
  }
  
  .text-light {
      color: #babbbc !important;
  }
  
  .btn-facebook {
      border-color: rgba(0,0,0,0);
      background: #3B5998;
      color: #fff;
  }
  
  .btn-instagram {
      border-color: rgba(0,0,0,0);
      background: #000;
      color: #fff;
  }
  
  .card {
      background-clip: padding-box;
      box-shadow: 0 1px 4px rgba(24,28,33,0.012);
  }
  
  .row-bordered {
      overflow: hidden;
  }
  
  .account-settings-fileinput {
      position: absolute;
      visibility: hidden;
      width: 1px;
      height: 1px;
      opacity: 0;
  }
  .account-settings-links .list-group-item.active {
      font-weight: bold !important;
  }
  html:not(.dark-style) .account-settings-links .list-group-item.active {
      background: transparent !important;
  }
  .account-settings-multiselect ~ .select2-container {
      width: 100% !important;
  }
  .light-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24, 28, 33, 0.03) !important;
  }
  .light-style .account-settings-links .list-group-item.active {
      color: #4e5155 !important;
  }
  .material-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24, 28, 33, 0.03) !important;
  }
  .material-style .account-settings-links .list-group-item.active {
      color: #4e5155 !important;
  }
  .dark-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(255, 255, 255, 0.03) !important;
  }
  .dark-style .account-settings-links .list-group-item.active {
      color: #fff !important;
  }
  .light-style .account-settings-links .list-group-item.active {
      color: #4E5155 !important;
  }
  .light-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24,28,33,0.03) !important;
  }
  
  
  
  </style>
  
  <script type="text/javascript">
  
  </script>
</body>
</html>
