<div class="modal fade" id="dateLabRecModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Date lab Record:</h5>
        <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> -->
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">X</button>

          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <div class="col" id="modalDatelab">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Item Description</th>
                    <th>pcchrgamt</th>
                </tr>
            </thead>
            @foreach($datelabs as $x)
            <tbody>
                <tr>
                    <td>{{$x->dodate}}</td>
                    <td>{{$x->itemdesc}}</td>
                    <td>{{$x->pcchrgamt}}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
        </div>
     
      </div>
      <div class="modal-footer" id="divInfo">
        

      </div>
    </div>
  </div>
</div>