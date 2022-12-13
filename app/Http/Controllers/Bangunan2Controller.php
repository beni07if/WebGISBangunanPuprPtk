<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bangunan;
use App\Models\Bangunan2;

class Bangunan2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bangunan2 = Bangunan2::all();
        return view('AdminPanel.Bangunan2.indexBangunan2', compact('bangunan2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bangunan1 = Bangunan::all();
        return view('AdminPanel.Bangunan2.createBangunan2', compact('bangunan1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bangunan2 = new Bangunan2;
        $bangunan2->bangunan2 = $request->bangunan2;
        $bangunan2->tingkat_kerusakan = $request->tingkat_kerusakan;
        $bangunan2->keterangan = $request->keterangan;
        $bangunan2->bangunan_id = $request->bangunan_id;
        $bangunan2->created_at = now();
        $bangunan2->updated_at = now();
        $bangunan2->save();
        // return redirect()->route('keluarga');
        // return back()->with('message', 'Data berhasil ditambahkan');
        return redirect('bangunan2')->with('success', 'Data Sub Bangunan Berhasil Ditambahkan..', compact('bangunan2'));
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
        $bangunan1 = Bangunan::all();
        $bangunan2 = Bangunan2::where('id', $id)->get();
        return view('AdminPanel.Bangunan2.editBangunan2', compact('bangunan1', 'bangunan2'));
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
        $bangunan2 = Bangunan2::findOrFail($id);
        $bangunan2->bangunan2 = $request->input('bangunan2');
        $bangunan2->tingkat_kerusakan = $request->input('tingkat_kerusakan');
        $bangunan2->keterangan = $request->input('keterangan');
        $bangunan2->bangunan_id = $request->input('bangunan_id');
        $bangunan2->save($request->all());
        return redirect('bangunan2')->with('success', 'Data Sub Bangunan Berhasil Diubah..', compact('bangunan2'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bangunan2 = Bangunan2::findOrFail($id);
        $bangunan2->delete();
        return redirect('bangunan2')->with('success', 'Data Sub Bangunan Berhasil Dihapus..', compact('bangunan2'));
    }
}
