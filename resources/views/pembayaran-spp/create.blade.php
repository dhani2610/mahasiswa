@extends('layouts.app')

@section('style')

@endsection

@section('breadcumb')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{ ($breadcumb ?? '') }}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">home</li>
                    <li class="breadcrumb-item">/</li>
                    <li class="breadcrumb-item"><a href="{{ route('master-data.index') }}">{{ ($breadcumb ?? '') }}</a></li>
                    <li class="breadcrumb-item">/</li>
                    <li class="breadcrumb-item active"><a href="{{ route('users.index') }}">{{ ($breadcumb ?? '') }}</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>
@endsection

@section('content')
@php
    if (Request::get('semester') == 'Semester 1') {
        $semester = 'semester1';
    } elseif (Request::get('semester') == 'Semester 2') {
        $semester = 'semester2';
    } elseif (Request::get('semester') == 'Semester 3') {
        $semester = 'semester3';
    } elseif (Request::get('semester') == 'Semester 4') {
        $semester = 'semester4';
    } elseif (Request::get('semester') == 'Semester 5') {
        $semester = 'semester5';
    } elseif (Request::get('semester') == 'Semester 6') {
        $semester = 'semester6';
    } elseif (Request::get('semester') == 'Semester 7') {
        $semester = 'semester7';
    } elseif (Request::get('semester') == 'Semester 8') {
        $semester = 'semester8';
    } 
    
    if($semester.'_'.Request::get('angsuran') == 'semester1_1'){
        $field = $mhs->semester1_1 ?? '';
    }elseif($semester.'_'.Request::get('angsuran') == 'semester1_2'){
        $field = $mhs->semester1_2 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester1_3'){
        $field = $mhs->semester1_3 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester1_4'){
        $field = $mhs->semester1_4 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester1_5'){
        $field = $mhs->semester1_5 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester1_6'){
        $field = $mhs->semester1_6 ?? '';
    }elseif($semester.'_'.Request::get('angsuran') == 'semester2_1'){
        $field = $mhs->semester2_1 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester2_2'){
        $field = $mhs->semester2_2 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester2_3'){
        $field = $mhs->semester2_3 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester2_4'){
        $field = $mhs->semester2_4 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester2_5'){
        $field = $mhs->semester2_5 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester2_6'){
        $field = $mhs->semester2_6 ?? '';
    }elseif($semester.'_'.Request::get('angsuran') == 'semester3_1'){
        $field = $mhs->semester3_1 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester3_2'){
        $field = $mhs->semester3_2 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester3_3'){
        $field = $mhs->semester3_3 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester3_4'){
        $field = $mhs->semester3_4 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester3_5'){
        $field = $mhs->semester3_5 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester3_6'){
        $field = $mhs->semester3_6 ?? '';
    }elseif($semester.'_'.Request::get('angsuran') == 'semester4_1'){
        $field = $mhs->semester4_1 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester4_2'){
        $field = $mhs->semester4_2 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester4_3'){
        $field = $mhs->semester4_3 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester4_4'){
        $field = $mhs->semester4_4 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester4_5'){
        $field = $mhs->semester4_5 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester4_6'){
        $field = $mhs->semester4_6 ?? '';
    }elseif($semester.'_'.Request::get('angsuran') == 'semester5_1'){
        $field = $mhs->semester5_1 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester5_2'){
        $field = $mhs->semester5_2 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester5_3'){
        $field = $mhs->semester5_3 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester5_4'){
        $field = $mhs->semester5_4 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester5_5'){
        $field = $mhs->semester5_5 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester5_6'){
        $field = $mhs->semester5_6 ?? '';
    }elseif($semester.'_'.Request::get('angsuran') == 'semester6_1'){
        $field = $mhs->semester6_1 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester6_2'){
        $field = $mhs->semester6_2 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester6_3'){
        $field = $mhs->semester6_3 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester6_4'){
        $field = $mhs->semester6_4 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester6_5'){
        $field = $mhs->semester6_5 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester6_6'){
        $field = $mhs->semester6_6 ?? '';
    }elseif($semester.'_'.Request::get('angsuran') == 'semester7_1'){
        $field = $mhs->semester7_1 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester7_2'){
        $field = $mhs->semester7_2 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester7_3'){
        $field = $mhs->semester7_3 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester7_4'){
        $field = $mhs->semester7_4 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester7_5'){
        $field = $mhs->semester7_5 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester7_6'){
        $field = $mhs->semester7_6 ?? '';
    }elseif($semester.'_'.Request::get('angsuran') == 'semester8_1'){
        $field = $mhs->semester8_1 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester8_2'){
        $field = $mhs->semester8_2 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester8_3'){
        $field = $mhs->semester8_3 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester8_4'){
        $field = $mhs->semester8_4 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester8_5'){
        $field = $mhs->semester8_5 ?? '';
    
    }elseif($semester.'_'.Request::get('angsuran') == 'semester8_6'){
        $field = $mhs->semester8_6 ?? '';
    };
@endphp
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header text-center bg-gray1" style="border-radius:10px 10px 0px 0px;">
                <h3 class="card-title text-white">Add Pembayaran</h3>
            </div>

            <form action="{{ route('send-pembayaran', $mhs->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('components.form-message')

                <div class="card-body">

                    <div class="form-group mb-3">
                        <label for="name">Mahasiswa :</label>
                        <input type="text" class="form-control" value="{{ $mhs->nama }}">
                        <input type="hidden" name="mahasiswa_id" value="{{ $mhs->id }}">
                        <input type="hidden" name="field" value="{{ Request::get('semester').'_'.Request::get('angsuran') }}">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Semester :</label>
                        <select name="semester" class="form-control" id="" readonly>
                            <option value="semester1" {{ 'Semester 1' == Request::get('semester') ? 'selected' : '' }}>Semester 1</option>
                            <option value="semester2" {{ 'Semester 2' == Request::get('semester') ? 'selected' : '' }}>Semester 2</option>
                            <option value="semester3" {{ 'Semester 3' == Request::get('semester') ? 'selected' : '' }}>Semester 3</option>
                            <option value="semester4" {{ 'Semester 4' == Request::get('semester') ? 'selected' : '' }}>Semester 4</option>
                            <option value="semester5" {{ 'Semester 5' == Request::get('semester') ? 'selected' : '' }}>Semester 5</option>
                            <option value="semester6" {{ 'Semester 6' == Request::get('semester') ? 'selected' : '' }}>Semester 6</option>
                            <option value="semester7" {{ 'Semester 7' == Request::get('semester') ? 'selected' : '' }}>Semester 7</option>
                            <option value="semester8" {{ 'Semester 8' == Request::get('semester') ? 'selected' : '' }}>Semester 8</option>
                        </select>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Angsuran ke :</label>
                        <select name="angsuran" class="form-control" id="" readonly>
                            <option value="1" {{ '1' == Request::get('angsuran') ? 'selected' : '' }}>1</option>
                            <option value="2" {{ '2' == Request::get('angsuran') ? 'selected' : '' }}>2</option>
                            <option value="3" {{ '3' == Request::get('angsuran') ? 'selected' : '' }}>3</option>
                            <option value="4" {{ '4' == Request::get('angsuran') ? 'selected' : '' }}>4</option>
                            <option value="5" {{ '5' == Request::get('angsuran') ? 'selected' : '' }}>5</option>
                            <option value="6" {{ '6' == Request::get('angsuran') ? 'selected' : '' }}>6</option>
                        </select>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="name">Nominal :</label>
                        <input type="text" class="form-control" name="nominal" value="{{ $field }}">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer bg-gray1" style="border-radius:0px 0px 10px 10px;">
                    <button type="Submit" class="btn btn-success btn-footer">Send</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header text-center bg-gray1" style="border-radius:10px 10px 0px 0px;">
                <h3 class="card-title text-white">Detail Mahasiswa</h3>
            </div>

            <form action="{{ route('pos-keuangan-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('components.form-message')


                <div class="card-body">

                    <div class="form-group mb-3">
                        <label for="name">Nama Mahasiswa :</label>
                        <label for="name">{{ $mhs->nama }}</label>
                    </div>
                 
                    <div class="form-group mb-3">
                        <label for="name">Periode Masuk :</label>
                        <label for="name">{{ $mhs->periode_masuk }}</label>
                    </div>
                 
                    <div class="form-group mb-3">
                        <label for="name">NIM :</label>
                        <label for="name">{{ $mhs->nim }}</label>
                    </div>
                 
                    <div class="form-group mb-3">
                        <label for="name">No KTP :</label>
                        <label for="name">{{ $mhs->nim }}</label>
                    </div>
                 
                    <div class="form-group mb-3">
                        <label for="name">Cabang :</label>
                        <label for="name">{{ $mhs->cabang }}</label>
                    </div>
                 
                </div>
                <!-- /.card-body -->
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection