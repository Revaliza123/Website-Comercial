<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class HomeController extends Controller
{
    function index() {
        $data = produk::latest()->get();
        return view('home', compact('data'));
    }

    function show($id) {
        $data = produk::findOrFail($id);
        return view('deskripsi', compact('data'));
    }
    // function create() {
    //     return view('tambah');
    // }

    // function store(Request $request)  {
    //     $nm = $request->produk;
    //     $namaFile= $nm->getClientOriginalName();

    //         $tambah = new produk ;
    //         $tambah->nama = $request->nama;
    //         $tambah->deskripsi = $request->deskripsi;
    //         $tambah->produk = $namaFile;
    //         $tambah->harga = $request->harga;

    //         $nm->move(public_path().'/img', $namaFile);
    //         $tambah->save();
            
    //         return redirect('produk');

    // }

    // function edit($id) {
    //     $data = produk::findOrFail($id);
    //     return view('edit',compact('data'));
    // }

    // function update(Request $request,$id)  {
    //     $ubah = produk::findOrFail($id);
    //     $awal = $ubah->produk;

    //     $data = [
    //         'nama' => $request['nama'],
    //         'deskripsi' => $request['deskripsi'],
    //         'produk' => $awal,
    //         'harga' => $request['harga'],
    //     ];
    //     $request->produk->move(public_path().'/img',$awal);
    //     $ubah->update($data);
    //     return redirect('produk');
    // }

    // function destroy($id) {
    //     $hapus = produk::findOrFail($id);
    //     $file = public_path('/img').$hapus->produk;

    //     if (file_exists($file)) {
    //         @unlink($file);
    //     }
    //     $hapus->delete();
    //     return back();
    
}
