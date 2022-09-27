@extends('patients.layouts')
@section('content')
<head>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>
</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-light flex-md-nowrap p-1">
    <a class="navbar-brand" href="/search"><img src="{{ asset('images/bghmc-banner.png') }}" class="rounded float-left align-items-center" alt="..." width="300px" height="30px"></a>
    
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap logout">
          <!-- <a class="nav-link" href="#">Sign out</a> -->
          <a href="logout">Logout <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                    </svg></a>
        </li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block text-light bg-success sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/search" class="link-light active"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg> Search</a>
                    </li>
                    <li class="nav-item">
                        <a href="/viewinjuryReg" class="link-light"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
                        <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
                        </svg> Drafts</a>
                    </li>
                    <li class="nav-item">
                        <a href="/viewAllinjuryReg" class="link-light"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-check" viewBox="0 0 16 16">
                        <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
                        <path d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.707 0l-1.5-1.5a.5.5 0 0 1 .707-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        </svg> Complete</a>
                    </li>
                    <li class="nav-item">
                        <a href="/archive" class="link-light"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                        <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg> Archive</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="col">
        <div class="form-group row">
@foreach($patInfo as $item)  
      <div class="form-group col-auto">
          <label>First Name:</label>
          <label name="firstName" id="firstName" class="form-control"
              value="{{$item->patfirst}}" disabled>{{$item->patfirst}} </label></br>
      </div>
      <div class="form-group col-auto">
          <label>Middle Name:</label>
          <label name="middlename" id="middlename" class="form-control"
              value="{{$item->patmiddle}}" disabled>{{$item->patmiddle}} </label></br>
      </div>
      <div class="form-group col-auto">
          <label>Last Name:</label>
          <label name="middlename" id="lastname" class="form-control"
              value="{{$item->patlast}}" disabled>{{$item->patlast}} </label></br>
      </div>
      @endforeach

      <div class="col-auto border border-secondary-left">
        
          <table class="table tb-sm table-hover">
            <thead>
                <tr>
                  <th>Type</th>
                  <th>Admission date</th>
                  <th>Admission time</th>
                  <th>Discharge date</th>
                  <th>Discharge time</th>
                  <th></th>
                  <th></th>
                </tr>
            </thead>
            <tbody>
        @foreach($encounters as $item)
              <tr>
                <td>{{$item->toecode}}</td>
                <!-- <td>{{$item->admdate ?? null ?: '--' }}</td> -->
                <script>
                </script>
                <td>{{date('F j,Y',  strtotime($item->admdate))}}</td>
                <td>{{date('g:i a',  strtotime($item->admdate))}}</td>
                <!-- <td>{{$item->disdate ?? null ?: '--' }}</td> -->
                <td>{{date('F j,Y', strtotime($item->disdate ))}}</td>
                <td>{{date('g:i a', strtotime($item->disdate ))}}</td>
                        
                <td><a class="btn btn-outline-primary btn-sm" href="/patientShow/{{$item->enccode1}}">Injury Registry Form</a></td>
                <!-- <td><div class="dropdown">
                    <a class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Edit
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/patientShow/{{$item->enccode1}}">Injury Registration Form</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/cancerForm/{{$item->enccode1}}">Cancer Registration Form</a>
                    </div>
                    </div>
                </td> -->
                <!-- <td><a class="btn btn-warning btn-sm" href="/injuryForm/{{$item->enccode1}}">print</a></td> -->
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
        </div>
    </div>
</div>
</div>
<footer>
    <div class="row">
        <div class="col">
            Login id
        </div>
    </div>
</footer>
</body>
<style>
.sidebar li , .sidebar a:link{
  padding: 13px;
  font-size: 20px;
  text-decoration: none;
  width: 100%;
  display: inline-block;
}
.sidebar a.active {
  border-bottom: 3px solid yellow;
  padding-left: 5px;
  color: yellow;
}
.sidebar li.hover {
  color: black;
}
.sidebar a:hover{
  background-color: yellowgreen;
  width: 100%;
  color: black;
}
.nav-link{
    background-color: red;
}
label{
    font-size: 30px;
}
/* .logout{
    border: 1px solid red;
    padding: 8px;
    border-radius: 5px 5px 5px 5px;
} */
footer{
    background-color: #f1f4f8;
    padding: 10px;
}
</style>
@endsection