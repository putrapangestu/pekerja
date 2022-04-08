<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/zapily/ltr/inbox-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 04:21:11 GMT -->
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Mail</title>
	<meta name="description" content="Zapily is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Zapily Admin, Zapilyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
	<link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
	
	<!-- Bootstrap Wysihtml5 css -->
	<link rel="stylesheet" href="{{ asset('vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.css') }}" />
		
	<!-- Custom CSS -->
	<link href="{{ asset('zapily/style.css') }}" rel="stylesheet" type="text/css">
	
</head>

<body>
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
													<a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-success btn-block">
													Compose
													</a>
													<!-- Modal -->
													<div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
																	<h4 class="modal-title">Compose</h4>
																</div>
																<div class="modal-body">
																	<form role="form" class="form-horizontal">
																		<div class="form-group">
																			<label class="col-lg-2 control-label">To</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="inputEmail1" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Cc / Bcc</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="cc" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Subject</label>
																			<div class="col-lg-10">
																				<input type="text" placeholder="" id="inputPassword1" class="form-control">
																			</div>
																		</div>
																		<div class="form-group">
																			<label class="col-lg-2 control-label">Message</label>
																			<div class="col-lg-10">
																				<textarea class="textarea_editor form-control" rows="15" placeholder="Enter text ..."></textarea>
																			</div>
																		</div>
																		<div class="form-group">
																			<div class="col-lg-offset-2 col-lg-10">
																				<div class="fileupload btn btn-info btn-anim mr-10"><i class="zmdi zmdi-attachment"></i><span class="btn-text">attachments</span>
																					<input type="file" class="upload">
																				</div>
																				
																				<button class="btn btn-success" type="submit">Send</button>
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
													<li class="active">
														<a href="#"><i class="zmdi zmdi-inbox"></i> Inbox <span class="label label-danger ml-10">2</span></a>
													</li>
													<li>
														<a href="#"><i class="zmdi zmdi-email-open"></i> Sent Mail</a>
													</li>
													<li>
														<a href="#"><i class="zmdi zmdi-bookmark-outline"></i> Important</a>
													</li>
													<li>
														<a href="#"><i class="zmdi zmdi-folder-outline"></i> Drafts <span class="label label-info ml-10">30</span></a>
													</li>
													<li>
														<a href="#"><i class="zmdi zmdi-delete"></i> Trash</a>
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
																			<a class="btn btn-sm mr-10" href="#" data-toggle="modal" title="Compose"><i class="zmdi zmdi-chevron-left"></i></a>
																		</div>
																	</div>
																	<div class="pull-right text-right">
																		<button class="btn btn-sm mr-10" title="" type="button" ><i class="zmdi zmdi-print"></i> </button>
																		<button class="btn btn-sm mr-10" title=""><i class="zmdi zmdi-delete"></i></button>
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
																@foreach($rekrut as $details)
																<div class="container-fluid mb-20">	
																	<h4 class="weight-500"> {{ $details->nama }} Indah telah merekrut anda.</h4>
																</div>	
															</div>
															<div class="sender-info">
																<div class="container-fluid">
																	<div class="sender-img-wrap pull-left mr-20">
																		<img class="sender-img" alt="user" src="../img/user1.png">
																	</div>
																	<div class="sender-details   pull-left">
																		<span class="capitalize-font pr-5 txt-dark block font-15 weight-500 head-font">{{ $details->nama }}</span>
																		<span class="block">
																			to
																			<span>me</span>
																		</span>	
																	</div>	
																	<div class="pull-right">
																		<div class="inline-block mr-5">
																			<span class="inbox-detail-time-1 font-12">10:06 AM</span>
																			<span class="inbox-detail-time-2 font-12 inline-block">(2 hours ago)</span>
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
																		<td>: Senin-Sabtu</td>
																	</tr>
																	<tr>
																		<td>Jam Kerja</td>
																		<td>: {{ $details->jam }}</td>
																	</tr>
																	</table>
																	Untuk syarat dan ketentuan yang ada diperusahaan akan kami catumkan dibawah.
																</p><br>
																<p>Terimakasih atas waktu luangnya dan saya berharap semoga kita menjadi satu rekan bisnis.</p>
															</div>
															<hr class="light-grey-hr mt-20 mb-20"/>
															<div class="container-fluid attachment-mail mt-40 mb-40">
																<div class="download-blocks mb-20">
																	<span class="pr-15"><i class="zmdi zmdi-attachment-alt pr-10"></i>3 attachments</span>
																	<a href="#"><i class="zmdi zmdi-download pr-10"></i>Download</a>
																</div>
																<ul>
																	<li>
																		<a href="#" class="atch-thumb">
																			<div class="attached-img-container" style="background-image:url({{ asset('images/resources/pdf.png') }})"></div>
																			<div class="file-name">
																				Profile-perusahaan.pdf
																			</div>
																		</a>
																	</li>
																	<li>
																		<a href="#" class="atch-thumb">
																			<div class="attached-img-container" style="background-image:url({{ asset('images/resources/pdf.png') }})"></div>
																			<div class="file-name">
																				Syarat-ketentuan.pdf
																			</div>
																		</a>
																	</li>
																	<li>
																		<a href="#" class="atch-thumb">
																			<div class="attached-img-container" style="background-image:url({{ asset('images/resources/word.png') }})"></div>
																			<div class="file-name">
																				Kontrak.docx
																			</div>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
														@endforeach
														<div class="container-fluid float-right">  
															<a href="mail.html"><button class="btn  btn-success btn-inline btn-rounded">Terima</button></a>
															<a href="mail.html"><button class="btn  btn-danger btn-inline btn-rounded">Tolak</button></a>
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


<!-- Mirrored from hencework.com/theme/zapily/ltr/inbox-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 04:21:11 GMT -->
</html>
