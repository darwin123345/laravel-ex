@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <div class="panel panel-default">
        <div class="panel-body">
        <center><h2><b>{{$title}}</b><h2> <hr>
           
            <h3>Sinag ng Pag-asa</h3>
            <p> Sariwain ang nagdaan<br>Nang kamiy yong alagaan<br>Pusot isip iyong binuksan<br>Talino ay pinagyaman<br>
            <br>
            Batang isip pinalitan<br>Pinuspos ng karunungan<br>Tulad ng bakal yong pinanday<br>Tumibay ang katauhan<br><br>Chorus:<br>
            <br>Pamantasan ng Lungsod ng Pasig <br>Tanglaw ka sa aming bayan<br>Iyong pamana laging buhay<br>Saming dibdib nakaukit<br>Pamantasan ng Lungsod ng Pasig<br>Sinag ka ng pag-asa<br>
            <br>Bagong umagay di na pangarap<br>Tagumpay natin nakamtan na<br>Pamantasan ng Lungsod ng Pasig<br>Buhay pag-asa ng bayan ko</p>
            <audio controls autoplay>
              <source src="image/snp.mp3" type="audio/mp3">
            </audio>     
            </center>    
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <font color="green"><h3><p>Contents:</p> </h3></font>
            <ul>
              <li><a href="/mav">Mission and Vision</a></li>
              <li><a href="/history">History</a></li>
              <li><a href="/logo_and_symbol">Logo and Symbol</a> </li>
              <li><a href="/acads">Academic Calendar</a> </li>
              <li><a href="/map">Map</a></li>
              <li><a href="/rules">Rules and Regulation</a> </li>
            </ul>
          </div>
        </div>
         <div class="panel panel-default">
             @include('inc.twitter')
            </div> 
      </div> 
    </div>
  </div>
</div>
@endsection