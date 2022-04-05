@extends('patients.layouts')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    

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
              <a href="/patientform" class="btn btn-outline-primary " role="button"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="blue" class="bi bi-house" viewBox="0 0 16 16">
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



        <table class="table table-bordered table-responsive-lg">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>hpercode</th>

                <th width="280px">Action</th>
            </tr>
            <tbody>

                @foreach($all as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->patfirst}} {{ $item->patmiddle}} {{ $item->patlast}}</td>
                    <td>{{ $item->hpercode}}</td>
                    <td>
                      <a href="/showID/{{$item->hpercode}}">show</a>

                    </td>
                </tr>
                
                @endforeach
                </tbody>
    </table>
    </div>

    
    {{$all->links()}}

    @endsection
