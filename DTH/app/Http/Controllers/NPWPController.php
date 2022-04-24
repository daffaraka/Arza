<?php

namespace App\Http\Controllers;

use App\Models\DTH;
use Illuminate\Http\Request;
use App\Exports\DTHExport;
use App\Imports\DTHImport;
use Maatwebsite\Excel\Facades\Excel;

class NPWPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dth = DTH::all();
        return view('NPWP.index');
    }

    public function dthexport(){
        return Excel::download(new DTHExport, ('dth.xlsx'));
    }

    public function dthimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('DTH', $namafile);

        Excel::import(new DTHImport, public_path('/DTH/'.$namafile));
        return redirect('/DTH/index');
    }    

    public function cetakdth()
    {
        $cetakdth = DTH::get();
        return view('DTH.Cetak-DTH', compact('cetakdth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DTH.Create-DTH');
        return view('NPWP.Create-NPWP');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DTH::create([
            'kode_akun' => $request->kode_akun,
            'jenis_pajak' => $request->jenis_pajak,
            'nominal_pajak' => $request->nominal_pajak,
            'npwp' => $request->npwp,
            'nama_wp' => $request->nama_wp,
            'ntpn' => $request->ntpn,
            'id_billing' => $request->id_billing,
            'keperluan' => $request->keperluan,
        ]);

        return redirect('/DTH/index')->with('toast_success', 'DTH Tersimpan!');
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
        $dth = DTH::findorfail($id);
        return view('DTH.Edit-DTH', compact('dth'));
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
        $dth = DTH::findorfail($id);
        $dth->update($request->all());
        return redirect('/DTH/index')->with('toast_success', 'DTH Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dth = DTH::findorfail($id);
        $dth->delete();
        return back()->with('info', 'DTH Berhasil Dihapus!');
    }
}
