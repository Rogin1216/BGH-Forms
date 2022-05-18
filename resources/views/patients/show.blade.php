@extends('patients.layouts')
@section('content')
<style>
        #divpat{
            width: 70%;
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
        width: 700px;
        
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

</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"  media='screen,print'>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

<div class="card">
    <div class="card-header p-2 text-white" id="bgGreen">GENERAL DATA:</div>
    <!-- <div class="header">GENERAL DATA</div> -->
    <div class="card-body border border-secondary">
        
            {!! csrf_field() !!}

            <!--<input type="checkbox" value="Edit" id="editChx"><label>Edit profile</label></br>-->
            <div class="grid-container">
                <div class="row">
                    <div class="col">
                    <div class="row">
        <div class="border-top border-start border-secondary divpat" id="divpat">
            <b>Name of Patient</b>
            <div class="row" id="patname">
                <div class="col" id="patname">
                <p class="small"><i>last name</i> </p> 
                <label for=""><b>{{$patients->patlast}}</b> </label>
                    <!-- <input type="text" class="inputlabelunderline" name="patlast" value="" > -->
                </div>
                <div class="col">
                <p class="small"><i>First name (inlcude suffix)</i> </p>
                <label for=""><b>{{$patients->patfirst}}</b> </label>
                    <!-- <input type="text" class="inputlabelunderline" name="patfirst" value="" > -->
                </div>
                <div class="col">
                <p class="small"><i>Middle name</i> </p>
                <label for=""><b> {{$patients->patmiddle}}</b></label>
                    <!-- <input type="text" class="inputlabelunderline" name="patmiddle" value="{{$patients->patmiddle}}"> -->
                </div>
            </div>
        </div>
        <div class="border border-end-0 border-secondary" id="divsex">
            <b>Sex:</b>
            <label for="">{{$patients->pat_sex}}</label>
        </div>
    </div>
    <div class="row">
        <div class="border border-secondary" id="divaddress">
            <b>Current Address</b>
            <div class="row">
                <div class="col">
                <p class="small"><i>Region name</i> </p>
                    <div class="row">
                        <div class="col">
                        <label for=""><b>{{$patients->pat_current_address_region_name}}</b></label>
                        </div>
                    </div>
                                        
                </div>
                <div class="col">
                <p class="small">Province</p> 
                    <div class="row">
                        <div class="col">
                            <label class="form-check-label" for="">
                                
                                <label for=""><b>{{$patients->pat_current_address_province_name}}</b></label>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col">
                <p class="small">City/Municipality</p>
                    <div class="row">
                        <div class="col">
                            <label class="form-check-label" for="">
                                <b>{{$patients->pat_current_address_city_name}}</b>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-secondary" id="divaddress">
            <b>plc_Address</b>
            <div class="row">
                <div class="col">
                    <input type="text" class="inputlabelunderline" name="plc_regcode">
                    <div class="row">
                        <div class="col">
                            <label class="form-check-label" for="">
                            <p class="small">plc_regcode</p> 
                            </label>
                        </div>
                    </div>
                    
                </div>
                <div class="col">
                    <input type="text" class="inputlabelunderline" name="plc_provcode">
                    <div class="row">
                        <div class="col">
                            <label class="form-check-label" for="">
                                <p class="small">plc_provcode</p> 
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <input type="text" class="inputlabelunderline" name="plc_ctycode">
                    <div class="row">
                        <div class="col">
                            <label class="form-check-label" for="">
                                <p class="small">plc_ctycode</p>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="border-start border-end border-secondary" id="divbday">
                <div class="row">
                    <div class="col">
                            Birthday:
                        {{date('F j,Y',  strtotime($patients->pat_date_of_birth))}}
                        
                        
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                    Age:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                    Months:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                    Days:
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class=" border-end border-secondary" id="divbday">
            <div class="row">
                <div class="col">
                    inj_date
                    <div class="row">
                        <div class="col">
                    <input type="date" class="inputlabelunderlineName" name="inj_date" id="">
                        </div>
                    </div>
                </div>
                <div class="col">
                    inj_time
                    <div class="row">
                        <div class="col">
                    <input type="date" class="inputlabelunderlineName" name="inj_time" id="">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    encounter_date
                    <div class="row">
                        <div class="col">
                    <input type="date" class="inputlabelunderlineName" name="encounter_date" id="">

                        </div>
                    </div>
                </div>
                <div class="col">
                    encounter_time
                    <div class="row">
                        <div class="col">
                    <input type="date" class="inputlabelunderlineName" name="encounter_time" id="">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    time_report
                    <div class="row">
                        <div class="col">
                    <input type="time" id="appt" name="time_report" min="09:00" max="18:00" value="">

                        </div>
                    </div>
                </div>
                <div class="col">
                    date_report
                    <div class="row">
                        <div class="col">
                    <input type="time" id="appt" name="date_report" min="09:00" max="18:00" value="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border border-secondary">
        <div class="col">
            tempreg_no:
            <input type="text" class="inputlabelunderlineName" name="tempreg_no" value="{{$patients->tempreg_no}}">
        </div>
        <div class="col">
            Philhealth No:
            <input type="text" class="inputlabelunderlineName" name="pat_phil_health_no" value="{{$patients->pat_phil_health_no}}">
        </div>
        <div class="col">
            Facility No:
            <input type="text" class="inputlabelunderlineName" name="pat_facility_no" value="{{$patients->pat_facility_no}}">
        </div>
    </div>
                    </div>
                </div>
            </div>
<br>

                <div class="form-group">
                    <div class="container">
                    <div class="row ">
                        <div class="col">
                            <div class="row">
                                <div class="col-auto">
                                    <label class="firstAid">First Aid Given:</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="rdoAid" value="0">
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
                            </div>

                            </div>
                            <div class="col">
                                By:
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-auto" id="frsAidComm">
                        <textarea class="form-control" name="frstAid" id="frstAid"
                            placeholder="no comment"  >{{$patients->frstAid}}</textarea>
                        </div>
                        
                        <div class="col" id="docAdmitCol">
                            <input type="text" name="docAdmit" id="docAdmit" value="{{$patients->docAdmit}}"
                                placeholder="name of doctor" class="form-control">
                        </div>
                    </div>
                    </div>
                </div>
            

            <hr>
            <div class="form-group col-md-12">
                <h5>Nature of Injury/ies:</h5>
                <div class="innerdiv">
                    <div class="row">
                        <div class="col col-lg-2">
                            <!-- <Label>Multiple injuries?</Label> -->
                        </div>
                        
                        <div class="grid-containter" id="gridInjuries">
                            <div class="item1">
                                <Label>Multiple injuries?</Label>
                            </div>
                            <div class="item2">
                                <input class="form-check-input" type="radio" name="injryRdo" id="injuryRdo1" value="Yes" {{ ($chdata->injryRdo == 'Yes'? ' checked' : '') }}>
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
                        <div class="container">
                        
                            <div class="row">
                                <div class="col col-lg-5">
                                <input type="hidden" name="abrasionCh" value="0">
                                    <input class="form-check-input" type="checkbox" name="abrasionCh" id="Abrasion"
                                        value="Yes"{{ ($chdata->abrasionCh == 'Yes'? ' checked' : '') }}>
                                    <label class="form-check-label" for="Abrasion">
                                        Abrasion    
                                    </label>
                                    <input type="text" class="inputlabelunderline" name="abrasion" id="abrasionInput" disabled
                                        value="{{$patients->abrasion}}" placeholder="N/A">
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col col-lg-5">
                                    <input type="hidden" name="avulsionCh" value="0">
                                    <input class="form-check-input" type="checkbox" name="avulsionCh" id="avulsion"
                                        value="Yes" {{ ($chdata->avulsionCh == 'Yes'? ' checked' : '') }}>
                                    <label class="form-check-label" for="avulsion">
                                        Avulsion
                                    </label>
                                    <input type="text" class="inputlabelunderline" name="avulsion" id="avulsionInput" disabled
                                        value="{{$patients->avulsion}}" placeholder="N/A">
                                </div>
                            </div>

                            <input type="hidden" name="burnCh" value="0">

                            
                            <input class="form-check-input" type="checkbox" name="burnCh" id="burnCh" value="Yes" {{ ($chdata->burnCh == 'Yes'? ' checked' : '') }}>
                            <div class="row">
                                <div class="col col-lg-16">
                                    <label class="form-check-label" for="burnCh">
                                        Burn (Degree of Burn & Extent of Body Surface involved) Degree:
                                    </label>
                                    <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn1" value="1st" {{ ($chdata->degreeRdoBtn == '1st'? ' checked' : '') }} >
                                    <label class="" for="degreeRdoBtn1">
                                        1<sup>st</sup>
                                        <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn2" value="2nd" {{ ($chdata->degreeRdoBtn == '2nd'? ' checked' : '') }}>
                                        <label class="" for="degreeRdoBtn2">
                                            2<sup>nd</sup>
                                        </label>
                                        <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn3" value="3rd" {{ ($chdata->degreeRdoBtn == '3rd'? ' checked' : '') }}>
                                        <label class="" for="degreeRdoBtn3">
                                            3<sup>rd</sup>
                                        </label>
                                        <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn4" value="4th" {{ ($chdata->degreeRdoBtn == '4th'? ' checked' : '') }}>
                                        <label class="" for="degreeRdoBtn4">
                                            4<sup>th</sup>
                                        </label>
                                        <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn5" value="5th" {{ ($chdata->degreeRdoBtn == '5th'? ' checked' : '') }}>
                                        <label class="" for="degreeRdoBtn5">
                                            5<sup>th</sup>
                                        </label>
                                        <label>Site:</label>
                                        <input type="text" class="inputlabelunderline" value="{{$patients->site}}" name="site" disabled id="burnChInput"
                                            placeholder="N/A">
                                    </label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col col-lg-5">
                                    <input type="hidden" name="concussionCh" value="0">
                                    <input class="form-check-input" type="checkbox" name="concussionCh"
                                        id="concussionCh" value="Yes" {{ ($chdata->concussionCh == 'Yes'? ' checked' : '') }}>
                                    <label class="form-check-label" for="concussionCh">
                                        Concussion
                                    </label>
                                    <input type="text" class="inputlabelunderline" value="{{$patients->concussion}}" name="concussion" id="concussionInput" disabled
                                        placeholder="N/A">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-lg-5">
                                    <input type="hidden" name="contusionCh" value="0">
                                    <input class="form-check-input" type="checkbox" name="contusionCh" id="contusionCh"
                                        value="Yes" {{ ($chdata->contusionCh == 'Yes'? ' checked' : '') }}>
                                    <label class="form-check-label" for="contusionCh">
                                        Contusion
                                    </label>
                                    <input type="text" class="inputlabelunderline" value="{{$patients->contusion}}" name="contusion" id="contusionInput" disabled
                                        placeholder="N/A">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-lg-5">
                                    <input type="hidden" name="fractureCh" value="0">
                                    <input class="form-check-input" type="checkbox" name="fractureCh" id="fractureCh"
                                        value="Yes" {{ ($chdata->fractureCh == 'Yes'? ' checked' : '') }}>

                                    <label class="form-check-label" for="fractureCh">
                                        Fracture
                                    </label>
                                    <div class="container">
                                    <div class="row mx-md-n5">
                                        <div class="col px-md-5">

                                            <label class="form-check-label" for="flexCheckDefault">
                                                <input type="hidden" name="openTypeCh" value="0" >
                                                <input class="form-check-input" type="checkbox" name="openTypeCh" disabled
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
                                            <input type="hidden" name="closedTypeCh" value="0">
                                                <input class="form-check-input" type="checkbox" name="closedTypeCh" disabled
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
                                    <input type="hidden" name="woundCh" value="0">
                                        <input class="form-check-input" type="checkbox" name="woundCh" id="woundCh"
                                            value="Yes" {{ ($chdata->woundCh == 'Yes'? ' checked' : '') }}>
                                        <label class="form-check-label" for="woundCh">
                                            <label class="form-check-label" for="woundCh">
                                                Open/Wound Laceration
                                            </label>
                                            <input type="text" class="inputlabelunderline" value="{{$patients->wound}}" name="wound" id="woundInput" disabled
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
                                    <input type="hidden" name="traumaCh" value="0">
                                        <input class="form-check-input" type="checkbox" name="traumaCh" id="traumaCh"
                                            value="Yes" {{ ($chdata->traumaCh == 'Yes'? ' checked' : '') }}>

                                        <label class="form-check-label" for="traumaCh">
                                            Traumatic Amputation
                                        </label>
                                        <input type="text" class="inputlabelunderline" name="traumaticAmputation" id="traumaInput" disabled
                                            value="{{$patients->traumaticAmputation}}" placeholder="N/A">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col col-lg-8">
                                    <input type="hidden" name="others1Ch" value="0">
                                        <input class="form-check-input" type="checkbox" name="others1Ch" id="others1Ch"
                                            value="Yes" {{ ($chdata->others1Ch == 'Yes'? ' checked' : '') }}>

                                        <label class="form-check-label" for="others1Ch">
                                            Others: Pls. specify injury and the body part/s affected:
                                        </label>
                                        <input type="text" class="inputlabelunderline" value="{{$patients->others1}}" name="others1" id="others1Input" disabled
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
                <div class="col">
                <input type="hidden" name="bitesCh" value="0">
                    <input class="form-check-input" type="checkbox" name="bitesCh" id="bitesCh" value="Yes" {{ ($chdata->bitesCh == 'Yes'? ' checked' : '') }}>
                    <label class="form-check-label" for="bitesCh">
                        Bites/stings, Specify animal/insect:
                    </label>
                    <input type="text" class="inputlabelunderline" value="{{$patients->bites}}" placeholder="N/A" name="bites" id="biteInput" disabled>

                    <div class="row">
                        <div class="col-auto">
                        <input type="hidden" name="burn1Ch" value="0">
                            <input class="form-check-input" type="checkbox" name="burn1Ch" id="burn1Ch" value="Yes" {{ ($chdata->burn1Ch == 'Yes'? ' checked' : '') }}>
                            <label class="form-check-label" for="burn1Ch">
                                Burn,
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Heat" name="burnRdo" id="Heat" {{ ($chdata->burnRdo == 'Heat'? ' checked' : '') }}>
                            <label class="form-check-label" for="Heat">
                                Heat
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Fire" name="burnRdo" id="Fire" {{ ($chdata->burnRdo == 'Fire'? ' checked' : '') }}> 
                            <label class="form-check-label" for="Fire">
                                Fire
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Electricity" name="burnRdo" id="Electricty" {{ ($chdata->burnRdo == 'Electricity'? ' checked' : '') }}>
                            <label class="form-check-label" for="Electricty">
                                Electricty
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Oil" name="burnRdo" id="Oil" {{ ($chdata->burnRdo == 'Oil'? ' checked' : '') }}>
                            <label class="form-check-label" for="Oil">
                                Oil
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Friction" name="burnRdo" id="Friction" {{ ($chdata->burnRdo == 'Friction'? ' checked' : '') }}>
                            <label class="form-check-label" for="Friction">
                                Friction
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="burnOther" name="burnRdo" id="Others2" {{ ($chdata->burnRdo == 'burnOther'? ' checked' : '') }}>
                            <label class="form-check-label" for="Others2">
                                Others,specify
                            </label>
                            <input type="text" class="inputlabelunderline" value="{{$patients->others2}}" name="others2" id="others2Input" disabled
                                placeholder="N/A">
                        </div>

                    </div>

                    <input type="hidden" name="chemicalCh" value="0">
                    <input class="form-check-input" type="checkbox" name="chemicalCh" id="chemicalCh" value="Yes" {{ ($chdata->chemicalCh == 'Yes'? ' checked' : '') }}>
                    <div class="row">
                        <div class="col-auto">
                            <label class="form-check-label" for="chemicalCh">
                                Chemical/Substance, specify
                            </label>
                            <input type="text" class="inputlabelunderline" value="{{$patients->chemical}}" name="chemical" id="chemInput" disabled
                                placeholder="N/A">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-8">
                        <input type="hidden" name="sharpCh" value="0">
                            <input class="form-check-input" type="checkbox" name="sharpCh" id="sharpCh" value="Yes" {{ ($chdata->sharpCh == 'Yes'? ' checked' : '') }}>
                            <label class="form-check-label" for="sharpCh">
                                Contact with sharp objects, specify object
                            </label>
                            <input type="text" class="inputlabelunderline" value="{{$patients->sharp}}" name="sharp" id="sharpInput" disabled
                                placeholder="N/A">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-auto">
                        <input type="hidden" name="drowningCh" value="0">
                            <input class="form-check-input" type="checkbox" name="drowningCh" id="drowningCh"
                                value="Yes" {{ ($chdata->drowningCh == 'Yes'? ' checked' : '') }}>
                            <label class="form-check-label" for="drowningCh">
                                Drowning: Type/Body of Water:
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Sea" name="drowningRdo" id="Sea" {{ ($chdata->drowningRdo == 'Sea'? ' checked' : '') }}>
                            <label class="form-check-label" for="Sea">
                                Sea
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="River" name="drowningRdo" id="River" {{ ($chdata->drowningRdo == 'River'? ' checked' : '') }}>
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
                            <input class="form-check-input" type="radio" value="Pool" name="drowningRdo" id="Pool" {{ ($chdata->drowningRdo == 'Pool'? ' checked' : '') }}>
                            <label class="form-check-label" for="Pool">
                                Pool
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="Bath Tub" name="drowningRdo" id="BathTub" {{ ($chdata->drowningRdo == 'Bath Tub'? ' checked' : '') }}>
                            <label class="form-check-label" for="BathTub">
                                Bath Tub
                            </label>
                        </div>
                        <div class="col col-lg-4">
                            <input class="form-check-input" type="radio" value="drowningOther"  name="drowningRdo" id="Others3" {{ ($chdata->drowningRdo == 'drowningOther'? ' checked' : '') }}>
                            <label class="form-check-label" for="Others3">
                                Others,specify
                            </label>
                            <input type="text" class="inputlabelunderline" value="{{$patients->others3}}" name="others3" id="others3Input" disabled
                                placeholder="N/A">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-auto">
                        <input type="hidden" name="natureCh" value="0">
                            <input class="form-check-input" type="checkbox" name="natureCh" id="natureCh" value="Yes" {{ ($chdata->natureCh == 'Yes'? ' checked' : '') }}>
                            <label class="form-check-label" for="natureCh">
                                Exposure to forces of Nature:
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" name="natureRdo" id="Earthquake" value="Earthquake" {{ ($chdata->natureRdo == 'Earthquake'? ' checked' : '') }}>
                            <label class="form-check-label" for="Earthquake">
                                Earthquake
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" name="natureRdo" id="Volcanic" value="Volcanic" {{ ($chdata->natureRdo == 'Volcanic'? ' checked' : '') }}>
                            <label class="form-check-label" for="Volcanic">
                                Volcanic eruption
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" name="natureRdo" id="Typhoon" value="Typhoon" {{ ($chdata->natureRdo == 'Typhoon'? ' checked' : '') }}>
                            <label class="form-check-label" for="Typhoon">
                                Typhoon
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" name="natureRdo" id="Landslide" value="Landslide" {{ ($chdata->natureRdo == 'Landslide'? ' checked' : '') }}>
                            <label class="form-check-label" for="Landslide">
                                Landslide/Avalanche
                            </label>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="gunshotCh" value="0">
                                <input class="form-check-input" type="checkbox" name="gunshotCh" id="gunshotCh"
                                    value="Yes" {{ ($chdata->gunshotCh == 'Yes'? ' checked' : '') }}>

                                <label class="form-check-label" for="gunshotCh">
                                    Gunshot, Specify weapon
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->gunshot}}" name="gunshot" id="gunshotInput" disabled
                                    placeholder="N/A">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-4">
                            <input type="hidden" name="hangingCh" value="0">
                                <input class="form-check-input" type="checkbox" name="hangingCh" id="hangingCh"
                                    value="Yes" {{ ($chdata->hangingCh == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="hangingCh">
                                    Hanging/Strangulation
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-4">
                            <input type="hidden" name="maulingCh" value="0">
                                <input class="form-check-input" type="checkbox" name="maulingCh" id="maulingCh"
                                    value="Yes" {{ ($chdata->maulingCh == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="maulingCh">
                                    Mauling/Assault
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-4">
                            <input type="hidden" name="transportCh" value="0">
                                <input class="form-check-input" type="checkbox" name="transportCh" id="transportCh"
                                    value="Yes" {{ ($chdata->transportCh == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="transportCh">
                                    Transport/Vehicular Accident
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="fallCh" value="0">
                                <input class="form-check-input" type="checkbox" name="fallCh" id="fallCh" value="Yes" {{ ($chdata->fallCh == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="fallCh">
                                    Fall, specify, from/in/on/into
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->fall}}" name="fall" id="fallInput" disabled
                                    placeholder="N/A">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="firecrackerCh" value="0">
                                <input class="form-check-input" type="checkbox" name="firecrackerCh"
                                    id="firecrackerCh" value="Yes" {{ ($chdata->firecrackerCh == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="firecrackerCh">
                                    Firecracker, specify type/s
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->firecracker}}" name="firecracker" id="firecrackInput"
                                    placeholder="N/A">
                                <label class="form-check-label" for="Firecracker">
                                    (with libraries)
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="assaultCh" value="0">
                                <input class="form-check-input" type="checkbox" name="assaultCh" id="assaultCh"
                                    value="Yes" {{ ($chdata->assaultCh == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="assaultCh">
                                    Sexual Assault/Sexual Abuse/Rape(Alleged)
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="others5Ch" value="0">
                                <input class="form-check-input" type="checkbox" name="others5Ch" id="others5Ch"
                                    value="Yes" {{ ($chdata->others5Ch == 'Yes'? ' checked' : '') }}>
                                <label class="form-check-label" for="others5Ch">
                                    Others,specify
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->others5}}" name="others5" id="others5Input" disabled
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
                        <div class="col border-top border-secondary">
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
                                                                    name="activityRdo" id="Workrelated" value="WorkRelated" {{ ($chdata->activityRdo == 'WorkRelated'? ' checked' : '') }}>
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
                                                            <input type="hidden" name="alcoholCh" value="0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="alcoholCh" id="Alchohol" value="Yes" {{ ($chdata->alcoholCh == 'Yes'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Alchohol">
                                                                    Alchohol/liquor
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="smokingCh" value="0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="smokingCh" id="Smoking" value="Yes"{{ ($chdata->smokingCh == 'Yes'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Smoking">
                                                                    Smoking
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="drugsCh" value="0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="drugsCh" id="Drugs" value="Yes"{{ ($chdata->drugsCh == 'Yes'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Drugs">
                                                                    Drugs
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="phoneCh" value="0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="phoneCh" id="phone" value="Yes"{{ ($chdata->phoneCh == 'Yes'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="phone">
                                                                    Using mobile phone
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="sleepyCh" value="0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="sleepyCh" id="Sleepy" value="Yes" {{ ($chdata->sleepyCh == 'Yes'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Sleepy">
                                                                    Sleepy
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="others11Ch" value="0">
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
                                                    <input type="hidden" name="noneCh" value="0">
                                                        <input class="form-check-input" type="checkbox" name="noneCh"
                                                            id="noneCh" value="Yes" {{ ($chdata->noneCh == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="noneCh">
                                                            None
                                                        </label>
                                                    </div>
                                                    <div class="col-auto">
                                                    <input type="hidden" name="airbagCh" value="0">
                                                        <input class="form-check-input" type="checkbox" name="airbagCh"
                                                            id="airbagCh" value="Yes" {{ ($chdata->airbagCh == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="airbagCh">
                                                            Airbag
                                                        </label>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="helmetCh" value="0">
                                                        <input class="form-check-input" type="checkbox" name="helmetCh"
                                                            id="helmetCh" value="Yes"{{ ($chdata->helmetCh == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="helmetCh">
                                                            Helmet
                                                        </label>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="childseatCh" value="0">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="childseatCh" id="childseatCh" value="Yes"{{ ($chdata->childseatCh == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="childseatCh">
                                                            Childseat
                                                        </label>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="seatbeltCh" value="0">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="seatbeltCh" id="seatbeltCh" value="Yes"{{ ($chdata->seatbeltCh == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="seatbeltCh">
                                                            Seatbelt
                                                        </label>
                                                    </div>

                                                    <div class="col">
                                                    <input type="hidden" name="vestCh" value="0">
                                                        <input class="form-check-input" type="checkbox" name="vestCh"
                                                            id="vestCh" value="Yes" {{ ($chdata->vestCh == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="vestCh">
                                                            Life vest/LifeJacket/Floatation device
                                                        </label>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="others12Ch" value="0">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="others12Ch" id="others12Ch" value="Yes"{{ ($chdata->others12Ch == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="others12Ch" name="others12"
                                                            value="{{$patients->others12}}" placeholder="N/A">
                                                            Others
                                                        </label>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="unknown5Ch" value="0">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="unknown5Ch" id="unknown5Ch" value="Yes"{{ ($chdata->unknown5Ch == 'Yes'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="unknown5Ch">
                                                            Unknown
                                                        </label>
                                                    </div>
                                                
                                            </div>
                                            <!--33e end-->
                                        
                            <!--TRANSPORT/VEHICULAR PART-->
                        </div>

                </div>
                <!--collapsible button-->

                <hr>

                <div class="form-group border border-secondary">
                    <div class="p-2 bg-success text-white">
                        <div class="row">
                            <div class="col">HOSPITAL/FACILITY DATA:</div>
                            <div class="w-100 d-none d-md-block"></div>
                            <div class="col">A.
                                <select id="patType" name="patType" class="form-select-sm d-print-none" aria-label=".form-select-sm example" required>
                                    <option value="{{$patients->patType}}">{{$patients->patType}}</option>
                                    <option value="ER" id="pattype" name="pattype">ER</option>
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
                                <input type="hidden" name="referral" value="0">
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
                                    Name of Originating Hospital/Physician:
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
                            </div>

                            <div class="col-auto">
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
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-auto">
                                <label class="form-check-label">
                                    Mode of transport to the Hospital/Facility:
                                </label>
                            </div>

                            <div class="col-auto">
                                <input class="form-check-input" type="radio" value="Yes" 
                                    name="transpoRdo" id="ambulance" {{ ($chdata->transpoRdo == 'Yes'? ' checked' : '') }} checked="true">
                                <label class="form-check-label" for="ambulance">
                                    Ambulance
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" value="No" 
                                    name="transpoRdo" id="police" {{ ($chdata->transpoRdo == 'No'? ' checked' : '') }}>
                                <label class="form-check-label" for="police">
                                    Police vehicle
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" value="3" 
                                    name="transpoRdo" id="private" {{ ($chdata->transpoRdo == '3'? ' checked' : '') }}>
                                <label class="form-check-label" for="private">
                                    Private vehicle
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" value="4" 
                                    name="transpoRdo" id="others13" {{ ($chdata->transpoRdo == '4'? ' checked' : '') }}>
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
                                            <input class="form-check-input" type="radio" value="disposition" name="dispoRdo" id="admitted"
                                                checked="true" {{ ($chdata->dispoRdo == 'disposition'? ' checked' : '') }}>
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
                                        <input class="form-check-input" type="radio" value="improved" name="outcome" id="improved" checked="true"
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
                    <div class="container">
                        <div class="row">
                            <div class="col">
                            <h6 class="form-check-label" for="flexCheckDefault">
                            Complete Final Diagnosis
                                                        </h6>
                                <input type="text" class="inputlabelunderlinelong" name="inPatFinalDiag"
                                                    value="{{$patients->inPatFinalDiag}}" placeholder="Text here">
                                                    
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-auto">
                            <h6 class="form-check-label" for="flexCheckDefault">
                                                            Disposition
                                                        </h6>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio"
                                    name="inPatDispoRdo" id="inDischarged" value="admDischarge"{{ ($chdata->inPatDispoRdo == 'admDischarge'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inDischarged">
                                Discharged
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio"
                                    name="inPatDispoRdo" id="inHama" value="admHAMA"{{ ($chdata->inPatDispoRdo == 'admHAMA'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inHama">
                                HAMA
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio"
                                    name="inPatDispoRdo" id="inAbson" value="admAbsconded"{{ ($chdata->inPatDispoRdo == 'admAbsconded'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inAbson">
                                Absonconded
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio"
                                    name="inPatDispoRdo" id="inOthers" value="admOth"{{ ($chdata->inPatDispoRdo == 'admOth'? ' checked' : '') }}>
                                    
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
                                <input type="text" class="inputlabelunderline" name="inPatTransfer"
                                                value="{{$patients->inPatTransfer}}" placeholder="N/A">
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
                                    name="inPatOutcomeRdo" id="inImprov" value="admOutcome" {{ ($chdata->inPatOutcomeRdo == 'admOutcome'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inImprov">
                                Improved
                                </label>
                            </div>
                            <div class="col-auto">
                            
                                <input class="form-check-input" type="radio"
                                    name="inPatOutcomeRdo" id="inUnimprov" value="admUnimproved" {{ ($chdata->inPatOutcomeRdo == 'admUnimproved'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inUnimprov">
                                Unimproved
                                </label>
                            </div>
                            <div class="col-auto">
                            
                                <input class="form-check-input" type="radio"
                                    name="inPatOutcomeRdo" id="inDied" value="admDied" {{ ($chdata->inPatOutcomeRdo == 'admDied'? ' checked' : '') }}>
                                    
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
                                    <input type="text" class="inputlabelunderline2" name="consultant_in_charge_last_name"
                                                    value="{{$patients->consultant_in_charge_last_name}}" placeholder="Last Name">
                                    <input type="text" class="inputlabelunderline2" name="consultant_in_charge_first_name"
                                                    value="{{$patients->consultant_in_charge_first_name}}" placeholder="First Name">
                                    <input type="text" class="inputlabelunderline2" name="consultant_in_charge_middle_name"
                                                    value="{{$patients->consultant_in_charge_middle_name}}" placeholder="Middle Name">
                                    <input type="text" class="inputlabelunderline2" name="consultant_in_charge_department"
                                                    value="{{$patients->consultant_in_charge_department}}" placeholder="Department">
                                </div>
                            </div>
                        </div>
                        <div class="col border border-secondary">
                                <input type="text" class="inputlabelunderline2" name="consultant_landline"
                                                    value="{{$patients->consultant_landline}}" placeholder="Landline#">
                                <input type="text" class="inputlabelunderline2" name="consultant_mobile"
                                                    value="{{$patients->consultant_mobile}}" placeholder="Mobile#">
                                <input type="text" class="inputlabelunderline" name="consultant_email"
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
                                            <input type="text" class="inputlabelunderline2" name="consultant_street_name"
                                                            value="{{$patients->consultant_street_name}}" placeholder="# and Street Name">
                                            <input type="text" class="inputlabelunderline2" name="consultant_region"
                                                            value="{{$patients->consultant_region}}" placeholder="Region">
                                            <input type="text" class="inputlabelunderline2" name="consultant_province"
                                                            value="{{$patients->consultant_province}}" placeholder="Province">
                                            <input type="text" class="inputlabelunderline2" name="consultant_city"
                                                            value="{{$patients->consultant_city}}" placeholder="City/Municipality">
                                            <input type="text" class="inputlabelunderline2" name="consultant_barangay"
                                                            value="{{$patients->consultant_barangay}}" placeholder="Barangay">
                                            <input type="text" class="inputlabelunderline2" name="consultant_zipcode"
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
                                <h6 class="form-check-label" for="flexCheckDefault">
                                                            Completed By:
                                                        </h6>
                                    <input type="text" class="inputlabelunderline2" name="completedBy_last_name"
                                                    value="{{$patients->completedBy_last_name}}" placeholder="Last Name">
                                    <input type="text" class="inputlabelunderline2" name="completedBy_first_name"
                                                    value="{{$patients->completedBy_first_name}}" placeholder="First Name">
                                    <input type="text" class="inputlabelunderline2" name="completedBy_middle_name"
                                                    value="{{$patients->completedBy_middle_name}}" placeholder="Middle Name">
                                    <input type="text" class="inputlabelunderline2" name="completedBy_department"
                                                    value="{{$patients->completedBy_department}}" placeholder="Department">
                                </div>
                            </div>
                        </div>
                        <div class="col border border-secondary">
                                <input type="text" class="inputlabelunderline2" name="completedBy_landline"
                                                    value="{{$patients->completedBy_landline}}" placeholder="Landline#">
                                <input type="text" class="inputlabelunderline2" name="completedBy_mobile"
                                                    value="{{$patients->completedBy_mobile}}" placeholder="Mobile#">
                                <input type="text" class="inputlabelunderline" name="completedBy_email"
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
                                            <input type="text" class="inputlabelunderline2" name="completedBy_street"
                                                            value="{{$patients->completedBy_street}}" placeholder="# and Street Name">
                                            <input type="text" class="inputlabelunderline2" name="completedBy_region"
                                                            value="{{$patients->completedBy_region}}" placeholder="Region">
                                            <input type="text" class="inputlabelunderline2" name="completedBy_province"
                                                            value="{{$patients->completedBy_province}}" placeholder="Province">
                                            <input type="text" class="inputlabelunderline2" name="completedBy_City"
                                                            value="{{$patients->completedBy_City}}" placeholder="City/Municipality">
                                            <input type="text" class="inputlabelunderline2" name="completedBy_barangay"
                                                            value="{{$patients->completedBy_barangay}}" placeholder="Barangay">
                                            <input type="text" class="inputlabelunderline2" name="completedBy_zip"
                                                            value="{{$patients->completedBy_zip}}" placeholder="Zip Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="birthday">Date Completed:</label>
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
                        <!-- <div class="col d-flex justify-content-end">
                        <button type="submit" class="btn btn-outline-primary d-print-none"><i class="fa fa-search"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                        </svg> Save to</button>
                        </div> -->

                        <div class="col d-flex justify-content-end">
                             <button id="saveinto" type="submit" class="btn btn-outline-primary d-print-none" onclick="return confirm(&quot;WARNING! saving into 'Final Output' will delete the current patient in DRAFTS, Continue?&quot;)"><i class="fa fa-search"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                            </svg> Save into:</button>
                            <select id="status" name="status" class="form-select-sm d-print-none" aria-label=".form-select-sm example">
                                <option value="drafts">Drafts</option>
                                <option value="completeForm">Final Output</option>
                            </select>
                            
                        </div>
                        </form>
                        <div class="col-auto d-flex justify-content-end">
                            <button type="submit" class="btn btn-outline-warning d-print-none" id="print"><i class="fa fa-search"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                            </svg> Print</button>
                        </div>
                        <!-- <div class="col-auto">
                            <form action="/export/{{$patients->enccode1}}" type="get">
                                <input type="hidden" id="status" name="status" value="archive">
                            <button name="status" id="status" value="archive" type="submit" class="btn btn-outline-success d-print-none"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                            <path d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                            </svg> <label for="" id="status" name="status" value="archive"></label> Excel</button>
                            </form>
                        </div> -->
                    </div>
                
                </div>
            </div>
            
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
<script src="jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="{{ URL::asset('js/printThis.js') }}"></script>
<script>
    $('#print').click(function(){
        document.execCommand('print');
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
        var deadarrival = document.getElementById("deadarrival");

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
        
        firecrackerCh.addEventListener('click', function (){
        if(this.checked){
            firecrackInput.disabled = '';
        }else{
            firecrackInput.value= '';
            firecrackInput.disabled = 'true';
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
        deadarrival.addEventListener('click', function () {
            if(this.checked){
                conscious.checked = '';
                unconscious.checked = '';
            }

        });
        burnCh.addEventListener('click', function () {
            if (this.checked) {
                degreeRdoBtn1.checked = 'false';
                degreeRdoBtn2.checked = 'false';
                degreeRdoBtn3.checked = 'false';
                degreeRdoBtn4.checked = 'false';
                degreeRdoBtn5.checked = 'false';
                burnChInput.disabled='';




            } else {
                degreeRdoBtn1.checked = '';
                degreeRdoBtn2.checked = '';
                degreeRdoBtn3.checked = '';
                degreeRdoBtn4.checked = '';
                degreeRdoBtn5.checked = '';
                burnChInput.disabled='true';
                burnChInput.value='';
            }
        });
        burn1Ch.addEventListener('click', function (){
            if(this.checked){
                Heat.checked = 'false';
                Fire.checked = 'false';
                Electricty.checked = 'false';
                Oil.checked = 'false';
                Friction.checked = 'false';
                Others2.checked = 'false';
                others2Input.disabled = '';
            }
            else{
                Heat.checked = '';
                Fire.checked = '';
                Electricty.checked = '';
                Oil.checked = '';
                Friction.checked = '';
                Others2.checked = '';
                others2Input.value = '';
                others2Input.disabled = 'true';
            }
        })
        drowningCh.addEventListener('click', function(){
            if(this.checked){
                Sea.checked = 'false';
                River.checked = 'false';
                Lake.checked = 'false';
                Pool.checked = 'false';
                BathTub.checked = 'false';
                Others3.checked = 'false';
                others3Input.disabled='';
            }
            else{
                Sea.checked = '';
                River.checked = '';
                Lake.checked = '';
                Pool.checked = '';
                BathTub.checked = '';
                Others3.checked = '';
                others3Input.value='';
                others3Input.disabled='true';
            }
        })
        natureCh.addEventListener('click', function(){
            if(this.checked){
                Earthquake.checked = 'false';
                Volcanic.checked = 'false';
                Typhoon.checked = 'false';
                Landslide.checked = 'false';
            }
            else{
                Earthquake.checked = '';
                Volcanic.checked = '';
                Typhoon.checked = '';
                Landslide.checked = '';
            }
        })
    })();

    $("#update").click(function () {
        var fName = $("#firstName").val();
        var mName = $("#middleName").val();
        var lName = $("#lName").val();

        alert("Patient " + fName + " " + mName + " " + lName + " has been updated!");
    })

</script>

@stop
