@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-6 position-relative">
            <h2 class="mt-1 text-warning">Ongkos Kirim</h2>
            </div>
        </div>
        <div class="card mb-4">
            <form action="{{ route('ongkir.store')}}" method="POST">
                @csrf
                <div class="card-header">
                    Data Ongkos Kirim
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Order</label>
                        <input type="text" class="form-control mb-3" name="nama_order">
                        <label>Tanggal</label>
                        <input type="date" class="form-control mb-3"name="tanggal">
                        <label>Berat</label>
                        <input type="text" class="form-control mb-3"name="berat">
                        <label>Kurir</label>
                        <input type="text" class="form-control mb-3"name="kurir">
                        <label>Status</label>
                        <input type="text" class="form-control mb-3"name="status">
                    </div>
                </div>
                <div class="row px-3 mb-3">
                    <div class="col-md-1">
                            <input type="submit" class="btn btn-warning text-light" value="Simpan">
                    </div>
                    <div class="col-md-1">
                        <a href="{{route('ongkir.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
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