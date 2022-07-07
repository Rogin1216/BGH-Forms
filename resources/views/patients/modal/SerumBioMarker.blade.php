<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Patient Name: {{$head->patlast}} {{$head->patfirst}}, {{$head->patmiddle}}</h5>
        <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> -->
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">X</button>

          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <!-- <table id="show2_item"> -->
        <div class="row">
            <div class="col col-lg-8 border border-danger">
                <div class="row">
                    <div class="col border border-success" id="chartcontainer" >
                        <figure class="highcharts-figure">
                        <div class="col" id="container">
                        @include('patients.modal.chart')
                        </div>
                        </figure>
                    </div>
                </div>
            
            </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Serum Biomarker:</span>
                            <select id="bioMarker_id" class="form-select" name="bioMarker_id" value="">
                                <option value="">-- select --</option>
                                @foreach($bioMarkerList as $a)
                                <option value="{{$a->id}}">{{$a->bioMarkerDesc}}</option>
                                @endforeach  
                            </select> 
                            <!-- <input type="text" class="form-control" id="bioMarkerDesc1" name="bioMarkerDesc1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col">
                            <label for=""><b>Serum Biomarker:</b> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerDesc1" name="bioMarkerDesc1" value="">
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col">
                            <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Level:</span>
                            <input type="text" class="form-control" id="value" name="value" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col">
                            <label for=""><b>Level:</b> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerLevel1" name="bioMarkerLevel1" value="">
                        </div>
                    </div> -->
                    <div class="row">
                        <!-- <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Ref range:</span>
                            <input type="text" class="form-control" id="bioMarkerRange1" name="bioMarkerRange1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div> -->
                        <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Date:</span>
                            <input type="date"  class="form-control" value="{{ date('F j, Y') }}" id="bioMarkerDate" name="bioMarkerDate" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col">
                           <label for=""><b>Ref range:</b> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerRange1" name="bioMarkerRange1" value="">
                        </div>
                    </div> -->
                    <input type="hidden" id="bioMarkerDate" name="bioMarkerDate" value="{{ date('F j, Y') }}">
                    <input type="hidden" id="bioMarkerType1" name="bioMarkerType1" value="0">
                    <button href="" id="serumDataInsert" name="serumDataInsert" type="button" class="btn btn-warning">Insert <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg></button>
                </div>
            </div>
            <div class="row">
      <div class="col" id="serum_table">
            <table class="table tb-sm table-hover overflow-auto" id="serum_table">
                        <thead>
                            <tr>
                                <th><small>Date</small> </th>
                                <th><small>Biomarker</small> </th>
                                <th><small>Level</small> </th>
                                <th><small>Ref Rage</small> </th>
            
                                <!-- <th><button type="button" id="showSerum" value="{{$patients->hpercode}}" class="btn btn-success btn-sm shadow-none" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button></th> -->
                            </tr>
                        </thead>
                        @foreach($SpBioMarker as $a)
                            @if($a->withinRange == 0)
                        <tr>
                                <td>{{$a->bioMarkerdate}}</td>
                                <td>{{$a->bioMarkerDesc}}</td>
                                <td>{{$a->level}}</td>
                                <td>{{$a->ref_range}}</td>
                                <td><button class="btn btn-outline-danger" value="" id="serumDataDelete" name="" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></button></td>
                                </tr>
                                
                                @endif
                        @endforeach
            </table>
    </div>

            </div>
    
      </div>
      
      <div class="modal-footer" id="divInfo">
        
        
      </div>
    </div>
  </div>
</div>
