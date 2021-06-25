<?php

use App\Produk;
use App\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


//User Index
Route::get('/', 'UserIndexController@index');




Route::get('/', function () {
    if (!Auth::check() || Auth::user()->email_verified_at) {
        $artikel = Artikel::orderBy('created_at', 'ASC')->take(3)->get();
        $produk = Produk::orderBy('nama_produk', 'ASC')->take(6)->get();
        return view('layouts_user.main', ['produk' => $produk, 'artikel' => $artikel]);
    } else {
        return redirect('/email/verify');
    }
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['role:admin']], function () {

    Route::get('/admin', function () {
        return view('admin.index');
    });

    //Kota
    Route::get('/kota', 'KotaController@index');
    Route::post('/create/kota', 'KotaController@createkota');
    Route::get('/delete/{id}/kota', 'KotaController@delete');
    Route::post('/edit/{id}/kota', 'KotaController@edit');


    //panduan
    Route::get('/panduan', 'PanduanController@index');
    Route::post('panduan/tambah', 'PanduanController@tambahPanduan');
    Route::get('panduan/hapus/{id}', 'PanduanController@hapusPanduan');
    Route::post('panduan/edit/{id}', 'PanduanController@editPanduan');
    //search belum

    //travel_reguler
    Route::get('/travel_reguler', 'TRegulerController@index');
    Route::post('/travel_reguler/tambah', 'TRegulerController@tambah');
    Route::get('/travel_reguler/hapus/{id}', 'TRegulerController@hapus');
    Route::get('travel_reguler/cari', 'TRegulerController@cari');
    Route::post('travel_reguler/edit/{id}', 'TRegulerController@edit');

    //Artikel
    Route::get('/artikel', 'ArtikelController@index');
    Route::post('/create/artikel', 'ArtikelController@create');
    Route::get('/delete/{id}/artikel', 'ArtikelController@delete');
    Route::post('/edit/{id}/artikel', 'ArtikelController@update');
    Route::get('/view/{id}/artikel', 'ArtikelController@view');

    //Produk
    Route::get('/produk', 'ProdukController@index');
    Route::post('/create/produk', 'ProdukController@create');
    Route::get('/delete/{id}/produk', 'ProdukController@delete');
    Route::post('/edit/{id}/produk', 'ProdukController@update');
});

Route::group(['middleware' => ['role:user', 'verified']], function () {




    Route::get('/home', 'HomeController@index')->name('home');
});

//User Artikel
Route::get('/ArtikelUser', 'UserArtikelController@index');
Route::get('/ArtikelUser/tampil/{id}', 'UserArtikelController@tampilArtikel');

//User Produk
Route::get('/ProdukUser', 'UserProdukController@index');

//User Panduan
Route::get('/PanduanUser', 'UserPanduanController@index');
Route::get('/PanduanUser/OpenTrip', 'UserPanduanController@openTrip');
Route::get('/PanduanUser/PrivateTrip', 'UserPanduanController@privateTrip');
Route::get('/PanduanUser/TravelReguler', 'UserPanduanController@travelReguler');

//User
//Artikel
Route::get('/ArtikelUser', 'UserArtikelController@index');