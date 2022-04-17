<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\JurnalExport;
use App\Imports\JurnalImport;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurnal = Jurnal::all();
        return view('Jurnal.index', compact('jurnal'));
    }

    public function jurnalexport(){
        return Excel::download(new JurnalExport, ('jurnal.xlsx'));
    }

    public function jurnalimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('Jurnal', $namafile);

        Excel::import(new JurnalImport, public_path('/Jurnal/'.$namafile));
        return redirect('/Jurnal/index');
    }    

    public function cetakjurnal()
    {
        $cetakjurnal = Jurnal::get();
        return view('Jurnal.Cetak-Jurnal', compact('cetakjurnal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jurnal.Create-Jurnal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Jurnal::create([
            'tanggal'=>$request->tanggal,
            'transaksi'=>$request->transaksi,
            'uraian_debit'=>$request->uraian_debit,
            'uraian_kredit'=>$request->uraian_kredit,
            'debit'=>$request->debit,
            'kredit'=>$request->debit,
        ]);

        return redirect('/Jurnal/index')->with('toast_success', 'Jurnal Tersimpan!');
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
        $jurnal = Jurnal::findorfail($id);
        $jurnal->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
