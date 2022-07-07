<div class="modal fade bd-example-modal-lg" id="followupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Follow Up:</h5>
        <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> -->
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">X</button>

          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
                <div class="row">
                        <div class="col">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Date:</span>
                            <input type="date" class="form-control" name="followupDate" id="followupDate" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>
                        </div>
                  </div>
                <div class="row">
                <div class="col">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="">chief_complaint</span>
                  </div>
                  <select name="followupStatus" id="followupStatus" class="form-select">
                                <option>-- select --</option>
                                <option>FOR CHEMOTHERAPY</option>
                                <option>FOR RADIATION THERAPY</option>
                                <option>FOR BLOOD TRANSFUSION</option>
                                <option>Others:</option>
                            </select>
                </div>
                  </div>
                </div>
                <div class="row">
                        <div class="col">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">opddisp:</span>
                            <input type="text" class="form-control" name="followupTime" id="followupTime" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                          </div>
                        </div>
                  </div>
                  <div class="row">
                <div class="col">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="">opdtxt</span>
                  </div>
                  <select name="followupStatus" id="" class="form-select">
                                <option>-- select --</option>
                                <option>OVARIAN CA</option>
                                <option>G2P2(2002) PRIMARY PERITONEAL CANCER STAGE III C</option>
                                <option>RECURRENT OVARIAN CA LEFT</option>
                                <option>Others:</option>
                            </select>
                </div>
                  </div>
                </div>
                  <div class="row">
                        <div class="col">
                            <button value="" id="followupDataInsert" name="followupDataInsert" type="button" class="btn btn-warning btn-lg btn-block">Insert <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
  <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg></button>
                        </div>
                    </div>
          </div>
          <div class="row">
            <div class="col" id="followUp_table">
            <table class="table tb-sm table-hover overflow-auto" id="followUp_table">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>chief_complaint</th>
                  <th>opddisp</th>
                  <th>opdtxt</th>
                  <th>status</th>
                </tr>
              </thead>
              @foreach($followUpStatus as $a)
              <tr>
                <td>{{$a->opddate}}</td>
                <td>{{$a->chief_complaint}}</td>
                <td>{{$a->opddisp}}</td>
                <td>{{$a->opdtxt}}</td>
                <!-- <td><img src="..." class="rounded-start" alt="..."></td> -->
                <td><div class="input-group mb-3">
                  <select name="followupStatus" id="followupStatus" class="form-select">
                                <option></option>
                                <option>Alive w/o disease</option>
                                <option>Alive with disease</option>
                                <option>Dead</option>
                                <option>Transferred to another institution</option>
                            </select>
                  
                </div></td>
              </tr>
              @endforeach
            </table>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="modal-footer" id="divInfo">
        
        <!-- <button href="" id="" name="" type="button" class="btn btn-primary" data-bs-dismiss="modal" >Add</button> -->
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
      $('#followupBtn').click(function(){
        var hpercode = $(this).val();
        $('#followupDataInsert').click(function(){
        let a=jQuery("#followupDate").val();
        let b=jQuery("#followupStatus").val();
        let c=jQuery("#followupStatusDate").val();
        let d=jQuery("#followupTime").val();
        // $.ajax({url:"/insertFollowUp",
        //         type:"GET",
        //         data: ""})
        })
        
      })
    })
</script>