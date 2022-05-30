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
            <div class="card-header">
                <h3>Tambah Produk</h3>
            </div>
            <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('produk.index') }}">
                <div class="form-group">
                    @csrf
                    <label>Gambar :</label>
                    <input type="file" name="image" class="form-control mb-3" placeholder="image">
                    <input type="text" class="form-control mb-3">
                    <label>Rasa :</label>
                    <input type="text" class="form-control mb-3">
                    <label>Harga Jual :</label>
                    <input type="text" class="form-control mb-3">
                </div>
            </div>
            <div class="row px-3 mb-3">
                <div class="col-md-1">
                        <a href="" type="submit" class="btn btn-warning text-light">Simpan</a>
                </div>
                <div class="col-md-1">
                    <a href="{{ route('jenisproduk.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</main>
@endsection

@section('js')
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/js/datatables-simple-demo.js')}}"></script>
@endsection