@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-6 position-relative">
            <h2 class="mt-1 text-warning">Data Pemesanan</h2>
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            </div>
        </div>
        <div class="card mb-4">
            <form action="{{ route('pemesanan.store')}}" method="POST">
                @csrf
                <div class="card-header">
                <div class="card-body">
                    Data Pemesanan
                </div>
                <div class="card-body">
                    <div class="form-group">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif
                        <form method="post" action="{{ route('pemesanan.index') }}">
                        <div class="form-group">
                        @csrf
                        <div class="form-group">
                    <label>Nama Order</label>
                    <select name="pelanggan_id"class="form-control mb-3">
                        @foreach($pelanggan as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                    <label>Tanggal</label>
                    <input type="date" class="form-control mb-3" name="tanggal">
                    <label>Rasa Produk</label>
                    <select name="p" class="form-control mb-3" id="rasa">
                        @foreach($produk as $row)
                            <option value="">Select Flavour</option>
                            <option value="{{ $row->id }}">{{ $row->rasa }}</option>
                        @endforeach
                        <input type="text" hidden name="produk_id" id="produk_id">
                    </select>
                    <label>Jumlah</label>
                    <select name="jumlah" id="jumlah" class="form-control mb-3">
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
            <div class="row">
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