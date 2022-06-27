<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Serum Biomarker Data:</h5>
        <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> -->
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">X</button>

          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <!-- <table id="show2_item"> -->
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Serum Biomarker:</span>
                            <input type="text" class="form-control" id="bioMarkerDesc1" name="bioMarkerDesc1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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
                            <input type="text" class="form-control" id="bioMarkerLevel1" name="bioMarkerLevel1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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
                        <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Ref range:</span>
                            <input type="text" class="form-control" id="bioMarkerRange1" name="bioMarkerRange1" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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
                </div>
            </div>
      <button href="" id="serumDataInsert" name="serumDataInsert" type="button" class="btn btn-primary">Insert</button>

      </div>
      <table class="table tb-sm table-hover overflow-auto" id="serum_table">
                        <thead>
                            <tr>
                                <th><small>Serum biomarker</small> </th>
                                <th><small>Level</small> </th>
                                <th><small>Ref range</small> </th>
                                <th><small>Date</small> </th>
            
                                <!-- <th><button type="button" id="showSerum" value="{{$patients->hpercode}}" class="btn btn-success btn-sm shadow-none" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button></th> -->
                            </tr>
                        </thead>
                        @foreach($patientBiomarkerS as $a)
                        <tr>
                                <td>{{$a->bioMarkerDesc}}</td>
                                <td>{{$a->bioMarkerLevel}}</td>
                                <td>{{$a->bioMarkerRange}}</td>
                                <td>{{$a->bioMarkerDate}}</td>
                                <td><button class="btn btn-outline-danger" value="{{$a->bioMarker_id}}" id="serumDataDelete" name="" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></button></td>
                                </tr>
                                @endforeach

                            </table>
      <div class="modal-footer" id="divInfo">
        
        
      </div>
    </div>
  </div>
</div>

<!-- Modal edit -->

<div class="modal fade" id="editSerumModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Serum Biomarker Data (edit):</h5>
        <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> -->
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">X</button>

          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <!-- <table id="show2_item"> -->
            <div class="row">
                <div class="col">
                    
                    <div class="row">
                        <div class="col">
                            <label for=""><b>Serum Biomarker:</b> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerDescEdit1" name="bioMarkerDescEdit1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for=""><b>Level:</b> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerLevelEdit1" name="bioMarkerLevelEdit1" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                           <label for=""><b>Ref range:</b> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerRangeEdit1" name="bioMarkerRangeEdit1" value="">
                        </div>
                    </div>
                    <input type="hidden" id="bioMarkerDate" name="bioMarkerDate" value="{{ date('F j, Y') }}">
                    <input type="hidden" id="bioMarkerType" name="bioMarkerType" value="0">
                </div>
            </div>
      </div>
      <table class="" id="show_serum_table">
                        <thead>
                            <tr>
                                <th><small>Serum biomarker</small> </th>
                                <th><small>Level</small> </th>
                                <th><small>Ref range</small> </th>
                                <th><small>Date</small> </th>
            
                                <th><button type="button" id="showSerum" value="{{$patients->hpercode}}" class="btn btn-success btn-sm shadow-none" data-bs-toggle="modal" data-bs-target="#exampleModal">+</button></th>
                            </tr>
                        </thead>
                        @foreach($patientBiomarkerS as $a)
                        <tr>
                                <td>{{$a->bioMarkerDesc}}</td>
                                <td>{{$a->bioMarkerLevel}}</td>
                                <td>{{$a->bioMarkerRange}}</td>
                                <td>{{$a->bioMarkerDate}}</td>
                                <td><button type="button" value="{{$a->bioMarker_id}}" id="editSerumModalId" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editSerumModal"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></button></td>
                        </tr>
                        @endforeach

                    </table>

      <div class="modal-footer">
      <button class="btn btn-outline-danger" id="serumDataDelete" name="" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></button>
        <button href="" id="serumDataSave" name="" type="button" class="btn btn-primary" data-bs-dismiss="modal">Update Data</button>
        <!-- <input type="submit" class="btn btn-primary" name="serumDataInsert" id="serumDataInsert" value="Insert Data"> -->
      </div>
    </div>
  </div>
</div>