<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>Data Master Pengangkut</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('images/logo2.png')}}" rel="icon">
    <link href="{{ asset('css/style.css')}}" rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    
    @include('layout.headerwebpetugas')
    @include('layout.popuplogoutpetugas')
    @include('layout.PetugasPengangkut')
    
    @if(Session::has('success'))
    <script>
    Swal.fire({
    title: "Aksi Berhasil !",
    text: '{{ Session::get('success') }}',
    icon: "success"
    });
    </script>
     @endif

       <!-- INI BADANNYA -->
       <div class="d-none d-lg-block thisbody animate__animated animate__fadeIn">
        <div class="row">
          <h5 class="ha5 col-9">DATA MASTER PENGANGKUT</h5>
          <div class="col-3 drow1">
            <a class="btn btn-secondary buttonkembali" href="{{route('dataMaster')}}">Kembali</a>
          </div>
        </div>
        <hr>
      
      
        <div class="kotakpetugas">
          <div class="row container-fluid">
            <table class="table tabeldata">
              <thead>
                <tr>
                  <th class="centered" scope="col">Id</th>
                  <th class="centered" scope="col">Data</th>
                  <th class="centered" scope="col">Tambah</th>
                  <th class="centered" scope="col">Hapus</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="centered" scope="row">1</th>
                  <td class="centered">Tempat Penimbunan</td>
                  <td class="centered"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#17">Tambah</button></td>
                  <td class="centered"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#18">Hapus</button></td>
                </tr>
      
                <tr>
                  <th class="centered" scope="row">2</th>
                  <td class="centered">Pelabuhan Muat Asal</td>
                  <td class="centered"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#19">Tambah</button></td>
                  <td class="centered"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#20">Hapus</button></td>
                </tr>
      
                <tr>
                  <th class="centered" scope="row">3</th>
                  <td class="centered">Pelabuhan Bongkar</td>
                  <td class="centered"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#21">Tambah</button></td>
                  <td class="centered"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#22">Hapus</button></td>
                </tr>
      
                <tr>
                  <th class="centered"scope="row">4</th>
                  <td class="centered">Pelabuhan Tujuan</td>
                  <td class="centered"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#23">Tambah</button></td>
                  <td class="centered"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#24">Hapus</button></td>
                </tr>
      
                <tr>
                  <th class="centered" scope="row">5</th>
                  <td class="centered">Lokasi Pemeriksaan</td>
                  <td class="centered"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#25">Tambah</button></td>
                  <td class="centered"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#26">Hapus</button></td>
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      
      </div>
      <!-- INI ADALAH BADAN RESPONSIVE -->
      <div class="d-block d-lg-none thisbody2 animate__animated animate__fadeIn">
        <div class="row">
          <h5 class="ha5 col-8 ">DATA MASTER PENGANGKUT</h5>
          <div class="col-4 drow1">
              <a class="btn btn-secondary buttonkembali" href="{{route('dataMaster')}}">Kembali</a>
          </div>
        </div>
        <hr>
        <div class="offside2">
          <div class="container-fluid">
            <div class="row">
              <table class="table tabeldata">
                <thead>
                  <tr>
                    <th class="centered" scope="col">Id</th>
                    <th class="centered" scope="col">Data</th>
                    <th class="centered" scope="col">Tambah</th>
                    <th class="centered" scope="col">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="centered" scope="row">1</th>
                    <td class="centered">Tempat Penimbunan</td>
                    <td class="centered"><button type="button" class="btn btn-primary" tpye="submit">Tambah</button></td>
                    <td class="centered"><button type="button" class="btn btn-danger">Hapus</button></td>
                  </tr>
        
                  <tr>
                    <th class="centered" scope="row">2</th>
                    <td class="centered">Pelabuhan Muat Asal</td>
                    <td class="centered"><button type="button" class="btn btn-primary" tpye="submit">Tambah</button></td>
                    <td class="centered"><button type="button" class="btn btn-danger">Hapus</button></td>
                  </tr>
        
                  <tr>
                    <th class="centered" scope="row">3</th>
                    <td class="centered">Pelabuhan Bongkar</td>
                    <td class="centered"><button type="button" class="btn btn-primary" tpye="submit">Tambah</button></td>
                    <td class="centered"><button type="button" class="btn btn-danger">Hapus</button></td>
                  </tr>
        
                  <tr>
                    <th class="centered"scope="row">4</th>
                    <td class="centered">Pelabuhan Tujuan</td>
                    <td class="centered"><button type="button" class="btn btn-primary" tpye="submit">Tambah</button></td>
                    <td class="centered"><button type="button" class="btn btn-danger">Hapus</button></td>
                  </tr>
        
                  <tr>
                    <th class="centered" scope="row">5</th>
                    <td class="centered">Lokasi Pemeriksaan</td>
                    <td class="centered"><button type="button" class="btn btn-primary" tpye="submit">Tambah</button></td>
                    <td class="centered"><button type="button" class="btn btn-danger">Hapus</button></td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <hr class="container001 container-fluid">
        </div>

  
    @include('layout.sidebarpetugas')
    @include('layout.footer')
    <script src="{{ asset("js/script.js")}}"></script>

</body>