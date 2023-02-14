<?php

namespace App\Http\Controllers;

use App\Models\JurnalPemasukan;
use Illuminate\Http\Request;

class JurnalPemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Jurnal Pemasukan';
        $data['breadcumb'] = 'Jurnal Pemasukan';
        $data['pemasukan'] = JurnalPemasukan::orderby('id', 'asc')->get();

        return view('jurnal-pemasukan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Jurnal Pemasukan';
        $data['breadcumb'] = 'Jurnal Pemasukan';

        return view('jurnal-pemasukan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new JurnalPemasukan();
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->jumlah= $request->jumlah;
        $data->save();

        return redirect()->route('jurnal-pemasukan-list')->with(['success' => 'Successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JurnalPemasukan  $jurnalPemasukan
     * @return \Illuminate\Http\Response
     */
    public function show(JurnalPemasukan $jurnalPemasukan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JurnalPemasukan  $jurnalPemasukan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['page_title'] = 'Jurnal Pemasukan';
        $data['breadcumb'] = 'Jurnal Pemasukan';
        $data['pemasukan'] = JurnalPemasukan::find($id);

        return view('jurnal-pemasukan.index', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JurnalPemasukan  $jurnalPemasukan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = JurnalPemasukan::find($id);
        $data->tanggal = $request->tanggal;
        $data->keterangan = $request->keterangan;
        $data->jumlah = $request->jumlah;
        $data->save();

        return redirect()->route('jurnal-pemasukan-list')->with(['success' => 'Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JurnalPemasukan  $jurnalPemasukan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = JurnalPemasukan::find($id);
        $data->delete();

        return redirect()->route('jurnal-pemasukan-list')->with(['success' => 'Successfully!']);
    }
}
