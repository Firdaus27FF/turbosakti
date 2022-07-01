@section('css')

<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

@endsection
@extends('admin.app')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-6 position-relative">
            <h2 class="mt-1 text-warning">Jenis Product</h2>
            </div>                        
        </div>
            <div class="card mb-4">
            <div class="card-header">
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
                <form method="POST" action="{{ route('jenis.update',$produk->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')    
                <div class="form-group">
                        <label for="country_name">Gambar :</label>
                        <input type="file" class="form-control mb-3" name="gambar" placeholder="image"value="{{ $produk->gambar }}"/>
                    </div>
                    <div class="form-group">
                        <label for="cases">Rasa :</label>
                        <input type="text" class="form-control mb-3" name="rasa" value="{{ $produk->rasa }}"/>
                    </div>
                    <div class="form-group">
                        <label for="cases">Harga Jual :</label>
                        <input type="text" class="form-control mb-3" name="harga_jual" value="{{ $produk->harga_jual }}"/>
                    </div>
                    <div class="row ">
                        <div class="col-md-1">
                        <button type="submit" class="btn btn-md btn-warning text-light">UPDATE</button>
                        </div>
                        <div class="col-md-1">
                            <a href="{{route('jenis.index')}}" type="button" class="btn btn-warning text-light">Kembali</a>
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