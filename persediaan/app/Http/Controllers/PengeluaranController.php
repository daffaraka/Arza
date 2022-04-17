<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PengeluaranExport;
use App\Imports\PengeluaranImport;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluaran = Pengeluaran::all();
        return view('Pengeluaran.index', compact('pengeluaran'));
    }

    public function pengeluaranexport(){
        return Excel::download(new PengeluaranExport, ('pengeluaran.xlsx'));
    }

    public function pengeluaranimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('Pengeluaran', $namafile);

        Excel::import(new PengeluaranImport, public_path('/Pengeluaran/'.$namafile));
        return redirect('/Pengeluaran/index');
    }    

    public function cetakpengeluaran()
    {
        $cetakpengeluaran = Pengeluaran::get();
        return view('Pengeluaran.Cetak-Pengeluaran', compact('cetakpengeluaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pengeluaran.Create-Pengeluaran');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengeluaran::create([
            'nama_barang'=>$request->nama_barang,
            'sumber_dana'=>$request->sumber_dana,
            'banyaknya'=>$request->banyaknya,
            'harga_satuan'=>$request->harga_satuan,
            'jumlah_harga'=>$request->jumlah_harga,
            'untuk'=>$request->untuk,
            'tanggal_penyerahan'=>$request->tanggal_penyerahan,
            'keterangan'=>$request->keterangan,
        ]);

        return redirect('/Pengeluaran/index')->with('toast_success', 'Pengeluaran Tersimpan!');
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
        $pengeluaran = Pengeluaran::findOrFail($id);
        return view('Pengeluaran.Edit-Pengeluaran',compact('pengeluaran'));
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
        $pengeluaran = Pengeluaran::findOrFail($id);
        $pengeluaran->update($request->all());

        return redirect('/Pengeluaran/index')->with('toast_success', 'Pengeluaran Tersimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Pengeluaran = Pengeluaran::findorfail($id);
        $Pengeluaran->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
