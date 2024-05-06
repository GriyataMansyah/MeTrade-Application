<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>Registrasi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('images/logo2.png')}}" rel="icon">
    <style>
    body {
        height: 100vh;
        width: 100%;
    } 
    .class2 {
      height: 100vh;  
    }
    .container{
        justify-content: center;
        align-items: center;
        margin-top:15%;
        width:70%; 
    }
    .img1 {
      width:100%;
      height:100vh;
    }
    a {
    text-decoration: none;
    }
    .text1{
      text-align: center;
    }
    .kirim {
      width:30%;
    }
    .gam1{
      margin-bottom: 13px;
    }
    .inputa1{
      margin-bottom: 10px;
    }
    .inputa12{
      margin-bottom: 10px;
      width:50%;
    }
    .inputa123{
      margin-bottom: 10px;
      width:50%;
      margin-right: 8px;
    }
    .rowpass{
      display: flex;
      flex-direction: row;
    }
    .batal{
      width:30%;
    }
    .tombol2{
    text-align: right;
    }
    .p {
      overflow:hidden;
    }
    </style>
    @if (session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
@endif
</head>
<body>
    <div class="row">
        <div class="col-md-6 col-lg-6 d-none d-sm-block">
            <img src="{{ asset('images/polibatam.jpg')}}" class="img1 img-fluid">
            <script src="{{asset('js/script.js')}}"></script>
        </div>
        <div class="class2 col-md-6 col-lg-6 col-sm-12">
            <div class="container animate__animated animate__fadeInRight">
              <h5>DATA PENGGUNA BARU</h5>
              <hr>
                <!-- INI UNTUK NOMOR IDENTITAS/NPWP -->
                <form method="post" action="{{ route('reg') }}">
                  @csrf
                <div class="input-group has-validation inputa1">
                    <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16">
                      <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                      <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z"/>
                    </svg></span>
                    <div class="form-floating">
                      <input type="text" class="form-control input1" id="floatingInputGroup2" placeholder="Nomor Identitas (NPWP)" name="npwp" onkeypress="return hanyaAngka(event)" required>
                      <label for="floatingInputGroup2">Nomor Identitas (NPWP)</label>
                    </div>
                  </div>
    
                <!-- INI UNTUK NAMA LENGKAP -->
                  <div class="input-group has-validation inputa1">
                    <span class="input-group-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                      <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                    </svg></span>
                    <div class="form-floating">
                      <input type="text" class="form-control input1" id="floatingInputGroup2" placeholder="Nama Lengkap" name="nama" required>
                      <label for="floatingInputGroup2">Nama Lengkap</label>
                    </div>
                  </div>
        
                    <!-- INI UNTUK No Telepon -->
                      <div class="input-group has-validation inputa1">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg></span>
                        <div class="form-floating">
                          <input type="text" class="form-control input1" id="floatingInputGroup2" placeholder="No Telepon" name="no_hp" onkeypress="return hanyaAngka(event)" >
                          <label for="floatingInputGroup2">No Telepon</label>
                        </div>
                      </div>
                      <!-- INI UNTUK E-mail -->
                
                    <div class="input-group has-validation inputa1">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                        </svg></span>
                        <div class="form-floating">
                          <input type="email" class="form-control input1" id="floatingInputGroup2" placeholder="E-mail" name="email" required>
                          <label for="floatingInputGroup2">E-mail</label>
                        </div>
                      </div>
        
                    <!-- INI UNTUK Nama Pengguna -->
                      <div class="input-group has-validation inputa1">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                        </svg></span>
                        <div class="form-floating">
                          <input type="text" class="form-control input1" id="floatingInputGroup2" placeholder="Nama Pengguna" name="username" required>
                          <label for="floatingInputGroup2">Nama Pengguna</label>
                        </div>
                      </div>

                    <div class="rowpass">
                      <!-- INI UNTUK Password -->
                      <div class="input-group has-validation inputa123">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                          <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/>
                          <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                        </svg></span>
                        <div class="form-floating">
                          <input type="password" class="form-control input1" id="floatingInputGroup2" placeholder="Password" name="password" required>
                          <label for="floatingInputGroup2">Password</label>
                        </div>
                      </div>

                       <!-- INI UNTUK Verif Password -->
                       <div class="input-group has-validation inputa12">
                        <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                          <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/>
                          <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                        </svg></span>
                        <div class="form-floating p">
                          <input type="password" class="form-control input1" id="floatingInputGroup2" placeholder="Konfirmasi Password" name="confirmedPassword" required>
                          <label for="floatingInputGroup2">Konfirmasi Password</label>
                        </div>
                      </div>
                     </div>
                     <hr>
    
                  <!-- INI TOMBOL KIRIM-->
                  <div class="tombol2">
                  <a href="{{ url('/')}}">
                  <input class="btn btn-danger kirim" type="button" value="Batal">
                  </a>
                  <input class="btn btn-primary batal" type="submit" value="Masuk">
                  </div>
                  
                </form>
    
      

            
        </div>
    </div>
</body>
</html>