<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="logo-puskesmas.png"/>

	<title>PT Assalaam Finance</title>
	<link href="{{url('HealthCare/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('HealthCare/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{url('HealthCare/css/style.css')}}" rel='stylesheet' type='text/css' />
	<script src="{{url('HealthCare/js/jquery.min.js')}}"></script>
    <link href="{{url('HealthCare/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{url('HealthCare/owl-carousel/owl.theme.css')}}" rel="stylesheet">

</head>
<body>	
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="#" class="logo"><img src="ujikom.png" width="25%" height="30%">&nbsp;&nbsp;&nbsp;</a><font face="garamond" size="250">Payroll Application</font> 
				</div>
				<div class="col-md-6 text-right">
					<span></span></br>
					<strong class="contact-phone"><i class="#"></i><font face="Maiandra GD">PT Assalaam Finance</font></strong>
				</div>
			</div>
		</div>
	</header>
	<!-- Header -->
	
	<!-- /////////////////////////////////////////Navigation -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>

				</button> 
				<a class="navbar-brand" href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="black">Welcome to the payroll application</font>
				</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
                        <a class="page-scroll" href="{{url('/Jabatan')}}">Jabatan</a>
                    </li>
					<li>
                        <a class="page-scroll" href="{{url('/Golongan')}}">Golongan</a>
                    </li>
					<li>
                        <a class="page-scroll" href="{{url('/Kategori_Lembur')}}">Kategori Lembur</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/Pegawai')}}">Pegawai</a>
                    </li>
                   	<li>
                        <a class="page-scroll" href="{{url('/Lembur_Pegawai')}}">Lembur Pegawai</a>
                    </li>
                   			
					

                     <li>
                        <a class="page-scroll" href="{{url('/Tunjangan')}}">Tunjangan</a>
                    </li> <li>
                        <a class="page-scroll" href="{{url('/Tunjangan_Pegawai')}}">Tunjangan Pegawai</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('/Penggajian')}}">Penggajian</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('#')}}">                       </a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{url('#')}}">                       </a>
                    </li><li>
                        <a class="page-scroll" href="{{url('#')}}">                       </a>
                    </li>
				</ul>
			</div>
		</div>
	</nav>
	
		@yield('content');
	</div>
	<!-- Footer -->
	
	<!-- Core JavaScript Files -->
    <script src="{{url('HealthCare/js/bootstrap.min.js')}}"></script>
	<script src="{{url('HealthCare/js/jquery.backTop.min.js')}}"></script>
	<script>
		$(document).ready( function() {
			$('#backTop').backTop({
				'position' : 1200,
				'speed' : 500,
				'color' : 'red',
			});
		});
	</script>
	
	<!-- carousel -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-brand").owlCarousel({
        autoPlay: 3000,
        items : 1,
		itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,2],
		navigation: false,
      });
    });
    </script>
</body>
</html>
	
