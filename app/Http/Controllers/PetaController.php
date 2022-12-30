<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peta;

class PetaController extends Controller
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
        $peta = Peta::all();
        return view('AdminPanel.Peta.Index', compact('peta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.Peta.CreatePeta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'peta' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        $peta = new Peta;
        $peta->judul_peta = $request->judul_peta;
        $peta->psjj = $request->psjj;
        $peta->keterangan = $request->keterangan;
        $file       = $request->file('peta');
        $fileName   = $file->getClientOriginalName();
        $request->file('peta')->move("assets/img/peta/", $fileName);
        $peta->peta = $fileName;
        $peta->created_at = now();
        $peta->updated_at = now();
        $peta->save();
        return redirect('peta-layout')->with('success', 'Peta Berhasil Disimpan..', compact('peta'));
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
        $peta = Peta::where('id', $id)->get();
        return view('AdminPanel.Peta.EditPeta', compact('peta'));
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
        $this->validate($request, [
            'peta' => 'required|image|mimes:jpg,png,jpeg'
        ]);
        $peta = Peta::findOrFail($id);
        $peta->judul_peta = $request->input('judul_peta');
        $peta->psjj = $request->input('psjj');
        $peta->keterangan = $request->input('keterangan');
        $file       = $request->file('peta');
        $fileName   = $file->getClientOriginalName();
        $request->file('peta')->move("assets/img/peta/", $fileName);
        $peta->peta = $fileName;
        $peta->save($request->all());
        return redirect('peta-layout')->with('success', 'Peta Berhasil Diubah..', compact('peta'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { {
            $peta = Peta::findOrFail($id);
            $peta->delete();
            return redirect('peta-layout')->with('success', 'Peta Berhasil Dihapus..', compact('peta'));
        }
    }
}
