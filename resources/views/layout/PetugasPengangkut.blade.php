  
 <?php 
 $Penimbunan = \App\Models\DataTempatPenimbunan::all();
 $PelabuhanMuatAsal = \App\Models\DataPelabuhanMuatAsal::all();
 $PelabuhanBongkar = \App\Models\PelabuhanBongkar::all();
 $PelabuhanTujuan = \App\Models\PelabuhanTujuan::all();
 $LokasiPemeriksaan =\App\Models\LokasiPemeriksaan::all();
 ?>
 {{-- -------------------------------------------------- TEMPAT PENIMBUNAN----------------------------------------------------- --}}
  <div class="modal fade" id="17" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA TEMPAT PENIMBUNAN</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahTempatPenimbunan')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahTempatPenimbunan" required>
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

    <div class="modal fade" id="18" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA TEMPAT PENIMBUNAN</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusTempatPenimbunan')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusTempatPenimbunan" required>
                    <option value=""></option>
                     <?php
                        foreach ($Penimbunan as $kantor) {
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

    {{-- -------------------------------------------------- TEMPAT PENIMBUNAN----------------------------------------------------- --}}
  <div class="modal fade" id="19" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA PELABUHAN MUAT ASAL</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahPelabuhanMuatAsal')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahPelabuhanMuatAsal" required>
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

    <div class="modal fade" id="20" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA PELABUHAN MUAT ASAL</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusPelabuhanMuatAsal')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusPelabuhanMuatAsal" required>
                    <option value=""></option>
                     <?php
                        foreach ($PelabuhanMuatAsal as $kantor) {
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

        {{-- -------------------------------------------------- PELABUHAN BONGKAR----------------------------------------------------- --}}
  <div class="modal fade" id="21" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA PELABUHAN BONGKAR</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahPelabuhanBongkar')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahPelabuhanBongkar" required>
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

    <div class="modal fade" id="22" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA PELABUHAN BONGKAR</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusPelabuhanBongkar')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusPelabuhanBongkar" required>
                    <option value=""></option>
                     <?php
                        foreach ($PelabuhanBongkar as $kantor) {
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

            {{-- -------------------------------------------------- PELABUHAN TUJUAN----------------------------------------------------- --}}
  <div class="modal fade" id="23" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA PELABUHAN TUJUAN</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahPelabuhanTujuan')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahPelabuhanTujuan" required>
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

    <div class="modal fade" id="24" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA PELABUHAN TUJUAN</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusPelabuhanTujuan')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusPelabuhanTujuan" required>
                    <option value=""></option>
                     <?php
                        foreach ($PelabuhanTujuan as $kantor) {
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

             {{-- -------------------------------------------------- LOKASI PEMERIKSAAN----------------------------------------------------- --}}
  <div class="modal fade" id="25" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA PELABUHAN TUJUAN</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahLokasiPemeriksaan')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahLokasiPemeriksaan" required>
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

    <div class="modal fade" id="26" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA PELABUHAN TUJUAN</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusLokasiPemeriksaan')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusLokasiPemeriksaan" required>
                    <option value=""></option>
                     <?php
                        foreach ($LokasiPemeriksaan as $kantor) {
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

    
