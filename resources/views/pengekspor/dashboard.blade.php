<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1,user-scalable=no">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('images/logo2.png')}}" rel="icon">
    <link href="{{ asset('css/style.css')}}" rel='stylesheet'>
    @include('layout.headerweb')
    @include('layout.popuplogout')
    
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

    @include('layout.sidebar')
    @include('layout.footer')
    <script src="{{ asset("js/script.js")}}"></script>
</body>