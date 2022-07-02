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
                            <div class="col-md-6 card-header text-end">
                                <a class="btn btn-warning mb-2 text-light" href="{{route('prediksipenjualan.create')}}">
                                    Tambah Prediksi
                                </a>
                            </div> 
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                            <div class="card-body">
                                Data Prediksi Penjualan
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>jadwal</th>
                                            <th>Hasil Jumlah Produk</th>
                                            <th>Hasil Bersih</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($prediksipenjualan as $p)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $p->jadwal }}</td>
                                            <td>{{ $p->hasil_jumlah_produk }}</td>
                                            <td>{{ $p->hasil_bersih }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('prediksipenjualan.destroy', $p->id)}}" method="post" style="display:inline">
                                                <a href="{{ route('prediksipenjualan.edit', $p->id)}}" class="btn btn-warning"><i class="fas fa-pencil"></i></a>
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i></button>
                                                @csrf
                                                @method('DELETE')
                                                </form>    
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection

@section('js')
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('admin/js/datatables-simple-demo.js')}}"></script>
@endsection