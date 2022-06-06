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
                            <div class="col-md-6 card-header text-end">
                                <a class="btn btn-warning mb-2 text-light" href="{{route('stok.create')}}">
                                    Tambah Stok 
                                </a>
                            </div> 
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                            <div class="card-body">
                                Data Stok Produk
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal Produksi</th>
                                            <th>Harga Per Ball</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal Produksi</th>
                                            <th>Harga Per Ball</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($stok as $p)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $p->jumlah }}</td>
                                            <td>{{ $p->tanggal_produksi }}</td>
                                            <td>{{ $p->harga_per_ball }}</td>
                                            <td>
                                                <a href="{{ route('stok.edit', $p->id)}}" class="btn btn-warning"><ion-icon name="pencil-outline"></ion-icon></a>
                                                <form action="{{ route('stok.destroy', $p->id)}}" method="post" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"> <ion-icon name="trash-outline"></ion-icon></button>
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