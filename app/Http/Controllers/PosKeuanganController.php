<?php

namespace App\Http\Controllers;

use App\Models\PosKeuangan;
use Illuminate\Http\Request;

class PosKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'POS Keuangan';
        $data['breadcumb'] = 'POS Keuangan';
        $data['pos'] = PosKeuangan::orderby('id', 'asc')->get();

        return view('pos-keuangan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Jurnal Pengeluaran';
        $data['breadcumb'] = 'Jurnal Pengeluaran';

        return view('pos-keuangan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new PosKeuangan();
        $data->title = $request->title;
        $data->save();

        return redirect()->route('pos-keuangan-list')->with(['success' => 'Successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PosKeuangan  $posKeuangan
     * @return \Illuminate\Http\Response
     */
    public function show(PosKeuangan $posKeuangan)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PosKeuangan  $posKeuangan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['page_title'] = 'POS Keuangan';
        $data['breadcumb'] = 'POS Keuangan';
        $data['pos'] = PosKeuangan::find($id);

        return view('pos-keuangan.index', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PosKeuangan  $posKeuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = PosKeuangan::find($id);
        $data->title = $request->title;
        $data->save();

        return redirect()->route('pos-keuangan-list')->with(['success' => 'Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PosKeuangan  $posKeuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PosKeuangan::find($id);
        $data->delete();

        return redirect()->route('pos-keuangan-list')->with(['success' => 'Successfully!']);
    }
}
