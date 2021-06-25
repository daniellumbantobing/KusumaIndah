<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>@yield('title','Home')</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="../../assets/logo/icon.jpeg"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="../../assets/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="../../assets/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="../../assets/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="../../assets/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="../../assets/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="../../assets/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="../../assets/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="../../assets/css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="../../assets/css/responsive.css" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
        @include('layouts_user.navbar')
		<!--blog start-->
		
		<section id="blog" class="blog">
			<div class="container">
				<div class="blog-details">
						<div class="gallary-header text-center">
							<h2>
								Artikel
							</h2>
						</div><!--/.gallery-header-->
						<div class="blog-content">
							<div class="row">
								<div class="col-lg-12 col-lg-12">
									<div class="thumbnail" style="pointer-events: none">
										<h2>{{$artikel->tags}} <span>{{$artikel->created_at}}</span></h2>
										<div class="thumbnail-img">
											&nbsp<img src="{{asset('article/'.$artikel->gbr1)}}" alt="gambar1" style="max-width: 300px">&nbsp
                                            <img src="{{asset('article/'.$artikel->gbr2)}}" alt="" style="max-width: 300px">&nbsp
                                            <img src="{{asset('article/'.$artikel->gbr3)}}" alt="" style="max-width: 300px">&nbsp
                                            <img src="{{asset('article/'.$artikel->gbr4)}}" alt="" style="max-width: 300px">&nbsp
                                            <img src="{{asset('article/'.$artikel->gbr5)}}" alt="" style="max-width: 300px">&nbsp
											<div class="thumbnail-img-overlay"></div><!--/.thumbnail-img-overlay-->
										
										</div><!--/.thumbnail-img--> 
									  
										<div class="caption">
											<div class="blog-txt">
												<h3>
													<a href="#">
														{{$artikel->judul}}
													</a>
												</h3>
												<p>
													{{$artikel->deskripsi}} 
												</p>
											</div><!--/.blog-txt-->
										</div><!--/.caption-->
									</div><!--/.thumbnail-->

								</div><!--/.col-->

							</div><!--/.row-->
						</div><!--/.blog-content-->
					</div><!--/.blog-details-->
				</div><!--/.container-->

		</section><!--/.blog-->
		<!--blog end-->     
        @include('layouts_user.footer')

		<script src="../../assets/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="../../assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="../../assets/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="../../assets/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="../../assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="../../assets/js/jquery.counterup.min.js"></script>
		<script src="../../assets/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="../../assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="../../assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="../../assets/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="../../assets/js/custom.js"></script>
    </body>
</html>