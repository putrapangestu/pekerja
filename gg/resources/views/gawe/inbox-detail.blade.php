<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/zapily/ltr/inbox-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 04:21:11 GMT -->
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Inbox | Gawe.Id</title>
	<meta name="description" content="Zapily is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Zapily Admin, Zapilyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
	<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
	
	<!-- Bootstrap Wysihtml5 css -->
	<link rel="stylesheet" href="{{ asset('vendors\bower_components\bootstrap3-wysihtml5-bower\dist\bootstrap3-wysihtml5.css') }}" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<!-- Custom CSS -->
	<link href="{{ asset('zapily/style.css') }}" rel="stylesheet" type="text/css">
	
	
</head>

<body>
	@foreach($rekrut as $details)
	@foreach ($profiles as $pp)
	
	
	<!--Preloader-->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!--/Preloader-->
    <div class="wrapper theme-1-active pimary-color-gold">

        <!-- Main Content -->
		<div class="page-wrapper">
			<div class="container">
				<!-- Title -->	
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">inbox-detail</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index2.html">Dashboard</a></li>
						<li><a href="#"><span>apps</span></a></li>
						<li class="active"><span>inbox-detail</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default card-view  pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="mail-box">
										<div class="row">
											<aside class="col-lg-3 col-md-4 pr-0">
												<div class="mt-20 mb-20 ml-15 mr-15">
													<a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-danger btn-block">
													Compose
													</a>
													<!-- Modal -->
													<div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button aria-hidden="true" data-dismiss="modal" class="close" type="button">??</button>
																	<h4 class="modal-title">Compose</h4>
																</div>
																<div class="modal-body">
																	<form role="form" class="form-horizontal">
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Untuk</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="inputEmail1" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Subjek</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="inputPassword1" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Pesan</label>
																			<div class="col-lg-10">
																				<textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-lg-offset-2 col-lg-10">
																				<div class="fileupload btn btn-info btn-anim mr-10"><i class="fa fa-paperclip"></i><span class="btn-text">Lampiran</span>
																					<input type="file" class="upload">
																				</div>
																				
																				<button class="btn btn-success" type="submit">Kirim</button>
																			</div>
																		</div>
																	</form>
																</div>
															</div>
															<!-- /.modal-content -->
														</div>
														<!-- /.modal-dialog -->
													</div>
													<!-- /.modal -->
												</div>
												<ul class="inbox-nav mb-30">
													<li @if(Route::is('inbox')) class="active" @endif>
														<a href="{{ url('/inbox') }}"><i class="zmdi zmdi-email-open"></i> Pesan <span class="label label-danger ml-10">{{ $unseen }}</span></a>
													</li>
													<li @if(Route::is('inbox-star')) class="active"  @endif>
														<a href="{{ url('/inbox_star') }}"><i class="zmdi zmdi-star"></i> Berbintang</a>
													</li>
													<li @if(Route::is('inbox-draft')) class="active" @endif>
														<a href="#"><i class="zmdi zmdi-folder-outline"></i> Draf</a>
													</li>
													<li @if(Route::is('inbox-trash')) class="active" @endif>
														<a href="{{ url('/inbox_trash') }}"><i class="zmdi zmdi-delete"></i> Sampah</a>
													</li>
												</ul>
											</aside>
											
											<aside class="col-lg-9 col-md-8 pl-0">
												<div class="panel panel-refresh pa-0">
													<div class="refresh-container">
														<div class="la-anim-1"></div>
													</div>
													<div class="panel-heading pt-20 pb-20 pl-15 pr-15">
														<div class="pull-left">
															<h6 class="panel-title txt-dark">inbox</h6>
														</div>
														<div class="pull-right">
															<form role="search" class="inbox-search inline-block pull-left mr-15">
																<div class="input-group">
																	<input name="example-input1-group2" class="form-control" placeholder="Search" type="text">
																	<span class="input-group-btn">
																	<button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
																	</span>
																</div>
															</form>
															<a href="#" class="pull-left inline-block refresh">
																<i class="zmdi zmdi-replay"></i>
															</a>
														</div>
														<div class="clearfix"></div>
													</div>
													
													<div class="panel-wrapper collapse in">
														<div class="panel-body inbox-body pa-0">
															<div class="heading-inbox">
																<div class="container-fluid">
																	<div class="pull-left">
																		<div class="compose-btn">
																			<a class="btn btn-sm mr-10" href="{{ url('inbox') }}" data-toggle="modal" title="Compose"><i class="zmdi zmdi-chevron-left"></i></a>
																		</div>
																	</div>
																	<div class="pull-right text-right">
																		@if (($details->dari == Auth::user()->email && $details->sampah_dari == 0) || (($details->untuk == Auth::user()->email && $details->sampah_untuk == 0)))
																			
																		<a href="#ModalDel" data-toggle="modal" title="Compose" class="btn btn-inline rounded"><i class="zmdi zmdi-delete"></i></a>
																		@endif


																		

																		<div class="inline-block dropdown">
																			<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi zmdi-more"></i></a>
																			<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Mark as Unread</a></li>
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Mark as Important</a></li>
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Report Spam</a></li>
																			</ul>
																		</div>
										
																	</div>
																</div>
																<hr class="light-grey-hr mt-10 mb-15"/>
																
																<div class="container-fluid mb-20">	
																	<h4 class="weight-500"> {{ $details->nama }} telah merekrut anda.</h4>
																</div>	
															</div>
															<div class="sender-info">
																<div class="container-fluid">
																	
																	<div class="sender-img-wrap pull-left mr-20">
																		<img class="sender-img" alt="user" src="{{ asset('gambar/'.$pp->foto) }}">
																	</div>
																	
																	<div class="sender-details   pull-left">
																		<span class="capitalize-font pr-5 txt-dark block font-15 weight-500 head-font"><a href="{{ url('profile-perusahaan/'.$details->dari) }}">{{ $details->nama }}</a></span>
																		<span class="block">
																			to
																			<span>me</span>
																		</span>	
																	</div>	
																	<div class="pull-right">
																		<div class="inline-block mr-5">
																			<span class="inbox-detail-time-1 font-12">{{ $details->created_at }}</span>
																		</div>
																		<div class="inline-block dropdown">
																			<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="zmdi   zmdi-more-vert"></i></a>
																			<ul class="dropdown-menu bullet dropdown-menu-right"  role="menu">
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-reply" aria-hidden="true"></i>Reply</a></li>
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-share" aria-hidden="true"></i>Forward</a></li>
																				<li role="presentation"><a href="javascript:void(0)" role="menuitem"><i class="icon wb-trash" aria-hidden="true"></i>Delete</a></li>
																			</ul>
																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>
															</div>
															<div class="container-fluid view-mail mt-20">
																<p>Halo kami dari {{ $details->nama }} tertarik untuk merekrut anda, untuk detailnya sebagai berikut.	
																	<table>
																		<tr>
																		<td>Posisi Kerja</td><br>
																		<td>: {{ $details->posisi }}</td>
																	</tr>
																	<tr>
																		<td>Gaji/bulan</td>
																		<td>: Rp.{{ $details->gaji }}</td>
																	</tr>
																	<tr>
																		<td>Hari Kerja</td>
																		<td>: {{ $details->hari }}</td>
																	</tr>
																	<tr>
																		<td>Jam Kerja</td>
																		<td>: {{ $details->jam }}</td>
																	</tr>
																	</table>
																	{{ $details->informasi }}
																</p><br>
																<p>Terimakasih atas waktu luangnya dan saya berharap semoga kita menjadi satu rekan bisnis.</p>
															</div>
															
														</div>

														<hr class="light-grey-hr mt-20 mb-20"/>
														<div class="container">
															@if(Auth::user()->user=='Pekerja')
																@if ($details->balasan=='tolak')
																	<div class="alert-danger text-center py-3" role="alert">
																		Anda telah menolak tawaran ini
																	</div>
																@elseif ($details->balasan=='terima')
																	<div class="alert-success text-center py-3" role="alert">
																		Anda telah menerima tawaran ini
																	</div>
																@else


																	<a href="#ModalAcc" data-toggle="modal" title="Compose" class="btn btn-success btn-inline rounded">Terima</a>
																	<a href="#ModalRef" data-toggle="modal" title="Compose" class="btn btn-danger btn-inline rounded">Tolak</a>
																	<!-- Modal -->
																	<div aria-hidden="true" role="dialog" tabindex="-1" id="ModalAcc" class="modal fade" style="display: none;">
																		<div class="modal-dialog">
																			<div class="modal-content">
																				<div class="modal-header">
																					<h5 class="modal-title">Terima Tawaran</h5>
																				</div>
																				<div class="modal-body">
																					Apakah anda yakin ingin menerima tawaran ini?
																				</div>
																				<div class="modal-footer">
																					<form action="{{ url('inbox/'.$details->id) }}" method="post">
																						@csrf
																						<input type="hidden" name="balasan" value="terima">  
																						<button type="submit" class="btn btn-success btn-inline rounded">Yakin</button>
																						<button aria-hidden="true" data-dismiss="modal" class="btn btn-danger btn-inline rounded" type="button">tidak</button>
																					</form>
																				</div>
																			</div>
																			<!-- /.modal-content -->
																		</div>
																		<!-- /.modal-dialog -->
																	</div>
																	<!-- /.modal -->

																	<!-- Modal -->
																	<div aria-hidden="true" role="dialog" tabindex="-1" id="ModalRef" class="modal fade" style="display: none;">
																		<div class="modal-dialog">
																			<div class="modal-content">
																				<div class="modal-header">
																					<h5 class="modal-title">Tolak Tawaran</h5>
																				</div>
																				<div class="modal-body">
																					Apakah anda yakin ingin menolak tawaran ini?
																				</div>
																				<div class="modal-footer">
																					<form action="{{ url('inbox/'.$details->id) }}" method="post">
																						@csrf
																						<input type="hidden" name="balasan" value="tolak">  
																						<button type="submit" class="btn btn-success btn-inline rounded">Yakin</button>
																						<button aria-hidden="true" data-dismiss="modal" class="btn btn-danger btn-inline rounded" type="button">tidak</button>
																					</form>
																				</div>
																			</div>
																			<!-- /.modal-content -->
																		</div>
																		<!-- /.modal-dialog -->
																	</div>
																	<!-- /.modal -->

																@endif

															@elseif(Auth::user()->user=='Perusahaan')
																@if ($details->balasan=='tolak')
																	<div class="alert-danger text-center py-3" role="alert" >
																		Pekerja telah menolak tawaran anda
																	</div>
																@elseif ($details->balasan=='terima')
																	<div class="alert-success text-center py-3" role="alert" >
																		Pekerja telah menerima tawaran anda
																	</div>
																@else
																	<div class="alert-dark text-center py-3" role="alert" >
																		Pekerja belum menanggapi tawaran anda
																	</div>
																@endif
															@endif
															<!-- Modal -->
															<div aria-hidden="true" role="dialog" tabindex="-1" id="ModalDel" class="modal fade" style="display: none;">
																<div class="modal-dialog">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title">Hapus Pesan</h5>
																		</div>
																		<div class="modal-body">
																			Apakah anda yakin ingin menghapus pesan ini?
																		</div>
																		<div class="modal-footer">
																			<form action="{{ url('inbox/'.$details->id) }}" method="post">
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
															<!-- /.modal -->
														</div>
													</div>
													
												</div>
											</aside>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Row -->
			</div>
			
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2018 &copy; Zapily. Pampered by Hencework</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
			
        </div>
        <!-- /Main Content -->

    </div>
	
    <!-- /#wrapper -->
	
	<!-- JavaScript -->
	
    <!-- jQuery -->
    <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	
	<!-- wysuhtml5 Plugin JavaScript -->
	<script src="{{ asset('vendors/bower_components/wysihtml5x/dist/wysihtml5x.min.js') }}"></script>
	
	<script src="{{ asset('vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.js') }}"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="{{ asset('zapily/js/dropdown-bootstrap-extended.js') }}"></script>
	
	<!-- Bootstrap Wysuhtml5 Init JavaScript -->
	<script src="{{ asset('zapily/js/bootstrap-wysuhtml5-data.js') }}"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="{{ asset('zapily/js/jquery.slimscroll.js') }}"></script>
	
	<!-- Owl JavaScript -->
	<script src="{{ asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>
	
	<!-- Switchery JavaScript -->
	<script src="{{ asset('vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>
	
	<!-- Init JavaScript -->
	<script src="{{ asset('zapily/js/init.js') }}"></script>

	<script>
		fetch('/inbox/{{ $details -> id }}/seen')
		.then(response => response.json())
		.catch( error => console.log(error))
	</script>
	
	@endforeach
	@endforeach
</body>


<!-- Mirrored from hencework.com/theme/zapily/ltr/inbox-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 04:21:11 GMT -->
</html>
