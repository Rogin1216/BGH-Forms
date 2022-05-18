@extends('patients.layouts')
@section('content')
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


        <style>
            * {
                box-sizing: border-box;
            }

            body {
              /* max-width: fit-content; */
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

            .topnav {
                /* overflow: hidden; */
                background-color: #e9e9e9;
            }

            .topnav a {
                float: left;
                display: block;
                color: green;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            .topnav a.active {
                background-color: #2196F3;
                color: white;
            }

            .topnav .search-container {
                float: right;
            }

            .topnav input[type=text] {
                padding: 6px;
                margin-top: 8px;
                font-size: 17px;
                border: none;
            }

            .topnav .search-container button {
                float: right;
                padding: 6px 10px;
                margin-top: 8px;
                margin-right: 16px;
                background: #ddd;
                font-size: 17px;
                border: none;
                cursor: pointer;
            }

            .topnav .search-container button:hover {
                background: #ccc;
            }

            @media screen and (max-width: 600px) {
                .topnav .search-container {
                    float: none;
                }

                .topnav a,
                .topnav input[type=text],
                .topnav .search-container button {
                    float: none;
                    display: block;
                    text-align: left;
                    width: 100%;
                    margin: 0;
                    padding: 14px;
                }

                .topnav input[type=text] {
                    border: 1px solid #ccc;
                }
            }

            .modal-dialog {

                width: 3000px;

            }

            body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
        </style>
<!-- <div class="container-fluid border border-secondary">
  <div class="sidebar">
    <a class="active" href="#home">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div> -->



<div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="row">
        <div class="col-lg-10">
          <!-- <div class="pull-left"> -->
              <h2>Patient Info</h2>
          <!-- </div> -->
        </div>
      </div>
      
<!--JavaScript - Disable Button after Click using JavaScript Function.-->
<div class="topnav d-flex justify-content-start">
            <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/index"><img src="{{ asset('images/bghmc-logo.png') }}" class="rounded float-left align-items-center" alt="..." width="50px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/search">Search for patient</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Injury Registry Table
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/viewinjuryReg">Drafts</a>
                    <a class="dropdown-item" href="/viewAllinjuryReg">Complete Forms</a>
                    <a class="dropdown-item" href="/archive">Archive</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cancer Registry Table
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/viewCancerDraft">Drafts</a>
                    <a class="dropdown-item" href="/viewCancerComplete">Complete Forms</a>
                    </div>
                </li>
                </ul>
            </div>
            </nav>
            </div>
        </div>
    </div>
    

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
                <td><div class="dropdown">
                    <a class="btn btn-outline-primary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Edit
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/patientShow/{{$item->enccode1}}">Injury Registration Form</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/cancerForm/{{$item->enccode1}}">Cancer Registration Form</a>
                    </div>
                    </div>
                </td>
                

                <!-- <td><a class="btn btn-warning btn-sm" href="/injuryForm/{{$item->enccode1}}">print</a></td> -->
              </tr>
              @endforeach
            </tbody>
          </table>
          
      </div>
      

  </div>
  
</div>

<!-- <div class="row">
    <div class="col float-end">
    <a href="" class="btn btn-secondary btn-sm float-end" title="Patient lists">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>
    </div>
</div> -->



  @endsection

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>