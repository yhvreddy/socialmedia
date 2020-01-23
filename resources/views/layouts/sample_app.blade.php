
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<title>WorkWise Html Template</title>
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
	</style>
</head>

<body class="sign-in" oncontextmenu="return true;">	

	<div class="wrapper">		

		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo" style="margin-bottom: 80px;">
									<img src="{{asset('public/images/cm-logo.png')}}" alt="">
									<!-- <p>Workwise,  is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p> -->
								</div><!--cm-logo end-->	
								<img src="{{asset('public/images/cm-main-img.png')}}" alt="">			
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control" style="margin-bottom: 25px;">
									<li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>				
									<li data-tab="tab-2"><a href="#" title="">Sign up</a></li>				
								</ul>			
								<div class="sign_in_sec current" id="tab-1">
									
									<h3>Sign in</h3>
									<form method="POST" action="{{ route('login') }}">
                        				@csrf
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter login mail id">
													@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
													<i class="la la-user"></i>
												</div><!--sn-field end-->
											</div>
							
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">
													@error('password')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd" style="margin-bottom:5px">
												<div class="checky-sec">
													<!-- <a href="#" title="">Forgot Password?</a> -->
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit" class="pull-right">Sign in</button>
											</div>
										</div>
									</form>
									
								</div><!--sign_in_sec end-->

								<div class="sign_in_sec" id="tab-2">
									<h3>Sign up</h3>
									<form method="POST" id="registerNewAccount" action="{{ route('register') }}">
										@csrf
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="name" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" required>
													<i class="la la-user"></i>
													@error('name')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="email" name="email" placeholder="email id" class="form-control @error('email') is-invalid @enderror" required>
													<i class="la la-envelope"></i>
													@error('email')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="tel" maxlength="10" name="mobile" placeholder="mobile" class="form-control @error('mobile') is-invalid @enderror" required>
													<i class="la la-mobile"></i>
													@error('mobile')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
											</div>
											
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required>
													<i class="la la-lock"></i>
													@error('password')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
											</div>

											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="confirmed" placeholder="Repeat Password" class="form-control @error('confirmed') is-invalid @enderror" required>
													<i class="la la-lock"></i>
													@error('confirmed')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
											</div>
											
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit" class="pull-right">Get Started</button>
											</div>
										</div>
									</form>
								</div>		
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
			
		</div><!--sign-in-page end-->

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

			$("form#registerNewAccount").submit(function(e){
				e.preventDefault();
				var formdata = $('#registerNewAccount').serialize();
				//console.log(formdata);
		

				$.ajax({	
					type:'POST',
					url:"{{ url('registersave') }}",
					data:formdata,
					dataType:'json',
					success:function(data){
						alert(data);
					}
				});
			});

		//});
	</script>
</body>
</html>