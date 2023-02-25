<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\PembayaranSpp;
use Illuminate\Http\Request;
use DB;

class PembayaranSppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Pembayaran SPP';
        $data['breadcumb'] = 'Pembayaran SPP';
        $data['spp'] = PembayaranSpp::orderby('id', 'asc')->get();

        $data['mhs'] = DB::table('mahasiswas')
                        ->join('pembayaran_spps', 'pembayaran_spps.mahasiswa_id', '=', 'mahasiswas.id')
                        ->select('mahasiswas.*','pembayaran_spps.*')
                        ->get();

        return view('pembayaran-spp.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data['page_title'] = 'Pembayaran SPP';
        $data['breadcumb'] = 'Pembayaran SPP';
        $data['spp'] = PembayaranSpp::orderby('id', 'asc')->get();
        $data['mhs'] = Mahasiswa::find($id);

        $data['mhs'] = DB::table('mahasiswas')
            ->join('pembayaran_spps', 'pembayaran_spps.mahasiswa_id', '=', 'mahasiswas.id')
            ->where('pembayaran_spps.mahasiswa_id',$id)
            ->select('mahasiswas.*','pembayaran_spps.*')
            ->first();

        return view('pembayaran-spp.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $angsuran = $request->angsuran;
        $semester = $request->semester;
        $field = $semester.'_'.$angsuran;
        $mahasiswa_id = $id;
        $nominal = $request->nominal;
        $cek = PembayaranSpp::where('mahasiswa_id',$id)->first();

        if ($cek == null) {
            $data = new PembayaranSpp();
            $data->mahasiswa_id = $mahasiswa_id;
            $data->$field = $nominal;
            $data->save();
            return redirect()->route('pembayaran-spp-list')->with(['success' => 'Successfully!']);
        }else{
            $data = PembayaranSpp::where('mahasiswa_id',$id)->first();
            $data->mahasiswa_id = $mahasiswa_id;
            $data->$field = $nominal;
            $data->save();
            return redirect()->route('pembayaran-spp-list')->with(['success' => 'Successfully!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PembayaranSpp  $pembayaranSpp
     * @return \Illuminate\Http\Response
     */
    public function show(PembayaranSpp $pembayaranSpp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PembayaranSpp  $pembayaranSpp
     * @return \Illuminate\Http\Response
     */
    public function edit(PembayaranSpp $pembayaranSpp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PembayaranSpp  $pembayaranSpp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PembayaranSpp $pembayaranSpp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PembayaranSpp  $pembayaranSpp
     * @return \Illuminate\Http\Response
     */
    public function destroy(PembayaranSpp $pembayaranSpp)
    {
        //
    }
}
