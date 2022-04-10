<?php

namespace App\Http\Controllers;

use App\Models\GUSPD;
use Illuminate\Http\Request;
use App\Exports\SPDExport;
use App\Imports\SPDImport;
use Maatwebsite\Excel\Facades\Excel;

class GUSPDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guspd = GUSPD::all();
        return view('SPD.index', compact('guspd'));
    }

    public function spdexport(){
        return Excel::download(new SPDExport, ('GUSPD.xlsx'));
    }

    public function spdimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('SPD', $namafile);

        Excel::import(new SPDImport, public_path('/SPD/'.$namafile));
        return redirect('/SPD/index');
    }  

    public function cetakspd()
    {
        $cetakguspd = GUSPD::get();
        return view('SPD.Cetak-SPD', compact('cetakguspd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SPD.Create-SPD');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        GUSPD::create([
            'tgl_input' => $request->tgl_input,
            'periode_triwulan' => $request->periode_triwulan,
            'tahun' => $request->tahun,
            'kode_rek' => $request->kode_rek,
            'nama_kegiatan' => $request->nama_kegiatan,
            'bulan1' => $request->bulan1,
            'nominal_bulan1' => $request->nominal_bulan1,
            'bulan2' => $request->bulan2,
            'nominal_bulan2' => $request->nominal_bulan2,
            'bulan3' => $request->bulan3,
            'nominal_bulan3' => $request->nominal_bulan3,
            'jumlah_spd' => $request->jumlah_spd,
        ]);

        return redirect('/SPD/index')->with('toast_success', 'SPD Tersimpan!');
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
        $guspd = GUSPD::findorfail($id);
        return view('SPD.Edit-SPD', compact('spd'));
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
        $guspd = GUSPD::findorfail($id);
        $guspd->update($request->all());
        return redirect('/SPD/index')->with('toast_success', 'SPD Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guspd = GUSPD::findorfail($id);
        $guspd->delete();
        return back()->with('info', 'SPD Berhasil Dihapus!');
    }
}
