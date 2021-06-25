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
		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container-fluid">
				<div class="gallary-header text-center">
					<h2>
						Panduan
					</h2>
				</div><!--/.gallery-header-->
				<div class="packages-content">
                    <div class="row justify-content-between">
                        <div class="col-md-1 col-sm-6">
                            <a href="/PanduanUser/OpenTrip"><button type="button" class="btn btn-light btn-lg" >Open Trip</button></a>
                        </div>
                        <div class="col-md-1 col-sm-6">
                           <a href="/PanduanUser/PrivateTrip"> <button type="button" class="btn btn-light btn-lg" >Private Trip</button></a>
                        </div>
                        <div class="col-md-1 col-sm-6">
                            <a href="/PanduanUser/TravelReguler"><button type="button" class="btn btn-light btn-lg">Travel Reguler</button></a>
                        </div>
                      </div>

                      <hr>
					<div class="row">
						@foreach ($panduan as $pd)
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
                                <div class="form-group" >
                                    {{-- <input type="text" class="form-control" data-toggle="collapse" data-target="#{{$pd->id}}" readonly value="{{$pd->question}}"> --}}
                                    <div class="card" data-toggle="collapse" data-target="#{{$pd->id}}">
                                        <p class="card-header" style="font-size:20px;align-text:right;font-family: poppins;text-align:center">{{$pd->question}}</p>
                                    </div>
                                    <div class="collapse" id="{{$pd->id}}" style="margin-left: 5px;font-family:poppins;"">
                                        <hr>
                                        {{$pd->answer}}
                                    </div>
                                </div>
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						@endforeach

					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end--> 
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