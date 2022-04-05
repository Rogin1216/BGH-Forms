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
                    <input type="text" name="firstName" id="firstName" value="{{$patients->firstName}}" class="form-control"disabled="true" onclick="EnableDisable();" ></br>
                </div> 
                <div class="form-group col-md-2"> 
                    <label>Middle name:</label>
                    <input type="text" name="middleName" id="middleName" value="{{$patients->middleName}}" class="form-control"disabled="true"></br>
                </div>
                <div class="form-group col-md-2"> 
                    <label>Last name:</label>
                    <input type="text" name="lName" id="lName" value="{{$patients->lName}}" class="form-control"disabled="true"></br>
                </div>
        </div>

        
        <div class="form-group row">
        <div  class="p-2 bg-success text-white">
          PRE-ADMISSION DATA:
        </div>
                <div class="form-group col-md-5"> 
                  <div class="row">
                    <div class="col col-lg-4">
                    <label class="firstAid">First Aid Given:</label>
                    </div>
                    <div class="col col-lg-2">
                    <input class="form-check-input" type="radio" name="firstAidGiven" value="false" id="aidYesNo">
                    <label class="form-check-label" for="rdoAid" >
                    Yes
                    </div>
                    <div class="col col-lg-2">
                    </label>
                    <input class="form-check-input" type="radio" name="firstAidGiven" value="true" id="aidYesNo" checked="true">
                    <label class="form-check-label" for="rdoAid">
                    No
                    </label>
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
                    <input class="form-check-input" type="radio" name="InjryRdo" value ="false"id="injuryRdo1" >
                      <label class="form-check-label" >
                      Yes
                      </label>
                    </div>
                    <div class="col col-lg-1">
                      <input class="form-check-input" type="radio" name="InjryRdo" value="true" id="injuryRdo2" checked="true">
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
                            <input class="form-check-input" type="checkbox" value="Abrasion" name="natureOfInjury[]" id="Abrasion">
                              <label class="form-check-label" for="Abrasion">
                                Abrasion
                              </label>
                              <input type="text" class="inputlabelunderline" name="abrasion" value="{{$patients->abrasion}}" placeholder="N/A">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" value="Avulsion" name="natureOfInjury[]" id="Avulsion">
                              <label class="form-check-label" for="Avulsion">
                                Avulsion
                              </label>
                              <input type="text" class="inputlabelunderline" name="avulsion" value="{{$patients->avulsion}}" placeholder="N/A">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col col-lg-16">
                            <input class="form-check-input" type="checkbox" value="Burn" name="natureOfInjury[]" id="Burn">
                              <label class="form-check-label" for="Burn">
                              Burn (Degree of Burn & Extent of Body Surface involved) Degree:
                              </label>
                              <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn1" value="1st">
                              <label class="" for="" >
                              1<sup>st</sup>
                              <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn1" value="2nd">
                              <label class="" for="">
                              2<sup>nd</sup>
                              </label>
                              <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn3" value="3rd">
                              <label class="" for="" >
                              3<sup>rd</sup>
                              </label>
                              <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn4" value="4th">
                              <label class="" for="">
                              4<sup>th</sup>
                              </label>
                              <input class="" type="radio" name="degreeRdoBtn" id="degreeRdoBtn5" value="5th">
                              <label class="" for="" >
                              5<sup>th</sup>
                              </label>
                              <label>Site:</label>
                              <input type="text" class="inputlabelunderline" value="{{$patients->site}}" placeholder="N/A">
                              </label>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" value="Concussion" name="natureOfInjury[]" id="Concussion">
                              <label class="form-check-label" for="Concussion">
                              Concussion
                              </label>
                              <input type="text" class="inputlabelunderline" value="{{$patients->concussion}}" placeholder="N/A">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" value="Contusion" name="natureOfInjury[]" id="Contusion">
                              <label class="form-check-label" for="Contusion">
                                Contusion
                              </label>
                              <input type="text" class="inputlabelunderline" value="{{$patients->contusion}}" placeholder="N/A">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" value="Fracture" name="natureOfInjury[]" id="Fracture">
                              <label class="form-check-label" for="Fracture">
                                Fracture
                              </label>

                              <div class="row mx-md-n5">
                                <div class="col px-md-5">
                                  <input class="form-check-input" type="checkbox" value="Open Type" name="natureOfInjury[]" id="flexCheckDefault">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    <input class="form-check-input" type="checkbox" value="Open Type" id="Open Type">
                                    <label class="form-check-label" for="Open Type">
                                      Open Type
                                    </label>
                                    <input type="text" class="inputlabelunderline" value="{{$patients->openType}}" placeholder="N/A">
                                    <label class="form-check-label" for="Open Type">
                                    (ex. comminuted, depressed fracture)
                                    </label>
                                  </label>
                                </div>
                              </div>

                              <div class="row mx-md-n5">
                                <div class="col px-md-5">
                                  <input class="form-check-input" type="checkbox" value="Closed Type" name="natureOfInjury[]" id="flexCheckDefault">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    <input class="form-check-input" type="checkbox" value="Closed Type" id="Closed Type">
                                    <label class="form-check-label" for="Closed Type">
                                      Closed Type
                                    </label>
                                    <input type="text" class="inputlabelunderline" value="{{$patients->closedType}}" placeholder="N/A">
                                    <label class="form-check-label" for="">
                                    (ex. Compound, infected fracture)
                                    </label>
                                  </label>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                                <div class="col col-lg-12">
                                  <input class="form-check-input" type="checkbox" value="Open/Wound Laceration" name="natureOfInjury[]" id="flexCheckDefault">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    <input class="form-check-input" type="checkbox" value="Closed Type" id="Open/Wound Laceration">
                                    <label class="form-check-label" for="Open/Wound Laceration">
                                      Open/Wound Laceration
                                    </label>
                                    <input type="text" class="inputlabelunderline">
                                  </label>
                                </div>
                                <label class="form-check-label" for="flexCheckDefault">
                                    (ex. hacking, gunshot, stabbing, animal(dog, cat, rat, snake, etc) bites, human bites, insect bites, punctured wound, etc)
                                      </label>
                            </div>

                            <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" value="Traumatic Amputation" name="natureOfInjury[]" id="Traumatic Amputation">
                              <label class="form-check-label" for="Traumatic Amputation">
                                Traumatic Amputation
                              </label>
                              <input type="text" class="inputlabelunderline" value="{{$patients->traumaticAmputation}}" placeholder="N/A">
                            </div>
                            </div>

                            <div class="row">
                            <div class="col col-lg-8">
                            <input class="form-check-input" type="checkbox" value="Others1" name="natureOfInjury[]" id=" Others1">
                              <label class="form-check-label" for="Others1">
                              Others: Pls. specify injury and the body part/s affected:
                              </label>
                              <input type="text" class="inputlabelunderline" value="{{$patients->others1}}" placeholder="N/A">
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
                    <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="Bites">
                          <label class="form-check-label" for=" Bites">
                            Bites/stings, Specify animal/insect:
                          </label>
                          <input type="text" class="inputlabelunderline" value="{{$patients->bites}}" placeholder="N/A">

                    </div>
                  </div>
                  
                  <div class="row mx-md-n5">
                    <div class="col px-md-5">
                      <div class="row">
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Burn1" name="checkbox[]" id="Burn1">
                          <label class="form-check-label" for="Burn1">
                            Burn,
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Heat" name="checkbox[]" id="Heat">
                          <label class="form-check-label" for="Heat">
                            Heat
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Fire" name="checkbox[]" id="Fire">
                          <label class="form-check-label" for="Fire">
                            Fire
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="Electricty">
                          <label class="form-check-label" for="Electricty">
                            Electricty
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="Oil">
                          <label class="form-check-label" for="Oil">
                            Oil
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="Friction">
                          <label class="form-check-label" for="Friction">
                            Friction
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="Others2">
                          <label class="form-check-label" for="Others2">
                            Others,specify
                          </label>
                          <input type="text" class="inputlabelunderline" value="{{$patients->others2}}" placeholder="N/A">
                      </div>
                      </div>

                      <div class="row">
                        <div class="col col-lg-8">
                        <input class="form-check-input" type="checkbox" value="checmical" name="checkbox[]" id="Chemical">
                          <label class="form-check-label" for="Chemical">
                            Chemical/Substance, specify
                          </label>
                          <input type="text" class="inputlabelunderline" value="{{$patients->chemical}}" placeholder="N/A">
                        </div>

                        <div class="col col-lg-8">
                        <input class="form-check-input" type="checkbox" value="sharp" name="checkbox[]" id="sharp">
                          <label class="form-check-label" for="sharp">
                            Contact with sharp objects, specify object
                          </label>
                          <input type="text" class="inputlabelunderline" value="{{$patients->sharp}}" placeholder="N/A">
                        </div>
                      </div>

                      <div class="row">
                      <div class="col col-lg-3">
                      <input class="form-check-input" type="checkbox" value="drowning" name="checkbox[]" id="Drowning">
                          <label class="form-check-label" for="Drowning">
                            Drowning: Type/Body of Water:
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="sea" name="checkbox[]" id="Sea">
                          <label class="form-check-label" for="Sea">
                            Sea
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="river" name="checkbox[]" id="River">
                          <label class="form-check-label" for="River">
                            River
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Lake" name="checkbox[]" id="Lake">
                          <label class="form-check-label" for="Lake">
                            Lake
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Pool" name="checkbox[]" id="Pool">
                          <label class="form-check-label" for="Pool">
                            Pool
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Bath Tub" name="checkbox[]" id="Bath Tub">
                          <label class="form-check-label" for="Bath Tub">
                            Bath Tub
                          </label>
                      </div>
                      <div class="col col-lg-4">
                        <input class="form-check-input" type="checkbox" value="Others3" name="checkbox[]" id="Others3">
                          <label class="form-check-label" for="Others3">
                            Others,specify
                          </label>
                          <input type="text" class="inputlabelunderline" value="{{$patients->others3}}" placeholder="N/A">
                      </div>
                      </div>

                      <div class="row">
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Exposure" name="checkbox[]" id="Exposure">
                          <label class="form-check-label" for="Exposure">
                            Exposure to forces of Nature:
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Earthquake" name="checkbox[]" id="Earthquake">
                          <label class="form-check-label" for="Earthquake">
                            Earthquake
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Volcanic" name="checkbox[]" id="Volcanic">
                          <label class="form-check-label" for="Volcanic">
                            Volcanic eruption
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Typhoon" name="checkbox[]" id="Typhoon">
                          <label class="form-check-label" for="Typhoon">
                            Typhoon
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Landslide" name="checkbox[]" id="Landslide">
                          <label class="form-check-label" for="Landslide">
                            Landslide/Avalanche
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="Tidal" name="checkbox[]" id="Tidal">
                          <label class="form-check-label" for="Tidal">
                            Tidal Wave
                          </label>
                      </div>
                        <div class="row">
                        <div class="col px-md-5">
                          <div class="row">
                            <div class="col-auto">
                              <input class="form-check-input" type="checkbox" value="Flood" name="checkbox[]" id="Flood">
                                <label class="form-check-label" for="Flood">
                                  Flood(due to storm/excessive rain)
                                </label>
                            </div>
                            
                            <div class="col-auto">
                              <input class="form-check-input" type="checkbox" value="Others4" name="checkbox[]" id="Others4">
                                <label class="form-check-label" for="Others4">
                                  Others,specify
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->others4}}" placeholder="N/A">
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-auto">
                        <input class="form-check-input" type="checkbox" value="Gunshot" name="checkbox[]" id="Gunshot">
                          <label class="form-check-label" for="Gunshot">
                            Gunshot, Specify weapon
                          </label>
                          <input type="text" class="inputlabelunderline" value="{{$patients->gunshot}}" placeholder="N/A">
                      </div>
                      </div>
                      <div class="row">
                      <div class="col col-lg-4">
                        <input class="form-check-input" type="checkbox" value="Hanging" name="checkbox[]" id="Hanging">
                          <label class="form-check-label" for="Hanging">
                            Hanging/Strangulation
                          </label>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col col-lg-4">
                        <input class="form-check-input" type="checkbox" value="Mauling" name="checkbox[]" id="Mauling">
                          <label class="form-check-label" for="Mauling">
                            Mauling/Assault
                          </label>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col col-lg-4">
                        <input class="form-check-input" type="checkbox" value="Transport" name="checkbox[]" id="Transport">
                          <label class="form-check-label" for="Transport">
                            Transport/Vehicular Accident
                          </label>
                      </div>
                      </div>

                      <div class="row">
                        <div class="col-auto">
                        <input class="form-check-input" type="checkbox" value="Fall" name="checkbox[]" id="Fall">
                                <label class="form-check-label" for="Fall">
                                  Fall, specify, from/in/on/into
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->fall}}" placeholder="N/A">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-auto">
                        <input class="form-check-input" type="checkbox" value="Firecracker" name="checkbox[]" id="Firecracker">
                                <label class="form-check-label" for="Firecracker">
                                  Firecracker, specify type/s
                                </label>
                                <input type="text" class="inputlabelunderline" value="{{$patients->firecracker}}" placeholder="N/A">
                                <label class="form-check-label" for="Firecracker">
                                  (with libraries)
                                </label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-auto">
                        <input class="form-check-input" type="checkbox" value="Sexual" name="checkbox[]" id="Sexual">
                                <label class="form-check-label" for="Sexual">
                                  Sexual Assault/Sexual Abuse/Rape(Alleged)
                                </label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="Others5" name="checkbox[]" id="Others5">
                                  <label class="form-check-label" for="Others5">
                                    Others,specify
                                  </label>
                                  <input type="text" class="inputlabelunderline" value="{{$patients->others5}}" placeholder="N/A">
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
                               <input class="form-check-input" type="checkbox" value="Land" name="checkbox[]" id="Land">
                                <label class="form-check-label mx-auto" for="Land">
                                    Land
                                </label>
                              </div>
                              <div class="col-auto">
                               <input class="form-check-input" type="checkbox" value="Water" name="checkbox[]" id="Water">
                                <label class="form-check-label mx-auto" for="Water">
                                    Water
                                </label>
                              </div>
                              <div class="col col-lg-4">
                               <input class="form-check-input" type="checkbox" value="Air" name="checkbox[]" id="Air">
                                <label class="form-check-label mx-auto" for="Air">
                                    Air
                                </label>
                              </div>
                              <div class="col-auto">
                               <input class="form-check-input" type="checkbox" value="Collision" name="checkbox[]" id="Collision">
                                <label class="form-check-label mx-auto" for="Collision">
                                    Collision
                                </label>
                              </div>
                              <div class="col-auto">
                               <input class="form-check-input" type="checkbox" value="Non-Collision" name="checkbox[]" id="Non-Collision">
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
                                <input class="form-check-input" type="checkbox" value="Fatal Accident" name="checkbox[]" id="Fatal Accident">
                                  <label class="form-check-label" for="Fatal Accident">
                                    Fatal Accident
                                </label>
                                </div>
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="Serious" name="checkbox[]" id="Serious">
                                  <label class="form-check-label" for="Serious">
                                    Serious Injury Accident
                                </label>
                                </div>
                                
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="Minor" name="checkbox[]" id="Minor">
                                  <label class="form-check-label" for="Minor">
                                    Minor Injury Accident
                                </label>
                                </div>

                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="Property" name="checkbox[]" id="Property">
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
                                  <input class="form-check-input" type="checkbox" value="Pedestrian" name="checkbox[]" id="Pedestrian">
                                    <label class="form-check-label" for="Pedestrian">
                                      None(Pedestrian)
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Car" name="checkbox[]" id="Car">
                                    <label class="form-check-label" for="Car">
                                      Car
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Van" name="checkbox[]" id="Van">
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
                                  <input class="form-check-input" type="checkbox" value="Bus" name="checkbox[]" id="Bus">
                                    <label class="form-check-label" for="Bus">
                                      Bus
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Motorcycle" name="checkbox[]" id="Motorcycle">
                                    <label class="form-check-label" for="Motorcycle">
                                      Motorcycle
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Bicycle" name="checkbox[]" id="Bicycle">
                                    <label class="form-check-label" for="Bicycle">
                                      Bicycle
                                  </label>
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Tricycle" name="checkbox[]" id="Tricycle">
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
                                  <input class="form-check-input" type="checkbox" value="Others6" name="checkbox[]" id="Others6">
                                    <label class="form-check-label" for="Others6">
                                      Others,
                                  </label>
                                  <input type="text" class="inputlabelunderline" value="{{$patients->others6}}" placeholder="N/A">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Unknown" name="checkbox[]" id="Unknown">
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
                                  <input class="form-check-input" type="checkbox" value="Pedestrian1" name="checkbox[]" id="Pedestrian">
                                    <label class="form-check-label" for="Pedestrian">
                                      None(Pedestrian)
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Car1" name="checkbox[]" id="Car1">
                                    <label class="form-check-label" for="Car1">
                                      Car
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Van1" name="checkbox[]" id="Van1">
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
                                  <input class="form-check-input" type="checkbox" value="Bus1" name="checkbox[]" id="Bus1">
                                    <label class="form-check-label" for="Bus1">
                                      Bus
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="Motorcycle1">
                                    <label class="form-check-label" for="Motorcycle1">
                                      Motorcycle
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Bicycle1" name="checkbox[]" id="Bicycle1">
                                    <label class="form-check-label" for="Bicycle1">
                                      Bicycle
                                  </label>
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Tricycle1" name="checkbox[]" id="Tricycle1">
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
                                  <input class="form-check-input" type="checkbox" value="Others7" name="checkbox[]" id="Others7">
                                    <label class="form-check-label" for="Others7">
                                      Others,
                                  </label>
                                  <input type="text" class="inputlabelunderline" value="{{$patients->others7}}" placeholder="N/A">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Unknown1" name="checkbox[]" id="Unknown1">
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
                                  <input class="form-check-input" type="checkbox" value="Pedestrian2" name="checkbox[]" id="Pedestrian2">
                                    <label class="form-check-label" for="Pedestrian2">
                                      Pedestrian
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Driver" name="checkbox[]" id="Driver">
                                    <label class="form-check-label" for="Driver">
                                      Driver
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Captain" name="checkbox[]" id="Captain">
                                    <label class="form-check-label" for="Captain">
                                      Captain
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Pilot" name="checkbox[]" id="Pilot">
                                    <label class="form-check-label" for="Pilot">
                                      Pilot
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Front" name="checkbox[]" id="Front">
                                    <label class="form-check-label" for="Front">
                                      Front Passenger
                                  </label>
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Rear" name="checkbox[]" id="Rear">
                                    <label class="form-check-label" for="Rear">
                                      Rear Passenger
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Others8" name="checkbox[]" id="Others8">
                                    <label class="form-check-label" for="Others8">
                                      Others,
                                  </label>
                                  <input type="text" class="inputlabelunderline2" value="{{$patients->others9}}" placeholder="N/A">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Unknown1" name="checkbox[]" id="Unknown1">
                                    <label class="form-check-label" for="Unknown1">
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
                                  <input class="form-check-input" type="checkbox" value="Alone" name="checkbox[]" id="Alone">
                                    <label class="form-check-label" for="Alone">
                                      Alone
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Withothers" name="checkbox[]" id="Withothers">
                                    <label class="form-check-label" for="Withothers">
                                      With others, specify how many(excuding the victim)
                                  </label>
                                  <input type="text" class="inputlabelunderline2" value="{{$patients->others5}}" placeholder="N/A">
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
                                  <input class="form-check-input" type="checkbox" value="Home" name="checkbox[]" id="Home">
                                    <label class="form-check-label" for="Home">
                                      Home
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="School" name="checkbox[]" id="School">
                                    <label class="form-check-label" for="School">
                                      School
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Road" name="checkbox[]" id="Road">
                                    <label class="form-check-label" for="Road">
                                      Road
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Bars" name="checkbox[]" id="Bars">
                                    <label class="form-check-label" for="Bars">
                                      Videoke Bars
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Workplace" name="checkbox[]" id="Workplace">
                                    <label class="form-check-label" for="Workplace">
                                      Workplace, specify
                                  </label>
                                  <input type="text" class="inputlabelunderline2" value="{{$patients->others5}}" placeholder="N/A">
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Others9" name="checkbox[]" id="Others9">
                                    <label class="form-check-label" for="Others9">
                                      Others, specify
                                  </label>
                                  <input type="text" class="inputlabelunderline2" value="{{$patients->others9}}" placeholder="N/A">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Unkown4" name="checkbox[]" id="Unkown4">
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
                                  <input class="form-check-input" type="checkbox" value="Sports" name="checkbox[]" id="Sports">
                                    <label class="form-check-label" for="Sports">
                                      Sports
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Leisure" name="checkbox[]" id="Leisure">
                                    <label class="form-check-label" for="Leisure">
                                      Leisure
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Workrelated" name="checkbox[]" id="Workrelated">
                                    <label class="form-check-label" for="Workrelated">
                                      Work related
                                  </label>
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Others10" name="checkbox[]" id="Others10">
                                    <label class="form-check-label" for="Others10" >
                                      Others, specify
                                  </label>
                                  <input type="text" class="inputlabelunderline2" value="{{$patients->others5}}" placeholder="N/A">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Unkown5" name="checkbox[]" id="Unkown5">
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
                                    Other rish factor at the time of the incident:
                                </h6>
                            </div>
                                <div class="row">
                                <div class="container">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Alchohol" name="checkbox[]" id="Alchohol">
                                    <label class="form-check-label" for="Alchohol">
                                      Alchohol/liquor
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Smoking" name="checkbox[]" id="Smoking">
                                    <label class="form-check-label" for="Smoking">
                                      Smoking
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Drugs" name="checkbox[]" id="Drugs">
                                    <label class="form-check-label" for="Drugs">
                                      Drugs
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="mobile" name="checkbox[]" id="mobile">
                                    <label class="form-check-label" for="mobile">
                                      Using mobile phone
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Sleepy" name="checkbox[]" id="Sleepy">
                                    <label class="form-check-label" for="Sleepy">
                                      Sleepy
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="Others11" name="checkbox[]" id="Others11">
                                    <label class="form-check-label" for="Others11">
                                      Others, specify
                                  </label>
                                  <input type="text" class="inputlabelunderline2" value="{{$patients->others11}}" placeholder="N/A">
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
                                <input class="form-check-input" type="checkbox" value="None" name="checkbox[]" id="None">
                                  <label class="form-check-label" for="None">
                                    None
                                </label>
                                </div>
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="Airbag" name="checkbox[]" id="Airbag">
                                  <label class="form-check-label" for="Airbag">
                                    Airbag
                                </label>
                                </div>
                                
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="Helmet" name="checkbox[]" id="Helmet">
                                  <label class="form-check-label" for="Helmet">
                                    Helmet
                                </label>
                                </div>

                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="Childseat" name="checkbox[]" id="Childseat">
                                  <label class="form-check-label" for="Childseat">
                                    Childseat
                                </label>
                                </div>

                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="Seatbelt" name="checkbox[]" id="Seatbelt">
                                  <label class="form-check-label" for="Seatbelt">
                                    Seatbelt
                                </label>
                                </div>

                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="LifeJacket" name="checkbox[]" id="LifeJacket">
                                  <label class="form-check-label" for="LifeJacket">
                                    Life vest/LifeJacket/Floatation device
                                </label>
                                </div>

                                </div>
                                

                                <div class="row">
                                <div class="col col-lg-3">
                                
                                </div>
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="Others12" name="checkbox[]" id="Others12">
                                  <label class="form-check-label" for="Others12" value="{{$patients->others12}}" placeholder="N/A">
                                    Others
                                </label>
                                </div>

                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="Unknown6" name="checkbox[]" id="Unknown6">
                                  <label class="form-check-label" for="Unknown6">
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
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"checked="checked">
                  <label class="form-check-label" for="flexRadioDefault1">
                      Yes
                  </label>
            </div>
              <div class="col col-lg-1">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2">
                      No
                  </label>
              </div>
          </div>
            <div class="row">
            <div class="col-auto">
                Referred by another Hospital/Facility for Laboratory and/or other medical procedures
            </div>
              <div class="col-auto">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1">
                      Yes
                  </label>
              </div>
              <div class="col col-lg-1">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"checked="checked">
                  <label class="form-check-label" for="flexRadioDefault2">
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
             <input type="text" class="inputlabelunderline" value="{{$patients->hospPhys}}" placeholder="N/A">
          </div>
          </div>
        </div>

        <div class="row-auto border border-secondary border-left-0 border-right-0">
        <div class="row ">
          <div class="col-auto">
          <label class="form-check-label" for="flexCheckDefault">
            Status upon reaching Facility/Hospital:
          </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
            <label class="form-check-label" for="flexCheckDefault">
              Dead on Arrival
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"checked="checked">
            <label class="form-check-label" for="flexCheckDefault">
              Alive if alive, please check if:
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Conscious
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Unconscious
            </label>
          </div>
          </div>

          <div class="row">
            <div class="col-auto">
              <label class="form-check-label" for="flexCheckDefault">
                Mode of transport to the Hospital/Facility:
              </label>
            </div>
          
          <div class="col-auto">
          <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Ambulance
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Police vehicle
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Private vehicle
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="checkbox" value="others12" name="checkbox[]" id="others12">
            <label class="form-check-label" for="others12">
              Others, specify
            </label>
            <input type="text" class="inputlabelunderline" value="{{$patients->others12}}" placeholder="N/A">
          </div>
        </div>
        </div>
        <div class="row-auto border-bottom border-secondary">
          <div class="row">
          <div class="col-auto">
          <label class="form-check-label" for="flexCheckDefault">
                   Initial Impression:
                </label>
             <input type="text" class="inputlabelunderline" value="{{$patients->impression}}" placeholder="N/A">
          </div>
          </div>
        </div>
        <div class="row-auto">
          <div class="row">
          <div class="col-auto">
          <label class="form-check-label" for="flexCheckDefault">
                   ICD-10 Code/s: Nature of Injury:
                </label>
             <input type="text" class="inputlabelunderline" value="{{$patients->icdNature}}" placeholder="N/A">
          </div>
          <div class="col-auto">
          <label class="form-check-label" for="flexCheckDefault">
                   ICD-10 Code/s: External cause of Injury:
                </label>
             <input type="text" class="inputlabelunderline" value="{{$patients->icdExternal}}" placeholder="N/A">
          </div>
          </div>
        </div>
        <div class="row-auto border border-secondary border-right-0 border-left-0">
          <div class="row">
          <div class="col-auto">
          <label class="form-check-label" for="flexCheckDefault">
                   Treatment Given:
          </label>
          </div>
          <div class="col-auto">
                <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                   Yes, specify
                </label>
          <input type="text" class="inputlabelunderline" value="{{$patients->treatment}}" placeholder="N/A">
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="flexCheckDefault">
          <label class="form-check-label" for="flexCheckDefault">
                   No
                </label>
          </div>
          </div>
        </div>
        <div class="row-auto">
          <div class="row">
            <div class="col-auto">
             <label class="form-check-label" for="flexCheckDefault">
                   Disposition:
              </label>
            </div>
          </div>
          <div class="row mx-md-n5">
            <div class="col-auto px-md-5">
            <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                   Admitted
                </label>
            </div>
            <div class="col-auto px-md-5">
            <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                   Treated and Sent Home
                </label>
            </div>
            <div class="col-auto">
            <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                   Transferred to another facility/hospital, specify
                </label>
                <input type="text" class="inputlabelunderline" value="{{$patients->transferred}}" placeholder="N/A">
            </div>
          </div>
          <div class="row mx-md-n">
            <div class="col-auto px-md-5">
            <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                   HAMA
                </label>
            </div>
            <div class="col-auto px-md-5">
            <input class="form-check-input" type="checkbox" value="Bites" name="checkbox[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                   Absconded
                </label>
            </div>
          </div>
        </div>
        <div class="row-auto border border-secondary border-right-0 border-left-0">
          <div class="row">
          <div class="col-auto">
          <label class="form-check-label" for="flexCheckDefault">
                   Outcome:
          </label>
          </div>
          <div class="col-auto">
                <input class="form-check-input" type="radio" value="Bites" name="checkbox[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                   Improved
                </label>
          </div>
          <div class="col-auto">
                <input class="form-check-input" type="radio" value="Bites" name="checkbox[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                   Unimproved
                </label>
          </div>
          <div class="col-auto">
                <input class="form-check-input" type="radio" value="Bites" name="checkbox[]" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                   Died
                </label>
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