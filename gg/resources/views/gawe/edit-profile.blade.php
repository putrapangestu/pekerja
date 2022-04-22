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
  <link rel="stylesheet" href="adminlte.min.css">

  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  

  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
              <li class="breadcrumb-item active"><a href="{{ url('profile') }}">Profile</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    @foreach($profiles as $profile)
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
             
              <div class="card-box text-center">
                <img src="{{ asset('/gambar/'.$profile->foto) }}" width="50%" class="mt-4">
    
                <h4 class="mb-0">{{ $profile->name }}</h4>
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
        
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              
              <div class="card-body">
                    <div class="container light-style flex-grow-1 container-p-y">
                      <form action="{{ url('edit-profile/'.$profile->email) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <h4 class="font-weight-bold py-3 mb-4">
                        Account settings
                      </h4>
                  
                      <div class="card overflow-hidden">
                        <div class="row no-gutters row-bordered row-border-light">
                          <div class="col-md-3 pt-0">
                            <div class="list-group list-group-flush account-settings-links">
                              <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                              <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                              <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                              <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Social links</a>
                              <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-portofolio">Portofolio</a>
                            </div>
                          </div>
                          <div class="col-md-9">
                            <div class="tab-content">
                              <div class="tab-pane fade active show" id="account-general">
                               
                                <div class="card-body media align-items-center">
                                  <img src="{{ $profile->foto }}" alt="" class="d-block ui-w-80">
                                  <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                      Upload new photo
                                      <input type="file" class="account-settings-fileinput" name="foto">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                  
                                    <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                  </div>
                                </div>
                                <hr class="border-light m-0">
                  
                                <div class="card-body">
                                  <div class="form-group">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="name" value="{{ $profile->name }}">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" name="email" value="{{ $profile->email }}">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">Pekerja</label>
                                    <select class="custom-select" name="pekerja">
                                      <option value="...">......</option>
                                      <option @if ($profile->pekerja == 'parttime') selected @endif>Part Time</option>
                                      <option @if ($profile->pekerja == 'freelance') selected @endif>Freelance</option>
                                      <option @if ($profile->pekerja == 'fulltime') selected @endif>Full Time</option>
                                    </select>
                                  </div>
                                </div>
                              
                            </div>
                              <div class="tab-pane fade" id="account-change-password">
                              
                                <div class="card-body pb-2">
                                  <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password" nama="current-password" class="form-control">
                                  </div>
                  
                                  <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" name="new-password" class="form-control">
                                  </div>
                  
                                  <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" name="new-password_confirmation" class="form-control">
                                  </div>
                                </div>
                              
                              </div>
                              <div class="tab-pane fade" id="account-info">
                              
                                <div class="card-body pb-2">
                                  <div class="form-group">
                                    <label class="form-label">Birthday</label>
                                    <input type="date" class="form-control" name="ultah" value="{{ $profile->ultah }}">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">Telepon</label>
                                    <input type="text" class="form-control" name="telepon" value="{{ $profile->telepon }}">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="{{ $profile->alamat }}">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">Bidang Pekerjaan</label>
                                    <input type="text" class="form-control" name="bidang" value="{{ $profile->bidang }}">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">Keterangan</label>
                                    <select class="custom-select" name="keterangan">
                                      <option value="Belum Memiliki Pekerjaan">Belum Memiliki Pekerjaan</option>
                                      <option value="Memiliki Pekerjaan">Memiliki Pekerjaan</option>
                                    </select>
                                  </div>
                                </div>
                              
                             </div>
                    
                              <div class="tab-pane fade" id="account-social-links">
                              
                                <div class="card-body pb-2">
                                  <div class="form-group">
                                    <label class="form-label">Twitter</label>
                                    <input type="text" class="form-control" name="twitter" value="https://twitter.com/user">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="https://www.facebook.com/user">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">Google+</label>
                                    <input type="text" class="form-control" name="google" value="">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control" name="link" value="">
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" name="instagram" value="https://www.instagram.com/user">
                                  </div>
                                </div>
                              
                              </div>
                            
                              <div class="tab-pane fade" id="account-portofolio">
                              
                                <div class="card-body pb-2">
                                  <div class="form-group">
                                    <label class="form-label">Riwayat pendidikan</label>
                                    <div class="col-md-6"> 
                                      <input type="date" class="form-control" name="lulusansd" value="{{ $profile->lulusansd }}">
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" name="sd" value="{{ $profile->sd }}">
                                    </div>  <br>
                                    <div class="col-md-6">
                                      <input type="date" class="form-control" name="lulusansmp" value="{{ $profile->lulusansmp }}">
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" name="smp" value="{{ $profile->smp }}">
                                    </div> <br>
                                    <div class="col-md-6">
                                      <input type="date" class="form-control" name="lulusansma" value="{{ $profile->lulusansma }}">
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" name="sma" value="{{ $profile->sma }}">
                                    </div> <br>
                                  </div>
                  
                                  <div class="form-group">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" name="bio" rows="5">{{ $profile->bio }}</textarea>
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">prestasi</label>
                                    <textarea class="form-control" name="prestasi" rows="5">{{ $profile->prestasi }}</textarea>
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">pengalaman</label>
                                    <textarea class="form-control" name="pengalaman" rows="5">{{ $profile->pengalaman }}</textarea>
                                  </div>
                                  <div class="form-group">
                                    <label class="form-label">kemampuan</label>
                                    <textarea class="form-control" name="kemampuan" rows="5">{{ $profile->kemampuan }}</textarea>
                                  </div>
                                </div>
                                <div class="card-body media align-items-center">
                                  <img src="{{ $profile->hasil }}" alt="" class="d-block ui-w-80">
                                  <div class="media-body ml-4">
                                    <label class="btn btn-outline-primary">
                                      Upload file atau photo
                                      <input type="file" class="account-settings-fileinput" name="hasil">
                                    </label> &nbsp;
                                    <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                  
                                    <div class="text-light small mt-1">Allowed JPG, PDF, DOCX, PNG. Max size of 800K</div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="form-label">Tag</label>
                                  <textarea class="form-control" name="tag" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                  <label class="form-label">Kategori</label>
                                  <textarea class="form-control" name="kategori" rows="5"></textarea>
                                </div>
                                <hr class="border-light m-0">
                              
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  
                      <div class="text-right mt-3">
                        <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                        <button type="reset" class="btn btn-default">Cancel</button>
                      </div>
                      </form>
                    </div>
                <!-- /.tab-content -->
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
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="js/jsweb/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="bootstrap.bundle.min.js"></script>
<!-- AdminLTE App --> 
<script src="js/jsweb/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/jsweb/demo.js "></script>

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
