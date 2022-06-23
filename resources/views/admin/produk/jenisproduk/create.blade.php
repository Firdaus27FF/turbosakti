@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-6 position-relative">
            <h2 class="mt-1 text-warning">Jenis Produk</h2>
            </div>
        </div>
        <div class="card mb-4">
            <form action="{{ route('jenis.store')}}" method="POST">
                @csrf
                <div class="card-header">
                <div class="card-body">
                    Data Jenis Produk
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
            <form method="post" action="{{ route('jenis.index') }}" enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    <label>Gambar :</label>
                    <input type="file" name="gambar" class="form-control mb-3" placeholder="image">
                    <label>Rasa :</label>
                    <input type="text" class="form-control mb-3" name="rasa">
                    <label>Harga Jual :</label>
                    <input type="text" class="form-control mb-3"name="harga_jual">
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                    <input type="submit" class="btn btn-warning text-light" value="simpan">
                </div>
                <div class="col-md-1">
                    <a href="{{route('jenis.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
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