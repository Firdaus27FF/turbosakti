@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-6 position-relative">
            <h2 class="mt-1 text-warning">Data Pelanggan</h2>
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
            <form action="{{ route('pelanggan.store')}}" method="POST">
                @csrf
                <div class="card-header">
                    Data Pelanggan
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control mb-3" name="nama">
                        <label>Alamat</label>
                        <input type="text" class="form-control mb-3" name="alamat">
                        <label>No. Telp</label>
                        <input type="text" class="form-control mb-3" name="no_tlp">
                    </div>
                </div>
                <div class="row px-3 mb-3">
                    <div class="col-md-1">
                        <input type="submit" class="btn btn-warning text-light" value="Simpan">
                    </div>
                    <div class="col-md-1">
                        <a href="{{route('pelanggan.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
                    </div>
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
