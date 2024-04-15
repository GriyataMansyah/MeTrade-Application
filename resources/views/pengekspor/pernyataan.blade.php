<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>Data Pernyataan</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css')}}" rel='stylesheet'>
    <link href="{{ asset('images/logo2.png')}}" rel='icon'>
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
        <button type="submit" value="submit" onclick="submitForm6()" class="btn btn-primary drow"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
          <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
          <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
        </svg><p class="dalambiru" data-bs-toggle="modal" data-bs-target="#Modal">Kirim</p></button>
      </div>
    </div> 
    <hr>
    <div class="offside">
     @include("layout.header1")  
    </div>
    <hr class="container00 container-fluid">
    <div class="kotakhaha">
      <div class="kotakdalam">
        <p class="satu"><b>Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang diberitahuan dalam Pemberitahuan Ekspor Barang ini,serta bersedia dikenakan sanksi sesuai dengan ketentuan dibidang kepabeanan apabila terdapat kesalahan.</b></p>
      </div>
      <div class="row">
      <div class="col-6">
        <form id="formulir6" method="post" action="{{ route('tambahpernyataan')}}">
          @csrf
        <table class="tables">
          <thead >
            <tr>
              <th class="th1">Tempat&Tanggal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="td1">
                Tempat:<br><br>
                <div class="input-group mb-3 input1">
                  <input type="text" class="form-control " placeholder="Tempat" aria-label="Username" aria-describedby="basic-addon1" name="tempat">
                </div>

                Tanggal:<br><br>
                <div class="input-group mb-3 input1">
                  <input type="date" class="form-control" placeholder="Tanggal" aria-label="Username" aria-describedby="basic-addon1" name="tanggal">
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-6">
        <table class="tabless">
          <thead>
            <tr>
              <th class="th1">Nama&Jabatan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="td1">
                Nama:<br><br>
                <div class="input-group mb-3 input1">
                  <input type="text" class="form-control " placeholder="Nama" aria-label="Username" aria-describedby="basic-addon1" name="nama">
                </div>

                Jabatan:<br><br>
                <div class="input-group mb-3 input1">
                  <input type="text" class="form-control" placeholder="Jabatan" aria-label="Jabatab" aria-describedby="basic-addon1" name="jabatan">
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
      </div>
    </div>
    </div>
     <div class="tambah">
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
                    <buuton type="submit" value="submit" onclick="submitForm6()" class="btn btn-primary drow2"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="hoh1 bi bi-file-earmark-plus" viewBox="0 0 16 16">
                      <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
                      <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                    </svg><p class="dalambiru" data-bs-toggle="modal" data-bs-target="#Modal" >Kirim</p></buuton>
                  </div>
                </div>
                  <hr>
                  <div class="offside2">
                    @include("layout.header2")    
                  </div>
                  <hr class="container001 container-fluid">
                  <div class="kotak2haha">
                    <div class="kotakdalam2">
                      <p class="satu"><b>Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang diberitahuan dalam Pemberitahuan Ekspor Barang ini,serta bersedia dikenakan sanksi sesuai dengan ketentuan dibidang kepabeanan apabila terdapat kesalahan.</b></p>
                    </div>
                    <div class="row">
                    <div class="col-6">
                      <form id="formulir6" action="{{url('/entitas')}}">
                      <table class="tables">
                        <thead >
                          <tr>
                            <th class="th1">Tempat&Tanggal</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="td1">
                              Tempat:<br><br>
                              <div class="input-group mb-3 input1">
                                <input type="text" class="form-control " placeholder="Tempat" aria-label="Username" aria-describedby="basic-addon1" name="tempat">
                              </div>
              
                              Tanggal:<br><br>
                              <div class="input-group mb-3 input1">
                                <input type="date" class="form-control" placeholder="Tanggal" aria-label="Username" aria-describedby="basic-addon1" name="tanggal">
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-6">
                      <table class="tabless">
                        <thead >
                          <tr>
                            <th class="th1">Nama&Jabatan</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="td1">
                              Nama:<br><br>
                              <div class="input-group mb-3 input1">
                                <input type="text" class="form-control " placeholder="Nama" aria-label="Username" aria-describedby="basic-addon1" name="nama">
                              </div>
              
                              Jabatan:<br><br>
                              <div class="input-group mb-3 input1">
                                <input type="text" class="form-control" placeholder="Jabatan" aria-label="Username" aria-describedby="basic-addon1" name="jabatan">
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </form>
                    </div>
                  </div>
                  </div>
                  <div class="tambah2">
                  </div>
              </div>

    @include('layout.sidebar')
    @include('layout.footer')
    <script src="{{ asset('js/script.js')}}"></script>
</body>