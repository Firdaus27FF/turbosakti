@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-6 position-relative">
            <h2 class="mt-1 text-warning">Stok Produk</h2>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
            <div class="card-body">
                Data Stok Produk
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
                    <form method="post" action="{{ route('stok.index') }}">
                    <div class="form-group">
                    @csrf
                        <label>Jumlah</label>
                        <input type="text" class="form-control mb-3" name="jumlah">
                        <label>Tanggal Produksi</label>
                        <input type="date" class="form-control mb-3" name="tanggal_produksi">
                        <label>Harga Per Ball</label>
                        <input type="text" class="form-control mb-3" name="harga_per_ball">
                    </div>
            </div>
            <div class="row px-3 mb-3">
                <div class="col-md-1">
                        <input type="submit" class="btn btn-warning text-light" value="simpan">
                </div>
                <div class="col-md-1">
                    <a href="{{route('stok.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</main>
@endsection

@section('js')
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/js/datatables-simple-demo.js')}}"></script>
@endsection