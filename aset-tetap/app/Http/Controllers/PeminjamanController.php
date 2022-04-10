<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\PeminjamanExport;
use App\Imports\PeminjamanImport;
use App\Models\Peminjaman;
use Maatwebsite\Excel\Facades\Excel;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Peminjaman.Create-Peminjaman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $peminjaman = Peminjaman::findorfail($id);
        $peminjaman->delete();
        return back()->with('info', 'Peminjaman Berhasil Dihapus!');
    }
}
