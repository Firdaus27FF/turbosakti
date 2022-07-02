@extends('users.app')
@section ('content')

<div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{('users')}}">home</a></li>
                            <li>Detail Produk</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
</div>
    
<div class="product_details mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                            <a href="#">
                            <div class="product-turbo">
                                <img  src="{{ asset('user/assets/img/product/www.jpeg')}}" data-zoom-image="assets/img/product/www.jpeg" alt="big-1">
                            </a>
                            </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01"></ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#"> 
                            <h1>Rasa Bawang Putih Original </h1>
                            <div class=" product_ratting">
                            </div>
                            <div class="price_box">
                                    <h4><span class="current_dark">Rp. 2000</span></h4>  
                            </div>
                            <div class="product_desc">
                                <ul>
                                    <li>130 Gram</li>
                                    <li>Gurih</li>
                                    <li>Renyah</li>
                                </ul>
                                <p>Keripik ini memiliki produk yang sangat berkualitas 100% halal dan bagus. Dengan rasa bawang putih original yang masih bagus.</p>
                            </div>
                            <div class="product_variant quantity">
                                <label>Kuantitas</label>
                                <input min="1" max="100" value="1" type="number">
                                <div class="col-md-6 card-header text-end">
                                    <a class="btn btn-warning mb-2 text-light" href="{{route('pemesanan.create')}}">
                                        Langsung Beli Sekarang
                                    </a>
                                </div>                            
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    @endsection