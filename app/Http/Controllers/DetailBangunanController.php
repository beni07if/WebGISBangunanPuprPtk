<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bangunan;
use App\Models\Bangunan2;
use App\Models\Detailbangunan;

class DetailBangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailBangunan = Detailbangunan::all();
        return view('AdminPanel.DetailBangunan.indexDetailBangunan', compact('detailBangunan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bangunan2 = Bangunan2::all();
        return view('AdminPanel.DetailBangunan.createDetailBangunan', compact('bangunan2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detailBangunan = new Detailbangunan();
        $detailBangunan->bangunan2_id = $request->bangunan2_id;
        $detailBangunan->nama_bangunan = $request->nama_bangunan;
        $detailBangunan->tahun_dibangun = $request->tahun_dibangun;
        $detailBangunan->jumlah_tingkat = $request->jumlah_tingkat;
        $detailBangunan->ttlb = $request->ttlb;
        $detailBangunan->llb = $request->llb;
        $detailBangunan->klb = $request->klb;
        $detailBangunan->fbr = $request->fbr;
        $detailBangunan->klasifikasi_bangunan = $request->klasifikasi_bangunan;
        $detailBangunan->lembaga = $request->lembaga;
        $detailBangunan->pemakai = $request->pemakai;
        $detailBangunan->alamat = $request->alamat;
        $detailBangunan->dasar_analisis1 = $request->dasar_analisis1;
        $detailBangunan->dasar_analisis2 = $request->dasar_analisis2;
        $detailBangunan->tingkat = $request->tingkat;
        $detailBangunan->kerusakan = $request->kerusakan;
        $detailBangunan->jenis_tk = $request->jenis_tk;
        $detailBangunan->jenis_perawatan = $request->jenis_perawatan;
        $detailBangunan->kerusakan_ringan = $request->kerusakan_ringan;
        $detailBangunan->kerusakan_sedang = $request->kerusakan_sedang;
        $detailBangunan->kerusakan_berat = $request->kerusakan_berat;
        $detailBangunan->kerusakan_khusus = $request->kerusakan_khusus;
        $detailBangunan->created_at = now();
        $detailBangunan->updated_at = now();
        $detailBangunan->save();
        // return redirect()->route('keluarga');
        // return back()->with('message', 'Data berhasil ditambahkan');
        return redirect('detail-bangunan')->with('success', 'Data Detail Bangunan Berhasil Ditambahkan..', compact('detailBangunan'));
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
        $bangunan2 = Bangunan2::all();
        $detailBangunan = Detailbangunan::where('id', $id)->get();
        return view('AdminPanel.DetailBangunan.editDetailBangunan', compact('bangunan2', 'detailBangunan'));
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
        $detailBangunan = Detailbangunan::findOrFail($id);
        $detailBangunan->bangunan2_id = $request->input('bangunan2_id');
        $detailBangunan->nama_bangunan = $request->input('nama_bangunan');
        $detailBangunan->tahun_dibangun = $request->input('tahun_dibangun');
        $detailBangunan->jumlah_tingkat = $request->input('jumlah_tingkat');
        $detailBangunan->ttlb = $request->input('ttlb');
        $detailBangunan->llb = $request->input('llb');
        $detailBangunan->klb = $request->input('klb');
        $detailBangunan->fbr = $request->input('fbr');
        $detailBangunan->klasifikasi_bangunan = $request->input('klasifikasi_bangunan');
        $detailBangunan->lembaga = $request->input('lembaga');
        $detailBangunan->pemakai = $request->input('pemakai');
        $detailBangunan->alamat = $request->input('alamat');
        $detailBangunan->dasar_analisis1 = $request->input('dasar_analisis1');
        $detailBangunan->dasar_analisis2 = $request->input('dasar_analisis2');
        $detailBangunan->tingkat = $request->input('bangunan_id');
        $detailBangunan->kerusakan = $request->input('kerusakan');
        $detailBangunan->jenis_tk = $request->input('jenis_tk');
        $detailBangunan->jenis_perawatan = $request->input('jenis_perawatan');
        $detailBangunan->kerusakan_ringan = $request->input('kerusakan_ringan');
        $detailBangunan->kerusakan_sedang = $request->input('kerusakan_sedang');
        $detailBangunan->kerusakan_berat = $request->input('kerusakan_berat');
        $detailBangunan->kerusakan_khusus = $request->input('kerusakan_khusus');
        $detailBangunan->save($request->all());
        return redirect('detail-bangunan')->with('success', 'Data Detail Bangunan Berhasil Diubah..', compact('detailBangunan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detailBangunan = Detailbangunan::findOrFail($id);
        $detailBangunan->delete();
        return redirect('detail-bangunan')->with('success', 'Data Sub Bangunan Berhasil Dihapus..', compact('detailBangunan'));
    }
}
