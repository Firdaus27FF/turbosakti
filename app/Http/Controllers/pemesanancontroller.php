<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\DetailPelanggan;
use App\Models\JenisProduk;

class pemesanancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanan = Pemesanan::all();
        $no = 1;
        return view('admin.produk.pemesanan.index', compact('pemesanan', 'no'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = DetailPelanggan::all();
        $produk = JenisProduk::all();
        return view('admin.produk.pemesanan.create', compact('pelanggan','produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function getID($id){
         $produk = JenisProduk::find($id);
         return response()->json($produk, 200);
     }

    public function store(Request $request)
    {
        $pelanggan = $request->pelanggan_id;
        $tanggal = $request->tanggal;
        $produk = $request->produk_id;
        $jumlah = $request->jumlah;
        $harga = $request->harga;
        $total = $harga * $jumlah;
        Pemesanan::create(['pelanggan_id'=>$pelanggan, 'tanggal'=>$tanggal, 'produk_id'=>$produk, 'jumlah'=>$jumlah, 'harga'=>$harga, 'total_harga'=>$total]);
   
        return redirect('/pemesanan')->with('success', 'Data sudah tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        return View('admin.produk.pemesanan.show')->with('pemesanan', $pemesanan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggan = DetailPelanggan::all();
        $produk = JenisProduk::all();
        $pemesanan = Pemesanan::findOrFail($id);
        return view('admin.produk.pemesanan.edit', compact('pelanggan','produk', 'pemesanan'));
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
        $this->validate($request,[
            'pelanggan_id'    => 'required',
            'tanggal'       => 'required',
            'jumlah'        => 'required',
            'harga'         => 'required',
            'total_harga'   => 'required',
        ]);

        $pemesanan = Pemesanan::findOrFail($id);

        $pemesanan->delete([
            'pelanggan_id'    => 'required',
            'tanggal'       => 'required',
            'jumlah'        => 'required',
            'harga'         => 'required',
            'total_harga'   => 'required',
        ]);

        return redirect('pemesanan')->with('success', 'Data selesai di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();

        return back()->with('success', 'Data sudah di hapus');
    }
}
