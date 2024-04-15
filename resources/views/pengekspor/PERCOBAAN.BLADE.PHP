
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/script.js')}}"></script>
</head>
<body>
    NILAI EKSPOR: <select id="DATA" onchange="updateInputValue2()" class="form-select" name="nilai_ekspor" id="nilai_ekspor">
        <option value=""></option>
        <option value="50000000">Rp50.000.000</option>
        <option value="250000000">Rp250.000.000</option>
        <option value="500000000">Rp500.000.000</option>
        <option value="5000000000">Rp5.000.000.000</option>
        <option value="5000000000">Rp5.000.000.000.000</option>
    </select> <BR>

    FREIGHT:<input type="text" class="form-control"  name="freight" id="freight" onkeypress="return hanyaAngka(event)"><BR>

    ASURANSI <input type="text" class="form-control" placeholder="Nominal Asuransi" name="nominal_asuransi" id="asuransi" oninput="updateInputValue3()" onkeypress="return hanyaAngka(event)">

    PPH <input type="checkbox" id="pphCheckbox" onchange="updatePphValue()"> PPh</label><input type="text" class="form-control" id="DATA2" name="pph" readonly><BR>

    NILAI BEA CUKAI KELUAR :<input type="text" class="form-control" id="nilai_bea_keluar" name="nilai_bea_keluar" readonly><BR>

     <script src={{ asset('js/script.js')}}></script>


     <table class="tables">
        <thead>
          <tr>
            <th class="th1a">
              <div class="position-relative">Kemasan
                <button type="button"
                  class="btn btn-primary px-4  position-absolute top-50 end-0 translate-middle-y "
                  data-bs-toggle="modal" data-bs-target="#Modal">Tambah</button>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="table-primary asta centered" scope="col">Seri</th>
                      <th class="table-primary asta  centered" scope="col">Jumlah</th>
                      <th class="table-primary asta centered" scope="col">Jenis</th>
                      <th class="table-primary asta centered" scope="col">Merek</th>
                      <th class="table-primary asta centered" scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      {{-- @foreach($Kemasan as $K) --}}
             {{-- <td class="centered">{{}}</td> --}}
             <td class="centered"></td>
             <td class="centered"></td>
             <td class="centered"></td>
             <td class="centered"></td>
              <td class="oe centered" >
                {{-- <form action="{{ route('hapusaja', $K->seri) }}" method="POST"> --}}
                  @csrf
                  {{-- @method('DELETE') --}}
                  <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                   </svg>
                  </button>
              {{-- </form> --}}
            </td>
            </tr>
            {{-- @endforeach --}}
                  </tbody>
                </table>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
  </div>
  <div class="col-6">
    <table class="tabless">
      <thead>
        <tr>
          <th class="th1a">
            <div class="position-relative">Peti Kemas
              <button type="button" class="btn btn-primary px-4  position-absolute top-50 end-0 translate-middle-y "
                data-bs-toggle="modal" data-bs-target="#base">Tambah</button>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="table-primary asta centered" scope="col">Seri</th>
                    <th class="table-primary asta centered" scope="col">Nomor</th>
                    <th class="table-primary asta centered" scope="col">Ukuran</th>
                    <th class="table-primary asta centered" scope="col">Jenis</th>
                    <th class="table-primary asta centered" scope="col">Tipe</th>
                    <th class="table-primary asta centered" scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                      {{-- @foreach($PetiKemas as $PK) --}}
              <tr>
              {{-- <td class="centered">{{}}</td> --}}
              <td class="centered"></td>
              <td class="centered"></td>
              <td class="centered"></td>
              <td class="centered"></td>
              <td class="centered"></td>
              <td class="oe centered" >
                {{-- <form action="{{ route('hapuscok', $PK->seri) }}" method="POST"> --}}
                  @csrf
                  {{-- @method('DELETE') --}}
                  <button type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                   </svg>
                  </button>
              {{-- </form> --}}
            </td>
            </tr>
            {{-- @endforeach --}}
                </tbody>
              </table>
            </div>
          </td>
        </tr>
      </tbody>
    </table>





    
</body>
</html>
