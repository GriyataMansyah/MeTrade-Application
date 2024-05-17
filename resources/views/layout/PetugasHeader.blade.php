  
 <?php 
 $kantor_muat_asal = \App\Models\KantorMuatAsal::all(); 
 $Pelabuhan_muat_ekspor = \App\Models\PelabuhanMuatEkspor::all();
 $Jenis_Ekspor = \App\Models\JenisEkspor::all();
 $Kategori_Ekspor = \App\Models\KategoriEkspor::all();
 $Jenis_Dagang = \App\Models\JenisDagang::all();
 $Cara_Bayar = \App\Models\CaraBayar::all();
 $Komoditi = \App\Models\Komoditi::all();
 $Curah = \App\Models\Curah::all();
 ?>
 {{-- -------------------------------------------------- KANTOR PABEAN MUAT ASAL----------------------------------------------------- --}}
  <div class="modal fade" id="ModalHeader" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA KANTOR PABEAN MUAT ASAL</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahKantorPabeanMuatAsal')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahkantorpabeanmuatasal" required>
              </div>
            </div>
            </div>
            
          
          <div class="modal-footer mt-3 ">
            <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" value="submit" class="btn btn-primary px-3">Simpan</button>
          </div>
        </form>
        </div>
        
      </div>
    </div>

    <div class="modal fade" id="ModalHeaderHapus" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA KANTOR PABEAN MUAT ASAL</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusKantorPabeanMuatAsal')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapuskantorpabeanmuatasal" required>
                    <option value=""></option>
                     <?php
                        foreach ($kantor_muat_asal as $kantor) {
                         ?>
                        <option value="<?php echo $kantor->nama; ?>"><?php echo $kantor->nama; ?></option>
                         <?php
                         }?>
                  </select>
                  </div>
                </div>
                </div>
                
              
              <div class="modal-footer mt-3 ">
                <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
                <button type="submit" value="submit" class="btn btn-danger px-3">Hapus</button>
              </div>
            </form>
            </div>
            
          </div>
        </div>
    

    {{-- ---------------------------------------------------------------------------------------------------------------------------- --}}




    {{-- ---------------------------------------------------PELABUHAN MUAT ESKPOR----------------------------------------------------- --}}
  <div class="modal fade" id="3" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA PELABUHAN MUAT EKSPOR</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahPelabuhanMuatEkspor')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahPelabuhanMuatEkspor" required>
              </div>
            </div>
            </div>
            
          
          <div class="modal-footer mt-3 ">
            <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" value="submit" class="btn btn-primary px-3">Simpan</button>
          </div>
        </form>
        </div>
        
      </div>
    </div>

    <div class="modal fade" id="4" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA PELABUHAN MUAT EKSPORL</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusPelabuhanMuatEkspor')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusPelabuhanMuatEkspor" required>
                    <option value=""></option>
                     <?php
                        foreach ($Pelabuhan_muat_ekspor as $kantor) {
                         ?>
                        <option value="<?php echo $kantor->nama; ?>"><?php echo $kantor->nama; ?></option>
                         <?php
                         }?>
                  </select>
                  </div>
                </div>
                </div>
                
              
              <div class="modal-footer mt-3 ">
                <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
                <button type="submit" value="submit" class="btn btn-danger px-3">hapus</button>
              </div>
            </form>
            </div>
            
          </div>
        </div>
    

    {{-- ---------------------------------------------------------------------------------------------------------------------------- --}}
  

        {{-- ---------------------------------------------------JENIS EKSPOR----------------------------------------------------- --}}
  <div class="modal fade" id="5" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA PELABUHAN MUAT EKSPOR</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahJenisEkspor')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahJenisEkspor" required>
              </div>
            </div>
            </div>
            
          
          <div class="modal-footer mt-3 ">
            <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" value="submit" class="btn btn-primary px-3">Simpan</button>
          </div>
        </form>
        </div>
        
      </div>
    </div>

    <div class="modal fade" id="6" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA PELABUHAN MUAT EKSPORL</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusJenisEkspor')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusJenisEkspor" required>
                    <option value=""></option>
                     <?php
                        foreach ($Jenis_Ekspor as $kantor) {
                         ?>
                        <option value="<?php echo $kantor->nama; ?>"><?php echo $kantor->nama; ?></option>
                         <?php
                         }?>
                  </select>
                  </div>
                </div>
                </div>
                
              
              <div class="modal-footer mt-3 ">
                <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
                <button type="submit" value="submit" class="btn btn-danger px-3">hapus</button>
              </div>
            </form>
            </div>
            
          </div>
        </div>
    

    {{-- ---------------------------------------------------------------------------------------------------------------------------- --}}
  
    {{-- ---------------------------------------------------KATEGORI EKSPOR----------------------------------------------------- --}}
  <div class="modal fade" id="7" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA PELABUHAN MUAT EKSPOR</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahKategoriEkspor')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahKategoriEkspor" required>
              </div>
            </div>
            </div>
            
          
          <div class="modal-footer mt-3 ">
            <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" value="submit" class="btn btn-primary px-3">Simpan</button>
          </div>
        </form>
        </div>
        
      </div>
    </div>

    <div class="modal fade" id="8" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA PELABUHAN MUAT EKSPORL</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusKategoriEkspor')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusKategoriEkspor" required>
                    <option value=""></option>
                     <?php
                        foreach ($Kategori_Ekspor as $kantor) {
                         ?>
                        <option value="<?php echo $kantor->nama; ?>"><?php echo $kantor->nama; ?></option>
                         <?php
                         }?>
                  </select>
                  </div>
                </div>
                </div>
                
              
              <div class="modal-footer mt-3 ">
                <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
                <button type="submit" value="submit" class="btn btn-danger px-3">hapus</button>
              </div>
            </form>
            </div>
            
          </div>
        </div>
    

    {{-- ---------------------------------------------------------------------------------------------------------------------------- --}}
  
     {{-- ---------------------------------------------------CARA DAGANG----------------------------------------------------- --}}
  <div class="modal fade" id="9" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA PELABUHAN MUAT EKSPOR</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahCaraDagang')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahCaraDagang" required>
              </div>
            </div>
            </div>
            
          
          <div class="modal-footer mt-3 ">
            <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" value="submit" class="btn btn-primary px-3">Simpan</button>
          </div>
        </form>
        </div>
        
      </div>
    </div>

    <div class="modal fade" id="10" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA PELABUHAN MUAT EKSPORL</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusCaraDagang')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusCaraDagang" required>
                    <option value=""></option>
                     <?php
                        foreach ($Jenis_Dagang as $kantor) {
                         ?>
                        <option value="<?php echo $kantor->nama; ?>"><?php echo $kantor->nama; ?></option>
                         <?php
                         }?>
                  </select>
                  </div>
                </div>
                </div>
                
              
              <div class="modal-footer mt-3 ">
                <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
                <button type="submit" value="submit" class="btn btn-danger px-3">hapus</button>
              </div>
            </form>
            </div>
            
          </div>
        </div>
    

    {{-- ---------------------------------------------------------------------------------------------------------------------------- --}}
  
      {{-- ---------------------------------------------------CARA BAYAR----------------------------------------------------- --}}
  <div class="modal fade" id="11" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA CARA BAYAR</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahCaraBayar')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahCaraBayar" required>
              </div>
            </div>
            </div>
            
          
          <div class="modal-footer mt-3 ">
            <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" value="submit" class="btn btn-primary px-3">Simpan</button>
          </div>
        </form>
        </div>
        
      </div>
    </div>

    <div class="modal fade" id="12" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA CARA BAYAR</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusCaraBayar')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusCaraBayar" required>
                    <option value=""></option>
                     <?php
                        foreach ($Cara_Bayar as $kantor) {
                         ?>
                        <option value="<?php echo $kantor->nama; ?>"><?php echo $kantor->nama; ?></option>
                         <?php
                         }?>
                  </select>
                  </div>
                </div>
                </div>
                
              
              <div class="modal-footer mt-3 ">
                <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
                <button type="submit" value="submit" class="btn btn-danger px-3">hapus</button>
              </div>
            </form>
            </div>
            
          </div>
        </div>
    

    {{-- ---------------------------------------------------------------------------------------------------------------------------- --}}
  
      {{-- ---------------------------------------------------KOMODITI----------------------------------------------------- --}}
  <div class="modal fade" id="13" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH KOMODITI</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahKomoditi')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahKomoditi" required>
              </div>
            </div>
            </div>
            
          
          <div class="modal-footer mt-3 ">
            <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" value="submit" class="btn btn-primary px-3">Simpan</button>
          </div>
        </form>
        </div>
        
      </div>
    </div>

    <div class="modal fade" id="14" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS KOMODITI</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusKomoditi')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusKomoditi" required>
                    <option value=""></option>
                     <?php
                        foreach ($Komoditi as $kantor) {
                         ?>
                        <option value="<?php echo $kantor->nama; ?>"><?php echo $kantor->nama; ?></option>
                         <?php
                         }?>
                  </select>
                  </div>
                </div>
                </div>
                
              
              <div class="modal-footer mt-3 ">
                <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
                <button type="submit" value="submit" class="btn btn-danger px-3">hapus</button>
              </div>
            </form>
            </div>
            
          </div>
        </div>
    

    {{-- ---------------------------------------------------------------------------------------------------------------------------- --}}
  

      {{-- ---------------------------------------------------CURAH----------------------------------------------------- --}}
  <div class="modal fade" id="15" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH CURAH</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahCurah')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahCurah" required>
              </div>
            </div>
            </div>
            
          
          <div class="modal-footer mt-3 ">
            <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
            <button type="submit" value="submit" class="btn btn-primary px-3">Simpan</button>
          </div>
        </form>
        </div>
        
      </div>
    </div>

    <div class="modal fade" id="16" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS CURAH</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusCurah')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusCurah" required>
                    <option value=""></option>
                     <?php
                        foreach ($Curah as $kantor) {
                         ?>
                        <option value="<?php echo $kantor->nama; ?>"><?php echo $kantor->nama; ?></option>
                         <?php
                         }?>
                  </select>
                  </div>
                </div>
                </div>
                
              
              <div class="modal-footer mt-3 ">
                <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
                <button type="submit" value="submit" class="btn btn-danger px-3">hapus</button>
              </div>
            </form>
            </div>
            
          </div>
        </div>
    

    {{-- ---------------------------------------------------------------------------------------------------------------------------- --}}
  

