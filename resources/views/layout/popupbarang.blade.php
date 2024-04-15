<?php
$DataJenisLartas = \App\Models\DataJenisLartas::all();
$DataFasilitas = \App\Models\DataFasilitas::all();
$DataIzin = \App\Models\DataIzin::all();
$DataEntitas = \App\Models\DataEntitas::all();

$JenisPetiKemas = \App\Models\JenisPetiKemas::all();
$TipePetiKemas = \App\Models\TipePetiKemas::all();
?>
<!------POP UP DARI BADAN 1 -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">Dokumen Fasilitas / Lartas</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('tambahlartas')}}">
            @csrf
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Jenis</p>
              </label>
              <div class="offset-1 col-8">
                <select class="form-select" name="jenis">
                  <option> </option>
                  <?php
                  foreach ($DataJenisLartas as $JL) {
                      ?>
                      <option value="<?php echo $JL->nama; ?>"><?php echo $JL->nama; ?></option>
                      <?php
                  }?>
                </select>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary" >Nomor</p>
              </label>
              <div class="offset-1 col-8">
                <input type="text" class="form-control" name="nomor" onkeypress="return hanyaAngka(event)">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Tanggal</p>
              </label>
              <div class="offset-1 col-8">
                <input type="date" class="form-control" name="tanggal">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Fasilitas</p>
              </label>
              <div class="offset-1 col-8">
                <select class="form-select" name="fasilitas">
                  <option> </option>
                  <?php
                  foreach ($DataFasilitas as $DF) {
                      ?>
                      <option value="<?php echo $DF->nama; ?>"><?php echo $DF->nama; ?></option>
                      <?php
                  }?>
                </select>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Izin</p>
              </label>
              <div class="offset-1 col-8">
                <select class="form-select" name="izin">
                  <option> </option>
                  <?php
                  foreach ($DataIzin as $DI) {
                      ?>
                      <option value="<?php echo $DI->nama; ?>"><?php echo $DI->nama; ?></option>
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
          <h1 class="modal-title fs-5 " id="exampleModalLabel">Entitas Barang</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('tambahentitas')}}">
            @csrf
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Nomor Identitas</p>
              </label>
              <div class="offset-1 col-8">
                <input type="text" class="form-control" name="nomor_identitas" onkeypress="return hanyaAngka(event)">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Nama</p>
              </label>
              <div class="offset-1 col-8">
                <input type="text" class="form-control" name="nama">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Alamat</p>
              </label>
              <div class="offset-1 col-8">
                <input type="text" class="form-control" name="alamat">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label class="control-label col-3 col-form-label">
                <p class="h6 text-secondary">Entitas</p>
              </label>
              <div class="offset-1 col-8">
                <select class="form-select" name="entitas">
                  <option></option><?php
                  foreach ($DataEntitas as $DE) {
                      ?>
                      <option value="<?php echo $DE->nama; ?>"><?php echo $DE->nama; ?></option>
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