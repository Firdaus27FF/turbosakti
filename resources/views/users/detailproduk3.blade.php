
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
                                <img  src="{{ asset('user/assets/img/product/tranding-2.jpg')}}" data-zoom-image="assets/img/product/details-1.jpg" alt="big-1">
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
                            
                            <h1>Bawang Putih Warna Kuning</h1>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="review"><a href="#"> (250 reviews) </a></li>
                                </ul>
                                
                            </div>
                            <div class="price_box">
                                    <span class="current_dark">Rp. 5.000</span>                             
                            </div>
                            <div class="product_desc">
                                <ul>
                                    <li>In Stock</li>
                                    <li>Free delivery available</li>
                                </ul>
                                <p>
                                    Keripik ini memiliki produk yang sangat berkualitas 100% halal dan bagus. Dengan rasa bawang putih dengan keripik warna kunig yang masih bagus. 
                                </p>
                            </div>
                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">Beli Sekarang</button>  
                                
                            </div>                            
                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>           
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>           
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>           
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>        
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>        
                            </ul>      
                        </div>

                    </div>
                </div>
            </div>
        </div>    
    </div>
    @endsection