
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gawe.Id</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Themesdesign" />
    
        <link rel="shortcut icon" href="images/black.png">
    
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/cssweb/bootstrap.min.css" type="text/css">
    
        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="css/cssweb/materialdesignicons.min.css" />
    
        <link rel="stylesheet" type="text/css" href="css/cssweb/selectize.css" />
    
        <link rel="stylesheet" type="text/css" href="css/cssweb/nice-select.css" />
    
        <!-- Custom  Css -->
        <link rel="stylesheet" type="text/css" href="css/cssweb/style.css" />

    </head>

    <body>
        
        <div class="back-to-home rounded d-none d-sm-block">
            <a href="index3.html" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
        </div>

        <!-- Hero Start -->
        <section class="bg-home" style="background: url'">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">

                                @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif

                                <div class="login_page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4">Registrasi</h4>  
                                    </div>
                                    <form class="login-form" method="POST" action="{{ url('gawe/signup') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">                                               
                                                    <label>Nama Lengkap <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="First Name" name="nama" required="" value="{{ old('nama') }}">
                                                    @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group position-relative">
                                                    <label>User <span class="text-danger">*</span></label><br>
                                                    <select name="user" class="form-control" value="{{ old('user') }}">
                                                        <option value="{{ old('user') }}">...</option>
                                                        <option value="pekerja">Pekerja</option>
                                                        <option value="perusahaan">Perusahaan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Email <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Email" name="email" required="" value="{{ old('email') }}">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group position-relative">
                                                    <label>Konfirmasi Password <span class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirm" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="custom-control m-0 custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Saya Menenrima <a href="#" class="text-primary">Syarat Dan Kententuan</a></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary w-100">Registrasi</button>
                                            </div>
                                            <div class="col-lg-12 mt-4 text-center">
                                                <h6>Atau Masuk Dengan</h6>
                                                <ul class="list-unstyled social-icon mb-0 mt-3">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google"></i></a></li>
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-github-circle" title="Github"></i></a></li>
                                                </ul><!--end icon-->
                                            </div>
                                            <div class="mx-auto">
                                                <p class="mb-0 mt-3"><small class="text-dark mr-2">Sudah memiliki akun ?</small> <a href="{{ url('gawe/login') }}" class="text-dark font-weight-bold">Sign in</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->

        <!-- javascript -->
        <script src="js/jsweb/jquery.min.js"></script>
        <script src="js/jsweb/bootstrap.bundle.min.js"></script>
        <script src="js/jsweb/jquery.easing.min.js"></script>
        <script src="js/jsweb/plugins.js"></script>

        <!-- selectize js -->
        <script src="js/jsweb/selectize.min.js"></script>

        <script src="js/jsweb/jquery.nice-select.min.js"></script>

        <script src="js/jsweb/app.js"></script>
    </body>
</html>