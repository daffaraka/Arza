<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\RekapExport;
use App\Imports\RekapImport;
use App\Models\Rekap;
use Maatwebsite\Excel\Facades\Excel;

class RekapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekap = Rekap::all();
        return view('Rekap.index', compact('rekap'));
    }

    public function rekapexport(){
        return Excel::download(new RekapExport, ('Rekap.xlsx'));
    }

    public function rekapimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('Rekap', $namafile);

        Excel::import(new RekapImport, public_path('/Rekap/'.$namafile));
        return redirect('/Rekap/index')->with('toast_success', 'Rekap Tersimpan!');
    }    

    public function cetakrekap()
    {
        $cetakrekap = Rekap::get();
        return view('Rekap.Cetak-Rekap', compact('cetakrekap'));
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
        $rekapData = Rekap::find($id);

        return view('Rekap.Rekap-edit',compact('rekapData'));
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
        $rekap = Rekap::find($id);
        $rekap->update($request->all());

        return redirect('/Rekap/index')->with('success','Book has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rekap = Rekap::findorfail($id);
        $rekap->delete();
        return back()->with('info', 'Rekap Berhasil Dihapus!');
    }
}
