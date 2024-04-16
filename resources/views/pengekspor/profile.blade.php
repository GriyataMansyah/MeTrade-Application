<?php
$loggedInUserId = Auth::id();
$pengeksporData = \App\Models\pengekspor::where('id', $loggedInUserId)->get();
$akuns = \App\Models\Akun::where('id', $loggedInUserId)->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>MyProfile</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('images/logo2.png')}}" rel="icon">
</head>
  @include("layout.headerweb")
  @include("layout.popuplogout")
       <!-- INI BADANNYA -->
       <div class="d-none d-lg-block animate__animated animate__fadeIn">
        <div class="thisbody row">
          <div class="col-4 badan1">
            <div class="row wrap">
            <img src="{{ asset("images/logo.png")}}" class="gam1 col-12 mx-auto d-bloc">
            <div class="col-12">
              <h5><b>Level Akses:</b></h5>
              <p>User Portal Manifes</p>
              <br>
              <h5><b>Role Dokumen Pabean:</b></h5>
              <p>Ekspor BC 3.0</p>
            </div>
          </div>
          </div>
          @foreach ($pengeksporData as $A)
          <div class="col-8 badan2">
            <div class="pembungkus">
            <div class="row">
              <div class="col-6">
                <b>NPWP:</b><br>
                <p>{{ $A->npwp }}</p>
              </div>
              <div class="col-6">
                <b>NIB:</b><br>
                <p>34633</p>
              </div>
            </div>
            <div class="col-12 putih">.</div>
            <div class="row">
              <div class="col-6">
                <b>Nama Perusahaan:</b><br>
                <p>Mc Astaaa Mannn</p>
              </div>
              <div class="col-6">
                <b>Alamat Perusahaan:</b><br>
                <p>Jl.Imam Bonjol Semenanjung Pdang Tinggi</p>        
              </div>
              <div class="col-12 putih">
                .
              </div>
            </div>
            <div class="row">
              <dov class="col-12">
                <b>Nama:</b><br>
                <p>{{ $A->nama }}</p>
              </dov>
              <div class="col-12 putih">
                @endforeach
              </div>
            </div>
            @foreach ($akuns as $B)  
            <div class="row">
              <div class="col-6">
              <b>Username:</b><br>
              <p>{{ $B->username}}</p>
            </div>
            @endforeach
            <div class="col-6">
              <b>Password:</b><br>
              <p>**************
                <a href="" type="button" class="pad"data-bs-toggle="modal" data-bs-target="#Modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
              </svg></a></p>
            </div>
            <div class="col-12 putih">
              .
            </div>
            </div>
            @foreach ($pengeksporData as $A)
            <div class="row">
              <div class="col-6">
              <b>E-mail:</b><br>
              <p>{{ $A->email}}
                <a href="" type="button" class="pad"data-bs-toggle="modal" data-bs-target="#Modalemail"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg></a>
              </p>
            </div>
            <div class="col-12 putih">
              .
            </div>
            </div>
            <div class="row">
              <div class="col-12">
                <b>Phone:</b><br>
                <p>{{ $A->no_hp}}
                  <a href="" type="button" class="pad"data-bs-toggle="modal" data-bs-target="#Modalphone"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                  </svg></a>
                </p>
              </div>
            </div>
            @endforeach
          </div>
          </div>
        </div>
      </div>
              <!-- INI ADALAH BADAN RESPONSIVE -->
              <div class="d-block d-lg-none animate__animated animate__fadeIn">
              <div class="thisbody2 row ">
                <div class="col-4 badan1">
                  <div class="row wrap">
                  <img src="{{ asset("images/logo.png")}}" class="gam1 col-12 mx-auto d-bloc">
                  <div class="col-12">
                    <h5><b>Level Akses:</b></h5>
                    <p>User Portal Manifes</p>
                    <br>
                    <h5><b>Role Dokumen Pabean:</b></h5>
                    <p>Ekspor BC 3.0</p>
                  </div>
                </div>
                </div>
                <div class="col-8 badan2">
                  <div class="pembungkus">
                  <div class="row">
                    @foreach ($pengeksporData as $A)
                    <div class="col-md-6 col-sl-12">
                      <b>NPWP:</b><br>
                      <p>{{ $A->npwp}}</p>
                    </div>
                    <div class="col-6">
                      <b>NIB:</b><br>
                      <p>34633</p>
                    </div>
                  </div>
                  <div class="col-12 putih">.</div>
                  <div class="row">
                    <div class="col-md-6 col-sl-12">
                      <b>Nama Perusahaan:</b><br>
                      <p>Mc Astaaa Mannn</p>
                    </div>
                    <div class="col-6">
                      <b>Alamat Perusahaan:</b><br>
                      <p>Jl.Imam Bonjol Semenanjung Pdang Tinggi</p>        
                    </div>
                    <div class="col-12 putih">
                      .
                    </div>
                  </div>
                  <div class="row">
                    <dov class="col-12">
                      <b>Nama:</b><br>
                      <p>{{ $A->nama}}</p>
                    </dov>
                    <div class="col-12 putih">
                      . @endforeach
                    </div>
                  </div>
                  @foreach ($akuns as $B)
                  <div class="row">
                    <div class="col-md-6 col-sl-12">
                    <b>Username:</b><br>
                    <p>{{ $B->username}}</p>
                  </div>
                  @endforeach
                  <div class="col-6">
                    <b>Password:</b><br>
                    <p>**************
                      <a href="" type="button" class="pad"data-bs-toggle="modal" data-bs-target="#Modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                      </svg></a>
                    </p>
                  </div>
                  <div class="col-12 putih">
                    .
                  </div>
                  </div>
                  @foreach ($pengeksporData as $A)
                  <div class="row">
                    <div class="col-6">
                    <b>E-mail:</b><br>
                    <p>{{ $A->email}}
                      <a href="" type="button" class="pad"data-bs-toggle="modal" data-bs-target="#Modalemail"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                      </svg></a>
                    </p>
                  </div>
                  <div class="col-12 putih">
                    .
                  </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <b>Phone:</b><br>
                      <p>{{ $A->no_hp}}
                        <a href="" type="button" class="pad"data-bs-toggle="modal" data-bs-target="#Modalphone"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg></a>
                      </p>
                    </div>
                  </div>
                  @endforeach
                </div>
                </div>
              </div>
            </div>

    @include('layout.profilepopuppassword')
    @include('layout.profilepopupemail')
    @include('layout.profilepopupphone')   
    @include('layout.sidebar')
    @include('layout.footer')
    <script src="{{ asset('js/script.js')}}"></script>
</body>