<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('images/logo2.png')}}" rel="icon">
    <link href="{{ asset('css/style.css')}}" rel='stylesheet'>
    @include('layout.headerwebpetugas')
    @include('layout.popuplogoutpetugas')
    
       <!-- INI BADANNYA -->
       <div class="d-none d-lg-block thisbody animate__animated animate__fadeIn">
        <div class="row">
          <h5 class="ha5 col-9">DATA MASTER</h5>
          <div class="col-3 drow1">
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
                  <th class="centered" scope="col">Edit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="centered" scope="row">1</th>
                  <td class="centered">Data Header</td>
                  <td class="centered"><a href="{{route('dataMasterHeader')}}"><button type="button" class="btn btn-primary" tpye="submit">Kelola</button></a></td>
                </tr>
      
                <tr>
                  <th class="centered" scope="row">2</th>
                  <td class="centered">Data Pengangkut</td>
                  <td class="centered"><a href="{{route('dataMasterPengangkut')}}"><button type="button" class="btn btn-primary" tpye="submit">Kelola</button></a></td>
                </tr>
      
                <tr>
                  <th class="centered" scope="row">3</th>
                  <td class="centered">Data Transaksi</td>
                  <td class="centered"><a href="{{route('dataMasterTransaksi')}}"><button type="button" class="btn btn-primary" tpye="submit">Kelola</button></a></td>
                </tr>
      
                <tr>
                  <th class="centered" scope="row">4</th>
                  <td class="centered">Data Barang</td>
                  <td class="centered"><a href="#"><button type="button" class="btn btn-primary" tpye="submit">Kelola</button></a></td>
                </tr>
    
              </tbody>
            </table>
          </div>
        </div>
      
      </div>
              <!-- INI ADALAH BADAN RESPONSIVE -->
              <div class="d-block d-lg-none thisbody2 animate__animated animate__fadeIn">
                <div class="row">
                  <h5 class="ha5 col-8 ">DATA MASTER</h5>
                  <div class="col-4 drow1">
            
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
                            <th class="centered" scope="col">Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th class="centered" scope="row">1</th>
                            <td class="centered">Data Header</td>
                            <td class="centered"><a href="{{route('dataMasterHeader')}}"><button type="button" class="btn btn-primary" tpye="submit">Kelola</button></a></td>
                          </tr>
              
                
                          <tr>
                            <th class="centered" scope="row">2</th>
                            <td class="centered">Data Pengangkut</td>
                            <td class="centered"><a href="#"><button type="button" class="btn btn-primary" tpye="submit">Kelola</button></a></td>
                          </tr>
                        
                          <tr>
                            <th class="centered" scope="row">3</th>
                            <td class="centered">Data Transaksi</td>
                            <td class="centered" ><a href="{{route('dataMasterTransaksi')}}"><button type="button" class="btn btn-primary" tpye="submit">Kelola</button></a></td>
                          </tr>
                
                          <tr>
                            <th  class="centered" scope="row">4</th>
                            <td class="centered">Data Barang</td>
                            <td class="centered"><a href="#"><button type="button" class="btn btn-primary" tpye="submit">Kelola</button></a></td>
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