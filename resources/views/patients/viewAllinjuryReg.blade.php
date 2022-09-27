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
                        <h2>Injury Registry(Complete forms)</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="">
                        
                    </div>
                </div>
            </div>




        
            <div class="topnav">
            <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/search"><img src="{{ asset('images/bghmc-logo.png') }}" class="rounded float-left align-items-center" alt="..." width="50px" height="50px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="collapse navbar-collapse" id="navbarNav">
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

                </ul>
                
            </div> -->
            <div class="col-auto">
                <!-- Authentication -->
                    <a href="logout">Logout <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
</svg></a>

                </div>
            </nav>
            </div>
        </div>


        <div class="sidenav">
  <a href="/search">Search <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></a>
  <hr>
  <a href="/viewinjuryReg">Drafts <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
  <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
</svg></a>
  <hr>
  <a href="/viewAllinjuryReg">Complete <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-check" viewBox="0 0 16 16">
  <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
  <path d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.707 0l-1.5-1.5a.5.5 0 0 1 .707-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg></a>
  <hr>
  <a href="/archive">Archive <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
  <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg></a>
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
                <th>Date Completed</th>
                <th>Status</th>
                <!-- <th></th> -->
            </tr>
            <tbody>
            <!-- <form action="/infoNext" type="get"> -->
                <tr>@foreach($all as $a)
                    <form action="/exportbulk" type="get">
                
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $a->patfirst}} {{ $a->patmiddle}} {{ $a->patlast}}</td>
                    <td>{{ $a->docAdmit}} </td>
                    <td>{{ $a->date_completed}} </td>
                    <td>{{ $a->status}}</td>
                    
                    <!-- <td>
                      <a href="">export to excel</a>
                    </td> -->
                    
                </tr>
                
                <!--MODAL FOR EACH PATIENT INFO-->
                
                @endforeach 
                </tbody>
                </table>
                <input type="hidden" id="account_name" name="account_name" value="{{$loginId}}">
                        <input type="hidden" id="date_exported" name="date_exported" value="{{ date('F j, Y, g:i a') }}">
                <div class="col-auto float-end">
                            <button type="submit" id="hidden" class="btn btn-outline-success d-print-none" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                            <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                            </svg> Excel</button>
                    </form>
                       
                

                    <form action="/setArchive" type="get">
                        <!-- <form action="/setArchive" type="get"> -->
                            <input type="hidden" value="hidden" id="status">
                            <button  type="submit" value="archive" name="status" id="shown" class="btn btn-outline-success d-print-none "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-check" viewBox="0 0 16 16">
                            <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
                            <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
                            <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3Z"/>
                            </svg>Done</button>
                    </form>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                        <script>
                        $(document).ready(function(){
                            $('#hidden').show();
                            $('#shown').hide();
                            $('button').click(function(){
                                $('#hidden').hide();
                                $('#shown').show();
                        });
                        // $('#hidden').click(function(){
                        //     console.log(new Date().toUTCString());
                        //     swal({
                        //         text: 'Enter CSV title',
                        //         content: "input",
                        //         button: {
                        //             text: "Submit",
                        //             closeModal: true,
                        //         },
                        //         })
                        //         .then((response)=>{
                        //             console.log('response');
                        //             jQuery.ajax({
                        //                 url:'/exportbulk', 
                        //                 type:'get',
                        //                 // data: {'provc': provc,
                        //                 //     "_token": "{{ csrf_token() }}",
                        //                 // },
                        //             })
                        //         })
                        // })

                        
                    });
                    // function clickMe(){
                    //         console.log('click me');
                    //         swal({
                    //             text: 'Enter CSV title',
                    //             content: "input",
                    //             button: {
                    //                 text: "Submit",
                    //                 closeModal: false,
                    //             },
                    //             });
                    //     }

                //     jQuery('#hidden').change(function() {
                //         alert('hidden');
                //     let provc=jQuery(this).val();
                //     // alert (provc);
                //     jQuery.ajax({
                //         url:'/getProv', 
                //         type:'post',
                //         data: {'provc': provc,
                //             "_token": "{{ csrf_token() }}",
                //         },
                //         success:function(result){ 
                //             jQuery('#Pat_Facility_City').html(result)
                //         }
                //     })
                // });
                        </script>

                </div> 
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
