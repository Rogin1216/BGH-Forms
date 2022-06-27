<div class="modal fade" id="moleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Molecular Biomarker Data:</h5>
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
                            <!-- <label for=""><b>Molecular Biomarker:</b> </label> -->
                            <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Molecular Biomarker:</span>
                            <input type="text" class="form-control" id="bioMarkerDesc" name="bioMarkerDesc" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerDesc" name="bioMarkerDesc" value="">
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col">
                            <!-- <label for=""><b>Level:</b> </label> -->
                            <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Level:</span>
                            <input type="text" class="form-control" id="bioMarkerLevel" name="bioMarkerLevel" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerLevel" name="bioMarkerLevel" value="">
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col">
                           <!-- <label for=""><b>Ref range:</b> </label> -->
                           <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Ref range:</span>
                            <input type="text" class="form-control" id="bioMarkerRange" name="bioMarkerRange" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerRange" name="bioMarkerRange" value="">
                        </div>
                    </div> -->
                    <input type="hidden" id="bioMarkerDate" name="bioMarkerDate" value="{{ date('F j, Y') }}">
                    <input type="hidden" id="bioMarkerType" name="bioMarkerType" value="1">
                </div>
                <button href="" id="moleDataInsert" name="moleDataInsert" type="button" class="btn btn-primary">Insert</button>
            </div>
            <table class="table tb-sm table-hover overflow-auto" id="mole_table" >
                        <thead>
                            <tr>
                                <th><small>Molecular biomarker</small> </th>
                                <th><small>Level</small> </th>
                                <th><small>Ref range</small> </th>
                                <th><small>Date</small> </th>
            
                                <!-- <th><button type="button" id="showMole" value="{{$patients->hpercode}}" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#moleModal">+</button></th> -->
                            </tr>
                        </thead>
                        @foreach($patientBiomarkerM as $a)
                        <tr>
                                <td>{{$a->bioMarkerDesc}}</td>
                                <td>{{$a->bioMarkerLevel}}</td>
                                <td>{{$a->bioMarkerRange}}</td>
                                <td>{{$a->bioMarkerDate}}</td>
                                <td><button class="btn btn-outline-danger" id="moleDataDelete" value="{{$a->bioMarker_id}}" name="moleDataDelete" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></button></td>
                        </tr>
                        @endforeach

                    </table>
      </div>

      <div class="modal-footer" id="divInfo">
        
        
      </div>
    </div>
  </div>
</div>

<!-- Modal edit -->
<div class="modal fade" id="editMoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Molecular Biomarker Data (edit):</h5>
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
                            <label for=""><b>Molecular Biomarker:</b> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerDescEdit" name="bioMarkerDescEdit">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for=""><b>Level:</b> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerLevelEdit" name="bioMarkerLevelEdit" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                           <label for=""><b>Ref range:</b> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerRangeEdit" name="bioMarkerRangeEdit" value="">
                        </div>
                    </div>
                    <input type="hidden" id="bioMarkerDate" name="bioMarkerDate" value="{{ date('F j, Y') }}">
                    <input type="hidden" id="bioMarkerType" name="bioMarkerType" value="1">
                </div>
            </div>
      </div>
      <div class="modal-footer">
      <button class="btn btn-outline-danger" id="moleDataDelete" name="" data-bs-dismiss="modal" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></button>
        <button href="" id="moleDataSave" name="" type="button" class="btn btn-primary" data-bs-dismiss="modal">Update Data</button>
        <!-- <input type="submit" class="btn btn-primary" name="serumDataInsert" id="serumDataInsert" value="Insert Data"> -->
      </div>
    </div>
  </div>
</div>