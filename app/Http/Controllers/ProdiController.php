<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['page_title'] = 'Prodi';
        $data['breadcumb'] = 'Prodi';
        $data['prodi'] = Prodi::orderby('id', 'asc')->get();

        return view('prodi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['page_title'] = 'Prodi';
        $data['breadcumb'] = 'Prodi';

        return view('prodi.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Prodi();
        $data->kode = $request->kode;
        $data->nama = $request->nama;
        $data->save();

        return redirect()->route('prodi-list')->with(['success' => 'Successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prodi $prodi)
    {
        $data['page_title'] = 'Prodi';
        $data['breadcumb'] = 'Prodi';
        $data['prodi'] = Prodi::find($id);

        return view('prodi.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Prodi::find($id);
        $data->kode = $request->kode;
        $data->nama = $request->nama;
        $data->save();

        return redirect()->route('prodi-list')->with(['success' => 'Successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Prodi::find($id);
        $data->delete();

        return redirect()->route('prodi-list')->with(['success' => 'Successfully!']);
    }
}
