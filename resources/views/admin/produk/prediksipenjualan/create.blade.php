@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-6 position-relative">
            <h2 class="mt-1 text-warning">Data Prediksi Penjualan</h2>
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
            <form action="{{ route('prediksipenjualan.store')}}" method="POST">
                @csrf
                <div class="card-header">
                <div class="card-body">
                    Data Prediksi Penjualan
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
                        <form method="post" action="{{ route('prediksipenjualan.index') }}">
                        <div class="form-group">
                        @csrf
                    <div class="form-group">
                    <label>jadwal : </label>
                    <input type="text" class="form-control mb-3" name="jadwal">
                    <label>Hasil Jumlah Produk :</label>
                    <input type="text" class="form-control mb-3" name="hasil_jumlah_produk">
                    <label>Hasil Bersih :</label>
                    <input type="text" class="form-control mb-3" name="hasil_bersih">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                        <input type="submit" class="btn btn-warning text-light" value="Simpan">
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