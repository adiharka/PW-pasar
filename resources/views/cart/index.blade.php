@extends('layouts.app')

@section('content')
    <h2>Keranjang Belanja</h2>

    <table class="table">
    <thead>
    <tr>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($cartItems as $items)
    <tr>
        <td scope="row">{{$items->nama}}</td>
        <td>{{$items->harga}}</td>
        <td>
        <input type="number" value="{{$items->jumlah}}" >
        </td>
        <td>
        <form action="{{'cart_update',$items->id}}">
        <input type="number" name="jumlah" value="$items->id">
        <input type="submit" value="Simpan jumlah">
        </form>
        </td>
    </tr>
    </tbody>

    </table>
@endsection