<?php
$NamaSaranaAngkut = \App\Models\NamaSaranaAngkut::all();
$CaraPengangkutan = \App\Models\CaraPengangkutan::all();
$Bendera = \App\Models\Bendera::all();
?>
<!------POP UP DARI BADAN-->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">Tambah Sarana Angkut</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('modifangkutan')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-2 col-form-label"><p class="h6 text-secondary">Nama Sarana Angkut</p></label>
              <div class="offset-1 col-8">
                <input type="text" name="id" class="inv" value="{{$id}}">
                <select class="form-select" name="nama_sarana_angkut" required>
                    <option></option>
                    <?php
                    foreach ($NamaSaranaAngkut as $A) {
                        ?>
                        <option value="<?php echo $A->nama; ?>"><?php echo $A->nama; ?></option>
                        <?php
                    }?>
                  </select>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-2 col-form-label"><p class="h6 text-secondary">Cara Pengangkutan</p></label>
              <div class="offset-1 col-8">
                <select class="form-select" name="cara_pengangkutan" required>
                  <option> </option>
                  <?php
                  foreach ($CaraPengangkutan as $B) {
                      ?>
                      <option value="<?php echo $B->nama; ?>"><?php echo $B->nama; ?></option>
                      <?php
                  }?>
                </select>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-2 col-form-label"><p class="h6 text-secondary">Nomor Voy/Flight</p></label>
              <div class="offset-1 col-8">
              <input type="text" class="form-control" name="nomor_voy" required>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-2 col-form-label"><p class="h6 text-secondary">Bendera</p></label>
              <div class="offset-1 col-8">
                <select class="form-select" name="bendera" required>
                  <option></option>
                  <?php
                  foreach ($Bendera as $C) {
                      ?>
                      <option value="<?php echo $C->nama; ?>"><?php echo $C->nama; ?></option>
                      <?php
                  }?>
                </select>
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
