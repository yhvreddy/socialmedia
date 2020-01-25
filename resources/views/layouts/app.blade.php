
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<title>{{ 'Workwise SocialMedia' }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/line-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/line-awesome-font-awesome.min.css')}}">
	<link href="{{ asset('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/lib/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/lib/slick/slick-theme.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/responsive.css')}}">
    <!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
		.sign_in_sec form button{
			margin-top:0px !important;
		}
        .cmp-info {
            padding: 70px 5px 25px 5px;
        }
	</style>
</head>

<body class="sign-in" oncontextmenu="return true;">	

	<div class="wrapper">		
        @yield('content')
	</div><!--theme-layout end-->

    <script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/lib/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/scrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/script.js') }}"></script>
	<script type="text/javascript">
		//$(document).ready(function(){

			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			// $("form#registerNewAccount").submit(function(e){
			// 	e.preventDefault();
			// 	var formdata = $('#registerNewAccount').serialize();
			// 	//console.log(formdata);
		

			// 	$.ajax({	
			// 		type:'POST',
			// 		url:"{{ url('registersave') }}",
			// 		data:formdata,
			// 		dataType:'json',
			// 		success:function(data){
			// 			alert(data);
			// 		}
			// 	});
			// });

		//});
	</script>
</body>
</html>