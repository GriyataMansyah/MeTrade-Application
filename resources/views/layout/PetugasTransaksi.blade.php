  
 <?php 
 $Valuta = \App\Models\Valuta::all();
 $CaraPenyerahan = \App\Models\CaraPenyerahan::all();
 $Asuransi = \App\Models\Asuransi::all();
 ?>
 {{-- -------------------------------------------------- VALUTA----------------------------------------------------- --}}
  <div class="modal fade" id="27" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA VALUTA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahValuta')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahValuta" required>
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

    <div class="modal fade" id="28" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA VALUTA</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusValuta')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusValuta" required>
                    <option value=""></option>
                     <?php
                        foreach ($Valuta as $kantor) {
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

     {{-- -------------------------------------------------- CARA PENYERAHAN----------------------------------------------------- --}}
  <div class="modal fade" id="29" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA CARA PENYERAHAN</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahCaraPenyerahan')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahCaraPenyerahan" required>
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

    <div class="modal fade" id="30" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA CARA PENYERAHAN</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusCaraPenyerahan')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusCaraPenyerahan" required>
                    <option value=""></option>
                     <?php
                        foreach ($CaraPenyerahan as $kantor) {
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

         {{-- -------------------------------------------------- ASURANSI ----------------------------------------------------- --}}
  <div class="modal fade" id="33" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA ASURANSI</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahAsuransi')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahAsuransi" required>
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

    <div class="modal fade" id="34" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA ASURANSI</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusAsuransi')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusAsuransi" required>
                    <option value=""></option>
                     <?php
                        foreach ($Asuransi as $kantor) {
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


