@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
                    <div class="container-fluid px-4">
                    <div class="row">
                            <div class="col-md-6 position-relative">
                            <h2 class="mt-1 text-warning">Pemesanan</h2>
                            </div> 
                    </div>
                        <div class="card mb-4">
                            <div class="card-header">
                            <div class="card-body">
                                Data Pemesanan
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
                                <form method="post" action="{{ route('pemesanan.update', $pemesanan->id ) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="country_name">Nama Order :</label>
                                        <input type="text" class="form-control mb-3" name="nama_order" value="{{ $pemesanan->nama_order}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cases">Tanggal :</label>
                                        <input type="date" class="form-control mb-3" name="tanggal" value="{{ $pemesanan->tanggal }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cases">Nama Produk :</label>
                                        <input type="text" class="form-control mb-3" name="nama_produk" value="{{ $pemesanan->nama_produk}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cases">Jumlah :</label>
                                        <input type="text" class="form-control mb-3" name="jumlah" value="{{ $pemesanan->jumlah }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cases">Harga :</label>
                                        <input type="text" class="form-control mb-3" name="harga" value="{{ $pemesanan->harga }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cases">Total Harga:</label>
                                        <input type="text" class="form-control mb-3" name="total_harga" value="{{ $pemesanan->total_harga }}"/>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">
                                                <a href="" type="submit" class="btn btn-warning text-light">Update</a>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="{{route('pemesanan.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
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