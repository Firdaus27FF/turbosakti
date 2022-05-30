@extends('users.app')
    
@section('content')
<section class="slider_section d-flex align-items-center" data-bgimg="assets/img/slider/slider3.jpg">
        <div class="slider_area owl-carousel">
        </div>
    </section>
    <!--slider area end-->

    <!--Tranding product-->
    <section class="pt-30 pb-30 gray-bg">
        <div class="container">
            <div class="row">
                <!-- <div class="col text-center"> -->
                    <div class="section-title">
                        <h4>Selamat Datang Di Website Turbo Sakti Manding!</h4>
                    </div>
                <!-- </div> -->
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-1 col-12">
                    <div class="single-tranding">
                            <div class="tranding">
                                <img width="400px" src="{{ asset('user/assets/img/product/tranding-1.jpg')}}" alt="" >
                            </div>
                        <a href="{{ route('detailproduk.index')}}">
                            <div class="tranding-pro-title">
                                <h5>Keripik Singkong Rasa Bawang Putih Original</h5>
                                <!-- <h4>Drone</h4> -->
                            </div>
                            <div class="tranding-pro-price">
                                <div class="price_box">
                                    <span class="current_price">Rp.2.000</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-1 col-12">
                    <div class="single-tranding">
                            <div class="tranding">
                                <img width="360px" src="{{ asset('user/assets/img/product/tranding-4.jpg')}}" alt="">
                            </div>
                        <a href="{{ route('detailproduk2.index')}}">
                            <div class="tranding-pro-title">
                                <h5>Keripik Singkong Pedas Manis warna Kuning</h5>
                            </div>
                            <div class="tranding-pro-price">
                                <div class="price_box">
                                    <span class="current_price">Rp.2.000</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-1 col-12">
                    <div class="single-tranding">
                        <div class="tranding">
                                <img width="400px" src="{{ asset('user/assets/img/product/tranding-2.jpg')}}" alt="" >
                            </div>
                        <a href="{{ route('detailproduk3.index')}}">
                            <div class="tranding-pro-title">
                                <h5>Keripik Singkong Rasa Bawang Putih Original warna kuning</h5>
                                <!-- <h4>Drone</h4> -->
                            </div>
                            <div class="tranding-pro-price">
                                <div class="price_box">
                                    <span class="current_price">Rp.5.000</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-30 pb-30 gray-bg">
        <div class="container">
            <div class="row">
                <!-- <div class="col text-center"> -->
                    <div class="section-title">
                    </div>
                <!-- </div> -->
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-1 col-12">
                    <div class="single-tranding">
                            <div class="tranding">
                                <img width="400px" src="{{ asset('user/assets/img/product/tranding-1.jpg')}}" alt="" >
                            </div>
                        <a href="{{ route('detailproduk.index')}}">
                            <div class="tranding-pro-title">
                                <h5>Keripik Singkong Rasa Bawang Putih Original</h5>
                                <!-- <h4>Drone</h4> -->
                            </div>
                            <div class="tranding-pro-price">
                                <div class="price_box">
                                    <span class="current_price">Rp.2.000</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-1 col-12">
                    <div class="single-tranding">
                            <div class="tranding">
                                <img width="360px" src="{{ asset('user/assets/img/product/tranding-4.jpg')}}" alt="">
                            </div>
                        <a href="{{ route('detailproduk2.index')}}">
                            <div class="tranding-pro-title">
                                <h5>Keripik Singkong Pedas Manis warna Kuning</h5>
                            </div>
                            <div class="tranding-pro-price">
                                <div class="price_box">
                                    <span class="current_price">Rp.2.000</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-1 col-12">
                    <div class="single-tranding">
                        <div class="tranding">
                                <img width="400px" src="{{ asset('user/assets/img/product/tranding-2.jpg')}}" alt="" >
                            </div>
                        <a href="{{ route('detailproduk3.index')}}">
                            <div class="tranding-pro-title">
                                <h5>Keripik Singkong Rasa Bawang Putih Original warna kuning</h5>
                                <!-- <h4>Drone</h4> -->
                            </div>
                            <div class="tranding-pro-price">
                                <div class="price_box">
                                    <span class="current_price">Rp.5.000</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    @endsection