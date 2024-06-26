<?php
$id = session('id_dokumen');
$Header = \App\Models\header::all();
$kantor_muat_asal = \App\Models\KantorMuatAsal::all();
$pelabuhan = \App\Models\PelabuhanMuatEkspor::all();
$JenisEkspor = \App\Models\JenisEkspor::all();
$KategoriEkspor = \App\Models\KategoriEkspor::all();
$JenisDagang = \App\Models\JenisDagang::all();
$CaraBayar = \App\Models\CaraBayar::all();
$Komoditi = \App\Models\Komoditi::all();
$Curah = \App\Models\Curah::all();
$InformasiEkspors = \App\Models\InformasiEkspors::all();
$headerid = $Header->where('id_dokumen', $id)->first();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
  <title>Data Header Update</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  <link rel="icon" href="{{ asset('images/logo2.png')}}" type="image/png">
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
      <div type="button" class="btn btn-outline-secondary drow" onclick="refreshPage()"><svg xmlns="http://www.w3.org/2000/svg" width="23"
          height="23" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
          <path
            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
        </svg>
        <p class="dalamputih">Muat Ulang</p>
      </div>
      <button type="submit" value="submit" class="btn btn-success drow" onclick="pertanyaan()"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
          fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
          <path
            d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
          <path
            d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
        </svg>
        <p class="dalambiru">Update</p>
      </button>
    </div>
  </div>
  <hr>
  <div class="offside">
   @include('layout.header3')
  </div>
  <hr class="container00 container-fluid">
  <div class="kotak">
    <div class="card-form">
      <div class="card-body">
        <form id="formulir"  method="post" action="{{route("headerupdatedata")}}"> 
          @CSRF
          
        <div class="custom-form-group">
          <label>Nomor Pengajuan</label>
          @foreach ($Header->where('id_dokumen', $id) as $he)
          <input type="text" value="{{$he->nomor_pengajuan}}" class="text" readonly>
          <input type="hidden" name="id" value="{{ $he->id }}">
          @endforeach
        </div>


        <div class="form-group">
          <label for="kantor_asal">Kantor Pabean Muat Asal</label>
          <select name="kantor_asal" class="form-control @error('kantor_asal') is-invalid @enderror">
              @foreach ($Header->where('id_dokumen', $id) as $he)
                  <option value="{{ $he->kantor_muat_asal }}" selected>{{ $he->kantor_muat_asal }}</option>
              @endforeach
              @foreach ($kantor_muat_asal as $kantor)
                  <option value="{{ $kantor->nama }}" {{ (old('kantor_asal') == $kantor->nama) ? 'selected' : '' }}>
                      {{ $kantor->nama }}
                  </option>
              @endforeach
          </select>
          @error('kantor_asal')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
      </div>
      

      <div class="form-group">
        <label for="kantor_asal">Pelabuhan Muat Ekspor</label>
        <select name="pelabuhan_ekspor" class="form-control @error('pelabuhan_ekspor') is-invalid @enderror">
            @foreach ($Header->where('id_dokumen', $id) as $he)
                <option value="{{ $he->pelabuhan_muat_ekspor }}" selected>{{ $he->pelabuhan_muat_ekspor }}</option>
            @endforeach
            @foreach ($pelabuhan as $kantor)
                <option value="{{ $kantor->nama }}" {{ old('pelabuhan_ekspor') == $kantor->nama ? 'selected' : '' }}>
                    {{ $kantor->nama }}
                </option>
            @endforeach
        </select>
        @error('pelabuhan_ekspor')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
      <label for="kantor_pabean_muat_ekspor">Kantor Pabean Muat Ekspor</label>
      <select name="kantor_ekspor" class="form-control @error('kantor_ekspor') is-invalid @enderror">
          @foreach ($Header->where('id_dokumen', $id) as $he)
              <option value="{{ $he->kantor_muat_ekspor }}" selected>{{ $he->kantor_muat_ekspor }}</option>
          @endforeach
          @foreach ($pelabuhan as $kantor)
              <option value="{{ $kantor->nama }}" {{ old('kantor_ekspor') == $kantor->nama ? 'selected' : '' }}>
                  {{ $kantor->nama }}
              </option>
          @endforeach
      </select>
      @error('kantor_ekspor')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
  </div>

  <div class="form-group">
    <label for="jenis_ekspor">Jenis Ekspor</label>
    <select name="jenis_ekspor" class="form-control @error('jenis_ekspor') is-invalid @enderror">
        @foreach ($InformasiEkspors->where('id_dokumen', $id) as $he)
            <option value="{{ $he->jenis_ekspor }}" selected>{{ $he->jenis_ekspor }}</option>
        @endforeach
        @foreach ($JenisEkspor as $kantor)
            <option value="{{ $kantor->nama }}" {{ old('jenis_ekspor') == $kantor->nama ? 'selected' : '' }}>
                {{ $kantor->nama }}
            </option>
        @endforeach
    </select>
    @error('jenis_ekspor')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
  <label for="kategori_ekspor">Kategori Ekspor</label>
  <select name="kategori_ekspor" class="form-control @error('kategori_ekspor') is-invalid @enderror">
      @foreach ($InformasiEkspors->where('id_dokumen', $id) as $he)
          <option value="{{ $he->kategori_ekspor }}" selected>{{ $he->kategori_ekspor }}</option>
      @endforeach
      @foreach ($KategoriEkspor as $kantor)
          <option value="{{ $kantor->nama }}" {{ old('kategori_ekspor') == $kantor->nama ? 'selected' : '' }}>
              {{ $kantor->nama }}
          </option>
      @endforeach
  </select>
  @error('kategori_ekspor')
      <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<div class="form-group">
  <label for="cara_dagang">Cara Dagang</label>
  <select name="cara_dagang" class="form-control @error('cara_dagang') is-invalid @enderror">
      @foreach ($InformasiEkspors->where('id_dokumen', $id) as $he)
          <option value="{{ $he->cara_dagang }}" selected>{{ $he->cara_dagang }}</option>
      @endforeach
      @foreach ($JenisDagang as $kantor)
          <option value="{{ $kantor->nama }}" {{ old('cara_dagang') == $kantor->nama ? 'selected' : '' }}>
              {{ $kantor->nama }}
          </option>
      @endforeach
  </select>
  @error('cara_dagang')
      <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<div class="form-group">
  <label for="cara_bayar">Cara Bayar</label>
  <select name="cara_bayar" class="form-control @error('cara_bayar') is-invalid @enderror">
      @foreach ($Header->where('id_dokumen', $id) as $he)
          <option value="{{ $he->cara_bayar }}" selected>{{ $he->cara_bayar }}</option>
      @endforeach
      @foreach ($JenisDagang as $kantor)
          <option value="{{ $kantor->nama }}" {{ old('cara_bayar') == $kantor->nama ? 'selected' : '' }}>
              {{ $kantor->nama }}
          </option>
      @endforeach
  </select>
  @error('cara_bayar')
      <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>
    
<div class="form-group">
  <label for="komoditi">Komoditi</label>
  <select name="komoditi" class="form-control @error('komoditi') is-invalid @enderror">
      @foreach ($Header->where('id_dokumen', $id) as $he)
          <option value="{{ $he->komoditi }}" selected>{{ $he->komoditi }}</option>
      @endforeach
      @foreach ($Komoditi as $kantor)
          <option value="{{ $kantor->nama }}" {{ old('komoditi') == $kantor->nama ? 'selected' : '' }}>
              {{ $kantor->nama }}
          </option>
      @endforeach
  </select>
  @error('komoditi')
      <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>

<div class="form-group">
  <label for="curah">Curah</label>
  <select name="curah" class="form-control @error('curah') is-invalid @enderror">
      @foreach ($Header->where('id_dokumen', $id) as $he)
          <option value="{{ $he->curah }}" selected>{{ $he->curah }}</option>
      @endforeach
      @foreach ($Curah as $kantor)
          <option value="{{ $kantor->nama }}" {{ old('curah') == $kantor->nama ? 'selected' : '' }}>
              {{ $kantor->nama }}
          </option>
      @endforeach
  </select>
  @error('curah')
      <div class="invalid-feedback">{{ $message }}</div>
  @enderror
</div>
      
        <button class="inv" type="submit" value="submit" id="submit">
      </form>
      </div>
    </div>

    <div class="card-button">
    </div>

  </div>
  <div class="tambah"></div>
</div>

</div>
<!-- INI ADALAH BADAN RESPONSIVE -->
<div class="d-block d-lg-none thisbody2 animate__animated animate__fadeIn">
  <div class="row">
    <h5 class="ha5 col-8 ">BC 3.0 PEMBERITAHUAN EKSPOR BARANG</h5>
    <div class="col-4 drow1">
      <div type="button" class="btn btn-outline-secondary drow d-none d-sl-block" onclick="refreshPage()"><svg
          xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
          class="hoh1 bi bi-arrow-clockwise" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
          <path
            d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
        </svg>
        <p class="dalamputih">Muat Ulang</p>
      </div>
      <button type="submit" class="btn btn-success drow2" onclick="submitForm()"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
          fill="currentColor" class="hoh1 bi bi-file-earmark-plus" viewBox="0 0 16 16">
          <path
            d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5" />
          <path
            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
        </svg>
        <p class="dalambiru">Update</p>
      </button>
    </div>
  </div>
  <hr>
  <div class="offside2">
    @include('layout.header4')
  </div>
  <hr class="container001 container-fluid">
  <div class="kotak2">
    <div class="card-form">
      <div class="card-body">
        <form id="formulir"  method="post" action="{{route("headerupdatedata")}}"> 
          @CSRF
          
        <div class="custom-form-group">
          <label>Nomor Pengajuan</label>
          @foreach ($Header->where('id_dokumen', $id) as $he)
          <input type="text" value="{{$he->nomor_pengajuan}}" class="text" readonly>
          <input type="hidden" name="id" value="{{ $he->id }}">
          @endforeach
        </div>


        <div class="form-group">
          <label for="kantor_pabean_muat_asal">Kantor Pabean Muat Asal</label>
          <select id="kantor_pabean_muat_asal" name="kantor_asal" required>
            @foreach ($Header->where('id_dokumen', $id) as $he)
            <option value="{{$he->kantor_muat_asal}}">{{$he->kantor_muat_asal}}</option>
            @endforeach
            
            <?php
            foreach ($kantor_muat_asal as $kantor) {
                ?>
                <option value="<?php echo $kantor->nama; ?>"><?php echo $kantor->nama; ?></option>
                <?php
            }?>
        </select>
        </div>


        <div class="form-group">
          <label for="pelabuhan_muat_ekspor">Pelabuhan Muat Ekspor</label>
          <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor" required>
            @foreach ($Header->where('id_dokumen', $id) as $he)
            <option value="{{$he->pelabuhan_muat_ekspor}}">{{$he->pelabuhan_muat_ekspor}}</option>
            @endforeach
            <?php
            foreach ($pelabuhan as $pel) {
                ?>
                <option value="<?php echo $pel->nama; ?>"><?php echo $pel->nama; ?></option>
                <?php
            }?>
          </select>
        </div>


        <div class="form-group">
          <label for="kantor_pabean_muat_ekspor">Kantor Pabean Muat Ekspor</label>
          <select type="text" id="kantor_pabean_muat_ekspor" name="kantor_ekspor" required>
            @foreach ($Header->where('id_dokumen', $id) as $he)
            <option value="{{$he->kantor_muat_ekspor}}">{{$he->kantor_muat_ekspor}}</option>
            @endforeach
            <?php
            foreach ($pelabuhan as $pel) {
                ?>
                <option value="<?php echo $pel->nama; ?>"><?php echo $pel->nama; ?></option>
                <?php
            }?>
          </select>
        </div>

        
        <div class="form-group">
          <label for="jenis_ekspor">Jenis Ekspor</label>
          <select id="jenis_ekspor" name="jenis_ekspor" required>
            @foreach ($InformasiEkspors->where('id', $id) as $ho)
            <option value="{{$ho->jenis_ekspor}}">{{$ho->jenis_ekspor}}</option>
            @endforeach
            <?php
            foreach ($JenisEkspor as $jen) {
                ?>
                <option value="<?php echo $jen->nama; ?>"><?php echo $jen->nama; ?></option>
                <?php
            }?>
          </select>
        </div>


        <div class="form-group">
          <label for="kategori_ekspor">Kategori Ekspor</label>
          <select id="kategori_ekspor" name="kategori_ekspor" required>
            @foreach ($InformasiEkspors->where('id', $id) as $ho)
            <option value="{{$ho->kategori_ekspor}}">{{$ho->kategori_ekspor}}</option>
            @endforeach
            <?php
            foreach ($KategoriEkspor as $kat) {
                ?>
                <option value="<?php echo $kat->nama; ?>"><?php echo $kat->nama; ?></option>
                <?php
            }?>
    
          </select>
        </div>


        <div class="form-group">
          <label for="cara_dagang" >Cara Dagang</label>
          <select id="cara_dagang" name="cara_dagang" required>
            @foreach ($InformasiEkspors->where('id', $id) as $ho)
            <option value="{{$ho->cara_dagang}}">{{$ho->cara_dagang}}</option>
            @endforeach
            <?php
            foreach ($JenisDagang as $jd) {
                ?>
                <option value="<?php echo $jd->nama; ?>"><?php echo $jd->nama; ?></option>
                <?php
            }?>
          </select>
        </div>


        <div class="form-group">
          <label for="cara_bayar">Cara Bayar</label>
          <select id="cara_bayar" name="cara_bayar" required>
            @foreach ($Header->where('id_dokumen', $id) as $he)
            <option value="{{$he->cara_bayar}}">{{$he->cara_bayar}}</option>
            @endforeach
            <?php
            foreach ($CaraBayar as $cb) {
                ?>
                <option value="<?php echo $cb->nama; ?>"><?php echo $cb->nama; ?></option>
                <?php
            }?>
          </select>
        </div>


        <div class="form-group">
          <label for="komoditi">Komoditi</label>
          <select id="komoditi" name="komoditi" required>
            @foreach ($Header->where('id_dokumen', $id) as $he)
            <option value="{{$he->komoditi}}">{{$he->komoditi}}</option>
            @endforeach
            <?php
            foreach ($Komoditi as $ko) {
                ?>
                <option value="<?php echo $ko->nama; ?>"><?php echo $ko->nama; ?></option>
                <?php
            }?>
          </select>
        </div>


        <div class="form-group">
          <label for="curah">Curah</label>
          <select id="curah" name="curah" required>
            @foreach ($Header->where('id_dokumen', $id) as $he)
            <option value="{{$he->curah}}">{{$he->curah}}</option>
            @endforeach
            <?php
            foreach ($Curah as $cu) {
                ?>
                <option value="<?php echo $cu->nama; ?>"><?php echo $cu->nama; ?></option>
                <?php
            }?>
          </select>
        </div>
        <button class="inv" type="submit" value="submit" id="submit">
      </form>
      </div>
    </div>

    <div class="card-button">
    </div>

  </div>
  <div class="tambah2"></div>
</div>

</div>

@include('layout.sidebar')
@include('layout.footer')

<script src="{{ asset('js/script.js') }}"></script>
</body>