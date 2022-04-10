<?php

namespace App\Http\Controllers;

use App\Models\Target;
use Illuminate\Http\Request;
use App\Exports\TargetExport;
use App\Imports\TargetImport;
use Maatwebsite\Excel\Facades\Excel;

class TargetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $target = Target::all();
        return view('Target.index', compact('target'));
    }

    public function targetexport(){
        return Excel::download(new TargetExport, ('Target Triwulan.xlsx'));
    }

    public function targetimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('Target', $namafile);

        Excel::import(new TargetImport, public_path('/Target/'.$namafile));
        return redirect('/Target/index');
    }  

    public function cetaktarget()
    {
        $cetaktarget = Target::get();
        return view('Target.Cetak-Target', compact('cetaktarget'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Target.Create-Target');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Target::create([
            'tgl_input' => $request->tgl_input,
            'triwulanke' => $request->triwulanke,
            'tahun' => $request->tahun,
            'kode' => $request->kode,
            'nama' => $request->nama,
            'nominal_spd_berlalu' => $request->nominal_spd_berlalu,
            'nominal_spd_berjalan' => $request->nominal_spd_berjalan,
            'total_spd' => $request->total_spd,
            'nominal_spj_berlalu' => $request->nominal_spj_berlalu,
            'nominal_spj_berjalan' => $request->nominal_spj_berjalan,
            'total_spj' => $request->total_spj,
            'nominal_belum_spj' => $request->nominal_belum_spj,
        ]);

        return redirect('/Target/index')->with('toast_success', 'Target Tersimpan!');
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
        $target = Target::findorfail($id);
        $target->delete();
        return back()->with('info', 'Target Berhasil Dihapus!');
    }
}
