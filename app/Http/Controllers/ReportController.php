<?php

namespace App\Http\Controllers;

use App\Models\PembayaranSpp;
use Illuminate\Http\Request;
use DB;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function spp()
    {
        $data['page_title'] = 'Pembayaran SPP';
        $data['breadcumb'] = 'Pembayaran SPP';
        $data['spp'] = PembayaranSpp::orderby('id', 'asc')->get();

        $data['mhs'] = DB::table('mahasiswas')
                        ->join('pembayaran_spps', 'pembayaran_spps.mahasiswa_id', '=', 'mahasiswas.id')
                        ->select('mahasiswas.*','pembayaran_spps.*')
                        ->get();

        return view('report.pembayaran-spp', $data);
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
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        //
    }
}
