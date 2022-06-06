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
                            <div class="col-md-6 card-header text-end">
                                <a class="btn btn-warning mb-2 text-light" href="{{route('pemesanan.create')}}">
                                    Tambah Pesanan
                                </a>
                            </div> 
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                            <div class="card-body">
                                Data Pemesanan
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Order</th>
                                            <th>Tanggal</th>
                                            <th>Nama Produk</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Total Harga</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                            <th>No</th>
                                            <th>Nama Order</th>
                                            <th>Tanggal</th>
                                            <th>Nama Produk</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Total Harga</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($pemesanan as $p)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $p->nama_order }}</td>
                                            <td>{{ $p->tanggal }}</td>
                                            <td>{{ $p->nama_produk }}</td>
                                            <td>{{ $p->jumlah }}</td>
                                            <td>{{ $p->harga }}</td>
                                            <td>{{ $p->total_harga }}</td>
                                            <td>
                                                <a href="{{ route('pemesanan.edit', $p->id)}}" class="btn btn-warning"><ion-icon name="pencil-outline"></ion-icon></a>
                                                <form action="{{ route('pemesanan.destroy', $p->id)}}" method="post" style="display:inline">
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