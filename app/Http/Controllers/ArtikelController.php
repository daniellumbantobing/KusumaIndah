<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class ArtikelController extends Controller
{
    public function index()
    {

        $artikel = Artikel::latest()->get();
        return view('admin.article', compact(['artikel']));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:3',
            'deskripsi' => 'required',
            'tags' => 'required',
            'gbr1' => 'mimes:jpeg,png,jpg',
            'gbr2' => 'nullable|mimes:jpg,jpeg,png',
            'gbr3' => 'nullable|mimes:jpg,jpeg,png',
            'gbr4' => 'nullable|mimes:jpg,jpeg,png',
            'gbr5' => 'nullable|mimes:jpg,jpeg,png'
        ]);


        $imgName1 = $request->gbr1->getClientOriginalName() . '-' . time()
            . '.' . $request->gbr1->extension();

        $request->gbr1->move(public_path('article'), $imgName1);


        if ($request->hasFile('gbr2')) {
            $imgName2 = $request->gbr2->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr2->extension();

            $request->gbr2->move(public_path('article'), $imgName2);
        } else {

            $imgName2 = NULL;
        }
        if ($request->hasFile('gbr3')) {
            $imgName3 = $request->gbr3->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr3->extension();

            $request->gbr3->move(public_path('article'), $imgName3);
        } else {

            $imgName3 = NULL;
        }

        if ($request->hasFile('gbr4')) {

            $imgName4 = $request->gbr4->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr4->extension();

            $request->gbr4->move(public_path('article'), $imgName4);
        } else {

            $imgName4 = NULL;
        }

        if ($request->hasFile('gbr5')) {

            $imgName5 = $request->gbr5->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr5->extension();

            $request->gbr5->move(public_path('article'), $imgName5);
        } else {

            $imgName5 = NULL;
        }



        $artikel = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->tags = $request->tags;
        $artikel->gbr1 = $imgName1;
        $artikel->gbr2 = $imgName2;
        $artikel->gbr3 = $imgName3;
        $artikel->gbr4 = $imgName4;
        $artikel->gbr5 = $imgName5;

        $artikel->save();

        return redirect()->back()->with('sukses', 'Berhasil menambah artikel');
    }

    public function delete($id)
    {
        Artikel::findOrFail($id)->delete();
        return redirect()->back()->with('sukses', 'Berhasil menghapus artikel');
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'judul' => 'required|min:3',
            'deskripsi' => 'required',
            'tags' => 'required',
            'gbr1' => 'mimes:jpeg,png,jpg',
            'gbr2' => 'nullable|mimes:jpg,jpeg,png',
            'gbr3' => 'nullable|mimes:jpg,jpeg,png',
            'gbr4' => 'nullable|mimes:jpg,jpeg,png',
            'gbr5' => 'nullable|mimes:jpg,jpeg,png'
        ]);

        $artikel = Artikel::findOrFail($id);
        $artikel->update($request->all());


        if ($request->hasFile('gbr1')) {
            $imgName1 = $request->gbr1->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr1->extension();

            $request->gbr1->move(public_path('article'), $imgName1);

            $artikel->gbr1 = $imgName1;
            $artikel->save();
        }
        if ($request->hasFile('gbr2')) {
            $imgName2 = $request->gbr2->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr2->extension();

            $request->gbr2->move(public_path('article'), $imgName2);

            $artikel->gbr2 = $imgName2;
            $artikel->save();
        }
        if ($request->hasFile('gbr3')) {
            $imgName3 = $request->gbr3->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr3->extension();

            $request->gbr3->move(public_path('article'), $imgName3);

            $artikel->gbr3 = $imgName3;
            $artikel->save();
        }

        if ($request->hasFile('gbr4')) {
            $imgName4 = $request->gbr4->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr4->extension();

            $request->gbr4->move(public_path('article'), $imgName4);

            $artikel->gbr4 = $imgName4;
            $artikel->save();
        }

        if ($request->hasFile('gbr5')) {
            $imgName5 = $request->gbr5->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr5->extension();

            $request->gbr5->move(public_path('article'), $imgName5);

            $artikel->gbr5 = $imgName5;
            $artikel->save();
        }


        return back()->with('sukses', 'Data Artikel Berhasil Diupdate');
    }

    public function view($id)
    {
        $art = Artikel::findOrFail($id);

        return view('admin.viewartikel', compact(['art']));
    }
}