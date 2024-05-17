<?php
    $Auth = Auth::id();
    $loggedInUserId =  \App\Models\petugas::where('id_akun', $Auth)->value('id');
    $pengeksporData = \App\Models\petugas::where('id', $loggedInUserId)->get();
?>
<!-- INI HEADER -->
<div class="d-none d-lg-block">
    <div class="row header animate__animated animate__fadeInDown">
      
      @foreach ($pengeksporData as $A)
      <div class="col-12 letaktom">
        <button class="a1 btn btn-secondary" onclick="muncul()">HI, <b>{{ $A->nama}}</b></button>
      </div>
      @endforeach
      <hr class="col-12 hrs">
      </hr>
  
      <div class="col-12">
        <p class="cei">CEISA 4.0</p>
      </div>
    </div>
  </div>
  
  <!-- INI RESPONSIVE HEADER-->
  <div class="d-block d-lg-none">
    <div class="row header2 animate__animated animate__fadeInDown">
  
      <div class="col-12 letaktom2">
        <a class="menu">
          <div onclick="forside()">
            <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" fill="currentColor" class="bi bi-list"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
            </svg>
          </div>
        </a>
        <a class="a12" onclick="muncul()" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45"
            fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path
              d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
          </svg></b></a>
      </div>
  
      <div class="col-12 hrs">
      </div>
  
      <div class="col-12">
        <p class="cei2">CEISA 4.0</p>
      </div>
    </div>
  </div>