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
        <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>First Name:</label>
                    <input type="text" name="firstName" id="firstName"  class="form-control" required ></br>
                </div> 
                <div class="form-group col-md-2"> 
                    <label>Middle name:</label>
                    <input type="text" name="middleName" id="middleName"  class="form-control" required></br>
                </div>
                <div class="form-group col-md-2"> 
                    <label>Last name:</label>
                    <input type="text" name="lName" id="lName"  class="form-control"required></br>
                </div>
        </div>

        
        <div class="form-group row">
        <div  class="p-2 bg-success text-white">
          PRE-ADMISSION DATA:
        </div>
                <div class="form-group col-md-5"> 
                  <div class="row">
                  <input type="hidden" name="rdoAid" value="0">
                    <div class="col col-lg-4">
                    <label class="firstAid">First Aid Given:</label>
                    </div>
                    <div class="col col-lg-2">
                    <input class="form-check-input" type="radio" name="rdoAid" value="1" id="aidYes">
                    <label class="form-check-label" for="rdoAid" >
                    Yes
                    </div>
                    <div class="col col-lg-2">
                    </label>
                    <input class="form-check-input" type="radio" name="rdoAid" value="2" id="aidNo" checked="true">
                    <label class="form-check-label" for="rdoAid">
                    No
                    </label>
                    </div>
                    </div>
                  <div class="form-group">
                   <textarea class="form-control" rows="2" name="frstAid" id="frstAid" value="" disabled="true"></textarea><!--COMMENT GIVEN BY-->
                  </div>
                </div>
                
                <div class="form-group col-md-5"> 
                <label>By: </label>
                <div class="form-group col-md-8">
                    <input type="text" name="docAdmit" id="docAdmit" placeholder="name of doctor" class="form-control" required>
                    
                </div>
                </div>  
        </div>
        <hr>
        <div class="form-group col-md-12">
                  <h5>Nature of Injury/ies:</h5>
                  <div class="innerdiv">
                  <div class="row">
                    <div class="col col-lg-2">
                    <Label for="injuries">Multiple injuries?</Label>
                    </div>
                    <input type="hidden" name="injryRdo" value="0">
                    <div class="col col-lg-1">
                    <input class="form-check-input" type="radio" name="injryRdo" value ="1" id="injuryRdo1" >
                      <label class="form-check-label" >
                      Yes
                      </label>
                    </div>
                    <div class="col col-lg-1">
                      <input class="form-check-input" type="radio" name="injryRdo" value="2" id="injuryRdo2" checked="true">
                      <label class="form-check-label" >
                      No
                    </label>
                    </div>
                  </div>

                  <div class="row mx-md-n3">
                  <div class="col px-md-3">
                    <label class="labelmarginleft"><u>(Check all applicable, indicate in the blank space oppiste each type of injury the body location(site) affected and other deatils)</u></label>
                    </div>
                  </div>

<!--checkbox from abrasion-->
                  
                    <div class="form-group row-md-4">
                        <div class="form-check">


                          <input type="hidden" name="abrasionCh" value="0">
                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" value="1" name="abrasionCh" id="Abrasion" >
                              <label class="form-check-label" for="Abrasion">
                                Abrasion
                              </label>
                              <input type="text" class="inputlabelunderline" name="abrasion">
                            </div>
                          </div>

                          <input type="hidden" name="avulsionCh" value="0">
                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" value="1" name="avulsionCh" id="Avulsion">
                              <label class="form-check-label" for="Avulsion">
                                Avulsion
                              </label>
                              <input type="text" class="inputlabelunderline" name="avulsion">
                            </div>
                          </div>
                          
                          
                          <div class="row">
                            <div class="col col-lg-16">
                            <input type="hidden" name="burnCh" value="0">
                            <input class="form-check-input" type="checkbox" value="1" name="burnCh" id="Burn">
                              <label class="form-check-label" for="Burn">
                              Burn (Degree of Burn & Extent of Body Surface involved) Degree:
                              </label>
                              <input type="hidden" name="degreeRdoBtn" value="0">
                              <input class="" type="radio" name="Burn" id="degreeRdoBtn1" value="1" >
                              <label class="" for="" >
                              1<sup>st</sup>
                              <input class="" type="radio" name="Burn" id="degreeRdoBtn1" value="2">
                              <label class="" for="">
                              2<sup>nd</sup>
                              </label>
                              <input class="" type="radio" name="Burn" id="degreeRdoBtn3" value="3" >
                              <label class="" for="" >
                              3<sup>rd</sup>
                              </label>
                              <input class="" type="radio" name="Burn" id="degreeRdoBtn4" value="4" >
                              <label class="" for="">
                              4<sup>th</sup>
                              </label>
                              <input class="" type="radio" name="Burn" id="degreeRdoBtn5" value="5" >
                              <label class="" for="" >
                              5<sup>th</sup>
                              </label>
                              <label>Site:</label>
                              <input type="text" class="inputlabelunderline" name="site">
                              </label>
                            </div>
                          </div>

                          <input type="hidden" name="concussionCh" value="0">
                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" value="1" name="concussionCh" id="Concussion">
                              <label class="form-check-label" for="Concussion">
                              Concussion
                              </label>
                              <input type="text" class="inputlabelunderline" name="concussion">
                            </div>
                          </div>

                          <input type="hidden" name="contusionCh" value="0">
                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" value="1" name="contusionCh" id="Contusion">
                              <label class="form-check-label" for="Contusion">
                                Contusion
                              </label>
                              <input type="text" class="inputlabelunderline" name="contusion">
                            </div>
                          </div>

                          <input type="hidden" name="fractureCh" value="0">
                          <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" value="1" name="fractureCh" id="Fracture">
                              <label class="form-check-label" for="Fracture">
                                Fracture
                              </label>

                              <input type="hidden" name="openTypeCh" value="0">
                              <div class="row mx-md-n5">
                                <div class="col px-md-5">
                                  <input class="form-check-input" type="checkbox" value="1" name="openTypeCh" id="Open Type">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    <label class="form-check-label" for="Open Type">
                                      Open Type
                                    </label>
                                    <input type="text" class="inputlabelunderline" name="openType">
                                    <label class="form-check-label" for="">
                                    (ex. comminuted, depressed fracture)
                                    </label>
                                  </label>
                                </div>
                              </div>

                              <input type="hidden" name="closeTypeCh" value="0">
                              <div class="row mx-md-n5">
                                <div class="col px-md-5">
                                  <input class="form-check-input" type="checkbox" value="1" name="closedTypeCh" id="Closed Type">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    
                                    <label class="form-check-label" for="Closed Type">
                                      Closed Type
                                    </label>
                                    <input type="text" class="inputlabelunderline" name="closedType">
                                    <label class="form-check-label" for="">
                                    (ex. Compound, infected fracture)
                                    </label>
                                  </label>
                                </div>
                              </div>
                            </div>

                            <input type="hidden" name="woundCh" value="0">
                            <div class="row">
                                <div class="col col-lg-12">
                                  <input class="form-check-input" type="checkbox" value="1" name="woundCh" id="wound">
                                  <label class="form-check-label" for="flexCheckDefault">
                                    
                                    <label class="form-check-label" for="wound">
                                      Open/Wound Laceration
                                    </label>
                                    <input type="text" class="inputlabelunderline" name="wound">
                                  </label>
                                </div>
                                <label class="form-check-label" for="flexCheckDefault">
                                    (ex. hacking, gunshot, stabbing, animal(dog, cat, rat, snake, etc) bites, human bites, insect bites, punctured wound, etc)
                                      </label>
                            </div>

                            <input type="hidden" name="traumaCh" value="0">
                            <div class="row">
                            <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" value="1" name="traumaCh" id="Traumatic Amputation">
                              <label class="form-check-label" for="Traumatic Amputation">
                                Traumatic Amputation
                              </label>
                              <input type="text" class="inputlabelunderline" name="traumaticAmputation">
                            </div>
                            </div>

                            <input type="hidden" name="others1Ch" value="0">
                            <div class="row">
                            <div class="col col-lg-8">
                            <input class="form-check-input" type="checkbox" value="1" name="others1Ch" id="Others1">
                              <label class="form-check-label" for="Others1">
                              Others: Pls. specify injury and the body part/s affected:
                              </label>
                              <input type="text" class="inputlabelunderline" name="others1">
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
              <input type="hidden" name="biteCh" value="0">
                  <div class="row mx-md-n5">
                    <div class="col px-md-5">
                    <input class="form-check-input" type="checkbox" value="1" name="bitesCh" id="Bites">
                          <label class="form-check-label" for="Bites">
                            Bites/stings, Specify animal/insect:
                          </label>
                          <input type="text" class="inputlabelunderline" name="bites">

                    </div>
                  </div>
                  
                  <div class="row mx-md-n5">
                    <div class="col px-md-5">
                      <div class="row">
                      <div class="col-auto">
                        <input type="hidden" name="burn1Ch" value="0">
                      <input class="form-check-input" type="checkbox" value="1" name="burn1Ch" id="Burn1">
                          <label class="form-check-label" for="Burn1">
                            Burn,
                          </label>
                      </div>
                      <input type="hidden" name="burnRdo" value="0">
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="1" name="Burn1" id="Heat">
                          <label class="form-check-label" for="Heat">
                            Heat
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="2" name="Burn1" id="Fire">
                          <label class="form-check-label" for="Fire">
                            Fire
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="3" name="Burn1" id="Electricty">
                          <label class="form-check-label" for="Electricty">
                            Electricty
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="4" name="Burn1" id="Oil">
                          <label class="form-check-label" for="Oil">
                            Oil
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="5" name="Burn1" id="Friction">
                          <label class="form-check-label" for="Friction">
                            Friction
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="6" name="Burn1" id="Others2">
                          <label class="form-check-label" for="Others2">
                            Others,specify
                          </label>
                          <input type="text" class="inputlabelunderline" name="others2">
                      </div>
                      </div>

                      <input type="hidden" name="chemicalCh" value="0">
                      <div class="row">
                        <div class="col col-lg-8">
                        <input class="form-check-input" type="checkbox" value="1" name="chemicalCh" id="Chemical">
                          <label class="form-check-label" for="Chemical">
                            Chemical/Substance, specify
                          </label>
                          <input type="text" class="inputlabelunderline" name="chemical">
                        </div>

                        <input type="hidden" name="sharpCh" value="0">
                        <div class="col col-lg-8">
                        <input class="form-check-input" type="checkbox" value="1" name="sharpCh" id="sharp">
                          <label class="form-check-label" for="sharp">
                            Contact with sharp objects, specify object
                          </label>
                          <input type="text" class="inputlabelunderline" name="sharp">
                        </div>
                      </div>

                      <input type="hidden" name="drowningCh" value="0">
                      <div class="row">
                      <div class="col col-lg-3">
                      <input class="form-check-input" type="checkbox" value="1" name="drowningCh" id="Drowning">
                          <label class="form-check-label" for="Drowning">
                            Drowning: Type/Body of Water:
                          </label>
                      </div>
                      <input type="hidden" name="drowningRdo" value="0">
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="1" name="drowningRdo" id="Sea">
                          <label class="form-check-label" for="Sea">
                            Sea
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="2" name="drowningRdo" id="River">
                          <label class="form-check-label" for="River">
                            River
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="3" name="drowningRdo" id="Lake">
                          <label class="form-check-label" for="Lake">
                            Lake
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="4" name="drowningRdo" id="Pool">
                          <label class="form-check-label" for="Pool">
                            Pool
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="5" name="drowningRdo" id="BathTub">
                          <label class="form-check-label" for="BathTub">
                            Bath Tub
                          </label>
                      </div>
                      <div class="col col-lg-4">
                        <input class="form-check-input" type="radio" value="6" name="drowningRdo" id="Others3">
                          <label class="form-check-label" for="Others3">
                            Others,specify
                          </label>
                          <input type="text" class="inputlabelunderline" name="others3">
                      </div>
                      </div>

                      <input type="hidden" name="natureCh" value="0">
                      <div class="row">
                      <div class="col-auto">
                      <input class="form-check-input" type="checkbox" value="1" name="natureCh" id="Exposure">
                          <label class="form-check-label" for="Exposure">
                            Exposure to forces of Nature:
                          </label>
                      </div>
                      <input type="hidden" name="natureRdo" value="0">
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="1" name="natureRdo" id="Earthquake">
                          <label class="form-check-label" for="Earthquake">
                            Earthquake
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="2" name="natureRdo" id="Volcanic">
                          <label class="form-check-label" for="Volcanic">
                            Volcanic eruption
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="3" name="natureRdo" id="Typhoon">
                          <label class="form-check-label" for="Typhoon">
                            Typhoon
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="4" name="natureRdo" id="Landslide">
                          <label class="form-check-label" for="Landslide">
                            Landslide/Avalanche
                          </label>
                      </div>
                      <div class="col-auto">
                      <input class="form-check-input" type="radio" value="5" name="natureRdo" id="Tidal">
                          <label class="form-check-label" for="Tidal">
                            Tidal Wave
                          </label>
                      </div>
                        <div class="row">
                        <div class="col px-md-5">
                          <div class="row">
                            <div class="col-auto">
                              <input class="form-check-input" type="radio" value="6" name="natureRdo" id="Flood">
                                <label class="form-check-label" for="Flood">
                                  Flood(due to storm/excessive rain)
                                </label>
                            </div>
                            
                            <div class="col-auto">
                              <input class="form-check-input" type="radio" value="7" name="natureRdo" id="Others4">
                                <label class="form-check-label" for="Others4">
                                  Others,specify
                                </label>
                                <input type="text" class="inputlabelunderline" name="others4">
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>

                      <input type="hidden" name="gunshotCh" value="0">
                      <div class="row">
                      <div class="col-auto">
                        <input class="form-check-input" type="checkbox" value="1" name="gunshotCh" id="Gunshot">
                          <label class="form-check-label" for="Gunshot">
                            Gunshot, Specify weapon
                          </label>
                          <input type="text" class="inputlabelunderline" name="gunshot">
                      </div>
                      </div>

                      <input type="hidden" name="hangingCh" value="0">
                      <div class="row">
                      <div class="col col-lg-4">
                        <input class="form-check-input" type="checkbox" value="1" name="hangingCh" id="Hanging">
                          <label class="form-check-label" for="Hanging">
                            Hanging/Strangulation
                          </label>
                      </div>
                      </div>

                      <input type="hidden" name="maulingCH" value="0">
                      <div class="row">
                      <div class="col col-lg-4">
                        <input class="form-check-input" type="checkbox" value="1" name="maulingCh" id="Mauling">
                          <label class="form-check-label" for="Mauling">
                            Mauling/Assault
                          </label>
                      </div>
                      </div>

                      <input type="hidden" name="transportCh" value="0">
                      <div class="row">
                      <div class="col col-lg-4">
                        <input class="form-check-input" type="checkbox" value="1" name="transportCh" id="Transport">
                          <label class="form-check-label" for="Transport">
                            Transport/Vehicular Accident
                          </label>
                      </div>
                      </div>

                      <input type="hidden" name="fallCh" value="0">
                      <div class="row">
                        <div class="col-auto">
                        <input class="form-check-input" type="checkbox" value="1" name="fallCh" id="Fall">
                                <label class="form-check-label" for="Fall">
                                  Fall, specify, from/in/on/into
                                </label>
                                <input type="text" class="inputlabelunderline" name="fall">
                        </div>
                      </div>

                      <input type="hidden" name="firecrackerCh" value="0">
                      <div class="row">
                        <div class="col-auto">
                        <input class="form-check-input" type="checkbox" value="1" name="firecrackerCh" id="Firecracker">
                                <label class="form-check-label" for="Firecracker">
                                  Firecracker, specify type/s
                                </label>
                                <input type="text" class="inputlabelunderline" name="firecracker">
                                <label class="form-check-label" for="Firecracker">
                                  (with libraries)
                                </label>
                        </div>
                      </div>

                      <input type="hidden" name="assaultCh" value="0">
                      <div class="row">
                        <div class="col-auto">
                        <input class="form-check-input" type="checkbox" value="1" name="assaultCh" id="Sexual">
                                <label class="form-check-label" for="Sexual">
                                  Sexual Assault/Sexual Abuse/Rape(Alleged)
                                </label>
                        </div>
                      </div>

                      <input type="hidden" name="others5Ch" value="0">
                      <div class="row">
                        <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="1" name="others5Ch" id="Others5">
                                  <label class="form-check-label" for="Others5">
                                    Others,specify
                                  </label>
                                  <input type="text" class="inputlabelunderline" name="others5">
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
                               <input type="hidden" name="transpoRdo1" value="0">
                              <div class="col-auto">
                               <input class="form-check-input" type="radio" value="1" name="transpoRdo1" id="Land" >
                                <label class="form-check-label mx-auto" for="Land">
                                    Land
                                </label>
                              </div>
                              <div class="col-auto">
                               <input class="form-check-input" type="radio" value="2" name="transpoRdo1" id="Water" >
                                <label class="form-check-label mx-auto" for="Water">
                                    Water
                                </label>
                              </div>
                              <div class="col col-lg-4">
                               <input class="form-check-input" type="radio" value="3" name="transpoRdo1" id="Air" >
                                <label class="form-check-label mx-auto" for="Air">
                                    Air
                                </label>
                              </div>

                              <input type="hidden" name="collRdo" value="0">
                              <div class="col-auto">
                               <input class="form-check-input" type="radio" value="1" name="collRdo" id="Collision" >
                                <label class="form-check-label mx-auto" for="Collision">
                                    Collision
                                </label>
                              </div>
                              <div class="col-auto">
                               <input class="form-check-input" type="radio" value="2" name="collRdo" id="Non-Collision" >
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

                                <input type="hidden" name="severity" value="0">
                                <div class="col-auto">
                                <input class="form-check-input" type="radio" value="1" name="severity" id="Fatal Accident"> 
                                  <label class="form-check-label" for="Fatal Accident">
                                    Fatal Accident
                                </label>
                                </div>
                                <div class="col-auto">
                                <input class="form-check-input" type="radio" value="2" name="severity" id="Serious">
                                  <label class="form-check-label" for="Serious">
                                    Serious Injury Accident
                                </label>
                                </div>
                                
                                <div class="col-auto">
                                <input class="form-check-input" type="radio" value="3" name="severity" id="Minor">
                                  <label class="form-check-label" for="Minor">
                                    Minor Injury Accident
                                </label>
                                </div>

                                <div class="col-auto">
                                <input class="form-check-input" type="radio" value="4" name="severity" id="Property">
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

                                  <input type="hidden" name="vehicleRdo" value="0">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="1" name="vehicleRdo" id="Pedestrian" >
                                    <label class="form-check-label" for="Pedestrian">
                                      None(Pedestrian)
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="2" name="vehicleRdo" id="Car">
                                    <label class="form-check-label" for="Car">
                                      Car
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="3" name="vehicleRdo" id="Van" }>
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
                                  <input class="form-check-input" type="radio" value="4" name="vehicleRdo" id="Bus"}>
                                    <label class="form-check-label" for="Bus">
                                      Bus
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="5" name="vehicleRdo" id="Motorcycle" >
                                    <label class="form-check-label" for="Motorcycle">
                                      Motorcycle
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="6" name="vehicleRdo" id="Bicycle" >
                                    <label class="form-check-label" for="Bicycle">
                                      Bicycle
                                  </label>
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="7" name="vehicleRdo" id="Tricycle" >
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
                                  <input class="form-check-input" type="radio" value="8" name="vehicleRdo" id="Others6">
                                    <label class="form-check-label" for="Others6" name="others6">
                                      Others,
                                  </label>
                                  <input type="text" class="inputlabelunderline" name="others6">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="9" name="vehicleRdo" id="Unknown" >
                                    <label class="form-check-label" for="Unknown">
                                      Unknown
                                  </label>
                                  </div>

                                </div>
                                
                            </div>

                            <div class="container">
                                <div class="row row-lg-8">
                                  <div class="col-auto">
                                  <h6 class="form-check-label" for="othervehicle">
                                      Other Vehicle/Object Involved(for COLLISION accident ONLY)
                                  </h6>
                                  </div>
                                  </div>

                                  <div class="row">

                                  <div class="col col-lg-2">
                                  <h6 class="form-check-label" for="flexCheckDefault">
                                      
                                  </h6>
                                  </div>

                                  <input type="hidden" name="otherRdo" value="0">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="1" name="otherRdo" id="Pedestrian1">
                                    <label class="form-check-label" for="Pedestrian1">
                                      None(Pedestrian)
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="2" name="otherRdo" id="Car1">
                                    <label class="form-check-label" for="Car1">
                                      Car
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="3" name="otherRdo" id="Van1">
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
                                  <input class="form-check-input" type="radio" value="4" name="otherRdo" id="Bus1">
                                    <label class="form-check-label" for="Bus1">
                                      Bus
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="5" name="otherRdo" id="Motorcycle1">
                                    <label class="form-check-label" for="Motorcycle1">
                                      Motorcycle
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="6" name="otherRdo" id="Bicycle1" >
                                    <label class="form-check-label" for="Bicycle1">
                                      Bicycle
                                  </label>
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="7" name="otherRdo" id="Tricycle1">
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
                                  <input class="form-check-input" type="radio" value="8" name="otherRdo" id="Others7" >
                                    <label class="form-check-label" for="Others7">
                                      Others,
                                  </label>
                                  <input type="text" class="inputlabelunderline" name="others7">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="9" name="otherRdo" id="Unknown1" >
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
                            <input type="hidden" name="posRdo" value="0">
                                <div class="row">
                                <div class="container">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="1" name="posRdo" id="Pedestrian2" >
                                    <label class="form-check-label" for="Pedestrian2">
                                      Pedestrian
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="2" name="posRdo" id="Driver" >
                                    <label class="form-check-label" for="Driver">
                                      Driver
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="3" name="posRdo" id="Captain" >
                                    <label class="form-check-label" for="Captain">
                                      Captain
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="4" name="posRdo" id="Pilot">
                                    <label class="form-check-label" for="Pilot">
                                      Pilot
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="5" name="posRdo" id="Front">
                                    <label class="form-check-label" for="Front">
                                      Front Passenger
                                  </label>
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="6" name="posRdo" id="Rear" >
                                    <label class="form-check-label" for="Rear">
                                      Rear Passenger
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="7" name="posRdo" id="Others8">
                                    <label class="form-check-label" for="Others8">
                                      Others,
                                  </label>
                                  <input type="text" class="inputlabelunderline2" name="others8">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="8" name="posRdo" id="Unknown2" >
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
                                <input type="hidden" name="victimsRdo" value="0">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="1" name="victimsRdo" id="Alone">
                                    <label class="form-check-label" for="Alone">
                                      Alone
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="2" name="victimsRdo" id="Withothers">
                                    <label class="form-check-label" for="Withothers">
                                      With others, specify how many(excuding the victim)
                                  </label>
                                  <input type="text" class="inputlabelunderline2" name="withothers">
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
                                  <input type="hidden" name="palceRdo" value="0">
                                  <input class="form-check-input" type="radio" value="1" name="placeRdo" id="Home" >
                                    <label class="form-check-label" for="Home">
                                      Home
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="2" name="placeRdo" id="School" >
                                    <label class="form-check-label" for="School">
                                      School
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="3" name="placeRdo" id="Road" >
                                    <label class="form-check-label" for="Road">
                                      Road
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="4" name="placeRdo" id="Bars" >
                                    <label class="form-check-label" for="Bars">
                                      Videoke Bars
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="5" name="placeRdo" id="Workplace" >
                                    <label class="form-check-label" for="Workplace">
                                      Workplace, specify
                                  </label>
                                  <input type="text" class="inputlabelunderline2" name="workplaceInput">
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="6" name="placeRdo" id="Others9" >
                                    <label class="form-check-label" for="Others9">
                                      Others, specify
                                  </label>
                                  <input type="text" class="inputlabelunderline2" name="others9">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="7" name="placeRdo" id="Unkown4" >
                                    <label class="form-check-label" for="Unkown4">
                                      Unkown
                                  </label>
                                  
                                  </div>
                                </div>
                                </div>
                                </div><!--33b end-->
                                <div class="col col-lg-4 border border-secondary"><!--33c-->
                            <div class="col-auto">
                                <h6 class="form-check-label" for="flexCheckDefault">
                                    Activity of the Patient at the time of the incident:
                                </h6>
                            </div>
                            <input type="hidden" name="activityRdo" value="0">
                                <div class="row">
                                <div class="container">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="1" name="activityRdo" id="Sports" >
                                    <label class="form-check-label" for="Sports">
                                      Sports
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="2" name="activityRdo" id="Leisure" >
                                    <label class="form-check-label" for="Leisure">
                                      Leisure
                                  </label>
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="3" name="activityRdo" id="Workrelated" >
                                    <label class="form-check-label" for="Workrelated">
                                      Work related
                                  </label>
                                  </div>
                                  
                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="4" name="activityRdo" id="Others10" >
                                    <label class="form-check-label" for="Others10">
                                      Others, specify
                                  </label>
                                  <input type="text" class="inputlabelunderline2" name="others10">
                                  </div>

                                  <div class="col-auto">
                                  <input class="form-check-input" type="radio" value="5" name="activityRdo" id="Unkown5">
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
                                <input type="hidden" name="alcoholCh" value="0">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="1" name="alcoholCh" id="Alchohol">
                                    <label class="form-check-label" for="Alchohol">
                                      Alchohol/liquor
                                  </label>
                                  </div>

                                <input type="hidden" name="smokeCh" value="0">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="1" name="smokingCh" id="Smoking">
                                    <label class="form-check-label" for="Smoking">
                                      Smoking
                                  </label>
                                  </div>

                                <input type="hidden" name="drugsCh" value="0">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="1" name="drugsCh" id="Drugs">
                                    <label class="form-check-label" for="Drugs">
                                      Drugs
                                  </label>
                                  </div>

                                <input type="hidden" name="phoneCh" value="0">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="1" name="phoneCh" id="phone">
                                    <label class="form-check-label" for="phone">
                                      Using mobile phone
                                  </label>
                                  </div>

                                <input type="hidden" name="sleepyCh" value="0">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="1" name="sleepyCh" id="Sleepy">
                                    <label class="form-check-label" for="Sleepy">
                                      Sleepy
                                  </label>
                                  </div>

                                <input type="hidden" name="others11Ch" value="0">
                                  <div class="col-auto">
                                  <input class="form-check-input" type="checkbox" value="1" name="others11Ch" id="Others11">
                                    <label class="form-check-label" for="Others11">
                                      Others, specify
                                  </label>
                                  <input type="text" class="inputlabelunderline2" name="others11">
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
                                
                                  <input type="hidden" name="safetyCh" value="0">
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="1" name="noneCh" id="None">
                                  <label class="form-check-label" for="None">
                                    None
                                </label>
                                </div>

                                <input type="hidden" name="airbagCh" value="0">
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="1" name="airbagCh" id="Airbag">
                                  <label class="form-check-label" for="Airbag">
                                    Airbag
                                </label>
                                </div>
                                
                                <input type="hidden" name="helmetCh" value="0">
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="1" name="helmetCh" id="Helmet">
                                  <label class="form-check-label" for="Helmet">
                                    Helmet
                                </label>
                                </div>

                                <input type="hidden" name="childseatCh" value="0">
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="1" name="childseatCh" id="Childseat">
                                  <label class="form-check-label" for="Childseat">
                                    Childseat
                                </label>
                                </div>

                                <input type="hidden" name="seatbeltCh" value="0">
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="1" name="seatbeltCh" id="Seatbelt">
                                  <label class="form-check-label" for="Seatbelt">
                                    Seatbelt
                                </label>
                                </div>

                                <input type="hidden" name="vestCh" value="0">
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="1" name="vestCh" id="LifeJacket">
                                  <label class="form-check-label" for="LifeJacket">
                                    Life vest/LifeJacket/Floatation device
                                </label>
                                </div>

                                </div>
                                

                                <div class="row">
                                <div class="col col-lg-3">
                                
                                <input type="hidden" name="others12Ch" value="0">
                                </div>
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="1" name="others12Ch" id="Others12">
                                  <label class="form-check-label" for="Others12">
                                    Others
                                </label>
                                </div>

                                <input type="hidden" name="unknown5Ch" value="0">
                                <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="1" name="unknown5Ch" id="Unknown5">
                                  <label class="form-check-label" for="Unknown5">
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
            <input type="hidden" name="transferRdo" value="0">
                <input class="form-check-input" type="radio" name="transferRdo" value="1" id="flexRadioDefault1">
                  <label class="form-check-label" for="transferRdo">
                      Yes
                  </label>
            </div>
              <div class="col col-lg-1">
                <input class="form-check-input" type="radio" name="transferRdo" value="2" id="flexRadioDefault2" checked="checked">
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
                <input class="form-check-input" type="radio" name="referral" value="1" id="flexRadioDefault1">
                  <label class="form-check-label" for="referral">
                      Yes
                  </label>
              </div>
              <div class="col col-lg-1">
                <input class="form-check-input" type="radio" name="referral" value="2" id="flexRadioDefault2"checked="checked">
                  <label class="form-check-label" for="referral">
                      No
                  </label>
              </div>
              </div>
        </div>

        <div class="row-auto">
          <div class="row">
          <div class="col-auto">
          <label class="form-check-label">
                   Name of Originating Hospital/Physician:
                </label>
             <input type="text" class="inputlabelunderline" name="hospPhys">
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
        
            <input type="hidden" name="arrival" value="0">
          <div class="col-auto">
          <input class="form-check-input" type="radio" name="arrival" value="1" id="arrival">
            <label class="form-check-label" for="arrival">
              Dead on Arrival
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="radio" name="arrival" value="2" id="arrivalAlive" checked="checked">
            <label class="form-check-label" for="arrivalAlive">
              Alive if alive, please check if:
            </label>
          </div>

          <input type="hidden" name="status" value="0">
          <div class="col-auto">
          <input class="form-check-input" type="radio" name="status" value="1">
            <label class="form-check-label" for="conscious">
              Conscious
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="radio" name="status" value="2" checked="checked">
            <label class="form-check-label" for="unconscious">
              Unconscious
            </label>
          </div>
          </div>

          <div class="row">
            <div class="col-auto">
              <label class="form-check-label" for="mode">
                Mode of transport to the Hospital/Facility:
              </label>
            </div>
          
          <input type="hidden" name="transpoRdo" value="0">
          <div class="col-auto">
          <input class="form-check-input" type="radio" value="1" name="transpoRdo" id="ambulance" >
            <label class="form-check-label" for="ambulance">
              Ambulance
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="radio" value="2" name="transpoRdo" id="police">
            <label class="form-check-label" for="police">
              Police vehicle
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="radio" value="3" name="transpoRdo" id="private">
            <label class="form-check-label" for="private">
              Private vehicle
            </label>
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="radio" value="4" name="transpoRdo" id="others13">
            <label class="form-check-label" for="others13">
              Others, specify
            </label>
            <input type="text" class="inputlabelunderline" name="others13">
          </div>
        </div>
        </div>
        <div class="row-auto border-bottom border-secondary">
          <div class="row">
          <div class="col-auto">
          <label class="form-check-label" for="impression">
                   Initial Impression:
                </label>
             <input type="text" class="inputlabelunderline" name="impression">
          </div>
          </div>
        </div>
        <div class="row-auto">
          <div class="row">
          <div class="col-auto">
          <label class="form-check-label" for="icdNature" >
                   ICD-10 Code/s: Nature of Injury:
                </label>
             <input type="text" class="inputlabelunderline" name="icdNature">
          </div>
          <div class="col-auto">
          <label class="form-check-label" for="icdExternal">
                   ICD-10 Code/s: External cause of Injury:
                </label>
             <input type="text" class="inputlabelunderline" name="icdExternal">
          </div>
          </div>
        </div>
        <div class="row-auto border border-secondary border-right-0 border-left-0">
          <div class="row">
          <div class="col-auto">
          <label class="form-check-label" for="treatment">
                   Treatment Given:
          </label>
          </div>
          <div class="col-auto">
                <input class="form-check-input" type="radio" value="Yes" name="treatment1" id="treatYes">
                <label class="form-check-label" for="treatYes">
                   Yes, specify
                </label>
                
          <input type="text" class="inputlabelunderline" name="treatment" >
          </div>
          <div class="col-auto">
          <input class="form-check-input" type="radio" value=" " name="treatment1" id="treatNo">
          <label class="form-check-label" for="treatNo">
                   No
                </label>
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
          </div>
          <div class="row mx-md-n5">
          <input type="hidden" name="dispoRdo" value="0">
            <div class="col-auto px-md-5">
            <input class="form-check-input" type="radio" value="1" name="dispoRdo" id="admitted" checked="true">
                <label class="form-check-label" for="admitted">
                   Admitted
                </label>
            </div>
            <div class="col-auto px-md-5">
            <input class="form-check-input" type="radio" value="2" name="dispoRdo" id="senthome">
                <label class="form-check-label" for="senthome">
                   Treated and Sent Home
                </label>
            </div>
            <div class="col-auto">
            <input class="form-check-input" type="radio" value="3" name="dispoRdo" id="transfer" >
                <label class="form-check-label" for="transfer">
                   Transferred to another facility/hospital, specify
                </label>
                <input type="text" class="inputlabelunderline" name="transferred">
            </div>
          </div>
          <div class="row mx-md-n">
            <div class="col-auto px-md-5">
            <input class="form-check-input" type="radio" value="4" name="dispoRdo" id="HAMA" >
                <label class="form-check-label" for="HAMA">
                   HAMA
                </label>
            </div>
            <div class="col-auto px-md-5">
            <input class="form-check-input" type="radio" value="5" name="dispoRdo" id="absconded" >
                <label class="form-check-label" for="absconded">
                   Absconded
                </label>
            </div>
          </div>
        </div>
        <div class="row-auto border border-secondary border-right-0 border-left-0">
        <input type="hidden" name="outcome" value="0">

          <div class="row">
          <div class="col-auto">
          <label class="form-check-label" for="outcome">
                   Outcome:
          </label>
          </div>
          <div class="col-auto">
                <input class="form-check-input" type="radio" value="1" name="outcome" id="improved" checked="true"> 
                <label class="form-check-label" for="improved">
                   Improved
                </label>
          </div>
          <div class="col-auto">
                <input class="form-check-input" type="radio" value="2" name="outcome"  id="unimproved">
                <label class="form-check-label" for="unimproved">
                   Unimproved
                </label>
          </div>
          <div class="col-auto">
                <input class="form-check-input" type="radio" value="3" name="outcome" id="died">
                <label class="form-check-label" for="died">
                   Died
                </label>
          </div>
          </div>
        </div>
        </div>
        <input type="submit" value="Save" class="btn btn-primary"></br>
    </form><br>
    <a href="{{ url('/patientform') }}" class="btn btn-secondary btn-sm" title="Add New Contact"><i class="fa fa-plus" aria-hidden="true"></i> Back</a>

        </div>
        </div>
<br>

    <script type="text/javascript">
        ( function (){
            var aidYes = document.getElementById("aidYes");
            var aidNo = document.getElementById("aidNo");
            var frstAid = document.getElementById("frstAid");

            aidYes.addEventListener('click', function (){
                if(this.checked){
                    frstAid.disabled = '';
                }else{
                    frstAid.disabled = 'false';
                }
            });
            aidNo.addEventListener('click', function (){
                if(this.checked){
                    frstAid.disabled = 'false';
                    frstAid.value = '';
                }else{
                    frstAid.disabled = '';
                }
            });
        })();
        </script>

    @stop