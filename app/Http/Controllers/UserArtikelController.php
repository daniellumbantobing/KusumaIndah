<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use Illuminate\Support\Facades\DB;

class UserArtikelController extends Controller
{
    public function index(){
        $artikel = DB::table('artikel')->get();

        return view('user.artikel', ['artikel' => $artikel]);
    }

    public function tampilArtikel($id)
    {
       $artikel = DB::table('artikel')->find($id);

        return view('user.tampilartikel', ['artikel' => $artikel]);
    }
}
