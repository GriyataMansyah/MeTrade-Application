<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
  <title>Data Header</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  <link rel="icon" href="{{ asset('images/logo2.png')}}" type="image/png">
  
</head>
@include('layout.headerweb')
@include('layout.popuplogout')

<!-- INI BADANNYA -->
<div class="d-none d-lg-block thisbody animate__animated animate__fadeIn">
  <div class="row">
    <h5 class="ha5 col-9">BC 3.0 PEMBERITAHUAN EKSPOR BARANG</h5>
    <div class="col-3 drow1">
      <div type="button" class="btn btn-outline-secondary drow"><svg xmlns="http://www.w3.org/2000/svg" width="23"
          height="23" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
          <path
            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
        </svg>
        <p class="dalamputih">Muat Ulang</p>
      </div>
      <button type="submit" value="submit" class="btn btn-primary drow" onclick="submitForm()"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
          fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
          <path
            d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
          <path
            d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
        </svg>
        <p class="dalambiru">Lanjutkan</p>
      </button>
    </div>
  </div>
  <hr>
  <div class="offside">
    <div class="container-fluid">
      <div class="row hay1">
        <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Header</a></div>
        <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Entitas</a></div>
        <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Dokumen</a></div>
        <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Angkut</a></div>
        <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Kemasan</a></div>
        <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Transaksi</a></div>
        <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Barang</a></div>
        <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Pungutan</a></div>
        <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Pernyataan</a></div>
      </div>
    </div>
  </div>
  <hr class="container00 container-fluid">
  <div class="kotak">
    <div class="card-form">
      <div class="card-body">
        <form id="formulir"  method="post"> 
          @csrf
        <div class="custom-form-group">
          <label>Nomor Pengajuan</label>
          <input type="text" id="b" class="text" disabled>
        </div>

        <span class="error-message"></span>


        <div class="form-group">
          <label for="kantor_pabean_muat_asal">Kantor Pabean Muat Asal</label>
          <select id="kantor_pabean_muat_asal" name="kantor_asal">
            <option value=""></option>
            <option value="TB000 KPPBC TMP A BATU AMPAR">TB000 KPPBC TMP A BATU AMPAR</option>
            <option value="2">TB001 KPPBC TMP B BATU AJI</option>
          </select>
        </div>
        <span id="kantor_pabean_muat_asal-error" class="error-message"></span>


        <div class="form-group">
          <label for="pelabuhan_muat_ekspor">Pelabuhan Muat Ekspor</label>
          <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
            <option value=""></option>
            <option value="IDDAS - BATU AMPAR">IDDAS - BATU AMPAR</option>
          </select>
        </div>
        <span id="pelabuhan_muat_ekspor-error" class="error-message"></span>


        <div class="form-group">
          <label for="kantor_pabean_muat_ekspor">Kantor Pabean Muat Ekspor</label>
          <select type="text" id="kantor_pabean_muat_ekspor" name="kantor_ekspor">
            <option value=""></option>
            <option value="IDDAS - BATU AMPAR">IDDAS - BATU AMPAR</option>
          </select>
        </div>
        <span class="error-message"></span>


        <div class="form-group">
          <label for="jenis_ekspor">Jenis Ekspor</label>
          <select id="jenis_ekspor" name="jenis_ekspor">
            <option value=""></option>
            <option value="1 - Ekspor Biasa">1 - Ekspor Biasa</option>
            <option value="2">2 - Ekspor Re-Import</option>
            <option value="3">3 - Ekspor Re-Ekspor</option>
          </select>
        </div>
        <span id="jenis_ekspor-error" class="error-message"></span>


        <div class="form-group">
          <label for="kategori_ekspor">Kategori Ekspor</label>
          <select id="kategori_ekspor" name="kategori_ekspor">
            <option value=""></option>
            <option value="10 - Biasa">10 - Biasa</option>
            <option value="21">21 - Yang Pada Saat Impor Mendapat Fasilitas Pembebasan BM (Niper Dgn Pembebasan)
            </option>
            <option value="22">22 - Yang Pada Saat Impor Mendapat Fasilitas Pengembalian BM (Niper Dgn Pengembalian)
            </option>
            <option value="23">23 - KITE dengan Pembebasan dan Pengembalian</option>
            <option value="31">31 - Khusus Barang Perwakilan Negara Asing</option>
            <option value="32">32 - Khusus Barang Badan Internasional</option>
            <option value="33">33 - Khusus Barang Kiriman (Pos atau Jasa Titipan)</option>
            <option value="34">34 - Khusus Barang Pindahan</option>
            <option value="35">35 - Khusus Barang Keperluan Ibadah Untuk Umum, Sosial, Pendidikan, Kebudayaan/Olahraga
              dan Bencana Alam</option>
          </select>
        </div>
        <span id="kategori_ekspor-error" class="error-message"></span>

        <div class="form-group">
          <label for="cara_dagang" >Cara Dagang</label>
          <select id="cara_dagang" name="cara_dagang">
            <option value=""></option>
            <option value="1 - Biasa">1 - Biasa</option>
            <option value="15">15 - Lainnya</option>
            <option value="2">2 - IMB – Imbal dagang</option>
          </select>
        </div>
        <span id="cara_dagang-error" class="error-message"></span>

        <div class="form-group">
          <label for="cara_bayar">Cara Bayar</label>
          <select id="cara_bayar" name="cara_bayar">
            <option value=""></option>
            <option value="1 - Biasa/Tunai">1 - Biasa/Tunai</option>
            <option value="2">2 - Berkala</option>
            <option value="3">3 - Dengan Jaminan</option>
            <option value="9">9 - Gabungan/Lainnya</option>
          </select>
        </div>
        <span id="cara_bayar-error" class="error-message"></span>

        <div class="form-group">
          <label for="komoditi">Komoditi</label>
          <select id="komoditi" name="komoditi">
            <option value=""></option>
            <option value="1 - Migas">1 - Migas</option>
            <option value="2">2 - Non Migas</option>
          </select>
        </div>
        <span id="komoditi-error" class="error-message"></span>

        <div class="form-group">
          <label for="curah">Curah</label>
          <select id="curah" name="curah">
            <option value=""></option>
            <option value="1 - Curah">1 - Curah</option>
            <option value="2">2 - Non Curah</option>
          </select>
        </div>
        <span id="curah-error" class="error-message"></span>
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
      <div type="button" class="btn btn-outline-secondary drow d-none d-sl-block"><svg
          xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
          class="hoh1 bi bi-arrow-clockwise" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
          <path
            d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
        </svg>
        <p class="dalamputih">Muat Ulang</p>
      </div>
      <button type="submit" class="btn btn-primary drow2" onclick="submitForm()"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
          fill="currentColor" class="hoh1 bi bi-file-earmark-plus" viewBox="0 0 16 16">
          <path
            d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5" />
          <path
            d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
        </svg>
        <p class="dalambiru">Lanjutkan</p>
      </button>
    </div>
  </div>
  <hr>
  <div class="offside2">
    <div class="container-fluid">
      <div class="row hayhay">
        <div class="col isi2"><a href="#">Header</a></div>
        <div class="col isi2"><a href="#">Entitas</a></div>
        <div class="col isi2"><a href="#">Dokumen</a></div>
        <div class="col isi2"><a href="#">Angkut</a></div>
        <div class="col isi2"><a href="#">Kemasan</a></div>
        <div class="col isi2"><a href="#">Transaksi</a></div>
        <div class="col isi2"><a href="#">Barang</a></div>
        <div class="col isi2"><a href="#">Pungutan</a></div>
        <div class="col isi2"><a href="#">Pernyataan</a></div>
      </div>
    </div>
  </div>
  <hr class="container001 container-fluid">
  <div class="kotak2">
    <div class="card-form">
      <div class="card-body">
        <form id="formulir" action="{{ url('/ent')}}">
        <div class="custom-form-group">
          <label>Nomor Pengajuan</label>
          <input type="text" id="b" class="text" disabled>
        </div>

        <span class="error-message"></span>

        <div class="form-group">
          <label for="kantor_pabean_muat_asal">Kantor Pabean Muat Asal</label>
          <select id="kantor_pabean_muat_asal">
            <option value=""></option>
            <option value="1">TB000 KPPBC TMP A BATU AMPAR</option>
            <option value="2">TB001 KPPBC TMP B BATU AJI</option>
          </select>
        </div>
        <span id="kantor_pabean_muat_asal-error" class="error-message"></span>

        <div class="form-group">
          <label for="pelabuhan_muat_ekspor">Pelabuhan Muat Ekspor</label>
          <select id="pelabuhan_muat_ekspor">
            <option value=""></option>
            <option value="1">IDDAS - BATU AMPAR</option>
          </select>
        </div>
        <span id="pelabuhan_muat_ekspor-error" class="error-message"></span>

        <div class="form-group">
          <label for="kantor_pabean_muat_ekspor">Kantor Pabean Muat Ekspor</label>
          <select type="text" id="kantor_pabean_muat_ekspor">
            <option value=""></option>
            <option value="1">IDDAS - BATU AMPAR</option>
          </select>
        </div>
        <span class="error-message"></span>

        <div class="form-group">
          <label for="jenis_ekspor">Jenis Ekspor</label>
          <select id="jenis_ekspor">
            <option value=""></option>
            <option value="1">1 - Ekspor Biasa</option>
            <option value="2">2 - Ekspor Re-Import</option>
            <option value="3">3 - Ekspor Re-Ekspor</option>
          </select>
        </div>
        <span id="jenis_ekspor-error" class="error-message"></span>

        <div class="form-group">
          <label for="kategori_ekspor">Kategori Ekspor</label>
          <select id="kategori_ekspor">
            <option value=""></option>
            <option value="10">10 - Biasa</option>
            <option value="21">21 - Fasilitas Pembebasan BM (Niper Dgn Pembebasan)
            </option>
            <option value="22">22 - Fasilitas Pengembalian BM (Niper Dgn Pengembalian)
            </option>
            <option value="23">23 - KITE dengan Pembebasan dan Pengembalian</option>
            <option value="31">31 - Khusus Barang Perwakilan Negara Asing</option>
            <option value="32">32 - Khusus Barang Badan Internasional</option>
            <option value="33">33 - Khusus Barang Kiriman</option>
            <option value="34">34 - Khusus Barang Pindahan</option>
            <option value="35">35 - Khusus Barang Keperluan Untuk Umum</option>
          </select>
        </div>
        <span id="kategori_ekspor-error" class="error-message"></span>

        <div class="form-group">
          <label for="cara_dagang">Cara Dagang</label>
          <select id="cara_dagang">
            <option value=""></option>
            <option value="1">1 - Biasa</option>
            <option value="15">15 - Lainnya</option>
            <option value="2">2 - IMB – Imbal dagang</option>
          </select>
        </div>
        <span id="cara_dagang-error" class="error-message"></span>

        <div class="form-group">
          <label for="cara_bayar">Cara Bayar</label>
          <select id="cara_bayar">
            <option value=""></option>
            <option value="1">1 - Biasa/Tunai</option>
            <option value="2">2 - Berkala</option>
            <option value="3">3 - Dengan Jaminan</option>
            <option value="9">9 - Gabungan/Lainnya</option>
          </select>
        </div>
        <span id="cara_bayar-error" class="error-message"></span>

        <div class="form-group">
          <label for="komoditi">Komoditi</label>
          <select id="komoditi">
            <option value=""></option>
            <option value="1">1 - Migas</option>
            <option value="2">2 - Non Migas</option>
          </select>
        </div>
        <span id="komoditi-error" class="error-message"></span>

        <div class="form-group">
          <label for="curah">Curah</label>
          <select id="curah">
            <option value=""></option>
            <option value="1">1 - Curah</option>
            <option value="2">2 - Non Curah</option>
          </select>
        </div>
        <span id="curah-error" class="error-message"></span>
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