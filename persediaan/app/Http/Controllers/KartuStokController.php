<?php

namespace App\Http\Controllers;

use App\Models\KartuStok;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KartuStokExport;
use App\Imports\KartuStokImport;

class KartuStokController extends Controller
{
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

    public function create()
    {
        return view('KartuStok.Create-KartuStok');
    }

    public function store(Request $request)
    {
        KartuStok::create([
            'tanggal'=>$request->tanggal,
            'nama_barang'=>$request->nama_barang,
            'unit_pemasukan'=>$request->unit_pemasukan,
            'harga_per_unit_pemasukan'=>$request->harga_per_unit_pemasukan,
            'total_harga_pemasukan'=>$request->total_harga_pemasukan,
            'unit_persediaan'=>$request->unit_pemasukan,
            'harga_per_unit_persediaan'=>$request->harga_per_unit_pemasukan,
            'total_harga_persediaan'=>$request->total_harga_pemasukan,
            'keterangan_1'=>$request->keterangan_1,
            'keterangan_2'=> 'TU/Bidang',

        ]);

        return redirect('/KartuStok/index')->with('toast_success', 'Kartu Stok Tersimpan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kartustok = KartuStok::findOrFail($id);
        return view('KartuStok.Edit-KartuStok', compact('kartustok'));
    }

    public function update(Request $request, $id)
    {
        $kartustok = KartuStok::find($id);
        $kartustok->update($request->all());
        return redirect('/KartuStok/index')->with('toast_success', 'Kartu Stok Telah Diperbarui!');

    }

    public function destroy($id)
    {
        $kartustok = KartuStok::findorfail($id);
        $kartustok->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }


    public function indexPemasukkanKartuStok()
    {
        $kartustok = KartuStok::all();
        return view('KartuStok.Pemasukkan.Index-Pemasukkan-KartuStok',compact('kartustok'));
    }
    public function createPemasukkan($id)
    {
        $kartustok = KartuStok::findOrFail($id);

        return view('KartuStok.Pemasukkan.Create-Pemasukkan-KartuStok', compact('kartustok'));
    }

    public function storePemasukkan($id,Request $request)
    {
        $kartustok = KartuStok::findOrFail($id);
        $kartustok->update($request->all());
        return redirect('/KartuStok/index')->with('toast_success', 'Pemasukkan Kartu Stok Telah Ditambahkan!');
    }


    public function indexPengeluaranKartuStok()
    {
        $kartustok = KartuStok::all();
                 return view('KartuStok.Pengeluaran.Index-Pengeluaran-KartuStok',compact('kartustok'));
    }

    public function createPengeluaran($id)
    {
        $kartustok = KartuStok::findOrFail($id);
        
        return view('KartuStok.Pengeluaran.Create-Pengeluaran-KartuStok', compact('kartustok'));
    }

    public function storePengeluaran($id,Request $request)
    {
      
        $kartustok = KartuStok::findOrFail($id);
        $kartustok->update($request->all());
        $kartustok->decrement('unit_persediaan',$request->unit_pengeluaran);
        $kartustok->decrement('total_harga_persediaan',$request->unit_pengeluaran * $request->harga_per_unit_pengeluaran);

        return redirect('/Pengeluaran-KartuStok/index')->with('toast_success', 'Pengeluaran Kartu Stok Telah diperbarui!');
    }

}
