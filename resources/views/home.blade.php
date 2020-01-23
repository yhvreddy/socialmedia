@extends('layouts.home_layout')
@section('title', 'Home Page')
@section('content')
<div class="container">
    <div class="main-section-data">
        <div class="row">

            <div class="col-lg-4 col-md-4 pd-left-none no-pd">
                <div class="main-left-sidebar no-margin">
                    <div class="user-data full-width">
                        <div class="user-profile">
                            <div class="username-dt">
                                <div class="usr-pic">
                                    @if(Auth::user()->image != '')
                                        <img src="{{asset(Auth::user()->image)}}" alt="">
                                    @else
                                        <img src="{{asset('public/images/avatar.jpg')}}" alt="">
                                    @endif
                                </div>
                            </div><!--username-dt end-->
                            <div class="user-specs">
                                <h3>{{Auth::user()->name}}</h3>
                                <span>{{Auth::user()->email}}</span>
                            </div>
                        </div><!--user-profile end-->

                    </div><!--user-data end-->
                    <div class="suggestions full-width">
                        <div class="sd-title">
                            <h3>Suggest Friends</h3>
                            <i class="la la-ellipsis-v"></i>
                        </div><!--sd-title end-->
                        <div class="suggestions-list">
                            <div class="suggestion-usd">
                                <img src="images/resources/s1.png" alt="">
                                <div class="sgt-text">
                                    <h4>Jessica William</h4>
                                    <span>Graphic Designer</span>
                                </div>
                                <span><i class="la la-plus"></i></span>
                            </div>
                            <div class="suggestion-usd">
                                <img src="images/resources/s2.png" alt="">
                                <div class="sgt-text">
                                    <h4>John Doe</h4>
                                    <span>PHP Developer</span>
                                </div>
                                <span><i class="la la-plus"></i></span>
                            </div>
                            <div class="suggestion-usd">
                                <img src="images/resources/s3.png" alt="">
                                <div class="sgt-text">
                                    <h4>Poonam</h4>
                                    <span>Wordpress Developer</span>
                                </div>
                                <span><i class="la la-plus"></i></span>
                            </div>
                            <div class="suggestion-usd">
                                <img src="images/resources/s4.png" alt="">
                                <div class="sgt-text">
                                    <h4>Bill Gates</h4>
                                    <span>C & C++ Developer</span>
                                </div>
                                <span><i class="la la-plus"></i></span>
                            </div>
                            <div class="suggestion-usd">
                                <img src="images/resources/s5.png" alt="">
                                <div class="sgt-text">
                                    <h4>Jessica William</h4>
                                    <span>Graphic Designer</span>
                                </div>
                                <span><i class="la la-plus"></i></span>
                            </div>
                            <div class="suggestion-usd">
                                <img src="images/resources/s6.png" alt="">
                                <div class="sgt-text">
                                    <h4>John Doe</h4>
                                    <span>PHP Developer</span>
                                </div>
                                <span><i class="la la-plus"></i></span>
                            </div>
                            <div class="view-more">
                                <a href="#" title="">View More</a>
                            </div>
                        </div><!--suggestions-list end-->
                    </div><!--suggestions end-->
                    <div class="tags-sec full-width">
                        <div class="cp-sec">
                            <img src="{{asset('public/images/logo2.png')}}" alt="">
                            <p><img src="images/cp.png" alt="">Copyright @ {{date('Y')}}</p>
                        </div>
                    </div><!--tags-sec end-->
                </div><!--main-left-sidebar end-->
            </div>

            <div class="col-lg-8 col-md-8 no-pd">
                <div class="main-ws-sec">
                    <div class="post-topbar">
                        <div class="user-picy">
                            @if(Auth::user()->image != '')
                                <img src="{{asset(Auth::user()->image)}}" alt="">
                            @else
                                <img src="{{asset('public/images/avatar.jpg')}}" alt="">
                            @endif
                        </div>
                        <div class="post-st">
                            <ul>
                                <li><a class="post-jb active" href="#" title="">Create Post</a></li>
                            </ul>
                        </div><!--post-st end-->
                    </div><!--post-topbar end-->
                    <div class="alert" id="message" style="display: none"></div>
                    <span id="uploaded_image"></span>
                    @if(Session()->has('success'))
                        <div class="alert alert-success">{{Session('success')}}</div>
                    @endif
                    @if(Session()->has('failed'))
                        <div class="alert alert-warning">{{Session('failed')}}</div>
                    @endif
                    <div class="posts-section">

                        <div id="AppendLastPost"></div>

                        <div id="AppendLoadPosts"></div>

                        @if(count($postdata) > 0)
                            @foreach($postdata as $value)
                                <div class="post-bar">
                                    <div class="post_topbar">
                                        <div class="usy-dt">
                                            @if(Auth::user()->image != '')
                                                <img src="{{asset(Auth::user()->image)}}" alt="" style="max-width: 15%;">
                                            @else
                                                <img src="{{asset('public/images/avatar.jpg')}}" style="max-width: 15%;" alt="">
                                            @endif
                                            <div class="usy-name">
                                                <h3>John Doe</h3>
                                                <span><img src="{{asset('public/images/clock.png')}}" alt=""> {{daysago(date('Y-m-d',strtotime($value->created_at)))}} </span>
                                            </div>
                                        </div>
                                        <!--<div class="ed-opts">
                                            <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                            <ul class="ed-options">
                                                <li><a href="#" title="">Edit Post</a></li>
                                                <li><a href="#" title="">Delete</a></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="job_descp">
                                        @if(!empty($value->image))
                                            <img src="{{$value->image}}" class="img-fluid mt-3 mb-2">
                                        @endif
                                        <p>{{$value->description}}</p>
                                    </div>
                                    <div class="job-status-bar">
                                        <ul class="like-com">
                                            <li>
                                                <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                <img src="{{asset('public/images/liked-img.png')}}" alt="">
                                                <span>25</span>
                                            </li>
                                            <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                        </ul>
                                        <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                    </div>
                                </div>
                        @endforeach
                    @endif

                        <!--post-bar-->

                        <!--post-bar end-->

                        <!-- <div class="process-comm">
                            <div class="spinner">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div> -->
                        <!--process-comm end-->
                    </div><!--posts-section end-->
                </div><!--main-ws-sec end-->
            </div>

        </div>
    </div><!-- main-section-data end-->
</div>

    <?php
        function daysago($date = NULL) {
        $timestamp = strtotime($date);

        $strTime = array("second", "min", "hour", "day", "month", "year");
        $length = array("60","60","24","30","12","10");

        $currentTime = time();
        if($currentTime >= $timestamp) {
            $diff = time()- $timestamp;
            for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
                $diff = $diff / $length[$i];
            }

            $diff = round($diff);
            return $diff . " " . $strTime[$i] . "(s) ago ";
        }
    }
    ?>

@endsection
