<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokumentasi;
use App\Http\Controllers\DashboardController;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth:mahasiswa');
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('NiceAdmin.Content.Dashboard');
    }
    public function index2()
    {
        $dataDokumentasi = Dokumentasi::all();
        $tes1 = 254.119;
        $tes2 = 31.959;
        $tes3 = 500;
        return view('AdminPanel.Dashboard2', compact('dataDokumentasi', 'tes1', 'tes2', 'tes3'));
    }
    public function DokumentasiKota()
    {
        $dataDokumentasi = Dokumentasi::all();
        return view('AdminPanel.Dokumentasi', compact('dataDokumentasi'));
    }
    public function tambahDokumentasi()
    {
        return view('AdminPanel.TambahDokumentasi');
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

    public function editDokumentasi($id)
    {
        $DokumentasiDetail = Dokumentasi::where('id', $id)->get();
        return view('AdminPanel.editDokumentasi', compact('DokumentasiDetail'));
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

    public function updateDokumentasi(Request $request, $id)
    {
        $validasi = $request->validate([
            // 'user_id' => 'required',
            // 'keluarga' => 'required',
            'nomor_ruas' => 'required',
            'nama_ruas' => 'required',
            'panjang' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'koordinat_pangkal' => 'required',
            'koordinat_ujung' => 'required',

            'kondisi_baik' => 'required',
            'kondisi_sedang' => 'required',
            'kondisi_rusak_ringan' => 'required',
            'kondisi_rusak_berat' => 'required',

            'jp_aspal' => 'required',
            'jp_beton' => 'required',
            'jp_kerikil' => 'required',
            'jp_tanah' => 'required'
        ]);

        Dokumentasi::whereId($id)->update($validasi);
        return redirect('Dokumentasi-kota-pontianak')->with('success', 'Data Berhasil Diubah..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
