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
                            <div class="col-md-6 card-header text-end">
                                <a class="btn btn-warning mb-2 text-light" href="{{route('pembayaran.create')}}">
                                    Tambah Bayar
                                </a>
                            </div> 
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                            <div class="card-body">
                                Data Pembayaran
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Order</th>
                                            <th>Tanggal</th>
                                            <th>Bayar</th> 
                                            <th class="text-center">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pembayaran as $p)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $p->pelanggan->nama }}</td>
                                            <td>{{ $p->tanggal }}</td>
                                            <td>{{ $p->bayar }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('pembayaran.destroy', $p->id)}}" method="post" style="display:inline">
                                                <a href="{{ route('pembayaran.edit', $p->id)}}" class="btn btn-warning"><i class="fas fa-pencil"></i></a>
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