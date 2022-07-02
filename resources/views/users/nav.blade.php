<div class="off_canvars_overlay"> 
    </div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div class="support_info">
                            <p>Any Enquiry: <a href="tel:">+56985475235</a></p>
                        </div>
                        <div class="top_right text-right">
                            <ul>
                               <li><a href="my-account.html"> My Account </a></li> 
                               <li><a href="checkout.html"> Checkout </a></li> 
                            </ul>
                        </div>                    

                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@drophunt.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->
    
    <header>
        
            <!--header top start-->
            <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6">
                        <div class="col-lg-6 col-md-8">
                        <div class="logo">
                                <a href="index-2.html">
                                    <img src="{{ asset('user/assets/img/logo/wewew.png')}}" alt="" width="80" height="80">
                                </a>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-9 col-md-6">
                            <div class="middel_right">
                                <div class="search_container">
                                   <form action="#">
                                        <div class="search_box shadow-lg">
                                            <input placeholder="Cari Produk" type="text">
                                            <button type="submit"class="btn btn-warning text-light">Cari</button> 
                                        </div>
                                    </form>
                                </div>
                                <img src="{{ asset('user/assets/img/user.png')}}" alt=""  width="40" height="40">
                                <div class="user">
                                    <div class="dropdown">
                                        <a class="ropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <h4 class="uppercase">{{ auth()->user()->name}}</h4>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="btn btn-transparant">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                                    </svg>    
                                                &nbsp;Logout</button>
                                                <a class="bg-turbo"type="submit"></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->
            <!--header bottom satrt-->
            <div class="main_menu_area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12">
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div> 
    </header>