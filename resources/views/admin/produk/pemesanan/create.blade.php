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
            <div class="card-header">
                <h3>Tambah Pemesanan</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Nama Order</label>
                    <input type="text" class="form-control mb-3">
                    <label>Tanggal</label>
                    <input type="date" class="form-control mb-3">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control mb-3">
                    <label>Jumlah</label>
                    <input type="text" class="form-control mb-3">
                    <label>Harga</label>
                    <input type="text" class="form-control mb-3">
                    <label> Total Harga</label>
                    <input type="text" class="form-control mb-3">
                </div>
            </div>
            <div class="row px-3 mb-3">
                <div class="col-md-1">
                        <a href="" type="submit" class="btn btn-warning text-light">Simpan</a>
                </div>
                <div class="col-md-1">
                    <a href="{{route('prediksipenjualan.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
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