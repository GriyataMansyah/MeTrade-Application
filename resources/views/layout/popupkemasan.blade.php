<?php
$JumlahKemasan = \App\Models\JumlahKemasan::all();
$JenisKemasan = \App\Models\JenisKemasan::all();
$MerekKemasan = \App\Models\MerekKemasan::all();
$UkuranPetiKemas = \App\Models\UkuranPetiKemas::all();
$JenisPetiKemas = \App\Models\JenisPetiKemas::all();
$TipePetiKemas = \App\Models\TipePetiKemas::all();
?>
<!------POP UP DARI BADAN 1 -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">Tambah Kemasan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('tambahkemasan')}}">
            @csrf
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Jumlah</p>
              </label>
              <div class="offset-1 col-8">
                <select class="form-select" name="jumlah">
                  <option> </option>
                  <?php
                  foreach ($JumlahKemasan as $JK) {
                      ?>
                      <option value="<?php echo $JK->nama; ?>"><?php echo $JK->nama; ?></option>
                      <?php
                  }?>
                </select>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary" >Jenis</p>
              </label>
              <div class="offset-1 col-8">
                <select class="form-select" name="jenis">
                  <option></option><?php
                  foreach ($JenisKemasan as $JK2) {
                      ?>
                      <option value="<?php echo $JK2->nama; ?>"><?php echo $JK2->nama; ?></option>
                      <?php
                  }?>
                </select>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Merek</p>
              </label>
              <div class="offset-1 col-8">
                <select class="form-select" name="merek">
                  <option></option><?php
                  foreach ($MerekKemasan as $MK) {
                      ?>
                      <option value="<?php echo $MK->nama; ?>"><?php echo $MK->nama; ?></option>
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
      </div>
    </form>

    </div>
  </div>
  
  <!------POP UP DARI BADAN 2 -->







  <div class="modal fade" id="base" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">Tambah Peti Kemas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('tambahcok')}}">
            @csrf
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Nomor</p>
              </label>
              <div class="offset-1 col-8">
                <input type="text" class="form-control" name="nomor">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Ukuran</p>
              </label>
              <div class="offset-1 col-8">
                <select class="form-select" name="ukuran">
                  <option> </option><?php
                  foreach ($UkuranPetiKemas as $UPK) {
                      ?>
                      <option value="<?php echo $UPK->nama; ?>"><?php echo $UPK->nama; ?></option>
                      <?php
                  }?>

                </select>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Jenis</p>
              </label>
              <div class="offset-1 col-8">
                <select class="form-select" name="jenis">
                  <option></option><?php
                  foreach ($JenisPetiKemas as $JPK) {
                      ?>
                      <option value="<?php echo $JPK->nama; ?>"><?php echo $JPK->nama; ?></option>
                      <?php
                  }?>

                </select>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Tipe</p>
              </label>
              <div class="offset-1 col-8">
                <select class="form-select" name="tipe">
                  <option></option><?php
                  foreach ($TipePetiKemas as $TPK) {
                      ?>
                      <option value="<?php echo $TPK->nama; ?>"><?php echo $TPK->nama; ?></option>
                      <?php
                  }?>

                </select>
                
              </div>
            </div>
  
        </div>
  
        
        <div class="modal-footer mt-3 ">
          <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
          <button type="submit" value="submit" class="btn btn-primary px-3">Simpan</button>
        </div></form>
      </div>
    
    </div>
  </div>