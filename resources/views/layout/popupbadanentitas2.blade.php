 <!------POP UP DARI BADAN-->
 <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
          <h1 class="modal-title fs-5 " id="exampleModalLabel">Tambah Pemilik Barang</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('modifentitas')}}">
            @csrf
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label">
                <input type="text" name="id" class="inv" value="{{$id}}">
              <p class="h6 text-secondary">Nomor Identitas</p></label>
              <div class="offset-1 col-8">
              <input type="text" class="form-control" name="no_identitas" onkeypress="return hanyaAngka(event)" required>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label">
              <p class="h6 text-secondary">Alamat</p></label>
              <div class="offset-1 col-8">
                <textarea type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" name="alamat" required></textarea>
              </div>
            </div>
            <div class="form-group row mb-3">
              <label  class="control-label col-3 col-form-label">
              <p class="h6 text-secondary">Nama</p></label>
              <div class="offset-1 col-8">
              <input type="text" class="form-control" name="nama" required>
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