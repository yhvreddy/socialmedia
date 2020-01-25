@extends('layouts.app')

@section('content')
<div class="sign-in-page">
    <div class="signin-popup">
        <div class="signin-pop">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cmp-info">
                        <div class="sign_in_sec current" id="tab-2">
                            <h3>Sign up</h3>
                            <form method="POST" id="registerNewAccounts" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 no-pdd">
                                        <div class="sn-field">
                                            <!-- <input type="text" name="name" placeholder="Full Name" class="form-control @error('name') is-invalid @enderror" required> -->
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Name">
                                            <i class="la la-user"></i>
                                            
                                        </div>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 no-pdd">
                                        <div class="sn-field">
                                            <!-- <input type="email" name="email" placeholder="email id" class="form-control @error('email') is-invalid @enderror" required> -->

                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email id">

                                            <i class="la la-envelope"></i>
                                            
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 no-pdd">
                                        <div class="sn-field">
                                            <!-- <input type="tel" maxlength="10" name="mobile" placeholder="mobile" class="form-control @error('mobile') is-invalid @enderror" required> -->

                                            <input id="mobile" type="tel" maxlength="10" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" placeholder="Enter Mobile Number">

                                            <i class="la la-mobile"></i>
                                            
                                        </div>
                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-lg-12 no-pdd">
                                        <div class="sn-field">
                                            <!-- <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required> -->

                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Password">

                                            <i class="la la-lock"></i>
                                            
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 no-pdd">
                                        <div class="sn-field">
                                            <!-- <input type="password" name="confirmed" placeholder="Repeat Password" class="form-control @error('confirmed') is-invalid @enderror" required> -->
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="ReEnter Pasword">

                                            <i class="la la-lock"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 no-pdd">
                                        <button type="submit" value="submit" class="pull-right">Get Started</button>
                                    </div>
                                </div>
                            </form>
                        </div>			
                    </div><!--cmp-info end-->
                </div>
                <div class="col-lg-6">
                    <div class="login-sec">
                        <!-- <ul class="sign-control" style="margin-bottom: 25px;">
                            <li data-tab="tab-1" class="current"><a href="#" title="">Sign in</a></li>				
                            <li data-tab="tab-2"><a href="#" title="">Sign up</a></li>				
                        </ul>	 -->

                        <div class="cm-logo" style="margin-bottom: 10px;">
                            <img src="{{asset('public/images/cm-logo.png')}}" alt="">
                            <!-- <p>Workwise,  is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p> -->
                        </div><!--cm-logo end-->

                        <div class="sign_in_sec current" id="tab-1">
                            
                            <h3>Sign in</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 no-pdd">
                                        <div class="sn-field">
                                            <!-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus > -->

                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter login mail id">
                                            
                                            <i class="la la-user"></i>
                                        </div><!--sn-field end-->
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="col-lg-12 no-pdd">
                                        <div class="sn-field">
                                            <!-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> -->
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">
                                            
                                            <i class="la la-lock"></i>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 no-pdd" style="margin-bottom:5px">
                                        <div class="checky-sec">
                                            <div class="fgt-sec">
                                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label for="remember">
                                                    <span></span>
                                                </label>
                                                <small>Remember me</small>
                                            </div>
                                            <!-- <a href="#" title="">Forgot Password?</a> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-12 no-pdd">
                                        <button type="submit" value="submit" class="pull-right">Sign in</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div><!--sign_in_sec end-->

                                
                    </div><!--login-sec end-->
                </div>
            </div>		
        </div><!--signin-pop end-->
    </div><!--signin-popup end-->
</div><!--sign-in-page end-->
@endsection
