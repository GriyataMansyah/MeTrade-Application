<?php $data = \App\Models\DataJenisDokumen::all(); ?>
<!------POP UP DARI BADAN-->
 <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">Dokumen Lampiran</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('tambahdokumenpendukung')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Jenis Dokumen</p></label>
              <div class="offset-1 col-8">
                <select class="form-select" name="jenis" required>
                  <option></option>
                  <?php
                  foreach ($data as $d) {
                      ?>
                      <option value="<?php echo $d->nama; ?>"><?php echo $d->nama; ?></option>
                      <?php
                  }?>
                </select>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Nomor Dokumen</p></label>
              <div class="offset-1 col-8">
                <input type="text" class="form-control" name="nomor" required>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Tanggal</p></label>
              <div class="offset-1 col-8">
                <input type="date" class="form-control" name="tanggal" required>
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