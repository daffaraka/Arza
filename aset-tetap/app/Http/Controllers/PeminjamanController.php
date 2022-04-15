<?php

namespace App\Http\Controllers;

use App\Models\Rekap;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Exports\PeminjamanExport;
use App\Imports\PeminjamanImport;
use Maatwebsite\Excel\Facades\Excel;

class PeminjamanController extends Controller
{
   
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('Peminjaman.index', compact('peminjaman'));
    }

    public function peminjamanexport(){
        return Excel::download(new PeminjamanExport, ('Peminjaman.xlsx'));
    }

    public function peminjamanimport(Request $request){
        $file = $request->file('file');
        $namafile = $file->getClientOriginalName();
        $file->move('Peminjaman', $namafile);

        Excel::import(new PeminjamanImport, public_path('/Peminjaman/'.$namafile));
        return redirect('/Peminjaman/index');
    }    

    public function cetakpeminjaman()
    {
        $cetakpeminjaman = Peminjaman::get();
        return view('Peminjaman.Cetak-Peminjaman', compact('cetakpeminjaman'));
    }

   
    public function create()
    {
        $rekap = Rekap::all();
        return view('Peminjaman.Create-Peminjaman',compact('rekap'));
    }

  
    public function store(Request $request)
    {
        
        Peminjaman::create([
            'peminjam' => $request->peminjam,
            'tgl_pinjam' => $request->tgl_pinjam,
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'thn_perolehan' => $request->thn_perolehan,
            'cara_perolehan' => $request->cara_perolehan,
            'jmlh_barang' => $request->jmlh_barang,
            'harga' => $request->harga,
            'kondisi_barang' => $request->kondisi_barang,
            'ket' => $request->ket,
        ]);

        return redirect('/Peminjaman/index')->with('toast_success', 'Peminjaman Tersimpan!');
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $Peminjaman = Peminjaman::findOrFail($id);

        return view('Peminjaman.Edit-Peminjaman',compact('Peminjaman'));
    }

  
    public function update(Request $request, $id)
    {
      
        $aset = Peminjaman::findorfail($id);
        $aset->update($request->all());
        return redirect('/Peminjaman/index')->with('toast_success', 'Peminjaman Tersimpan!');
    }

   
    public function destroy($id)
    {
        $peminjaman = Peminjaman::findorfail($id);
        $peminjaman->delete();
        return back()->with('info', 'Peminjaman Berhasil Dihapus!');
    }
}
