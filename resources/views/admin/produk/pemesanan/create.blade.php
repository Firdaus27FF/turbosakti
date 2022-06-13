@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-6 position-relative">
            <h2 class="mt-1 text-warning">Pemesanan</h2>
            </div>
        </div>
        <div class="card mb-4">
            <form action="{{ route('pemesanan.store')}}" method="POST">
                @csrf
                <div class="card-header">
                Data Pemesanan
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Order</label>
                    <select name="pelanggan_id"class="form-control">
                        @foreach($pelanggan as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                    <label>Tanggal</label>
                    <input type="date" class="form-control mb-3" name="tanggal">
                    <label>Rasa Produk</label>
                    <select name="p" class="form-control" id="rasa">
                        @foreach($produk as $row)
                            <option value="">Select Flavour</option>
                            <option value="{{ $row->id }}">{{ $row->rasa }}</option>
                        @endforeach
                        <input type="text" hidden name="produk_id" id="produk_id">
                    </select>
                    <label>Jumlah</label>
                    <select name="jumlah" id="jumlah" class="form-control">
                        <option value="1">1  ball</option>
                        <option value="2">2  ball</option>
                        <option value="3">3  ball</option>
                        <option value="4">4  ball</option>
                        <option value="5">5  ball</option>
                        <option value="6">6  ball</option>
                        <option value="7">7  ball</option>
                        <option value="8">8  ball</option>
                        <option value="9">9  ball</option>
                        <option value="10">10 ball</option>
                    </select>
                    <label>Harga</label>
                    <input type="text" class="form-control mb-3" name="harga" id="harga">
                </div>
            </div>
            <div class="row px-3 mb-3">
                <div class="col-md-1">
                        <input type="submit" class="btn btn-warning text-light" value="Simpan">
                </div>
                <div class="col-md-1">
                    <a href="{{route('pemesanan.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</main>
@include('admin.produk.pemesanan.hargaScript')
@endsection

@section('js')
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/js/datatables-simple-demo.js')}}"></script>
@endsection