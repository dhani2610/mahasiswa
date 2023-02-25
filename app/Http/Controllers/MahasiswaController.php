<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\PembayaranSpp;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Mahasiswa';
        $data['breadcumb'] = 'Mahasiswa';
        $data['mahasiswa'] = Mahasiswa::orderby('id', 'asc')->get();

        return view('mahasiswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Mahasiswa';
        $data['breadcumb'] = 'Mahasiswa';
        $data['prodi'] = Prodi::orderby('id', 'asc')->get();


        return view('mahasiswa.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Mahasiswa();
        $data->periode_masuk = $request->periode_masuk;
        $data->no_formulir = $request->no_formulir;
        $data->nama = $request->nama;
        $data->no_ktp = $request->no_ktp;
        $data->nim = $request->nim;
        $data->prodi_id = $request->prodi_id;
        $data->cabang = $request->cabang;
        $data->cabang_ket = $request->cabang_ket;

        if ($data->save()) {
            
            $id_mahasiswa = $data->id;
            $data = new PembayaranSpp();
            $data->mahasiswa_id = $id_mahasiswa;
            $data->save();
        }

        return redirect()->route('mahasiswa-list')->with(['success' => 'Successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['page_title'] = 'Mahasiswa';
        $data['breadcumb'] = 'Mahasiswa';
        $data['mahasiswa'] = Mahasiswa::find($id);

        return view('mahasiswa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Mahasiswa::find($id);
        $data->periode_masuk = $request->periode_masuk;
        $data->no_formulir = $request->no_formulir;
        $data->nama = $request->nama;
        $data->no_ktp = $request->no_ktp;
        $data->nim = $request->nim;
        $data->prodi_id = $request->prodi_id;
        $data->cabang = $request->cabang;
        $data->cabang_ket = $request->cabang_ket;
        $data->save();

        return redirect()->route('mahasiswa-list')->with(['success' => 'Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Mahasiswa::find($id);
        $data->delete();

        return redirect()->route('mahasiswa-list')->with(['success' => 'Successfully!']);
    }
}
