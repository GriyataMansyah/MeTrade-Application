<?php
$HS = \App\Models\HS::all();
$DataKode = \App\Models\DataKode::all();
$DaerahAsalBarang = \App\Models\DaerahAsalBarang::all();
$KodeSatuan = \App\Models\KodeSatuan::all();
$KodeKemasan = \App\Models\KodeKemasan::all();
?>
{{-- RESPONSIVENYA BELOMMM --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>Data Barang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='{{ asset('css/style.css')}}' rel="stylesheet">
    <link href="{{ asset('images/logo2.png')}}" rel="icon">
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
        <button type="submit" value="submit" onclick="submitForm5()" class="btn btn-primary drow"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
          <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
          <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
        </svg><p class="dalambiru">Lanjutkan</p></button>
      </div>
    </div> 
    <hr>
    <div class="offside">
      @include("layout.header1")
    </div>
    <hr class="container00 container-fluid">   
      <div class="kotakw">
          <form class="mt-4" id="formulir5">
          <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label">HS</label>
            <div class="col-sm-4">
              <select id="input1" class="form-select" name="HS">
                <option></option>
             @foreach ($HS as $A)
             <option value="{{ $A->nama }}">{{ $A->nama }}</option>
             @endforeach
              </select>
            </div>
            <label for="input1" class="col-sm-2 col-form-label ">Satuan</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="input1" name="satuan">
            </div>
            <div class="col-sm-2">
              <select id="input1" class="form-select" name="kode_satuan">
                <option></option>
                @foreach ($KodeSatuan as $KS)
                <option value="{{ $KS->nama }}">{{ $KS->nama }}</option>
                @endforeach
              </select>
            </div>    
          </div>
          <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label ">Lartas</label>
            <div class="col-sm-4">
              <select id="input1" class="form-select" name="lartas">
                <option> </option>
                <option value="1">LARTAS</option>
                <option value="2">BUKAN LARTAS </option>
              </select>
            </div>
            <label for="input1" class="col-sm-2 col-form-label ">Kemasan</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="input1" name="kemasan">
            </div>
            <div class="col-sm-2">
              <select id="input1" class="form-select" name="kode_kemasan">
                <option></option>
                @foreach ($KodeKemasan as $KK)
                <option value="{{ $KK->nama }}">{{ $KK->nama }}</option>
                @endforeach
              </select>
            </div>  
          </div>
          <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label ">Kode</label>
            <div class="col-sm-4">
              <select id="kode" class="form-select" onchange="updateInputValue2()" name="kode">
                <option> </option>
                @foreach ($DataKode as $DK)
                <option value="{{ $DK->nama }}">{{ $DK->nama }}</option>
                @endforeach
              </select>
          </div>  
          <label for="input1" class="col-sm-2 col-form-label ">Harga FOB</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="input1" name="harga_fob">
        </div>     
          </div>
          <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label ">Uraian</label>
            <div class="col-sm-4">
              <textarea type="text" class="form-control" id="kode2" name="uraian" onlyread></textarea>
          </div>  
          <label for="input1" class="col-sm-2 col-form-label ">Volume</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="input1" name="volume">
        </div>    
          </div>
           <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label ">Mark</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="input1" placeholder="BOLEH DI KOSONGKAN" name="mark"></input>
          </div>  
          <label for="input1" class="col-sm-2 col-form-label ">Berat Bersih (KG)</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" id="input1" name="berat_bersih">
        </div>       
          </div>
           <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label ">Tipe</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="input1" placeholder="BOLEH DI KOSONGKAN" name="tipe"></input>
          </div>  
          <label for="input1" class="col-sm-2 col-form-label ">Harga Satuan FOB</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="input1" name="harga_satuan_fob" readonly>
          </div>
          </div>
          <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label ">Ukuran</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="input1" placeholder="BOLEH DI KOSONGKAN" name="ukuran">
          </div>   
          <div class="col-6"></div>      
          </div>
          <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label">Negara Asal Barang</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="input1" value="INDONESIA" disabled>
            </div>  
            <div class="col-6"></div>       
          </div>
          <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label">Daerah Asal Barang</label>
            <div class="col-sm-4">
              <select id="input1" class="form-select" name="daerah_asal_barang">
                <option></option>
                @foreach ($DaerahAsalBarang as $E)
                <option value="{{ $E->nama }}">{{ $E->nama }}</option>
                @endforeach
              </select>
            </div>         
            <div class="col-6"></div>
          </div>
          
          </form>
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
                    <button type="submit" value="submit" onclick="submitForm5()" class="btn btn-primary drow2"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="hoh1 bi bi-file-earmark-plus" viewBox="0 0 16 16">
                      <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
                      <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                    </svg><p class="dalambiru">Lanjutkan</p></button>
                  </div>
                </div>
                  <hr>
                  <div class="offside2">
                    <div class="container-fluid">
                      <div class="row hayhay">
                        <div class="col isi2"><a href="#" >Header</a></div>
                        <div class="col isi2"><a href="#" >Entitas</a></div>
                        <div class="col isi2"><a href="#" >Dokumen</a></div>
                        <div class="col isi2"><a href="#" >Angkut</a></div>
                        <div class="col isi2"><a href="#" >Kemasan</a></div>
                        <div class="col isi2"><a href="#" >Transaksi</a></div>
                        <div class="col isi2"><a href="#" >Barang</a></div>
                        <div class="col isi2"><a href="#" >Pungutan</a></div>
                        <div class="col isi2"><a href="#" >Pernyataan</a></div>
                      </div>
                    </div>   
                  </div>
                  <hr class="container001 container-fluid">
                  <div class="kotakw">
                    <form class="mt-4" id="formulir5">
                      <div class="form-group row ">
                        <label for="input1" class="col-sm-2 col-form-label">Seri</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="input1" disabled>
                        </div>
                        <label for="input1" class="col-sm-2 col-form-label ">Satuan</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control" id="input1">
                        </div>
                        <div class="col-sm-2">
                          <select id="input1" class="form-select ">
                            <option></option>
                          <option value="1">KG</option>
                          <option value="2">HG</option>
                          <option value="3">DaG</option>
                          </select>
                        </div>          
                    </div>
                    <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label">HS</label>
                      <div class="col-sm-4">
                        <select id="input1" class="form-select ">
                          <option></option>
                        <option value="1">1 - BIASA</option>
                        <option value="2">2 - RADIASI</option>
                        <option value="3">3 - ADIKTIF </option>
                        <option value="4">4 - AKTIF</option>
                        <option value="5">5 - PASIF</option>
                        <option value="6">6 - LAINNYA </option>
                        </select>
                      </div>
                      <label for="input1" class="col-sm-2 col-form-label ">Kemasan</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="input1">
                      </div>
                      <div class="col-sm-2">
                        <select id="input1" class="form-select ">
                          <option></option>
                          <option value="1">WB</option>
                          <option value="2">ST</option>
                          <option value="3">PS</option>
                        </select>
                      </div>         
                    </div>
                    <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label " >Lartas</label>
                      <div class="col-sm-4">
                        <select id="input1" class="form-select ">
                          <option> </option>
                          <option value="1">LARTAS</option>
                          <option value="2">BUKAN LARTAS </option>
                        </select>
                      </div>
                      <label for="input1" class="col-sm-2 col-form-label ">Harga FOB</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="input1">
                    </div>  
                    </div>
                    <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label ">Kode</label>
                      <div class="col-sm-4">
                        <select id="kode" class="form-select" onchange="updateInputValue2()">
                          <option> </option>
                          <option value="1">WH</option>
                          <option value="2">ST</option>
                        </select>
                    </div>  
                      <label for="input1" class="col-sm-2 col-form-label ">Volume</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="input1">
                    </div>         
                    </div>
                    <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label ">Uraian</label>
                      <div class="col-sm-4">
                        <textarea type="text" class="form-control" id="kode2" onlyread></textarea>
                    </div>  
                      <label for="input1" class="col-sm-2 col-form-label ">Berat Bersih (KG)</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="input1">
                    </div>         
                    </div>
                     <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label ">Mark</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="input1" placeholder="BOLEH DI KOSONGKAN"></input>
                    </div>  
                      <label for="input1" class="col-sm-2 col-form-label ">Harga Satuan FOB</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="input1" disabled>
                    </div>         
                    </div>
                     <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label ">Tipe</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="input1" placeholder="BOLEH DI KOSONGKAN"></input>
                    </div>  
                    <div class="col-6"></div>
                    </div>
                    <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label ">Ukuran</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="input1" placeholder="BOLEH DI KOSONGKAN">
                    </div>   
                    <div class="col-6"></div>      
                    </div>
                    <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label">Negara Asal Barang</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="input1" value="INDONESIA" disabled>
                      </div>  
                      <div class="col-6"></div>       
                    </div>
                    <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label">Daerah Asal Barang</label>
                      <div class="col-sm-4">
                        <select id="input1" class="form-select ">
                          <option></option>
                          <option value="1">SUMATRA</option>
                          <option value="2">JAWA</option>
                          <option value="3">KALIMANTAN</option>
                        </select>
                      </div>         
                      <div class="col-6"></div>
                    </div>
                    
                    </form>
                </div>
                 <div class="tambah2">
                  </div>
                
              </div>

              @include('layout.sidebar')
              @include('layout.footer')
              <script src="{{ asset("js/script.js")}}"></script>
</body>