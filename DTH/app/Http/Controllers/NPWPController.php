<?php

namespace App\Http\Controllers;

use App\Models\NPWP;
use Illuminate\Http\Request;
use App\Exports\NPWPExport;
use App\Imports\NPWPImport;
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
        $npwp = NPWP::all();
        return view('NPWP.index',compact('npwp'));
    }

    public function exportNPWP(){
        return Excel::download(new NPWPExport, ('npwp.xlsx'));
    }

    public function npwpImport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('NPWP File', $namafile);
        Excel::import(new NPWPImport, public_path('/NPWP File/'.$namafile));
        return redirect()->route('NPWP.index');
    }    

    public function cetaknpwp()
    {
        $cetaknpwp = NPWP::get();
        return view('NPWP.Cetak-NPWP', compact('cetaknpwp'));
    }

  
    public function create()
    {

        return view('NPWP.Create-NPWP');
    }

    
    public function store(Request $request)
    {
        // dd($request->all());
        NPWP::create([
            'npwp' => $request->npwp,
            'nama_wp' => $request->nama_wp,
        ]);
        return redirect()->route('NPWP.index')->with('toast_success', 'NPWP Baru Tersimpan!');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $npwp = NPWP::findorfail($id);
        return view('NPWP.edit-NPWP', compact('npwp'));
    }

   
    public function update(Request $request, $id)
    {
        $npwp = NPWP::findorfail($id);
        $npwp->update($request->all());
        return redirect()->route('NPWP.index')->with('toast_success', 'NPWP Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $npwp = NPWP::findorfail($id);
        $npwp->delete();
        return back()->with('info', 'NPWP Berhasil Dihapus!');
    }
}
