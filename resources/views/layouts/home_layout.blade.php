
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
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
		nav{
			width:55% !important;
		}
		.user-info {
			padding: 15px 30px 15px 10px !important;
		}
		.user-account{
			width: fit-content !important;
		}
		.user-info > i {
			top: 58% !important;
		}
	</style>
</head>

<body oncontextmenu="return true;">

	<div class="wrapper">
		<header>
			<div class="container">
				<div class="header-data">
					<div class="logo">
						<a href="index.html" title=""><img src="{{ asset('public/images/logo.png')}}" alt=""></a>
					</div><!--logo end-->
					<div class="search-bar">
						<form>
							<input type="text" name="search" placeholder="Search...">
							<button type="submit"><i class="la la-search"></i></button>
						</form>
					</div><!--search-bar end-->
					<nav>
						<ul>
							<li>
								<a href="#" title="">
									<span><img src="{{asset('public/images/icon1.png')}}" alt=""></span>
									Home
								</a>
							</li>
							<li>
								<a href="companies.html" title="">
									<span><img src="{{asset('public/images/icon4.png')}}" alt=""></span>
									Friends
								</a>
							</li>

							<li>
								<a href="#" title="" class="not-box-openm">
									<span><img src="{{asset('public/images/icon6.png')}}" alt=""></span>
									Messages
								</a>
								<div class="notification-box msg" id="message">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img1.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a> </h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img3.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a></h3>
							  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="view-all-nots">
						  					<a href="messages.html" title="">View All Messsages</a>
						  				</div>
									</div><!--nott-list end-->
								</div><!--notification-box end-->
                            </li>

							<li>
								<a href="#" title="" class="not-box-open">
									<span><img src="{{asset('public/images/icon7.png')}}" alt=""></span>
									Notification
								</a>
								<div class="notification-box noti" id="notification">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img1.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img3.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img2.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
							  					<span>2 min ago</span>
							  				</div><!--notification-info -->
						  				</div>
						  				<div class="view-all-nots">
						  					<a href="#" title="">View All Notification</a>
						  				</div>
									</div><!--nott-list end-->
								</div><!--notification-box end-->
							</li>
						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
							<!-- <img src="{{asset('public/images/resources/user.png')}}" alt=""> -->
							<a href="#" title="">{{ Auth::user()->name }}</a>
							<i class="la la-sort-down"></i>
						</div>
						<div class="user-account-settingss" id="users">
							<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="padding: 20px;font-size: 18px;">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div><!--user-account-settingss end-->
					</div>				</div><!--header-data end-->
			</div>
		</header><!--header end-->

		<main>
			<div class="main-section">
				@yield('content')
			</div>
		</main>



		<div class="post-popup job_post" id="job_post">
			<div class="post-project">
				<h3>Create Post</h3>
				<div class="post-project-fields">
					<form method="POST" action="{{ url('uploadpost') }}" enctype="multipart/form-data" id="SubmitPost">
						<div class="row">
                            {{ csrf_field() }}
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
                            </div>
                            <div class="col-lg-12">
								<input type="file" class="form-control" name="select_file">
							</div>
							<div class="col-lg-12">
								<ul>
                                    <li><a href="#" title="">Cancel</a></li>
									<li><button class="active" type="submit" value="post">Post</button></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->





	</div><!--theme-layout end-->



    <script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.mCustomScrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/lib/slick/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/scrollbar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/script.js') }}"></script>
    <script>
        $(document).ready(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var _token = $('meta[name="csrf-token"]').attr('content');

            //load_data('',_token);

            /*function load_data(id='',){
                $.ajax({
                    url: "{{route('loadmore.load_data')}}",
                    method:'POST',
                    data:{id:id,_token:_token},
                    success:function (data) {
                       console.log(data);
                       $('#load_more_button').remove();
                       $("#AppendLoadPosts").append(data);
                    }
                })
            }*/


            var lastpost = '';

            $('#SubmitPost').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:"{{ url('uploadpost') }}",
                    method:"POST",
                    data:new FormData(this),
                    dataType:'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                        console.log(data);
                        if(data.responsive != 0)
                        {
                           $('#SubmitPost').trigger("reset");
                           $('#job_post').removeClass("active");
                           $('.wrapper').removeClass('overlay');
                        }else{
                            $('#SubmitPost').trigger("reset");
                            $('#job_post').removeClass("active");
                            $('.wrapper').removeClass('overlay');
                        }
                    }
                })
            });


            /*$(document).on('click', '#load_more_button', function(){
                var id = $(this).data('id');
                $('#load_more_button').html('<b>Loading...</b>');
                load_data(id, _token);
            });*/
        });
    </script>
</body>
</html>
