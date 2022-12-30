<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BangunanGedungController;

use App\Models\Bangunan;
use App\Models\Bangunan2;
use App\Models\Uraianp1;
use App\Models\Uraianp2;
use App\Models\Detailbangunan;
use App\Models\Lokasi;

class WebGISBangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function BangunanGedung()
    {
        $bangunan = Bangunan::all();
        return view('WebGIS.WebGISBangunan.BangunanGedung.index', compact('bangunan'));
    }

    public function BangunanGedung2($id)
    {
        $bangunanUniq = Bangunan::where('id', $id)->distinct()->get();
        $bangunan = Bangunan::where('id', $id)->get();
        $bangunan2 = Bangunan2::where('bangunan_id', $id)->get();
        return view('WebGIS.WebGISBangunan.BangunanGedung.index2', compact('bangunanUniq', 'bangunan', 'bangunan2'));
    }

    public function DetailBangunanLengkap($id)
    {
        $bangunan2Uniq = Bangunan2::where('id', $id)->distinct()->get();
        $bangunan2 = Bangunan2::where('id', $id)->get();
        $detailBangunan = DetailBangunan::where('bangunan2_id', $id)->get();
        $uraianp1 = Uraianp1::where('bangunan2_id', $id)->get();
        // $uraianp2 = Uraianp2::where('uraianp1_id', $id)->get();
        // $uraianp1 = Uraianp1::all();
        // $uraianp2 = Uraianp2::all();
        return view('WebGIS.WebGISBangunan.BangunanGedung.index3', compact('bangunan2Uniq', 'bangunan2', 'detailBangunan', 'uraianp1'));
    }

    public function downloadBangunan()
    {
        return view('WebGIS.WebGISBangunan.Download.index');
    }
    public function WebgisWihang()
    {
        return view('WebGIS.WebGISBangunan.wihang.index');
    }
    public function LoadJson()
    {
        $results = Lokasi::all();
        return json_encode($results);
    }
}
