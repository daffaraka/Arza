<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\AsetExport;
use App\Imports\AsetImport;
use App\Models\Aset;
use Maatwebsite\Excel\Facades\Excel;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Aset.Create-Aset');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $aset = Aset::findorfail($id);
        return view('Aset.Edit-Aset', compact('aset'));
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
        $aset = Aset::findorfail($id);
        $aset->update($request->all());
        return redirect('/Aset/index')->with('toast_success', 'Aset Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aset = Aset::findorfail($id);
        $aset->delete();
        return back()->with('info', 'Aset Berhasil Dihapus!');
    }
}
