<script>
    jQuery(document).ready(function(){
                        jQuery(document).one('click','#showSerum',function(){
                            // alert($(this).val());
                            var hpercode = $(this).val();
                            console.log(hpercode + " show serum modal");
                            // alert(hpercode +"asdfa");
                            jQuery('#serumDataInsert').click(function() {
                            let a=jQuery("#bioMarkerDesc1").val();
                            let b=jQuery("#value").val();
                            let c=jQuery("#bioMarkerRange1").val();
                            let d=jQuery("#bioMarkerDate").val();
                            // let e=jQuery("#bioMarkerType1").val();
                            let e=jQuery("#bioMarker_id").val();
                            // let f=jQuery("#bioMarkerDesc1").val();
                            // alert(a);
                            // console.log(e);
                            $.ajax({url: "/insertSerumData",
                                    type:"GET",
                                    data:{
                                        // "bioMarkerDesc1":a,
                                        "value":b,
                                        // "bioMarkerRange1":c,
                                        "bioMarkerDate":d,
                                        "bioMarker_id":e,
                                        "hpercode": hpercode,
                                        },
                                    success: function(response){
                                        $('#bioMarker_id').val('');
                                        $('#value').val('');
                                        $('#bioMarkerRange1').val('');
                                        // $('#bioMarkerDate').val('');
                                        // $("#serumContent").load(" #serumContent");
                                        console.log(hpercode + " serum data");
                                 console.log('Data inserted');  
                                 $("#serum_table").load(" #serum_table");
                                 $("#chartcontainer").load(" #chartcontainer");
                                 
                                    }
                        })
                    });
                    $(document).on('click','#serumDataDelete',function(e){
                                e.preventDefault();
                                var id = $(this).val();
                                // console.log(id);    
                                // alert('SERUM BLADE');
                                $.ajax({
                                    type:"POST",
                                    url:"/deleteSerum",
                                    data:{
                                        'id': id
                                    },
                                    success: function(response){
                                        console.log('deleted serum id ' + id);
                                        $("#serum_table").load(" #serum_table");
                                    }
                                })
                            })
                        })
                    });

                    $(document).ready(function() {
                        var testid="VALUE TEST ID";
                        $(document).on('click','#editSerumModalId', function(e){
                        e.preventDefault(); // cancel click
                        testid=$(this).val();
                            var id = $(this).val();
                            console.log(id+' serum edit');
                            // alert(id+' asdf');
                            $.ajax({
                                type:"GET",
                                url:"/editSerum",
                                data: {
                                    'id': id,
                                },
                                success: function (response){
                                    // console.log("response");
                                    $('#bioMarkerDescEdit1').val(response.bioMarkerDesc);
                                    $('#bioMarkerLevelEdit1').val(response.bioMarkerLevel);
                                    $('#bioMarkerRangeEdit1').val(response.bioMarkerRange);
                                //  console.log(response);
                                 
                                    // console.log(  $('#bioMarkerDescEdit').val());/
                                }   
                            })
                            $(document).on('click','#serumDataSave',function(){
                            // var id = $(this).val();
                            // var bmd = $('#bioMarkerDescEdit').val();
                            // alert(id);
                            console.log('edited ID: '+id);
                            $.ajax({
                                type:"POST",
                                url:"/saveSerum",
                                data:{
                                    'bioMarkerDesc': $('#bioMarkerDescEdit1').val(),
                                    'bioMarkerLevel': $('#bioMarkerLevelEdit1').val(),
                                    'bioMarkerRange': $('#bioMarkerRangeEdit1').val(),
                                    'id': id,
                                    
                                },
                                success: function(response){
                                    // alert('Data updated');
                                    $("#serumContent").load(" #serumContent");
                                    console.log(response);
                                    id=null;
                                }
                            }) 
                        })
                        $(document).one('click','#serumDataDelete',function(){
                            var del = $(this).val();
                            alert('Deleted ID: '+id);
                            console.log(id);
                            $.ajax({
                                type:"POST",
                                url:"/deleteSerum",
                                data:{
                                    'id': id
                                },
                                success: function(response){
                                    $("#serumContent").load(" #serumContent");
                                }
                            })
                        })
                    });
                    console.log(testid);
                });
</script>