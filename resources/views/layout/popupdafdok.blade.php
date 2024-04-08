
  <!------POP UP DARI BADAN-->
  <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">Buat Dokumen Baru</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('tambahdok')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Entitas</p></label>
              <div class="offset-1 col-8">
              <input type="text" class="form-control" value="EXSPORTIR"disabled>
              <input type="hidden" value="EXSPORTIR" name="entitas">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Jenis Pemberitahuan</p></label>
              <div class="offset-1 col-8">
              <input type="text" class="form-control" value="Pengeluaran" disabled>
              <input type="hidden" value="Pengeluaran" name="jenis_pemberitahuan">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Asal Barang</p></label>
              <div class="offset-1 col-8">
              <input type="text" class="form-control" value="Kawasan Pabean" disabled>
              <input type="hidden" value="Kawasan Pabean" name="asal_brg">
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Tujuan Barang</p></label>
              <div class="offset-1 col-8">
              <input type="text" class="form-control" value="Luar Daerah Pabean" disabled >
              <input type="hidden" value="Luar Daerah Pabean" name="tujuan_brg" >
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Jenis Dokumen</p></label>
              <div class="offset-1 col-8">
              <input type="text" class="form-control" value="BC 3.0"  disabled >
              <input type="hidden" value="BC 3.0" name="jenis_dokumen">
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
