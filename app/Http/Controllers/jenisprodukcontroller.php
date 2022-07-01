<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisProduk;
use Storage;

class jenisprodukcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produk = JenisProduk::all();
        $no = 1;
        return view('admin.produk.jenisproduk.index', compact('produk', 'no'));
    }

    public function create(Request $request)
    {
        // $produk['jenis'] = 'Tambah User';
        // $produk['jenis'] = ['admin' => 'Admin', 'jenis' => 'jenis'];
        return view('admin.produk.jenisproduk.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'rasa'         => 'required',
            'harga_jual'   => 'required',
            'gambar'       => 'required'
        ]);
        
        $image = $request->file('gambar');
        $image->storeAs('public/image', $image->hashName());
       $produk = JenisProduk::create([
                'gambar'       => $image->hashName(),
                'rasa'         => $request->rasa,
                'harga_jual'   => $request->harga_jual
            ]);
    
        if($produk){
            //redirect dengan pesan sukses
            return redirect()->route('jenis.index')->with(['success' => 'Data Berhasil Ditambah!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('jenis.index')->with(['error' => 'Data Gagal ditambah!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = JenisProduk::findOrFail($id);

        return view('admin.produk.jenisproduk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        

        $this->validate($request, [
            'rasa'     => 'required',
            'harga_jual'   => 'required',
            'gambar'         => 'required'
        ]);
        
        // dd($data);
        //get data Blog by ID
        $produk = JenisProduk::findOrFail($id);
    
        if($request->file('gambar') == "") {
    
            $produk->update([
                'rasa'     => $request->rasa,
                'harga_jual'   => $request->harga_jual
            ]);
    
        } else {
    
            //hapus old image
            Storage::disk('local')->delete('public/image/'.$produk->image);
    
            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/image', $image->hashName());
    
            $produk->update([
                'gambar'        => $image->hashName(),
                'rasa'         => $request->rasa,
                'harga_jual'   => $request->harga_jual
            ]);
        }
    
        if($produk){
            //redirect dengan pesan sukses
            return redirect()->route('jenis.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('jenis.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = JenisProduk::findOrFail($id);
       
        $produk->delete();

        return back()->with('success', 'Data sudah di hapus');
    }
}
