@extends('layouts.app')

@section('style')
<style>


.wrapper {
  position: relative;
  overflow: auto;
  white-space: nowrap;
}

.sticky-col {
  position: -webkit-sticky;
  position: sticky;
  background-color: white;
}

.first-col {
  width: 100px;
  min-width: 100px;
  max-width: 100px;
  left: 0px;
}

.second-col {
  width: 150px;
  min-width: 150px;
  max-width: 150px;
  left: 100px;
}

.red{
  background: red;
  color: white;
}

.green{
  background: greenyellow;
  color: white;
}

</style>
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
                    <li class="breadcrumb-item"><a href="{{ route('master-data.index') }}">Master Data</a></li>
                    <li class="breadcrumb-item">/</li>
                    <li class="breadcrumb-item active"><a href="{{ route('users.index') }}">{{ ($breadcumb ?? '') }}</a></li>
                </ol>
            </div>

        </div>
    </div>
  </div>
@endsection

@section('content')
<div class="row mt-4">
  <div class="col-12">
    <div class="card">
      <div class="card-header bg-gray1" style="border-radius:10px 10px 0px 0px;">
        <div class="row">
          <div class="col-6 mt-1">
            <span class="tx-bold text-lg text-white" style="font-size:1.2rem;">
              <i class="far fa-user text-lg"></i> 
              {{ ($breadcumb ?? '') }}
            </span>
          </div>

          
        </div>

        <div class="row">
          <div class="col-6">
            @include('sweetalert::alert')
          </div>
        </div>
      </div>

      <div class="card-body">
        <div class="table-responsive wrapper">
          <table id="example" class="table table-bordered" style="width:100%">
            <thead>
              <tr>
                <th class="sticky-col first-col" style="background: green; color:white">No</th>
                <th class="sticky-col second-col" style="background: green; color:white">Mahasiswa</th>
                <th class="text-center" style="background: blue; color:white" colspan="6">Semester 1</th>
                <th class="text-center" style="background: blue; color:white" colspan="6">Semester 2</th>
                <th class="text-center" style="background: blue; color:white" colspan="6">Semester 3</th>
                <th class="text-center" style="background: blue; color:white" colspan="6">Semester 4</th>
                <th class="text-center" style="background: blue; color:white" colspan="6">Semester 5</th>
                <th class="text-center" style="background: blue; color:white" colspan="6">Semester 6</th>
                <th class="text-center" style="background: blue; color:white" colspan="6">Semester 7</th>
                <th class="text-center" style="background: blue; color:white" colspan="6">Semester 8</th>
              </tr>
              <tr>
            
                <th class="sticky-col first-col" style="background: white; color:black"></th>
                <th class="sticky-col second-col" style="background: white; color:black"></th>

                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
  
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
  
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
  
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
  
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
  
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
  
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>

                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
              </tr>
  
            </thead>
            <tbody>

              @php
                  
              @endphp
              @foreach ($mhs as $item)
              <tr>
                <th class="sticky-col first-col" style="background: white; color:black">{{ $loop->iteration }}</th>
                <th class="sticky-col second-col" style="background: white; color:black">{{ $item->nama }}</th>

                <th onclick="pembayaran('Semester 1',1,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester1_1 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester1_1) </th>
                <th onclick="pembayaran('Semester 1',2,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester1_2 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester1_2) </th>
                <th onclick="pembayaran('Semester 1',3,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester1_3 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester1_3) </th>
                <th onclick="pembayaran('Semester 1',4,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester1_4 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester1_4) </th>
                <th onclick="pembayaran('Semester 1',5,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester1_5 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester1_5) </th>
                <th onclick="pembayaran('Semester 1',6,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester1_6 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester1_6) </th>

                <th onclick="pembayaran('Semester 2',1,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester2_1 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester2_1) </th>
                <th onclick="pembayaran('Semester 2',2,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester2_2 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester2_2) </th>
                <th onclick="pembayaran('Semester 2',3,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester2_3 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester2_3) </th>
                <th onclick="pembayaran('Semester 2',4,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester2_4 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester2_4) </th>
                <th onclick="pembayaran('Semester 2',5,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester2_5 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester2_5) </th>
                <th onclick="pembayaran('Semester 2',6,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester2_6 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester2_6) </th>

                <th onclick="pembayaran('Semester 3',1,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester3_1 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester3_1) </th>
                <th onclick="pembayaran('Semester 3',2,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester3_2 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester3_2) </th>
                <th onclick="pembayaran('Semester 3',3,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester3_3 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester3_3) </th>
                <th onclick="pembayaran('Semester 3',4,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester3_4 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester3_4) </th>
                <th onclick="pembayaran('Semester 3',5,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester3_5 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester3_5) </th>
                <th onclick="pembayaran('Semester 3',6,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester3_6 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester3_6) </th>

                <th onclick="pembayaran('Semester 4',1,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester4_1 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester4_1) </th>
                <th onclick="pembayaran('Semester 4',2,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester4_2 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester4_2) </th>
                <th onclick="pembayaran('Semester 4',3,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester4_3 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester4_3) </th>
                <th onclick="pembayaran('Semester 4',4,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester4_4 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester4_4) </th>
                <th onclick="pembayaran('Semester 4',5,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester4_5 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester4_5) </th>
                <th onclick="pembayaran('Semester 4',6,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester4_6 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester4_6) </th>

                <th onclick="pembayaran('Semester 5',1,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester5_1 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester5_1) </th>
                <th onclick="pembayaran('Semester 5',2,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester5_2 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester5_2) </th>
                <th onclick="pembayaran('Semester 5',3,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester5_3 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester5_3) </th>
                <th onclick="pembayaran('Semester 5',4,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester5_4 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester5_4) </th>
                <th onclick="pembayaran('Semester 5',5,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester5_5 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester5_5) </th>
                <th onclick="pembayaran('Semester 5',6,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester5_6 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester5_6) </th>

                <th onclick="pembayaran('Semester 6',1,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester6_1 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester6_1) </th>
                <th onclick="pembayaran('Semester 6',2,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester6_2 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester6_2) </th>
                <th onclick="pembayaran('Semester 6',3,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester6_3 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester6_3) </th>
                <th onclick="pembayaran('Semester 6',4,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester6_4 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester6_4) </th>
                <th onclick="pembayaran('Semester 6',5,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester6_5 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester6_5) </th>
                <th onclick="pembayaran('Semester 6',6,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester6_6 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester6_6) </th>

                <th onclick="pembayaran('Semester 7',1,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester7_1 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester7_1) </th>
                <th onclick="pembayaran('Semester 7',2,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester7_2 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester7_2) </th>
                <th onclick="pembayaran('Semester 7',3,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester7_3 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester7_3) </th>
                <th onclick="pembayaran('Semester 7',4,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester7_4 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester7_4) </th>
                <th onclick="pembayaran('Semester 7',5,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester7_5 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester7_5) </th>
                <th onclick="pembayaran('Semester 7',6,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester7_6 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester7_6) </th>
  
                <th onclick="pembayaran('Semester 8',1,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester8_1 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester8_1) </th>
                <th onclick="pembayaran('Semester 8',2,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester8_2 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester8_2) </th>
                <th onclick="pembayaran('Semester 8',3,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester8_3 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester8_3) </th>
                <th onclick="pembayaran('Semester 8',4,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester8_4 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester8_4) </th>
                <th onclick="pembayaran('Semester 8',5,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester8_5 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester8_5) </th>
                <th onclick="pembayaran('Semester 8',6,'{{ $item->nama }}',{{ $item->id }})" style="background:{{ $item->semester8_6 == '' ? 'red' : '#01ff01' }}; color:white"> <p></p> @currency($item->semester8_6) </th>
  
              </tr>
              @endforeach
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script>
$('#example').dataTable();
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function pembayaran (semester,angsuran,nama_mhs,id_mhs){
  console.log(angsuran,nama_mhs,id_mhs);

  Swal.fire({
    title: 'Ingin Melakukan Pembayaran Angsuran ke ' +angsuran + ' ' + semester + ' Mahasiswa atas nama ' + nama_mhs + '?',
    // showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: 'Ya',
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      location.href = 'http://127.0.0.1:8000/pembayaran-spp-mhs/'+id_mhs+'?semester='+semester+'&angsuran='+angsuran+'&nama_mhs'+nama_mhs;
    } else if (result.isDenied) {
      Swal.fire('Changes are not saved', '', 'info')
    }
  })
  
}
</script>
@endsection