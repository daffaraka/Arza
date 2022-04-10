<?php

namespace App\Http\Controllers;

use App\Models\Penerimaan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PenerimaanExport;
use App\Imports\PenerimaanImport;

class PenerimaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerimaan = Penerimaan::all();
        return view('Penerimaan.index', compact('penerimaan'));
    }

    public function penerimaanexport(){
        return Excel::download(new PenerimaanExport, ('penerimaan.xlsx'));
    }

    public function penerimaanimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('Penerimaan', $namafile);

        Excel::import(new PenerimaanImport, public_path('/Penerimaan/'.$namafile));
        return redirect('/Penerimaan/index');
    }    

    public function cetakpenerimaan()
    {
        $cetakpenerimaan = Penerimaan::get();
        return view('Penerimaan.Cetak-Penerimaan', compact('cetakpenerimaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Penerimaan.Create-Penerimaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Penerimaan::create([
            'tanggal' => $request->tanggal,
            'dari' => $request->dari,
            'tanggal_faktur'=>$request->tanggal_faktur,
            'nama_barang'=>$request->nama_barang,
            'sumber_dana'=>$request->sumber_dana,
            'banyaknya'=>$request->banyaknya,
            'harga_satuan'=>$request->harga_satuan,
            'jumlah_harga'=>$request->jumlah_harga,
            'tanggal_penerimaan'=>$request->tanggal_penerimaan,
            'keterangan'=>$request->keterangan,
        ]);

        return redirect('/Penerimaan/index')->with('toast_success', 'Penerimaan Tersimpan!');
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
        $penerimaan = Penerimaan::findorfail($id);
        $penerimaan->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
