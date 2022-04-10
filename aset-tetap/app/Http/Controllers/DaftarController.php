<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DaftarExport;
use App\Imports\DaftarImport;
use App\Models\Daftar;
use Maatwebsite\Excel\Facades\Excel;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar = Daftar::all();
        return view('Daftar.index', compact('daftar'));
    }

    public function daftarexport(){
        return Excel::download(new DaftarExport, ('Daftar Aset Tetap.xlsx'));
    }

    public function daftarimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('Daftar', $namafile);

        Excel::import(new DaftarImport, public_path('/Daftar/'.$namafile));
        return redirect('/Daftar/index');
    }    

    public function cetakdaftar()
    {
        $cetakdaftar = Daftar::get();
        return view('Daftar.Cetak-Daftar', compact('cetakdaftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Daftar.Create-Daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Daftar::create([
            'kode_barang' => $request->kode_barang,
            'register' => $request->register,
            'nama' => $request->nama,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'harga_beli' => $request->harga_beli,
            'umur_ekonomis' => $request->umur_ekonomis,
            'biaya_peny' => $request->biaya_peny,
            'jmlh_barang' => $request->jmlh_barang,
            'kondisi' => $request->kondisi,
            'ket' => $request->ket,
        ]);

        return redirect('/Daftar/index')->with('toast_success', 'Daftar Aset Tetap Tersimpan!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftar = Daftar::findorfail($id);
        $daftar->delete();
        return back()->with('info', 'Daftar Aset Tetap Berhasil Dihapus!');
    }
}
