<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('images/logo2.png')}}" rel="icon">
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
      height: 75vh;
      background-color: whitesmoke;
      margin-left: 95px;
      margin-top: 25px;
    }

    .ha5 {
      padding-top: 15px;
      padding-left: 20px;
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
      width: 96%;
      height: 78vh;
      background-color: whitesmoke;
      margin-top: 18px;
      margin-left: 15px;
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
      <h5 class="ha5">Pemberitahuan</h5>
      <hr>
    </div>
              <!-- INI ADALAH BADAN RESPONSIVE -->
              <div class="d-block d-lg-none thisbody2 animate__animated animate__fadeIn">
                <h5 class="ha5">Pemberitahuan</h5>
                <hr>
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
    </script>
</body>