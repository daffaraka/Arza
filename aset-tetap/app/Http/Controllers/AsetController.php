<?php

namespace App\Http\Controllers;

use App\Models\Aset;
use App\Models\Rekap;
use App\Exports\AsetExport;
use App\Imports\AsetImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AsetController extends Controller
{
    public function index()
    {
        $aset = Aset::all();
        return view('Aset.index', compact('aset'));
    }

    public function asetexport(){
        return Excel::download(new AsetExport, ('Aset.xlsx'));
    }

    public function asetimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('Aset', $namafile);

        Excel::import(new AsetImport, public_path('/Aset/'.$namafile));
        return redirect('/Aset/index');
    }    

    public function cetakaset()
    {
        $cetakaset = Aset::get();
        return view('Aset.Cetak-Aset', compact('cetakaset'));
    }

 
    public function create()
    {
        $rekap = Rekap::all();
        return view('Aset.Create-Aset',compact('rekap'));
    }

  
    public function store(Request $request)
    {

        
        Aset::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);

        return redirect('/Aset/index')->with('toast_success', 'Aset Tersimpan!');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $aset = Aset::findOrFail($id);
        $rekap = Rekap::all();
        return view('Aset.Edit-Aset', compact(['aset','rekap']));
    }

  
    public function update(Request $request, $id)
    {
       
        $aset = Aset::findorfail($id);
        $aset->update($request->all());
        return redirect('/Aset/index')->with('toast_success', 'Aset Berhasil Diperbarui!');
    }

  
    public function destroy($id)
    {
        $aset = Aset::findorfail($id);
        $aset->delete();
        return back()->with('info', 'Aset Berhasil Dihapus!');
    }
}
