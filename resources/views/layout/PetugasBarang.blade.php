  
 <?php 
 $HS = \App\Models\HS::all();
 $DataJenisLartas = \App\Models\DataJenisLartas::all();
 $KodeSatuan = \App\Models\KodeSatuan::all();
 $Kodekemasan = \App\Models\Kodekemasan::all();
 ?>
 {{-- -------------------------------------------------- HS ----------------------------------------------------- --}}
  <div class="modal fade" id="35" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA HS</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahHS')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahHS" required>
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

    <div class="modal fade" id="36" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA HS</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusHS')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusHS" required>
                    <option value=""></option>
                     <?php
                        foreach ($HS as $kantor) {
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

     {{-- -------------------------------------------------- LARTAS ----------------------------------------------------- --}}
  <div class="modal fade" id="37" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA LARTAS</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahLartas')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahLartas" required>
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

    <div class="modal fade" id="38" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA LARTAS</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusLartas')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusLartas" required>
                    <option value=""></option>
                     <?php
                        foreach ($DataJenisLartas as $kantor) {
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

    
     {{-- -------------------------------------------------- KODE SATUAN ----------------------------------------------------- --}}
  <div class="modal fade" id="41" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA KODE SATUAN</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahKodeSatuan')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahKodeSatuan" required>
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

    <div class="modal fade" id="42" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA KODE SATUAN</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusKodeSatuan')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusKodeSatuan" required>
                    <option value=""></option>
                     <?php
                        foreach ($KodeSatuan as $kantor) {
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

    {{-- -------------------------------------------------- KODE KEMASAN ----------------------------------------------------- --}}
  <div class="modal fade" id="43" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">TAMBAH DATA KODE KEMASAN</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('tambahKodeKemasan')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Data Baru :</p></label>
              <div class="offset-1 col-9">
              <input type="text" class="form-control" name="tambahKodeKemasan" required>
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

    <div class="modal fade" id="44" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
              <h1 class="modal-title fs-5 " id="exampleModalLabel">HAPUS DATA KODE KEMASAN</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('hapusKodeKemasan')}}">
                @csrf
                <div class="form-group row mb-3">
                  <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Pilih Data :</p></label>
                  <div class="offset-1 col-9">
                  <select class="form-control" name="hapusKodeKemasan" required>
                    <option value=""></option>
                     <?php
                        foreach ($Kodekemasan as $kantor) {
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

    



