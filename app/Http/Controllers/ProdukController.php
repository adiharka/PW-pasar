<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtProduk = produk::all();
        return view('produk.data_produk', compact('dtProduk'));
    }
    public function index_user()
    {
        $dtProduk = produk::all();
        return view('produk.list_produk', compact('dtProduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create_produk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        produk::create([
            'nama_barang'=>$request->nama_barang,
            'harga'=>$request->harga,
            'stok'=>$request->stok,
            'berat'=>$request->berat,
            'deskripsi'=>$request->deskripsi,
            'review'=>$request->review,
            'variasi'=>$request->variasi,
        ]);
        return redirect('data_produk');
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
        $pdk = produk::findorfail($id);
        return view('produk.edit_produk', compact('pdk'));
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
        $pdk = produk::findorfail($id);
        $pdk -> update($request->all());
        return redirect('data_produk')->with('status','Data Berhasil Diupdate');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pdk = produk::findorfail($id);
        $pdk -> delete();
        return back()->with('info','Data Berhasil Dihapus');;
    }
}
