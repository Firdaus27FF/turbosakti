@extends('users.app')
    
@section('content')

<div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{('users')}}">home</a></li>
                            <li>Registrasi</li>
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
    <section class="account">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="account-contents" style="background-image: url('loginn/images/bg2.jpg');">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-10">
                                <div class="account-thumb">
                                    <h2>TURBO SAKTI</h2>
                                    <p>Penjualan Keripik Singkong</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">
                                <h2>DAFTAR</h2>
                                    <form action="#">
                                        <div class="single-acc-field">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" placeholder="Masukan Nama">
                                        </div>
                                        <div class="single-acc-field">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" placeholder="Masukan Email">
                                        </div>
                                        <div class="single-acc-field">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" placeholder="Masukan Password">
                                        </div>
                                        <div class="single-acc-field">
                                            <label for="handphone">Handphone</label>
                                            <input type="number" id="handphone" placeholder="Masukan Nomor Hp">
                                        </div>
                                        <div class="single-acc-field boxes">
                                            <input type="checkbox" id="checkbox">
                                            <label for="checkbox">I'm not a robot</label>
                                        </div>                            
                                        <input type="submit" value="Register Now" class="btn btn-block btn-warning">                                        
                                        
                                        <input type="submit" value="Log In" class="btn btn-block btn-warning">
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!--Tranding product-->

@endsection