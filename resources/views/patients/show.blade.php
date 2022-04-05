@extends('patients.layouts')
@section('content')
<style>
.innerdiv{
  margin-left: 20px;
  width: 100%;
}
.labelmarginleft{
  margin-left: 20px;
}

.inputlabelunderline{
  border: none;
  border-bottom: 1px solid black;
  height: auto;
  width: auto;
}
.inputlabelunderline2{
  border: none;
  border-bottom: 1px solid black;
  height: auto;
  width: 120px;
}
.inputlabelunderline:focus,.inputlabelunderline2:focus{
  outline: none;
}
.firstAid{
  padding-right:5px;
}
.card{
border: 1px black solid;
}
table, td, tr{
  border: 1px solid black;
}
input{
   text-align:center;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<div class="card">
  <div class="card-header p-2 bg-success text-white">GENERAL DATA:</div>
  <div class="card-body">
  
      <form action="{{ url('patientform') }}" method="post">
        {!! csrf_field() !!}
        
        <!--<input type="checkbox" value="Edit" id="editChx"><label>Edit profile</label></br>-->
        <div class="form-group row">
        
                <div class="form-group col-md-2">
                    <label>First Name:</label>
                    <input type="text" name="firstName" id="firstName" value="{{$patients->patfirst}}" class="form-control"disabled="true" onclick="EnableDisable();" ></br>
                </div> 
                <div class="form-group col-md-2"> 
                    <label>Middle name:</label>
                    <input type="text" name="middleName" id="middleName" value="{{$patients->patmiddle}}" class="form-control"disabled="true"></br>
                </div>
                <div class="form-group col-md-2"> 
                    <label>Last name:</label>
                    <input type="text" name="lName" id="lName" value="{{$patients->patlast}}" class="form-control"disabled="true"></br>
                </div>
              
        </div>

        
        <div class="form-group row">
        <div  class="p-2 bg-success text-white">
          PRE-ADMISSION DATA:
        </div>
                <div class="form-group col-md-5"> 
                  <div class="row">
                    <div class="row">
                    <div class="col col-lg-4">
                    <label class="firstAid">First Aid Given:</label>
                    </div>
                    <div class="col col-lg-2">
                    <input class="form-check-input" type="radio" name="rdoAid" id="aidYes" value="">
                    <label class="form-check-label" for="rdoAid" >
                    Yes
                    </div>
                    <div class="col col-lg-2">
                    </label>
                    <input class="form-check-input" type="radio" name="rdoAid" id="aidNo" value="">
                    <label class="form-check-label" for="rdoAid">
                    No
                    </label>
                    </div>
                    </div>
                    </div>
                  <div class="form-group">
                   <textarea class="form-control" rows="2" name="frstAid" id="frstAid" disabled="true" placeholder="no comment">{{$patients->frstAid}}</textarea><!--COMMENT GIVEN BY-->
                  </div>
                </div>
                
                <div class="form-group col-md-5"> 
                <label>By: </label>
                <div class="form-group col-md-8">
                    <input type="text" name="docAdmit" id="docAdmit" value="{{$patients->docAdmit}}" placeholder="name of doctor" class="form-control" disabled="true">
                </div>
                </div>  
        </div>
        <hr>
        <div class="form-group col-md-12">
                  <h5>Nature of Injury/ies:</h5>
                  <div class="innerdiv">
                  <div class="row">
                    <div class="col col-lg-2">
                    <Label>Multiple injuries?</Label>
                    </div>
                    <div class="col col-lg-1">
                    <input class="form-check-input" type="radio" name="injryRdo" id="injuryRdo1" value="" onclick="return false;">
                      <label class="form-check-label" >
                      Yes
                      </label>
                    </div>
                    <div class="col col-lg-1">
                      <input class="form-check-input" type="radio" name="injryRdo" id="injuryRdo2" value="" onclick="return false;">
                      <label class="form-check-label" >
                      No
                    </label>
                    </div>
                  </div>

                  <div class="row mx-md-n3">
                  <div class="col px-md-3">
                    <label class="labelmarginleft"><u>(Check all applicable, indicate in the blank sace oppiste each type of injury the body location(site) affected and other deatils)</u></label>
                    </div>
                  </div>

<!--checkbox from abrasion-->
                    <div class="form-group row-md-4">
                        <div class="form-check">

                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" name="abrasionCh" id="Abrasion" value="" onclick="return false;">
                                                        <label class="form-check-label" for="Abrasion">
                                Abrasion
                              </label>
                              <input type="text" class="inputlabelunderline" name="abrasion" value="{{$patients->abrasion}}" placeholder="N/A" disabled="true">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" name="avulsionCh" id="avulsion" value="" onclick="return false;">
                              <label class="form-check-label" for="Avulsion">
                                Avulsion
                              </label>
                              <input type="text" class="inputlabelunderline" name="avulsion" value="{{$patients->avulsion}}" placeholder="N/A" disabled="true">
                            </div>
                          </div>

                          <input class="form-check-input" type="checkbox" name="burnCh" id="burnCh" value=""  onclick="return false;">
                          <div class="row">
                            <div class="col col-lg-16">
                              <label class="form-check-label" for="Burn">
                              Burn (Degree of Burn & Extent of Body Surface involved) Degree:
                              </label>
                              <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn1" value="" onclick="return false;">
                              <label class="" for="" >
                              1<sup>st</sup>
                              <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn1" value="" onclick="return false;">
                              <label class="" for="">
                              2<sup>nd</sup>
                              </label>
                              <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn3" value="" onclick="return false;">
                              <label class="" for="" >
                              3<sup>rd</sup>
                              </label>
                              <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn4" value="" onclick="return false;">
                              <label class="" for="">
                              4<sup>th</sup>
                              </label>
                              <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn5" value="" onclick="return false;">
                              <label class="" for="" >
                              5<sup>th</sup>
                              </label>
                              <label>Site:</label>
                              <input type="text" class="inputlabelunderline" value="{{$patients->site}}" placeholder="N/A" disabled="true">
                              </label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" name="concussionCh" id="concussionCh" value="" onclick="return false;">
                              <label class="form-check-label" for="Concussion">
                              Concussion
                              </label>
                              <input type="text" class="inputlabelunderline" value="{{$patients->concussion}}" placeholder="N/A" disabled="true">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" name="contusionCh" id="contusionCh" value=""  onclick="return false;">
                              <label class="form-check-label" for="Contusion">
                                Contusion
                              </label>
                              <input type="text" class="inputlabelunderline" value="{{$patients->contusion}}" placeholder="N/A" disabled="true">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" name="fractureCh" id="fractureCh" value="" onclick="return false;">
                            
                              <label class="form-check-label" for="Fracture">
                                Fracture
                              </label>

                              <div class="row mx-md-n5">
                                <div class="col px-md-5">
                                  
                                  <label class="form-check-label" for="flexCheckDefault">
                                    <input class="form-check-input" type="checkbox" name="openTypeCh" id="openTypeCh" value="" onclick="return false;">
                                    <label class="form-check-label" for="Open Type">
                                      Open Type
                                    </label>
                                    <input type="text" class="inputlabelunderline" value="{{$patients->openType}}" placeholder="N/A" disabled="true">
                                    <label class="form-check-label" for="Open Type">
                                    (ex. comminuted, depressed fracture)
                                    </label>
                                  </label>
                                </div>
                              </div>

                              <div class="row mx-md-n5">
                                <div class="col px-md-5">
                                  
                                  <label class="form-check-label" for="flexCheckDefault">
                                  <input class="form-check-input" type="checkbox" name="closedTypeCh" id="closedTypeCh" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Closed Type">
                                      Closed Type
                                    </label>
                                    <input type="text" class="inputlabelunderline" value="{{$patients->closedType}}" placeholder="N/A" disabled="true">
                                    <label class="form-check-label" for="closedType">
                                    (ex. Compound, infected fracture)
                                    </label>
                                  </label>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                                <div class="col col-lg-12">
                                <input class="form-check-input" type="checkbox" name="woundCh" id="woundCh" value="" onclick="return false;">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    <label class="form-check-label" for="wound">
                                      Open/Wound Laceration
                                    </label>
                                    <input type="text" class="inputlabelunderline" value="{{$patients->wound}}" placeholder="N/A" disabled="true">
                                  </label>
                                </div>
                                <label class="form-check-label" for="flexCheckDefault">
                                    (ex. hacking, gunshot, stabbing, animal(dog, cat, rat, snake, etc) bites, human bites, insect bites, punctured wound, etc)
                                      </label>
                            </div>

                            <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" name="traumaCh" id="traumaCh" value=""  onclick="return false;">
                            
                              <label class="form-check-label" for="Traumatic Amputation">
                                Traumatic Amputation
                              </label>
                              <input type="text" class="inputlabelunderline" value="{{$patients->traumaticAmputation}}" placeholder="N/A" disabled="true">
                            </div>
                            </div>

                            <div class="row">
                            <div class="col col-lg-8">
                            <input class="form-check-input" type="checkbox" name="others1Ch" id="others1Ch" value=""onclick="return false;">
                            
                              <label class="form-check-label" for="Others1">
                              Others: Pls. specify injury and the body part/s affected:
                              </label>
                              <input type="text" class="inputlabelunderline" value="{{$patients->others1}}" placeholder="N/A" disabled="true">
                            </div>
                          </div>
                          </div>
                          </div>
                        </div>  
                    </div>

        </div>
        <hr>
        <div class="form-group col-md-12">
              <h5>External Cause/s of Injury/ies:</h5>
                  <div class="row mx-md-n5">
                    <div class="col px-md-5">
                    <input class="form-check-input" type="checkbox" name="bitesCh" id="bitesCh" value="" onclick="return false;">
                    
                          <label class="form-check-label" for=" Bites">
                            Bites/stings, Specify animal/insect:
                          </label>
                          <input type="text" class="inputlabelunderline" value="{{$patients->bites}}" placeholder="N/A" disabled="true">

                    </div>
                  </div>
                  
                  <div class="row mx-md-n5">
                    <div class="col px-md-5">

                    <input class="form-check-input" type="checkbox" name="burn1Ch" id="burn1Ch" value="" onclick="return false;">
                      <div class="row">
                      <div class="col-auto">
                          <label class="form-check-label" for="Burn1">
                            Burn,
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="" name="burnRdo" id="Heat"  onclick="return false;">
                      
                          <label class="form-check-label" for="Heat">
                            Heat
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="" name="burnRdo" id="Fire"  onclick="return false;">
                          <label class="form-check-label" for="Fire">
                            Fire
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="" name="burnRdo" id="Electricty"  onclick="return false;">
                          <label class="form-check-label" for="Electricty">
                            Electricty
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="" name="burnRdo" id="Oil"  onclick="return false;">
                          <label class="form-check-label" for="Oil">
                            Oil
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="" name="burnRdo" id="Friction"  onclick="return false;">
                          <label class="form-check-label" for="Friction">
                            Friction
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="" name="burnRdo" id="Others2"  onclick="return false;">
                          <label class="form-check-label" for="Others2">
                            Others,specify
                          </label>
                          <input type="text" class="inputlabelunderline" value="{{$patients->others2}}" placeholder="N/A" disabled="true" onclick="return false;">
                      </div>
                    
                      </div>

                      <input class="form-check-input" type="checkbox" name="chemicalCh" id="chemicalCh" value="" onclick="return false;">
                      <div class="row">
                        <div class="col col-lg-8">
                          <label class="form-check-label" for="Chemical">
                            Chemical/Substance, specify
                          </label>
                          <input type="text" class="inputlabelunderline" value="{{$patients->chemical}}" placeholder="N/A" disabled="true">
                        </div>

                        
                        <div class="col col-lg-8">
                        <input class="form-check-input" type="checkbox" name="sharpCh" id="sharpCh" value="}"onclick="return false;">
                          <label class="form-check-label" for="sharp">
                            Contact with sharp objects, specify object
                          </label>
                          <input type="text" class="inputlabelunderline" value="{{$patients->sharp}}" placeholder="N/A" disabled="true">
                        </div>
                      </div>

                      <div class="row">
                      <div class="col col-lg-3">
                      <input class="form-check-input" type="checkbox" name="drowningCh" id="drowningCh" value="" onclick="return false;">
                          <label class="form-check-label" for="Drowning">
                            Drowning: Type/Body of Water:
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="" name="drowningRdo" id="Sea"  onclick="return false;">
                          <label class="form-check-label" for="Sea">
                            Sea
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="" name="drowningRdo" id="River"  onclick="return false;">
                          <label class="form-check-label" for="River">
                            River
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="" name="drowningRdo" id="Lake"  onclick="return false;">
                          <label class="form-check-label" for="Lake">
                            Lake
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="" name="drowningRdo" id="Pool"  onclick="return false;">
                          <label class="form-check-label" for="Pool">
                            Pool
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="" name="drowningRdo" id="BathTub"  onclick="return false;">
                          <label class="form-check-label" for="BathTub">
                            Bath Tub
                          </label>
                      </div>
                      <div class="col col-lg-4">
                        <input class="form-check-input" type="radio" value="" name="drowningRdo" id="Others3"  onclick="return false;">
                          <label class="form-check-label" for="Others3">
                            Others,specify
                          </label>
                          <input type="text" class="inputlabelunderline" value="{{$patients->others3}}" placeholder="N/A" disabled="true">
                      </div>
                      </div>

                      <input class="form-check-input" type="checkbox" name="natureCh" id="natureCh" value=""') }} onclick="return false;">
                      <div class="row">
                      <div class="col-auto">
                          <label class="form-check-label" for="Exposure">
                            Exposure to forces of Nature:
                          </label>
                      </div>    
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" name="natureRdo" id="Earthquake" value=""  onclick="return false;">
                          <label class="form-check-label" for="Earthquake">
                            Earthquake
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" name="natureRdo" id="Volcanic" value=""  onclick="return false;">
                          <label class="form-check-label" for="Volcanic">
                            Volcanic eruption
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" name="natureRdo" id="Typhoon" value=""  onclick="return false;">
                          <label class="form-check-label" for="Typhoon">
                            Typhoon
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" name="natureRdo" id="Landslide" value=""  onclick="return false;">
                          <label class="form-check-label" for="Landslide">
                            Landslide/Avalanche
                          </label>
                      </div>
                      
                      <div class="row">
                      <div class="col-auto">
                          <label class="form-check-label" for="Gunshot">
                            Gunshot, Specify weapon
                          </label>
                          <input type="text" class="inputlabelunderline" value="{{$patients->gunshot}}" placeholder="N/A" disabled="true">
                      </div>
                      </div>

                      <input class="form-check-input" type="checkbox" name="hangingCh" id="hangingCh" value=""  onclick="return false;">
                      <div class="row">
                      <div class="col col-lg-4">
                          <label class="form-check-label" for="Hanging">
                            Hanging/Strangulation
                          </label>
                      </div>
                      </div>

                      <input class="form-check-input" type="checkbox" name="maulingCh" id="maulingCh" value=""  onclick="return false;">
                      <div class="row">
                      <div class="col col-lg-4">
                          <label class="form-check-label" for="Mauling">
                            Mauling/Assault
                          </label>
                      </div>
                      </div>

                      <input class="form-check-input" type="checkbox" name="transportCh" id="transportCh" value="">
                      <div class="col col-lg-4">
                          <label class="form-check-label" for="Transport">
                            Transport/Vehicular Accident
                          </label>
                      </div>
                      </div>

                      <input class="form-check-input" type="checkbox" name="fallCh" id="fallCh" value="" onclick="return false;">
                      <div class="row">
                        <div class="col-auto">
                                <label class="form-check-label" for="Fall">
                                  Fall, specify, from/in/on/into
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->fall}}" placeholder="N/A" disabled="true">
                        </div>
                      </div>

                      <input class="form-check-input" type="checkbox" name="firecrackerCh" id="firecrackerCh" value="" onclick="return false;">
                      <div class="row">
                        <div class="col-auto">
                                <label class="form-check-label" for="Firecracker">
                                  Firecracker, specify type/s
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->firecracker}}" placeholder="N/A" disabled="true">
                                <label class="form-check-label" for="Firecracker">
                                  (with libraries)
                                </label>
                        </div>
                      </div>

                      <input class="form-check-input" type="checkbox" name="assaultCh" id="assaultCh" value=""  onclick="return false;">
                      <div class="row">
                        <div class="col-auto">
                                <label class="form-check-label" for="Sexual">
                                  Sexual Assault/Sexual Abuse/Rape(Alleged)
                                </label>
                        </div>
                      </div>

                      <input class="form-check-input" type="checkbox" name="others5Ch" id="others5Ch" value="" onclick="return false;">
                      <div class="row">
                        <div class="col-auto">
                                  <label class="form-check-label" for="Others5">
                                    Others,specify
                                  </label>
                                  <input type="text" class="inputlabelunderline" value="{{$patients->others5}}" placeholder="N/A" disabled="true">
                        </div>
                      </div> 
                    </div>
                  </div>
        </div>
        <hr>

        <div class="form-group col-md-12">
          <div class="row">
            <div class="col-auto">
              <h5>FOR TRANSPORT/VEHICULAR ACCIDENT ONLY:</h5>
            </div>
            <div class="col-auto">
              <p>
                  <a class="btn btn-warning btn-sm" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">expand</a>
              </p>
            </div>
          </div>
                <div class="row">
                  <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                      <div class="card card-body" id="collapsible">
                        <div class="form-group row-md-8">
                          <div class="container border border-secondary" >

                          <div class="row border-bottom border-secondary">
                              <div class="col-auto">
                               <label>For transport/vehicular accident only:</label>
                               </div>
                              <div class="col-auto">
                               <input class="form-check-input" type="radio" name="transpoRdo1" id="Land" value=""  onclick="return false;" >
                                <label class="form-check-label mx-auto" for="Land">
                                    Land
                                </label>
                              </div>
                              <div class="col-auto">
                               <input class="form-check-input" type="radio" name="transpoRdo1" id="Water" value=""  onclick="return false;" >
                                <label class="form-check-label mx-auto" for="Water">
                                    Water
                                </label>
                              </div>
                              <div class="col col-lg-4">
                               <input class="form-check-input" type="radio" name="transpoRdo1" id="Air" value=""  onclick="return false;">
                                <label class="form-check-label mx-auto" for="Air">
                                    Air
                                </label>
                              </div>
                              <div class="col-auto">
                               <input class="form-check-input" type="radio" name="collRdo" id="Collision" value=""  onclick="return false;">
                                <label class="form-check-label mx-auto" for="Collision">
                                    Collision
                                </label>
                              </div>
                              <div class="col-auto">
                               <input class="form-check-input" type="radio" name="collRdo" id="Non-Collision" value=""  onclick="return false;">
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
                                <input class="form-check-input" type="radio" name="severity" id="Fatal Accident" value=""  onclick="return false;"> 
                                  <label class="form-check-label" for="Fatal Accident">
                                    Fatal Accident
                                </label>
                                </div>
                                <div class="col-auto">
                                <input class="form-check-input" type="radio" value="Serious" name="severity" id="Serious" value=""  onclick="return false;">
                                  <label class="form-check-label" for="Serious">
                                    Serious Injury Accident
                                </label>
                                </div>
                                
                                <div class="col-auto">
                                <input class="form-check-input" type="radio" value="Minor" name="severity" id="Minor" value=""  onclick="return false;">
                                  <label class="form-check-label" for="Minor">
                                    Minor Injury Accident
                                </label>
                                </div>

                                <div class="col-auto">
                                <input class="form-check-input" type="radio" value="Property" name="severity" id="Property" value=""  onclick="return false;">
                                  <label class="form-check-label" for="Property">
                                    Property Damage Only
                                </label>
                                </div>
                              </div>
                            
                              
                            <div class="row">
                            <div class="col col-lg-6 border-right border-secondary"><!--33a.2-->
                            <div class="col-auto">
                                <h6 class="form-check-label" for="flexCheckDefault">
                                    Vehicles Invloved:
                                </h6>
                                </div>
                            <div class="container">
                            <div class="row row-lg-8">
                                  <div class="col-auto">
                                  <h6 class="form-check-label" for="flexCheckDefault">
                                      Patient's Vehicle
                                  </h6>
                                  </div>
                                  </div>

                                  <div class="row">
                                  <div class="col col-lg-2">
                                  <h6 class="form-check-label" for="flexCheckDefault">
                                      
                                  </h6>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="vehicleRdo" id="Pedestrian" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Pedestrian">
                                      None(Pedestrian)
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="vehicleRdo" id="Car" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Car">
                                      Car
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="vehicleRdo" id="Van" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Van">
                                      Van
                                  </label>
                                  </div>
                                </div>

                                <div class="row row-lg-8">
                                  <div class="col col-lg-2">
                                  <h6 class="form-check-label" for="flexCheckDefault">
                                      
                                  </h6>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="vehicleRdo" id="Bus" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Bus">
                                      Bus
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="vehicleRdo" id="Motorcycle" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Motorcycle">
                                      Motorcycle
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="vehicleRdo" id="Bicycle" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Bicycle">
                                      Bicycle
                                  </label>
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="vehicleRdo" id="Tricycle" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Tricycle">
                                      Tricycle
                                  </label>
                                  </div>
                                </div>

                                <div class="row row-lg-8">
                                  <div class="col col-lg-2">
                                  <h6 class="form-check-label" for="flexCheckDefault">
                                      
                                  </h6>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="vehicleRdo" id="Others6" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Others6" name="others6">
                                      Others,
                                  </label>
                                  <input type="text" class="inputlabelunderline" value="{{$patients->others6}}" placeholder="N/A" disabled="true">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="vehicleRdo" id="Unknown" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Unknown">
                                      Unknown
                                  </label>
                                  </div>

                                </div>
                                
                            </div>

                            <div class="container">
                                <div class="row row-lg-8">
                                  <div class="col-auto">
                                  <h6 class="form-check-label" for="flexCheckDefault">
                                      Other Vehicle/Object Involved(for COLLISION accident ONLY)
                                  </h6>
                                  </div>
                                  </div>

                                  <div class="row">

                                  <div class="col col-lg-2">
                                  <h6 class="form-check-label" for="flexCheckDefault">
                                      
                                  </h6>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="otherRdo" id="Pedestrian" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Pedestrian">
                                      None(Pedestrian)
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="otherRdo" id="Car1" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Car1">
                                      Car
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="otherRdo" id="Van1" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Van1">
                                      Van
                                  </label>
                                  </div>
                                 </div>

                                 <div class="row row-lg-8">
                                  <div class="col col-lg-2">
                                  <h6 class="form-check-label" for="flexCheckDefault">
                                      
                                  </h6>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="otherRdo" id="Bus1" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Bus1">
                                      Bus
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="otherRdo" id="Motorcycle1" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Motorcycle1">
                                      Motorcycle
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="otherRdo" id="Bicycle1" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Bicycle1">
                                      Bicycle
                                  </label>
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="otherRdo" id="Tricycle1" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Tricycle1">
                                      Tricycle
                                  </label>
                                  </div>
                                </div>

                                <div class="row row-lg-8">
                                  <div class="col col-lg-2">
                                  <h6 class="form-check-label" for="flexCheckDefault">
                                      
                                  </h6>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="otherRdo" id="Others7" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Others7">
                                      Others,
                                  </label>
                                  <input type="text" class="inputlabelunderline" name="others7" value="{{ $patients->others7}}" placeholder="N/A" disabled="true">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="otherRdo" id="Unknown1" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Unknown1">
                                      Unknown
                                  </label>
                                  </div>

                                </div>
                            </div>
                            </div><!--33a.2 end-->

                            <!--33a.3-->
                            <div class="col col-lg-3">
                            <div class="col-auto">
                                <h6 class="form-check-label" for="flexCheckDefault">
                                    Position of Patient
                                </h6>
                            </div>
                                <div class="row">
                                <div class="container">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="posRdo" id="Pedestrian2" value=""  onclick="return false;" >
                                    <label class="form-check-label" for="Pedestrian2">
                                      Pedestrian
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="posRdo" id="Driver" value=""  onclick="return false;" >
                                    <label class="form-check-label" for="Driver">
                                      Driver
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="posRdo" id="Captain" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Captain">
                                      Captain
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="posRdo" id="Pilot" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Pilot">
                                      Pilot
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="posRdo" id="Front" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Front">
                                      Front Passenger
                                  </label>
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="posRdo" id="Rear" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Rear">
                                      Rear Passenger
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="posRdo" id="Others8" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Others8">
                                      Others,
                                  </label>
                                  <input type="text" class="inputlabelunderline2" name="others8" value="{{ $patients->others8}}" placeholder="N/A" disabled="true">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="posRdo" id="Unknown2" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Unknown2">
                                      Unknown
                                  </label>
                                  </div>
                                </div>
                                </div>
                                </div><!--33a.3 end-->

                                <!--33a.4-->
                                <div class="col col-lg-3 border-left border-secondary">
                            <div class="col-auto">
                                <h6 class="form-check-label" for="flexCheckDefault">
                                    Victims Involved
                                </h6>
                            </div>
                                <div class="row">
                                <div class="container">
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="victimsRdo" id="Alone" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Alone">
                                      Alone
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="victimsRdo" id="Withothers" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Withothers">
                                      With others, specify how many(excuding the victim)
                                  </label>
                                  <input type="text" class="inputlabelunderline2" value="{{$patients->withothers}}" placeholder="N/A" disabled="true">
                                  </div>
                                  
                                </div>
                                </div>
                                </div><!--33a.4 end-->
                                <div class="col col-lg-4 border border-secondary border-left-0 border-right-0"><!--33b-->
                                <div class="col-auto">
                                <h6 class="form-check-label" for="flexCheckDefault">
                                    Place of Occurrence:
                                </h6>
                            </div>
                                <div class="row">
                                <div class="container">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="placeRdo" id="Home" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Home">
                                      Home
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="placeRdo" id="School" value=""  onclick="return false;">
                                    <label class="form-check-label" for="School">
                                      School
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="placeRdo" id="Road" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Road">
                                      Road
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="placeRdo" id="Bars" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Bars">
                                      Videoke Bars
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="placeRdo" id="Workplace" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Workplace">
                                      Workplace, specify
                                  </label>
                                  <input type="text" class="inputlabelunderline2" name="workplaceInput" value="" placeholder="N/A" disabled="true">
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="placeRdo" id="Others9" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Others9">
                                      Others, specify
                                  </label>
                                  <input type="text" class="inputlabelunderline2" name="others9" value="{{ $patients->others9}}" placeholder="N/A" disabled="true">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="placeRdo" id="Unkown4" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Unkown4">
                                      Unkown
                                  </label>
                                  
                                  </div>
                                </div>
                                </div>
                                </div>
                                <div class="col col-lg-4 border border-secondary"><!--33c-->
                                <div class="col-auto">
                                <h6 class="form-check-label" for="flexCheckDefault">
                                    Activity of the Patient at the time of the incident:
                                </h6>
                            </div>
                                <div class="row">
                                <div class="container">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="activityRdo" id="Sports" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Sports">
                                      Sports
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="activityRdo" id="Leisure"value=""  onclick="return false;">
                                    <label class="form-check-label" for="Leisure">
                                      Leisure
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="activityRdo" id="Workrelated"value=""  onclick="return false;" >
                                    <label class="form-check-label" for="Workrelated">
                                      Work related
                                  </label>
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="activityRdo" id="Others10" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Others10">
                                      Others, specify
                                  </label>
                                  <input type="text" class="inputlabelunderline2" name="others10" value="{{ $patients->others10}}" placeholder="N/A" disabled="true">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" name="activityRdo" id="Unkown5" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Unkown5">
                                      Unkown
                                  </label>
                                  
                                  </div>
                                </div>
                                </div>
                                </div><!--33c-->

                                <div class="col col-lg-4 border border-secondary border-left-0 border-right-0"><!--33d-->
                            <div class="col-auto">
                                <h6 class="form-check-label" for="flexCheckDefault">
                                    Other risk factor at the time of the incident:
                                </h6>
                            </div>
                                <div class="row">
                                <div class="container">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" name="alcoholCh" id="Alchohol" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Alchohol">
                                      Alchohol/liquor
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" name="smokingCh" id="Smoking" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Smoking">
                                      Smoking
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" name="drugsCh" id="Drugs" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Drugs">
                                      Drugs
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" name="phoneCh" id="phone" value=""  onclick="return false;">
                                    <label class="form-check-label" for="phone">
                                      Using mobile phone
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" name="sleepyCh" id="Sleepy" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Sleepy">
                                      Sleepy
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" name="others11Ch" id="Others11" value=""  onclick="return false;">
                                    <label class="form-check-label" for="Others11">
                                      Others, specify
                                  </label>
                                  <input type="text" class="inputlabelunderline2" value="{{$patients->others11}}" placeholder="N/A" disabled="true">
                                  <label class="form-check-label" for="Others11">
                                      (e.g. suspected unter the influcence of substance used)
                                  </label>
                                  </div>
                                  
                                  </div>
                                </div>
                                </div>
                                </div><!--33d-->

                                <div class="row border-bottom border-secondary"><!--33e-->
                                <div class="row">


                                  <div class="col-auto">
                                  <h6 class="form-check-label" for="flexCheckDefault">
                                      Safety:(check all that apply)
                                  </h6>
                                  </div>
                                
                               
                                  
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" name="noneCh" id="noneCh" value="" onclick="return false;">
                                  <label class="form-check-label" for="None">
                                    None
                                </label>
                                </div>
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" name="airbagCh" id="airbagCh" value=""  onclick="return false;">
                                  <label class="form-check-label" for="Airbag">
                                    Airbag
                                </label>
                                </div>
                                
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" name="helmetCh" id="helmetCh" value=""  onclick="return false;">
                                  <label class="form-check-label" for="Helmet">
                                    Helmet
                                </label>
                                </div>

                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" name="childseatCh" id="childseatCh" value=""  onclick="return false;">
                                  <label class="form-check-label" for="Childseat">
                                    Childseat
                                </label>
                                </div>

                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" name="seatbeltCh" id="seatbeltCh" value="" onclick="return false;">
                                  <label class="form-check-label" for="Seatbelt">
                                    Seatbelt
                                </label>
                                </div>

                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" name="vestCh" id="vestCh" value=""  onclick="return false;">
                                  <label class="form-check-label" for="LifeJacket">
                                    Life vest/LifeJacket/Floatation device
                                </label>
                                </div>

                                </div>
                                

                                <div class="row">
                                <div class="col col-lg-3">
                                
                                </div>
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" name="others12Ch" id="others12Ch" value="" onclick="return false;">
                                  <label class="form-check-label" for="Others12" value="{{$patients->others12}}" placeholder="N/A">
                                    Others
                                </label>
                                </div>

                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" name="unknown5Ch" id="unknown5" value="" onclick="return false;">
                                  <label class="form-check-label" for="unknown5">
                                    Unknown
                                </label>
                                </div>
                                </div>
                                
                              </div><!--33e end-->


                            </div>
                            

                          </div>   
                        </div>
                      </div><!--TRANSPORT/VEHICULAR PART-->
                    </div>
                  </div>
                </div> <!--collapsible button-->

        <hr>

        <div class="form-group row border border-secondary">

        <div  class="p-2 bg-success text-white">
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
                <input class="form-check-input" type="radio" name="transferRdo" value="" onclick="return false" id="flexRadioDefault1">
                  <label class="form-check-label" for="transferRdo">
                      Yes
                  </label>
            </div>
              <div class="col col-lg-1">
                <input class="form-check-input" type="radio" name="transferRdo" value="" onclick="return false" id="flexRadioDefault2">
                  <label class="form-check-label" for="transferRdo">
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
                <input class="form-check-input" type="radio" name="referral" value=""  onclick="return false" id="flexRadioDefault1">
                  <label class="form-check-label" for="referral">
                      Yes
                  </label>
              </div>
              <div class="col col-lg-1">
                <input class="form-check-input" type="radio" name="referral" value=""  onclick="return false" id="flexRadioDefault2">
                  <label class="form-check-label" for="referral">
                      No
                  </label>
              </div>
              </div>
        </div>

        <div class="row-auto">
          <div class="row">
          <div class="col-auto">
          <label class="form-check-label" for="flexCheckDefault" >
                   Name of Originating Hospital/Physician:
                </label>
             <input type="text" class="inputlabelunderline" value="" placeholder="N/A" disabled="true">
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
          <input class="form-check-input" type="radio" name="arrival"  value=""  onclick="return false">
            <label class="form-check-label" for="arrival">
              Dead on Arrival
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="radio" name="arrival" value=""  onclick="return false">
            <label class="form-check-label" for="arrivalAlive">
              Alive if alive, please check if:
            </label>
          </div>

          <div class="col-auto">
          <input class="form-check-input" type="radio" name="status" value=""  onclick="return false">
            <label class="form-check-label" for="conscious">
              Conscious
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="radio" name="status" value=""  onclick="return false">
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
          <input class="form-check-input" type="radio" value=""  onclick="return false" name="transpoRdo" id="ambulance" >
            <label class="form-check-label" for="ambulance">
              Ambulance
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="radio" value=""  onclick="return false" name="transpoRdo" id="police">
            <label class="form-check-label" for="police">
              Police vehicle
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="radio" value=""  onclick="return false" name="transpoRdo" id="private">
            <label class="form-check-label" for="private">
              Private vehicle
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="radio" value=""  onclick="return false" name="transpoRdo" id="private">
            <label class="form-check-label" for="others12">
              Others, specify
            </label>
            <input type="text" class="inputlabelunderline" value="{{$patients->others13}}" placeholder="N/A" disabled="true">
          </div>
        </div>
        </div>
        <div class="row-auto border-bottom border-secondary">
          <div class="row">
          <div class="col-auto">
          <label class="form-check-label">
                   Initial Impression:
                </label>
             <input type="text" class="inputlabelunderline" value="{{$patients->impression}}" placeholder="N/A" disabled="true">
          </div>
          </div>
        </div>
        <div class="row-auto">
          <div class="row">
          <div class="col-auto">
          <label class="form-check-label">
                   ICD-10 Code/s: Nature of Injury:
                </label>
             <input type="text" class="inputlabelunderline" value="{{$patients->icdNature}}" placeholder="N/A" disabled="true">
          </div>
          <div class="col-auto">
          <label class="form-check-label">
                   ICD-10 Code/s: External cause of Injury:
                </label>
             <input type="text" class="inputlabelunderline" value="{{$patients->icdExternal}}" placeholder="N/A" disabled="true">
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
          <input type="text" class="inputlabelunderline" value="{{$patients->treatment}}" placeholder="N/A" disabled="true">
          </div>
          </div>
        </div> 
        <div class="row-auto">
          <div class="row">
            <div class="col-auto">
             <label class="form-check-label" for="disposition">
                   Disposition:
              </label>
            </div>
            <div class="row mx-md-n5">
            <div class="col-auto px-md-5">
            <input class="form-check-input" type="radio" value=""  name="dispoRdo" id="admitted" checked="true">
                <label class="form-check-label" for="admitted">
                   Admitted
                </label>
            </div>
            <div class="col-auto px-md-5">
            <input class="form-check-input" type="radio" value=""  name="dispoRdo" id="senthome">
                <label class="form-check-label" for="senthome">
                   Treated and Sent Home
                </label>
            </div>
            <div class="col-auto">
            <input class="form-check-input" type="radio" value=""  name="dispoRdo" id="transfer" >
                <label class="form-check-label" for="transfer">
                   Transferred to another facility/hospital, specify
                </label>
                <input type="text" class="inputlabelunderline" name="transferred" value="{{$patients->transferred}}">
            </div>
          </div>
          <div class="row mx-md-n">
            <div class="col-auto px-md-5">
            <input class="form-check-input" type="radio" value=""  name="dispoRdo" id="HAMA" >
                <label class="form-check-label" for="HAMA">
                   HAMA
                </label>
            </div>
            <div class="col-auto px-md-5">
            <input class="form-check-input" type="radio" value=""  name="dispoRdo" id="absconded" >
                <label class="form-check-label" for="absconded">
                   Absconded
                </label>
            </div>
          </div>
          </div>
        <div class="row-auto border border-secondary border-right-0 border-left-0">
          <div class="row">
          <div class="col-auto">
          <label class="form-check-label" for="outcome">
                   Outcome:
          </label>
          </div>
          <div class="col-auto">
                <input class="form-check-input" type="radio" value=""  name="outcome" id="improved" checked="true"> 
                <label class="form-check-label" for="improved">
                   Improved
                </label>
          </div>
          <div class="col-auto">
                <input class="form-check-input" type="radio" value=""  name="outcome"  id="unimproved">
                <label class="form-check-label" for="unimproved">
                   Unimproved
                </label>
          </div>
          <div class="col-auto">
                <input class="form-check-input" type="radio" value=""  name="outcome" id="died">
                <label class="form-check-label" for="died">
                   Died
                </label>
          </div>
          </div>
        </div>
        </div>
        </div>
                </div>
        </div>
<br>
<input type="submit" value="Update" id="update" class="btn btn-info"  ></br></br>
<a href="{{ url('/patientform') }}" class="btn btn-secondary btn-sm" title="Patient lists"onclick="return confirm(&quot;Unsaved information will not be updated, Continue?&quot;)">
                            <i class="fa fa-plus" aria-hidden="true"></i> Back
                        </a>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script type="text/javascript">
        ( function (){
            var fName = document.getElementById("firstName");
            var mName = document.getElementById("middleName");
            var lName = document.getElementById("lName");
            var frstAid = document.getElementById("frstAid");
            var docAdmit = document.getElementById("docAdmit");
            var editBtn = document.getElementById("edit");
            var editCheckbox = document.getElementById("editChx");

            editCheckbox.addEventListener('click', function (){
                if(this.checked){
                    fName.disabled = '';
                    mName.disabled = '';
                    lName.disabled = '';
                    frstAid.disabled = '';
                    docAdmit.disabled = '';
                }else{
                    fName.disabled = 'false';
                    mName.disabled = 'false';
                    lName.disabled = 'false';
                    frstAid.disabled = 'false';
                    docAdmit.disabled = 'false';
                }
            });
        })();

     $("#update").click(function(){
         var fName= $("#firstName").val();
         var mName= $("#middleName").val();
         var lName= $("#lName").val();

         alert("Patient " + fName+" "+mName+" "+lName + " has been updated!");
     })
     </script>

@stop