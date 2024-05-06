   <!------POP UP DARI BADAN-->
              <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header mb-3 " style="background-color: #DDFAFE;">
                      <h1 class="modal-title fs-5 " id="exampleModalLabel">Tambah Bank</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="{{ route("tambahbank2")}}">
                        @csrf
                        <div class="form-group row mb-3">
                          <input type="text" name="id" class="inv" value="{{$id}}">
                          <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Kode Bank</p></label>
                          <div class="offset-1 col-8">
                          <input type="text" class="form-control" name="kode_bank" required>
                          </div>
                        </div>
                        <div class="form-group row mb-3">
                          <label  class="control-label col-3 col-form-label"><p class="h6 text-secondary">Nama Bank</p></label>
                          <div class="offset-1 col-8">
                            <select class="form-select" name="nama_bank" required>
                              <option> </option><?php
                              foreach ($NamaBank as $n) {
                                ?>
                                <option value="<?php echo $n->nama; ?>"><?php echo $n->nama; ?></option>
                                <?php
                            }?></select>
                          </div>
                        </div>
                        <div class="modal-footer mt-3 ">
                          <button type="button" class="btn btn-outline-secondary px-3" data-bs-dismiss="modal">Batal</button>
                          <button type="submit" value="submit" class="btn btn-primary px-3">Simpan</button>
                        </div>
                        </div></form>
                    </div>
                     
                  </div>
                </div>