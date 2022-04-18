<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile | User Profile</title>

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
                                    <img src="{{ asset('images/resources/latest_listings_au-img-2.png') }}" width="55" height="55" class="rounded-circle">
                                  </a>
                                  
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                      
                                    <p class="dropdown-item">{{Auth::user()->name}} <span class="text-success ml-3">{{ auth::user()->user }}</span></p>
                                    <hr class="dropdown-divider">
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
 
    @foreach ($data as $profile)
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
            
                
              <div class="card-box text-center">
                <img src="{{ asset('/gambar'.$profile->foto) }}">
    
                <h4 class="mb-0">{{ $profile->nama }}</h4>
                <p class="text-muted">@webdesigner</p>
    
                <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>
    
                <div class="card mt-3">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                      <span class="text-secondary">https://bootdey.com</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                      <span class="text-secondary">bootdey</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                      <span class="text-secondary">@bootdey</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                      <span class="text-secondary">bootdey</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                      <span class="text-secondary">bootdey</span>
                    </li>
                  </ul>
                </div>
            </div> <!-- end card-box -->

            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#biodata" data-toggle="tab">Biodata</a></li>
                </ul>
              </div><!-- /.card-header -->

                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Nama Lengkap</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $profile->nama }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $profile->email }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Telepon</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $profile->telepon }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Tanggal Lahir</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $profile->ultah }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Alamat</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $profile->alamat }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Bidang</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ $profile->bidang }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Pekerja</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           {{ $profile->pekerja }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <a class="btn btn-info " href="{{ url('/edit-profile/'.Auth::user()->email) }}">Edit</a>
                        </div>
                      </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    @endforeach

    
    <!-- /.content -->
</div>
<!-- ./wrapper -->

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
