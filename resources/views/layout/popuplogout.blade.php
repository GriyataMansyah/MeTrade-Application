<?php
$loggedInUserId = Auth::id();
$pengeksporData = \App\Models\pengekspor::where('id', $loggedInUserId)->get();
?>
<!-- INI POP UP LOG OUT -->
<div class="popup position-absolute top-0 end-0 animate__animated animate__headShake" id="popup1">
  @foreach ($pengeksporData as $A)
    <div class="col-12 patas">
      <img src="{{ asset('images/logo2.png')}}" class="hay">
      <a href="#">
        <h2 class="teman">{{ $A->nama}}</h2>
      </a>
    </div>
    @endforeach
    <div class="col-12 pbawah">
      <a href="{{ url('/profile')}}" class="a4">
        <svg class="svg1" xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor"
          class="bi bi-person-square" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
          <path
            d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
        </svg>
        <div class="tulis">
          <p class="p0">My Profile</p>
          <p class="p01">Acount Settings And More</p>
        </div>
      </a>
      <hr class="h0">
        <a type="submit" href="{{ route('logout')}}" class="yebtn btn btn-outline-danger">Log Out</a> 
    </div>
  </div>