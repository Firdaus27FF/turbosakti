<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisProduk;

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
        $image = $request->file('gambar');
        $rasa = $request->rasa;
        $harga = $request->harga_jual;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('/image'), $imageName);
        $show = JenisProduk::create(['gambar'=>$imageName, 'rasa'=>$rasa, 'harga_jual'=>$harga]);
   
        return redirect('/jenis')->with('success', 'Data sudah tersimpan');
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
    public function update(Request $request, $id)
    {
        $image = $request->file('gambar');
        $rasa = $request->rasa;
        $harga = $request->harga_jual;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('/image'), $imageName);
        $show = JenisProduk::create(['gambar'=>$imageName, 'rasa'=>$rasa, 'harga_jual'=>$harga]);

        return redirect('/jenis')->with('success', 'Data selesai di update');
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
