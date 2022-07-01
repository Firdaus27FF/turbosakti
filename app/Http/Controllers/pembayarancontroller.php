<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\DetailPelanggan;


class pembayarancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran = Pembayaran::all();
        $no = 1;
        return view('admin.produk.pembayaran.index', compact('pembayaran', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = DetailPelanggan::all();
        return view('admin.produk.pembayaran.create', compact('pelanggan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggan  = $request->pelanggan_id;
        $tanggal    = $request->tanggal;
        $bayar      = $request->bayar;
        Pembayaran::create(['pelanggan_id'=>$pelanggan, 'tanggal'=>$tanggal, 'bayar'=>$bayar]);
   
        return redirect('/pembayaran')->with('success', 'Data sudah tersimpan');
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
        $pembayaran = Pembayaran::findOrFail($id);
        $pelanggan = DetailPelanggan::select('id','nama')->get();
        return view('admin.produk.pembayaran.edit', compact('pembayaran', 'pelanggan'));
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
            'bayar'         => 'required',
        ]);
        $data = $request->all();

        $pembayaran = Pembayaran::findOrFail($id);

        $pembayaran->update($data);

        return redirect('pembayaran')->with('success', 'Data selesai di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();

        return back()->with('success', 'Data sudah di hapus');
    }
}
