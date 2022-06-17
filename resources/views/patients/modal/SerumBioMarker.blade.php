<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Serum Biomarker Dataaaaa:</h5>
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
                            <input type="text" id="bioMarkerDesc" name="bioMarkerDesc" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for=""><b>Level:</b> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerLevel" name="bioMarkerLevel" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                           <label for=""><b>Ref range:</b> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="bioMarkerRange" name="bioMarkerRange" value="">
                        </div>
                    </div>
                    <input type="hidden" id="bioMarkerDate" name="bioMarkerDate" value="{{ date('F j, Y') }}">
                    <input type="hidden" id="bioMarkerType" name="bioMarkerType" value="0">
                </div>
            </div>
      </div>
      <div class="modal-footer">
        
        <button href="" id="serumDataInsert" name="serumDataInsert" type="button" class="btn btn-primary" data-bs-dismiss="modal">Insert Data</button>
        <!-- <input type="submit" class="btn btn-primary" name="serumDataInsert" id="serumDataInsert" value="Insert Data"> -->
      </div>
    </div>
  </div>
</div>
<script>
    jQuery(document).ready(function(){
                        jQuery('#serumDataInsert').click(function() {
                            let a=jQuery("#bioMarkerDesc").val();
                            let b=jQuery("#bioMarkerLevel").val();
                            let c=jQuery("#bioMarkerRange").val();
                            let d=jQuery("#bioMarkerDate").val();
                            let e=jQuery("#bioMarkerType").val();
                            // alert('asdfsadf serum');
                            $.ajax({url: "/insertSerum",
                                    data:{"bioMarkerDesc":a,
                                        "bioMarkerLevel":b,
                                        "bioMarkerRange":c,
                                        "bioMarkerDate":d,
                                        "bioMarkerType":e
                                        },
                                    success: function(result){
                                    }
                        })
                    })

                    });
</script>