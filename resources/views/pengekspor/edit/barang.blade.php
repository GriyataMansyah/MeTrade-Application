<?php
$id = session('id_dokumen');
$HS = \App\Models\HS::all();
$DataKode = \App\Models\DataKode::all();
$DaerahAsalBarang = \App\Models\DaerahAsalBarang::all();
$KodeSatuan = \App\Models\KodeSatuan::all();
$KodeKemasan = \App\Models\KodeKemasan::all();
$Lartas= \App\Models\Lartas::all();
$EntitasBarang = \App\Models\EntitasBarang::all();
$Barang = \App\Models\Barang::all();
$InformasiAsalBarang = \App\Models\InformasiAsalBarang::all();
$InformasiBarang= \App\Models\InformasiBarang::all();
$HargaKemasan= \App\Models\HargaKemasan::all();
?>
{{-- RESPONSIVENYA BELOMMM --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>Data Barang Update</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='{{ asset('css/style.css')}}' rel="stylesheet">
    <link href="{{ asset('images/logo2.png')}}" rel="icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>
    @include('layout.headerweb')
    @include('layout.popuplogout')
    
       <!-- INI BADANNYA -->
    <div class="d-none d-lg-block thisbody animate__animated animate__fadeIn">
      <div class="row">
      <h5 class="ha5 col-9">BC 3.0 PEMBERITAHUAN EKSPOR BARANG</h5>
      <div class="col-3 drow1">
        <div type="button" class="btn btn-outline-secondary drow" onclick="refreshPage()"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
          <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
        </svg><p class="dalamputih">Muat Ulang</p></div>
        <button type="submit" value="submit" onclick="pertanyaan()" class="btn btn-success drow"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
          <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
          <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
        </svg><p class="dalambiru">Update</p></button>
      </div>
    </div> 
    <hr>
    <div class="offside">
      @include("layout.header3")
    </div>
    <hr class="container00 container-fluid">   
      <div class="kotakw">
          <form class="mt-4" id="formulir5" method="post" action="{{ route('tambahbarang2')}}">
            @csrf
            <input type="text" name="id" class="inv" value="{{$id}}">
          <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label">HS</label>
            <div class="col-sm-4">
              <select class="form-select" name="HS">
                @foreach ($InformasiBarang->where('id', $id) as $b)
                <option value="{{$b->HS}}">{{$b->HS}}</option>
                @endforeach
             @foreach ($HS as $A)
             <option value="{{ $A->nama }}">{{ $A->nama }}</option>
             @endforeach
              </select>
            </div>
            <label for="input1" class="col-sm-2 col-form-label ">Satuan</label>
            <div class="col-sm-2">
              @foreach ($InformasiBarang->where('id', $id) as $b)
              <input type="text" class="form-control" name="satuan" onkeypress="return hanyaAngka(event)" value="{{$b->satuan}}">
              @endforeach
            </div>
            <div class="col-sm-2">
              <select id="input1" class="form-select" name="kode_satuan">
                @foreach ($InformasiBarang->where('id', $id) as $b)
                <option value="$he->kode_satuan">{{$b->kode_satuan}}</option>
                @endforeach
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
                @foreach ($InformasiBarang->where('id', $id) as $b)
                <option value="{{$b->lartas}}">{{$b->lartas}}</option>
                @endforeach
                <option value="1">LARTAS</option>
                <option value="2">BUKAN LARTAS </option>
              </select>
            </div>
            <label for="input1" class="col-sm-2 col-form-label ">Kemasan</label>
            <div class="col-sm-2">
              @foreach ($HargaKemasan->where('id', $id) as $f)
              <input type="text" class="form-control" id="input1" name="kemasan" onkeypress="return hanyaAngka(event)" value="{{$f->kemasan}}">
              @endforeach
            </div>
            <div class="col-sm-2">
              <select id="input1" class="form-select" name="kode_kemasan">
                @foreach ($InformasiBarang->where('id', $id) as $f)
                <option value="{{$f->kode_kemasan}}">{{$f->kode_kemasan}}</option>
                @endforeach
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
                @foreach ($InformasiBarang->where('id', $id) as $b)
                <option value="{{$b->kode}}">{{$b->kode}}</option>
                @endforeach
                @foreach ($DataKode as $DK)
                <option value="{{ $DK->nama }}">{{ $DK->nama }}</option>
                @endforeach
              </select>
          </div>  
          <label for="input1" class="col-sm-2 col-form-label ">Harga FOB</label> 
          <div class="col-sm-4">
            @foreach ($HargaKemasan->where('id', $id) as $f)
            <input type="text" class="form-control" name="harga_fob" onkeypress="return hanyaAngka(event)" value="{{$f->harga_fob}}">
            @endforeach
        </div>     
          </div>
          <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label ">Uraian</label>
            <div class="col-sm-4">
              @foreach ($InformasiBarang->where('id', $id) as $b)
              <textarea class="form-control" name="uraian">{{$b->uraian}}</textarea>
              @endforeach   
          </div>  
          <label for="input1" class="col-sm-2 col-form-label ">Volume</label>
          <div class="col-sm-4">
            @foreach ($HargaKemasan->where('id', $id) as $f)
            <input type="text" class="form-control" name="volume" onkeypress="return hanyaAngka(event)" value="{{$f->volume}}">
            @endforeach
        </div>    
          </div>
           <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label ">Mark</label>
            <div class="col-sm-4">
              @foreach ($InformasiBarang->where('id', $id) as $b)
              <input type="text" class="form-control" placeholder="BOLEH DI KOSONGKAN" name="mark" value="{{$b->mark}}"></input>
              @endforeach
          </div>  
          <label for="input1" class="col-sm-2 col-form-label ">Berat Bersih (KG)</label>
          <div class="col-sm-4">
            @foreach ($HargaKemasan->where('id', $id) as $f)
            <input type="text" class="form-control" name="berat_bersih" onkeypress="return hanyaAngka(event)" value="{{$f->berat_bersih}}">
            @endforeach
        </div>       
          </div>
           <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label ">Tipe</label>
            <div class="col-sm-4">
              @foreach ($InformasiBarang->where('id', $id) as $b)
              <input type="text" class="form-control"  placeholder="BOLEH DI KOSONGKAN" name="tipe" value="{{$b->tipe}}"></input>
              @endforeach
          </div>  
          <label for="input1" class="col-sm-2 col-form-label ">Harga Satuan FOB</label>
            <div class="col-sm-4">
              @foreach ($HargaKemasan->where('id', $id) as $f)
              <input type="text" class="form-control" name="harga_satuan_fob" onkeypress="return hanyaAngka(event)" value="{{$f->harga_satuan_fob}}">
              @endforeach
          </div>
          </div>
          <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label ">Ukuran</label>
            <div class="col-sm-4">
              @foreach ($InformasiBarang->where('id', $id) as $b)
              <input type="text" class="form-control" placeholder="BOLEH DI KOSONGKAN" name="ukuran" onkeypress="return hanyaAngka(event)" value="{{$b->ukuran}}">
              @endforeach
          </div>   
          <div class="col-6"></div>      
          </div>
          <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label">Negara Asal Barang</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" value="INDONESIA" disabled>
            </div>  
            <div class="col-6"></div>       
          </div>
          <div class="form-group row my-4">
            <label for="input1" class="col-sm-2 col-form-label">Daerah Asal Barang</label>
            <div class="col-sm-4">
              <select id="input1" class="form-select" name="daerah_asal_barang">
                @foreach ($InformasiAsalBarang->where('id', $id) as $a)
                <option value="{{$a->daerah_asal_barang}}">{{$a->daerah_asal_barang}}</option>
                @endforeach
                @foreach ($DaerahAsalBarang as $E)
                <option value="{{ $E->nama }}">{{ $E->nama }}</option>
                @endforeach
              </select>
            </div>         
            <div class="col-6"></div>
          </div>
          <input type="submit" class="inv" id="submit">
          
          </form>
          
          <div class="row centerweb">

            <table class="tabless col-5">
              <thead>
                <tr>
                  <th class="th1a">
                    <div class="position-relative">Dokumen Fasilitas / Lartas
                      <button type="button"
                        class="btn btn-primary px-4  position-absolute top-50 end-0 translate-middle-y "
                        data-bs-toggle="modal" data-bs-target="#Modal">Tambah</button>
                    </div>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th class="table-primary asta centered" scope="col">Seri</th>
                            <th class="table-primary asta  centered" scope="col">Jenis</th>
                            <th class="table-primary asta centered" scope="col">Nomor</th>
                            <th class="table-primary asta centered" scope="col">Tanggal</th>
                            <th class="table-primary asta centered" scope="col">Fasilitas</th>
                            <th class="table-primary asta centered" scope="col">Izin</th>
                            <th class="table-primary asta centered" scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @if ($Lartas->isEmpty())
                            <tr>
                                <td colspan="7" class="text-center">
                                    <img src="{{ asset("images/no.png")}}" alt="Empty Table Image">
                                    <p>Tidak ada data yang tersedia</p>
                                </td>
                            </tr>
                        @else
                            @foreach($Lartas as $L)
                   <td class="centered">{{ $L->seri }}</td>
                   <td class="centered">{{ $L->jenis }}</td>
                   <td class="centered">{{ $L->nomor }}</td>
                   <td class="centered">{{ $L->tanggal }}</td>
                   <td class="centered">{{ $L->fasilitas }}</td>
                   <td class="centered">{{ $L->izin }}</td>
                   <td class="centered"><div onclick="HapusDokumen()" type="button"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                  <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                 </svg></div></td>
                   {{-- TIDAK TERLIHAT --}}
                    <td class="inv" >
                      <form action="{{ route('hapuslartas', $L->seri) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" id="pencet1">
                        </button>
                    </form>
                  </td>
                  {{-- ------------------- --}}
                  </tr>
                  @endforeach
                  @endif
                        </tbody>
                      </table>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

          <table class="tabless col-5">
            <thead>
              <tr>
                <th class="th1a">
                  <div class="position-relative">Entitas Barang
                    <button type="button" class="btn btn-primary px-4  position-absolute top-50 end-0 translate-middle-y "
                      data-bs-toggle="modal" data-bs-target="#base">Tambah</button>
                  </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th class="table-primary asta centered" scope="col">Seri</th>
                          <th class="table-primary asta centered" scope="col">Nomor Identitas</th>
                          <th class="table-primary asta centered" scope="col">Nama</th>
                          <th class="table-primary asta centered" scope="col">Alamat</th>
                          <th class="table-primary asta centered" scope="col">Entitas</th>
                          <th class="table-primary asta centered" scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                    <tr>
                      @if ($EntitasBarang->isEmpty())
                      <tr>
                          <td colspan="7" class="text-center">
                              <img src="{{ asset("images/no.png")}}" alt="Empty Table Image">
                              <p>Tidak ada data yang tersedia</p>
                          </td>
                      </tr>
                  @else
                      @foreach($EntitasBarang as $EB)
                    <td class="centered">{{ $EB->seri}}</td>
                    <td class="centered">{{ $EB->nomor_identitas}}</td>
                    <td class="centered">{{ $EB->nama}}</td>
                    <td class="centered">{{ $EB->alamat}}</td>
                    <td class="centered">{{ $EB->entitas}}</td>
                    <td class="centered"><div onclick="HapusDokumen2()" type="button"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                   </svg></div></td>
                    {{-- TIDAK TERLIHAT --}}
                    <td class="inv" >
                      <form action="{{ route('hapusentitas', $EB->seri) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" id="pencet2">
                        </button>
                    </form>
                  </td>
                  {{-- ----------------- --}}
                  </tr>
                  @endforeach
                  @endif
                      </tbody>
                    </table>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
  
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
                    <div type="button" class="btn btn-outline-secondary drow d-none d-sl-block" onclick="refreshPage()"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="hoh1 bi bi-arrow-clockwise" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                      <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
                    </svg><p class="dalamputih">Muat Ulang</p></div>
                    <button type="submit" value="submit" onclick="pertanyaan()" class="btn btn-success drow2"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="hoh1 bi bi-file-earmark-plus" viewBox="0 0 16 16">
                      <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
                      <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                    </svg><p class="dalambiru">Update</p></button>
                  </div>
                </div>
                  <hr>
                  <div class="offside2">
                    @include('layout.header4')
                  </div>
                  <hr class="container001 container-fluid">
                  <div class="kotakw">
                    <form class="mt-4" id="formulir5" method="post" action="{{ route('tambahbarang2')}}">
                      @csrf
                      <input type="text" name="id" class="inv" value="{{$id}}">
                    <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label">HS</label>
                      <div class="col-sm-4">
                        <select class="form-select" name="HS">
                          @foreach ($Barang->where('id_dokumen', $id) as $he)
                          <option value="{{$he->HS}}">{{$he->HS}}</option>
                          @endforeach
                       @foreach ($HS as $A)
                       <option value="{{ $A->nama }}">{{ $A->nama }}</option>
                       @endforeach
                        </select>
                      </div>
                      <label for="input1" class="col-sm-2 col-form-label ">Satuan</label>
                      <div class="col-sm-2">
                        @foreach ($Barang->where('id_dokumen', $id) as $he)
                        <input type="text" class="form-control" name="satuan" onkeypress="return hanyaAngka(event)" value="{{$he->satuan}}">
                        @endforeach
                      </div>
                      <div class="col-sm-2">
                        <select id="input1" class="form-select" name="kode_satuan">
                          @foreach ($Barang->where('id_dokumen', $id) as $he)
                          <option value="$he->kode_satuan">{{$he->kode_satuan}}</option>
                          @endforeach
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
                          @foreach ($Barang->where('id_dokumen', $id) as $he)
                          <option value="{{$he->lartas}}">{{$he->lartas}}</option>
                          @endforeach
                          <option value="1">LARTAS</option>
                          <option value="2">BUKAN LARTAS </option>
                        </select>
                      </div>
                      <label for="input1" class="col-sm-2 col-form-label ">Kemasan</label>
                      <div class="col-sm-2">
                        @foreach ($Barang->where('id_dokumen', $id) as $he)
                        <input type="text" class="form-control" id="input1" name="kemasan" onkeypress="return hanyaAngka(event)" value="{{$he->kemasan}}">
                        @endforeach
                      </div>
                      <div class="col-sm-2">
                        <select id="input1" class="form-select" name="kode_kemasan">
                          @foreach ($Barang->where('id_dokumen', $id) as $he)
                          <option value="{{$he->kode_kemasan}}">{{$he->kode_kemasan}}</option>
                          @endforeach
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
                          @foreach ($Barang->where('id_dokumen', $id) as $he)
                          <option value="{{$he->kode}}">{{$he->kode}}</option>
                          @endforeach
                          @foreach ($DataKode as $DK)
                          <option value="{{ $DK->nama }}">{{ $DK->nama }}</option>
                          @endforeach
                        </select>
                    </div>  
                    <label for="input1" class="col-sm-2 col-form-label ">Harga FOB</label>
                    <div class="col-sm-4">
                      @foreach ($Barang->where('id_dokumen', $id) as $he)
                      <input type="text" class="form-control" name="harga_fob" onkeypress="return hanyaAngka(event)" value="{{$he->harga_fob}}">
                      @endforeach
                  </div>     
                    </div>
                    <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label ">Uraian</label>
                      <div class="col-sm-4">
                        @foreach ($Barang->where('id_dokumen', $id) as $he)
                        <textarea class="form-control" name="uraian">{{$he->uraian}}</textarea>
                        @endforeach   
                    </div>  
                    <label for="input1" class="col-sm-2 col-form-label ">Volume</label>
                    <div class="col-sm-4">
                      @foreach ($Barang->where('id_dokumen', $id) as $he)
                      <input type="text" class="form-control" name="volume" onkeypress="return hanyaAngka(event)" value="{{$he->volume}}">
                      @endforeach
                  </div>    
                    </div>
                     <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label ">Mark</label>
                      <div class="col-sm-4">
                        @foreach ($Barang->where('id_dokumen', $id) as $he)
                        <input type="text" class="form-control" placeholder="BOLEH DI KOSONGKAN" name="mark" value="{{$he->mark}}"></input>
                        @endforeach
                    </div>  
                    <label for="input1" class="col-sm-2 col-form-label ">Berat Bersih (KG)</label>
                    <div class="col-sm-4">
                      @foreach ($Barang->where('id_dokumen', $id) as $he)
                      <input type="text" class="form-control" name="berat_bersih" onkeypress="return hanyaAngka(event)" value="{{$he->berat_bersih}}">
                      @endforeach
                  </div>       
                    </div>
                     <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label ">Tipe</label>
                      <div class="col-sm-4">
                        @foreach ($Barang->where('id_dokumen', $id) as $he)
                        <input type="text" class="form-control"  placeholder="BOLEH DI KOSONGKAN" name="tipe" value="{{$he->tipe}}"></input>
                        @endforeach
                    </div>  
                    <label for="input1" class="col-sm-2 col-form-label ">Harga Satuan FOB</label>
                      <div class="col-sm-4">
                        @foreach ($Barang->where('id_dokumen', $id) as $he)
                        <input type="text" class="form-control" name="harga_satuan_fob" onkeypress="return hanyaAngka(event)" value="{{$he->harga_satuan_fob}}">
                        @endforeach
                    </div>
                    </div>
                    <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label ">Ukuran</label>
                      <div class="col-sm-4">
                        @foreach ($Barang->where('id_dokumen', $id) as $he)
                        <input type="text" class="form-control" placeholder="BOLEH DI KOSONGKAN" name="ukuran" onkeypress="return hanyaAngka(event)" value="{{$he->ukuran}}">
                        @endforeach
                    </div>   
                    <div class="col-6"></div>      
                    </div>
                    <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label">Negara Asal Barang</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" value="INDONESIA" disabled>
                      </div>  
                      <div class="col-6"></div>       
                    </div>
                    <div class="form-group row my-4">
                      <label for="input1" class="col-sm-2 col-form-label">Daerah Asal Barang</label>
                      <div class="col-sm-4">
                        <select id="input1" class="form-select" name="daerah_asal_barang">
                          @foreach ($Barang->where('id_dokumen', $id) as $he)
                          <option value="{{$he->daerah_asal_barang}}">{{$he->daerah_asal_barang}}</option>
                          @endforeach
                          @foreach ($DaerahAsalBarang as $E)
                          <option value="{{ $E->nama }}">{{ $E->nama }}</option>
                          @endforeach
                        </select>
                      </div>         
                      <div class="col-6"></div>
                    </div>
                    <input type="submit" class="inv" id="submit">
                    </form>
                    <div class="row centerweb">

                      <table class="tabless col-6">
                        <thead>
                          <tr>
                            <th class="th1a">
                              <div class="position-relative">Dokumen Fasilitas / Lartas
                                <button type="button"
                                  class="btn btn-primary px-4  position-absolute top-50 end-0 translate-middle-y "
                                  data-bs-toggle="modal" data-bs-target="#Modal">Tambah</button>
                              </div>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="table-responsive">
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th class="table-primary asta centered" scope="col">Seri</th>
                                      <th class="table-primary asta  centered" scope="col">Jenis</th>
                                      <th class="table-primary asta centered" scope="col">Nomor</th>
                                      <th class="table-primary asta centered" scope="col">Tanggal</th>
                                      <th class="table-primary asta centered" scope="col">Fasilitas</th>
                                      <th class="table-primary asta centered" scope="col">Izin</th>
                                      <th class="table-primary asta centered" scope="col"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      @foreach($Lartas as $L)
                             <td class="centered">{{ $L->seri }}</td>
                             <td class="centered">{{ $L->jenis }}</td>
                             <td class="centered">{{ $L->nomor }}</td>
                             <td class="centered">{{ $L->tanggal }}</td>
                             <td class="centered">{{ $L->fasilitas }}</td>
                             <td class="centered">{{ $L->izin }}</td>
                              <td class="oe centered" >
                                <form action="{{ route('hapuslartas', $L->seri) }}" method="POST">
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
                            </td>
                          </tr>
                        </tbody>
                      </table>
          
                    <table class="tabless col-6">
                      <thead>
                        <tr>
                          <th class="th1a">
                            <div class="position-relative">Entitas Barang
                              <button type="button" class="btn btn-primary px-4  position-absolute top-50 end-0 translate-middle-y "
                                data-bs-toggle="modal" data-bs-target="#base">Tambah</button>
                            </div>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="table-responsive">
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th class="table-primary asta centered" scope="col">Seri</th>
                                    <th class="table-primary asta centered" scope="col">Nomor Identitas</th>
                                    <th class="table-primary asta centered" scope="col">Nama</th>
                                    <th class="table-primary asta centered" scope="col">Alamat</th>
                                    <th class="table-primary asta centered" scope="col">Entitas</th>
                                    <th class="table-primary asta centered" scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                      @foreach($EntitasBarang as $EB)
                              <tr>
                              <td class="centered">{{ $EB->seri}}</td>
                              <td class="centered">{{ $EB->nomor_identitas}}</td>
                              <td class="centered">{{ $EB->nama}}</td>
                              <td class="centered">{{ $EB->alamat}}</td>
                              <td class="centered">{{ $EB->entitas}}</td>
                              <td class="oe centered" >
                                <form action="{{ route('hapusentitas', $EB->seri) }}" method="POST">
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
                          </td>
                        </tr>
                      </tbody>
                    </table>
            
                </div>
                </div>
                 <div class="tambah2">
                  </div>
                
              </div>


              @include('layout.popupbarang')
              @include('layout.sidebar')
              @include('layout.footer')
              <script src="{{ asset("js/script.js")}}"></script>
</body>