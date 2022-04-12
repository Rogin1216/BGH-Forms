@extends('patients.layouts')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

            .topnav {
                overflow: hidden;
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

        </style>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Patient Info</h2>
        </div>
        <div class="topnav d-flex justify-content-center">
         
            <div class="row">
              <div class="col-auto">
              <a href="/patientlists" class="btn btn-outline-primary " role="button"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="blue" class="bi bi-house" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                  </svg>
              </a>
              <form action="{{ url ('/search') }}" class="form-inline" type="get">
              </div>
                <div class="col-auto">
                        {{csrf_field()}}
                        <input type="search" class="form-control" name="query" placeholder="Search..">
                </div>
                <div class="col-auto">
                        <button type="submit" class="btn btn-outline-primary"><i class="fa fa-search"></i>Go</button>
                </div>
         </form>
                
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
        
          <table class="table tb-sm">
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
                    <a class="btn btn-primary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Edit
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/patientShow/{{$item->enccode}}">Injury Registration Form</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/cancerForm/{{$item->enccode}}">Cancer Registration Form</a>
                    </div>
                    </div>
                </td>
                

                <!-- <td><a class="btn btn-warning btn-sm" href="/injuryForm/{{$item->enccode}}">print</a></td> -->
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