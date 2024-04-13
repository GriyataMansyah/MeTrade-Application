




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
</body>
</html>
