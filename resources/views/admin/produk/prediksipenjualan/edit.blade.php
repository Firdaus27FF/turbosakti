@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
                    <div class="container-fluid px-4">
                    <div class="row">
                            <div class="col-md-6 position-relative">
                            <h2 class="mt-1 text-warning">Prediksi Penjualan</h2>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                            <div class="card-body">
                                Data Prediksi Penjualan
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
                                <form method="post" action="{{ route('prediksipenjualan.update', $prediksipenjualan->id )}}">
                                 @csrf
                                    @method('PUT')    
                                <div class="form-group">
                                      
                                        <label for="country_name">jadwal :</label>
                                        <input type="text" class="form-control mb-3" name="jadwal" value="{{$prediksipenjualan->jadwal }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cases">Hasil Jumlah Produk :</label>
                                        <input type="text" class="form-control mb-3" name="hasil_jumlah_produk" value="{{$prediksipenjualan->hasil_jumlah_produk }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cases">Hasil Bersih :</label>
                                        <input type="text" class="form-control mb-3" name="hasil_bersih" value="{{$prediksipenjualan->hasil_bersih }}"/>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">
                                                <a href="" type="submit" class="btn btn-warning text-light">Update</a>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="{{route('prediksipenjualan.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
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