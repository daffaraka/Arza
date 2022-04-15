<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\MutasiExport;
use App\Imports\MutasiImport;
use App\Models\Mutasi;
use App\Models\Rekap;
use Maatwebsite\Excel\Facades\Excel;

class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mutasi = Mutasi::all();
        return view('Mutasi.index', compact('mutasi'));
    }

    public function mutasiexport(){
        return Excel::download(new MutasiExport, ('Mutasi Barang.xlsx'));
    }

    public function Mutasiimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('Mutasi', $namafile);

        Excel::import(new MutasiImport, public_path('/Mutasi/'.$namafile));
        return redirect('/Mutasi/index');
    }    

    public function cetakmutasi()
    {
        $cetakmutasi = Mutasi::get();
        return view('Mutasi.Cetak-Mutasi', compact('cetakmutasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rekap = Rekap::all();
        return view('Mutasi.Create-Mutasi',compact('rekap'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Mutasi::create([
            'kode_barang' => $request->kode_barang,
            'register' => $request->register,
            'nama' => $request->nama,
            'merk' => $request->merk,
            'bahan' => $request->bahan,
            'cara_perolehan' => $request->cara_perolehan,
            'ukuran_barang' => $request->ukuran_barang,
            'satuan' => $request->satuan,
            'kondisi' => $request->kondisi,
            'barang' => $request->barang,
            'harga' => $request->harga,
        ]);

        return redirect('/Mutasi/index')->with('toast_success', 'Mutasi Barang Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $mutasi = Mutasi::findOrFail($id);
        $rekap = Rekap::all();
        return view('Mutasi.Edit-Mutasi',compact(['mutasi','rekap']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $aset = Mutasi::findorfail($id);
        $aset->update($request->all());
        return redirect('/Mutasi/index')->with('toast_success', 'Mutasi Barang Tersimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mutasi = Mutasi::findorfail($id);
        $mutasi->delete();
        return back()->with('info', 'Mutasi Berhasil Dihapus!');
    }
}
