@extends('patients.layouts')
@section('content')
<style>
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
<!-- <div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> -->
@foreach($patients as $patients) @endforeach
@foreach($chdata as $chdata)@endforeach


<form action="/store/{{$patients->enccode}}" type="get">

<div class="card">
    <div class="card-header p-2 text-white" id="bgGreen">GENERAL DATA:</div>
    <!-- <div class="header">GENERAL DATA</div> -->
    <div class="card-body border border-secondary">
        
            {!! csrf_field() !!}

            <!--<input type="checkbox" value="Edit" id="editChx"><label>Edit profile</label></br>-->
            <div class="grid-container">
                <div class="item1">
                    <label>First Name:</label>
                    <input type="text" name="firstName" id="firstName" value="{{$patients->patfirst}}"
                        class="form-control"  disabled>
                </div>
                <div class="item2">
                    <label>Middle name:</label>
                    <input type="text" name="middleName" id="middleName" value="{{$patients->patmiddle}}"
                        class="form-control" disabled>
                </div>
                <div class="item3">
                    <label>Last name:</label>
                    <input type="text" name="lName" id="lName" value="{{$patients->patlast}}" class="form-control" disabled>
                </div>   
            </div>
<br>

                <div class="form-group">
                    <div class="container">
                    <div class="row ">
                        <div class="col-auto">
                            <div class="row">
                                <div class="col-auto">
                                    <label class="firstAid">First Aid Given:</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" name="rdoAid" id="aidYes" value="1" {{ ($chdata->rdoAid == '1'? ' checked' : '') }}>
                                    <label class="form-check-label" for="aidYes">
                                        Yes</label>
                                </div>
                                <div class="col-auto">
                                    </label>
                                    <input class="form-check-input" type="radio" name="rdoAid" id="aidNo" value="2" {{ ($chdata->rdoAid == '2'? ' checked' : '') }}>
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
                        <div class="col-auto">
                        <textarea class="form-control" name="frstAid" id="frstAid"
                            placeholder="no comment">{{$patients->frstAid}}</textarea>
                        </div>
                        
                        <div class="col-auto">
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
                                <input class="form-check-input" type="radio" name="injryRdo" id="injuryRdo1" value="1" {{ ($chdata->injryRdo == '1'? ' checked' : '') }}>
                                <label class="form-check-label" for="injuryRdo1">
                                    Yes
                                </label>
                            </div>
                            <div class="item3">
                                <input class="form-check-input" type="radio" name="injryRdo" id="injuryRdo2" value="2" {{ ($chdata->injryRdo == '2'? ' checked' : '') }}>
                                <label class="form-check-label" for="injuryRdo2">
                                    No
                                </label>
                            </div>

                        </div>
                        <!-- <div class="col col-lg-1">
                            <input class="form-check-input" type="radio" name="injryRdo" id="injuryRdo1" value="">
                            <label class="form-check-label" for="injuryRdo1">
                                Yes
                            </label>
                        </div>
                        <div class="col col-lg-1">
                            <input class="form-check-input" type="radio" name="injryRdo" id="injuryRdo2" value="">
                            <label class="form-check-label" for="injuryRdo2">
                                No
                            </label>
                        </div> -->
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
                                        value="1"{{ ($chdata->abrasionCh == '1'? ' checked' : '') }}>
                                    <label class="form-check-label" for="Abrasion">
                                        Abrasion    
                                    </label>
                                    <input type="text" class="inputlabelunderline" name="abrasion"
                                        value="{{$patients->abrasion}}" placeholder="N/A">
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col col-lg-5">
                                    <input type="hidden" name="avulsionCh" value="0">
                                    <input class="form-check-input" type="checkbox" name="avulsionCh" id="avulsion"
                                        value="1" {{ ($chdata->avulsionCh == '1'? ' checked' : '') }}>
                                    <label class="form-check-label" for="avulsion">
                                        Avulsion
                                    </label>
                                    <input type="text" class="inputlabelunderline" name="avulsion"
                                        value="{{$patients->avulsion}}" placeholder="N/A">
                                </div>
                            </div>

                            <input type="hidden" name="burnCh" value="0">

                            
                            <input class="form-check-input" type="checkbox" name="burnCh" id="burnCh" value="1" {{ ($chdata->burnCh == '1'? ' checked' : '') }}>
                            <div class="row">
                                <div class="col col-lg-16">
                                    <label class="form-check-label" for="burnCh">
                                        Burn (Degree of Burn & Extent of Body Surface involved) Degree:
                                    </label>
                                    <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn1" value="1" {{ ($chdata->degreeRdoBtn == '1'? ' checked' : '') }}>
                                    <label class="" for="degreeRdoBtn1">
                                        1<sup>st</sup>
                                        <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn2" value="2" {{ ($chdata->degreeRdoBtn == '2'? ' checked' : '') }}>
                                        <label class="" for="degreeRdoBtn2">
                                            2<sup>nd</sup>
                                        </label>
                                        <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn3" value="3" {{ ($chdata->degreeRdoBtn == '3'? ' checked' : '') }}>
                                        <label class="" for="degreeRdoBtn3">
                                            3<sup>rd</sup>
                                        </label>
                                        <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn4" value="4" {{ ($chdata->degreeRdoBtn == '4'? ' checked' : '') }}>
                                        <label class="" for="degreeRdoBtn4">
                                            4<sup>th</sup>
                                        </label>
                                        <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn5" value="5" {{ ($chdata->degreeRdoBtn == '5'? ' checked' : '') }}>
                                        <label class="" for="degreeRdoBtn5">
                                            5<sup>th</sup>
                                        </label>
                                        <label>Site:</label>
                                        <input type="text" class="inputlabelunderline" value="{{$patients->site}}" name="site"
                                            placeholder="N/A">
                                    </label>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col col-lg-5">
                                    <input type="hidden" name="concussionCh" value="0">
                                    <input class="form-check-input" type="checkbox" name="concussionCh"
                                        id="concussionCh" value="1" {{ ($chdata->concussionCh == '1'? ' checked' : '') }}>
                                    <label class="form-check-label" for="concussionCh">
                                        Concussion
                                    </label>
                                    <input type="text" class="inputlabelunderline" value="{{$patients->concussion}}" name="concussion"
                                        placeholder="N/A">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-lg-5">
                                    <input type="hidden" name="contusionCh" value="0">
                                    <input class="form-check-input" type="checkbox" name="contusionCh" id="contusionCh"
                                        value="1" {{ ($chdata->contusionCh == '1'? ' checked' : '') }}>
                                    <label class="form-check-label" for="contusionCh">
                                        Contusion
                                    </label>
                                    <input type="text" class="inputlabelunderline" value="{{$patients->contusion}}" name="contusion"
                                        placeholder="N/A">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col col-lg-5">
                                    <input type="hidden" name="fractureCh" value="0">
                                    <input class="form-check-input" type="checkbox" name="fractureCh" id="fractureCh"
                                        value="1" {{ ($chdata->fractureCh == '1'? ' checked' : '') }}>

                                    <label class="form-check-label" for="fractureCh">
                                        Fracture
                                    </label>
                                    <div class="container">
                                    <div class="row mx-md-n5">
                                        <div class="col px-md-5">

                                            <label class="form-check-label" for="flexCheckDefault">
                                                <input type="hidden" name="openTypeCh" value="0">
                                                <input class="form-check-input" type="checkbox" name="openTypeCh"
                                                    id="openTypeCh" value="1" {{ ($chdata->openTypeCh == '1'? ' checked' : '') }}>
                                                <label class="form-check-label" for="openTypeCh">
                                                    Open Type
                                                </label>
                                                <input type="text" class="inputlabelunderline"
                                                    value="{{$patients->openType}}" placeholder="N/A" name="openType">
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
                                                <input class="form-check-input" type="checkbox" name="closedTypeCh"
                                                    id="closedTypeCh" value="1" {{ ($chdata->closedTypeCh == '1'? ' checked' : '') }}>
                                                <label class="form-check-label" for="closedTypeCh">
                                                    Closed Type
                                                </label>
                                                <input type="text" class="inputlabelunderline" name="closedType"
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
                                            value="1" {{ ($chdata->woundCh == '1'? ' checked' : '') }}>
                                        <label class="form-check-label" for="woundCh">
                                            <label class="form-check-label" for="woundCh">
                                                Open/Wound Laceration
                                            </label>
                                            <input type="text" class="inputlabelunderline" value="{{$patients->wound}}" name="wound"
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
                                            value="1" {{ ($chdata->traumaCh == '1'? ' checked' : '') }}>

                                        <label class="form-check-label" for="traumaCh">
                                            Traumatic Amputation
                                        </label>
                                        <input type="text" class="inputlabelunderline" name="traumaticAmputation"
                                            value="{{$patients->traumaticAmputation}}" placeholder="N/A">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col col-lg-8">
                                    <input type="hidden" name="others1Ch" value="0">
                                        <input class="form-check-input" type="checkbox" name="others1Ch" id="others1Ch"
                                            value="1" {{ ($chdata->others1Ch == '1'? ' checked' : '') }}>

                                        <label class="form-check-label" for="others1Ch">
                                            Others: Pls. specify injury and the body part/s affected:
                                        </label>
                                        <input type="text" class="inputlabelunderline" value="{{$patients->others1}}" name="others1"
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
                    <input class="form-check-input" type="checkbox" name="bitesCh" id="bitesCh" value="1" {{ ($chdata->bitesCh == '1'? ' checked' : '') }}>
                    <label class="form-check-label" for="bitesCh">
                        Bites/stings, Specify animal/insect:
                    </label>
                    <input type="text" class="inputlabelunderline" value="{{$patients->bites}}" placeholder="N/A" name="bites">

                    <div class="row">
                        <div class="col-auto">
                        <input type="hidden" name="burn1Ch" value="0">
                            <input class="form-check-input" type="checkbox" name="burn1Ch" id="burn1Ch" value="1" {{ ($chdata->burn1Ch == '1'? ' checked' : '') }}>
                            <label class="form-check-label" for="burn1Ch">
                                Burn,
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="1" name="burnRdo" id="Heat" {{ ($chdata->burnRdo == '1'? ' checked' : '') }}>
                            <label class="form-check-label" for="Heat">
                                Heat
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="2" name="burnRdo" id="Fire" {{ ($chdata->burnRdo == '2'? ' checked' : '') }}> 
                            <label class="form-check-label" for="Fire">
                                Fire
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="3" name="burnRdo" id="Electricty" {{ ($chdata->burnRdo == '3'? ' checked' : '') }}>
                            <label class="form-check-label" for="Electricty">
                                Electricty
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="4" name="burnRdo" id="Oil" {{ ($chdata->burnRdo == '4'? ' checked' : '') }}>
                            <label class="form-check-label" for="Oil">
                                Oil
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="5" name="burnRdo" id="Friction" {{ ($chdata->burnRdo == '5'? ' checked' : '') }}>
                            <label class="form-check-label" for="Friction">
                                Friction
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="6" name="burnRdo" id="Others2" {{ ($chdata->burnRdo == '6'? ' checked' : '') }}>
                            <label class="form-check-label" for="Others2">
                                Others,specify
                            </label>
                            <input type="text" class="inputlabelunderline" value="{{$patients->others2}}" name="others2"
                                placeholder="N/A">
                        </div>

                    </div>

                    <input type="hidden" name="chemicalCh" value="0">
                    <input class="form-check-input" type="checkbox" name="chemicalCh" id="chemicalCh" value="1" {{ ($chdata->chemicalCh == '1'? ' checked' : '') }}>
                    <div class="row">
                        <div class="col-auto">
                            <label class="form-check-label" for="chemicalCh">
                                Chemical/Substance, specify
                            </label>
                            <input type="text" class="inputlabelunderline" value="{{$patients->chemical}}" name="chemical"
                                placeholder="N/A">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-8">
                        <input type="hidden" name="sharpCh" value="0">
                            <input class="form-check-input" type="checkbox" name="sharpCh" id="sharpCh" value="1" {{ ($chdata->sharpCh == '1'? ' checked' : '') }}>
                            <label class="form-check-label" for="sharpCh">
                                Contact with sharp objects, specify object
                            </label>
                            <input type="text" class="inputlabelunderline" value="{{$patients->sharp}}" name="sharp"
                                placeholder="N/A">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-auto">
                        <input type="hidden" name="drowningCh" value="0">
                            <input class="form-check-input" type="checkbox" name="drowningCh" id="drowningCh"
                                value="1" {{ ($chdata->drowningCh == '1'? ' checked' : '') }}>
                            <label class="form-check-label" for="drowningCh">
                                Drowning: Type/Body of Water:
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="1" name="drowningRdo" id="Sea" {{ ($chdata->drowningRdo == '1'? ' checked' : '') }}>
                            <label class="form-check-label" for="Sea">
                                Sea
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="2" name="drowningRdo" id="River" {{ ($chdata->drowningRdo == '2'? ' checked' : '') }}>
                            <label class="form-check-label" for="River">
                                River
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="3" name="drowningRdo" id="Lake" {{ ($chdata->drowningRdo == '3'? ' checked' : '') }}>
                            <label class="form-check-label" for="Lake">
                                Lake
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="4" name="drowningRdo" id="Pool" {{ ($chdata->drowningRdo == '4'? ' checked' : '') }}>
                            <label class="form-check-label" for="Pool">
                                Pool
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" value="5" name="drowningRdo" id="BathTub" {{ ($chdata->drowningRdo == '5'? ' checked' : '') }}>
                            <label class="form-check-label" for="BathTub">
                                Bath Tub
                            </label>
                        </div>
                        <div class="col col-lg-4">
                            <input class="form-check-input" type="radio" value="6"  name="drowningRdo" id="Others3" {{ ($chdata->drowningRdo == '6'? ' checked' : '') }}>
                            <label class="form-check-label" for="Others3">
                                Others,specify
                            </label>
                            <input type="text" class="inputlabelunderline" value="{{$patients->others3}}" name="others3"
                                placeholder="N/A">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-auto">
                        <input type="hidden" name="natureCh" value="0">
                            <input class="form-check-input" type="checkbox" name="natureCh" id="natureCh" value="1" {{ ($chdata->natureCh == '1'? ' checked' : '') }}>
                            <label class="form-check-label" for="natureCh">
                                Exposure to forces of Nature:
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" name="natureRdo" id="Earthquake" value="1" {{ ($chdata->natureRdo == '1'? ' checked' : '') }}>
                            <label class="form-check-label" for="Earthquake">
                                Earthquake
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" name="natureRdo" id="Volcanic" value="2" {{ ($chdata->natureRdo == '2'? ' checked' : '') }}>
                            <label class="form-check-label" for="Volcanic">
                                Volcanic eruption
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" name="natureRdo" id="Typhoon" value="3" {{ ($chdata->natureRdo == '3'? ' checked' : '') }}>
                            <label class="form-check-label" for="Typhoon">
                                Typhoon
                            </label>
                        </div>
                        <div class="col-auto">
                            <input class="form-check-input" type="radio" name="natureRdo" id="Landslide" value="4" {{ ($chdata->natureRdo == '4'? ' checked' : '') }}>
                            <label class="form-check-label" for="Landslide">
                                Landslide/Avalanche
                            </label>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="gunshotCh" value="0">
                                <input class="form-check-input" type="checkbox" name="gunshotCh" id="gunshotCh"
                                    value="1" {{ ($chdata->gunshotCh == '1'? ' checked' : '') }}>

                                <label class="form-check-label" for="gunshotCh">
                                    Gunshot, Specify weapon
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->gunshot}}" name="gunshot"
                                    placeholder="N/A">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-4">
                            <input type="hidden" name="hangingCh" value="0">
                                <input class="form-check-input" type="checkbox" name="hangingCh" id="hangingCh"
                                    value="1" {{ ($chdata->hangingCh == '1'? ' checked' : '') }}>
                                <label class="form-check-label" for="hangingCh">
                                    Hanging/Strangulation
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-4">
                            <input type="hidden" name="maulingCh" value="0">
                                <input class="form-check-input" type="checkbox" name="maulingCh" id="maulingCh"
                                    value="1" {{ ($chdata->maulingCh == '1'? ' checked' : '') }}>
                                <label class="form-check-label" for="maulingCh">
                                    Mauling/Assault
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-4">
                            <input type="hidden" name="transportCh" value="0">
                                <input class="form-check-input" type="checkbox" name="transportCh" id="transportCh"
                                    value="1" {{ ($chdata->transportCh == '1'? ' checked' : '') }}>
                                <label class="form-check-label" for="transportCh">
                                    Transport/Vehicular Accident
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="fallCh" value="0">
                                <input class="form-check-input" type="checkbox" name="fallCh" id="fallCh" value="1" {{ ($chdata->fallCh == '1'? ' checked' : '') }}>
                                <label class="form-check-label" for="fallCh">
                                    Fall, specify, from/in/on/into
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->fall}}" name="fall"
                                    placeholder="N/A">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="firecrackerCh" value="0">
                                <input class="form-check-input" type="checkbox" name="firecrackerCh"
                                    id="firecrackerCh" value="1" {{ ($chdata->firecrackerCh == '1'? ' checked' : '') }}>
                                <label class="form-check-label" for="firecrackerCh">
                                    Firecracker, specify type/s
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->firecracker}}" name="firecracker"
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
                                    value="1" {{ ($chdata->assaultCh == '1'? ' checked' : '') }}>
                                <label class="form-check-label" for="assaultCh">
                                    Sexual Assault/Sexual Abuse/Rape(Alleged)
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-auto">
                            <input type="hidden" name="others5Ch" value="0">
                                <input class="form-check-input" type="checkbox" name="others5Ch" id="others5Ch"
                                    value="1" {{ ($chdata->others5Ch == '1'? ' checked' : '') }}>
                                <label class="form-check-label" for="others5Ch">
                                    Others,specify
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->others5}}" name="others5"
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
                                                        id="Land" value="1" {{ ($chdata->areaRdo == '1'? ' checked' : '') }}>
                                                    <label class="form-check-label mx-auto" for="Land">
                                                        Land
                                                    </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" name="areaRdo"
                                                        id="Water" value="2" {{ ($chdata->areaRdo == '2'? ' checked' : '') }}>
                                                    <label class="form-check-label mx-auto" for="Water">
                                                        Water
                                                    </label>
                                                </div>
                                                <div class="col col-lg-4">
                                                    <input class="form-check-input" type="radio" name="areaRdo"
                                                        id="Air" value="3" {{ ($chdata->areaRdo == '3'? ' checked' : '') }}>
                                                    <label class="form-check-label mx-auto" for="Air">
                                                        Air
                                                    </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" name="collRdo"
                                                        id="Collision" value="1" {{ ($chdata->collRdo == '1'? ' checked' : '') }}>
                                                    <label class="form-check-label mx-auto" for="Collision">
                                                        Collision
                                                    </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" name="collRdo"
                                                        id="Non-Collision" value="2" {{ ($chdata->collRdo == '2'? ' checked' : '') }}>
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
                                                        id="Fatal Accident" value="1" {{ ($chdata->severRdo == '1'? ' checked' : '') }}>
                                                    <label class="form-check-label" for="Fatal Accident">
                                                        Fatal Accident
                                                    </label>
                                                </div>
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" value="Serious"
                                                        name="severRdo" id="Serious" value="2" {{ ($chdata->severRdo == '2'? ' checked' : '') }}>
                                                    <label class="form-check-label" for="Serious">
                                                        Serious Injury Accident
                                                    </label>
                                                </div>

                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" value="Minor"
                                                        name="severRdo" id="Minor" value="3" {{ ($chdata->severRdo == '3'? ' checked' : '') }}>
                                                    <label class="form-check-label" for="Minor">
                                                        Minor Injury Accident
                                                    </label>
                                                </div>

                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" value="Property"
                                                        name="severRdo" id="Property" value="4" {{ ($chdata->severRdo == '4'? ' checked' : '') }}>
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
                                                                        name="vehicleRdo" id="Pedestrian" value="1" {{ ($chdata->vehicleRdo == '1'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Pedestrian">
                                                                        None(Pedestrian)
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Car" value="2" {{ ($chdata->vehicleRdo == '2'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Car">
                                                                        Car
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Van" value="3" {{ ($chdata->vehicleRdo == '3'? ' checked' : '') }}>
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
                                                                        name="vehicleRdo" id="Bus" value="4" {{ ($chdata->vehicleRdo == '4'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Bus">
                                                                        Bus
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Motorcycle" value="5" {{ ($chdata->vehicleRdo == '5'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Motorcycle">
                                                                        Motorcycle
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Bicycle" value="6" {{ ($chdata->vehicleRdo == '6'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Bicycle">
                                                                        Bicycle
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Tricycle" value="7" {{ ($chdata->vehicleRdo == '7'? ' checked' : '') }}>
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
                                                                        name="vehicleRdo" id="Others6" value="8" {{ ($chdata->vehicleRdo == '8'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Others6"
                                                                        name="others6">
                                                                        Others,
                                                                    </label>
                                                                    <input type="text" class="inputlabelunderline"
                                                                        value="{{$patients->others6}}" placeholder="N/A" name="others6"> 
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="vehicleRdo" id="Unknown" value="9" {{ ($chdata->vehicleRdo == '9'? ' checked' : '') }}>
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
                                                                        name="otherRdo" id="Pedestrian1" value="1" {{ ($chdata->otherRdo == '1'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Pedestrian1">
                                                                        None(Pedestrian)
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Car1" value="2" {{ ($chdata->otherRdo == '2'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Car1">
                                                                        Car
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Van1" value="3" {{ ($chdata->otherRdo == '3'? ' checked' : '') }}>
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
                                                                        name="otherRdo" id="Bus1" value="4" {{ ($chdata->otherRdo == '4'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Bus1">
                                                                        Bus
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Motorcycle1" value="5" {{ ($chdata->otherRdo == '5'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Motorcycle1">
                                                                        Motorcycle
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Bicycle1" value="6" {{ ($chdata->otherRdo == '6'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Bicycle1">
                                                                        Bicycle
                                                                    </label>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Tricycle1" value="7" {{ ($chdata->otherRdo == '7'? ' checked' : '') }}>
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
                                                                        name="otherRdo" id="Others7" value="8" {{ ($chdata->otherRdo == '1'? ' checked' : '') }}>
                                                                    <label class="form-check-label" for="Others7">
                                                                        Others,
                                                                    </label>
                                                                    <input type="text" class="inputlabelunderline"
                                                                        name="others7" value="{{ $patients->others7}}"
                                                                        placeholder="N/A">
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="otherRdo" id="Unknown1" value="9"{{ ($chdata->otherRdo == '1'? ' checked' : '') }}>
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
                                                                    name="posRdo" id="Pedestrian2" value="1" {{ ($chdata->posRdo == '1'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Pedestrian2">
                                                                    Pedestrian
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Driver" value="2" {{ ($chdata->posRdo == '2'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Driver">
                                                                    Driver
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Captain" value="3" {{ ($chdata->posRdo == '3'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Captain">
                                                                    Captain
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Pilot" value="4" {{ ($chdata->posRdo == '4'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Pilot">
                                                                    Pilot
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Front" value="5" {{ ($chdata->posRdo == '5'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Front">
                                                                    Front Passenger
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Rear" value="6" {{ ($chdata->posRdo == '6'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Rear">
                                                                    Rear Passenger
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Others8" value="7" {{ ($chdata->posRdo == '7'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Others8">
                                                                    Others,
                                                                </label>
                                                                <input type="text" class="inputlabelunderline2"
                                                                    name="others8" value="{{ $patients->others8}}"
                                                                    placeholder="N/A">
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="posRdo" id="Unknown2" value="8" {{ ($chdata->posRdo == '8'? ' checked' : '') }}>
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
                                                                    name="victimsRdo" id="Alone" value="1" {{ ($chdata->victimsRdo == '1'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Alone">
                                                                    Alone
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="victimsRdo" id="Withothers" value="2" {{ ($chdata->victimsRdo == '2'? ' checked' : '') }}>
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
                                                                    name="placeRdo" id="Home" value="1" {{ ($chdata->placeRdo == '1'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Home">
                                                                    Home
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="placeRdo" id="School" value="2" {{ ($chdata->placeRdo == '2'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="School">
                                                                    School
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="placeRdo" id="Road" value="3" {{ ($chdata->placeRdo == '3'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Road">
                                                                    Road
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="placeRdo" id="Bars" value="4" {{ ($chdata->placeRdo == '4'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Bars">
                                                                    Videoke Bars
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="placeRdo" id="Workplace" value="5" {{ ($chdata->placeRdo == '5'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Workplace">
                                                                    Workplace, specify
                                                                </label>
                                                                <input type="text" class="inputlabelunderline2"
                                                                    name="workplaceInput" value="{{ $patients->workplaceInput}}" placeholder="N/A">
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="placeRdo" id="Others9" value="6" {{ ($chdata->placeRdo == '6'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Others9">
                                                                    Others, specify
                                                                </label>
                                                                <input type="text" class="inputlabelunderline2"
                                                                    name="others9" value="{{ $patients->others9}}"
                                                                    placeholder="N/A">
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="placeRdo" id="Unkown4" value="7" {{ ($chdata->placeRdo == '7'? ' checked' : '') }}>
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
                                                                    name="activityRdo" id="Sports" value="1" {{ ($chdata->activityRdo == '1'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Sports">
                                                                    Sports
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="activityRdo" id="Leisure" value="2" {{ ($chdata->activityRdo == '2'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Leisure">
                                                                    Leisure
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="activityRdo" id="Workrelated" value="3" {{ ($chdata->activityRdo == '3'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Workrelated">
                                                                    Work related
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="activityRdo" id="Others10" value="4" {{ ($chdata->activityRdo == '4'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Others10">
                                                                    Others, specify
                                                                </label>
                                                                <input type="text" class="inputlabelunderline2"
                                                                    name="others10" value="{{ $patients->others10}}"
                                                                    placeholder="N/A">
                                                            </div>

                                                            <div class="col-auto">
                                                                <input class="form-check-input" type="radio"
                                                                    name="activityRdo" id="Unkown5" value="5" {{ ($chdata->activityRdo == '5'? ' checked' : '') }}>
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
                                                                    name="alcoholCh" id="Alchohol" value="1" {{ ($chdata->alcoholCh == '1'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Alchohol">
                                                                    Alchohol/liquor
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="smokingCh" value="0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="smokingCh" id="Smoking" value="1"{{ ($chdata->smokingCh == '1'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Smoking">
                                                                    Smoking
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="drugsCh" value="0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="drugsCh" id="Drugs" value="1"{{ ($chdata->drugsCh == '1'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Drugs">
                                                                    Drugs
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="phoneCh" value="0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="phoneCh" id="phone" value="1"{{ ($chdata->phoneCh == '1'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="phone">
                                                                    Using mobile phone
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="sleepyCh" value="0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="sleepyCh" id="Sleepy" value="1" {{ ($chdata->sleepyCh == '1'? ' checked' : '') }}>
                                                                <label class="form-check-label" for="Sleepy">
                                                                    Sleepy
                                                                </label>
                                                            </div>

                                                            <div class="col-auto">
                                                            <input type="hidden" name="others11Ch" value="0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="others11Ch" id="Others11" value="1" {{ ($chdata->others11Ch == '1'? ' checked' : '') }}>
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
                                                            id="noneCh" value="1" {{ ($chdata->noneCh == '1'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="noneCh">
                                                            None
                                                        </label>
                                                    </div>
                                                    <div class="col-auto">
                                                    <input type="hidden" name="airbagCh" value="0">
                                                        <input class="form-check-input" type="checkbox" name="airbagCh"
                                                            id="airbagCh" value="1" {{ ($chdata->airbagCh == '1'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="airbagCh">
                                                            Airbag
                                                        </label>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="helmetCh" value="0">
                                                        <input class="form-check-input" type="checkbox" name="helmetCh"
                                                            id="helmetCh" value="1"{{ ($chdata->helmetCh == '1'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="helmetCh">
                                                            Helmet
                                                        </label>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="childseatCh" value="0">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="childseatCh" id="childseatCh" value="1"{{ ($chdata->childseatCh == '1'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="childseatCh">
                                                            Childseat
                                                        </label>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="seatbeltCh" value="0">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="seatbeltCh" id="seatbeltCh" value="1"{{ ($chdata->seatbeltCh == '1'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="seatbeltCh">
                                                            Seatbelt
                                                        </label>
                                                    </div>

                                                    <div class="col">
                                                    <input type="hidden" name="vestCh" value="0">
                                                        <input class="form-check-input" type="checkbox" name="vestCh"
                                                            id="vestCh" value="1" {{ ($chdata->vestCh == '1'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="vestCh">
                                                            Life vest/LifeJacket/Floatation device
                                                        </label>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="others12Ch" value="0">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="others12Ch" id="others12Ch" value="1"{{ ($chdata->others12Ch == '1'? ' checked' : '') }}>
                                                        <label class="form-check-label" for="others12Ch" name="others12"
                                                            value="{{$patients->others12}}" placeholder="N/A">
                                                            Others
                                                        </label>
                                                    </div>

                                                    <div class="col-auto">
                                                    <input type="hidden" name="unknown5Ch" value="0">
                                                        <input class="form-check-input" type="checkbox"
                                                            name="unknown5Ch" id="unknown5Ch" value="1"{{ ($chdata->unknown5Ch == '1'? ' checked' : '') }}>
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
                            <div class="col">A. ER/OPD/BHS/RHU</div>
                        </div>
                    </div>

                    <div class="row-auto border border-secondary border-left-0 border-right-0">
                        <div class="row">
                            <div class="col-auto">
                                Transferred from another hospital/facility
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" name="transferRdo" value="1"
                                     id="transferRdoyes" {{ ($chdata->transferRdo == '1'? ' checked' : '') }}>
                                <label class="form-check-label" for="transferRdoyes">
                                    Yes
                                </label>
                            </div>
                            <div class="col col-lg-1">
                                <input class="form-check-input" type="radio" name="transferRdo" value="2"
                                     id="transferRdono" {{ ($chdata->transferRdo == '2'? ' checked' : '') }} checked="true">
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
                                <input class="form-check-input" type="radio" name="referralRdo" value="1"
                                     id="referralyes" {{ ($chdata->referralRdo == '1'? ' checked' : '') }}>
                                <label class="form-check-label" for="referralyes">
                                    Yes
                                </label>
                            </div>
                            <div class="col col-lg-1">
                                <input class="form-check-input" type="radio" name="referralRdo" value="2"
                                     id="referralno" {{ ($chdata->referralRdo == '2'? ' checked' : '') }} checked="true">
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
                                <input class="form-check-input" type="radio" name="arrivalRdo" value="1"
                                id="deadarrival" {{ ($chdata->arrivalRdo == '1'? ' checked' : '') }}>
                                <label class="form-check-label" for="deadarrival">
                                    Dead on Arrival
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" name="arrivalRdo" value="2"
                                id="arrival" {{ ($chdata->arrivalRdo == '2'? ' checked' : '') }}>
                                <label class="form-check-label" for="arrival">
                                    Alive if alive, please check if:
                                </label>
                            </div>

                            <div class="col-auto">
                                <input class="form-check-input" type="radio" name="statusRdo" value="1"
                                id="conscious" {{ ($chdata->statusRdo == '1'? ' checked' : '') }}>
                                <label class="form-check-label" for="conscious">
                                    Conscious
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" name="statusRdo" value="2"
                                    id="unconscious" {{ ($chdata->statusRdo == '2'? ' checked' : '') }}>
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
                                <input class="form-check-input" type="radio" value="1" 
                                    name="transpoRdo" id="ambulance" {{ ($chdata->transpoRdo == '1'? ' checked' : '') }} checked="true">
                                <label class="form-check-label" for="ambulance">
                                    Ambulance
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" value="2" 
                                    name="transpoRdo" id="police" {{ ($chdata->transpoRdo == '2'? ' checked' : '') }}>
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
                                            <input class="form-check-input" type="radio" value="1" name="dispoRdo" id="admitted"
                                                checked="true" {{ ($chdata->dispoRdo == '1'? ' checked' : '') }}>
                                            <label class="form-check-label" for="admitted">
                                                Admitted
                                            </label>
                                        </div>
                                        <div class="col-auto px-md-5">
                                            <input class="form-check-input" type="radio" value="2" name="dispoRdo" id="senthome"
                                            {{ ($chdata->dispoRdo == '2'? ' checked' : '') }}>
                                            <label class="form-check-label" for="senthome">
                                                Treated and Sent Home
                                            </label>
                                        </div>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="radio" value="3" name="dispoRdo" id="transfer"
                                            {{ ($chdata->dispoRdo == '3'? ' checked' : '') }}>
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
                                            <input class="form-check-input" type="radio" value="4" name="dispoRdo" id="HAMA"
                                            {{ ($chdata->dispoRdo == '4'? ' checked' : '') }}>
                                            <label class="form-check-label" for="HAMA">
                                                HAMA
                                            </label>
                                        </div>
                                        <div class="col-auto px-md-5">
                                            <input class="form-check-input" type="radio" value="5" name="dispoRdo"
                                                id="absconded" {{ ($chdata->dispoRdo == '5'? ' checked' : '') }}>
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
                                        <input class="form-check-input" type="radio" value="1" name="outcome" id="improved" checked="true"
                                        {{ ($chdata->outcome == '1'? ' checked' : '') }}>
                                        <label class="form-check-label" for="improved">
                                            Improved
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" value="2" name="outcome"
                                            id="unimproved" {{ ($chdata->outcome == '2'? ' checked' : '') }}>
                                        <label class="form-check-label" for="unimproved">
                                            Unimproved
                                        </label>
                                    </div>
                                    <div class="col-auto">
                                        <input class="form-check-input" type="radio" value="3" name="outcome" id="died"
                                        {{ ($chdata->outcome == '3'? ' checked' : '') }}>
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
                                    name="inPatDispoRdo" id="inDischarged" value="1"{{ ($chdata->inPatDispoRdo == '1'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inDischarged">
                                Discharged
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio"
                                    name="inPatDispoRdo" id="inHama" value="2"{{ ($chdata->inPatDispoRdo == '2'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inHama">
                                HAMA
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio"
                                    name="inPatDispoRdo" id="inAbson" value="3"{{ ($chdata->inPatDispoRdo == '3'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inAbson">
                                Absonconded
                                </label>
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio"
                                    name="inPatDispoRdo" id="inOthers" value="4"{{ ($chdata->inPatDispoRdo == '4'? ' checked' : '') }}>
                                    
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
                                    name="inPatDispoRdo" id="inTransfer" value="5"{{ ($chdata->inPatDispoRdo == '5'? ' checked' : '') }}>
                                    
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
                                    name="inPatOutcomeRdo" id="inImprov" value="1" {{ ($chdata->inPatOutcomeRdo == '1'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inImprov">
                                Improved
                                </label>
                            </div>
                            <div class="col-auto">
                            
                                <input class="form-check-input" type="radio"
                                    name="inPatOutcomeRdo" id="inUnimprov" value="2" {{ ($chdata->inPatOutcomeRdo == '2'? ' checked' : '') }}>
                                    
                                <label class="form-check-label" for="inUnimprov">
                                Unimproved
                                </label>
                            </div>
                            <div class="col-auto">
                            
                                <input class="form-check-input" type="radio"
                                    name="inPatOutcomeRdo" id="inDied" value="3" {{ ($chdata->inPatOutcomeRdo == '3'? ' checked' : '') }}>
                                    
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
                                    <input type="text" class="inputlabelunderline2" name="inPatLastName"
                                                    value="{{$patients->inPatLastName}}" placeholder="Last Name">
                                    <input type="text" class="inputlabelunderline2" name="inPatFirstName"
                                                    value="{{$patients->inPatFirstName}}" placeholder="First Name">
                                    <input type="text" class="inputlabelunderline2" name="inPatMiddleName"
                                                    value="{{$patients->inPatMiddleName}}" placeholder="Middle Name">
                                    <input type="text" class="inputlabelunderline2" name="inPatDept"
                                                    value="{{$patients->inPatDept}}" placeholder="Department">
                                </div>
                            </div>
                        </div>
                        <div class="col border border-secondary">
                                <input type="text" class="inputlabelunderline2" name="inPatLandline"
                                                    value="{{$patients->inPatLandline}}" placeholder="Landline#">
                                <input type="text" class="inputlabelunderline2" name="inPatMobile"
                                                    value="{{$patients->inPatMobile}}" placeholder="Mobile#">
                                <input type="text" class="inputlabelunderline" name="inPatEmail"
                                                    value="{{$patients->inPatEmail}}" placeholder="Email ">
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
                                            <input type="text" class="inputlabelunderline2" name="inPatStreet"
                                                            value="{{$patients->inPatStreet}}" placeholder="# and Street Name">
                                            <input type="text" class="inputlabelunderline2" name="inPatRegion"
                                                            value="{{$patients->inPatRegion}}" placeholder="Region">
                                            <input type="text" class="inputlabelunderline2" name="inPatProv"
                                                            value="{{$patients->inPatProv}}" placeholder="Province">
                                            <input type="text" class="inputlabelunderline2" name="inPatCity"
                                                            value="{{$patients->inPatCity}}" placeholder="City/Municipality">
                                            <input type="text" class="inputlabelunderline2" name="inPatBrngy"
                                                            value="{{$patients->inPatBrngy}}" placeholder="Barangay">
                                            <input type="text" class="inputlabelunderline2" name="inPatZip"
                                                            value="{{$patients->inPatZip}}" placeholder="Zip Code">
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
                                    <input type="text" class="inputlabelunderline2" name="inPatLastName2"
                                                    value="{{$patients->inPatLastName2}}" placeholder="Last Name">
                                    <input type="text" class="inputlabelunderline2" name="inPatFirstName2"
                                                    value="{{$patients->inPatFirstName2}}" placeholder="First Name">
                                    <input type="text" class="inputlabelunderline2" name="inPatMiddleName2"
                                                    value="{{$patients->inPatMiddleName2}}" placeholder="Middle Name">
                                    <input type="text" class="inputlabelunderline2" name="inPatDept2"
                                                    value="{{$patients->inPatDept2}}" placeholder="Department">
                                </div>
                            </div>
                        </div>
                        <div class="col border border-secondary">
                                <input type="text" class="inputlabelunderline2" name="inPatLandline2"
                                                    value="{{$patients->inPatLandline2}}" placeholder="Landline#">
                                <input type="text" class="inputlabelunderline2" name="inPatMobile2"
                                                    value="{{$patients->inPatMobile2}}" placeholder="Mobile#">
                                <input type="text" class="inputlabelunderline" name="inPatEmail2"
                                                    value="{{$patients->inPatEmail2}}" placeholder="Email ">
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
                                            <input type="text" class="inputlabelunderline2" name="inPatStreet2"
                                                            value="{{$patients->inPatStreet2}}" placeholder="# and Street Name">
                                            <input type="text" class="inputlabelunderline2" name="inPatRegion2"
                                                            value="{{$patients->inPatRegion2}}" placeholder="Region">
                                            <input type="text" class="inputlabelunderline2" name="inPatProv2"
                                                            value="{{$patients->inPatProv2}}" placeholder="Province">
                                            <input type="text" class="inputlabelunderline2" name="inPatCity2"
                                                            value="{{$patients->inPatCity2}}" placeholder="City/Municipality">
                                            <input type="text" class="inputlabelunderline2" name="inPatBrngy2"
                                                            value="{{$patients->inPatBrngy2}}" placeholder="Barangay">
                                            <input type="text" class="inputlabelunderline2" name="inPatZip2"
                                                            value="{{$patients->inPatZip2}}" placeholder="Zip Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="birthday">Date Completed:</label>
                                    <input type="date" value="{{$patients->inPatDate}}" name="inPatDate"/>
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
                                onclick="return confirm(&quot;Unsaved information will not be updated, Continue?&quot;)">
                                <i class="fa fa-plus" aria-hidden="true"></i> Back
                            </a>
                        </div>   
                        <div class="col d-flex justify-content-end">
                        <button type="submit" class="btn btn-outline-primary d-print-none"><i class="fa fa-search"></i>Save Only</button>
                        </div>
                        <div class="col-auto d-flex justify-content-end">
                        <button type="submit" class="btn btn-outline-warning d-print-none" id="print"><i class="fa fa-search"></i>Print</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>
            </div>


</form>


                        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
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
        var fName = document.getElementById("firstName");
        var mName = document.getElementById("middleName");
        var lName = document.getElementById("lName");
        var frstAid = document.getElementById("frstAid");
        var docAdmit = document.getElementById("docAdmit");
        var editBtn = document.getElementById("edit");
        var editCheckbox = document.getElementById("editChx");

        editCheckbox.addEventListener('click', function () {
            if (this.checked) {
                fName.disabled = '';
                mName.disabled = '';
                lName.disabled = '';
                frstAid.disabled = '';
                docAdmit.disabled = '';
            } else {
                fName.disabled = 'false';
                mName.disabled = 'false';
                lName.disabled = 'false';
                frstAid.disabled = 'false';
                docAdmit.disabled = 'false';
            }
        });
    })();

    $("#update").click(function () {
        var fName = $("#firstName").val();
        var mName = $("#middleName").val();
        var lName = $("#lName").val();

        alert("Patient " + fName + " " + mName + " " + lName + " has been updated!");
    })

</script>

@stop
