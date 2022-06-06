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
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br />
                                @endif
                                <form method="post" action="{{ route('stok.update', $stok->id ) }}">
                                    <div class="form-group">
                                        @csrf
                                        @method('PATCH')
                                        <label for="country_name">Jumlah :</label>
                                        <input type="text" class="form-control mb-3" name="name" value="{{ $stok->jumlah }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cases">Tanggal Produksi :</label>
                                        <input type="date" class="form-control mb-3" name="price" value="{{ $stok->tanggal_produksi }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cases">Harga Per Ball :</label>
                                        <input type="text" class="form-control mb-3" name="price" value="{{ $stok->harga_per_ball }}"/>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                                <a href="" type="submit" class="btn btn-warning text-light">Update Data</a>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="{{route('stok.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
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