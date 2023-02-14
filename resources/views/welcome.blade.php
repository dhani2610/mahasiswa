<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Homepage</title>
    <style>
        .border-bulet {
            border-radius: 20px;
        }

        .bg-perpus{
            background:#ff9100;
        }
    </style>
  </head>
  <body>
    <div class="row mt-5">
        <center>
            <a href="#d" class="d-block auth-logo">
                <img src="{{ asset('img/76-764671_software-tools-icon-png-transparent-png-removebg-preview.png') }}" alt="" height="100">
            </a>
            <h5>Selamat Datang!</h5>
        </center>
    </div>

    <div class="row" style="padding:10%; padding-top: 5%!important;">
        <div class="col-sm-4 mb-3">
          <div class="card border-bulet">
            <div class="card-body">
              <h5 class="card-title">Login Admin</h5>
              <a href="{{ url('/login?req=admin') }}" class="btn bg-perpus">Go</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-3">
          <div class="card border-bulet">
            <div class="card-body">
              <h5 class="card-title">Cek Pembayaran</h5>
              <a href="#" class="btn bg-perpus">Go</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-3">
          <div class="card border-bulet">
            <div class="card-body">
              <h5 class="card-title">Login Siswa</h5>
              <a href="{{ url('/login?req=siswa') }}" class="btn bg-perpus">Go</a>
            </div>
          </div>
        </div>
      </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>