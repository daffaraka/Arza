<?php

namespace App\Http\Controllers;

use App\Models\DTH;
use Illuminate\Http\Request;
use App\Exports\DTHExport;
use App\Imports\DTHImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class TriwulanController extends Controller
{
   
    public function index()
    {
        // $dths = DB::table('dth')->select('');
        $dth = DTH::all();
        $groupedQuarterly = $dth->mapToGroups(function ($item, $key) {
            return [$item['triwulan'] => $item];
        })->toArray();
     
        return view('Triwulan.index',['groupedQuarterly'=>$groupedQuarterly]);
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

 
    public function create()
    {
        return view('Triwulan.Create-Triwulan');
    }

   
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

 
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $dth = DTH::findorfail($id);
        return view('DTH.Edit-DTH', compact('dth'));
    }

  
    public function update(Request $request, $id)
    {
        $dth = DTH::findorfail($id);
        $dth->update($request->all());
        return redirect('/DTH/index')->with('toast_success', 'DTH Berhasil Diperbarui!');
    }

    
    public function destroy($id)
    {
        $dth = DTH::findorfail($id);
        $dth->delete();
        return back()->with('info', 'DTH Berhasil Dihapus!');
    }
}
