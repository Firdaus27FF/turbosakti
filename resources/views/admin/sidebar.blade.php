<nav class="sb-sidenav accordion sb-sidenav-light shadow-lg" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="{{ route('dashboard.index')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{ route('jenis.index')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                jenis produk
                            </a>
                            <a class="nav-link" href="{{ route('stok.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-store"></i></div>
                                Stok Produk
                            </a>
                            <a class="nav-link" href="{{ route('catatkeuangan.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-money-bill"></i></div>
                                Pencatatan Keuangan
                            </a>
                            <a class="nav-link" href="{{ route('prediksipenjualan.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-chart-line"></i></i></div>
                                Prediksi Penjualan
                            </a>
                            <a class="nav-link" href="{{ route('pelanggan.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users-between-lines"></i></div>
                                Data Pelanggan
                            </a>
                            <a class="nav-link" href="{{ route('ongkir.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-people-carry-box"></i></div>
                                Ongkos Kirim
                            </a>
                            <a class="nav-link" href="{{ route('pemesanan.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                                Pemesanan
                            </a>
                            <a class="nav-link" href="{{ route('pembayaran.index')}}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
                                Pembayaran
                            </a>
                        </div>
                    </div>
                    </nav>