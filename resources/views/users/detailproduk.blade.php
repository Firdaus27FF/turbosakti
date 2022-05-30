@extends('users.app')
@section ('content')
<div class="product_details mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <!-- <div id="img-1" class="zoomWrapper single-zoom"> -->
                            
                            <a href="#">
                            <div class="product-turbo">
                                <img  src="{{ asset('user/assets/img/product/tranding-1.jpg')}}" data-zoom-image="assets/img/product/details-1.jpg" alt="big-1">
                            </a>
                            </div>
                        <!-- </div> -->
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">
                            
                            <h1>Original Rasa Bawang Putih</h1>
                            <div class=" product_ratting">
                            </div>
                            <div class="price_box">
                                    <span class="current_dark">Rp. 2.000</span>                             
                            </div>
                            <div class="product_desc">
                                <ul>
                                    <li>In Stock</li>
                                    <li>Free delivery</li>
                                </ul>
                                <p>
                                    Keripik ini memiliki produk yang sangat berkualitas 100% halal dan bagus. Dengan rasa bawang putih original yang masih bagus. 
                                </p>
                            </div>
                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">Beli Sekarang</button>  
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
    @endsection