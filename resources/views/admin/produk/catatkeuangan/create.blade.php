@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-6 position-relative">
            <h2 class="mt-1 text-warning">Data Pencatatan Keuangan</h2>
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
            <form action="{{ route('catatkeuangan.store')}}" method="POST">
                @csrf
                <div class="card-header">
                <div class="card-body">
                    Data Pencatatan Keuangan
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
                        <form method="post" action="{{ route('catatkeuangan.index') }}">
                        <div class="form-group">
                        @csrf
                        <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" class="form-control mb-3" name="tanggal">
                    <label>Jumlah Pemasukan</label>
                    <input type="text" class="form-control mb-3" name="jumlah_pemasukan">
                    <label>Jumlah Pengeluaran</label>
                    <input type="text" class="form-control mb-3" name="jumlah_pengeluaran">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <button type="submit" class="btn btn-md btn-warning text-light">submit</button>
                </div>
                <div class="col-md-1">
                    <a href="{{route('catatkeuangan.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
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