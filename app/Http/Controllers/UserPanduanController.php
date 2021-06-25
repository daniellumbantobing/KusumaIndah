<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Panduna;
use Illuminate\Support\Facades\DB;

class UserPanduanController extends Controller
{
    public function index(){
        $panduan = DB::table('panduan')->get();

        return view('user.panduan', ['panduan' => $panduan]);
    }

    public function openTrip()
    {
        $op = DB::table('panduan')->where('kategori','Open Trip')->get();

        return view('user.tampilpanduan', ['panduan' => $op]);
    }

    public function privateTrip()
    {
        $op = DB::table('panduan')->where('kategori','Private Trip')->get();

        return view('user.tampilpanduan', ['panduan' => $op]);
    }

    public function travelReguler()
    {
        $op = DB::table('panduan')->where('kategori','Travel Reguler')->get();

        return view('user.tampilpanduan', ['panduan' => $op]);
    }
}
