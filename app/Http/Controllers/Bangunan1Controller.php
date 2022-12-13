<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bangunan;


class Bangunan1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bangunan1 = Bangunan::all();
        return view('AdminPanel.Bangunan1.indexBangunan1', compact('bangunan1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.Bangunan1.createBangunan1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bangunan1 = new Bangunan;
        $bangunan1->bangunan = $request->bangunan;
        $bangunan1->created_at = now();
        $bangunan1->updated_at = now();
        $bangunan1->save();
        // return redirect()->route('keluarga');
        // return back()->with('message', 'Data berhasil ditambahkan');
        return redirect('bangunan1')->with('success', 'Data Bangunan Berhasil Ditambahkan..', compact('bangunan1'));
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
        $bangunan1 = Bangunan::where('id', $id)->get();
        return view('AdminPanel.Bangunan1.editBangunan1', compact('bangunan1'));
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
        $bangunan1 = Bangunan::findOrFail($id);
        $bangunan1->bangunan = $request->input('bangunan');
        $bangunan1->save($request->all());
        return redirect('bangunan1')->with('success', 'Data Bangunan Berhasil Diubah..', compact('bangunan1'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bangunan1 = Bangunan::findOrFail($id);
        $bangunan1->delete();
        return redirect('bangunan1')->with('success', 'Data Bangunan Berhasil Dihapus..', compact('bangunan1'));
    }
}
