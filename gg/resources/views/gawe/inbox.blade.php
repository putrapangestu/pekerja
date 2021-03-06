<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/zapily/ltr/inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 04:16:07 GMT -->
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Inbox | Gawe.Id</title>
	<meta name="description" content="Zapily is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Zapily Admin, Zapilyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('images/favicon/black.png') }}">
	<link rel="icon" href="{{ asset('images/favicon/black.png') }}" type="image/x-icon">
	
	<!-- Bootstrap Wysihtml5 css -->
	<link rel="stylesheet" href="{{ asset('vendors/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.css') }}" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	
	<!-- Custom CSS -->
	<link href="{{ asset('zapily/style.css') }}" rel="stylesheet" type="text/css">
	
</head>

<body>
    <div class="wrapper theme-1-active pimary-color-gold">

        <!-- Main Content -->
		<div class="page-wrapper">
			<div class="container">
				<!-- Title -->	
				<div class="row heading-bg">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					  <h5 class="txt-dark">inbox</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="{{ url('/') }}">Beranda</a></li>
						<li class="active"><span>inbox</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="mail-box">
										<div class="row">
											<aside class="col-lg-3 col-md-4 pr-0">
												<div class="mt-20 mb-20 ml-15 mr-15">
													<a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-danger btn-block">
													Inbox
													</a>
													<!-- Modal -->
													<div aria-hidden="true" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<button aria-hidden="true" data-dismiss="modal" class="close" type="button">??</button>
																	<h4 class="modal-title">Inbox</h4>
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
												<div class="panel-refresh pa-0">
													<div class="refresh-container">
														<div class="la-anim-1"></div>
													</div>
													<div class="panel-heading pt-20 pb-20 pl-15 pr-15">
														<div class="pull-left">
															<h6 class="panel-title txt-dark">inbox</h6>
														</div>
														<div class="pull-right">
															<form action="{{ url('/inbox') }}" method="GET" role="search" class="inbox-search inline-block pull-left mr-15">
																<div class="input-group mb-4">
																	<input type="text" class="form-control" placeholder="Search.." name="search">
																	<span class="input-group-btn">
																	  <button class="btn btn-default" type="submit" ><i class="zmdi zmdi-search"></i></button>
																	</span>
																  </div>
															
																</form>
																<button type="submit" class="pull-left inline-block refresh border-0 bg-transparent"  onClick="document.location.reload(true)">
																	<i class="zmdi zmdi-replay"></i>
																</button>
														</div>
														<div class="clearfix"></div>
													</div>
													<div class="panel-wrapper collapse in">
														<div class="panel-body inbox-body pa-0">
															<div class="mail-option pl-15 pr-15">
																<div class="chk-all">
																	<div class="checkbox checkbox-default inline-block">
																		<input type="checkbox" id="checkbox051"/>
																		<label for="checkbox051"></label>
																	</div>
																	<div class="btn-group">
																		<a data-toggle="dropdown" href="#" class="btn  all" aria-expanded="false">
																		Urutkan
																		<i class="fa fa-angle-down "></i>
																		</a>
																		<ul class="dropdown-menu">
																			<li><a href="/inbox?urutan=terbaru"> Terbaru</a></li>
																			<li><a href="/inbox?urutan=terlama"> Terlama</a></li>
																			
																		</ul>
																	</div>
																	<div class="btn-group">
																		<a data-toggle="dropdown" href="#" class="btn  blue">
																		Pindah ke
																		<i class="fa fa-angle-down "></i>
																		</a>
																		<ul class="dropdown-menu">
																			<li><a href="#">Pribadi</a></li>
																			<li><a href="#">Sosial</a></li>
																			<li class="divider"></li>
																			<li><a href="#">Promosi</a></li>
																			<li class="divider"></li>
																			<li><a href="#">Pembaruan</a></li>
																		</ul>
																	</div>
																	<div class="btn-group">
																		<a data-toggle="dropdown" href="#" class="btn  blue" aria-expanded="false">
																		Lagi
																		<i class="fa fa-angle-down "></i>
																		</a>
																		<ul class="dropdown-menu">
																			<li><a href="#"><i class="fa fa-pencil"></i> Tandai sebagai Membaca</a></li>
																			<li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
																			<li class="divider"></li>
																			<li><a href="#"><i class="fa fa-trash-o"></i> Menghapus</a></li>
																		</ul>
																	</div>
																</div>
																<ul class="unstyled inbox-pagination">
																
																	

																	<li class="mr-20"><span>{{ $email->firstItem() }}-{{ $email->lastItem() }} of {{ $email->total() }}</span></li>
																	<li>
																		{{ $email->links() }}
																	</li>
																</ul>
															</div>
															<div class="table-responsive mb-0">
																@foreach($email as $mails)
																<table class="table table-inbox table-hover mb-0">
																	<tbody>
																		@if ($mails->dari == Auth::user()->email)
																			@if ($mails->seen_dari == 0)
																				<tr class="unread">
																			@elseif ($mails->seen_dari == 1)
																				<tr class="read">
																			@endif
																		@elseif ($mails->untuk == Auth::user()->email)
																			@if ($mails->seen_untuk == 0)
																				<tr class="unread">
																			@elseif ($mails->seen_untuk == 1)
																				<tr class="read">
																			@endif
																		@endif
																		
																			<td class="inbox-small-cells">
																				<div class="checkbox checkbox-default inline-block">
																					<input type="checkbox" id="checkbox012"/>
																					<label for="checkbox012"></label>
																				</div>
																				@if (Route::is('inbox-trash'))
																				@else
																				<form action="{{ url('inbox/'.$mails->id.'/star') }}" method="POST" class="d-inline-block">
																					@csrf
																					@if($mails->dari == Auth::user()->email)
																						@if($mails->star_dari == 0)
																							<input type="hidden" name="star" value="1">
																							<button class="border-0 bg-transparent"><i class="zmdi zmdi-star inline-block font-16"></i></button>
																						@elseif($mails->star_dari == 1)
																							<input type="hidden" name="star" value="0">
																							<button class="border-0 bg-transparent"><i class="zmdi zmdi-star text-danger inline-block font-16"></i></button>
																						@endif
																					@elseif($mails->untuk == Auth::user()->email)
																						@if($mails->star_untuk == 0)
																							<input type="hidden" name="star" value="1">
																							<button class="border-0 bg-transparent"><i class="zmdi zmdi-star inline-block font-16"></i></button>
																						@elseif($mails->star_untuk == 1)
																							<input type="hidden" name="star" value="0">
																							<button class="border-0 bg-transparent"><i class="zmdi zmdi-star text-danger inline-block font-16"></i></button>
																						@endif
																					@endif
																					
																					
																				</form>
																				@endif
																			</td>
																			
																			
																			<td class="view-message dont-show"><a href='{{ url ('inbox/'.$mails->id)}}'>{{ $mails->nama}}</a></td>
																			
																			<td class="view-message " ><a href='{{ url ('inbox/'.$mails->id)}}'>{{ $mails->nama }} tertarik dengan anda silahkan lihat detailnya</a></td>
																		
																			<td class="view-message text-right">
																				<i class="zmdi zmdi-attachment inline-block mr-15 font-16"></i>
																				<span  class="time-chat-history inline-block">{{ $mails->created_at }}</span>
																			</td>
																			
																		</tr>
																	</tbody>
																</table>
																@endforeach
															</div>
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
						<p>2022 &copy; Gawe.Id. Pencipta by Ultramen</p>
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

	<script>
		fetch('inbox/')
	</script>
	<script>
		function reloadpage()
		{
		location.reload()
		}
	</script>
	
</body>


<!-- Mirrored from hencework.com/theme/zapily/ltr/inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Feb 2022 04:16:12 GMT -->
</html>
