@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
                    <div class="container-fluid px-4">
                    <div class="row">
                            <div class="col-md-6 position-relative">
                            <h2 class="mt-1 text-warning">Pencatatan Keuangan</h2>
                            </div> 
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                            <div class="card-body">
                                Data Pencatatan Keuangan
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
                                <form method="post" action="{{ route('catatkeuangan.update', $keuangan->id ) }}">
                                    <div class="form-group">
                                        @csrf
                                        @method('PATCH')
                                        <label for="country_name">Tanggal :</label>
                                        <input type="date" class="form-control mb-3" name="name" value="{{ $keuangan->tanggal }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cases">Jumlah Pemasukan :</label>
                                        <input type="text" class="form-control mb-3" name="price" value="{{ $keuangan->jumlah_pemasukan }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="cases">Jumlah Pengeluaran :</label>
                                        <input type="text" class="form-control mb-3" name="price" value="{{ $keuangan->jumlah_pengeluaran }}"/>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                                <a href="" type="submit" class="btn btn-warning text-light">Update Data</a>
                                        </div>
                                        <div class="col-md-1">
                                            <a href="{{route('catatkeuangan.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
                                        </div>
                                    </div>
                                </form>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </main>
@endsection

<!-- @section('js')
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/js/datatables-simple-demo.js')}}"></script>
@endsection -->