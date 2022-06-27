<script>
    jQuery(document).ready(function(){
                        jQuery(document).one('click','#showMole',function(){
                            // alert($(this).val());
                            var hpercode = $(this).val();
                            console.log(hpercode + " show mole modal");
                            // alert(hpercode);
                            jQuery('#moleDataInsert').click(function() {
                            let a=jQuery("#bioMarkerDesc").val();
                            let b=jQuery("#bioMarkerLevel").val();
                            let c=jQuery("#bioMarkerRange").val();
                            let d=jQuery("#bioMarkerDate").val();
                            let e=jQuery("#bioMarkerType").val();
                            // let f=jQuery("#bioMarkerDesc1").val();
                            // alert(a);
                            // console.log(a);
                            $.ajax({url: "/insertData",
                                    type:"GET",
                                    data:{"bioMarkerDesc":a,
                                        "bioMarkerLevel":b,
                                        "bioMarkerRange":c,
                                        "bioMarkerDate":d,
                                        "bioMarkerType":e,
                                        "hpercode": hpercode,
                                        },
                                    success: function(response){
                                        $('#bioMarkerDesc').val('');
                                        $('#bioMarkerLevel').val('');
                                        $('#bioMarkerRange').val('');
                                        $("#mole_table").load(" #mole_table");
                                        console.log(hpercode + " mole data");
                                 console.log('Data inserted');  
                                 
                                    }
                        })
                    });
                    $(document).on('click','#moleDataDelete',function(){
                            var id = $(this).val();
                            // alert('Deleted ID: '+id);
                            console.log(id);
                            $.ajax({
                                type:"POST",
                                url:"/deleteSerum",
                                data:{
                                    'id': id
                                },
                                success: function(response){
                                    // $("#moleContent").load(" #moleContent");
                                    $("#mole_table").load(" #mole_table");
                                }
                            })
                        })
                        })
                    });

                    $(document).ready(function() {
                        // var testid="VALUE TEST ID";
                        $(document).on('click','#editMoleModalId', function(e){
                        e.preventDefault(); // cancel click
                        testid=$(this).val();
                            var id = $(this).val();
                            // alert(id);
                            $.ajax({
                                type: "GET",
                                url:"/editMole",
                                data: {
                                    'id': id,
                                },
                                success: function (response){
                                    $('#bioMarkerDescEdit').val(response.bioMarkerDesc);
                                    $('#bioMarkerLevelEdit').val(response.bioMarkerLevel);
                                    $('#bioMarkerRangeEdit').val(response.bioMarkerRange);
                                //  console.log(response);
                                 
                                    // console.log(  $('#bioMarkerDescEdit').val());/
                                }   
                            })
                            $(document).on('click','#moleDataSave',function(){
                            // var id = $(this).val();
                            // var bmd = $('#bioMarkerDescEdit').val();
                            // alert(id);
                            console.log('edited ID: '+id);
                            $.ajax({
                                type:"POST",
                                url:"/saveMole",
                                data:{
                                    'bioMarkerDesc': $('#bioMarkerDescEdit').val(),
                                    'bioMarkerLevel': $('#bioMarkerLevelEdit').val(),
                                    'bioMarkerRange': $('#bioMarkerRangeEdit').val(),
                                    'id': id,
                                    
                                },
                                success: function(response){
                                    // alert('Data updated');
                                    $("#moleContent").load(" #moleContent");
                                    console.log(response);
                                    id=null;
                                }
                            }) 
                        })
                        $(document).on('click','#moleDataDelete',function(){
                            var del = $(this).val();
                            // alert('Deleted ID: '+id);
                            console.log(id);
                            $.ajax({
                                type:"POST",
                                url:"/deleteSerum",
                                data:{
                                    'id': id
                                },
                                success: function(response){
                                    $("#moleContent").load(" #moleContent");
                                }
                            })
                        })
                    });
                    // console.log(testid);
                });
</script>