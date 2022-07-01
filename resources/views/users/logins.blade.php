@extends('users.app')
    
@section('content')

<div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{('users')}}">home</a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
</div>

<section class="slider_section d-flex align-items-center" data-bgimg="assets/img/slider/slider3.jpg">
        <div class="slider_area owl-carousel">
        </div>
    </section>
    <!--slider area end-->

    <!--Tranding product-->
    <section class="account">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="account-contents" style="background-image: url('loginn/images/bg2.jpg');">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb">
                                    <h2>TURBO SAKTI</h2>
                                    <p>Penjualan Keripik Singkong</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">
                                    <form action="#">
                                    <h2>LOGIN</h2>
                                        <div class="single-acc-field">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" placeholder="Masukan Email">
                                        </div>
                                        <div class="single-acc-field">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" placeholder="Masukan Password">
                                        </div>
                                        <div class="single-acc-field boxes">
                                            <input type="checkbox" id="checkbox">
                                            <label for="checkbox">Remember me</label>
                                        </div>
                                        <div class="single-acc-field">
                                        <input type="submit" value="Log In" class="btn btn-block btn-warning">
                                        </div>
                                        <button class="btn btn-lg btn-block btn-danger" type="submit"><i class="fa fa-google me-1"></i> Google</button>
                                        <button class="btn btn-lg btn-block  mb-1 btn-primary" type="submit"><i class="fa fa-facebook-f me-1"></i> Facebook</button><br>
                                        <a href="{{ route('forgetpassword.index')}}">Forget Password?</a>
                                        <a href="{{ route('registrasi.index')}}">Registrasi Email</a>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection