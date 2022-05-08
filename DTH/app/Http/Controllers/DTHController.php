<?php

namespace App\Http\Controllers;

use App\Models\DTH;
use Illuminate\Http\Request;
use App\Exports\DTHExport;
use App\Imports\DTHImport;
use App\Models\NPWP;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Searchable\ModelSearchAspect;
use Spatie\Searchable\Search;

class DTHController extends Controller
{
    public function index()
    {
        $dth = DTH::all();
        return view('DTH.index', compact('dth'));
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
        $npwp = NPWP::all();
        return view('DTH.Create-DTH',compact('npwp'));
    }

    public function store(Request $request)
    {
    //    dd($request->all());
        DTH::create([
            'kode_akun' => $request->kode_akun,
            'jenis_pajak' => $request->jenis_pajak,
            'nominal_pajak' => $request->nominal_pajak,
            'npwp' => $request->npwp,
            'nama_wp' => $request->nama_wp,
            'ntpn' => $request->ntpn,
            'id_billing' => $request->id_billing,
            'keperluan' => $request->keperluan,
            'bulan' => $request->bulan,
            'triwulan' => $request->triwulan,
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
    
    public function search(Request $request)
    {
        $searchterm = $request->input('query');
        $searchResults = (new Search())
            ->registerModel(DTH::class, function(ModelSearchAspect $modelSearchAspect){
                $modelSearchAspect->addSearchableAttribute('kode_akun')
                ->addExactSearchableAttribute('jenis_pajak')
                ->addSearchableAttribute('nominal_pajak')
                ->addExactSearchableAttribute('npwp')
                ->addExactSearchableAttribute('nama_wp')
                ->addExactSearchableAttribute('ntpn')
                ->addSearchableAttribute('id_billing')
                ->addSearchableAttribute('keperluan')
                ->addSearchableAttribute('bulan')
                ->addExactSearchableAttribute('triwulan')
                ;
                
            })->perform($searchterm);

            // dd($searchResults);
            return view('DTH.Search', compact(['searchterm','searchResults']));    }
}
