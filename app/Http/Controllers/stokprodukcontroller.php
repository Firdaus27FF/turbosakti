<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stokproduk;

class stokprodukcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stok = Stokproduk::all();
        $no = 1;
        return view('admin.produk.stokproduk.index', compact('stok', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.produk.stokproduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jumlah' => 'required|max:255',
            'tanggal_produksi' => 'required',
            'harga_per_ball' => 'required'
        ]);
        $show = StokProduk::create($validatedData);
   
        return redirect('/stok')->with('success', 'Data sudah tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stok = stokproduk::findOrFail($id);

        return view('admin.produk.stokproduk.edit', compact('stok'));
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
        $validatedData = $request->validate([
            'jumlah' => 'required|max:255',
            'tanggal_produksi' => 'required',
            'harga_per_ball' => 'required',
        ]);
        stokproduk::whereId($id)->update($validatedData);

        return redirect('/stok')->with('success', 'Data selesai di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stok = jenisproduk::findOrFail($id);
        $stok->delete();

        return back()->with('success', 'Data sudah di hapus');
    }
}
