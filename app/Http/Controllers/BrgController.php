<?php

namespace App\Http\Controllers;

use App\Models\Brg;
use Illuminate\Http\Request;

class BrgController extends Controller
{
    public function index(){
        $barangs = Brg::all();
        return view('dashboard', compact('barangs'));
    }
    
    public function store(Request $request){
        $this->validate($request,[
            'kode_brg' => 'required',
            'nm_brg' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ],
        [
            'kode_brg.required' => "Kode Barang Tidak Boleh Kosong",
            'nm_brg.required' => "Nama Barang Tidak Boleh Kosong",
            'harga.required' => "Harga Barang Tidak Boleh Kosong",
            'stok.required' => "Stok Barang Tidak Boleh Kosong",
        ]);

        Brg::create([
            'kode_brg' => $request->kode_brg,
            'nm_brg' => $request->nm_brg,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()->route('dashboard')->with('success', 'Barang berhasil ditambahkan');
    }
    
    public function edit($kode_brg){
        $barangs = Brg::where('kode_brg', $kode_brg)->first();
        // dd($barangs);
        return view('edit',compact('barangs'));
    }
    public function update(Request $request,Brg $brg){
        $brg = Brg::where('kode_brg',$request->kode_brg);

        $validateData = $request->validate([
            'kode_brg' => 'required',
            'nm_brg' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ],
        [
            'kode_brg.required' => "Kode Barang Tidak Boleh Kosong",
            'kode_brg.uniqe' => "Kode Barang Sudah Tersedia",
            'nm_brg.required' => "Nama Barang Tidak Boleh Kosong",
            'harga.required' => "Harga Barang Tidak Boleh Kosong",
            'stok.required' => "Stok Barang Tidak Boleh Kosong",
        ]);

        Brg::where('kode_brg' , $request->kode_brg)->update($validateData);
        return redirect()->route('dashboard')->with('success', 'Barang berhasil diedit');
    }
    public function destroy($kode_brg){
        $barangs = Brg::where('kode_brg', $kode_brg)->first();
        if($barangs){
            $barangs->delete();
            return redirect()->route('dashboard')->with('success','Barang berhasil dihapus');
        }
    }
}
