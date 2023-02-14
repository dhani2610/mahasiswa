<?php

namespace App\Http\Controllers;

use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Tahun Ajaran';
        $data['breadcumb'] = 'Tahun Ajaran';
        $data['tahun_ajaran'] = TahunAjaran::orderby('id', 'asc')->get();

        return view('tahun-ajaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Tahun Ajaran';
        $data['breadcumb'] = 'Tahun Ajaran';
        $data['tahun_ajaran'] = TahunAjaran::orderby('id', 'asc')->get();

        return view('tahun-ajaran.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new TahunAjaran();
        $data->tahun_awal = $request->tahun_awal;
        $data->tahun_akhir = $request->tahun_akhir;
        $data->save();

        return redirect()->route('tahun-ajaran-list')->with(['success' => 'Successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TahunAjaran  $tahunAjaran
     * @return \Illuminate\Http\Response
     */
    public function show(TahunAjaran $tahunAjaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TahunAjaran  $tahunAjaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['page_title'] = 'Tahun Ajaran';
        $data['breadcumb'] = 'Tahun Ajaran';
        $data['tahun_ajaran'] = TahunAjaran::find($id);

        return view('tahun-ajaran.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TahunAjaran  $tahunAjaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = TahunAjaran::find($id);
        $data->tahun_awal = $request->tahun_awal;
        $data->tahun_akhir = $request->tahun_akhir;
        $data->save();

        return redirect()->route('tahun-ajaran-list')->with(['success' => 'Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TahunAjaran  $tahunAjaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TahunAjaran::find($id);
        $data->delete();

        return redirect()->route('tahun-ajaran-list')->with(['success' => 'Successfully!']);
    }
}
