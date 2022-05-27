<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/agroxa/layouts/red/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:28:05 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Dashboard | Agroxa - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('agroxa/images/favicon.ico')}}">


        <!-- Bootstrap Css -->
        <link href="{{asset('agroxa/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('agroxa/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('agroxa/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

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
                        <img src="{{asset('agroxa/images/logo-sm-dark.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('agroxa/images/logo-dark.png')}}" alt="" height="24">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('agroxa/images/logo-sm-light.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('agroxa/images/logo-light.png')}}" alt="" height="24">
                    </span>
                </a>
            </div>

            <!-- Menu Icon -->

            <button type="button" class="btn px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>


            <div class="dropdown d-none d-lg-inline-block align-self-center">
                <button class="btn btn-header waves-effect  dropdown-toggle" type="button" id="createNewDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Create New<i class="mdi mdi-chevron-down"></i>
                </button>
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
                    <img class="rounded-circle header-profile-user" src="{{asset('agroxa/images/users/avatar-4.jpg')}}"
                        alt="Header Avatar">
                </button>

                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-account-circle font-size-16 align-middle me-2 text-muted"></i>
                        <span>Profile</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-wallet font-size-16 align-middle text-muted me-2"></i>
                        <span>My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i
                            class="mdi mdi-wrench font-size-16 align-middle text-muted me-2"></i>
                        <span>Settings</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-lock-open-outline font-size-16 text-muted align-middle me-2"></i>
                        <span>Lock screen</span></a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ Route('logout-admin') }}" method="POST">
                        @csrf
                    <a class="dropdown-item text-primary" href=""><button
                            class="mdi mdi-power font-size-16 align-middle me-2 text-primary"></button>
                        <span>Logout</span></a>
                    </form>
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
                                <img src="agroxa/images/users/avatar-4.jpg" alt="" class="avatar-md rounded-circle">
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
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="{{ url('dashbobard') }}" class="waves-effect">
                                    <i class="mdi mdi-home"></i><span class="badge bg-primary float-end">3</span>
                                    <span>Dashboard</span>

                                </a>
                            </li>
                            <li>
                                <a href="{{ url('blog') }}" class="waves-effect">
                                    <i class="mdi mdi-home"></i><span class="badge bg-primary float-end"></span>
                                    <span>Blog</span>

                                </a>
                            </li>
                            <li>
                                <a href="{{ url('user') }}" class="waves-effect">
                                    <i class="mdi mdi-home"></i><span class="badge bg-primary float-end"></span>
                                    <span>User</span>

                                </a>
                            </li>
                            <li>
                                <a href="{{ url('') }}" class="waves-effect">
                                    <i class="mdi mdi-home"></i><span class="badge bg-primary float-end"></span>
                                    <span>Fitur</span>

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
                                    <div class="page-title">
                                        <h4 class="mb-0 font-size-18">Dashboard</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item active">Welcome to Agroxa Dashboard</li>
                                        </ol>
                                    </div>

                                    <div class="state-information d-none d-sm-block">
                                        <div class="state-graph">
                                            <div id="header-chart-1"></div>
                                            <div class="info">Balance $ 2,317</div>
                                        </div>
                                        <div class="state-graph">
                                            <div id="header-chart-2"></div>
                                            <div class="info">Item Sold 1230</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Start page content-wrapper -->
                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Orders
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Orders</h5>
                                                    <h3 class="mb-3 text-white">1,587</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-info"> +11% </span> <span
                                                            class="ms-2">From previous period</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-cube-outline display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Revenue
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Revenue</h5>
                                                    <h3 class="mb-3 text-white">$46,785</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-danger"> -29% </span> <span
                                                            class="ms-2">From previous period</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-buffer display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Av. Price
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Average Price
                                                    </h5>
                                                    <h3 class="mb-3 text-white">15.9</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-primary"> 0% </span> <span
                                                            class="ms-2">From previous period</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-tag-text-outline display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Pr. Sold
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Product Sold
                                                    </h5>
                                                    <h3 class="mb-3 text-white">1890</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-info"> +89% </span> <span
                                                            class="ms-2">From previous period</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-briefcase-check display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-8 border-end">
                                                    <h4 class="card-title mb-4">Sales Report</h4>
                                                    <div id="morris-area-example" class="dashboard-charts morris-charts">
                                                    </div>
                                                </div>
                                                <!-- End Col -->

                                                <div class="col-xl-4">
                                                    <h4 class="card-title mb-4">Yearly Sales Report</h4>
                                                    <div class="p-3">
                                                        <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="pills-first-tab"
                                                                    data-bs-toggle="pill" href="#pills-first" role="tab"
                                                                    aria-controls="pills-first"
                                                                    aria-selected="true">2015</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="pills-second-tab"
                                                                    data-bs-toggle="pill" href="#pills-second" role="tab"
                                                                    aria-controls="pills-second"
                                                                    aria-selected="false">2016</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="pills-third-tab"
                                                                    data-bs-toggle="pill" href="#pills-third" role="tab"
                                                                    aria-controls="pills-third"
                                                                    aria-selected="false">2017</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content">
                                                            <div class="tab-pane show active" id="pills-first"
                                                                role="tabpanel" aria-labelledby="pills-first-tab">
                                                                <div class="p-3">
                                                                    <h2>$17562</h2>
                                                                    <p class="text-muted">Maecenas nec odio et ante
                                                                        tincidunt tempus. Donec vitae sapien ut libero
                                                                        venenatis faucibus Nullam quis ante.</p>
                                                                    <a href="#" class="text-primary">Read more...</a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="pills-second" role="tabpanel"
                                                                aria-labelledby="pills-second-tab">
                                                                <div class="p-3">
                                                                    <h2>$18614</h2>
                                                                    <p class="text-muted">Maecenas nec odio et ante
                                                                        tincidunt tempus. Donec vitae sapien ut libero
                                                                        venenatis faucibus Nullam quis ante.</p>
                                                                    <a href="#" class="text-primary">Read more...</a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="pills-third" role="tabpanel"
                                                                aria-labelledby="pills-third-tab">
                                                                <div class="p-3">
                                                                    <h2>$19752</h2>
                                                                    <p class="text-muted">Maecenas nec odio et ante
                                                                        tincidunt tempus. Donec vitae sapien ut libero
                                                                        venenatis faucibus Nullam quis ante.</p>
                                                                    <a href="#" class="text-primary">Read more...</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Sales Analytics</h4>
                                            <div id="morris-donut-example" class="dashboard-charts morris-charts"></div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3">Inbox</h4>
                                            <div data-simplebar style="max-height: 334px;">
                                                <div class="inbox-wid">
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="agroxa/images/users/avatar-1.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Irene</h6>
                                                            <p class="inbox-item-text text-muted mb-0">Hey! there I'm
                                                                available...</p>
                                                            <p class="inbox-item-date text-muted">13:40 PM</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="agroxa/images/users/avatar-2.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Jennifer</h6>
                                                            <p class="inbox-item-text text-muted mb-0">I've finished it! See
                                                                you
                                                                so...</p>
                                                            <p class="inbox-item-date text-muted">13:34 PM</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="agroxa/images/users/avatar-3.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Richard</h6>
                                                            <p class="inbox-item-text text-muted mb-0">This theme is
                                                                awesome!
                                                            </p>
                                                            <p class="inbox-item-date text-muted">13:17 PM</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="agroxa/images/users/avatar-4.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Martin</h6>
                                                            <p class="inbox-item-text text-muted mb-0">Nice to meet you</p>
                                                            <p class="inbox-item-date text-muted">12:20 PM</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="agroxa/images/users/avatar-5.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Sean</h6>
                                                            <p class="inbox-item-text text-muted mb-0">Hey! there I'm
                                                                available...</p>
                                                            <p class="inbox-item-date text-muted">11:47 AM</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-5 text-dark">Recent Activity Feed</h4>
                                            <div>
                                                <ul class="nav nav-pills nav-justified recent-activity-tab mb-4"
                                                    id="recent-activity-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="activity1-tab" data-bs-toggle="pill"
                                                            href="#activity1" role="tab" aria-controls="activity1"
                                                            aria-selected="true">21 Sep</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="activity2-tab" data-bs-toggle="pill"
                                                            href="#activity2" role="tab" aria-controls="activity2"
                                                            aria-selected="false">22 Sep</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="activity3-tab" data-bs-toggle="pill"
                                                            href="#activity3" role="tab" aria-controls="activity3"
                                                            aria-selected="false">23 Sep</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="activity4-tab" data-bs-toggle="pill"
                                                            href="#activity4" role="tab" aria-controls="activity4"
                                                            aria-selected="false">24 Sep</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="activity1" role="tabpanel"
                                                        aria-labelledby="activity1-tab">
                                                        <div class="p-3">
                                                            <div class="text-muted">
                                                                <p>21 Sep, 2018</p>
                                                                <h5 class="text-dark font-size-16">Responded to need
                                                                    “Volunteer
                                                                    Activities”</h5>
                                                                <p>Aenean vulputate eleifend tellus</p>
                                                                <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae
                                                                    sapien ut libero venenatis faucibus Nullam quis ante.
                                                                </p>
                                                                <a href="#" class="text-primary">Read More...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="activity2" role="tabpanel"
                                                        aria-labelledby="activity2-tab">
                                                        <div class="p-3">
                                                            <div class="text-muted">
                                                                <p>22 Sep, 2018</p>
                                                                <h5 class="text-dark font-size-16">Added an interest
                                                                    “Volunteer
                                                                    Activities”</h5>
                                                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit
                                                                    amet consectetur velit sed quia non tempora incidunt.
                                                                </p>
                                                                <p>Ut enim ad minima veniam quis nostrum</p>
                                                                <a href="#" class="text-primary">Read More...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="activity3" role="tabpanel"
                                                        aria-labelledby="activity3-tab">
                                                        <div class="p-3">
                                                            <div class="text-muted">
                                                                <p>23 Sep, 2018</p>
                                                                <h5 class="text-dark font-size-16">Joined the group
                                                                    “Boardsmanship Forum”
                                                                </h5>
                                                                <p>Nemo enim voluptatem quia voluptas</p>
                                                                <p>Donec pede justo fringilla vel aliquet nec vulputate eget
                                                                    arcu. In enim justo rhoncus ut imperdiet a venenatis
                                                                    vitae. </p>
                                                                <a href="#" class="text-primary">Read More...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="activity4" role="tabpanel"
                                                        aria-labelledby="activity4-tab">
                                                        <div class="p-3">
                                                            <div class="text-muted">
                                                                <p>24 Sep, 2018</p>
                                                                <h5 class="text-dark font-size-16">Attending the event “Some
                                                                    New Event”
                                                                </h5>
                                                                <p>At vero eos et accusamus et iusto odio</p>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error sit
                                                                    voluptatem accusantium doloremque laudantium </p>
                                                                <a href="#" class="text-primary">Read More...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Top product sales</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover align-middle mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-size-16">Computers</h5>
                                                                <p class="text-muted mb-0">The languages only differ</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <span class="peity-pie"
                                                                        data-peity='{ "fill": ["#f16c69", "#f2f2f2"]}'
                                                                        data-width="54" data-height="54">70/100</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-16">70%</h5>
                                                                <p class="text-muted mb-0">Sales</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-size-16">Laptops</h5>
                                                                <p class="text-muted mb-0">Maecenas tempus tellus</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <span class="peity-donut"
                                                                        data-peity='{ "fill": ["#28bbe3", "#f2f2f2"], "innerRadius": 20, "radius": 32 }'
                                                                        data-width="54" data-height="54">9,4</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-16">84%</h5>
                                                                <p class="text-muted mb-0">Sales</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-size-16">Ipad</h5>
                                                                <p class="text-muted mb-0">Donec pede justo</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <span class="peity-pie"
                                                                        data-peity='{ "fill": ["#f16c69", "#f2f2f2"]}'
                                                                        data-width="54" data-height="54">62/100</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-16">62%</h5>
                                                                <p class="text-muted mb-0">Sales</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-size-16">Mobile</h5>
                                                                <p class="text-muted mb-0">Aenean leo ligula</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <span class="peity-donut"
                                                                        data-peity='{ "fill": ["#28bbe3", "#f2f2f2"], "innerRadius": 20, "radius": 32 }'
                                                                        data-width="54" data-height="54">20,4</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-16">89%</h5>
                                                                <p class="text-muted mb-0">Sales</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Latest Transaction</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover align-middle mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">(#) Id</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col" colspan="2">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">#15236</th>
                                                            <td>
                                                                <div>
                                                                    <img src="agroxa/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Jeanette
                                                                    James
                                                                </div>
                                                            </td>
                                                            <td>14/8/2018</td>
                                                            <td>$104</td>
                                                            <td><span class="badge bg-success">Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#15237</th>
                                                            <td>
                                                                <div>
                                                                    <img src="agroxa/images/users/avatar-3.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Christopher
                                                                    Taylor
                                                                </div>
                                                            </td>
                                                            <td>15/8/2018</td>
                                                            <td>$112</td>
                                                            <td><span class="badge bg-warning">Pending</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#15238</th>
                                                            <td>
                                                                <div>
                                                                    <img src="agroxa/images/users/avatar-4.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Edward
                                                                    Vazquez
                                                                </div>
                                                            </td>
                                                            <td>15/8/2018</td>
                                                            <td>$116</td>
                                                            <td><span class="badge bg-success">Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#15239</th>
                                                            <td>
                                                                <div>
                                                                    <img src="agroxa/images/users/avatar-5.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Michael
                                                                    Flannery
                                                                </div>
                                                            </td>
                                                            <td>16/8/2018</td>
                                                            <td>$109</td>
                                                            <td><span class="badge bg-primary">Cancel</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#15240</th>
                                                            <td>
                                                                <div>
                                                                    <img src="agroxa/images/users/avatar-6.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Jamie
                                                                    Fishbourne
                                                                </div>
                                                            </td>
                                                            <td>17/8/2018</td>
                                                            <td>$120</td>
                                                            <td><span class="badge bg-success">Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- End Cardbody -->
                                    </div>
                                    <!-- End card -->
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Latest Order</h4>
                                            <div class="table-responsive order-table">
                                                <table class="table table-hover align-middle mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">(#) Id</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Date/Time</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col" colspan="2">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">#14562</th>
                                                            <td>
                                                                <div>
                                                                    <img src="agroxa/images/users/avatar-4.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Matthew
                                                                    Drapeau
                                                                </div>
                                                            </td>
                                                            <td>17/8/2018
                                                                <p class="font-size-13 text-muted mb-0">8:26AM</p>
                                                            </td>
                                                            <td>$104</td>
                                                            <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14563</th>
                                                            <td>
                                                                <div>
                                                                    <img src="agroxa/images/users/avatar-5.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Ralph Shockey
                                                                </div>
                                                            </td>
                                                            <td>18/8/2018
                                                                <p class="font-size-13 text-muted mb-0">10:18AM</p>
                                                            </td>
                                                            <td>$112</td>
                                                            <td><span class="badge bg-soft-warning rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                                    Pending</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14564</th>
                                                            <td>
                                                                <div>
                                                                    <img src="{{asset('agroxa/images/users/avatar-6.jpg')}}" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Alexander
                                                                    Pierson
                                                                </div>
                                                            </td>
                                                            <td>18//8/2018
                                                                <p class="font-size-13 text-muted mb-0">12:36PM</p>
                                                            </td>
                                                            <td>$116</td>
                                                            <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14565</th>
                                                            <td>
                                                                <div>
                                                                    <img src="agroxa/images/users/avatar-7.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Robert Rankin
                                                                </div>
                                                            </td>
                                                            <td>19/8/2018
                                                                <p class="font-size-13 text-muted mb-0">11:47AM</p>
                                                            </td>
                                                            <td>$109</td>
                                                            <td><span class="badge bg-soft-primary rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-primary"></i>
                                                                    Cancel</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14566</th>
                                                            <td>
                                                                <div>
                                                                    <img src="{{asset('agroxa/images/users/avatar-8.jpg')}}" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Myrna Shields
                                                                </div>
                                                            </td>
                                                            <td>20/8/2018
                                                                <p class="font-size-13 text-muted mb-0">02:52PM</p>
                                                            </td>
                                                            <td>$120</td>
                                                            <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end page-content-wrapper-->

                    </div>
                    <!-- Container-fluid -->
                </div>
                <!-- End Page-content -->


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
                        <img src="{{asset('agroxa/images/layouts/layout-1.png')}}" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('agroxa/images/layouts/layout-2.png')}}" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                            data-bsStyle="{{asset('agroxa/css/bootstrap-dark.min.css')}}" data-appStyle="{{asset('agroxa/css/app-dark.min.css')}}" />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="{{asset('agroxa/images/layouts/layout-3.png')}}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                            data-appStyle="{{asset('agroxa/css/app-rtl.min.css')}}" />
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
        <script src="{{asset('agroxa/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('agroxa/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('agroxa/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('agroxa/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('agroxa/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('agroxa/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- Peity JS -->
        <script src="{{asset('agroxa/libs/peity/jquery.peity.min.js')}}"></script>

        <script src="{{asset('agroxa/libs/morris.js/morris.min.js')}}"></script>

        <script src="{{asset('agroxa/libs/raphael/raphael.min.js')}}"></script>
        
        <!-- Dashboard init JS -->
        <script src="{{asset('agroxa/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        {{-- <script src="{{asset('agroxa/js/app.js')}}"></script> --}}

    </body>


<!-- Mirrored from themesbrand.com/agroxa/layouts/red/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 06:28:33 GMT -->
</html>