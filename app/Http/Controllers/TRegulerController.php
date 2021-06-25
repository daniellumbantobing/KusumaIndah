<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TravelReguler;
use DateTime;
use Carbon\Carbon;

class TRegulerController extends Controller
{
    public function index()
    {
        $travel_reguler = DB::table('travel_reguler')->get();
        return view('admin.travel_reguler',['travel_reguler' => $travel_reguler]);
    }

    public function hapus($id){

    if(DB::table('travel_reguler')->where('tanggal', '!=', Carbon::now()->toDateString())->where('id',$id)->delete()){
        return redirect()->back()->with('sukses', 'Berhasil menghapus travel');
    }else{
        return redirect()->back()->with('error', 'Tidak bisa dihapus,Masih ada transaksi bisnis yang terjadi'); 
        }    
    }

    public function tambah(Request $request){
        $this->validate($request, [
            'nama_travel' => 'required',
            'asal_berangkat' => 'required',
            'tujuan'=>'required',
            'tanggal'=>'required|distinct',
            'jam'=>'required|distinct',
            'jenis_kendaraan'=>'required',
            'harga'=>'required',
            'seat'=>'required',
            'deskripsi'=>'required',
        ]);

      $gett = DB::table('travel_reguler')
        ->where('nama_travel',$request->nama_travel)
        ->where('tanggal',$request->tanggal)
        ->where('jam',$request->jam)
        ->get();

        if($gett->count() > 0 ){
            return redirect()->back()->with('error', 'Tidak berhasil menambah Travel karena berada di jam yang sama');
        }else{
            $tr = DB::table('travel_reguler')->insert([
                'nama_travel' => $request->nama_travel,
                'asal_berangkat' => $request->asal_berangkat,
                'tujuan' => $request->tujuan,
                'tanggal' => $request->tanggal,
                'jam' => $request->jam,
                'jenis_kendaraan' => $request->jenis_kendaraan,
                'harga' => $request->harga,
                'seat' => $request->seat,
                'deskripsi' => $request->deskripsi
            ]);
            return redirect()->back()->with('sukses', 'Berhasil menambah Travel');
        }
       
    }

    public function edit(Request $request,$id){
        $this->validate($request, [
            'nama_travel' => 'required|',
            'asal_berangkat' => 'required',
            'tujuan'=>'required',
            'tanggal'=>'required',
            'jam'=>'required',
            'jenis_kendaraan'=>'required',
            'harga'=>'required',
            'seat'=>'required',
            'deskripsi'=>'required',
        ]);

        if(DB::table('travel_reguler')->where('tanggal', '=', Carbon::now()->toDateString())->where('id',$id)){
            return redirect()->back()->with('error', 'Tidak bisa di edit,Masih ada transaksi bisnis yang terjadi');
        }else{
            $gett = DB::table('travel_reguler')->where('nama_travel',$request->nama_travel)
            ->where('tanggal',$request->tanggal)
            ->where('jam',$request->jam)
            ->get();
    
            if($gett->count() > 0 ){
                return redirect()->back()->with('error', 'Tidak berhasil karena berada di jam yang sama');
            }else{
                $id = TravelReguler::find($id);
                $tr = $id;
                $tr = DB::table('travel_reguler')->update([
                    'nama_travel' => $request->nama_travel,
                    'asal_berangkat' => $request->asal_berangkat,
                    'tujuan' => $request->tujuan,
                    'tanggal' => $request->tanggal,
                    'jam' => $request->jam,
                    'jenis_kendaraan' => $request->jenis_kendaraan,
                    'harga' => $request->harga,
                    'seat' => $request->seat,
                    'deskripsi' => $request->deskripsi
                ]);
                return redirect()->back()->with('sukses', 'Berhasil mengedit Travel');
            }
        } 
    }

}
