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
            .sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: green;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
}

.sidenav a:hover {
  color: #818181;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}





        </style>
                <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
<div class="row">
    <div class="col-lg-12 margin-tb">
            <div class="row">
                <div class="col col-lg-10">
                    <div class="pull-left">
                        <h2>Injury Registry(Archive)</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        
                    </div>
                </div>
            </div>

        


        
        <div class="topnav d-flex justify-content-start">
            <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/index"><img src="{{ asset('images/bghmc-logo.png') }}" class="rounded float-left align-items-center" alt="..." width="50px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Registry
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/search">Injury Registry</a>
                    <a class="dropdown-item" href="/searchCancer">Cancer Registry</a>
                    </div>
                </li>
                <!-- <li class="nav-item active">
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
                </li> -->
                </ul>
                <div class="col">
                <!-- Authentication -->
                    <a href="logout">Logout</a>

                <!-- <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form> -->
                </div>
            </div>
            </nav>
            </div>
        </div>


<div class="sidenav">
  <a href="/search">Search</a>
  <hr>
  <a href="/viewinjuryReg">Drafts</a>
  <hr>
  <a href="/viewAllinjuryReg">Complete</a>
  <hr>
  <a href="/archive">Archive</a>
  <hr>
</div>
    
    <div class="div">
        
    </div>
    <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>No</th>
                <!-- <th>Name</th> -->
                <th>Name</th>
                <th>Admitted By:</th>
                <th>hpercode</th>
                <th>Date Completed</th>
                <th>Status</th>
                <!-- <th></th> -->
            </tr>
            <tbody>@foreach($all as $item)
            <!-- <form action="/infoNext" type="get"> -->
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->patfirst}} {{ $item->patmiddle}} {{ $item->patlast}}</td>
                    <td>{{ $item->docAdmit}} </td>
                    <td>{{ $item->hpercode}} </td>
                    <td>{{ $item->date_completed}} </td>
                    <td>{{ $item->status}} </td>
                    <!-- <td><input type="checkbox" name="selected[]" id="selected" value="{{ $item->ENCCODE}}"></td> -->
                    <!-- <td>
                      <a href="">export to excel</a>
                    </td> -->
                </tr>
                <!--MODAL FOR EACH PATIENT INFO-->
                
                @endforeach
                </tbody>
    </table>
                
    </div>
    
</div>
<!-- @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif -->


  @endsection

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
