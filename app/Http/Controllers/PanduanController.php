<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Panduan;

class PanduanController extends Controller
{
    public function index()
    {
        $panduan = DB::table('panduan')->get();
        return view('admin.panduan',['panduan' => $panduan]);
    }

    public function tambahPanduan(Request $request)
    {
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required'
        ]);

        $panduan = new Panduan;
        $panduan->question = $request->question;
        $panduan->answer = $request->answer;
        $panduan->kategori = $request->kategori;

        $panduan->save();

        return redirect()->back()->with('sukses', 'Berhasil menambah panduan');
    }

    public function hapusPanduan($id)
    {
        DB::table('panduan')->where('id',$id)->delete();
		
        return redirect()->back()->with('sukses', 'Berhasil menghapus panduan');
    }

    public function editPanduan(Request $request,$id){
        $this->validate($request, [
            'question' => 'required',
            'answer' => 'required',
            'kategori' => 'required'
        ]);
        $panduan = Panduan::find($id);
        $panduan->question = $request->question;
        $panduan->answer = $request->answer;
        $panduan->kategori = $request->kategori;
        $panduan->save();
        return redirect()->back()->with('sukses', 'Berhasil mengedit panduan');
    }
}