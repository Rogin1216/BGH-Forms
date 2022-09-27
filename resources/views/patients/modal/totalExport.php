<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Account Export Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>patient Hpercode</th>
                    <th>Date Exported</th>
                    <th>Time Exported</th>
                </tr>
            </thead>
            <tbody>
                @foreach($accountExport as $x)
                <tr>
                    <td>{{$x->hpercode}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>