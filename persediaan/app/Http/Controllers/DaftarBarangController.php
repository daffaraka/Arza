<?php

namespace App\Http\Controllers;

use App\Exports\BarangExport;
use App\Imports\BarangImport;
use App\Models\DaftarBarang;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class DaftarBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarbarang = DaftarBarang::all();
        return view('DaftarBarang.index', compact('daftarbarang'));
    }

    public function barangexport(){
        return Excel::download(new BarangExport, ('daftarbarang.xlsx'));
    }

    public function barangimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('DaftarBarang', $namafile);

        Excel::import(new BarangImport, public_path('/DaftarBarang/'.$namafile));
        return redirect('/DaftarBarang/index');
    }    

    public function cetakbarang()
    {
        $cetakbarang = DaftarBarang::get();
        return view('DaftarBarang.Cetak-Barang', compact('cetakbarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DaftarBarang.Create-Barang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        DaftarBarang::create([
            'nama_barang' => $request->nama,
            'jenis_barang' => $request->jenis,
        ]);

        return redirect('/DaftarBarang/index')->with('toast_success', 'Daftar Barang Tersimpan!');
        
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
        $daftarbarang = DaftarBarang::findorfail($id);
        return view('DaftarBarang.Edit-Barang', compact('daftarbarang'));
    }


    public function update(Request $request, $id)
    {
        $daftarbarang = DaftarBarang::findorfail($id);
       
        $daftarbarang->update($request->all());
        return redirect('/DaftarBarang/index')->with('toast_success', 'Daftar Barang Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftarbarang = DaftarBarang::findorfail($id);
        $daftarbarang->delete();
        return back()->with('info', 'Daftar Barang Berhasil Dihapus!');
    }
}
