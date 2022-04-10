<?php

namespace App\Http\Controllers;

use App\Models\KartuStok;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KartuStokExport;
use App\Imports\KartuStokImport;

class KartuStokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartustok = KartuStok::all();
        return view('KartuStok.index', compact('kartustok'));
    }

    public function kartustokexport(){
        return Excel::download(new KartuStokExport, ('kartustok.xlsx'));
    }

    public function kartustokimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('KartuStok', $namafile);

        Excel::import(new KartuStokImport, public_path('/KartuStok/'.$namafile));
        return redirect('/KartuStok/index');
    }    

    public function cetakkartustok()
    {
        $cetakkartustok = KartuStok::get();
        return view('KartuStok.Cetak-KartuStok', compact('cetakkartustok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('KartuStok.Create-KartuStok');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KartuStok::create([
            'tanggal'=>$request->tanggal,
            'nama_barang'=>$request->nama_barang,
            'unit_pemasukan'=>$request->unit_pemasukan,
            'harga_per_unit_pemasukan'=>$request->harga_per_unit_pemasukan,
            'total_harga_pemasukan'=>$request->total_harga_pemasukan,
            'unit_pengeluaran'=>$request->unit_pengeluaran,
            'harga_per_unit_pengeluaran'=>$request->harga_per_unit_pengeluaran,
            'total_harga_pengeluaran'=>$request->total_harga_pengeluaran,
            'unit_persediaan'=>$request->unit_persediaan,
            'harga_per_unit_persediaan'=>$request->harga_per_unit_persediaan,
            'total_harga_persediaan'=>$request->total_harga_persediaan,
            'keterangan'=>$request->keterangan,
        ]);

        return redirect('/KartuStok/index')->with('toast_success', 'Kartu Stok Tersimpan!');
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
        $kartustok = KartuStok::findorfail($id);
        $kartustok->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
