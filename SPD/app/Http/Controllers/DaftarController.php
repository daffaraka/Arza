<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;
use App\Exports\DaftarExport;
use App\Imports\DaftarImport;
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
        return Excel::download(new DaftarExport, ('Daftar Kegiatan Belanja.xlsx'));
    }

    public function daftarimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('Daftar', $namafile);

        Excel::import(new DaftarImport, public_path('/Daftar/'.$namafile));
        return redirect('/Daftar/index')->with('toast_success', 'Daftar Kegiatan Belanja Tersimpan!');
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return back()->with('info', 'Daftar Kegiatan Belanja Berhasil Dihapus!');
    }
}
