@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
                    <div class="container-fluid px-4">
                        <div class="row">
                            <div class="col-md-6 position-relative">
                            <h2 class="mt-1 text-warning">Jenis Produk</h2>
                            </div>
                            <div class="col-md-6 card-header text-end">
                                <a class="btn btn-warning mb-2 text-light"  href="{{route('jenis.create')}}">
                                    Tambah Jenis
                                </a>
                            </div>                            
                        </div>
                            <div class="card mb-4">
                            <div class="card-header">
                            <div class="card-body">
                                Data Jenis Produk
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Rasa </th>
                                            <th>Harga Jual</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($produk as $p)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <img src="{{ url('storage/image/'.$p->gambar) }}" width="100" height="100">
                                            </td>
                                            <td>{{ $p->rasa }}</td>
                                            <td>{{ $p->harga_jual }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('jenis.destroy', $p->id)}}" method="post" style="display:inline">
                                                <a href="{{ route('jenis.edit', $p->id)}}" class="btn btn-warning"><i class="fas fa-pencil"></i></a>
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