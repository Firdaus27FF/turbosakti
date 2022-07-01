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
                    <label>Nama Order :</label>
                    <select name="pelanggan_id"class="form-control mb-3">
                        @foreach($pelanggan as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="cases">Tanggal :</label>
                        <input type="date" class="form-control mb-3" name="tanggal" value="{{ $pemesanan->tanggal }}"/>
                    </div>
                    <div class="form-group">
                    <label>Rasa Produk :</label>
                    <select name="p" class="form-control mb-3" id="rasa">
                        @foreach($produk as $row)
                            <option value="">Pilih Rasa</option>
                            <option value="{{ $row->id }}">{{ $row->rasa }}</option>
                        @endforeach
                        <input type="text" hidden name="produk_id" id="produk_id">
                    </select>
                    </div>
                    <div class="form-group">
                    <label>Jumlah :</label>
                    <select name="jumlah" id="jumlah" class="form-control mb-3">
                        <option value="1">1  ball</option>
                        <option value="2">2  ball</option>
                        <option value="3">3  ball</option>
                        <option value="4">4  ball</option>
                        <option value="5">5  ball</option>
                        <option value="6">6  ball</option>
                        <option value="7">7  ball</option>
                        <option value="8">8  ball</option>
                        <option value="9">9  ball</option>
                        <option value="10">10 ball</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="cases">Harga :</label>
                        <input type="text" class="form-control mb-3" name="harga" value="{{ $pemesanan->harga }}"/>
                    </div>
                    <div class="form-group">
                        <label for="cases">Total Harga :</label>
                        <input type="text" class="form-control mb-3" name="total_harga" value="{{ $pemesanan->total_harga }}"/>
                    </div>
                    <div class="row">
                    <div class="col-md-1">
                            <input type="submit" class="btn btn-warning text-light" value="update">
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