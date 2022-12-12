<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jalan;
use App\Models\Dokumentasi;
use App\Models\Peta;
use App\Models\Parentjalan;
use App\Models\Childjalan;

class WebGISController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $dataJalan = Jalan::all();
        return view('WebGIS.index');
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
        //
    }

    public function blog()
    {
        return view('WebGIS.blog');
    }
    public function peta()
    {
        return view('WebGIS.peta');
    }

    public function petaJs()
    {
        return view('WebGIS.petaJs');
    }

    public function peta2()
    {
        return view('WebGIS.peta2');
    }

    public function pupr()
    {
        return view('WebGIS.pupr');
    }

    public function peta3()
    {
        return view('WebGIS.peta3');
    }
    public function data()
    {
        // $dataJalan = Jalan::all()->get()->getResultArray();
        $dataJalan = Jalan::all();
        $tes1 = 254.119;
        $tes2 = 31.959;
        $tes3 = 500;
        return view('WebGIS.data', compact('dataJalan', 'tes1', 'tes2', 'tes3'));
    }
    public function SkPs()
    {
        return view('WebGIS.skps');
    }
    public function galery()
    {
        $dokumentasi = Dokumentasi::all();
        return view('WebGIS.galery', compact('dokumentasi'));
    }
    public function download()
    {
        // $peta = Peta::all();
        $dokumentasi = Dokumentasi::all();
        return view('WebGIS.download', compact('dokumentasi'));
    }
    public function contact()
    {
        return view('WebGIS.contact');
    }
    public function datatable()
    {
        return view('WebGIS.datatable');
    }
    public function chart()
    {

        $dataJalan = Jalan::all();
        return view('WebGIS.chart', compact('dataJalan'));
    }
    public function jalanDetail($id)
    {
        $jalanDetail = Jalan::where('id', $id)->get();
        $aspal = Jalan::where('id', $id)->get();
        $beton = Jalan::where('id', $id)->get();
        $kerikil = Jalan::where('id', $id)->get();
        $tanah = Jalan::where('id', $id)->get();

        // $aspal = 10;
        // $beton = 20;
        // $kerikil = 30;
        // $tanah = 40;
        // $baik = $jalanDetail->kondisi_baik;
        $baik = Jalan::where('id', $id)->first()->kondisi_baik;
        // $baik = Jalan::where('id', $id)->first()->kondisi_baik;
        // $baik = Jalan::where('id', $id)->first()->kondisi_baik;
        // $baik = Jalan::where('id', $id)->first()->kondisi_baik;
        return view('WebGIS.jalanDetail', compact('jalanDetail', 'aspal', 'beton', 'kerikil', 'tanah', 'baik'));
        // dd($baik);
    }

    // admin
    public function jalanKeseluruhan()
    {
        return view('AdminPanel.jalanKeseluruhan');
    }
    // end admin

    public function coba()
    {
        $tes = 300;
        return view('AdminPanel.coba', compact('tes'));
    }

    public function kondisiJalan()
    {
        $parentJalan = Parentjalan::all();
        return view('WebGIS.kondisiJalan', compact('parentJalan'));
    }
    public function kondisiJalanDetail($id)
    {
        $parentJalanUniq = Parentjalan::where('id', $id)->distinct()->get();
        $parentJalan = Parentjalan::where('id', $id)->get();
        $childJalan = Childjalan::where('parentjalan_id', $id)->get();
        return view('WebGIS.kondisiJalanDetail', compact('parentJalan', 'childJalan', 'parentJalanUniq'));
    }

    public function kegiatan2020()
    {
        $dataJalan = Jalan::all();
        return view('WebGIS.kegiatan2020', compact('dataJalan'));
    }
    public function k2020Pembangunan()
    {
        $dataJalan = Jalan::all();
        return view('WebGIS.kegiatan2020.k2020Pembangunan', compact('dataJalan'));
    }
    public function k2020Peningkatan()
    {
        $dataJalan = Jalan::all();
        return view('WebGIS.kegiatan2020.k2020Peningkatan', compact('dataJalan'));
    }
    public function k2020Pemeliharaan()
    {
        $dataJalan = Jalan::all();
        return view('WebGIS.kegiatan2020.k2020Pemeliharaan', compact('dataJalan'));
    }
    public function kegiatan2021()
    {
        $dataJalan = Jalan::all();
        return view('WebGIS.kegiatan2021', compact('dataJalan'));
    }
    public function k2021Pembangunan()
    {
        $dataJalan = Jalan::all();
        return view('WebGIS.kegiatan2021.k2021Pembangunan', compact('dataJalan'));
    }
    public function k2021Rekonstruksi()
    {
        $dataJalan = Jalan::all();
        return view('WebGIS.kegiatan2021.k2021Rekonstruksi', compact('dataJalan'));
    }
    public function k2021Berkala()
    {
        $dataJalan = Jalan::all();
        return view('WebGIS.kegiatan2021.k2021Berkala', compact('dataJalan'));
    }
    public function k2021Trotoar()
    {
        $dataJalan = Jalan::all();
        return view('WebGIS.kegiatan2021.k2021Trotoar', compact('dataJalan'));
    }
}
