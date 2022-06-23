<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('loginn/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('loginn/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('loginn/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('loginn/css/style.css')}}">

    <title>Login Admin</title>
  </head>
  <body>
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('loginn/images/bg2.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Welcome To Website Turbo Sakti Manding</strong></h3>
            <div>
                <h1>login</h1>
            </div>
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <div class="form-group first">
                <label for="email">{{ __('Email Address') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email" id="email" name="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group last mb-3">
                <label for="password">{{ __('Password') }}</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password" id="password" name="password">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">{{ __('Remember Me') }}</span>
                  <input type="checkbox" checked="checked" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-warning">
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{ asset('loginn/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('loginn/js/popper.min.js')}}"></script>
    <script src="{{ asset('loginn/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('loginn/js/main.js')}}"></script>
  </body>
</html>