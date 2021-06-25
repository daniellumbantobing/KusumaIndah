<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::latest()->get();
        return view('admin.produk', compact(['produk']));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_produk' => 'required|min:3',
            'deskripsi' => 'required',
            'nama_travel' => 'required',
            'itinerary' => 'required',
            'harga' => 'required',
            'fasilitas' => 'required',
            'notes' => 'required',
            'gbr1' => 'mimes:jpeg,png,jpg',
            'gbr2' => 'nullable|mimes:jpg,jpeg,png',
            'gbr3' => 'nullable|mimes:jpg,jpeg,png',
            'gbr4' => 'nullable|mimes:jpg,jpeg,png',
            'gbr5' => 'nullable|mimes:jpg,jpeg,png',
            'type' => 'required'
        ]);


        $imgName1 = $request->gbr1->getClientOriginalName() . '-' . time()
            . '.' . $request->gbr1->extension();

        $request->gbr1->move(public_path('product'), $imgName1);


        if ($request->hasFile('gbr2')) {
            $imgName2 = $request->gbr2->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr2->extension();

            $request->gbr2->move(public_path('product'), $imgName2);
        } else {

            $imgName2 = NULL;
        }
        if ($request->hasFile('gbr3')) {
            $imgName3 = $request->gbr3->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr3->extension();

            $request->gbr3->move(public_path('product'), $imgName3);
        } else {

            $imgName3 = NULL;
        }

        if ($request->hasFile('gbr4')) {

            $imgName4 = $request->gbr4->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr4->extension();

            $request->gbr4->move(public_path('product'), $imgName4);
        } else {

            $imgName4 = NULL;
        }

        if ($request->hasFile('gbr5')) {

            $imgName5 = $request->gbr5->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr5->extension();

            $request->gbr5->move(public_path('product'), $imgName5);
        } else {

            $imgName5 = NULL;
        }
        $produk = new Produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->nama_travel = $request->nama_travel;
        $produk->itenerary = $request->itinerary;
        $produk->fasilitas = $request->fasilitas;
        $produk->harga = $request->harga;
        $produk->notes = $request->notes;
        $produk->type = $request->type;
        $produk->gbr1 = $imgName1;
        $produk->gbr2 = $imgName2;
        $produk->gbr3 = $imgName3;
        $produk->gbr4 = $imgName4;
        $produk->gbr5 = $imgName5;
        $produk->save();

        return redirect()->back()->with('sukses', 'Berhasil menambah produk');
    }

    public function delete($id)
    {
        Produk::findOrFail($id)->delete();

        return redirect()->back()->with('sukses', 'Berhasil menghapus produk');
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'nama_produk' => 'required|min:3',
            'deskripsi' => 'required',
            'nama_travel' => 'required',
            'itinerary' => 'required',
            'harga' => 'required',
            'fasilitas' => 'required',
            'notes' => 'required',
            'gbr1' => 'mimes:jpeg,png,jpg',
            'gbr2' => 'nullable|mimes:jpg,jpeg,png',
            'gbr3' => 'nullable|mimes:jpg,jpeg,png',
            'gbr4' => 'nullable|mimes:jpg,jpeg,png',
            'gbr5' => 'nullable|mimes:jpg,jpeg,png',
            'type' => 'required'
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());


        if ($request->hasFile('gbr1')) {
            $imgName1 = $request->gbr1->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr1->extension();

            $request->gbr1->move(public_path('product'), $imgName1);

            $produk->gbr1 = $imgName1;
            $produk->save();
        }
        if ($request->hasFile('gbr2')) {
            $imgName2 = $request->gbr2->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr2->extension();

            $request->gbr2->move(public_path('product'), $imgName2);

            $produk->gbr2 = $imgName2;
            $produk->save();
        }
        if ($request->hasFile('gbr3')) {
            $imgName3 = $request->gbr3->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr3->extension();

            $request->gbr3->move(public_path('product'), $imgName3);

            $produk->gbr3 = $imgName3;
            $produk->save();
        }

        if ($request->hasFile('gbr4')) {
            $imgName4 = $request->gbr4->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr4->extension();

            $request->gbr4->move(public_path('product'), $imgName4);

            $produk->gbr4 = $imgName4;
            $produk->save();
        }

        if ($request->hasFile('gbr5')) {
            $imgName5 = $request->gbr5->getClientOriginalName() . '-' . time()
                . '.' . $request->gbr5->extension();

            $request->gbr5->move(public_path('product'), $imgName5);

            $produk->gbr5 = $imgName5;
            $produk->save();
        }


        return back()->with('sukses', 'Data Produk Berhasil Diupdate');
    }
}