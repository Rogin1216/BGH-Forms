@extends('patients.layouts')
@section('content')
<html>
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
<nav class="navbar navbar-dark fixed-top bg-light flex-md-nowrap p-1">
    <a class="navbar-brand" href="/search"><img src="{{ asset('images/bghmc-banner.png') }}" class="rounded float-left align-items-center" alt="..." width="350px" height="30px"></a>
    <i>Account Name: {{$loginId}}</i> 
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap logout">
          <!-- <a class="nav-link" href="#">Sign out</a> -->
          <a href="logout">Logout <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                    </svg></a>
        </li>
    </ul>
</nav>

<!-- <div class="container-fluid border border-success"> -->
    <div class="content">
        <nav class="col-md-1 d-none d-md-block text-light bg-success sidebar">
            <div class="sticky">
                <!-- <div class="fixed-bottom"> -->
                    <ul class="nav flex-column">
                        <li class="nav_list">
                            <a href="#search" class="nav_link active">Search</a>
                        </li>
                        <li class="nav_list">
                            <a href="#drafts" class="nav_link">Drafts</a>
                        </li>
                        <li class="nav_list">
                            <a href="#complete" class="nav_link">Complete</a>
                        </li>
                        <li class="nav_list">
                            <a href="#archive" class="nav_link">Archive</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#search" class="link-light active"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg> Search</a>
                        </li>
                        <li class="nav-item">
                            <a href="#drafts" class="link-light"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
                            <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
                            </svg> Drafts</a>
                        </li>
                        <li class="nav-item">
                            <a href="#complete" class="link-light"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-check" viewBox="0 0 16 16">
                            <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
                            <path d="M15.854 10.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.707 0l-1.5-1.5a.5.5 0 0 1 .707-.708l1.146 1.147 2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            </svg> Complete</a>
                        </li>
                        <li class="nav-item">
                            <a href="#archive" class="link-light"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            </svg> Archive</a>
                        </li> -->
                    </ul>
                </div>
            <!-- </div> -->
        </nav>
        <!-- <div class="col border border-danger"> -->
        <div class="dashboard">

        <section id="search">
            <div>
                <label class="">Injury Patient Lists</label>
            </div>
            
            <div class="table-responsive shadow p-3 bg-white rounded">
            <table class="table table-bordered table-hover">
                        <thead>   
                            <tr>
                                <th colspan="3">
                                <form action="{{ url ('/searchfilter') }}" class="form-inline" type="get">
                                        {{csrf_field()}}
                                        <div class="row">
                                        <div class="col-md-6">
                                            <input  class="form-control" type="text"name="query" placeholder="Enter hpercode/patient name..">
                                            
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- <div class="col-auto d-flex align-items-center">
                                        Sort by:
                                        </div>
                                        <div class="col">
                                             
                                        <select class="form-select border border-warning" aria-label="Default select example">
                                            <option value="1" selected>All</option>
                                            <option value="1">Drafts</option>
                                            <option value="2">Complete</option>
                                            <option value="3">Archive</option>
                                        </select>
                                        </div> -->
                                        </div>
                                </form>
                                </th>
                                <!-- <th>Name</th> -->
                                <!-- <th>Hpercode</th> -->
                                <th colspan="2">Admission Date & Time (2022)</th>
                                <th colspan="2">Discharge Date & Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                @foreach($searchResult as $item)
                <tr>
                                <td>{{$item->hpercode}}</td>
                                <td>{{$item->patfirst}} {{$item->patmiddle}} {{$item->patlast}}
                                @if($item->status =='archive')
                                        <a href="#archive" class="text-decoration-none" ><sup class="border border-danger p-1 rounded-pill text-danger"> Archive </sup></a>
                                @elseif($item->status=='completeForm')
                                        <a href="#complete" class="text-decoration-none"><sup class="border border-success p-1 rounded-pill text-success"> Ready to Export! </sup></a>
                                @elseif($item->status=='drafts')
                                        <a href="#drafts" class="text-decoration-none"><sup class="border border-warning p-1 rounded-pill text-warning">In Drafts</sup></a>
                                @endif</td>
                                </td>
                                <td>{{$item->toecode}}</td>
                                <td>{{date('F j,Y',  strtotime($item->admdate))}}</td>
                                <td>{{date('g:i a',  strtotime($item->admdate))}}</td>
                                <td>{{date('F j,Y',  strtotime($item->disdate))}}</td>
                                <td>{{date('g:i a',  strtotime($item->disdate))}}</td>
                                <td><a class="btn btn-outline-primary btn-sm" href="/patientShow/{{$item->enccode1}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
  <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
</svg> Form</a></td>
                            </tr>
                @endforeach
                </tbody>
                    </table>
            </div>
            </section>


            <section id="drafts">
            <div>
                <label class="">Draft Table</label>
            </div>
            <div class="table-responsive shadow p-3 bg-white rounded mb-8">
            <table class="table table-bordered table-hover">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Admitted By:</th>
                <th>Date Completed</th>
                <th>Hospital Code</th>
                <th>Status</th>
                <th></th>
                <!-- <th width="280px">Action</th> -->
            </tr>
            <tbody>

                @foreach($drafts as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->patfirst}} {{ $item->patmiddle}} {{ $item->patlast}}</td>
                    <td>{{ $item->docAdmit}}</td>
                    <td>{{ $item->date_completed}}</td>
                    <td>{{ $item->hpercode}}</td>
                    <td>{{ $item->status}}</td>
                    <td>

                    <div class="dropdown">
                    <!-- <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/patientShow/{{$item->enccode}}">Edit</a></li>
                        <li><a class="dropdown-item" href="/export/{{$item->enccode}}" ><input type="hidden" name="sendToExport" id="sendToExport" value="completeForm"> Export</a></li>
                    </ul>
                    </div> -->
                    <div class="dropdown">
                    <a class="btn btn-outline-warning btn-sm" href="/patientShow/{{$item->enccode}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg> Edit</a>
                    <!-- <input type="checkbox" name="sendToExport" value="completeForm"> -->
                    </div>
                    
                      <!-- <a class="btn btn-success btn-sm " href="/patientShow/{{$item->enccode}}">Edit</a>
                      <a class="btn btn-danger btn-sm " href="/patientShow/{{$item->enccode}}">To export lists</a> -->
                    </td>
                </tr>

                
                @endforeach
                </tbody>
                    </table>
            </div>
            </section>
            <section id="complete">
            <div>
                <label class="">Complete and ready to Bulk Export</label>
            </div>
            <div class="table-responsive shadow p-3 bg-white rounded mb-8">
            <table class="table table-bordered table-hover">
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
                <tr>@foreach($complete as $a)
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
                            <button type="submit" id="hidden" class="btn btn-outline-success d-print-none" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-csv" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.517 14.841a1.13 1.13 0 0 0 .401.823c.13.108.289.192.478.252.19.061.411.091.665.091.338 0 .624-.053.859-.158.236-.105.416-.252.539-.44.125-.189.187-.408.187-.656 0-.224-.045-.41-.134-.56a1.001 1.001 0 0 0-.375-.357 2.027 2.027 0 0 0-.566-.21l-.621-.144a.97.97 0 0 1-.404-.176.37.37 0 0 1-.144-.299c0-.156.062-.284.185-.384.125-.101.296-.152.512-.152.143 0 .266.023.37.068a.624.624 0 0 1 .246.181.56.56 0 0 1 .12.258h.75a1.092 1.092 0 0 0-.2-.566 1.21 1.21 0 0 0-.5-.41 1.813 1.813 0 0 0-.78-.152c-.293 0-.551.05-.776.15-.225.099-.4.24-.527.421-.127.182-.19.395-.19.639 0 .201.04.376.122.524.082.149.2.27.352.367.152.095.332.167.539.213l.618.144c.207.049.361.113.463.193a.387.387 0 0 1 .152.326.505.505 0 0 1-.085.29.559.559 0 0 1-.255.193c-.111.047-.249.07-.413.07-.117 0-.223-.013-.32-.04a.838.838 0 0 1-.248-.115.578.578 0 0 1-.255-.384h-.765ZM.806 13.693c0-.248.034-.46.102-.633a.868.868 0 0 1 .302-.399.814.814 0 0 1 .475-.137c.15 0 .283.032.398.097a.7.7 0 0 1 .272.26.85.85 0 0 1 .12.381h.765v-.072a1.33 1.33 0 0 0-.466-.964 1.441 1.441 0 0 0-.489-.272 1.838 1.838 0 0 0-.606-.097c-.356 0-.66.074-.911.223-.25.148-.44.359-.572.632-.13.274-.196.6-.196.979v.498c0 .379.064.704.193.976.131.271.322.48.572.626.25.145.554.217.914.217.293 0 .554-.055.785-.164.23-.11.414-.26.55-.454a1.27 1.27 0 0 0 .226-.674v-.076h-.764a.799.799 0 0 1-.118.363.7.7 0 0 1-.272.25.874.874 0 0 1-.401.087.845.845 0 0 1-.478-.132.833.833 0 0 1-.299-.392 1.699 1.699 0 0 1-.102-.627v-.495Zm8.239 2.238h-.953l-1.338-3.999h.917l.896 3.138h.038l.888-3.138h.879l-1.327 4Z"/>
</svg> Export to .CSV</button>
                    </form>
                       
                

                    <form action="/setArchive" type="get">
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
                    });
                        </script>

                </div> 
            </div>
            </section>
            <section id="archive">
            <div>
                <label class="">Archive</label>
            </div>
            <div class="table-responsive shadow p-3 bg-white rounded mb-8">
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
            <tbody>@foreach($archive as $item)
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
            </section>
        </div>
    <!-- </div> -->
</div>

</body>
</html>
<style>
    html{
        scroll-behavior: smooth;
    }
    #search{
        top:40px;
    }
.sticky{
    top: 50px;
    position: fixed;

}
nav.sidebar{
    /* border: 1px solid yellow; */
    height: 100%;
    /* z-index: 1; */
    /* margin-top:30px; */
    position: fixed;

}
.sidebar li , .sidebar a:link{
  padding: 13px;
  font-size: 20px;
  text-decoration: none;
  width: 100%;
  display: inline-block;
  color: white;
}
.sidebar a.active {
  border-right: 3px solid yellow;
  /* padding-left: 10px; */
  color: yellow;
}
.sidebar a{
    color: white;
}
.sidebar li.hover {
  color: white;
}
.sidebar a:hover{
  background-color: yellowgreen;
  width: 100%;
  color: white;
}
.nav-link{
    background-color: red;
}
label{
    font-size: 30px;
    margin-top:50px;
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
a.active{
    background: var(--white);
    color: var(--primary);
}
section{
    /* border: 1px solid red; */
    height: 50%;
    margin-bottom: 20%;
}
/* .containerbody{
    border: 1px solid red;
    height: 100%;
} */
div.dashboard{
    /* border: 1px solid red; */
    float: right;
    width: 90%;
    margin-right:10px;
    height: 100%;
}
div.content{
    border: 1px solid blue;

}
</style>
<script>
    const sectionAll = document.querySelectorAll('section[id]');
    window.addEventListener('scroll',()=>{
        const scrollY = window.pageYOffset;
        sectionAll.forEach((current)=>{
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - 350;
            const sectionId = current.getAttribute('id');
            console.log(sectionId);
            if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
                document
                    .querySelector('li a[href*="' + sectionId + '"]')
                    .classList.add('active');
            }
            else{
                document
                    .querySelector('li a[href*="' + sectionId + '"]')
                    .classList.remove('active');
            }
        })
    })
</script>
@endsection