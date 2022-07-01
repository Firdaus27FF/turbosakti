@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
    <div class="row">
            <div class="col-md-6 position-relative">
            <h2 class="mt-1 text-warning">Pembayaran</h2>
            </div>
    </div>
        <div class="card mb-4">
            <div class="card-header">
            <div class="card-body">
                Data Pembayaran
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
                <form method="post" action="{{ route('pembayaran.update', $pembayaran->id ) }}">
                    @csrf
                        @method('PATCH')
                    <div class="form-group">
                        <label>Nama Order :</label>
                        <!-- <select name="pelanggan_id"class="form-control mb-3">
                            @foreach($pelanggan as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select> -->
                        <select class="form-control" name="pelanggan_id" style="width: 100%">
                                <option selected value="">--Pilih status--</option>
                                @foreach ($pelanggan as $p)
                                    @if ($p->id == $pembayaran->pelanggan_id)
                                        @php($select = 'selected')
                                    @else
                                        @php($select = '')
                                    @endif
                                    <option {{ $select }} value="{{ $p->id }}">{{ $p->nama }}
                                </option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="cases">Tanggal :</label>
                        <input type="date" class="form-control mb-3" name="tanggal" value="{{ $pembayaran->tanggal }}"/>
                    </div>
                    <div class="form-group">
                        <label for="cases">Bayar :</label>
                        <input type="text" class="form-control mb-3" name="bayar" value="{{ $pembayaran->bayar }}"/>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <input type="submit" class="btn btn-warning text-light" value="Update">
                        </div>
                        <div class="col-md-1">
                            <a href="{{route('pembayaran.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
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