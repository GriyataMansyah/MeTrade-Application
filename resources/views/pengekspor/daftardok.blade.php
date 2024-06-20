<?php
$Auth = Auth::id();
$loggedInUserId = \App\Models\Pengekspor::where('id_akun', $Auth)->value('id');
$Dokumen1 = \App\Models\Dokumen::where('id_pengekspor', $loggedInUserId)->pluck('id');
$Dokumen = \App\Models\Dokumen::whereIn('id', $Dokumen1)->get();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>Daftar Dokumen Pendukung</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('images/logo2.png')}}" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      window.addEventListener('load', function() {
          localStorage.clear();
      });
      window.addEventListener('load', function() {
          sessionStorage.clear();
      });
    
        function printKucing() {
            // Muat konten halaman kucing menggunakan AJAX
            fetch('{{ route('output') }}')
                .then(response => response.text())
                .then(data => {
                    // Buat iframe tersembunyi
                    const iframe = document.createElement('iframe');
                    iframe.style.position = 'absolute';
                    iframe.style.width = '0';
                    iframe.style.height = '0';
                    iframe.style.border = 'none';
                    document.body.appendChild(iframe);

                    // Masukkan konten ke dalam iframe
                    iframe.contentDocument.open();
                    iframe.contentDocument.write(data);
                    iframe.contentDocument.close();

                    // Cetak konten dalam iframe
                    iframe.contentWindow.print();

                    // Hapus iframe setelah pencetakan selesai
                    iframe.contentWindow.onafterprint = function() {
                        document.body.removeChild(iframe);
                    };
                });
        }
 
  </script>
</head>
<body onload="clearLocalStorage()">
    @include('layout.headerweb')
    @include('layout.popuplogout')
    
       <!-- INI BADANNYA -->
    <div class="d-none d-lg-block thisbody animate__animated animate__fadeIn">
      <div class="row">
      <h5 class="ha5 col-9">Daftar Dokumen</h5>
      <div class="col-3 drow1">
        <div type="button" class="btn btn-outline-secondary drow" onclick="refreshPage()"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="hoh11 bi bi-arrow-clockwise" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
          <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
        </svg><p class="dalamputih">Refresh</p></div>
        <div type="button" class="btn btn-primary drow"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="hoh11 bi bi-file-earmark-plus" viewBox="0 0 16 16">
          <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
          <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
        </svg><p class="dalambiru0" data-bs-toggle="modal" data-bs-target="#Modal">Dokumen</p></div>
      </div>
    </div>
      <hr>
      <div class="table-responsive">
        <div class="container">
          <table class="table table-bordered">
            <thead>
              <tr class="i">
                <th class="table-primary centered" scope="col">Seri</th>
                <th class="table-primary centered" scope="col">Dokumen</th>
                <th class="table-primary centered" scope="col">Nomor Pengajuan</th>
                <th class="table-primary centered" scope="col">Nama Respon</th>
               <th class="table-primary centered" scope="col">Kantor Pabean</th>
                 <th class="table-primary centered" scope="col">Tujuan Pabean</th>
                <th class="table-primary centered"></th>
              </tr>
            </thead>
            <tbody>
              @if ($Dokumen->isEmpty())
                <tr>
                    <td colspan="7" class="text-center">
                        <img src="{{ asset("images/no.png")}}" alt="Empty Table Image">
                        <p>Tidak ada data yang tersedia</p>
                    </td>
                </tr>
            @else
              <tr>
                @foreach ($Dokumen as $dok)
                <td class="centered">{{$dok->id}}</td>
                <td class="centered">{{$dok->jenis_dokumen}}</td>

                <?php 
                $Headers = \App\Models\Header::where('id_dokumen', $dok->id)->get();
                ?>
                @foreach ($Headers as $h)
                <td class="centered">
                  <div type='button' onclick="printKucing()">{{ $h->nomor_pengajuan}}</div>
                  {{-- YANG RESPONSIVE BELUM YAK --}}
                </td> 
                @endforeach
                
                <td class="centered">Belum Di Proses</td>
                <td class="centered">{{$dok->asal_brg}}</td>
                <td class="centered">{{$dok->tujuan_brg}}</td>
                <td class="samping"><div onclick="HapusDokumen()" type="button" class="kiri"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
               </svg></div>
              <div type="button" onclick="Edit()" class="kanan"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
              </svg></div></td>
               {{-------- TIDAK TERLIHAT ------}}
                <td class="inv">
                  <form  action="{{ route('hapus.dokumen', $dok->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="pencet1">
                    </button>
                </form>
                </td>
                <td class="inv">
                  <form action="{{ route('editheader', ['id' => $dok->id]) }}" method="POST">
                    @csrf
                    <button type="submit" id="edit"></button>
                </form>
                </td>
                {{-- ---------------------- --}}
              </tr>
              @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
              <!-- INI ADALAH BADAN RESPONSIVE -->
              <div class="d-block d-lg-none thisbody2 animate__animated animate__fadeIn">
                <div class="row">
                  <h5 class="ha5 col-6">Daftar Dokumen</h5>
                  <div class="col-6 drow1">
                    <div type="button" class="btn btn-outline-secondary drow" onclick="refreshPage()"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class=" bi bi-arrow-clockwise" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                      <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
                    </svg><p class="dalamputih">Refresh</p></div>
                    <div type="button" class="btn btn-primary drow"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class=" bi bi-file-earmark-plus" viewBox="0 0 16 16">
                      <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
                      <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                    </svg><p class="dalambiru" data-bs-toggle="modal" data-bs-target="#Modal">Dokumen</p></div>
                  </div>
                </div>
                  <hr>
                  <div class="table-responsive">
                    <div class="container">
                      <table class="table table-bordered">
                        <thead>
                          <tr class="i">
                            <th class="table-primary centered" scope="col">Seri</th>
                            <th class="table-primary centered" scope="col">Dokumen</th>
                            <th class="table-primary centered" scope="col">Nomor Pengajuan</th>
                            <th class="table-primary centered" scope="col">Nama Respon</th>
                           <th class="table-primary centered" scope="col">Kantor Pabean</th>
                             <th class="table-primary centered" scope="col">Tujuan Pabean</th>
                            <th class="table-primary centered"></th>
                          </tr>
                        </thead>
                        <tbody>
                          @if ($Dokumen->isEmpty())
                            <tr>
                                <td colspan="7" class="text-center">
                                    <img src="{{ asset("images/no.png")}}" alt="Empty Table Image">
                                    <p>Tidak ada data yang tersedia</p>
                                </td>
                            </tr>
                        @else
                          <tr>
                            @foreach ($Dokumen as $dok)
                            <td class="centered">{{$dok->id}}</td>
                            <td class="centered">{{$dok->jenis_dokumen}}</td>
                            <td class="centered">****************</td>
                            <td class="centered">Belum Di Proses</td>
                            <td class="centered">{{$dok->asal_brg}}</td>
                            <td class="centered">{{$dok->tujuan_brg}}</td>
                            <td class="samping"><div onclick="HapusDokumen()" type="button" class="kiri"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                           </svg></div>
                          <div type="button" onclick="Edit()" class="kanan"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg></div></td>
                           {{-------- TIDAK TERLIHAT ------}}
                            <td class="inv">
                              <form  action="{{ route('hapus.dokumen', $dok->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" id="pencet1">
                                </button>
                            </form>
                            </td>
                            <td class="inv">
                              <form action="{{ route('editheader', ['id' => $dok->id]) }}" method="POST">
                                @csrf
                                <button type="submit" id="edit"></button>
                            </form>
                            </td>
                            {{-- ---------------------- --}}
                          </tr>
                          @endforeach
                          @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
      @include("layout.popupdafdok")
      @include("layout.sidebar")
      @include('layout.footer')
    <script src={{asset('js/script.js')}}></script>
</body>
