<!------POP UP DARI BADAN-->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">Tambah Sarana Angkut</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group row mb-3">
              <label  class="control-label col-2 col-form-label"><p class="h6 text-secondary">Nama Sarana Angkut</p></label>
              <div class="offset-1 col-8">
                <select class="form-select ">
                    <option></option>
                  <option value="1">SARANA ANGKUT EKSPOR</option>
                  </select>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-2 col-form-label"><p class="h6 text-secondary">Cara Pengangkutan</p></label>
              <div class="offset-1 col-8">
                <select class="form-select ">
                  <option> </option>
                <option value="1">1 - LAUT</option>
                <option value="1">2 - UDARA</option>
                </select>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-2 col-form-label"><p class="h6 text-secondary">Nomor Voy/Flight</p></label>
              <div class="offset-1 col-8">
              <input type="text" class="form-control" >
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-2 col-form-label"><p class="h6 text-secondary">Bendera</p></label>
              <div class="offset-1 col-8">
                <select class="form-select ">
                  <option></option>
                <option value="1">ID - INDONESIA </option>
                <option value="2">SG - SINGAPURA </option>
                </select>
              </div>
              </div>
            </div>    
          </form>
          <div class="modal-footer mt-3 ">
            <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary px-3">Simpan</button>
          </div>
        </div>
        
      </div>
    </div>
