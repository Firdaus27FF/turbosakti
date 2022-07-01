@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
    <div class="row">
            <div class="col-md-6 position-relative">
            <h2 class="mt-1 text-warning">Detail Data Pemesanan</h2><br>
            </div>
            <div class="col-sm-8">
                <div class="card-block">
                    <div class="row">
                        <div class="col-sm-6"><br>
                            <p class="m-b-10 f-w-600">No :</p>
                            <h6 class="text-muted f-w-400">1</h6>
                        </div>
                        <div class="col-sm-6"><br>
                            <p class="m-b-10 f-w-600">Nama Order :</p>
                            <h6 class="text-muted f-w-400">{{ $pemesanan->pelanggan->nama }}</h6>
                        </div>
                        <div class="col-sm-6"><br>
                            <p class="m-b-10 f-w-600">Tanggal :</p>
                            <h6 class="text-muted f-w-400">{{ $pemesanan->tanggal }}</h6>
                        </div>
                        <div class="col-sm-6"><br>
                            <p class="m-b-10 f-w-600">Rasa Produk :</p>
                            <h6 class="text-muted f-w-400">{{ $pemesanan->produk->rasa }}</h6>
                        </div>
                        <div class="col-sm-6"><br>
                            <p class="m-b-10 f-w-600">Jumlah :</p>
                            <h6 class="text-muted f-w-400">{{ $pemesanan->jumlah }}</h6>
                        </div>
                        <div class="col-sm-6"><br>
                            <p class="m-b-10 f-w-600">Harga :</p>
                            <h6 class="text-muted f-w-400">{{ $pemesanan->harga }}</h6>
                        </div>
                        <div class="col-sm-6"><br>
                            <p class="m-b-10 f-w-600">Total Harga :</p>
                            <h6 class="text-muted f-w-400">{{ $pemesanan->total_harga }}</h6>
                        </div>
                    </div>
                    <div class="col-md-1"><br>
                        <a href="{{route('pemesanan.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('js')
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/js/datatables-simple-demo.js')}}"></script>
@endsection