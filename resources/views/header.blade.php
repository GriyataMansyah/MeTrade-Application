<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    body {
        background-color: #DFF5FF;
        overflow: hidden;
    }

    /* CSS UNTUK SIDEBAR */
    .hilang {
      font-size: 0;
    }

    .sidebar {
        width: 68px;
        height: 95vh;
        background-color: whitesmoke;
        display:flex ;
        flex-direction: column;
        transition: width 0.3s ease;
        box-shadow: 0 8px 16px rgba(0.3, 0, 0.3, 0);
        z-index:5;
        margin-top: -121px;
    }

    .logo {
        display:flex;
        flex-direction: row;
        align-items: center; 
        margin-top: 32px;
        margin-left: 20px;
    }

    .logo1 {
        display:flex;
        margin-left: 25px;
        flex-direction: row;
        align-items: center; 
        padding-top:120px;   
    }

    .sidebar .logo1::before{
      content: "...";
      transition: 0.5s;
    }

    .sidebar:hover .logo1::before{
      content: "";
    }

    .sidebar .logo1::after{
      
      opacity: 0;
      transition: opacity 0.5s;
    }

    .sidebar:hover .logo1::after{
      content: "SingleSystem";
      opacity: 1;
    }
    .logo2 {
        display:flex;
        flex-direction: row;
        align-items: center; 
        margin-left: 25px;
        padding-top:20px;   
    }

    .logo3 {
        display:flex;
        flex-direction: row;
        align-items: center; 
        margin-top: 33px;
        margin-left: 20px;
    }

    .logo4 {
        display:flex;
        flex-direction: row;
        align-items: center; 
        margin-top: 20px;
        margin-left: 20px;
    }


    .inlogo {
      margin-left: 20px;
      margin-top: 25px;
    }

    .sidebar:hover {
        width : 250px;
        height: 95vh;
        background-color: whitesmoke;
    }

    .sidebar .inlogo::after{
      content: "";
      opacity: 0;
      transition: opacity 0.5s;
    }

    .sidebar:hover .inlogo::after{
      content: "Manifes";
      opacity: 1;
    }

    .inlogo1 {
      margin-left: 20px;
      margin-top: 25px;
    }

    .sidebar .inlogo1::after{
      content: "";
      opacity: 0;
      transition: opacity 0.5s;
    }

    .sidebar:hover .inlogo1::after{
      content: "SingleCore";
      opacity: 1;
    }

    .inlogo2 {
      margin-left: 20px;
      margin-top: 25px;
    }

    .sidebar .inlogo2::after{
      content: "";
      opacity: 0;
      transition: opacity 0.5s;
    }

    .sidebar:hover .inlogo2::after{
      content: "Bendahara";
      opacity: 1;
    }

    .inlogo3 {
      margin-left: 20px;
      margin-top: 25px;
    }

    .sidebar .inlogo3::after{
      content: "";
      opacity: 0;
      transition: opacity 0.5s;
    }

    .sidebar:hover .inlogo3::after{
      content: "PKBSI";
      opacity: 1;
    }

    .inlogo4 {
      margin-left: 20px;
      margin-top: 25px;
    }

    .sidebar .inlogo4::after{
      content: "";
      opacity: 0;
      transition: opacity 0.5s;
    }

    .sidebar:hover .inlogo4::after{
      content: "Voluntary";
      opacity: 1;
    }

    a {
    color:black;
    text-decoration: none;
    }

    .dropdown-button {
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
    }

    .dropdown-content {
      display: none;
      position: static;
      background-color: #f9f9f9;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      min-width: 160px;
    }

    .dropdown-item {
      padding: 10px;
      text-decoration: none;
      color: #333;
      display: block;
      
    }

    .dropdown-item:hover {
      color: black;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* CSS UNTUK HEADER */
    .header {
      /* position: ; */
      width: 96%;
      height: 110px;
      background-color: whitesmoke;
      z-index: 4;
      margin-left: 68px; 
      box-shadow: 0 8px 16px rgba(0.1, 0.1, 0.1, 0.1);
      display: flex;
    }

    .letaktom {
      display: flex;
      justify-content: right;
      margin-top: 10px;
      margin-left: -20px;
      width:99%;
    }

    .a1 {
      height: 40px;
      background-color: whitesmoke;
      border: 1px solid black;
      color: black;
    }

    .a1:hover {
      background-color: red;
      color: black;
    }

    .hrs {
      width: 100%;
      background-color: gray;
      height: 0.5px;
      margin-top: 12px;
    }

    .cei {
      margin-top:10px;
      font-size: 16px;
    }

    .footer {
      width :105%;
      height: 7vh;
      background-color: whitesmoke;
      padding-left: 78px;
      padding-top: 10px;
      box-shadow: 0 8px 16px rgba(0.3, 0.3, 0.3, 0.3);
    }

    .logoo {
      width:30%;
      position: absolute;
      margin-left: 77px;
      margin-top: 29px;
    }

    .sidebar .logoo{
      display: none;
    }

    .sidebar:hover .logoo{
      display: block;
    }

    .thisbody {
      position: absolute;
      width: 92%;
      height: 100vh;
      background-color: whitesmoke;
      margin-left: 95px;
      margin-top: 25px;
      overflow: scroll;
    }

    .ha5 {
      padding-top: 24px;
      padding-left: 39px;
      font-size: 19px;
    }

    .popup {
      display: none;
      background-color: white;
      width: 385px;
      height:250px;
      z-index: 3;
      margin-top: 60px;
      margin-right:18px;  
    }

    .patas {
      background-color: yellow;
      height: 100px;
      /* background-image: url(); */
      display: flex;
      flex-direction: row;
    }

    .hay {
      width : 80px;
      margin: 13px;
    }

    .teman {
      margin-top: 30px;
      font-size: 24px;
      margin-left: 5px;
    }

    .a4 {
      display: flex;
      flex-direction: row;
    }

    .svg1 {
      margin:20px;
    }

    .p0 {
      font-size: 16px;
      margin-top: 13px;
    }

    .p01 {
      font-size: 14px;
      padding-bottom: 20px;
      margin-top: -16px;
    }
    .pbawah {
      margin-top: 5px;
    }

    .h0{
      margin-top: -20px;
    }

    .yebtn {
      margin-left:25px;
      padding-right: 15px;
    }

    .header2 {
      /* position: ; */
      width: 102%;
      height: 110px;
      background-color: whitesmoke;
      z-index: 4; 
      box-shadow: 0 8px 16px rgba(0.1, 0.1, 0.1, 0.1);
      display: flex;
    }

    .letaktom2 {
      display: flex;
      justify-content: right;
      margin-top: 10px;
      margin-left: 10px;
      width:99%;
    }

    .cei2 {
      margin-top:10px;
      font-size: 16px;
      margin-left:14px;
    }

    .thisbody2 {
      position: absolute;
      width: 98%;
      height: 78vh;
      background-color: whitesmoke;
      margin-top: 18px;
      margin-left: 8px;
      overflow: scroll;
    }

    .footer2 {
      width :105%;
      height: 7vh;
      background-color: whitesmoke;
      padding-left: 28px;
      padding-top: 10px;
      box-shadow: 0 8px 16px rgba(0.3, 0.3, 0.3, 0.3);
    }

    .menu {
      display: flex;
      position: left;
      justify-content: left;
      width:100%;
      margin-right: 5px;
      margin-top:3px;
    }

    .menu2 {
      display: flex;
      position: left;
      justify-content: left;
      width:100%;
      margin-top:22px;
      margin-left:16px;
    }

    .sidebar2 {
        visibility: hidden;
        width: 250px;
        height: 110vh;
        background-color: whitesmoke;
        display:flex ;
        flex-direction: column;
        transition: width 0.3s ease;
        box-shadow: 0 8px 16px rgba(0.3, 0, 0.3, 0);
        z-index:5;
        margin-top: -121px;
        overflow: hidden;
    }

    .inlogo9 {
      margin-left: 20px;
      margin-top: 34px;
    }

    .a12 {
      height: 50px;
      background-color: whitesmoke;
      display: flex;
      position: right;
      justify-content: right;
    }

    .drow {
      display: flex;
      flex-direction: row;
      margin-right: 10px;
      height: 45px;
      width:168px;
      padding-top: 10px;
    }

    .drow2 {
      display: flex;
      flex-direction: row;
      margin-right: 10px;
      height: 45px;
      width:168px;
      padding-top: 6px;
    }

    .drow1 {
      display: flex;
      flex-direction: row;
      margin-top: 15px;
    }

    .dalambiru  {
      margin-left: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 11px;
    }

    .dalamputih {
      margin-left: 5px;
      display: flex;
      justify-content: center;
      align-items: center;
      padding-top: 10px;
      padding-left: 10px;
    }
    
    .hoh1{
      padding-top: 8px;
    }
    
    .table {
      width:100%;
      height:60vh;
      background-color: red;
    }

    .offside {
      width: 120%;
      height:45px;
      margin-top: 10px;
      margin-left: 20px;
    }

    .offside2 {
      width:auto;
      height: auto;
    }

    .container00{
      margin-top: -6px;
      margin-top: -3px;
    }

    .isi {
      font-size: 18px;
    }

    .isi2 {
      font-size: 18px;
      margin-right: 30px;
    }
    

    .ya {
      text-decoration: none; 
    }

    .kotak {
      width: 97%;
      height:auto;
      margin-top: 8px;
      position: sticky;
      border: 1px solid grey;
      margin-left:20px;
    }

    .kotakdalam {
      background-color:  #5fadd1;
      width: 98%;
      height: auto;
      margin: 11px;
      border: 1px solid black;
    }

    .kotak2 {
      width: 97%;
      height:auto;
      margin-top: 8px;
      position: sticky;
      border: 1px solid grey;
      margin-left:10px;
      
    }

    .kotakdalam2 {
      background-color:  #5fadd1;
      width: auto;
      height: auto;
      margin: 11px;
      border: 1px solid black;
    }

    .satu {
      margin-left: 10px;
      margin-top: 10px;
    }

    .tables {
      margin-left:11px;
      border:1px solid black;
    }
    
    .tabless {
      margin-right:14px;
      border:1px solid black;
    }

    .th1 {
      width:700px;
      height: 70px;
      border:1px solid black;
      padding-left: 20px;
      background-color:  #c3c7c8;
      
    }

    .td1 {
      padding-left: 20px;
      padding-top: 20px;
      padding-bottom: 20px;
    }
    
    .input1 {
      width:97%;
    }

    .tambah {
      height:170px;
      margin-top: 20px;
    }

    .tambah2 {
      height:5x;
      margin-top: 20px;
    }
    
    .hayhay {
      width: auto;
      height: 45px;
      margin-top: 10px;
      margin-left:px;
      overflow-x: scroll;
      overflow-y: hidden;
      white-space: nowrap;
      display: flex;
      flex-wrap: nowrap;
    }

        /* BAGIAN CARD FORMULIR PENGISIAN */
.card-form {
    background-color: #ffffff;
    border: 1px solid #dddddd;
    border-radius: 5px;
    padding: 20px;
    
}

.card-body {
    font-size: 16px;
}

.card-body h3 {
    margin-bottom: 20px;
}


.custom-form-group {
    margin-top: 10px;
    display: flex;
    align-items: center;
    position: relative;
}

.custom-form-group label {
    flex: 1;
    text-align: left;
    margin-right: 10px;
}

.custom-form-group input[type="text"] {
    flex: 2; /* Mengatur input menjadi setengah lebar */
    padding: 8px;
    font-size: 16px;
    border: 1px solid #dddddd;
    border-radius: 5px;
    background-color: #e0f2e9; /* Warna background hijau muda */
}


.form-group {
    margin-top: 10px;
    display: flex;
    align-items: center;
    position : relative;
}

.form-group label {
    flex: 1;
    text-align: left;
    margin-right: 10px;
}

.form-group input[type="text"],



.form-group select {
    flex: 2;
    padding: 8px;
    font-size: 16px;
    border: 1px solid #dddddd;
    border-radius: 5px;
}

.form-group select {
    flex: 2;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: url('') no-repeat right center / 20px;
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23333" width="18px" height="18px"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');
    background-size: 20px;
    background-position: right 10px top 50%;
}
    </style>
</head>
      <!-- INI HEADER -->
      <div class="d-none d-lg-block">
      <div class="row header animate__animated animate__fadeInDown">
        
        <div class="col-12 letaktom">
        <button class="a1 btn btn-secondary" onclick="muncul()">HI, <b>Teman-Teman</b></button>
        </div>

        <div class="col-12 hrs">
        </div>
      
        <div class="col-12">
          <p class="cei">CEISA 4.0</p>
        </div>
      </div>
      </div>

                <!-- INI RESPONSIVE HEADER-->
                <div class="d-block d-lg-none">
                  <div class="row header2 animate__animated animate__fadeInDown">
                    
                    <div class="col-12 letaktom2">
                      <a class="menu"><div onclick="forside()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                        </svg></div>
                      </a>
                    <a class="a12" onclick="muncul()" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                      <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                      <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                    </svg></b></a>
                    </div>
            
                    <div class="col-12 hrs">
                    </div>
                  
                    <div class="col-12">
                      <p class="cei2">CEISA 4.0</p>
                    </div>
                  </div>
                  </div>

      <!-- INI POP UP LOG OUT -->
        <div class="popup position-absolute top-0 end-0 animate__animated animate__headShake"  id="popup1">
        <div class="col-12 patas">
          <img src="Asset/logo2.png" class="hay">
          <a href="#">
            <h2 class="teman">Teman-Teman</h2>
          </a>
        </div>
        <div class="col-12 pbawah">
          <a href="#" class="a4">
          <svg class="svg1" xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
          </svg>
          <div class="tulis">
          <p class="p0">My Profile</p>
          <p class="p01">Acount Settings And More</p>
        </div>
        </a> 
        <hr class="h0">
        <a href="">
          <button type="button" class="yebtn btn btn-outline-danger">Log Out</button>
        </a>
        </div>
        </div>

       <!-- INI BADANNYA -->
    <div class="d-none d-lg-block thisbody animate__animated animate__fadeIn">
      <div class="row">
      <h5 class="ha5 col-9">BC 3.0 PEMBERITAHUAN EKSPOR BARANG</h5>
      <div class="col-3 drow1">
        <div type="button" class="btn btn-outline-secondary drow"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
          <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
        </svg><p class="dalamputih">Muat Ulang</p></div>
        <div type="button" class="btn btn-primary drow"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
          <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
          <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
        </svg><p class="dalambiru">Lanjutkan</p></div>
      </div>
    </div> 
    <hr>
    <div class="offside">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Header</a></div>
          <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Entitas</a></div>
          <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Dokumen</a></div>
          <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Pengangkut</a></div>
          <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Kemasan</a></div>
          <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Transaksi</a></div>
          <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Barang</a></div>
          <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Pungutan</a></div>
          <div class="col-md-1 mx-2 isi"><a href="#" class="ya">Pernyataan</a></div>
        </div>
      </div>   
    </div>
    <hr class="container00 container-fluid">
    <div class="kotak">
      <div class="card-form">
        <div class="card-body">

          <div class="custom-form-group">
            <label for="nomor_pengajuan">Nomor Pengajuan</label>
            <input type="text" id="nomor_pengajuan" class="text">
        </div>

            <span class="error-message"></span>

            <div class="form-group">
                <label for="kantor_pabean_muat_asal">Kantor Pabean Muat Asal</label>
                <select id="kantor_pabean_muat_asal">
                    <option value=""></option>
                    <option value="1">Pilihan 1</option>
                    <option value="2">Pilihan 2</option>
                    <option value="3">Pilihan 3</option>
                </select>
            </div>
            <span id="kantor_pabean_muat_asal-error" class="error-message"></span>    

            <div class="form-group">
                <label for="pelabuhan_muat_ekspor">Pelabuhan Muat Ekspor</label>
                <select id="pelabuhan_muat_ekspor">
                    <option value=""></option>
                    <option value="1">Pilihan 1</option>
                    <option value="2">Pilihan 2</option>
                    <option value="3">Pilihan 3</option>
                </select>
            </div>
            <span id="pelabuhan_muat_ekspor-error" class="error-message"></span>      

            <div class="form-group">
                <label for="kantor_pabean_muat_ekspor">Kantor Pabean Muat Ekspor</label>
                <input type="text" id="kantor_pabean_muat_ekspor" >
            </div>
            <span class="error-message"></span>

            <div class="form-group">
                <label for="jenis_ekspor">Jenis Ekspor</label>
                <select id="jenis_ekspor">
                    <option value=""></option>
                    <option value="1">Pilihan 1</option>
                    <option value="2">Pilihan 2</option>
                    <option value="3">Pilihan 3</option>
                </select>
            </div>
            <span id="jenis_ekspor-error" class="error-message"></span>       

            <div class="form-group">
                <label for="kategori_ekspor">Kategori Ekspor</label>
                <select id="kategori_ekspor">
                    <option value=""></option>
                    <option value="1">Pilihan 1</option>
                    <option value="2">Pilihan 2</option>
                    <option value="3">Pilihan 3</option>
                </select>
            </div>
            <span id="kategori_ekspor-error" class="error-message"></span> 

            <div class="form-group">
                <label for="cara_dagang">Cara Dagang</label>
                <select id="cara_dagang">
                    <option value=""></option>
                    <option value="1">Pilihan 1</option>
                    <option value="2">Pilihan 2</option>
                    <option value="3">Pilihan 3</option>
                </select>
            </div>
            <span id="cara_dagang-error" class="error-message"></span>  

            <div class="form-group">
                <label for="cara_bayar">Cara Bayar</label>
                <select id="cara_bayar">
                    <option value=""></option>
                    <option value="1">Pilihan 1</option>
                    <option value="2">Pilihan 2</option>
                    <option value="3">Pilihan 3</option>
                </select>
            </div>       
            <span id="cara_bayar-error" class="error-message"></span>   

            <div class="form-group">
                <label for="komoditi">Komoditi</label>
                <select id="komoditi">
                    <option value=""></option>
                    <option value="1">Pilihan 1</option>
                    <option value="2">Pilihan 2</option>
                    <option value="3">Pilihan 3</option>
                </select>
            </div>
            <span id="komoditi-error" class="error-message"></span>

            <div class="form-group">
                <label for="curah">Curah</label>
                <select id="curah">
                    <option value=""></option>
                    <option value="1">Pilihan 1</option>
                    <option value="2">Pilihan 2</option>
                    <option value="3">Pilihan 3</option>
                </select>
            </div>
            <span id="curah-error" class="error-message"></span>

        </div>
    </div>

  <div class="card-button"> 
  </div>
      
    </div><div class="tambah"></div>
    </div>
    
  </div>
              <!-- INI ADALAH BADAN RESPONSIVE -->
              <div class="d-block d-lg-none thisbody2 animate__animated animate__fadeIn">
                <div class="row">
                  <h5 class="ha5 col-8 ">BC 3.0 PEMBERITAHUAN EKSPOR BARANG</h5>
                  <div class="col-4 drow1">
                    <div type="button" class="btn btn-outline-secondary drow d-none d-sl-block"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="hoh1 bi bi-arrow-clockwise" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                      <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
                    </svg><p class="dalamputih">Muat Ulang</p></div>
                    <div type="button" class="btn btn-primary drow2"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="hoh1 bi bi-file-earmark-plus" viewBox="0 0 16 16">
                      <path d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5"/>
                      <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
                    </svg><p class="dalambiru">Lanjutkan</p></div>
                  </div>
                </div>
                  <hr>
                  <div class="offside2">
                    <div class="container-fluid">
                      <div class="row hayhay">
                        <div class="col isi2"><a href="#" >Header</a></div>
                        <div class="col isi2"><a href="#" >Entitas</a></div>
                        <div class="col isi2"><a href="#" >Dokumen</a></div>
                        <div class="col isi2"><a href="#" >Pengangkut</a></div>
                        <div class="col isi2"><a href="#" >Kemasan</a></div>
                        <div class="col isi2"><a href="#" >Transaksi</a></div>
                        <div class="col isi2"><a href="#" >Barang</a></div>
                        <div class="col isi2"><a href="#" >Pungutan</a></div>
                        <div class="col isi2"><a href="#" >Pernyataan</a></div>
                      </div>
                    </div>   
                  </div>
                  <hr class="container001 container-fluid">
                  <div class="kotak2">
                    <div class="card-form">
                      <div class="card-body">
              
                        <div class="custom-form-group">
                          <label for="nomor_pengajuan">Nomor Pengajuan</label>
                          <input type="text" id="nomor_pengajuan" class="text">
                      </div>
              
                          <span class="error-message"></span>
              
                          <div class="form-group">
                              <label for="kantor_pabean_muat_asal">Kantor Pabean Muat Asal</label>
                              <select id="kantor_pabean_muat_asal">
                                  <option value=""></option>
                                  <option value="1">Pilihan 1</option>
                                  <option value="2">Pilihan 2</option>
                                  <option value="3">Pilihan 3</option>
                              </select>
                          </div>
                          <span id="kantor_pabean_muat_asal-error" class="error-message"></span>    
              
                          <div class="form-group">
                              <label for="pelabuhan_muat_ekspor">Pelabuhan Muat Ekspor</label>
                              <select id="pelabuhan_muat_ekspor">
                                  <option value=""></option>
                                  <option value="1">Pilihan 1</option>
                                  <option value="2">Pilihan 2</option>
                                  <option value="3">Pilihan 3</option>
                              </select>
                          </div>
                          <span id="pelabuhan_muat_ekspor-error" class="error-message"></span>      
              
                          <div class="form-group">
                              <label for="kantor_pabean_muat_ekspor">Kantor Pabean Muat Ekspor</label>
                              <input type="text" id="kantor_pabean_muat_ekspor" >
                          </div>
                          <span class="error-message"></span>
              
                          <div class="form-group">
                              <label for="jenis_ekspor">Jenis Ekspor</label>
                              <select id="jenis_ekspor">
                                  <option value=""></option>
                                  <option value="1">Pilihan 1</option>
                                  <option value="2">Pilihan 2</option>
                                  <option value="3">Pilihan 3</option>
                              </select>
                          </div>
                          <span id="jenis_ekspor-error" class="error-message"></span>       
              
                          <div class="form-group">
                              <label for="kategori_ekspor">Kategori Ekspor</label>
                              <select id="kategori_ekspor">
                                  <option value=""></option>
                                  <option value="1">Pilihan 1</option>
                                  <option value="2">Pilihan 2</option>
                                  <option value="3">Pilihan 3</option>
                              </select>
                          </div>
                          <span id="kategori_ekspor-error" class="error-message"></span> 
              
                          <div class="form-group">
                              <label for="cara_dagang">Cara Dagang</label>
                              <select id="cara_dagang">
                                  <option value=""></option>
                                  <option value="1">Pilihan 1</option>
                                  <option value="2">Pilihan 2</option>
                                  <option value="3">Pilihan 3</option>
                              </select>
                          </div>
                          <span id="cara_dagang-error" class="error-message"></span>  
              
                          <div class="form-group">
                              <label for="cara_bayar">Cara Bayar</label>
                              <select id="cara_bayar">
                                  <option value=""></option>
                                  <option value="1">Pilihan 1</option>
                                  <option value="2">Pilihan 2</option>
                                  <option value="3">Pilihan 3</option>
                              </select>
                          </div>       
                          <span id="cara_bayar-error" class="error-message"></span>   
              
                          <div class="form-group">
                              <label for="komoditi">Komoditi</label>
                              <select id="komoditi">
                                  <option value=""></option>
                                  <option value="1">Pilihan 1</option>
                                  <option value="2">Pilihan 2</option>
                                  <option value="3">Pilihan 3</option>
                              </select>
                          </div>
                          <span id="komoditi-error" class="error-message"></span>
              
                          <div class="form-group">
                              <label for="curah">Curah</label>
                              <select id="curah">
                                  <option value=""></option>
                                  <option value="1">Pilihan 1</option>
                                  <option value="2">Pilihan 2</option>
                                  <option value="3">Pilihan 3</option>
                              </select>
                          </div>
                          <span id="curah-error" class="error-message"></span>
              
                      </div>
                  </div>
              
                <div class="card-button"> 
                </div>
                    
                  </div><div class="tambah2"></div>
                  </div>
                  
              </div>


      <!-- INI SIDEBAR -->
    <div class="sidebar d-none d-lg-block animate__animated animate__fadeInLeft" id="sidebar">
        <img src="Asset/logo.png" class="logoo animate__animated animate__fadeInDown">

        <a href="">
        <p class="logo1"></p> 
        </a>

        <div class="dropdown">
            <a href="#" class="dropdown-button">
              <h5 class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z"/>
                </svg>
              </h5>
              <p class="inlogo"></p>
            </a>
            <div class="dropdown-content animate__animated animate__slideInLeft">
              <a href="#" class="dropdown-item">Monitoring</a>
            </div>
          </div>

          <div class="dropdown">
            <a href="#" class="dropdown-button">
              <h5 class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
                </svg>                
              </h5>
              <p class="inlogo1"></p>
            </a>
            <div class="dropdown-content animate__animated animate__slideInLeft">
              <a href="#" class="dropdown-item">Dokumen Pabean</a>
              <a href="#" class="dropdown-item">Pengajuan Rush Handling</a>
              <a href="#" class="dropdown-item">Dokumen Barang Kiriman</a>
            </div>
          </div>

        <div class="dropdown">
          <a href="#" class="dropdown-button">
            <h5 class="logo">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16">
                <path d="M0 5a5 5 0 0 0 4.027 4.905 6.5 6.5 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05q-.001-.07.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.5 3.5 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98q-.004.07-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5m16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0m-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674z"/>
                </svg>              
            </h5>
            <p class="inlogo2"></p>
          </a>
          <div class="dropdown-content animate__animated animate__slideInLeft">
            <a href="#" class="dropdown-item">Browse Piutang</a>
            <a href="#" class="dropdown-item">Browse Billing</a>
            <a href="#" class="dropdown-item">Browse Kembalian</a>
          </div>
        </div>

        <div class="dropdown">
          <a href="#" class="dropdown-button">
            <h5 class="logo">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg>          
            </h5>
            <p class="inlogo3"></p>
          </a>
          <div class="dropdown-content animate__slideInLeft">
            <a href="#" class="dropdown-item">Pengajuan PKBSI</a>
          </div>
        </div>

        <div class="dropdown">
          <a href="#" class="dropdown-button">
            <h5 class="logo">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg>            
            </h5>
            <p class="inlogo4"></p>
          </a>
          <div class="dropdown-content animate__animated animate__slideInLeft">
            <a href="#" class="dropdown-item">Monitoring VD</a>
            <a href="#" class="dropdown-item">Monitoring VP</a>
            <a href="#" class="dropdown-item">Relasi VP</a>
          </div>
        </div>
    </div>

                  <!-- INI SIDEBAR RESPONSIVE -->
                  <div class="sidebar2  d-block d-lg-none animate__animated animate__fadeInLeft" id="sidebar2"> 
                     <a class="menu2"><div onclick="forside()">
                      <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                      </svg></div>
                    </a>
                    <img src="Asset/logo.png" class="logoo animate__animated animate__fadeInDown">
                  
            
                    <a href="">
                    <p class="logo1"></p> 
                    </a>
            
                    <div class="dropdown">
                        <a href="#" class="dropdown-button">
                          <h5 class="logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                              <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z"/>
                            </svg>
                          </h5>
                          <p class="inlogo9">Manifes</p>
                        </a>
                        <div class="dropdown-content animate__animated animate__slideInLeft">
                          <a href="#" class="dropdown-item">Monitoring</a>
                        </div>
                      </div>
            
                      <div class="dropdown">
                        <a href="#" class="dropdown-button">
                          <h5 class="logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                            <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
                            </svg>                
                          </h5>
                          <p class="inlogo9">SingleCore</p>
                        </a>
                        <div class="dropdown-content animate__animated animate__slideInLeft">
                          <a href="#" class="dropdown-item">Dokumen Pabean</a>
                          <a href="#" class="dropdown-item">Pengajuan Rush Handling</a>
                          <a href="#" class="dropdown-item">Dokumen Barang Kiriman</a>
                        </div>
                      </div>
            
                    <div class="dropdown">
                      <a href="#" class="dropdown-button">
                        <h5 class="logo">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16">
                            <path d="M0 5a5 5 0 0 0 4.027 4.905 6.5 6.5 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05q-.001-.07.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.5 3.5 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98q-.004.07-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5m16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0m-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674z"/>
                            </svg>              
                        </h5>
                        <p class="inlogo9">Bendahara</p>
                      </a>
                      <div class="dropdown-content animate__animated animate__slideInLeft">
                        <a href="#" class="dropdown-item">Browse Piutang</a>
                        <a href="#" class="dropdown-item">Browse Billing</a>
                        <a href="#" class="dropdown-item">Browse Kembalian</a>
                      </div>
                    </div>
            
                    <div class="dropdown">
                      <a href="#" class="dropdown-button">
                        <h5 class="logo">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>          
                        </h5>
                        <p class="inlogo9">PKBSI</p>
                      </a>
                      <div class="dropdown-content animate__slideInLeft">
                        <a href="#" class="dropdown-item">Pengajuan PKBSI</a>
                      </div>
                    </div>
            
                    <div class="dropdown">
                      <a href="#" class="dropdown-button">
                        <h5 class="logo">
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>            
                        </h5>
                        <p class="inlogo9">Voluntary</p>
                      </a>
                      <div class="dropdown-content animate__animated animate__slideInLeft">
                        <a href="#" class="dropdown-item">Monitoring VD</a>
                        <a href="#" class="dropdown-item">Monitoring VP</a>
                        <a href="#" class="dropdown-item">Relasi VP</a>
                      </div>
                    </div>
                </div>

    <!-- INI FOOTER -->
    <div class="footer d-none d-lg-block d-lg-block animate__animated animate__fadeInUp">
      <div class="row">
      <div class="col-10"><p>2024 @ Mahasiswa Teknologi Rekayasa Perangkat Lunak</p></div>
      <div class="col-2">
        <P><a href='#'>TIM MeTrade</a></P>
      </div>
    </div>
    </div>

    <script>
      function muncul() {
        var myDiv = document.getElementById("popup1");
        myDiv.style.display = (myDiv.style.display === "none") ? "block" : "none";
      }

      function forside() {
        var myDiv = document.getElementById("sidebar2")
        myDiv.style.visibility = (myDiv.style.visibility === "hidden") ? "visible" : "hidden";
      }

      document.getElementById('myLink').addEventListener('click', function(event) {
    event.preventDefault();
    this.classList.add('clicked'); 
  });
    </script>
</body>