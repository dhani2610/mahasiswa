<?php

namespace App\Http\Controllers;

use App\Models\JurnalPengeluaran;
use Illuminate\Http\Request;

class JurnalPengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Jurnal Pengeluaran';
        $data['breadcumb'] = 'Jurnal Pengeluaran';
        $data['pengeluaran'] = JurnalPengeluaran::orderby('id', 'asc')->get();

        return view('jurnal-pengeluaran.index', $data);
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

        return view('jurnal-pengeluaran.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new JurnalPengeluaran();
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->jumlah= $request->jumlah;
        $data->save();

        return redirect()->route('jurnal-pengeluaran-list')->with(['success' => 'Successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JurnalPengeluaran  $JurnalPengeluaran
     * @return \Illuminate\Http\Response
     */
    public function show(JurnalPengeluaran $JurnalPengeluaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JurnalPengeluaran  $JurnalPengeluaran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['page_title'] = 'Jurnal Pengeluaran';
        $data['breadcumb'] = 'Jurnal Pengeluaran';
        $data['pemasukan'] = JurnalPengeluaran::find($id);

        return view('jurnal-pengeluaran.index', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JurnalPengeluaran  $JurnalPengeluaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = JurnalPengeluaran::find($id);
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->jumlah = $request->jumlah;
        $data->save();

        return redirect()->route('jurnal-pengeluaran-list')->with(['success' => 'Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JurnalPengeluaran  $JurnalPengeluaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = JurnalPengeluaran::find($id);
        $data->delete();

        return redirect()->route('jurnal-pengeluaran-list')->with(['success' => 'Successfully!']);
    }
}
