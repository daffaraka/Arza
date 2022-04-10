<?php

namespace App\Http\Controllers;

use App\Models\SPDTriwulan;
use Illuminate\Http\Request;
use App\Exports\SPDTriExport;
use App\Imports\SPDTriImport;
use Maatwebsite\Excel\Facades\Excel;

class SPDTriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spd_triwulan = SPDTriwulan::all();
        return view('SPD-Triwulan.index', compact('spd_triwulan'));
    }

    public function spdtriexport(){
        return Excel::download(new SPDTriExport, ('SPD Triwulan.xlsx'));
    }

    public function spdtriimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('SPD-Triwulan', $namafile);

        Excel::import(new SPDTriImport, public_path('/SPD-Triwulan/'.$namafile));
        return redirect('/SPD-Triwulan/index')->with('toast_success', 'SPD Triwulan Tersimpan!');
    }  

    public function cetakspdtriwulan()
    {
        $cetakspdtriwulan = SPDTriwulan::get();
        return view('SPD-Triwulan.Cetak-Triwulan', compact('cetakspdtriwulan'));
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
        $spdtriwulan = SPDTriwulan::findorfail($id);
        $spdtriwulan->delete();
        return back()->with('info', 'SPD Triwulan Berhasil Dihapus!');
    }
}
