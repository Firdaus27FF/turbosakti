@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-6 position-relative">
                <h2 class="mt-1 text-warning">Pelanggan</h2>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-body">
                    Data Pelanggan
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
                    <form method="post" action="{{ route('pelanggan.update',$pelanggan->id ) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <div class="form-group">
                                <label for="cases">Nama :</label>
                                <input type="text" class="form-control mb-3" name="nama"
                                    value="{{ $pelanggan->nama }}"/>
                            </div>
                            <div class="form-group">
                                <label for="cases">Alamat :</label>
                                <input type="text" class="form-control mb-3" name="alamat"
                                    value="{{ $pelanggan->alamat }}" />
                            </div>
                            <div class="form-group">
                                <label for="cases">No. Telp :</label>
                                <input type="text" class="form-control mb-3" name="no_tlp"
                                    value="{{ $pelanggan->no_tlp }}" />
                            </div>
                            <div class="row ">
                                <div class="col-md-1">
                                    <input type="submit" class="btn btn-warning text-light" value="Update">
                                </div>
                                <div class="col-md-1">
                                    <a href="{{route('pelanggan.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
                                </div>
                            </div>
                    </form>
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
