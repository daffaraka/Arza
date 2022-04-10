<?php

namespace App\Http\Controllers;

use App\Models\GUSPJ;
use Illuminate\Http\Request;
use App\Exports\SPJExport;
use App\Imports\SPJImport;
use Maatwebsite\Excel\Facades\Excel;

class GUSPJController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guspj = GUSPJ::all();
        return view('SPJ.index', compact('guspj'));
    }

    public function spjexport(){
        return Excel::download(new SPJExport, ('GUSPJ.xlsx'));
    }

    public function spjimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('SPJ', $namafile);

        Excel::import(new SPJImport, public_path('/SPJ/'.$namafile));
        return redirect('/SPJ/index');
    }  

    public function cetakspj()
    {
        $cetakguspj = GUSPJ::get();
        return view('SPJ.Cetak-SPJ', compact('cetakguspj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SPJ.Create-SPJ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        GUSPJ::create([
            'tgl_input' => $request->tgl_input,
            'triwulanke' => $request->triwulanke,
            'tahun' => $request->tahun,
            'kode' => $request->kode,
            'nama_kegiatan' => $request->nama_kegiatan,
            'spj_gu_ke' => $request->spj_gu_ke,
            'nominal' => $request->nominal,
            'total' => $request->total,
        ]);

        return redirect('/SPJ/index')->with('toast_success', 'SPJ Tersimpan!');
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
        $guspj = GUSPJ::findorfail($id);
        $guspj->delete();
        return back()->with('info', 'SPJ Berhasil Dihapus!');
    }
}
