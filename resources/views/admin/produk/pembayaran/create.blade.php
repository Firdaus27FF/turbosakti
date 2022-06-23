@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-6 position-relative">
            <h2 class="mt-1 text-warning">Data Pembayaran</h2>
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
            <form action="{{ route('pembayaran.store')}}" method="POST">
                @csrf
                <div class="card-header">
                <div class="card-body">
                    Data Pembayaran
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
                        <form method="post" action="{{ route('pembayaran.index') }}">
                        <div class="form-group">
                        @csrf
                        <div class="form-group">
                    <label>Nama Order</label>
                    <input type="text" class="form-control mb-3">
                    <label>Tanggal</label>
                    <input type="date" class="form-control mb-3">
                    <label>Bayar</label>
                    <input type="text" class="form-control mb-3">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                        <a href="" type="submit" class="btn btn-warning text-light">Simpan</a>
                </div>
                <div class="col-md-1">
                    <a href="{{route('pembayaran.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
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