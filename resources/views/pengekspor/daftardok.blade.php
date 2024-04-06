<!DOCTYPE html>
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
</head>
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
        </svg><p class="dalambiru" data-bs-toggle="modal" data-bs-target="#Modal">Dokumen</p></div>
      </div>
    </div>
      <hr>
      <div class="table-responsive">
        <div class="container">
          <table class="table table-bordered">
            <thead>
              <tr class="i">
                <th class="table-primary" scope="col">Nomor</th>
                <th class="table-primary" scope="col">Dokumen</th>
                <th class="table-primary" scope="col">Nomor Pengajuan</th>
                <th class="table-primary" scope="col">Tanggal Daftar</th>
                <th class="table-primary" scope="col">Nama Respon</th>
                <th class="table-primary" scope="col">Tanggal Respon</th>
                <th class="table-primary" scope="col">Jalur</th>
                <th class="table-primary" scope="col">Kantor Pabean</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Dokumen 1</td>
                <td>NP-001</td>
                <td>2024-03-14</td>
                <td>Respon 1</td>
                <td>2024-03-15</td>
                <td>Jalur 1</td>
                <td>Kantor Pabean 1</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Dokumen 2</td>
                <td>NP-002</td>
                <td>2024-03-15</td>
                <td>Respon 2</td>
                <td>2024-03-16</td>
                <td>Jalur 2</td>
                <td>Kantor Pabean 2</td>
              </tr>
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
                            <th class="table-primary" scope="col">Nomor</th>
                            <th class="table-primary" scope="col">Dokumen</th>
                            <th class="table-primary" scope="col">Nomor Pengajuan</th>
                            <th class="table-primary" scope="col">Tanggal Daftar</th>
                            <th class="table-primary" scope="col">Nama Respon</th>
                            <th class="table-primary" scope="col">Tanggal Respon</th>
                            <th class="table-primary" scope="col">Jalur</th>
                            <th class="table-primary" scope="col">Kantor Pabean</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Dokumen 1</td>
                            <td>NP-001</td>
                            <td>2024-03-14</td>
                            <td>Respon 1</td>
                            <td>2024-03-15</td>
                            <td>Jalur 1</td>
                            <td>Kantor Pabean 1</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Dokumen 2</td>
                            <td>NP-002</td>
                            <td>2024-03-15</td>
                            <td>Respon 2</td>
                            <td>2024-03-16</td>
                            <td>Jalur 2</td>
                            <td>Kantor Pabean 2</td>
                          </tr>
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