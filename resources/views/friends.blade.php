@extends('layouts.home_layout')
@section('title', 'Friends Page')
@section('content')
<style>
    .companies-info {
        padding: 20px 0;
    }
</style>
@if(count($requests) != 0)
    <section class="companies-info">
        <div class="container">
            
            <div class="row">
                <div class="company-title">
                    <h3>Friends List</h3>
                </div><!--company-title end-->
                <div class="companies-list">
                    <div class="row">
                        @if(count($suggestfriends) != 0)
                            @foreach($suggestfriends as $key => $suggestfriend)
                                @if(in_array($suggestfriend->id,$requests))
                                    <div class="col-lg-3 col-md-4 col-sm-6" id="request_{{$suggestfriend->id}}">
                                        <div class="company_profile_info">
                                            <div class="company-up-info">
                                                @if($suggestfriend->image != '')
                                                    <img src="{{asset($suggestfriend->image)}}" alt="">
                                                @else
                                                    <img src="{{asset('public/images/avatar.jpg')}}" alt="">
                                                @endif
                                                <h3>{{$suggestfriend->name}}</h3>
                                                <h4>{{$suggestfriend->email}}</h4>
                                                <ul>
                                                    <li><a href="#" title="" class="follow">Profile</a></li>
                                                    <li><a href="#" title="" class="message-us">Remove friend</a></li>
                                                </ul>
                                            </div>
                                        </div><!--company_profile_info end-->
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div><!--companies-list end-->
            </div>

        </div>
    </section><!--Friends list-info end-->
@endif

<section class="companies-info">
    <div class="container">
        
        <div class="row">
            <div class="company-title">
                <h3>Suggest Friends</h3>
            </div><!--company-title end-->
            <div class="companies-list">
                <div class="row">
                    <div class="col-md-12">
                        @if(count($suggestfriends) != 0)
                            
                            @foreach($suggestfriends as $key => $suggestfriend)
                                @if(!in_array($suggestfriend->id,$requests))
                                    <div class="col-md-4 full-width suggestion-usd" id="request_{{$suggestfriend->id}}">
                                        @if($suggestfriend->image != '')
                                            <img src="{{asset($suggestfriend->image)}}" alt="" style="max-width: 15%;">
                                        @else
                                            <img src="{{asset('public/images/avatar.jpg')}}" alt="" style="max-width: 15%;">
                                        @endif
                                        <div class="sgt-text">
                                            <h4>{{$suggestfriend->name}}</h4>
                                            <span>{{$suggestfriend->email}}</span>
                                        </div>
                                        <span onclick="sendrequest('{{$suggestfriend->id}}','{{Auth::user()->id}}')"><i class="la la-plus" id="send_{{$suggestfriend->id}}"></i></span>
                                    </div>
                                @endif
                            @endforeach
                                    
                        @endif
                    </div>
                </div>
            </div><!--companies-list end-->
        </div>

    </div>
</section><!--Suggest Friends list-info end-->

@endsection
