<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(produk $produk){
        
        //$produk = produk::find($id_barang);
        \Cart::session(auth()->id())->add(array(
            'id' => uniqid($produk->id_barang),
            'nama' => $produk->nama_barang,
            'harga' => $produk->harga,
            'jumlah' => 1,
            'attributes' => array(),
            'associatedModel' => $produk
        ));
        return redirect()->route('cart');
    }
    public function index()
    {
        $cartItems = \Cart::session(auth()->id()->getContent());
        return view('cart.index', compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($rowId)
    {
        \Cart::session(auth()->id()->update($itemId, [
            'jumlah'=>array(
                'relative' => false,
                'value' => request('jumlah')
            )
        ]));
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($itemId)
    {
        \Cart::session(auth()->id()->remove($itemId));
        return back();
    }
}
