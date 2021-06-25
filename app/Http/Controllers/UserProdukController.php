<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Illuminate\Support\Facades\DB;

class UserProdukController extends Controller
{
    public function index(){
        $produk = DB::table('produk')->get();

        return view('user.produk', ['produk' => $produk]);
    }

    public function openTrip(){
        $produk = DB::table('produk')->where('type','Open Trip')->get();

        return view('user.produk', ['produk' => $produk]); 
    }

    public function privateTrip(){
        $produk = DB::table('produk')->where('type','Private Trip')->get();

        return view('user.produk', ['produk' => $produk]); 
    }
}
