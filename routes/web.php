<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', function () {
    return view('index');
});
Route::get('products', function () {
    return view('products');
});
Route::get('login_fix', function () {
    return view('login_fix');
});
Route::get('formPembelian', function () {
    return view('formPembelian');
});
Route::get('formToko', function () {
    return view('formToko');
});
Route::get('indexToko', function () {
    return view('indexToko');
});
Route::get('loginToko', function () {
    return view('loginToko');
});
Route::get('detailToko', function () {
    return view('detailToko');
});
Route::get('productsEdit', function () {
    return view('productsEdit');
});
Route::get('Payment_Fix', function () {
    return view('Payment_Fix');
});
Route::get('review', function () {
    return view('review');
});
Route::get('riwayatBeli', function () {
    return view('riwayatBeli');
});
Route::get('SignUp_fix', function () {
    return view('SignUp_fix');
});
Route::get('SignUpToko', function () {
    return view('SignUpToko');
});
Route::get('statusKirim', function () {
    return view('statusKirim');
});
Route::get('tambahproduk', function () {
    return view('tambahproduk');
});
Route::get('descBayam', function () {
    return view('descBayam');
});
Route::get('descBayamIjo', function () {
    return view('descBayamIjo');
});
Route::get('descCabai', function () {
    return view('descCabai');
});
Route::get('descLabu', function () {
    return view('descLabu');
});
Route::get('descPaprika', function () {
    return view('descPaprika');
});
Route::get('descSawi', function () {
    return view('descSawi');
});
Route::get('descTerong', function () {
    return view('descTerong');
});
Route::get('descTomat', function () {
    return view('descTomat');
});
Route::get('descWortel', function () {
    return view('descWortel');
});
Route::get('editBayam', function () {
    return view('editBayam');
});
Route::get('editBayamIjo', function () {
    return view('editBayamIjo');
});
Route::get('editCabai', function () {
    return view('editCabai');
});
Route::get('editLabu', function () {
    return view('editLabu');
});
Route::get('editPaprika', function () {
    return view('editPaprika');
});
Route::get('editSawi', function () {
    return view('editSawi');
});
Route::get('editTerong', function () {
    return view('editTerong');
});
Route::get('editTomat', function () {
    return view('editTomat');
});
Route::get('editWortel', function () {
    return view('editWortel');
});
Route::get('editToko', function () {
    return view('editToko');
});
Route::get('list_produk', function () {
    return view('list_produk');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});

Route::get('/list_produk','App\Http\Controllers\ProdukController@index_user')->name('list_produk');
Route::get('/data_produk','App\Http\Controllers\ProdukController@index')->name('data_produk');
Route::get('/create_produk','App\Http\Controllers\ProdukController@create')->name('create_produk');
Route::post('/simpan_produk','App\Http\Controllers\ProdukController@store')->name('simpan_produk');
Route::get('/edit_produk/{id_barang}','App\Http\Controllers\ProdukController@edit')->name('edit_produk');
Route::get('/delete_produk/{id_barang}','App\Http\Controllers\ProdukController@destroy')->name('delete_produk');
Route::post('/update_produk/{id_barang}','App\Http\Controllers\ProdukController@update')->name('update_produk');

Route::get('/detail_toko','App\Http\Controllers\TokoController@index')->name('detail_toko');
Route::get('/create_toko','App\Http\Controllers\TokoController@create')->name('create_toko');
Route::post('/simpan_toko','App\Http\Controllers\TokoController@store')->name('simpan_toko');

Route::get('/data_gambar','App\Http\Controllers\GambarprodukController@index')->name('data_gambar');
Route::post('/simpan_gambar','App\Http\Controllers\GambarprodukController@store')->name('simpan_gambar');
Route::get('/create_gambar','App\Http\Controllers\GambarprodukController@create')->name('create_gambar');

Route::get('/add_to_cart/{id_barang}','App\Http\Controllers\CartController@add')->name('add_to_cart')->middleware('auth');
Route::get('/cart','App\Http\Controllers\CartController@index')->name('cart')->middleware('auth');
Route::get('/delete_cart/{id_barang}','App\Http\Controllers\CartController@destroy')->name('delete_cart');
Route::get('/update_cart/{id_barang}','App\Http\Controllers\CartController@update')->name('update_cart');


Auth::routes();
 
Route::middleware(['auth'])->group(function () {
 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);
    });
 
    Route::middleware(['user'])->group(function () {
        Route::get('user', [UserController::class, 'index']);
    });
 
    Route::get('/logout', function() {
        Auth::logout();
        redirect('/');
        return view('login');
    });
 
});

