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
    @include('layout.headerweb')
    @include('layout.popuplogout')
    
       <!-- INI BADANNYA -->
    <div class="d-none d-lg-block thisbody animate__animated animate__fadeIn">
      <h5 class="ha5">DATA MASTER</h5>
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

      <div class="kotak">
        <div class="card-form">
          <div class="card-body">

            <div class="form-group">
              <label>Kantor Pabean Muat Asal</label>
              <input type="text" placeholder="Tambahkan Data">
              <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                <option value="">Hapus Data Disini</option>
              </select>
              <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
            </div>
    
            <div class="form-group">
              <label for="pelabuhan_muat_ekspor">Pelabuhan Muat Ekspor</label>
              <input type="text" placeholder="Tambahkan Data">
              <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                <option value="">Hapus Data Disini</option>
              </select>
              <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
            </div>

            <div class="form-group">
              <label for="kantor_pabean_muat_ekspor">Kantor Pabean Muat Ekspor</label>
              <input type="text" placeholder="Tambahkan Data">
              <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                <option value="">Hapus Data Disini</option>
              </select>
              <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
            </div>
    
            <div class="form-group">
              <label for="jenis_ekspor">Jenis Ekspor</label>
              <input type="text" placeholder="Tambahkan Data">
              <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                <option value="">Hapus Data Disini</option>
              </select>
              <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
            </div>    
    
            <div class="form-group">
              <label for="kategori_ekspor">Kategori Ekspor</label>
              <input type="text" placeholder="Tambahkan Data">
              <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                <option value="">Hapus Data Disini</option>
              </select>
              <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
            </div>

            <div class="form-group">
              <label for="cara_dagang" >Cara Dagang</label>
              <input type="text" placeholder="Tambahkan Data">
              <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                <option value="">Hapus Data Disini</option>
              </select>
              <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
            </div>
    
            <div class="form-group">
              <label for="cara_bayar">Cara Bayar</label>
              <input type="text" placeholder="Tambahkan Data">
              <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                <option value="">Hapus Data Disini</option>
              </select>
              <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
            </div>
    
            <div class="form-group">
              <label for="komoditi">Komoditi</label>
              <input type="text" placeholder="Tambahkan Data">
              <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                <option value="">Hapus Data Disini</option>
              </select>
              <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
            </div>
    
            <div class="form-group">
              <label for="curah">Curah</label>
              <input type="text" placeholder="Tambahkan Data">
              <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                <option value="">Hapus Data Disini</option>
              </select>
              <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
            </div>

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
                <h5 class="ha5">DATA MASTER</h5>
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

                <div class="kotak">
                  <div class="card-form">
                    <div class="card-body">
          
                      <div class="form-group">
                        <label>Kantor Pabean Muat Asal</label>
                        <input type="text" placeholder="Tambahkan Data">
                        <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                          <option value="">Hapus Data Disini</option>
                        </select>
                        <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
                      </div>
              
                      <div class="form-group">
                        <label for="pelabuhan_muat_ekspor">Pelabuhan Muat Ekspor</label>
                        <input type="text" placeholder="Tambahkan Data">
                        <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                          <option value="">Hapus Data Disini</option>
                        </select>
                        <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
                      </div>
          
                      <div class="form-group">
                        <label for="kantor_pabean_muat_ekspor">Kantor Pabean Muat Ekspor</label>
                        <input type="text" placeholder="Tambahkan Data">
                        <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                          <option value="">Hapus Data Disini</option>
                        </select>
                        <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
                      </div>
              
                      <div class="form-group">
                        <label for="jenis_ekspor">Jenis Ekspor</label>
                        <input type="text" placeholder="Tambahkan Data">
                        <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                          <option value="">Hapus Data Disini</option>
                        </select>
                        <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
                      </div>    
              
                      <div class="form-group">
                        <label for="kategori_ekspor">Kategori Ekspor</label>
                        <input type="text" placeholder="Tambahkan Data">
                        <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                          <option value="">Hapus Data Disini</option>
                        </select>
                        <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
                      </div>
          
                      <div class="form-group">
                        <label for="cara_dagang" >Cara Dagang</label>
                        <input type="text" placeholder="Tambahkan Data">
                        <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                          <option value="">Hapus Data Disini</option>
                        </select>
                        <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
                      </div>
              
                      <div class="form-group">
                        <label for="cara_bayar">Cara Bayar</label>
                        <input type="text" placeholder="Tambahkan Data">
                        <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                          <option value="">Hapus Data Disini</option>
                        </select>
                        <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
                      </div>
              
                      <div class="form-group">
                        <label for="komoditi">Komoditi</label>
                        <input type="text" placeholder="Tambahkan Data">
                        <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                          <option value="">Hapus Data Disini</option>
                        </select>
                        <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
                      </div>
              
                      <div class="form-group">
                        <label for="curah">Curah</label>
                        <input type="text" placeholder="Tambahkan Data">
                        <select id="pelabuhan_muat_ekspor" name="pelabuhan_ekspor">
                          <option value="">Hapus Data Disini</option>
                        </select>
                        <button type="submit" value="submit" class="btn btn-primary btn12345">UPD</button>
                      </div>
          
                    </div>
                  </div>
                 
                  <div class="card-button">
                  </div>
                  
                </div>
              </div>

    @include('layout.sidebar')
    @include('layout.footer')
    <script src="{{ asset("js/script.js")}}"></script>
</body>