@extends('layout.app')

@section('contentLoad')
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2">

          <div class="brand-logo text-center">

          </div><!-- ./brand-logo -->

          <div class="authfy-login">
            <!-- panel-login start -->
            <div class="authfy-panel panel-login text-center active">
              <div class="authfy-heading">
                <h3 class="auth-title">Login to your account</h3>
                <p>Don’t have an account? <a class="lnk-toggler" data-panel=".panel-signup" href="#">Sign Up Free!</a></p>
              </div>
              <!-- social login buttons start -->
              @if(session('errorLogin'))
                <div class="alert alert-danger " role="alert">
                  <p>{{ session('errorLogin') }}</p>
                </div>
              @endif
              @if(session('success'))
                <div class="alert alert-success " role="alert">
                  <p>{{ session('success') }}</p>
                </div>
              @endif

              @if(session('successLogin'))
                <div class="alert alert-success " role="alert">
                  <p>{{ session('successLogin') }}</p>
                </div>
              @endif
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <form name="loginForm" class="loginForm" action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="form-group wrap-input">
                      <input type="text" class="form-control" placeholder="Username" name="usernameLogin">
                      <span class="focus-input"></span>
                    </div>
                    <div class="form-group wrap-input">
                      <div class="pwdMask">
                        <input type="password" class="form-control " name="passwordLogin" placeholder="Password">
                        <span class="focus-input"></span>
                        <span class="fa fa-eye-slash pwd-toggle"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <button class="btn btn-lg btn-primary btn-block" type="submit">Login with email</button>
                    </div>
                  </form>
                </div>
              </div>
            </div> <!-- ./panel-login -->
            <!-- panel-signup start -->
            <div class="authfy-panel panel-signup text-center">
              <div class="row">
                <div class="col-xs-12 col-sm-12">
                  <div class="authfy-heading">
                    <h3 class="auth-title">Sign up for free!</h3>
                  </div>

                  <form name="signupForm" class="signupForm" action="{{route('register')}}" method="POST">
                     @csrf
                    <div class="form-group wrap-input">
                      <input type="email" class="form-control" name="username" id="username" placeholder="Username">
                      <span class="focus-input"></span>
                    </div>
                 
                    <div class="form-group wrap-input">
                      <div class="pwdMask">
                        <input  type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <span class="focus-input"></span>
                        <span class="fa fa-eye-slash pwd-toggle"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <p class="term-policy text-muted small">I agree to the <a href="#">privacy policy</a> and <a href="#">terms of service</a>.</p>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign up</button>
                    </div>
                  </form>
                  <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                </div>
              </div>
            </div> <!-- ./panel-signup -->
            <!-- panel-forget start -->
           
          </div>
        </div>
      </div> <!-- ./row -->
    </div> <!-- ./container -->

  @stop
