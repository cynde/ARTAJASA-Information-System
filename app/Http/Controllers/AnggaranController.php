<?php

namespace App\Http\Controllers;

use App\Anggaran;
use Illuminate\Http\Request;

class AnggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Anggaran::orderBy('tahun_anggaran','DESC')->get();
        return view('anggaran.index', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggaran.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ang = new Anggaran();
        $ang->tahun_anggaran = $request->tahun_anggaran;
        $ang->jumlah_anggaran = $request->jumlah_anggaran;
        $ang->save();
        return redirect()->route('anggaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anggaran  $anggaran
     * @return \Illuminate\Http\Response
     */
    public function show(Anggaran $anggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anggaran  $anggaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ang = Anggaran::findorfail($id);
        return view('anggaran.edit', compact('ang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anggaran  $anggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ang = Anggaran::findorfail($id);
        $ang->tahun_anggaran = $request->tahun_anggaran;
        $ang->jumlah_anggaran = $request->jumlah_anggaran;
        $ang->save();
        return redirect()->route('anggaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anggaran  $anggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Anggaran::findorfail($id)->delete();
        return back();
    }
}