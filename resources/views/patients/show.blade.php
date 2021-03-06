@extends('patients.layouts')
@section('content')
<style>
        #divpat{
            column-width: 70%;
        }
        .divpat{
            font-size: 13px;
        }
        .divpat1{
            font-size: 14px;
        }
        #divsex{
            width: 30%;
        }
        #divaddress{
            width: 50%;
        }
        #divbday{
            width: 50%;
        }
        #inputshort{
            width: 30%;
        }
        #injdate{
            width: 50%;
        }
        @media print {
        .rows-print-as-pages .container {
            page-break-after: always;
        }
        /* include this style if you want the first row to be on the same page as whatever precedes it */
        /*
        .rows-print-as-pages .row:first-child {
            page-break-before: avoid;
        }
        */
        .col-lg-6 {
            width: 100%;
        }
        .lastname-pat{
            width: 100%;
        }
        
        }
        .header{
                background-color: green;
                color: white !important;
            }
    #bgGreen {
        background-color: green !important;
    }
    .innerdiv {
        margin-left: 20px !important;
        width: 100% ;
    }

    .labelmarginleft {
        margin-left: 20px !important;
    }

    .inputlabelunderline {
        border: none;
        border-bottom: 1px solid black;
        height: auto;
        width: auto;
    }

    .inputlabelunderline2 {
        border: none;
        border-bottom: 1px solid black;
        height: auto;
        width: 120px;
    }
    .inputlabelunderlinelong{
        border: none;
        border-bottom: 1px solid black;
        height: auto;
        width: 650px;
        
    }
    #frsAidComm{
        column-width: 490px;
    }
    #docAdmitCol{
        column-width: 230px;
    }
    #padding{
        padding: 70px;
    }
    .inputlabelunderlinelong::placeholder {
  text-align: center;
}

    .inputlabelunderline:focus,
    .inputlabelunderline2:focus,
    .inputlabelunderlinelong{
        outline: none ;
    }

    .firstAid {
        padding-right: 5px !important;
    }

    .card {
        border: 1px black solid ;
    }

    table,
    td,
    tr {
        border: 1px solid black;
    }

    input {
        text-align: center !important;
    }

    .grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  gap: 10px;
  padding: 2px;
}

.grid-container > div {
  /* text-align: center; */
  font-size: 15px;
}
.container > div{
    padding: 2px;
}

#gridAid{
    display: grid;
    grid-template-columns: 150px 70px 100px 200px;
    
}
.item5{
    grid-column: auto / span 3; 
}
#gridInjuries{
    display: grid;
    grid-template-columns: 150px 70px 70px;
}
#gridNature{
    grid-template-columns: 280px ;
    grid-template-rows: auto auto auto
}
#gridBurn{
    display: grid;
    grid-template-columns: 50px 50px 50px 50px 50px;
    grid-template-rows: auto auto
}
#gridBurn .item1{
     grid-column: 1 / span 4; 
}
#colViIn{
    column-width: 100px;
}
/* #divTemprecodeinput,#divTempprocodeinput,#divTemctycodeinput,#divTempbgycodeinput{
    display: none;
} */
#divaddress{
    width: auto;
}
#firstPanel{
    width: auto;
}
#popup {
  display:none;
}
</style>
<!-- <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head> -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"  media='screen,print'>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/script.js/2.0.2/script.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> -->


@foreach($info as $patients) 
    @foreach($chdatalist as $chdata) 
    @endforeach
@endforeach
 
<form action="/save/{{$patients->enccode1}}" type="get">

<div class="card" style="width: 62rem;">
    <div class="card-header p-2 text-white" id="bgGreen">GENERAL DATA:</div>
    <!-- <div class="header">GENERAL DATA</div> -->
    <div class="card-body border border-secondary">
        
            {!! csrf_field() !!}

            <!--<input type="checkbox" value="Edit" id="editChx"><label>Edit profile</label></br>-->
            <div class="col border border-secondary divpat">
<div class="row">
    <div class="col" id="firstPanel">
        <div class="row">
            <div class="col divpat" id="divpat">
                    <b>Name of Patient</b>
                    <div class="row" id="patname">
                        <div class="col" id="patname">
                            <div class="row">
                                <div class="col">
                                <i>Last name: </i>
                                    <!-- <p class="small"> </p>  -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{$patients->patlast}}
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <i>First name (w/ suffix)</i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="">{{$patients->patfirst}} </label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                <i>Middle name</i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <label for=""> {{$patients->patmiddle}}</label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            
            
                <div class="col border-start border-secondary divpat">
                    <div class="row">
                        <div class="col ">
                            Registry No:
                                <input type="text" class="inputlabelunderlineName" name="reg_no" value="{{$patients->reg_no}}">
                        </div>
                    </div>
                    <div class="row">
                            <div class="col">
                                Philhealth No:
                                <input type="text" class="inputlabelunderlineName" name="pat_phil_health_no" value="{{$patients->pat_phil_health_no}}">
                            </div>
                    </div>
                </div>
        </div>
    
    <div class="row">
        <div class="col border-top border-secondary" id="divaddress">
            <b>Current Address</b>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <!-- <p class="small" ><i>Region name</i> </p> -->
                           <i>Region Name</i> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                        <!-- {{$patients->pat_current_address_region_name}} -->
                            <input type="text" class="inputlabelunderline" value="{{$patients->pat_current_address_region_name}}" id="pat_current_address">
                        </div>
                    </div>
                                        
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <i>Province</i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-check-label" for="">
                            </label>
                        <input type="text" class="inputlabelunderline" value="{{$patients->pat_current_address_province_name}}" id="pat_current_province">

                        </div>
                    </div>
                    
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <i>City/Municipality</i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="inputlabelunderline" value="{{$patients->pat_current_address_city_name}}" id="pat_current_city">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <i>Barangay</i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="inputlabelunderline" value="{{$patients->pat_current_address_brgy_name}}" id="pat_current_bgy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <b>Temporary Address</b>
            <!-- <input type="hidden" name="copyCh" value="N">
            <input type="checkbox" id="copyCh" name="copyCh" value="1" {{ ($chdata->copyCh == '1'? ' checked' : '') }}> -->
            <!-- <label for="copyCh"><small><i>(same as current address)</i></small></label> -->
            <div class="row">
                <div class="col">
                <i>Region name</i>
                    <div class="row">
                        <div class="col">
                        <select id="temp_regcode" name="temp_regcode" class="form-select-sm regioncategory" aria-label=".form-select-sm example">
                            <option value="{{$patients->temp_regcode}}">{{$patients->temp_regname}}</option> 
                            <!-- <option value="{{$patients->temp_regcode}}" id="opTempregode"></option> -->
                            <option value="" id="">---</option>
                            @foreach($vwRegname as $item) 
                            <option value="{{$item->regcode}}">{{$item->regname}} </option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                <i>Province name</i>
                    <div class="row">
                        <div class="col">
                        <select id="temp_provcode" name="temp_provcode" class="form-select-sm regioncategory" aria-label=".form-select-sm example">
                            <option value="">{{$patients->temp_provname}}</option> 
                            <option value="">---</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                <i>City/Municipality</i>
                    <div class="row">
                        <div class="col">
                        <select id="temp_citycode" name="temp_citycode" class="form-select-sm regioncategory" aria-label=".form-select-sm example">
                            <option value="">{{$patients->temp_ctyname}}</option>
                            <option value="">---</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                <i>Barangay</i>
                    <div class="row">
                        <div class="col">
                        <select id="temp_bgycode" name="temp_bgycode" class="form-select-sm regioncategory" aria-label=".form-select-sm example">
                            <option value="">{{$patients->temp_bgyname}}</option>
                            <option value="">---</option>
                        </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col border-top border-secondary" id="divaddress">
            <b>Place of incident</b> <small><i style="color:red;">(REQUIRED)</i></small>
            <div class="row">
                <div class="col">
                <i>Region name</i>
                    <div class="row">
                        <div class="col">
                        <select id="plc_regcode" required name="plc_regcode" class="form-select-sm regioncategory" aria-label=".form-select-sm example" >
                            <option value="plc_regcode">{{$patients->plc_regname}}</option> 
                            <option value="" id="">---</option>
                            @foreach($vwRegname as $item) 
                            <option value="{{$item->regcode}}">{{$item->regname}}</option>
                            @endforeach
                            
                        </select>
                        </div>
                    </div>
                    
                </div>
                <div class="col">
                    <i>Province Name</i>
                    <div class="row">
                        <div class="col">
                            <select id="plc_provcode" name="plc_provcode" class="form-select-sm regioncategory" aria-label=".form-select-sm example">
                                <option value="{{$patients->plc_ctyname}}">{{$patients->plc_provname}}</option> 
                                <option value="">---</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <i>City Name</i>
                    <div class="row">
                        <div class="col">
                            <select id="plc_ctycode" name="plc_ctycode" class="form-select-sm regioncategory" aria-label=".form-select-sm example">
                                <option value="{{$patients->plc_ctycode}}">{{$patients->plc_ctyname}}</option> 
                                <option value="">---</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <i>Barangay Name</i>
                    <div class="row">
                        <div class="col">
                            <select id="plc_bgyname" name="plc_bgyname" class="form-select-sm regioncategory" aria-label=".form-select-sm example">
                                <option value="{{$patients->plc_bgycode}}">{{$patients->plc_bgyname}}</option> 
                                <option value="">---</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script>
        // var copyCh = document.getElementById("copyCh");
        //     // var biteInput = document.getElementById("biteInput");
        //     copyCh.addEventListener('click', function() {
        //         var x = document.getElementById("divTempprocodeinput");
        //         var y = document.getElementById("divTemprecodeinput");
        //         var z = document.getElementById("divTemctycodeinput");
        //         var a = document.getElementById("divTempbgycodeinput");
        //         var treg = document.getElementById("temp_regcodeinput");
        //         var tprov = document.getElementById("temp_provcodeinput");
        //         var tcty = document.getElementById("temp_ctycodeinput");
        //         var tbgy = document.getElementById("temp_bgycodeinput");
        //         var aa = document.getElementById("temp_regcode");
        //         var bb = document.getElementById("temp_provcode");
        //         var cc = document.getElementById("temp_citycode");
        //         var dd = document.getElementById("temp_bgycode");
        //         var opTempregode = document.getElementById("opTempregode");
        //         // if (x.style.display && y.style.display && z.style.display && a.style.display === "block") {
        //         //     x.style.display = "none";
        //         //     y.style.display = "none";
        //         //     z.style.display = "none";
        //         //     a.style.display = "none";
        //         // } else {
        //         //     x.style.display = "block";
        //         //     y.style.display = "block";
        //         //     z.style.display = "block";
        //         //     a.style.display = "block";
        //         // }
        //         if(this.checked){
        //             opTempregode.value = document.getElementById("pat_current_address").value;
        //             treg.value = document.getElementById("pat_current_address").value;
        //             tprov.value = document.getElementById("pat_current_province").value;
        //             tcty.value = document.getElementById("pat_current_city").value;
        //             tbgy.value = document.getElementById("pat_current_bgy").value;

        //             // aa.disabled = 'true';
        //             // aa.value = '';
        //             bb.disabled = 'true';
        //             bb.value = '';
        //             cc.disabled = 'true';
        //             cc.value = '';
        //             dd.disabled = 'true';
        //             dd.value = '';
        //             // y.disabled = '';
        //             // z.disabled = '';
        //             // a.disabled = '';

        //             tbgy.disabled = '';
        //             treg.disabled = '';
        //             tprov.disabled = '';
        //             tcty.disabled = '';
        //             // $("#temp_regcode").hide();
        //             // $("#temp_provcode").hide();
        //             // $("#temp_ctycode").hide();
        //             // $("#temp_bgycode").hide();

        //             // $("#temp_regcodeinput").show();
        //             // $("#temp_provcodeinput").show();
        //             // $("#temp_ctycodeinput").show();
        //             // $("#temp_bgycodeinput").show();
        //         }
        //         else{
        //             treg.value = "";
        //             tprov.value = "";
        //             tcty.value = "";
        //             tbgy.value = "";

        //             // aa.disabled = '';
        //             bb.disabled = '';
        //             cc.disabled = '';
        //             dd.disabled = '';
        //             // x.disabled = 'true';
        //             // z.disabled = 'true';
        //             // a.disabled = 'true';

        //             tcty.disabled = 'true';
        //             tprov.disabled = 'true';
        //             treg.disabled = 'true';
        //             tbgy.disabled = 'true';

        //             // $("#temp_regcode").show();
        //             // $("#temp_provcode").show();
        //             // $("#temp_ctycode").show(); 
        //             // $("#temp_bgycode").show();
        //         }
        //     });

        </script>
    <div class="row ">
        <div class="col col-sm-4 border-top border-end border-secondary" id="divbday">
                <div class="row">
                    <div class="col">
                          <b>Birthday:</b>  
                        <div class="row">
                            <div class="col">
                            {{date('F j,Y',  strtotime($patients->pat_date_of_birth))}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col" id="divsex">
                                <b>Sex:</b>
                                <label for="">{{$patients->pat_sex}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                   <b>Age:</b>  {{$patients->age_years}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                   <b>Months:</b> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                  <b>Days:</b>  
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col border-top border-secondary" id="divbday">
            <div class="row">
                <div class="col">
                    <b>Injury Date</b> 
                    <div class="row">
                        <div class="col">
                    <!-- <input type="date" class="inputlabelunderlineName" name="inj_date" id="inj_date" value="{{$patients->inj_date}}"> -->
                    {{date('F j,Y',  strtotime($patients->inj_date))}}
                   
                        </div>
                    </div>
                </div>
                <div class="col">
                    <b>Encounter date</b> 
                    <div class="row">
                        <div class="col">
                    <!-- <input type="date" class="inputlabelunderlineName" name="encounter_date" id="encounter_date" value="{{$patients->encounter_date}}"> -->
                    {{date('F j,Y',  strtotime($patients->encounter_date))}}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <b>Date report</b> 
                    <div class="row">
                        <div class="col">
                    <input type="date" class="inputlabelunderlineName" required id="appt" name="date_report" value="{{$patients->date_report}}" >

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <b>Injury Time</b> 
                    <div class="row">
                        <div class="col">
                    <!-- <input type="time" class="inputlabelunderlineName" max="18:00" name="inj_time" id="inj_time" value="{{$patients->inj_time}}"> -->

                    {{date('H:i:s',  strtotime($patients->inj_time))}}

                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <b>Encounter time</b> 
                    <div class="row">
                        <div class="col">
                    <!-- <input type="time" class="inputlabelunderlineName" max="18:00" name="encounter_time" id="encounter_time" value="{{$patients->encounter_time}}"> -->
                    {{date('H:i:s',  strtotime($patients->encounter_time))}}

                        </div>
                    </div>
                </div>
                <div class="col">
                    <b>Time report</b> 
                    <div class="row">
                        <div class="col">
                    <input type="time" id="appt" name="time_report" required max="18:00" value="{{$patients->time_report}}">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top border-secondary">
        <div class="col">
            <div class="row">
                
            </div>
            <div class="row">
            <div class="col">
            <div class="row">
                <div class="col">
                   <b>Facility Region:</b> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                <label for="">CAR</label>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                   <b>Facility Province:</b> 
                </div>
            </div>
            <div class="row">
                   <!-- <div class="col">
                   <select id="Pat_Facility_Prov" name="Pat_Facility_Prov" class="form-select-sm" aria-label=".form-select-sm example">
                        <option value="{{$patients->Pat_Facility_Prov}}">{{$patients->Pat_Facility_Prov}}</option>
                        <option value="">---</option>
                    </select>
                   </div>  -->
                   <label for="">BENGUET</label>
            </div>
        </div>

        <div class="col">
            <div class="row">
                <div class="col">
                   <b>Facility City:</b> 
                </div>
                <div class="col">
                   <b>Facility No:</b> 
                    <!-- <input type="text" class="inputlabelunderline" name="pat_facility_no" value="{{$patients->pat_facility_no}}"> -->
                </div>
            </div>
            <div class="row">
                <!-- <div class="col">
                <select id="Pat_Facility_City" name="Pat_Facility_City" class="form-select-sm" aria-label=".form-select-sm example">
                    <option value="{{$patients->Pat_Facility_City}}">{{$patients->Pat_Facility_City}}</option>
                    <option value="">---</option>
                </select>
                </div> -->
                <label for="">BAGUIO CITY</label>

            </div>
        </div>
        <!-- <div class="col">
            <div class="row">
                <div class="col">
                    Facility Barangay:
                </div>
            </div>
            <div class="row">
                <div class="col">
                <select id="Pat_Facility_Bgy" name="Pat_Facility_Bgy" class="form-select-sm" aria-label=".form-select-sm example">
                <option value="{{$patients->Pat_Facility_Bgy}}">{{$patients->Pat_Facility_Bgy}}</option>
                    <option value="">---</option>
                </select>
                </div>

            </div>
        </div> -->
        
            </div>
        </div>
        
    </div>
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        jQuery(document).ready(function(){
            jQuery('#Pat_Facility_Reg').change(function() {
                let regc=jQuery(this).val();
                // alert (regc);
                jQuery.ajax({
                    url:'/getRegion', 
                    type:'post',
                    data: {'regc': regc,
                        "_token": "{{ csrf_token() }}",
                    },
                    success:function(result){ 
                        jQuery('#Pat_Facility_Prov').html(result)
                    }
                })
            });
            jQuery('#Pat_Facility_Prov').change(function() {
                    let provc=jQuery(this).val();
                    // alert (provc);
                    jQuery.ajax({
                        url:'/getProv', 
                        type:'post',
                        data: {'provc': provc,
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function(result){ 
                            jQuery('#Pat_Facility_City').html(result)
                        }
                    })
                });
            jQuery('#Pat_Facility_City').change(function() {
                    let ctyc=jQuery(this).val();
                    // alert (ctyc);
                    jQuery.ajax({
                        url:'/getCty', 
                        type:'post',
                        data: {'ctyc': ctyc,
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function(result){ 
                            jQuery('#Pat_Facility_Bgy').html(result)
                        }
                    })
                });
                jQuery('#temp_regcode').change(function() {
                    let tregc=jQuery(this).val();
                    // alert (tregc);
                    jQuery.ajax({
                        url:'/getTempRegion', 
                        type:'post',
                        data: {'tregc': tregc,
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function(result){ 
                            jQuery('#temp_provcode').html(result)
                        }
                    })
                });
                jQuery('#temp_provcode').change(function() {
                    let tprovc=jQuery(this).val();
                    // alert (tprovc);
                    jQuery.ajax({
                        url:'/getTempProv', 
                        type:'post',
                        data: {'tprovc': tprovc,
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function(result){ 
                            jQuery('#temp_citycode').html(result)
                        }
                    })
                });
                jQuery('#temp_citycode').change(function() {
                    let tctyc=jQuery(this).val();
                    // alert (tctyc);
                    jQuery.ajax({
                        url:'/getTempCty', 
                        type:'post',
                        data: {'tctyc': tctyc,
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function(result){ 
                            jQuery('#temp_bgycode').html(result)
                        }
                    })
                });
                jQuery('#plc_regcode').change(function() {
                    let plcReg=jQuery(this).val();
                    // alert (tctyc);
                    jQuery.ajax({
                        url:'/getPlcReg', 
                        type:'post',
                        data: {'plcReg': plcReg,
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function(result){ 
                            jQuery('#plc_provcode').html(result)
                        }
                    })
                });
                jQuery('#plc_provcode').change(function() {
                    let plcProv=jQuery(this).val();
                    // alert (tprovc);
                    jQuery.ajax({
                        url:'/getPlcProv', 
                        type:'post',
                        data: {'plcProv': plcProv,
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function(result){ 
                            jQuery('#plc_ctycode').html(result)
                        }
                    })
                });
                jQuery('#plc_ctycode').change(function() {
                    let plcCty=jQuery(this).val();
                    // alert (tprovc);
                    jQuery.ajax({
                        url:'/getPlcCty', 
                        type:'post',
                        data: {'plcCty': plcCty,
                            "_token": "{{ csrf_token() }}",
                        },
                        success:function(result){ 
                            jQuery('#plc_bgyname').html(result)
                        }
                    })
                });
        });
        // jQuery(document).ready(function(){
        //     jQuery('#provname').change(function() {
        //         let provc=jQuery(this).val();
        //         alert (provc);
        //         // jQuery.ajax({
        //         //     url:'/getRegion', 
        //         //     type:'post',
        //         //     data: {'regc': regc,
        //         //         "_token": "{{ csrf_token() }}",
        //         //     },
        //         //     success:function(result){ 
        //         //         jQuery('#province').html(result)
        //         //     }
        //         // })
        //     });
        // });
    </script>


    <div class="row border-top border-secondary">
        
        <div class="col">
            <div class="row">
                <div class="col">
                   <b>Hospital Patient ID No.:</b> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <!-- <input type="text" class="inputlabelunderlineName" name="hosp_no" value="{{$patients->hosp_no}}"> -->
                    {{$patients->hpercode}}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <b>Hosptial Registry No.:</b> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="inputlabelunderlineName" name="hosp_reg_no" value="{{$patients->hosp_reg_no}}">

                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <b>Hosptial Case No.:</b> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="inputlabelunderlineName" name="hosp_cas_no" value="{{$patients->hosp_cas_no}}">
                </div>
            </div>
        </div>
    </div>
                    </div>
                </div>
            </div>
<br>
<div class="card-header p-2 text-white" id="bgGreen">PRE-ADMISSION DATA:</div>

                <div class="form-group">
                    
                    <div class="container" >

                            <div class="row">
                                <div class="col" >
                                    <div class="row">
                                        <div class="col-auto">
                                           <b>Injury Intent:</b> 
                                        </div>
                                        <div class="col-auto" >
                                            <input class="form-check-input" type="radio" name="inj_intent_code" id="Unintentional/Accidental" value="Unintentional/Accidental" checked {{ ($chdata->inj_intent_code == 'Unintentional/Accidental'? ' checked' : '') }}>
                                            <label for="Unintentional/Accidental" id="divpat1">Unintentional/Accidental</label>
                                           <div class="row">
                                            <div class="col-auto">
                                                <input class="form-check-input" type="radio" name="inj_intent_code" id="Undetermined" value="Undetermined" {{ ($chdata->inj_intent_code == 'Undetermined'? ' checked' : '') }}>
                                                <label for="Undetermined">Undetermined</label>

                                            </div>
                                           </div>
                                        </div>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="radio" name="inj_intent_code" id="IntentionalV" value="Intentional(violence)" {{ ($chdata->inj_intent_code == 'Intentional(violence)'? ' checked' : '') }}>
                                            <label for="IntentionalV">Intentional (violence)</label>

                                        </div>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="radio" name="inj_intent_code" id="VAWC" value="VAWC Patient" {{ ($chdata->inj_intent_code == 'VAWC Patient'? ' checked' : '') }}>
                                            <label for="VAWC"> VAWC Patient</label>

                                        </div>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="radio" name="inj_intent_code" id="IntentionalS" value="Intentional(self-inflict)" {{ ($chdata->inj_intent_code == 'Intentional(self-inflict)'? ' checked' : '') }}>
                                            <label for="IntentionalS">Intentional(self-inflict)</label>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                    <div class="row ">
                        <div class="col ">
                                <div class="row">
                                    <div class="col-auto">
                                        <label class="firstAid"><b>First Aid Given:</b> </label>
                                    </div>
                                    <div class="col-auto">
                                    <!-- <input type="hidden" name="rdoAid" value="N"> -->
                                        <input class="form-check-input" type="radio" name="rdoAid" id="aidYes" value="Yes" checked{{ ($chdata->rdoAid == 'Yes'? ' checked' : '') }}>
                                        <label class="form-check-label" for="aidYes">
                                            Yes</label>
                                    </div>
                                    <div class="col-auto">
                                        </label>
                                        <input class="form-check-input" type="radio" name="rdoAid" id="aidNo" value="No"  {{ ($chdata->rdoAid == 'No'? ' checked' : '') }}>
                                        <label class="form-check-label" for="aidNo">
                                            No</label>
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        </label>
                                        <input class="form-check-input" type="radio" name="rdoAid" id="aidUnk" value="Unknown"  {{ ($chdata->rdoAid == 'Unknown'? ' checked' : '') }}>
                                        <label class="form-check-label" for="aidUnk">
                                            Unknown</label>
                                        </label>
                                    </div>
                                </div>
                        </div>
                        <div class="col">
                            <b>By whom(required if yes):</b> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto" id="frsAidComm">
                        <textarea class="form-control" name="frstAid" id="frstAid"
                            placeholder="-- No first aid given --" >{{$patients->frstAid}}</textarea>
                        </div>
                        <div class="col" id="docAdmitCol">
                            <input type="text" required name="docAdmit" id="docAdmit" value="{{$patients->docAdmit}}"
                            placeholder=" -- Name Here --" class="form-control">
                        </div>
                    </div>
                    </div>
                </div>
            

            <hr>
            <div class="form-group col-md-12">
                <h5>Nature of Injury/ies:</h5>
                <div class="innerdiv">
                    <div class="row">
                        
                        
                        <div class="grid-containter" id="gridInjuries">
                            <div class="item1">
                                <Label>Multiple injuries?</Label>
                            </div>
                            <div class="item2">
                                <input class="form-check-input" required type="radio" name="injryRdo" id="injuryRdo1" value="Yes" {{ ($chdata->injryRdo == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="injuryRdo1">
                                    Yes
                                </label>
                            </div>
                            <div class="item3">
                                <input class="form-check-input" type="radio" name="injryRdo" id="injuryRdo2" value="No"  {{ ($chdata->injryRdo == 'No'? ' checked' : '') }}>
                                <label class="form-check-label" for="injuryRdo2">
                                    No
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="row mx-md-n3">
                        <div class="col px-md-3">
                            <label class="labelmarginleft"><u>(Check all applicable, indicate in the blank space opposte
                                    each type of injury the body location(site) affected and other deatils)</u></label>
                        </div>
                    </div>

                    <!--checkbox from abrasion-->
                    <div class="form-group row-md-4">
                        <div class="container divpat1">
                        
                            <div class="row">
                                <div class="col col-lg-5">
                                <input type="hidden" name="abrasionCh" value="N">
                                    <input class="form-check-input" type="checkbox" name="abrasionCh" id="Abrasion"
                                        value="Yes"{{ ($chdata->abrasionCh == 'Yes'? ' checked' : '') }}>
                                    <label class="form-check-label" for="Abrasion">
                                        Abrasion    
                                    </label>
                                    <input type="text" class="inputlabelunderline" name="abrasion" id="abrasionInput" 
                                        value="{{$patients->abrasion}}" placeholder="N/A">
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col col-lg-5">
                                    <input type="hidden" name="avulsionCh" value="N">
                                    <input class="form-check-input" type="checkbox" name="avulsionCh" id="avulsion"
                                        value="Yes" {{ ($chdata->avulsionCh == 'Yes'? ' checked' : '') }}>
                                    <label class="form-check-label" for="avulsion">
                                        Avulsion
                                    </label>
                                    <input type="text" class="inputlabelunderline" name="avulsion" id="avulsionInput" 
                                        value="{{$patients->avulsion}}" placeholder="N/A">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-lg-16">
                            <input type="hidden" name="burnCh" value="N">
                            <input class="form-check-input" type="checkbox" name="burnCh" id="burnCh" value="Yes" {{ ($chdata->burnCh == 'Yes'? ' checked' : '') }}>
                            
                                    <label class="form-check-label" for="burnCh">
                                        Burn (Degree of Burn & Extent of Body Surface involved) Degree:
                                    </label>
                                    
                                    <input type="hidden"  name="degree_burn1" value="--">
                                        <input class="" type="checkbox"  name="degree_burn1" id="degree_burn1" value="1st degree" {{ ($chdata->degree_burn1 == '1st degree'? ' checked' : '') }} >
                                        <label class="form-check-label" for="degree_burn1">
                                        1<sup>st</sup>

                                    <input type="hidden" name="degree_burn2" value="--">
                                        <input class="" type="checkbox" name="degree_burn2" id="degree_burn2" value="2nd degree" {{ ($chdata->degree_burn2 == '2nd degree'? ' checked' : '') }}>
                                        <label class="form-check-label" for="degree_burn2">
                                            2<sup>nd</sup>
                                        </label>

                                    <input type="hidden" name="degree_burn3" value="--">
                                        <input class="" type="checkbox" name="degree_burn3" id="degree_burn3" value="3rd degree" {{ ($chdata->degree_burn3 == '3rd degree'? ' checked' : '') }}>
                                        <label class="form-check-label" for="degree_burn3">
                                            3<sup>rd</sup>
                                        </label>

                                    <input type="hidden" name="degree_burn4" value="--">
                                        <input class="" type="checkbox" name="degree_burn4" id="degree_burn4" value="4th degree" {{ ($chdata->degree_burn4 == '4th degree'? ' checked' : '') }}>
                                        <label class="form-check-label" for="degree_burn4">
                                            4<sup>th</sup>
                                        </label>

                                        <label>Site:</label>
                                        <input type="text" class="inputlabelunderline" value="{{$patients->site}}" name="site"  id="burnChInput"
                                            placeholder="N/A">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col col-lg-5">
                                    <input type="hidden" name="concussionCh" value="N">
                                    <input class="form-check-input" type="checkbox" name="concussionCh"
                                        id="concussionCh" value="Yes" {{ ($chdata->concussionCh == 'Yes'? ' checked' : '') }}>
                                    <label class="form-check-label" for="concussionCh">
                                        Concussion
                                    </label>
                                    <input type="text" class="inputlabelunderline" value="{{$patients->concussion}}" name="concussion" id="concussionInput" 
                                        placeholder="N/A">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-lg-5">
                                    <input type="hidden" name="contusionCh" value="N">
                                    <input class="form-check-input" type="checkbox" name="contusionCh" id="contusionCh"
                                        value="Yes" {{ ($chdata->contusionCh == 'Yes'? ' checked' : '') }}>
                                    <label class="form-check-label" for="contusionCh">
                                        Contusion
                                    </label>
                                    <input type="text" class="inputlabelunderline" value="{{$patients->contusion}}" name="contusion" id="contusionInput" 
                                        placeholder="N/A">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-lg-5">
                                    <input type="hidden" name="fractureCh" value="N">
                                    <input class="form-check-input" type="checkbox" name="fractureCh" id="fractureCh"
                                        value="Yes" {{ ($chdata->fractureCh == 'Yes'? ' checked' : '') }}>

                                    <label class="form-check-label" for="fractureCh">
                                        Fracture
                                    </label>
                                    <div class="container">
                                    <div class="row mx-md-n5">
                                        <div class="col px-md-5">

                                            <label class="form-check-label" for="flexCheckDefault">
                                                <input type="hidden" name="openTypeCh" value="N" >
                                                <input class="form-check-input" type="checkbox" name="openTypeCh" 
                                                    id="openTypeCh" value="Yes" {{ ($chdata->openTypeCh == 'Yes'? ' checked' : '') }} >
                                                <label class="form-check-label" for="openTypeCh">
                                                    Open Type
                                                </label>
                                                <input type="text" class="inputlabelunderline"
                                                    value="{{$patients->openType}}" placeholder="N/A" name="openType"  id="openTypeInput" >
                                                <label class="form-check-label" for="Open Type">
                                                    (ex. comminuted, depressed fracture)
                                                </label>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row mx-md-n5">
                                        <div class="col px-md-5">

                                            <label class="form-check-label" for="flexCheckDefault">
                                            <input type="hidden" name="closedTypeCh" value="N">
                                                <input class="form-check-input" type="checkbox" name="closedTypeCh" 
                                                    id="closedTypeCh" value="Yes" {{ ($chdata->closedTypeCh == 'Yes'? ' checked' : '') }} >
                                                <label class="form-check-label" for="closedTypeCh">
                                                    Closed Type
                                                </label>
                                                <input type="text" class="inputlabelunderline" name="closedType"  id="closedTypeInput"
                                                    value="{{$patients->closedType}}" placeholder="N/A">
                                                <label class="form-check-label" for="closedType">
                                                    (ex. Compound, infected fracture)
                                                </label>
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="col col-lg-12">
                                    <input type="hidden" name="woundCh" value="N">
                                        <input class="form-check-input" type="checkbox" name="woundCh" id="woundCh"
                                            value="Yes" {{ ($chdata->woundCh == 'Yes'? ' checked' : '') }}>
                                        <label class="form-check-label" for="woundCh">
                                            <label class="form-check-label" for="woundCh">
                                                Open/Wound Laceration
                                            </label>
                                            <input type="text" class="inputlabelunderline" value="{{$patients->wound}}" name="wound" id="woundInput" 
                                                placeholder="N/A">
                                        </label>
                                    </div>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        (ex. hacking, gunshot, stabbing, animal(dog, cat, rat, snake, etc) bites, human
                                        bites, insect bites, punctured wound, etc)
                                    </label>
                                </div>

                                <div class="row">
                                    <div class="col col-lg-5">
                                    <input type="hidden" name="traumaCh" value="N">
                                        <input class="form-check-input" type="checkbox" name="traumaCh" id="traumaCh"
                                            value="Yes" {{ ($chdata->traumaCh == 'Yes'? ' checked' : '') }}>

                                        <label class="form-check-label" for="traumaCh">
                                            Traumatic Amputation
                                        </label>
                                        <input type="text" class="inputlabelunderline" name="traumaticAmputation" id="traumaInput" 
                                            value="{{$patients->traumaticAmputation}}" placeholder="N/A">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col col-lg-8">
                                    <input type="hidden" name="others1Ch" value="N">
                                        <input class="form-check-input" type="checkbox" name="others1Ch" id="others1Ch"
                                            value="Yes" {{ ($chdata->others1Ch == 'Yes'? ' checked' : '') }}>

                                        <label class="form-check-label" for="others1Ch">
                                            Others: Pls. specify injury and the body part/s affected:
                                        </label>
                                        <input type="text" class="inputlabelunderline" value="{{$patients->others1}}" name="others1" id="others1Input" 
                                            placeholder="N/A">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
        <div class="container">
            <h5>External Cause/s of Injury/ies:</h5>
            <div class="row">
                <div class="col divpat1">
                <input type="hidden" name="bitesCh" value="N">
                    <input class="form-check-input" type="checkbox" name="bitesCh" id="bitesCh" value="Yes" {{ ($chdata->bitesCh == 'Yes'? ' checked' : '') }}>
                    <label class="form-check-label" for="bitesCh">
                        Bites/stings, Specify animal/insect:
                    </label>
                    <input type="text" class="inputlabelunderline" value="{{$patients->bites}}" placeholder="N/A" name="bites" id="biteInput" >

                    <div class="row">
                        <div class="col-auto">
                        <input type="hidden" name="burn1Ch" value="N">
                            <input class="form-check-input" type="checkbox" name="burn1Ch" id="burn1Ch" value="Yes" {{ ($chdata->burn1Ch == 'Yes'? ' checked' : '') }}>
                            <label class="form-check-label" for="burn1Ch">
                                Burn,
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Heat"  name="burnRdo" id="Heat" {{ ($chdata->burnRdo == 'Heat'? ' checked' : '') }}>
                            <label class="form-check-label" for="Heat">
                                Heat
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Fire"  name="burnRdo" id="Fire" {{ ($chdata->burnRdo == 'Fire'? ' checked' : '') }}> 
                            <label class="form-check-label" for="Fire">
                                Fire
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Electricity"  name="burnRdo" id="Electricty" {{ ($chdata->burnRdo == 'Electricity'? ' checked' : '') }}>
                            <label class="form-check-label" for="Electricty">
                                Electricty
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Oil"  name="burnRdo" id="Oil" {{ ($chdata->burnRdo == 'Oil'? ' checked' : '') }}>
                            <label class="form-check-label" for="Oil">
                                Oil
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Friction"  name="burnRdo" id="Friction" {{ ($chdata->burnRdo == 'Friction'? ' checked' : '') }}>
                            <label class="form-check-label" for="Friction">
                                Friction
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="burnOther"  name="burnRdo" id="Others2" {{ ($chdata->burnRdo == 'burnOther'? ' checked' : '') }}>
                            <label class="form-check-label" for="Others2">
                                Others,specify
                            </label>
                            <input type="text" class="inputlabelunderline" value="{{$patients->others2}}" name="others2" id="others2Input" 
                                placeholder="N/A">
                        </div>

                    </div>

                    <input type="hidden" name="chemicalCh" value="N">
                    <input class="form-check-input" type="checkbox" name="chemicalCh" id="chemicalCh" value="Yes" {{ ($chdata->chemicalCh == 'Yes'? ' checked' : '') }}>
                    <div class="row">
                        <div class="col-auto">
                            <label class="form-check-label" for="chemicalCh">
                                Chemical/Substance, specify
                            </label>
                            <input type="text" class="inputlabelunderline" value="{{$patients->chemical}}" name="chemical" id="chemInput" 
                                placeholder="N/A">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-8">
                        <input type="hidden" name="sharpCh" value="N">
                            <input class="form-check-input" type="checkbox" name="sharpCh" id="sharpCh" value="Yes" {{ ($chdata->sharpCh == 'Yes'? ' checked' : '') }}>
                            <label class="form-check-label" for="sharpCh">
                                Contact with sharp objects, specify object
                            </label>
                            <input type="text" class="inputlabelunderline" value="{{$patients->sharp}}" name="sharp" id="sharpInput" 
                                placeholder="N/A">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-auto">
                        <input type="hidden" name="drowningCh" value="N">
                            <input class="form-check-input" type="checkbox" name="drowningCh" id="drowningCh"
                                value="Yes" {{ ($chdata->drowningCh == 'Yes'? ' checked' : '') }}>
                            <label class="form-check-label" for="drowningCh">
                                Drowning: Type/Body of Water:
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Sea"  name="drowningRdo" id="Sea" {{ ($chdata->drowningRdo == 'Sea'? ' checked' : '') }}>
                            <label class="form-check-label" for="Sea">
                                Sea
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="River"  name="drowningRdo" id="River" {{ ($chdata->drowningRdo == 'River'? ' checked' : '') }}>
                            <label class="form-check-label" for="River">
                                River
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Lake" name="drowningRdo" id="Lake" {{ ($chdata->drowningRdo == 'Lake'? ' checked' : '') }}>
                            <label class="form-check-label" for="Lake">
                                Lake
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Pool"  name="drowningRdo" id="Pool" {{ ($chdata->drowningRdo == 'Pool'? ' checked' : '') }}>
                            <label class="form-check-label" for="Pool">
                                Pool
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Bath Tub"  name="drowningRdo" id="BathTub" {{ ($chdata->drowningRdo == 'Bath Tub'? ' checked' : '') }}>
                            <label class="form-check-label" for="BathTub">
                                Bath Tub
                            </label>
                        </div>
                        <div class="col col-lg-4">
                            <input class="form-check-input" type="radio" value="drowningOther"   name="drowningRdo" id="Others3" {{ ($chdata->drowningRdo == 'drowningOther'? ' checked' : '') }}>
                            <label class="form-check-label" for="Others3">
                                Others,specify
                            </label>
                            <input type="text" class="inputlabelunderline" value="{{$patients->others3}}"  name="others3" id="others3Input" 
                                placeholder="N/A">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-auto">
                        <input type="hidden" name="natureCh" value="N">
                            <input class="form-check-input" type="checkbox" name="natureCh" id="natureCh" value="Yes" {{ ($chdata->natureCh == 'Yes'? ' checked' : '') }}>
                            <label class="form-check-label" for="natureCh">
                                Exposure to forces of Nature:
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" name="natureRdo"  id="Earthquake" value="Earthquake" {{ ($chdata->natureRdo == 'Earthquake'? ' checked' : '') }}>
                            <label class="form-check-label" for="Earthquake">
                                Earthquake
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" name="natureRdo"  id="Volcanic" value="Volcanic" {{ ($chdata->natureRdo == 'Volcanic'? ' checked' : '') }}>
                            <label class="form-check-label" for="Volcanic">
                                Volcanic eruption
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" name="natureRdo"  id="Typhoon" value="Typhoon" {{ ($chdata->natureRdo == 'Typhoon'? ' checked' : '') }}>
                            <label class="form-check-label" for="Typhoon">
                                Typhoon
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" name="natureRdo"  id="Landslide" value="Landslide" {{ ($chdata->natureRdo == 'Landslide'? ' checked' : '') }}>
                            <label class="form-check-label" for="Landslide">
                                Landslide
                            </label>
                        </div>
                        <div class="col-auto">
                        <input class="form-check-input" type="radio" name="natureRdo"  id="natureOth" value="ext_expo_nature_oth" {{ ($chdata->natureRdo == 'ext_expo_nature_oth'? ' checked' : '') }}>
                        <label class="form-check-label" for="natureOth">
                                    Others,specify
                                </label>
                                <input type="text" class="inputlabelunderline"  value="{{$patients->ext_expo_nature_sp}}" name="ext_expo_nature_sp" id="ext_expo_nature_sp" 
                                    placeholder="N/A">
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="gunshotCh" value="N">
                                <input class="form-check-input" type="checkbox" name="gunshotCh" id="gunshotCh"
                                    value="Yes" {{ ($chdata->gunshotCh == 'Yes'? ' checked' : '') }}>

                                <label class="form-check-label" for="gunshotCh">
                                    Gunshot, Specify weapon
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->gunshot}}" name="gunshot" id="gunshotInput" 
                                    placeholder="N/A">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-4">
                            <input type="hidden" name="hangingCh" value="N">
                                <input class="form-check-input" type="checkbox" name="hangingCh" id="hangingCh"
                                    value="Yes" {{ ($chdata->hangingCh == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="hangingCh">
                                    Hanging/Strangulation
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-4">
                            <input type="hidden" name="maulingCh" value="N">
                                <input class="form-check-input" type="checkbox" name="maulingCh" id="maulingCh"
                                    value="Yes" {{ ($chdata->maulingCh == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="maulingCh">
                                    Mauling/Assault
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-4">
                            <input type="hidden" name="transportCh" value="N">
                                <input class="form-check-input" type="checkbox" name="transportCh" id="transportCh"
                                    value="Yes" {{ ($chdata->transportCh == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="transportCh">
                                    Transport/Vehicular Accident
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="fallCh" value="N">
                                <input class="form-check-input" type="checkbox" name="fallCh" id="fallCh" value="Yes" {{ ($chdata->fallCh == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="fallCh">
                                    Fall, specify, from/in/on/into
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->fall}}" name="fall" id="fallInput" 
                                    placeholder="N/A">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="firecrackerCh" value="N">
                                <input class="form-check-input" type="checkbox" name="firecrackerCh"
                                    id="firecrackerCh" value="Yes" {{ ($chdata->firecrackerCh == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="firecrackerCh">
                                    Firecracker:
                                </label>
                                
                            </div>
                            <div class="col-auto">
                                <div class="row">
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" name="firecracker_code" id="firecracker_code_1" value="">
                                    <label class="form-check-label" for="5-star">
                                        5-star
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="row">
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" name="firecracker_code" id="firecracker_code_2" value="">
                                    <label class="form-check-label" for="Giant_Bawang">
                                    Giant Bawang
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="row">
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" name="firecracker_code" id="firecracker_code_3" value="">
                                    <label class="form-check-label" for="Piccolo">
                                        Piccolo
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="row">
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" name="firecracker_code" id="firecracker_code_4" value="">
                                    <label class="form-check-label" for="Goodbye_De_Lima">
                                    Goodbye De Lima
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="row">
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" name="firecracker_code" id="firecracker_code_5" value="">
                                    <label class="form-check-label" for="Super_Lolo">
                                    Super Lolo
                                    </label>
                                </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="row">
                                    Others:
                                <input type="text" class="inputlabelunderline" value="{{$patients->firecracker}}" name="firecracker" id="firecrackInput" 
                                    placeholder="N/A">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="assaultCh" value="N">
                                <input class="form-check-input" type="checkbox" name="assaultCh" id="assaultCh"
                                    value="Yes" {{ ($chdata->assaultCh == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="assaultCh">
                                    Sexual Assault/Sexual Abuse/Rape(Alleged)
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="others5Ch" value="N">
                                <input class="form-check-input" type="checkbox" name="others5Ch" id="others5Ch"
                                    value="Yes" {{ ($chdata->others5Ch == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="others5Ch">
                                    Others,specify
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->others5}}" name="others5" id="others5Input" 
                                    placeholder="N/A">
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>

               
            <hr>
            <!-- External cause panel -->
            <div class="form-group rows-print-as-pages border border-secondary">
            
                    <div class="row">
                        <div class="col">
                            <h5>FOR TRANSPORT/VEHICULAR ACCIDENT ONLY:</h5>
                        </div>
                    </div>
                        <div class="col border-top border-secondary divpat1">
                                            <div class="row border-bottom border-secondary">
                                                <div class="col-auto">
                                                    <label>For transport/vehicular accident only:</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" name="areaRdo"
                                                        id="Land" value="Land" {{ ($chdata->areaRdo == 'Land'? ' checked' : '') }}>
                                                    <label class="form-check-label mx-auto" for="Land">
                                                        Land
                                                    </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" name="areaRdo"
                                                        id="Water" value="Water" {{ ($chdata->areaRdo == 'Water'? ' checked' : '') }}>
                                                    <label class="form-check-label mx-auto" for="Water">
                                                        Water
                                                    </label>
                                                </div>
                                                <div class="col col-lg-4">
                                                    <input class="form-check-input" type="radio" name="areaRdo"
                                                        id="Air" value="Air" {{ ($chdata->areaRdo == 'Air'? ' checked' : '') }}>
                                                    <label class="form-check-label mx-auto" for="Air">
                                                        Air
                                                    </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" name="collRdo"
                                                        id="Collision" value="Collision" {{ ($chdata->collRdo == 'Collision'? ' checked' : '') }}>
                                                    <label class="form-check-label mx-auto" for="Collision">
                                                        Collision
                                                    </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" name="collRdo"
                                                        id="Non-Collision" value="Non-Collision" {{ ($chdata->collRdo == 'Non-Collision'? ' checked' : '') }}>
                                                    <label class="form-check-label" for="Non-Collision">
                                                        Non-Collision
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row border-bottom border-secondary">
                                                <div class="col-auto">
                                                    <h6 class="form-check-label" for="flexCheckDefault">
                                                        Severity:
                                                    </h6>
                                                </div>
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" name="severRdo"
                                                        id="Fatal Accident" value="FatalAccident" {{ ($chdata->severRdo == 'FatalAccident'? ' checked' : '') }}>
                                                    <label class="form-check-label" for="Fatal Accident">
                                                        Fatal Accident
                                                    </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" value="Serious"
                                                        name="severRdo" id="Serious" value="Serious" {{ ($chdata->severRdo == 'Serious'? ' checked' : '') }}>
                                                    <label class="form-check-label" for="Serious">
                                                        Serious Injury Accident
                                                    </label>
                                                </div>

                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" value="Minor"
                                                        name="severRdo" id="Minor" value="Minor" {{ ($chdata->severRdo == 'Minor'? ' checked' : '') }}>
                                                    <label class="form-check-label" for="Minor">
                                                        Minor Injury Accident
                                                    </label>
                                                </div>

                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" value="Property"
                                                        name="severRdo" id="Property" value="Property" {{ ($chdata->severRdo == 'Property'? ' checked' : '') }}>
                                                    <label class="form-check-label" for="Property">
                                                        Property Damage Only
                                                    </label>
                                                </div>
                                            </div>


                                            <div class="row">

                                                <div class="col-auto border-end border-secondary">
                                                    <!--33a.2-->
                                                    <div class="col-auto">
                                                        <h6 class="form-check-label" for="flexCheckDefault">
                                                            Vehicles Invloved:
                                                        </h6>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-auto float-left">
                                                            <div class="row">
                                                                <div class="col-auto">
                                                                    <h6 class="form-check-label" for="flexCheckDefault">
                                                                        Patient's Vehicle
                                                                    </h6>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-auto">
                                                                    <h6 class="form-check-label" for="flexCheckDefault">

                                                                    </h6>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Pedestrian" value="patvehiclenone" {{ ($chdata->vehicleRdo == 'patvehiclenone'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Pedestrian">
                                                                        None(Pedestrian)
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Car" value="patCar" {{ ($chdata->vehicleRdo == 'patCar'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Car">
                                                                        Car
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Van" value="patVan" {{ ($chdata->vehicleRdo == 'patVan'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Van">
                                                                        Van
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="row row-lg-8">
                                                                <div class="col-auto">
                                                                    <h6 class="form-check-label" for="flexCheckDefault">

                                                                    </h6>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Bus" value="patBus" {{ ($chdata->vehicleRdo == 'patBus'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Bus">
                                                                        Bus
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Motorcycle" value="patMotorcycle" {{ ($chdata->vehicleRdo == 'patMotorcycle'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Motorcycle">
                                                                        Motorcycle
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Bicycle" value="patBicycle" {{ ($chdata->vehicleRdo == 'patBicycle'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Bicycle">
                                                                        Bicycle
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Tricycle" value="patTricycle" {{ ($chdata->vehicleRdo == 'patTricycle'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Tricycle">
                                                                        Tricycle
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="row row-lg-8">
                                                                <div class="col-auto">
                                                                    <h6 class="form-check-label" for="flexCheckDefault">

                                                                    </h6>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Others6" value="patvehicleother" {{ ($chdata->vehicleRdo == 'patvehicleother'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Others6"
                                                                        name="others6">
                                                                        Others,
                                                                    </label>
                                                                    <input type="text" class="inputlabelunderline"
                                                                        value="{{$patients->others6}}" placeholder="N/A" name="others6"> 
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Unknown" value="patvehicleunkown" {{ ($chdata->vehicleRdo == 'patvehicleunkown'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Unknown">
                                                                        Unknown
                                                                    </label>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="row row-lg-8">
                                                                <div class="col-auto">
                                                                    <h6 class="form-check-label" for="flexCheckDefault">
                                                                        Other Vehicle/Object Involved(for COLLISION accident
                                                                        ONLY)
                                                                    </h6>
                                                                </div>
                                                            </div>

                                                            <div class="row">

                                                                <div class="col-auto">
                                                                    <h6 class="form-check-label" for="flexCheckDefault">

                                                                    </h6>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Pedestrian1" value="othVehNone" {{ ($chdata->otherRdo == 'othVehNone'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Pedestrian1">
                                                                        None(Pedestrian)
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Car1" value="othCar" {{ ($chdata->otherRdo == 'othCar'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Car1">
                                                                        Car
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Van1" value="othVan" {{ ($chdata->otherRdo == 'othVan'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Van1">
                                                                        Van
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="row row-lg-8">
                                                                <div class="col-auto">
                                                                    <h6 class="form-check-label" for="flexCheckDefault">

                                                                    </h6>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Bus1" value="othBus" {{ ($chdata->otherRdo == 'othBus'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Bus1">
                                                                        Bus
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Motorcycle1" value="othMotor" {{ ($chdata->otherRdo == 'othMotor'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Motorcycle1">
                                                                        Motorcycle
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Bicycle1" value="othBic" {{ ($chdata->otherRdo == 'othBic'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Bicycle1">
                                                                        Bicycle
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Tricycle1" value="othTric" {{ ($chdata->otherRdo == 'othTric'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Tricycle1">
                                                                        Tricycle
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="row row-lg-8">
                                                                <div class="col-auto">
                                                                    <h6 class="form-check-label" for="flexCheckDefault">

                                                                    </h6>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Others7" value="othOtherveh" {{ ($chdata->otherRdo == 'othOtherveh'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Others7">
                                                                        Others,
                                                                    </label>
                                                                    <input type="text" class="inputlabelunderline"
                                                                        name="others7" value="{{ $patients->others7}}"
                                                                        placeholder="N/A">
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Unknown1" value="othUnkwn"{{ ($chdata->otherRdo == 'othUnkwn'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Unknown1">
                                                                        Unknown
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!--33a.2 end-->

                                                <!--33a.3-->
                                                <div class="col-auto border-end border-secondary">
                                                    <div class="col-auto">
                                                        <h6 class="form-check-label" for="flexCheckDefault">
                                                            Position of Patient
                                                        </h6>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Pedestrian2" value="posPed" {{ ($chdata->posRdo == 'posPed'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Pedestrian2">
                                                                    Pedestrian
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Driver" value="posDriver" {{ ($chdata->posRdo == 'posDriver'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Driver">
                                                                    Driver
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Captain" value="posCapt" {{ ($chdata->posRdo == 'posCapt'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Captain">
                                                                    Captain
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Pilot" value="posPilot" {{ ($chdata->posRdo == 'posPilot'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Pilot">
                                                                    Pilot
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Front" value="posFront" {{ ($chdata->posRdo == 'posFront'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Front">
                                                                    Front Passenger
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Rear" value="posRear" {{ ($chdata->posRdo == 'posRear'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Rear">
                                                                    Rear Passenger
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Others8" value="posOth" {{ ($chdata->posRdo == 'posOth'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Others8">
                                                                    Others,
                                                                </label>
                                                                <input type="text" class="inputlabelunderline2"
                                                                    name="others8" value="{{ $patients->others8}}"
                                                                    placeholder="N/A">
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Unknown2" value="posUnkwn" {{ ($chdata->posRdo == 'posUnkwn'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Unknown2">
                                                                    Unknown
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--33a.3 end-->

                                                <!--33a.4-->
                                                <div class="col border-bottom border-secondary" id="colViIn">
                                                    <div class="col-auto">
                                                        <h6 class="form-check-label" for="flexCheckDefault">
                                                            Victims Involved
                                                        </h6>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="victimsRdo" id="Alone" value="alone" {{ ($chdata->victimsRdo == 'alone'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Alone">
                                                                    Alone
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="victimsRdo" id="Withothers" value="Withothers" {{ ($chdata->victimsRdo == 'Withothers'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Withothers">
                                                                    With others, specify how many(excuding the victim)
                                                                </label>
                                                                <input type="text" class="inputlabelunderline2" name="withothers"
                                                                    value="{{$patients->withothers}}" placeholder="N/A"> 
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--33a.4 end-->
                                            </div>
                                            <div class="row">
                                                <div class="col-auto border border-secondary border-left-0 border-right-0">
                                                    <!--33b-->
                                                    <div class="col-auto">
                                                        <h6 class="form-check-label" for="flexCheckDefault">
                                                            Place of Occurrence:
                                                        </h6>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="placeRdo" id="Home" value="Home" {{ ($chdata->placeRdo == 'Home'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Home">
                                                                    Home
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="placeRdo" id="School" value="School" {{ ($chdata->placeRdo == 'School'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="School">
                                                                    School
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="placeRdo" id="Road" value="Road" {{ ($chdata->placeRdo == 'Road'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Road">
                                                                    Road
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="placeRdo" id="Bars" value="Bar" {{ ($chdata->placeRdo == 'Bar'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Bars">
                                                                    Videoke Bars
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="placeRdo" id="Workplace" value="Workplace" {{ ($chdata->placeRdo == 'Workplace'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Workplace">
                                                                    Workplace, specify
                                                                </label>
                                                                <input type="text" class="inputlabelunderline2"
                                                                    name="workplaceInput" value="{{ $patients->workplaceInput}}" placeholder="N/A">
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="placeRdo" id="Others9" value="placeOth" {{ ($chdata->placeRdo == 'placeOth'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Others9">
                                                                    Others, specify
                                                                </label>
                                                                <input type="text" class="inputlabelunderline2"
                                                                    name="others9" value="{{ $patients->others9}}"
                                                                    placeholder="N/A">
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="placeRdo" id="Unkown4" value="placeUnkwn" {{ ($chdata->placeRdo == 'placeUnkwn'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Unkown4">
                                                                    Unkown
                                                                </label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto border border-secondary">
                                                    <!--33c-->
                                                    <div class="col-auto">
                                                        <h6 class="form-check-label" for="flexCheckDefault">
                                                            Activity of the Patient at the <br> time of the incident:
                                                        </h6>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="activityRdo" id="Sports" value="Sports" {{ ($chdata->activityRdo == 'Sports'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Sports">
                                                                    Sports
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="activityRdo" id="Leisure" value="Leisure" {{ ($chdata->activityRdo == 'Leisure'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Leisure">
                                                                    Leisure
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="activityRdo" id="Workrelated" value="Work Related" {{ ($chdata->activityRdo == 'WorkRelated'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Workrelated">
                                                                    Work related
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="activityRdo" id="Others10" value="actOth" {{ ($chdata->activityRdo == 'actOth'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Others10">
                                                                    Others, specify
                                                                </label>
                                                                <input type="text" class="inputlabelunderline2"
                                                                    name="others10" value="{{ $patients->others10}}"
                                                                    placeholder="N/A">
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="activityRdo" id="Unkown5" value="actUnkwn" {{ ($chdata->activityRdo == 'actUnkwn'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Unkown5">
                                                                    Unkown
                                                                </label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--33c-->

                                                <div class="col border border-secondary">
                                                    <!--33d-->
                                                    <div class="col">
                                                        <h6 class="form-check-label" for="flexCheckDefault">
                                                            Other risk factor at the time of the incident:
                                                        </h6>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="col-auto">
                                                            <input type="hidden" name="alcoholCh" value="N">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="alcoholCh" id="Alchohol" value="Yes" {{ ($chdata->alcoholCh == 'Yes'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Alchohol">
                                                                    Alchohol/liquor
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="smokingCh" value="N">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="smokingCh" id="Smoking" value="Yes"{{ ($chdata->smokingCh == 'Yes'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Smoking">
                                                                    Smoking
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="drugsCh" value="N">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="drugsCh" id="Drugs" value="Yes"{{ ($chdata->drugsCh == 'Yes'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Drugs">
                                                                    Drugs
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="phoneCh" value="N">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="phoneCh" id="phone" value="Yes"{{ ($chdata->phoneCh == 'Yes'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="phone">
                                                                    Using mobile phone
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="sleepyCh" value="N">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="sleepyCh" id="Sleepy" value="Yes" {{ ($chdata->sleepyCh == 'Yes'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Sleepy">
                                                                    Sleepy
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="others11Ch" value="N">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="others11Ch" id="Others11" value="Yes" {{ ($chdata->others11Ch == 'Yes'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Others11">
                                                                    Others, specify
                                                                </label>
                                                                <input type="text" class="inputlabelunderline2" name="others11"
                                                                    value="{{$patients->others11}}" placeholder="N/A">
                                                                <label class="form-check-label" for="Others11">
                                                                    (e.g. suspected unter the influence of substance
                                                                    used)
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="risk_noneCh" value="N">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="risk_noneCh" id="risk_none" value="none" {{ ($chdata->risk_noneCh == 'none'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="risk_none">
                                                                    None
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--33d-->
                                            </div>

                                            <div class="row border-bottom border-secondary">
                                                <!--33e-->
                                                    <div class="col-auto">
                                                        <h6 class="form-check-label" for="flexCheckDefault">
                                                            Safety:(check all that apply)
                                                        </h6>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="noneCh" value="N">
                                                        <input class="form-check-input" type="checkbox" name="noneCh"
                                                            id="noneCh" value="Yes" {{ ($chdata->noneCh == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="noneCh">
                                                            None
                                                        </label>
                                                    </div>
                                                    <div class="col-auto">
                                                    <input type="hidden" name="airbagCh" value="N">
                                                        <input class="form-check-input" type="checkbox" name="airbagCh"
                                                            id="airbagCh" value="Yes" {{ ($chdata->airbagCh == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="airbagCh">
                                                            Airbag
                                                        </label>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="helmetCh" value="N">
                                                        <input class="form-check-input" type="checkbox" name="helmetCh"
                                                            id="helmetCh" value="Yes"{{ ($chdata->helmetCh == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="helmetCh">
                                                            Helmet
                                                        </label>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="childseatCh" value="N">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="childseatCh" id="childseatCh" value="Yes"{{ ($chdata->childseatCh == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="childseatCh">
                                                            Childseat
                                                        </label>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="seatbeltCh" value="N">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="seatbeltCh" id="seatbeltCh" value="Yes"{{ ($chdata->seatbeltCh == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="seatbeltCh">
                                                            Seatbelt
                                                        </label>
                                                        <div class="row">
                                                            <div class="col-auto">
                                                                <input type="hidden" name="unknown5Ch" value="N">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        name="unknown5Ch" id="unknown5Ch" value="Yes"{{ ($chdata->unknown5Ch == 'Yes'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="unknown5Ch">
                                                                        Unknown
                                                                    </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="vestCh" value="N">
                                                        <input class="form-check-input" type="checkbox" name="vestCh"
                                                            id="vestCh" value="Yes" {{ ($chdata->vestCh == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="vestCh">
                                                            Life vest/LifeJacket/Floatation device
                                                        </label>
                                                        <div class="row">
                                                            <div class="col-auto">
                                                            <input type="hidden" name="others12Ch" value="N">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="others12Ch" id="others12Ch" value="Yes"{{ ($chdata->others12Ch == 'Yes'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="others12Ch" name="others12"
                                                                    value="{{$patients->others12}}" placeholder="N/A">
                                                                    Others
                                                                </label>
                                                                <input type="text" class="inputlabelunderline"
                                                                            name="safety_others" value="{{$patients->safety_others}}" id="safety_others"
                                                                            placeholder="N/A">
                                                            </div>
                                                        </div>
                                                        </div>
                                                    

                                                    
                                            <!--33e end-->
                                        
                            <!--TRANSPORT/VEHICULAR PART-->
                        </div>

                </div>
                <!--collapsible button-->

                <!-- <hr> -->

                <div class="form-group border border-secondary divpat1">
                    <div class="p-2 bg-success text-white">
                        <div class="row">
                            <div class="col">HOSPITAL/FACILITY DATA:</div>
                        </div>
                        <div class="row">
                            <div class="col">A.
                                <select id="patType" name="patType" class="form-select-sm" aria-label=".form-select-sm example">
                                    <option value="{{$patients->patType}}">{{$patients->patType}}</option>
                                    <option value="ER" id="pattype" name="pattype" selected>ER</option>
                                    <option value="OPD">OPD</option>
                                    <option value="BHS">BHS</option>
                                    <option value="RHU">RHU</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row-auto border border-secondary border-left-0 border-right-0">
                        <div class="row">
                            <div class="col-auto">
                                Transferred from another hospital/facility
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" name="transferRdo" value="Yes"
                                     id="transferRdoyes" {{ ($chdata->transferRdo == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="transferRdoyes">
                                    Yes
                                </label>
                            </div>
                            <div class="col col-lg-1">
                                <input class="form-check-input" type="radio" name="transferRdo" value="No"
                                     id="transferRdono" {{ ($chdata->transferRdo == 'No'? ' checked' : '') }}>
                                <label class="form-check-label" for="transferRdono" >
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                Referred by another Hospital/Facility for Laboratory and/or other medical procedures
                            </div>
                            <div class="col-auto">
                                <input type="hidden" name="referral" value="N">
                                <input class="form-check-input" type="radio" name="referralRdo" value="Yes"
                                     id="referralyes" {{ ($chdata->referralRdo == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="referralyes">
                                    Yes
                                </label>
                            </div>
                            <div class="col col-lg-1">
                                <input class="form-check-input" type="radio" name="referralRdo" value="No"
                                     id="referralno" {{ ($chdata->referralRdo == 'No'? ' checked' : '') }} >
                                <label class="form-check-label" for="referralno" >
                                    No
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row-auto">
                        <div class="row">
                            <div class="col-auto">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Name of Originating Hospital:
                                </label>
                                <select id="ref_hosp_code" name="ref_hosp_code" class="form-select-sm" aria-label=".form-select-sm example">
                                    <option value="{{$patients->ref_hosp_code}}">{{$patients->ref_hosp_code}}</option>
                                    <option value="Notre Dame de Chartes Hospital">Notre Dame de Chartes Hospital</option>
                                    <option value="Saint Louis University Hospital of the Sacred Heart">Saint Louis University Hospital of the Sacred Heart</option>
                                    <option value="Baguio Medical Center">Baguio Medical Center</option>
                                    <option value="Pines City Doctor's Hospital">Pines City Doctor's Hospital</option>
                                    <option value="Fort Del Pilar Station Hospital">Fort Del Pilar Station Hospital</option>
                                    <option value="Camp 8 Health Center">Camp 8 Health Center</option>
                                </select>

                                Others:
                                <input type="text" class="inputlabelunderline" value="{{$patients->ref_hosp_code_sp}}" placeholder="N/A" name="ref_hosp_code_sp">
                            </div>
                        </div>
                    </div>

                    <div class="row-auto">
                        <div class="row">
                            <div class="col-auto">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Name of Originating Physician:
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->hospPhys}}" placeholder="N/A" name="hospPhys">
                            </div>
                        </div>
                    </div>

                    <div class="row-auto border border-secondary border-left-0 border-right-0">
                        <div class="row ">
                            <div class="col-auto">
                                <label class="form-check-label" for="status">
                                    Status upon reaching Facility/Hospital:
                                </label>
                                <select id="status_code" name="status_code" class="form-select-sm" aria-label=".form-select-sm example" required>
                                    <option value="{{$patients->status_code}}">{{$patients->status_code}}</option>
                                    <option value="Dead on arrival">Dead on arrival</option>
                                    <option value="Alive: Conscious">Alive: Conscious</option>
                                    <option value="Alive: Unconscious">Alive: Unconscious</option>
                                </select>
                            </div>
                                

                            <!-- <div class="col-auto">
                                <input class="form-check-input" type="radio" name="arrivalRdo" value="Yes"
                                id="deadarrival" {{ ($chdata->arrivalRdo == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="deadarrival">
                                    Dead on Arrival
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" name="arrivalRdo" value="No"
                                id="arrival" {{ ($chdata->arrivalRdo == 'No'? ' checked' : '') }}>
                                <label class="form-check-label" for="arrival">
                                    Alive if alive, please check if:
                                </label>
                            </div>

                            <div class="col-auto">
                                <input class="form-check-input" type="radio" name="statusRdo" value="Yes"
                                id="conscious" {{ ($chdata->statusRdo == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="conscious">
                                    Conscious
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" name="statusRdo" value="No"
                                    id="unconscious" {{ ($chdata->statusRdo == 'No'? ' checked' : '') }}>
                                <label class="form-check-label" for="unconscious">
                                    Unconscious
                                </label>
                            </div> -->
                        </div>

                        <div class="row">
                            <div class="col-auto">
                                <label class="form-check-label">
                                    Mode of transport to the Hospital/Facility:
                                </label>
                            </div>

                            <div class="col-auto">
                                <input class="form-check-input" type="radio" value="Ambulance" 
                                    name="transpoRdo" id="ambulance" {{ ($chdata->transpoRdo == 'Ambulance'? ' checked' : '') }} checked="true">
                                <label class="form-check-label" for="ambulance">
                                    Ambulance
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" value="Police vehicle" 
                                    name="transpoRdo" id="police" {{ ($chdata->transpoRdo == 'Police vehicle'? ' checked' : '') }}>
                                <label class="form-check-label" for="police">
                                    Police vehicle
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" value="Private vehicle" 
                                    name="transpoRdo" id="private" {{ ($chdata->transpoRdo == 'Private vehicle'? ' checked' : '') }}>
                                <label class="form-check-label" for="private">
                                    Private vehicle
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" value="othVeh" 
                                    name="transpoRdo" id="others13" {{ ($chdata->transpoRdo == 'othVeh'? ' checked' : '') }}>
                                <label class="form-check-label" for="others13">
                                    Others, specify
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->others13}}" name="others13"
                                    placeholder="N/A">
                            </div>
                        </div>
                    </div>
                    <div class="row-auto border-bottom border-secondary">
                        <div class="row">
                            <div class="col-auto">
                                <label class="form-check-label">
                                    Initial Impression:
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->impression}}" name="impression"
                                    placeholder="N/A">
                            </div>
                        </div>
                    </div>
                    <div class="row-auto">
                        <div class="row">
                            <div class="col-auto">
                                <label class="form-check-label">
                                    ICD-10 Code/s: Nature of Injury:
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->icdNature}}" name="icdNature"
                                    placeholder="N/A">
                            </div>
                            <div class="col-auto">
                                <label class="form-check-label">
                                    ICD-10 Code/s: External cause of Injury:
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->icdExternal}}" name="icdExternal"
                                    placeholder="N/A">
                            </div>
                        </div>
                    </div>
                    <div class="row-auto border border-secondary border-right-0 border-left-0">
                        <div class="row">
                            <div class="col-auto">
                                <label class="form-check-label">
                                    Treatment Given:
                                </label>
                            </div>
                            <div class="col-auto">
                                <label class="form-check-label">
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->treatment}}" name="treatment"
                                    placeholder="N/A">
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <label class="form-check-label" for="disposition">
                                        Disposition:
                                    </label>
                                </div>
                                    <div class="row">
                                    <div class="col-auto">
                                        <label class="form-check-label" for="unknown5Ch">
                                        
                                        </label>
                                    </div>
                                        <div class="col-auto px-md-5">
                                            <input class="form-check-input" required type="radio" value="disposition" name="dispoRdo" id="admitted"
                                                 {{ ($chdata->dispoRdo == 'disposition'? ' checked' : '') }}>
                                            <label class="form-check-label" for="admitted">
                                                Admitted
                                            </label>
                                        </div>
                                        <div class="col-auto px-md-5">
                                            <input class="form-check-input" type="radio" value="treatnsentHome" name="dispoRdo" id="senthome"
                                            {{ ($chdata->dispoRdo == 'treatnsentHome'? ' checked' : '') }}>
                                            <label class="form-check-label" for="senthome">
                                                Treated and Sent Home
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="radio" value="transferred" name="dispoRdo" id="transfer"
                                            {{ ($chdata->dispoRdo == 'transferred'? ' checked' : '') }}>
                                            <label class="form-check-label" for="transfer">
                                                Transferred to another facility/hospital, specify
                                            </label>
                                            <input type="text" class="inputlabelunderline" name="transferred"
                                                value="{{$patients->transferred}}" placeholder="N/A">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <label class="form-check-label" for="unknown5Ch">
                                            
                                            </label>
                                        </div>
                                        <div class="col-auto px-md-5">
                                            <input class="form-check-input" type="radio" value="HAMA" name="dispoRdo" id="HAMA"
                                            {{ ($chdata->dispoRdo == 'HAMA'? ' checked' : '') }}>
                                            <label class="form-check-label" for="HAMA">
                                                HAMA
                                            </label>
                                        </div>
                                        <div class="col-auto px-md-5">
                                            <input class="form-check-input" type="radio" value="Absconded" name="dispoRdo"
                                                id="absconded" {{ ($chdata->dispoRdo == 'Absconded'? ' checked' : '') }}>
                                            <label class="form-check-label" for="absconded">
                                                Absconded
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                        <input type="text" class="inputlabelunderline" name="disp_er_sp_oth"
                                                value="{{$patients->disp_er_sp_oth}}" placeholder="Name of Hospital: Others/specify">
                                        </div>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col border-top border-secondary">
                                <div class="row ">
                                    <div class="col-auto ">
                                        <label class="form-check-label" for="outcome">
                                            Outcome:
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" required type="radio" value="improved" name="outcome" id="improved"
                                        {{ ($chdata->outcome == 'improved'? ' checked' : '') }}>
                                        <label class="form-check-label" for="improved">
                                            Improved
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" value="unimproved" name="outcome"
                                            id="unimproved" {{ ($chdata->outcome == 'unimproved'? ' checked' : '') }}>
                                        <label class="form-check-label" for="unimproved">
                                            Unimproved
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" value="died" name="outcome" id="died"
                                        {{ ($chdata->outcome == 'died'? ' checked' : '') }}>
                                        <label class="form-check-label" for="died">
                                            Died
                                        </label>
                                    </div>
                                </div>
                                </div>
                    </div>
                </div>
                </div>

                <!-- IN-PATIENT (for admitted hospital cases only) -->
                <div class="form-group border border-secondary" >
                
                    <div class="p-2 bg-success text-white">
                        <div class="row">
                            <div class="col">B. IN-PATIENT (for admitted hospital cases only)</div>
                            <div class="w-100 d-none d-md-block"></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                            <h6 class="form-check-label" for="flexCheckDefault">
                            Complete Final Diagnosis:</h6>           
                            </div>
                            <div class="col">
                            <input type="text" class="inputlabelunderlinelong" name="inPatFinalDiag"
                                                    value="{{$patients->inPatFinalDiag}}" placeholder="Text here">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-auto">
                                <h6 class="form-check-label" for="flexCheckDefault">Disposition</h6>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio"
                                    name="inPatDispoRdo" id="inDischarged" value="Discharged"{{ ($chdata->inPatDispoRdo == 'Discharged'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inDischarged">
                                Discharged
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio"
                                    name="inPatDispoRdo" id="inHama" value="HAMA"{{ ($chdata->inPatDispoRdo == 'HAMA'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inHama">
                                HAMA
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio"
                                    name="inPatDispoRdo" id="inAbson" value="Absonconded"{{ ($chdata->inPatDispoRdo == 'Absonconded'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inAbson">
                                Absonconded
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio"
                                    name="inPatDispoRdo" id="inOthers" value="Others"{{ ($chdata->inPatDispoRdo == 'Others'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inOthers">
                                Others, specify:
                                </label>
                                <input type="text" class="inputlabelunderline" name="inPatOthers"
                                                value="{{$patients->inPatOthers}}" placeholder="N/A">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <label class="form-check-label" for="unknown5Ch">
                                
                                </label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="radio"
                                    name="inPatDispoRdo" id="inTransfer" value="admTransferred"{{ ($chdata->inPatDispoRdo == 'admTransferred'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inTransfer">
                                Transferred to another facility/hopital, specify:
                                </label>
                                <select id="disp_inpat_oth" name="disp_inpat_oth" class="form-select-sm" aria-label=".form-select-sm example">
                                    <option value="{{$patients->disp_inpat_oth}}">{{$patients->disp_inpat_oth}}</option>
                                    <option value="Notre Dame de Chartes Hospital">Notre Dame de Chartes Hospital</option>
                                    <option value="Saint Louis University Hospital of the Sacred Heart">Saint Louis University Hospital of the Sacred Heart</option>
                                    <option value="Baguio Medical Center">Baguio Medical Center</option>
                                    <option value="Pines City Doctor's Hospital">Pines City Doctor's Hospital</option>
                                    <option value="Fort Del Pilar Station Hospital">Fort Del Pilar Station Hospital</option>
                                    <option value="Camp 8 Health Center">Camp 8 Health Center</option>
                                </select>
                                <input type="text" class="inputlabelunderline" name="inPatTransfer"
                                                value="{{$patients->inPatTransfer}}" placeholder="Specify">
                            </div>
                        </div>
                    </div>
                    <div class="col border-top border-secondary">
                        <div class="row ">
                            <div class="col-auto ">
                            <h6 class="form-check-label" for="flexCheckDefault">
                                Outcome
                            </h6>
                            </div>
                            <div class="col-auto">
                            
                                <input class="form-check-input" type="radio"
                                    name="inPatOutcomeRdo" id="inImprov" value="Improved" {{ ($chdata->inPatOutcomeRdo == 'Improved'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inImprov">
                                Improved
                                </label>
                            </div>
                            <div class="col-auto">
                            
                                <input class="form-check-input" type="radio"
                                    name="inPatOutcomeRdo" id="inUnimprov" value="Unimproved" {{ ($chdata->inPatOutcomeRdo == 'Unimproved'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inUnimprov">
                                Unimproved
                                </label>
                            </div>
                            <div class="col-auto">
                            
                                <input class="form-check-input" type="radio"
                                    name="inPatOutcomeRdo" id="inDied" value="Died" {{ ($chdata->inPatOutcomeRdo == 'Died'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inDied">
                                Died
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col border-top border-secondary">
                        <div class="row">
                            <div class="col-auto">
                            <h6 class="form-check-label" for="flexCheckDefault">
                            ICD-10 Code/s: Nature of Injury:
                            <input type="text" class="inputlabelunderline2" name="inPatNature"
                                                value="{{$patients->inPatNature}}" placeholder="N/A">
                                                        </h6>
                                
                            </div>
                            <div class="col">
                            <h6 class="form-check-label" for="flexCheckDefault">
                            ICD-10 Code/s: External cause of Injury:
                            <input type="text" class="inputlabelunderline2" name="inPatExternal"
                                                value="{{$patients->inPatExternal}}" placeholder="N/A">
                                                        </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col border-top border-secondary">
                        <div class="row">
                            <div class="col">
                            <h6 class="form-check-label" for="flexCheckDefault">
                                                            Comments:
                                                        </h6>
                                <input type="text" class="inputlabelunderlinelong" name="inPatComments"
                                                value="{{$patients->inPatComments}}" placeholder="N/A">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="row">
                        <div class="col-auto border-top border-bottom border-secondary">
                            <div class="row">
                                <div class="col-auto">
                                <h6 class="form-check-label" for="flexCheckDefault">
                                                            Consultant in-charge
                                                        </h6>
                                    <input type="text" class="inputlabelunderline2" name="consultant_in_charge_last_name" id="consultant_in_charge_last_name"
                                                    value="{{$patients->consultant_in_charge_last_name}}" placeholder="Last Name">
                                    <input type="text" class="inputlabelunderline2" name="consultant_in_charge_first_name" id="consultant_in_charge_first_name"
                                                    value="{{$patients->consultant_in_charge_first_name}}" placeholder="First Name">
                                    <input type="text" class="inputlabelunderline2" name="consultant_in_charge_middle_name" id="consultant_in_charge_middle_name"
                                                    value="{{$patients->consultant_in_charge_middle_name}}" placeholder="Middle Name">
                                    <input type="text" class="inputlabelunderline2" name="consultant_in_charge_department" id="consultant_in_charge_department"
                                                    value="{{$patients->consultant_in_charge_department}}" placeholder="Department">
                                </div>
                            </div>
                        </div>
                        <div class="col border border-secondary">
                                <input type="text" class="inputlabelunderline2" name="consultant_landline" id="consultant_landline"
                                                    value="{{$patients->consultant_landline}}" placeholder="Landline#">
                                <input type="text" class="inputlabelunderline2" name="consultant_mobile" id="consultant_mobile"
                                                    value="{{$patients->consultant_mobile}}" placeholder="Mobile#">
                                <input type="text" class="inputlabelunderline" name="consultant_email" id="consultant_email"
                                                    value="{{$patients->consultant_email}}" placeholder="Email ">
                        </div>
                        </div>
                    </div>

                    <div class="col">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="row">
                                        <div class="col-auto">
                                        <h6 class="form-check-label" for="flexCheckDefault">
                                                            Address
                                                        </h6>
                                            <input type="text" class="inputlabelunderline2" name="consultant_street_name" id="consultant_street_name"
                                                            value="{{$patients->consultant_street_name}}" placeholder="# and Street Name">
                                            <input type="text" class="inputlabelunderline2" name="consultant_region" id="consultant_region"
                                                            value="{{$patients->consultant_region}}" placeholder="Region">
                                            <input type="text" class="inputlabelunderline2" name="consultant_province" id="consultant_province"
                                                            value="{{$patients->consultant_province}}" placeholder="Province">
                                            <input type="text" class="inputlabelunderline2" name="consultant_city" id="consultant_city"
                                                            value="{{$patients->consultant_city}}" placeholder="City/Municipality">
                                            <input type="text" class="inputlabelunderline2" name="consultant_barangay" id="consultant_barangay"
                                                            value="{{$patients->consultant_barangay}}" placeholder="Barangay">
                                            <input type="text" class="inputlabelunderline2" name="consultant_zipcode" id="consultant_zipcode"
                                                            value="{{$patients->consultant_zipcode}}" placeholder="Zip Code">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col">
                        <div class="row">
                        <div class="col-auto border-top border-bottom border-secondary">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="row">
                                        <div class="col-auto">
                                            <h6 class="form-check-label" for="flexCheckDefault">Completed By:</h6>
                                        </div>
                                        <div class="col-auto">
                                        <input type="hidden" name="chsame" value="0">
                                            <input type="checkbox" value="1" name="chsame" id="chsame" {{ ($chdata->chsame == '1'? ' checked' : '') }}>
                                            <label for="chsame"><i>(Same as consultant)</i></label>
                                        </div>
                                        <div class="col">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                    <input type="text" class="inputlabelunderline2" name="completedBy_last_name" id="completedBy_last_name"
                                                    value="{{$patients->completedBy_last_name}}" placeholder="Last Name">
                                    <input type="text" class="inputlabelunderline2" name="completedBy_first_name" id="completedBy_first_name"
                                                    value="{{$patients->completedBy_first_name}}" placeholder="First Name">
                                    <input type="text" class="inputlabelunderline2" name="completedBy_middle_name" id="completedBy_middle_name"
                                                    value="{{$patients->completedBy_middle_name}}" placeholder="Middle Name">
                                    <input type="text" class="inputlabelunderline2" name="completedBy_department" id="completedBy_department"
                                                    value="{{$patients->completedBy_department}}" placeholder="Department">
                                        </div>
                                    </div>
                                
                                
                                </div>
                                
                            </div>
                        </div>
                        <div class="col border border-secondary">
                                <input type="text" class="inputlabelunderline2" name="completedBy_landline" id="completedBy_landline"
                                                    value="{{$patients->completedBy_landline}}" placeholder="Landline#">
                                <input type="text" class="inputlabelunderline2" name="completedBy_mobile" id="completedBy_mobile"
                                                    value="{{$patients->completedBy_mobile}}" placeholder="Mobile#">
                                <input type="text" class="inputlabelunderline" name="completedBy_email" id="completedBy_email"
                                                    value="{{$patients->completedBy_email}}" placeholder="Email ">
                        </div>
                        </div>
                    </div>
                    
                    <div class="col">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="row">
                                        <div class="col-auto">
                                        <h6 class="form-check-label" for="flexCheckDefault">
                                                            Address
                                                        </h6>
                                            <input type="text" class="inputlabelunderline2" name="completedBy_street" id="completedBy_street"
                                                            value="{{$patients->completedBy_street}}" placeholder="# and Street Name">
                                            <input type="text" class="inputlabelunderline2" name="completedBy_region" id="completedBy_region"
                                                            value="{{$patients->completedBy_region}}" placeholder="Region">
                                            <input type="text" class="inputlabelunderline2" name="completedBy_province" id="completedBy_province"
                                                            value="{{$patients->completedBy_province}}" placeholder="Province">
                                            <input type="text" class="inputlabelunderline2" name="completedBy_City" id="completedBy_City"
                                                            value="{{$patients->completedBy_City}}" placeholder="City/Municipality">
                                            <input type="text" class="inputlabelunderline2" name="completedBy_barangay" id="completedBy_barangay"
                                                            value="{{$patients->completedBy_barangay}}" placeholder="Barangay">
                                            <input type="text" class="inputlabelunderline2" name="completedBy_zip" id="completedBy_zip"
                                                            value="{{$patients->completedBy_zip}}" placeholder="Zip Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="date_completed">Date Completed:</label>
                                    <input type="date" value="{{$patients->date_completed}}" name="date_completed" required>
                                </div>
                            </div>
                        </div>

                </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col ">
                    <div class="row">
                        <div class="col d-flex justify-content-start d-print-none">
                            <a href="/showID/{{$patients->hpercode}}" class="btn btn-secondary btn-sm" title="Patient lists"
                                    onclick="history.back() return confirm(&quot;Unsaved information will not be updated, Continue?&quot;)">
                                    <i class="fa fa-plus" aria-hidden="true">
                                    
                                    </i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                            </svg> Back
                            </a>
                        </div>   
                        
                        <input type="hidden" id="account_name" name="account_name" value="{{$loginId}}">
                        <input type="hidden" id="date_exported" name="date_exported" value="{{ date('F j, Y, g:i a') }}">
                        <div class="col d-flex justify-content-end">
                            <!-- <button type="button" data-toggle="popover" title="popover title" data-content="Some message">popover</button>  -->
                             <button id="saveinto" type="submit" class="btn btn-outline-primary d-print-none" onclick="return confirm(&quot;WARNING! saving into 'Final Output' will delete the current patient in DRAFTS, Continue?&quot;)"><i class="fa fa-search"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg> Save into:</button>
                            <select id="status" name="status" class="form-select-sm d-print-none" aria-label=".form-select-sm example">
                                <option value="drafts">Drafts</option>
                                <option value="completeForm">Final Output</option>
                            </select>
                            
                        </div>
                        
                        <div class="col-auto d-flex justify-content-end">
                            <button type="submit" title="saveInto" class="btn btn-outline-warning d-print-none" id="print"><i class="fa fa-search"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                            </svg> Print</button>
                        </div>

                    </div>
                </div>
            </div>
            </form>
            
    <!-- </div>
</div>
</div>
            </div>
             -->
           
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<!-- <script src="jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<!-- <script src="{{ URL::asset('js/printThis.js') }}"></script> -->
<script>
    $('#print').click(function(){
        document.execCommand('print');
    })
    var saveinto = document.getElementById("saveinto");

    $(document).ready(function(){
        // console.log({!! json_encode($info, JSON_HEX_TAG) !!});

        $.each({!! json_encode($info, JSON_HEX_TAG) !!}, function(key, value) {
            // dd($info);
            console.log(value.status);
            if((value.status)=='archive'){
                saveinto.disabled = 'true';
                console.log("Status is set to = " + value.status);
                $('[data-toggle="popover"]').popover();
                saveinto.title = 'adsfsadf';

                // hover button msg box ("already been converted");
            }else{
                console.log("Status is set to = " + value.status);
                
            }
        });

        if(aidYes.checked){
            // frstAid = require;
            frstAid.setAttribute('required', 'true');
        }
        
        
    })
</script> 

<script type="text/javascript">
    (function () {
        var burnCh = document.getElementById("burnCh");
        var fractureCh = document.getElementById("fractureCh");
        var burn1Ch = document.getElementById("burn1Ch");
        var drowningCh = document.getElementById("drowningCh");
        var natureCh = document.getElementById("natureCh");
        var aidNo = document.getElementById("aidNo");
        var aidYes = document.getElementById("aidYes");
        var aidUnk = document.getElementById("aidUnk");
        var deadarrival = document.getElementById("deadarrival");
        var chsame = document.getElementById("chsame");

        Abrasion.addEventListener('click', function (){
        if(this.checked){
            abrasionInput.disabled = '';
        }else{
            abrasionInput.value= '';
            abrasionInput.disabled = 'true';
        }
        });
        avulsion.addEventListener('click', function (){
        if(this.checked){
            avulsionInput.disabled = '';
        }else{
            avulsionInput.value= '';
            avulsionInput.disabled = 'true';
        }
        });
        burnCh.addEventListener('click', function () {
        if(this.checked){
            burnChInput.disabled='';
            degree_burn1.disabled ='';
            degree_burn2.disabled ='';
            degree_burn3.disabled ='';
            degree_burn4.disabled ='';

        } else {
            burnChInput.value='';
            burnChInput.disabled='true';
            degree_burn1.disabled ='true';
            degree_burn1.checked ='';
            degree_burn2.disabled ='true';
            degree_burn2.checked ='';
            degree_burn3.disabled ='true';
            degree_burn3.checked ='';
            degree_burn4.disabled ='true';
            degree_burn4.checked ='';
            }
        });
        concussionCh.addEventListener('click', function (){
        if(this.checked){
            concussionInput.disabled = '';
        }else{
            concussionInput.value= '';
            concussionInput.disabled = 'true';
        }
        });
        contusionCh.addEventListener('click', function (){
        if(this.checked){
            contusionInput.disabled = '';
        }else{
            contusionInput.value= '';
            contusionInput.disabled = 'true';
        }
        });

        fractureCh.addEventListener('click', function (){
        if(this.checked){
            openTypeCh.disabled = '';
            closedTypeCh.disabled = '';

        }else{
            openTypeCh.disabled = 'true';
            openTypeCh.checked = '';
            openTypeInput.value='';
            closedTypeCh.disabled = 'true';
            closedTypeCh.checked = '';
            closedTypeInput.value = '';
        }
        });
        
        woundCh.addEventListener('click', function (){
        if(this.checked){
            woundInput.disabled = '';
        }else{
            woundInput.value= '';
            woundInput.disabled = 'true';
        }
        });
        
        traumaCh.addEventListener('click', function (){
        if(this.checked){
            traumaInput.disabled = '';
        }else{
            traumaInput.value= '';
            traumaInput.disabled = 'true';
        }
        });

        others1Ch.addEventListener('click', function (){
        if(this.checked){
            others1Input.disabled = '';
        }else{
            others1Input.value= '';
            others1Input.disabled = 'true';
        }
        });
        
        bitesCh.addEventListener('click', function (){
        if(this.checked){
            biteInput.disabled = '';
        }else{
            biteInput.value= '';
            biteInput.disabled = 'true';
        }
        });

        burn1Ch.addEventListener('click', function (){
            if(this.checked){
                Heat.disabled = '';
                Fire.disabled = '';
                Electricty.disabled = '';
                Oil.disabled = '';
                Friction.disabled = '';
                Others2.disabled = '';
                others2Input.disabled = '';
            }
            else{
                Heat.disabled = 'true';
                Heat.checked = '';
                Fire.disabled = 'true';
                Fire.checked = '';
                Electricty.disabled = 'true';
                Electricty.checked = '';
                Oil.disabled = 'true';
                Oil.checked = '';
                Friction.disabled = 'true';
                Friction.checked = '';
                Others2.disabled = 'true';
                Others2.checked = '';
                others2Input.value = '';
                others2Input.disabled = 'true';
            }
        })

        chemicalCh.addEventListener('click', function (){
        if(this.checked){
            chemInput.disabled = '';
        }else{
            chemInput.value= '';
            chemInput.disabled = 'true';
        }
        });

        sharpCh.addEventListener('click', function (){
        if(this.checked){
            sharpInput.disabled = '';
        }else{
            sharpInput.value= '';
            sharpInput.disabled = 'true';
        }
        });

        drowningCh.addEventListener('click', function(){
            if(this.checked){
                Sea.disabled = '';
                River.disabled = '';
                Lake.disabled = '';
                Pool.disabled = '';
                BathTub.disabled = '';
                Others3.disabled = '';
                others3Input.disabled='';
            }
            else{
                Sea.disabled = 'true';
                Sea.checked = '';
                River.disabled = 'true';
                River.checked = '';
                Lake.disabled = 'true';
                Lake.checked = '';
                Pool.disabled = 'true';
                Pool.checked = '';
                BathTub.disabled = 'true';
                BathTub.checked = '';
                Others3.disabled = 'true';
                Others3.checked = '';
                others3Input.value='';
                others3Input.disabled='true';
            }
        });

        natureCh.addEventListener('click', function(){
            if(this.checked){
                Earthquake.disabled = '';
                Volcanic.disabled = '';
                Typhoon.disabled = '';
                Landslide.disabled = '';
                natureOth.disabled = '';
                ext_expo_nature_sp.disabled = '';
            }
            else{
                Earthquake.disabled = 'true';
                Earthquake.checked = '';
                Volcanic.disabled = 'true';
                Volcanic.checked = '';
                Typhoon.disabled = 'true';
                Typhoon.checked = '';
                Landslide.disabled = 'true';
                Landslide.checked = '';
                natureOth.disabled = 'true';
                natureOth.checked = '';
                ext_expo_nature_sp.disabled = 'true';
                ext_expo_nature_sp.value = '';
            }
        });

        gunshotCh.addEventListener('click', function (){
        if(this.checked){
            gunshotInput.disabled = '';
        }else{
            gunshotInput.value= '';
            gunshotInput.disabled = 'true';
        }
        });

        fallCh.addEventListener('click', function (){
        if(this.checked){
            fallInput.disabled = '';
        }else{
            fallInput.value= '';
            fallInput.disabled = 'true';
        }
        });

        firecrackerCh.addEventListener('click', function () {
            if (this.checked) {
                firecracker_code_1.checked = 'false';
                firecracker_code_2.checked = 'false';
                firecracker_code_3.checked = 'false';
                firecracker_code_4.checked = 'false';
                firecracker_code_5.checked = 'false';
                firecrackInput.disabled='';
            } else {
                firecracker_code_1.checked = '';
                firecracker_code_2.checked = '';
                firecracker_code_3.checked = '';
                firecracker_code_4.checked = '';
                firecracker_code_5.checked = '';
                firecrackInput.disabled='true';
                firecrackInput.value='';
            }
        });

        others5Ch.addEventListener('click', function (){
        if(this.checked){
            
            others5Input.disabled = '';

        }else{
            others5Input.value= '';
            others5Input.disabled = 'true';
        }
        });

        aidNo.addEventListener('click', function () {
            
            if(this.checked){
                frstAid.value = '';
                frstAid.disabled = true;
            }
        });
        aidYes.addEventListener('click', function () {
            if(this.checked){
                frstAid.disabled = false;
            }
        });
        
       aidUnk.addEventListener('click', function(){
           if(this.checked){
               frstAid.disabled = false;
           }
       })
       chsame.addEventListener('click', function(){
            if(this.checked){
                $('#completedBy_last_name').val($('#consultant_in_charge_last_name').val())
                $('#completedBy_first_name').val($('#consultant_in_charge_first_name').val())
                $('#completedBy_middle_name').val($('#consultant_in_charge_middle_name').val())
                $('#completedBy_department').val($('#consultant_in_charge_department').val())
                $('#completedBy_landline').val($('#consultant_landline').val())
                $('#completedBy_mobile').val($('#consultant_mobile').val())
                $('#completedBy_email').val($('#consultant_email').val())
                $('#completedBy_street').val($('#consultant_street_name').val())
                $('#completedBy_region').val($('#consultant_region').val())
                $('#completedBy_province').val($('#consultant_province').val())
                $('#completedBy_City').val($('#consultant_city').val())
                $('#completedBy_barangay').val($('#consultant_barangay').val())
                $('#completedBy_zip').val($('#consultant_zipcode').val())
                
            }
            else{
                // $('#completedBy_last_name').val();
                completedBy_last_name.value = '';
                completedBy_first_name.value = '';
                completedBy_middle_name.value = '';
                completedBy_department.value = '';
                completedBy_landline.value = '';
                completedBy_mobile.value = '';
                completedBy_email.value = '';
                completedBy_street.value = '';
                completedBy_region.value = '';
                completedBy_province.value = '';
                completedBy_City.value = '';
                completedBy_barangay.value = '';
                completedBy_zip.value = '';
            }
        });

        
        // deadarrival.addEventListener('click', function () {
        //     if(this.checked){
        //         conscious.checked = '';
        //         unconscious.checked = '';
        //     }

        // });
        
        
        
        
    })();

    $("#update").click(function () {
        var fName = $("#firstName").val();
        var mName = $("#middleName").val();
        var lName = $("#lName").val();

        alert("Patient " + fName + " " + mName + " " + lName + " has been updated!");
    })

</script>

@stop
