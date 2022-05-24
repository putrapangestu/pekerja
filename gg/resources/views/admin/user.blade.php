<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/agroxa/layouts/red/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:11:32 GMT -->
<head>

        <meta charset="utf-8" />
        <title>User || Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicons/black.png') }}}}">
        <!-- DataTables -->
        <link href="{{ asset('agroxa/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('agroxa/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('agroxa/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
            type="text/css" />
        <!-- Bootstrap Css -->
        <link href="{{ asset('agroxa/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('agroxa/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('agroxa/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="colored">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('images/favicons/black.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('images/favicons/black.png') }}" alt="" height="75">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('images/favicons/black.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('images/favicons/black.png') }}" alt="" height="24">
                    </span>
                </a>
            </div>

            <!-- Menu Icon -->

            <button type="button" class="btn px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>


            <div class="dropdown d-none d-lg-inline-block align-self-center">
                
                <ul class="dropdown-menu" aria-labelledby="createNewDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- App Search -->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="mdi mdi-magnify"></span>
                </div>
            </form>

            <!-- Notification Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-bell"></i>
                    <span class="badge bg-info rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <h5 class="p-3 text-dark mb-0">Notifications (37)</h5>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="mdi mdi-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                        <i class="mdi mdi-message"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">New Massage received</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">You have 87 unread message
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-info rounded-circle font-size-16">
                                        <i class="mdi mdi-flag"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="mdi mdi-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your Order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">It will seem like simplified English
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-danger rounded-circle font-size-16">
                                        <i class="mdi mdi-message"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">New Massage received</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">You have 87 unread message
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="p-2 d-grid">
                        <a class="font-size-14 text-center" href="javascript:void(0)">View all</a>
                    </div>
                </div>
            </div>

            <!-- User -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('agroxa/images/users/avatar-4.jpg') }}"
                        alt="Header Avatar">
                </button>

                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                   
                    <a class="dropdown-item text-primary" href="#"><i
                            class="mdi mdi-power font-size-16 align-middle me-2 text-primary"></i>
                        <span>Logout</span></a>
                </div>
            </div>

            <!-- Setting -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">
                    <div class="user-details">
                        <div class="d-flex">
                            <div class="me-2">
                                <img src="{{ asset('agroxa/images/users/avatar-4.jpg') }}" alt="" class="avatar-md rounded-circle">
                            </div>
                            <div class="user-info w-100">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Donald Johnson
                                        <i class="mdi mdi-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-account-circle text-muted me-2"></i>
                                                Profile<div class="ripple-wrapper me-2"></div>
                                            </a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-cog text-muted me-2"></i>
                                                Settings</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock-open-outline text-muted me-2"></i>
                                                Lock screen</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-power text-muted me-2"></i>
                                                Logout</a></li>
                                    </ul>
                                </div>

                                <p class="text-white-50 m-0">Administrator</p>
                            </div>
                        </div>
                    </div>


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href={{ url('dashboard') }}>
                                    <i class="mdi mdi-home mr-20"></i>
                                    <span>Dashboard</span>
                                </a>
                                <a href={{ url('') }}>
                                    <i class="mdi mdi-home mr-20"></i>
                                    <span>Pengguna</span>
                                </a>
                            </li>   
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <div class="state-information d-none d-sm-block">
                                        <div class="page-title ">
                                            <h4 class="fs-2">Data Tables</h4>
                                            <ol class="breadcrumb">
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Start Page-content-Wrapper -->
                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            
                                            

                                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama</th>
                                                        <th>User</th>
                                                        <th>Email</th>
                                                        <th>Alamat</th>
                                                        <th>Foto</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no=1; ?>
                                                    @foreach ($pengguna as $data)
                                                        <tr>
                                                            <td>{{ $no++ }}.</td>
                                                            <td>{{ $data->name }}</td>
                                                            <td>{{ $data->user }}</td>
                                                            <td>{{ $data->email }}</td>
                                                            <td>{{ $data->alamat }}</td>
                                                            <td> <img src="{{ url('gambar/'.$data->foto) }}" width="100px"></td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#example{{ $data->id }}">
                                                                    @if($data->blokir==0)
                                                                        Blokir
                                                                    @elseif($data->blokir==1)
                                                                        Unblock
                                                                    @endif
                                                                  </button>
                                                                
                                                            </td>
                                                        </tr>
                                                        <div class="modal fade" id="example{{ $data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                              <div class="modal-content">
                                                                <div class="modal-header">
                                                                  <h5 class="modal-title" id="exampleModalLabel">{{ $data->name }}</h5>
                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                  Apakah Anda Yakin Ingin 
                                                                  @if($data->blokir==0)
                                                                  Memblokir
                                                                  @elseif($data->blokir==1)
                                                                  Membuka Blokir
                                                                  @endif
                                                                  Pengguna Ini?
                                                                </div>
                                                                <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                                                  <a href="/admin/user/delete/{{ $data->id }}" <button type="button" class="btn btn-primary">Lanjutkan</button></a>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            <!-- Button trigger modal -->

  
  <!-- Modal -->
  
                                            
                                            <!-- /.model-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <!-- end row -->

                            
                            <!-- end row -->

                        </div>
                        <!-- End Page-content -->

                    </div>
                    <!-- Container-Fluid -->
                </div>
                <!-- End Page-content-wrapper -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <script>document.write(new Date().getFullYear())</script> © Agroxa <span
                                    class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-primary"></i> by
                                    Themesbrand.</span>
                            </div>

                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{ asset('agroxa/images/layouts/layout-1.png') }}" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset('agroxa/images/layouts/layout-2.png') }}" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                            data-bsStyle="{{ asset('agroxa/css/bootstrap-dark.min.css') }}" data-appStyle="{{ asset('agroxa/css/app-dark.min.css') }}" />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{ asset('agroxa/images/layouts/layout-3.png') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                            data-appStyle="{{ asset('agroxa/css/app-rtl.min.css') }}" />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                </div>

            </div>
            <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('agroxa/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('agroxa/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('agroxa/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('agroxa/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('agroxa/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('agroxa/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('agroxa/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('agroxa/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('agroxa/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('agroxa/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('agroxa/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('agroxa/libs/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('agroxa/libs/pdfmake/build/vfs_fonts.js') }}"></script>
        <script src="{{ asset('agroxa/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('agroxa/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('agroxa/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
        <!-- Responsive examples -->
        <script src="{{ asset('agroxa/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('agroxa/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

        <!-- Datatable init js -->
        <script src="{{ asset('agroxa/js/pages/datatables.init.js') }}"></script>

        <!-- App js -->
        {{-- <script src="{{ asset('agroxa/js/app.js') }}"></script> --}}

    </body>


<!-- Mirrored from themesbrand.com/agroxa/layouts/red/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 03:11:42 GMT -->
</html>