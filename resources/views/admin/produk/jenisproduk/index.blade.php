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
                                            <th>Rasa</th>
                                            <th>Harga Jual</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Gambar</th>
                                            <th>Rasa</th>
                                            <th>Harga Jual</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($produk as $p)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $p->gambar }}</td>
                                            <td>{{ $p->rasa }}</td>
                                            <td>{{ $p->harga_jual }}</td>
                                            <td><a href="{{ route('produk.edit', $produk->id)}}" class="btn btn-primary">Edit</a></td>
                                            <td class="text-center">
                                            <form action="{{ route('produk.destroy', $produk->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-md btn-danger mx-1"> <ion-icon name="trash-outline"></ion-icon></ion-icon></button>
                                            <button type="button" class="btn btn-md btn-warning mx-1"> <ion-icon name="pencil-outline"></ion-icon></button>
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