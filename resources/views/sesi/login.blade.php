<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>Login</title>
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
      width:100%;
    }
    .gam1{
      margin-bottom: 13px;
    }
    .inputa1{
      margin-bottom: 10px;
    }
    </style>

    @if(session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
    @endif
</head>
<body>
    <div class="row">
        <div class="col-md-6 col-lg-6 d-none d-sm-block">
            <img src="{{asset('images/polibatam.jpg')}}" class="img1 img-fluid">
        </div>
        <div class="class2 col-md-6 col-lg-6 col-sm-12">
            <div class="position-static">
            <div class="container animate__animated animate__fadeInRight">
            <img src="{{asset('images/logo2.png')}}" width="25%" class="gam1 mx-auto d-block">
            <h4 class="text1 d-flex justify-content-center"><b>Selamat Datang Di MeTrade</b></h4>
            <p class="text1 d-flex justify-content-center">Portal Pengguna Jasa Direktorat Jendral Bea Dan Cukai Aplikasi Dummy Ceisa 4.0 Dari Politeknik Negeri Batam</p>

            <!-- INI UNTUK USERNAME -->
            <form method="POST">
              @csrf
            <div class="input-group has-validation inputa1">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                </svg></span>
                <div class="form-floating">
                  <input type="text" class="form-control input1" name="username" id="floatingInputGroup2" placeholder="Username" required>
                  <label for="floatingInputGroup2">Username</label>
                </div>
              </div>

            <!-- INI UNTUK PASSWORD -->
              <div class="input-group has-validation inputa">
                <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                  <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8m4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5"/>
                  <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                </svg></span>
                <div class="form-floating">
                  <input type="password" class="form-control input1" name="password" id="floatingInputGroup2" placeholder="Password" required>
                  <label for="floatingInputGroup2">Password</label>
                </div>
              </div>

              <!-- INI TOMBOL KIRIM DAN PENDAFTARAN BARU-->
              <a href={{url('regis')}}><p>Pendaftaran Baru</p></a> 
              <a>
              <input class="btn btn-primary kirim" type="submit" value="Masuk">
              </a>
              
            </form>

            </div>
            </div>
        </div>
    </div>
    <script>
    </script>
</body>
</html>