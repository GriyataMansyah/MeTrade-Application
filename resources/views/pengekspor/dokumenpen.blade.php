<?php
$Dokumen = \App\Models\DokumenPendukung::all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>Data Dokumen Pendukung</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='{{ asset('css/style.css')}}' rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logo2.png')}}" type="image/png">
</head>
      @include('layout.headerweb')
      @include('layout.popuplogout')

       <!-- INI BADANNYA -->
    <div class="d-none d-lg-block thisbody animate__animated animate__fadeIn">
      <div class="row">
      <h5 class="ha5 col-9">BC 3.0 PEMBERITAHUAN EKSPOR BARANG</h5>
      <div class="col-3 drow1">
        <div type="button" class="btn btn-outline-secondary drow"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
          <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
        </svg><p class="dalamputih">Muat Ulang</p></div>
        <div type="button" class="btn btn-primary drow"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
          <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
          <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
        </svg><p class="dalambiru">Lanjutkan</p></div>
      </div>
    </div> 
    <hr>
    <div class="offside">
      @include('layout.header1')
    </div>
    <hr class="container00 container-fluid">
    <div class="kotak">
      <div class="container-fluid  border border-1 ">

           <div class="kotakk">
      <div class="row">
        <div class="col-5">
          <h5 class="bagian-bawah"> DOKUMEN LAMPIRAN</h5>
        </div>
        <div class="offset-2 col-5 text-end">
          <button type="button" class="btn btn-primary px-3"data-bs-toggle="modal" data-bs-target="#Modal">Tambah</button> 
        </div>
        </div>
      </div>
      <div class="kotakk">
        <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr class="naupal">
                  <th class="table-primary centered" scope="col">Seri</th>
                  <th class="table-primary centered" scope="col">Jenis</th>
                  <th class="table-primary centered" scope="col">Nomor</th>
                  <th class="table-primary centered" scope="col">Tanggal</th>
                  <th class="table-primary centered" scope="col">Fasilitas</th>
                  <th class="table-primary centered" scope="col">Izin</th>
                  <th class="table-primary centered" scope="col">Kantor</th>
                  <th class="table-primary centered" scope="col">File</th>
                  <th class="table-primary centered" scope="col"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($Dokumen as $dp)
                <tr>
                  <td class="centered">{{ $dp->id}}</td>
                  <td class="centered">{{ $dp->jenis}}</td>
                  <td class="centered">{{ $dp->nomor}}</td>
                  <td class="centered">{{ $dp->tanggal}}</td>
                  <td class="centered">-</td>
                  <td class="centered">-</td>
                  <td class="centered">-</td>
                  <td class="centered">-</td>
                  <td class="oe centered" >
                    <form action="{{ route('hapus.dokumenpen', $dp->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                       </svg>
                      </button>
                  </form>
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>    
        </div>
    </div>    
    </div><div class="tambah"></div>
      </div>
      </div>
  </div>
  
              <!-- INI ADALAH BADAN RESPONSIVE -->
              <div class="d-block d-lg-none thisbody2 animate__animated animate__fadeIn">
                <div class="row">
                  <h5 class="ha5 col-8 ">BC 3.0 PEMBERITAHUAN EKSPOR BARANG</h5>
                  <div class="col-4 drow1">
                    <div type="button" class="btn btn-outline-secondary drow d-none d-sl-block"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="hoh1 bi bi-arrow-clockwise" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                      <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
                    </svg><p class="dalamputih">Muat Ulang</p></div>
                    <div type="button" class="btn btn-primary drow2"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="hoh1 bi bi-file-earmark-plus" viewBox="0 0 16 16">
                      <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
                      <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                    </svg><p class="dalambiru">Lanjutkan</p></div>
                  </div>
                </div>
                  <hr>
                  <div class="offside2">
                    @include('layout.header2')
                  </div>
                  <hr class="container001 container-fluid">
           <div class="kotakk">
            <div class="container-fluid  border border-1 ">

              <div class="kotakk">
         <div class="row">
           <div class="col-5">
             <h5 class="bagian-bawah"> DOKUMEN LAMPIRAN</h5>
           </div>
           <div class="offset-2 col-5 text-end">
             <button type="button" class="btn btn-primary px-3"data-bs-toggle="modal" data-bs-target="#Modal">Tambah</button> 
           </div>
           </div>
         </div>
         <div class="kotakk">
           <div class="table-responsive">
               <table class="table table-bordered">
                 <thead>
                   <tr class="naupal">
                     <th class="table-primary centered" scope="col">Seri</th>
                     <th class="table-primary centered" scope="col">Jenis</th>
                     <th class="table-primary centered" scope="col">Nomor</th>
                     <th class="table-primary centered" scope="col">Tanggal</th>
                     <th class="table-primary centered" scope="col">Fasilitas</th>
                     <th class="table-primary centered" scope="col">Izin</th>
                     <th class="table-primary centered" scope="col">Kantor</th>
                     <th class="table-primary centered" scope="col">File</th>
                     <th class="table-primary centered" scope="col"></th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <th scope="row" class="centered">1</th>
                     <td class="centered">380 - Invoice</td>
                     <td class="centered">INV</td>
                     <td class="centered">28 - 01 - 2004</td>
                     <td class="centered"></td>
                     <td class="centered"></td>
                     <td class="centered"></td>
                     <td class="centered"></td>
                     <td class="oe centered" >
                       <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                       <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                       <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                     </svg></a>
                   </td>
                   </tr>
                   <tr>
                     <th scope="row" class="centered">1</th>
                     <td class="centered">380 - Invoice</td>
                     <td class="centered">INV</td>
                     <td class="centered">28 - 01 - 2004</td>
                     <td class="centered"></td>
                     <td class="centered"></td>
                     <td class="centered"></td>
                     <td class="centered"></td>
                     <td class="oe centered" >
                       <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                       <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                       <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                     </svg></a>
                   </td>
                   </tr>
                 </tbody>
               </table>    
           </div>
       </div>    
       </div><div class="tambah2"></div>
      </div>
      </div>
  </div>

  @include('layout.popupdokumenpen')
  @include('layout.sidebar')
  @include('layout.footer')

    <script src="{{ asset('js/script.js')}}"></script>
</body>