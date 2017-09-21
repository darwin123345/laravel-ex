@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-9">
      <div class="panel panel-default">
        <div class="panel-body">
         <font color="green"><center><h2><div class='title'> {{$title}}</div></h2></center></font><hr>
        <ul>
          <li><a href="dl/Mission-Vision-of-PLPasig.docx" download>Pamantasan ng Lungsod ng Pasig Mission and Vision</a></li>
          <li><a href="dl/PLPasig-Hymn-Sinag-ng-Pag-asa.docx" download>Pamantasan ng Lungsod ng Pasig Hymn (Sinag ng Pag-asa)</a></li>
          <li><a href="dl/Logo-of--Pamantasan-ng-Lungsod-ng-Pasig.docx" download>Pamantasan ng Lungsod ng Pasig Logo</a></li>
          <li><a href="dl/CAS-Mission-and-Vision.docx" download>College of Arts and Sciences Mission and Vision</a></li>
          <li><a href="dl/College-of-Arts-and-Sciences-Logo.docx" download>College of Arts and Sciences Logo</a></li>
          <li><a href="dl/CBA-Mission-and-Vision.docx" download>College of Business and Accountancy Mission and Vision</a></li>
          <li><a href="dl/College-of-Business-and-Accountancy-Logo.docx" download>College of Business and Accountancy Logo</a></li>
          <li><a href="dl/CCS-Mission-and-Vision.docx" download>College of Computer Studies Mission and Vision</a></li>
          <li><a href="dl/" download>College of Computer Studies Logo</a></li>
          <li><a href="" download>College of Education Mission and Vision</a></li>
          <li><a href="" download>College of Education Logo</a></li>
          <li><a href="" download>College of Engineering Mission and Vision</a></li>
          <li><a href="" download>College of Engineering Logo</a></li>
          <li><a href="" download>College of International Hospitality Management Mission and Vision</a></li>
          <li><a href="" download>College of International Hospitality Management Logo</a></li>
          <li><a href="" download>College of Nursing Mission and Vision</a></li>
          <li><a href="" download>College of Nursing Logo</a></li>
        </ul>
      </div>
    </div>
   </div>
    <div class="col-lg-3">
      <div class="panel panel-default">
        <div class="panel-body">
        @include('inc.twitter')
         </div>
      </div> 
    </div>
  </div>
</div>
@endsection