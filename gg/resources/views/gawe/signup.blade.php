
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
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/bootstrap.min.css') }}" />
    
        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/materialdesignicons.min.css') }}" />
    
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/selectize.css') }}" />
    
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/nice-select.css') }}" />
    
        <!-- Custom  Css -->
        <link rel="stylesheet" type="text/css" href="{{ asset ('css/style.css') }}" />

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

                                @if(session()->has('gagal_password'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('gagal_password') }}
                                </div>
                                @endif

                                <div class="login_page bg-white shadow rounded p-4">
                                    <div class="text-center">
                                        <h4 class="mb-4">Change Password</h4>  
                                    </div>
                                    <div class="card-body pb-2">
                                    <form action="{{ url('edit-password/'.Auth::user()->email) }}" method="POST">
                                        @csrf
                                      
                                        <div class="form-group">
                                          <label class="form-label">Current password</label>
                                          <input type="password" name="oldpassword" class="form-control">
                                        </div>
                        
                                        <div class="form-group">
                                          <label class="form-label">New password</label>
                                          <input type="password" name="password" class="form-control">
                                        </div>
                        
                                        <div class="form-group">
                                          <label class="form-label">Repeat new password</label>
                                          <input type="password" name="confirm_password" class="form-control">
                                        </div>

                                        <div class="text-right mt-3">
                                            <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div> <!--end col-->
                        </div><!--end row-->
                    </div> <!--end container-->
                </div>
            </div>
        </section><!--end section-->
        <!-- Hero End -->

        <!-- javascript -->
        <script src="{{ asset ('js/jquery.min.js') }}"></script>
        <script src="{{ asset ('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset ('js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset ('js/plugins.js') }}"></script>

        <!-- selectize js -->
        <script src="{{ asset ('js/selectize.min.js') }}"></script>

        <script src="{{ asset ('js/jquery.nice-select.min.js') }}"></script>

        <script src="{{ asset ('js/app.js') }}"></script>
    </body>
</html>