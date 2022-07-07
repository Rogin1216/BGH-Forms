<div class="modal fade bd-example-modal-lg" id="familyHistory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Family History Members:</h5>
        <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> -->
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">X</button>

          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <!-- <table id="show2_item"> -->
            <div class="row">
                <div class="col">
                    <!-- <div class="row">
                        <div class="col">
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control" id="floatingInput" placeholder="---">
                                <label for="floatingInput">Family Member Name:</label>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Family member name:</span>
                            <input type="text" class="form-control" name="familyMember" id="familyMember" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Consanguinity:</label>
                        <select name="consanguinity" id="consanguinity" class="form-select">
                                <option></option>
                                <option>Father</option>
                                <option>Mother</option>
                                <option>Brother</option>
                                <option>Sister</option>
                                <option>Nephew</option>
                                <option>Niece</option>
                                <option>Uncle</option>
                                <option>Aunt</option>
                                <option>Grandmother</option>
                                <option>Grandfather</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Type of Cancer:</span>
                            <input type="text" class="form-control" id="typeOfCancer" name="typeOfCancer" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Age at Diagnosis:</span>
                            <input type="number" class="form-control" id="ageAtDiagnosis" name="ageAtDiagnosis" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button href="" value="{{$patients->hpercode}}" id="addFam" name="addFam" type="button" class="btn btn-warning btn-lg btn-block">Insert <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg></button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row" id="famDivmodal">
                <table class="table tb-sm table-hover overflow-auto" id="show_item">
                            <thead>
                                <tr>
                                    <th>Family Member</th>
                                    <th>Consanguinity</th>
                                    <th>Type of Cancer</th>
                                    <th>Age at Diagnosis</th>
                                    <input type="hidden" name="fam" id="fam" value="1">
                                    <!-- <th>patient_hpercode</th>
                                    <th>familyHistoryMembers_id</th> -->
                                    <!-- <th><button type="button" id="familyHistory" value="" class="btn btn-success btn-sm">Edit</button></th> -->
                                </tr>
                            </thead>
                            <tbody>
                        @foreach($relative as $item)
                            <tr id="rowDeleteFam">
                                <!-- <td>{{$item->admdate ?? null ?: '--' }}</td> -->
                                <td>{{$item->familyMember}}</td>
                                <td>{{$item->consanguinity}}</td>
                                <td>{{$item->typeOfCancer}}</td>
                                <td>{{$item->ageAtDiagnosis}}</td>
                                <td><button type="button" id="deleteFam" value="{{$item->familyHistoryMembers_id}}" class="btn btn-outline-danger btn-sm delete_fam_btn"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
    </svg></button></td>
                                <!-- <td>{{$item->patient_hpercode}}</td>
                                <td>{{$item->familyHistoryMembers_id}}</td> -->
                                
                            </tr>
                        @endforeach
                            </tbody>
                        </table>
            </div>
            
        
      </div>
      <div class="modal-footer" id="divInfo">
        
        
      </div>
    </div>
  </div>
</div>

<script>

    
</script>
