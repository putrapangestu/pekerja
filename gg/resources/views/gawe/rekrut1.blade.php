<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from hencework.com/theme/zapily/ltr/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 04:22:36 GMT -->
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Gawe.Id</title>
		<meta name="description" content="Zapily is a responsive HTML5 admin template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Zapily Admin, Zapilyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<!-- vector map CSS -->
		<link href="{{ asset('vendors/bower_components/jquery-wizard.js/css/wizard.css') }}" rel="stylesheet" type="text/css"/>
		
		<!-- jquery-steps css -->
		<link rel="stylesheet" href="{{ asset('vendors/bower_components/jquery.steps/demo/css/jquery.steps.css') }}">
		
		
		
		<!-- Data table CSS -->
		<link href="{{ asset('vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
		
		<!-- bootstrap-touchspin CSS -->
		<link href="{{ asset('vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css"/>
		
		{{-- Bootstrap CSS --}}
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<!-- Custom CSS -->
		<link href="{{ asset('zapily/style.css') }}" rel="stylesheet" type="text/css">
	</head>
	<body>
		@foreach($profiles as $pp)

		<div class="wrapper theme-1-active pimary-color-gold">
			
			<!-- Main Content -->
			<div class="page-wrapper">
			<div class="container">
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">

									@if(session()->has('loginerror'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginerror') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif

								<form class="login-form" method="POST" action="{{ url('merekrut/'.$pp->email) }}">
									@csrf
									<div class="pull-left">
										<h6 class="panel-title txt-dark"><h2>Form Perekrutan</h2></h6>
									</div>
									<div class="clearfix"></div>
									<div class="panel-wrapper collapse in">
										<div class="panel-body">
											<div id="example-basic">
												<h3><span class="head-font capitalize-font bg-primary d-block px-5 py-2 rounded my-4">Data Perusahaan</span></h3>
												<section>
													<fieldset>
														<div class="row">
															<div class="col-sm-12">
																<div class="form-wrap">
																	<div class="form-group">
																		<label class="control-label mb-10" for="nama">Nama Perusahaan:</label>
																		<input id="nama" type="text" name="nama" class="form-control required" value="" required />
																	</div>
																	<div class="form-group">
																		<label class="control-label mb-10" for="alamat">Alamat:</label>
																		<input id="alamat"  type="text" name="alamat" class="form-control required" value="" required />
																	</div>
																	<div class="form-group">
																		<label class="control-label mb-10" for="provinsi">Provinsi:</label>
																		<input id="provinsi"  type="text" name="provinsi" class="form-control required" value="" required />
																	</div>
																	<div class="form-group">
																		<label class="control-label mb-10" for="kota">Kota:</label>
																		<input id="kota"  type="text" name="kota" class="form-control required" value="" required />
																	</div>
																	
																	
																	<div class="form-group">
																		<label class="control-label mb-10" for="no">No Perusahaan:</label>
																		<input id="no" type="text" name="no"  data-mask="" class="form-control required" value="" required />
																	</div>
																	<div class="form-group">
																		<label class="control-label mb-10" for="telpon">Nomor telepon:</label>
																		<input type="text" id="telpon"  data-mask="" name="telpon" class="form-control required" value="" required />
																	</div>
																	<div class="form-group">
																		<label class="control-label mb-10" for="email">Email Perusahaan:</label>
																		<input id="email" type="email" name="email" class="form-control required" value="" required />
																	</div>
																</div>
															</div>
														</div>
													</fieldset>
												</section>
												<h3><span class="head-font capitalize-font bg-primary d-block px-5 py-2 rounded my-4">Informasi</span></h3>
												<section>
													<fieldset>
														<!--CREDIT CART PAYMENT-->
														<div class="row">
															<div class="col-sm-12">
																<div class="form-group">
																	<label class="control-label mb-10" for="posisi">Posisi Kerja:</label>
																	<input type="text" id="posisi" data-mask="" class="form-control required" name="posisi" value="" required />
																</div>
																<div class="form-group">
																	<label class="control-label mb-10" for="hari">Hari Kerja:</label>
																	<input type="text" name="hari" id="hari" class="form-control " required>
																</div>
																<div class="form-group">
																	<label class="control-label mb-10" for="jam">Jam kerja/hari:</label>
																	<input type="text" id="jam" data-mask="" class="form-control required" name="jam" value="" required />
																</div>
																<div class="form-group">
																	<label class="control-label mb-10" for="gaji">Gaji/bulan:</label>
																	<input type="text" id="gaji" class="form-control  required" data-mask="" name="gaji" value="" required />
																</div>
																<div class="form-group">
																	<label class="control-label mb-10" for="informasi">Informasi Tambahan:</label>
																	<textarea name="informasi" id="informasi" cols="" rows="" class="form-control required"></textarea>
																</div>
																<div class="form-group mb-0">
																	<div class="row">
																		<div class="col-md-12">
																			<div class="clearfix"></div>
																		</div>
																	</div>
																</div>
																
															</div>
														</div>
														<!--CREDIT CART PAYMENT END-->
													</fieldset>
												</section>
											</section>
												


												<a href="#ModalSend" data-toggle="modal" title="Compose" class="btn btn-success rounded">Selesai</a>
												<!-- Modal -->
												<div aria-hidden="true" role="dialog" tabindex="-1" id="ModalSend" class="modal fade" style="display: none;">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title">Rekrut Pekerja</h5>
															</div>
															<div class="modal-body">
																Apakah anda yakin ingin merekrut pekerja ini?
															</div>
															<div class="modal-footer">
																	<button type="submit" class="btn btn-success btn-inline rounded">Yakin</button>
																	<button aria-hidden="true" data-dismiss="modal" class="btn btn-danger btn-inline rounded" type="button">tidak</button>
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
								</form>
							</div>
						</div>
					</div>
					<!-- /Row -->
	
				</div>
				
			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
						<p>2022 &copy; Gawe.Id Pampered by Ultramen</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->
				
			</div>
			<!-- /Main Content -->
		</div>
		@endforeach
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		{{-- <script src="{{ asset('vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="{{ asset('vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>		
		
		<!-- Form Wizard JavaScript -->
		<script src="{{ asset('vendors/bower_components/jquery.steps/build/jquery.steps.min.js') }}"></script>
		<script src="../../../../ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
		
		<!-- Form Wizard Data JavaScript -->
		<script src="{{ asset('zapily/js/form-wizard-data.js') }}"></script>
		
		<!-- Data table JavaScript -->
		<script src="{{ asset('vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
		
		<!-- Bootstrap Touchspin JavaScript -->
		<script src="{{ asset('vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
		
		<!-- Starrr JavaScript -->
		<script src="{{ asset('zapily/js/starrr.js') }}"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="{{ asset('zapily/js/jquery.slimscroll.js') }}"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="{{ asset('zapily/js/dropdown-bootstrap-extended.js') }}"></script>
		
		<!-- Owl JavaScript -->
		<script src="{{ asset('vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>
	
		<!-- Switchery JavaScript -->
		<script src="{{ asset('vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>
	
		<!-- Init JavaScript -->
		<script src="{{ asset('zapily/js/init.js') }}"></script>
			 --}}



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
	</body>

<!-- Mirrored from hencework.com/theme/zapily/ltr/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 04:22:40 GMT -->
</html>