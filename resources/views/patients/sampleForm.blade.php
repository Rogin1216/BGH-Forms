@extends('patients.layouts')
@section('content')
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 20px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  /* padding: 10px; */
  width: 100%;
  font-size: 17px;
  /* font-family: Raleway; */
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
p{
font-size: 15px;
}
#divpink{
background-color: pink;
}
#divyellow{
background-color: #faf882;
}
#divIndigo{
background-color: #031694;
}
#divpeach{
background-color: #f0dea8;
}
.inputlabelunderline{
  border: none;
  height: auto;
  width: 150px;
}
.inputlabelunderlineYel{
  border: none;
  height: auto;
  background-color: #faf882;
  width: 150px;
}
.inputlabelunderlineName{
  border: none;
  border-bottom: 1px solid;
  height: auto;
  width: 150px;
}
.inputlabelunderlineShort{
  border: none;
  border-bottom: 1px solid;
  height: auto;
  width: 90px;
}
.inputlabelunderlineShort1{
  border: none;
  border-bottom: 1px solid;
  background-color: #f0dea8;
  height: auto;
  width: 80px;
}
.inputlabelunderline,.inputlabelunderlineYel,.inputlabelunderlineName,.inputlabelunderlineShort,.inputlabelunderlineShort1:focus:focus{
  outline: none;
}
/*===== GOOGLE FONTS =====*/
@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap");
/*===== VARIABLES CSS =====*/
:root{
  /*===== Colores =====*/
  --first-color: #1A73E8;
  --input-color: #80868B;
  --border-color: #DADCE0;

  /*===== Fuente y tipografia =====*/
  --body-font: 'Roboto', sans-serif;
  --normal-font-size: 1rem;
  --small-font-size: .75rem;
}
  
/*===== BASE =====*/
*,::before,::after{
  box-sizing: border-box;
}
body{
  margin: 0;
  padding: 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
}
h1{
  margin: 0;
}

/*===== FORM =====*/
.l-form{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
.form{
  width: 360px;
  padding: 4rem 2rem;
  border-radius: 1rem;
  box-shadow: 0 10px 25px rgba(92,99,105,.2);
}
.form__title{
  font-weight: 400;
  margin-bottom: 3rem;
}
.form__div{
  position: relative;
  height: 48px;
  margin-bottom: 1.5rem;
}
.form__input{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  font-size: var(--normal-font-size);
  border: 1px solid var(--border-color);
  border-radius: .5rem;
  outline: none;
  padding: 1rem;
  background: none;
  z-index: 1;
}
.form__label{
  position: absolute;
  left: 1rem;
  top: 1rem;
  padding: 0 .25rem;
  background-color: #faf882;
  color: var(--input-color);
  font-size: var(--normal-font-size);
  transition: .3s;
}
.form__button{
  display: block;
  margin-left: auto;
  padding: .75rem 2rem;
  outline: none;
  border: none;
  background-color: var(--first-color);
  color: #fff;
  font-size: var(--normal-font-size);
  border-radius: .5rem;
  cursor: pointer;
  transition: .3s;
}
.form__button:hover{
  box-shadow: 0 10px 36px rgba(0,0,0,.15);
}

/*Input focus move up label*/
.form__input:focus + .form__label{
  top: -.5rem;
  left: .8rem;
  color: var(--first-color);
  font-size: var(--small-font-size);
  font-weight: 500;
  z-index: 10;
}

/*Input focus sticky top label*/
.form__input:not(:placeholder-shown).form__input:not(:focus)+ .form__label{
  top: -.5rem;
  left: .8rem;
  font-size: var(--small-font-size);
  font-weight: 500;
  z-index: 10;
}

/*Input focus*/
.form__input:focus{
  border: 1.5px solid var(--first-color);
}
</style>
<body>

<!-- <form id="regForm" action="/action_page.php"> -->
  <!-- One "tab" for each step in the form: -->
<div class="tab">    
@foreach($patinfo as $patients)
<form action="{{ url ('/store') }}" type="get" >
<div class="container border border-secondary"><!-- start logo header --> 
    <div class="row "> 
        <div class="col-auto">
             <img src="{{ asset('images/bghmc-logo.png') }}" class="rounded float-left align-items-center" alt="..." width="150px" height="150px">
        </div>
        <div class="col">
            <div class="row">
                <div class="col h-5 border-start border-secondary d-flex justify-content-start">
                    
                    <img src="{{ asset('images/DOH-logo.png') }}" class="rounded float-left" alt="..." width="70px" height="70px">
                    <img src="{{ asset('images/kp-logo.png') }}" class="rounded float-left" alt="..." width="70px" height="70px">
                    <pre>
                        <b>Republic of the Philippines
                            Department of Health
                  BAUGIO GENERAL HOSPITAL AND MEDICAL CENTER
                                Baguio City</b>
                    </pre>
                </div>
            </div>
            
            <div class="row border border-secondary border-end-0 border-bottom-0">
                <div class="col col-lg-8">
                    <center><h6>CANCER CENTER</h6></center>
                    <center><i>INTEGRATED PATIENT DATA FILE AND CANCER REGISTRY</i></center> 
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col border border-secondary border-top-0 ">
                            Doc no.
                        </div>
                        <div class="col col-lg-6 border-bottom border-secondary">
                            <input type="text" class="inputlabelunderline" name="docNo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col border border-secondary border-top-0">
                            Rev no.
                        </div>
                        <div class="col col-lg-6 border-bottom border-secondary ">
                            <input type="text" class="inputlabelunderline" name="revNo">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col border border-secondary border-top-0 border-bottom-0">
                            Effectivity date:
                        </div>
                        <div class="col col-lg-6 ">
                            <input type="text" class="inputlabelunderline" name="effectDate">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div><!-- end logo header --> 

<div class="container"><!-- start general data -->
    <div class="row"> 
        
            <div class="col text-white" id="divIndigo">
                GENERAL DATA
            </div>
            
            

    </div>
    
    <div class="row">
        <div class="col col-lg-3 border-start border-top border-secondary" id="divyellow">
            <p><b>Name of Reporting Health Facility</b></p>
            <div class="row">
                <div class="col">
                    <p> <i>(auto-generated)</i> </p>
                </div>
            </div>
            
        </div>
        <div class="col col-lg-2 border border-bottom-0 border-secondary form-outline" id="divyellow">

                <p><b>Hpercode:</b></p>
                <label for=""> <i>(auto-generated)</i> </label>

        </div>
            <div class="col-auto border-top border-secondary">
                Hospital Case.
            </div>
            <div class="col-auto border-top border-secondary">
                    <label for=""> <i>(auto-generated)</i> </label>
            </div>

        <div class="col border border-bottom-0 border-secondary" id="divyellow">
            <p><b>Type of Patient</b></p>
            <div class="row">
                <div class="col text-black">
                        <input class="form-check-input" type="radio" value="" name="toP" id="opd">
                        <label class="form-check-label" for="opd">
                            OPD
                        </label>
                </div>  
                <div class="col text-black">
                        <input class="form-check-input" type="radio" name="toP" value="" id="pat">
                        <label class="form-check-label" for="pat">
                            In Patient
                        </label>
                </div> 
            </div>
        </div>
            
    </div>

    <div class="row">
        <div class="col col-lg-6 border-top border-start border-secondary">
            <b>Name of Patient</b>
            <div class="row">
                <div class="col">
                    <input type="text" class="inputlabelunderlineName" name="patLast" value="{{$patients->patlast}}">
                </div>
                <div class="col">
                    <input type="text" class="inputlabelunderlineName" name="patFirst" value="{{$patients->patfirst}}" >
                </div>
                <div class="col">
                    <input type="text" class="inputlabelunderlineName" name="patMiddle" value="{{$patients->patmiddle}}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="small">last name</p> 
                </div>
                <div class="col">
                    <p class="small">First name (inlcude suffix)</p>
                </div>
                <div class="col">
                    <p class="small">Middle name</p>
                </div>
            </div>
        </div>
        <div class="col col-lg-2 border border-bottom-0 border-end-0 border-secondary">
            <b>Sex:</b>
            <div class="row">
                <div class="col">
                        <input class="form-check-input" type="radio" value="1" name="sex" id="female">
                        <label class="form-check-label" for="female">
                            Female
                        </label>
                </div>  
            </div>
            <div class="row">
                <div class="col">
                        <input class="form-check-input" type="radio" value="2" name="sex" id="male">
                        <label class="form-check-label" for="male">
                            Male
                        </label>
                </div>  
            </div>
        </div>

        <div class="col border border-bottom-0 border-secondary">
            <b>Civil Status:</b>
            <div class="row">
                <div class="col">
                    <input class="form-check-input" type="radio" value="2" name="status" id="single">
                    <label class="form-check-label" for="single">
                        Single
                    </label>
                    <input class="form-check-input" type="radio" value="2" name="status" id="habit">
                    <label class="form-check-label" for="habit">
                        Co-Habitation
                    </label>
                    <input class="form-check-input" type="radio" value="2" name="status" id="separated">
                    <label class="form-check-label" for="separated">
                        Separated
                    </label>
                    <div class="row">
                        <div class="col">
                        <input class="form-check-input" type="radio" value="2" name="status" id="widow">
                            <label class="form-check-label" for="widow">
                                Widow/e
                            </label>
                        </div>
                        <div class="col">
                        <input class="form-check-input" type="radio" value="2" name="status" id="married">
                            <label class="form-check-label" for="married">
                                Married
                            </label>
                        </div>
                        <div class="col">
                            <input class="form-check-input" type="checkbox" value="2" name="status1" id="annul">
                            <label class="form-check-label" for="annul">
                                Anulled
                            </label>
                            <div class="row">
                                <div class="col">
                                <input class="form-check-input" type="checkbox" value="2" name="status1" id="divorced">
                                <label class="form-check-label" for="divorced">
                                    Divorced
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <b>Mother's Maiden Name</b>
                </div>
            </div>
            <div class="row">
                <div class="col-auto">
                    <input type="text" class="inputlabelunderlineName">
                    <div class="row">
                        <div class="col">
                            <label for="">Last name</label>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <input type="text" class="inputlabelunderlineName">
                    <div class="row">
                        <div class="col">
                            <label for="">First Name</label>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <input type="text" class="inputlabelunderlineName">
                    <div class="row">
                        <div class="col">
                            <label for="">Middle  Name</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-10 border border-secondary">
            <b>Address</b>
            <div class="row">
                <div class="col">
                    <input type="text" class="inputlabelunderlineName" name="patNoSt">
                </div>
                <div class="col">
                    <input type="text" class="inputlabelunderlineName" name="patReg">
                </div>
                <div class="col">
                    <input type="text" class="inputlabelunderlineName" name="patProv">
                </div>
                <div class="col">
                    <input type="text" class="inputlabelunderlineName" name="patCity">
                </div>
                <div class="col">
                    <input type="text" class="inputlabelunderlineName" name="patBrngy">
                </div>
                <div class="col">
                    <input type="text" class="inputlabelunderlineName" name="patZip">
                </div>
            </div>
            <div class="row">
                <div class="col">
                        <label class="form-check-label" for="">
                            <p class="small">Number & Street Name</p>
                        </label>
                </div>
                <div class="col">
                        <label class="form-check-label" for="">
                           <p class="small">Region</p> 
                        </label>
                </div>
                <div class="col">
                        <label class="form-check-label" for="">
                            <p class="small">Province</p> 
                        </label>
                </div>
                <div class="col">
                        <label class="form-check-label" for="">
                            <p class="small">City/Municipality</p>
                        </label>
                </div>
                <div class="col">
                        <label class="form-check-label" for="">
                            <p class="small">Barangay</p> 
                        </label>
                </div>
                <div class="col">
                        <label class="form-check-label" for="">
                            <p class="small">Zip Code</p>  
                        </label>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row border-top border-end border-secondary">
                <div class="col">
                    <b>Landline/Mobile #:</b> 
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="inputlabelunderline" name="patNum" placeholder="---">
                    </div>
                </div>
            </div>
            <div class="row border border-start-0 border-secondary">
                <div class="col">
                    <b>Email address:</b> 
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="inputlabelunderline" name="patEmail" placeholder="---">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col border-start border-end border-secondary">
                Birthday:
                <input type="date" name="patBday">
        </div>
        <div class="col">
            Place of birth
            <div class="row">
                <div class="col">
                    <input type="text" name="patEth" class="inputlabelunderline">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        
        <div class="col">
            Nationality:
            <div class="row">
                <div class="col">
                    <input type="text" name="patEth" class="inputlabelunderline">
                </div>
            </div>
        </div>
        <div class="col">
            Ethnicity:
            <div class="row">
                <div class="col">

                </div>
            </div>
        </div>
        <div class="col">
            PhilHealth #
            <div class="row">
                <div class="col">
                    <input type="text" name="patPhilH" class="inputlabelunderline">
                </div>
            </div>
        </div>
        <div class="col">
            Unified Multi-Purpose ID #
            <div class="row">
                <div class="col">
                    <input type="text" name="patUniID" class="inputlabelunderline">
                </div>
            </div>
        </div>
    </div>
</div> <!-- end general data -->

<div class="container"> <!-- start personal,occupational,medical  -->
    <div class="row border border-secondary">
        <!-- first panel -->
        <div class="col">
            <div class="row">
                <div class="col text-white" id="divIndigo">
                    <b>PERSONAL AND SOCIAL HISTORY</b>
                </div>
            </div>
            <div class="row">
                
            <div class="col border-end border-secondary">
                    <div class="row">
                        <div class="col-auto">
                            <b>Smoking History:</b>
                        </div>
                        <div class="col ">
                            <input class="form-check-input" type="radio" value="" name="smking" id="smkNO">
                            <label class="form-check-label" for="smkNO">
                                NO
                            </label>
                            <div class="row">
                                <div class="col-auto">
                                <input class="form-check-input" type="radio" value="" name="smking" id="smkYES">
                                    <label class="form-check-label" for="smkYES">
                                        YES
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="form-check-label" for="">
                                        if yes:
                                    </label>
                                    <div class="row">
                                        <div class="col col-lg-2">
                                            <label for=""> </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            if yes: 
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" value="" name="ifyes" id="current">
                                            <label class="form-check-label" for="current">
                                                current
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" value="" name="ifyes" id="stopped">
                                            <label class="form-check-label" for="stopped">
                                                stopped
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="inputlabelunderlineShort" name="patPackYr" placeholder="pack/year" value="{{$patients->patPackYr}}"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-auto ">
                        <b>Second Hand Smoke (SHS)</b>
                    </div>
                    <div class="col">
                            <input class="form-check-input" type="radio" value="" name="ssmk" id="sNo">
                            <label class="form-check-label" for="sNo">
                                NO
                            </label>
                            <div class="row">
                                <div class="col">
                                <input class="form-check-input" type="radio" value="" name="ssmk" id="sYes">
                                <label class="form-check-label" for="sYes">
                                    YES
                                </label>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <b>Alcohol intake:</b>
                    </div>
                    <div class="col-auto">
                            <input class="form-check-input" type="radio" value="" name="ssmk" id="alcoNo">
                            <label class="form-check-label" for="alcoNo">
                                NO
                            </label>
                            <div class="row">
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="" name="ssmk" id="alcoYes">
                                    <label class="form-check-label" for="alcoYes">
                                        YES
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <label class="form-check-label" for="">
                                        if yes:
                                    </label>
                                    <div class="row">
                                        <div class="col col-lg-2">
                                            <label for=""> </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            if yes: 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="" name="salco" id="intakeCur">
                                    <label class="form-check-label" for="intakeCur">
                                        current
                                    </label>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="radio" value="" name="salco" id="intakeStop">
                                            <label class="form-check-label" for="intakeStop">
                                                stopped
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="inputlabelunderlineShort" name="patDriYr" placeholder="drinks/day" value="{{$patients->patDriYr}}"> 
                                            </div>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <b>Sexual History:</b>
                    </div>
                    <div class="col">
                        <label for="">Sexually active</label>
                        <input class="form-check-input" type="radio" value="" name="sAct" id="activeYes">
                        <label class="form-check-label" for="activeYes">
                            NO
                        </label>
                        <input class="form-check-input" type="radio" value="" name="sAct" id="activeNo">
                        <label class="form-check-label" for="activeNo">
                            YES
                        </label>
                        <div class="row">
                            <div class="col">
                                <label for=""># of sexual partners:</label>
                                <input type="text" class="inputlabelunderlineShort" name="patNumSex" value="{{$patients->patNumSex}}"> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <b>Average Monthly Family Income:</b>
                        <input type="text" class="inputlabelunderlineShort" name="patAvgInc" value="{{$patients->patAvgInc}}"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <b>Means of Health Expenditure:</b>
                        <input type="text" class="inputlabelunderlineName" name="patMeansEx" value="{{$patients->patMeansEx}}"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        Vaccine:
                        <div class="row">
                        <div class="col">
                            HepB 
                            
                        </div>
                        <div class="col">
                        <input class="form-check-input" type="checkbox" value="" name="vacHepB" id="vacHepB">
                        </div>
                        <div class="col-auto">
                            HPV
                        </div>
                        <div class="col">
                            <input class="form-check-input" type="checkbox" value="" name="vacHpv" id="vacHpv">
                        </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-auto">
                        <small>(Out of pocket,family support, Philhealth, Private Insurance, DSWD,PCSO others, LGU)</small>
                    </div>
                </div>

                </div>
            </div>
        </div>
 
        <!-- second panel -->
        <div class="col">
            <div class="row">
                <div class="col text-white" id="divIndigo">
                   <b>OCCUPATIONAL/ENVIRONMENTAL HISTORY</b> 
                </div>
            </div>
            <div class="row">
        <div class="col">
                    <input class="form-check-input" type="radio" value="" name="occHis" id="occNo">
                        <label class="form-check-label" for="occNo">
                            NO
                        </label>
                        <div class="row">
                            <div class="col">
                            <input class="form-check-input" type="radio" value="" name="occHis" id="occYes">
                                <label class="form-check-label" for="occYes">
                                    YES
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                If yes:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <b>Exposure to:</b>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="" name="expTo" id="vapor">
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="vapor">
                                    Chemicals/vapors
                                    <input type="text" class="inputlabelunderlineShort" name="patChemVap" value="{{$patients->patChemVap}}" placeholder="specify">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="" name="expTo" id="pest">
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="pest">
                                    Pesticides/Insescticides
                                    <input type="text" class="inputlabelunderlineShort" name="patPestIns" value="{{$patients->patPestIns}}" placeholder="specify">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="" name="expTo" id="dyes">
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="dyes">
                                    Dyes
                                    <input type="text" class="inputlabelunderlineShort" name="patDyes" value="{{$patients->patDyes}}" placeholder="specify">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="" name="expTo" id="others1">
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="others1">
                                    Others:
                                    <input type="text" class="inputlabelunderlineShort" name="patOther1" value="{{$patients->patOther1}}" placeholder="specify">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <b>Longest Job Held:</b>
                                <input type="text" class="inputlabelunderlineName" name="patLongJob" value="{{$patients->patLongJob}}">
                            </div>
                        </div>
                </div>
            </div>
        </div>


        <!-- third panel -->
        <div class="col border border-secondary border-bottom-0 border-end-0 ">
            <div class="row">
                <div class="col text-white" id="divIndigo">
                    <b>OTHER MEDICAL CONDITIONS</b>
                </div>
            </div>
            <div class="row">
            <div class="col">
                    <input class="form-check-input" type="radio" value="" name="medCon" id="medNo">
                        <label class="form-check-label" for="medNo">
                            NO
                        </label>
                        <div class="row">
                            <div class="col">
                            <input class="form-check-input" type="radio" value="" name="medCon" id="medYes">
                                <label class="form-check-label" for="medYes">
                                    YES
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                If yes:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="" name="meds" id="diaMell">
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="diaMell">
                                    Diabetes mellitus 
                                    <input type="text" class="inputlabelunderlineShort" name="patDiaMell" value="{{$patients->patDiaMell}}" placeholder="medication">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="" name="meds" id="hyTen">
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="hyTen">
                                    Hypertension
                                    <input type="text" class="inputlabelunderlineShort" name="patHype" value="{{$patients->patHype}}" placeholder="medication">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="" name="meds" id="carDis">
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="carDis">
                                    Cardiovascular Disease
                                    <input type="text" class="inputlabelunderlineShort" name="patCarDis" value="{{$patients->patCarDis}}" placeholder="medication">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="" name="meds" id="cerDis">
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="cerDis">
                                    Cerebrovascular Disease
                                    <input type="text" class="inputlabelunderlineShort" name="patCerDis" value="{{$patients->patCerDis}}"  placeholder="medication">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="" name="meds" id="likiDis">
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="likiDis">
                                    Liver/Kidney Disease
                                    <input type="text" class="inputlabelunderlineShort" name="patLivDis" value="{{$patients->patLivDis}}" placeholder="medication">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="" name="meds" id="std">
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="std">
                                    STD
                                    <input type="text" class="inputlabelunderlineShort" name="patStd" value="{{$patients->patStd}}" placeholder="medication">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input class="form-check-input" type="checkbox" value="" name="meds" id="others2">
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="others2">
                                    Others:
                                    <input type="text" class="inputlabelunderlineShort" name="patOther2" value="{{$patients->patOther2}}" placeholder="medication">
                                </label>
                            </div>
                        </div>
                        
                </div>
        </div>
        </div>
    </div>
</div><!-- end personal,occupational,medical  -->

<div class="container"><!-- start female subj -->
    <div class="row">
        <div class="col col-lg-7 border-end border-start border-secondary">
            <div class="row">
                <div class="col text-white" id="divIndigo">
                    FOR FEMALE SUBJECTS
                </div>
                <div class="row">
                    <div class="col col-sm-7 border-end border-secondary">
                        <b>Gynecological History:</b>
                        <div class="row">
                            <div class="col">
                            Age of menarche:<input type="text" class="inputlabelunderlineShort" name="femMenarAge" value="{{$patients->femMenarAge}}">years old
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                            Menstrual status: 
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="radio" value="" name="mensStatus" id="preMeno">
                                <label for="preMeno">Premenopausal</label> 
                                <div class="row">
                                    <div class="col">
                                    <input class="form-check-input" type="radio" value="" name="mensStatus" id="postMeno">
                                    <label for="postMeno">PostMenopausal</label> 
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        Age of menopause:<input type="text" class="inputlabelunderlineShort" name="femMenopAge" value="{{$patients->femMenopAge}}">
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                Cause:
                                            </div>
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" value="" name="natural" id="natural">
                                                <label for="natural">Natural</label>
                                                <div class="row">
                                                    <div class="col">
                                                        <input class="form-check-input" type="checkbox" value="" name="surg" id="surg">
                                                        <label for="surg">Surgical</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="radia" id="radia">
                                                <label for="radia">Radiation</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input class="form-check-input" type="checkbox" value="" name="mensMed" id="mensMed">
                                                            <label for="mensMed">Medical</label>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                Contraceptive use:
                            </div>
                            <div class="col-auto">
                                <input class="form-check-input" type="radio" value="" name="contraceptives" id="contraNo">
                                <label for="contraNo">NO</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="radio" value="" name="contraceptives" id="contraYes">
                                <label for="contraYes">YES</label>
                                <div class="row">
                                    <div class="col">
                                        If yes, duration of use:
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="inputlabelunderlineShort" name="femContra" value="{{$patients->femContra}}">Months
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <b>OB History:</b>
                        <div class="row">
                            <div class="col">
                                <input class="form-check-input" type="radio" value="" name="bioChild" id="bioNo">
                                <label for="bioNo">NO Biological Child</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input class="form-check-input" type="radio" value="" name="bioChild" id="bioYes">
                                <label for="bioYes">With child, if with child:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                Age at 1<sup>st</sup> live birth: <input type="text" class="inputlabelunderlineShort" name="fem1stBirth" value="{{$patients->fem1stBirth}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <label class="mr-sm-2" for="inputState">if currently pregnant:</label>
                                    <div class="row">
                                        <div class="col">
                                            <select id="inputState" class="custom-select mr-sm-2" name="femCurPreg">
                                                <option selected>1<sup>st</sup> trimester</option>
                                                <option >2<sup>nd</sup> trimester</option>
                                                <option >3<sup>rd</sup> trimester</option>
                                            </select>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col border-end border-secondary">
            <div class="row">
                <div class="col" id="divyellow">
                   <b>FAMILY HISTORY OF CANCER</b> 
                </div>
                <div class="row">
                    <div class="col">
                        <input class="form-check-input" type="radio" value="" name="cancHis" id="cancNo">
                        <label for="cancNo">NO Family history of cancer</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="form-check-input" type="radio" value="" name="cancHis" id="cancYes">
                        <label for="cancYes">With Family history of cancer, if yes:</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- end female subj -->

<!-- infection panel -->
<div class="container">
    <div class="row">
        <div class="col border border-secondary">
            <div class="row">
                <div class="col text-white" id="divIndigo">
                    <b>INFECTIONS</b> (if applicable)
                </div>
            </div>
            <div class="row">
                <div class="col col-md-3">
                    <input class="form-check-input" type="checkbox" value="" name="infect" id="huPaViIn">
                    <label for="huPaViIn">Human Papilloma Virus Infection</label>
                </div>
                <div class="col">
                    <label for="">Year Examined/Dx:</label>
                    <input type="text" class="inputlabelunderline" name="infHuPap" placeholder="---" value="{{$patients->infHuPap}}">
                </div>
                <div class="col col-md-3">
                    <input class="form-check-input" type="checkbox" value="" name="infect" id="HepaB">
                    <label for="HepaB">Hepatitis B Viurs Infection</label>
                </div>
                <div class="col">
                    <label for="">Year Examined/Dx:</label>
                    <input type="text" class="inputlabelunderline" name="infHepaB" placeholder="---" value="{{$patients->infHepaB}}">
                </div>
            </div>
            <div class="row border-top border-secondary">
                <div class="col col-md-3">
                    <input class="form-check-input" type="checkbox" value="" name="infect" id="hePyInf">
                    <label for="hePyInf">Helicobacter Pylori Infection</label>
                </div>
                <div class="col">
                    <label for="">Year Examined/Dx:</label>
                    <input type="text" class="inputlabelunderline" name="infHeliPy" placeholder="---" value="{{$patients->infHeliPy}}">
                </div>
                <div class="col col-md-3">
                    <input class="form-check-input" type="checkbox" value="" name="infect" id="otherInfect">
                    <label for="otherInfect">Others, specify</label>
                </div>
                <div class="col">
                    <label for="">Year Examined/Dx:</label>
                    <input type="text" class="inputlabelunderline" name="infOthers" placeholder="---" value="{{$patients->infOthers}}"> 
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-4 border-end border-top border-secondary">
                    Height:
                    <input type="text" class="inputlabelunderlineShort" name="patHeight" value="{{$patients->patHeight}}">
                    cms
                </div>
                <div class="col col-lg-4 border-end border-top border-secondary">
                    Weight:
                    <input type="text" class="inputlabelunderlineShort" name="patWeight" value="{{$patients->patWeight}}">
                    cms
                </div>
                <div class="col col-lg-4 border-top border-secondary" id="divpeach">
                    BSA:
                    <input type="text" class="inputlabelunderlineShort1" name="patBsa" value="{{$patients->patBsa}}">
                    
                </div>
            </div>

        </div>
    </div>
    </div>

    <br>
</div>
    <!-- second tab  -->
  <div class="tab">
<p class="h2 text-center text-danger">THIS POINT FORWARD C/O PHYSICIAN-IN-CHARGE COMPLETELY</p>
<div class="container border border-secondary">
    <!-- cancer data panel -->
        <div class="row">
        <div class="col">
            <div class="row">
                <div class="col text-white" id="divIndigo">
                    <b>CANCER DATA</b>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <b>Referred from region/province:</b>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="inputlabelunderlineName" name="cancRefer" value="{{$patients->cancRefer}}">
                        </div>
                    </div>
                </div>
                <div class="col border-start border-secondary">
                    <b>Name of</b>
                    <div class="row">
                        <div class="col">
                            <b>Referring Health Facility:</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="inputlabelunderlineName" name="cancRefFac" value="{{$patients->cancRefFac}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Doctor/Health Care Professional:</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="inputlabelunderlineName" name="cancDocProf" value="{{$patients->cancDocProf}}">
                        </div>
                    </div>
                </div>
                <div class="col col-lg-6 border-start border-secondary">
                    <b>Reason for Referral</b>
                    <div class="row">
                        <div class="col col-lg-5">
                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="reasFin">
                            <label for="reasFin">Financial Constraint</label>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="reasNoRo">
                                    <label for="reasNoRo">No room available</label>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="reasOp">
                                            <label for="reasOp">Seek advice/2<sup>nd</sup> opinion</label>
                                            <div class="row">
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="reasEval">
                                                    <label for="reasEval">Seek specialized evaluation</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="reasNodoc">
                            <label for="reasNodoc">No available doctor</label>
                                <div class="row">
                                    <div class="col">
                                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="reasNoLab">
                                        <label for="reasNoLab">No laboratory available</label>
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="reasSeek">
                                                <label for="reasSeek">Seek further treatment appropriate to case</label>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col border border-start-0 border-secondary">
                    <b>Date of Consultation/Admission:</b>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="inputlabelunderlineName" name="cancDateAdm" value="{{$patients->cancDateAdm}}">
                        </div>
                    </div>
                </div>
                <div class="col border-top border-bottom border-secondary">
                    <b>Chief Complaint:</b>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="inputlabelunderlineName" name="cancComp" value="{{$patients->cancComp}}">
                            </div>
                        </div>
                </div>
                <div class="col col-lg-6 border border-secondary border-end-0">
                     <b>Date of Diagnosis(Clinical or pathologic):</b><input type="text" class="inputlabelunderlineName" name="diagDate" value="{{$patients->diagDate}}">
                    <div class="row">
                        <div class="col">
                            <b>Type of Diagnosis</b>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagNew">
                                    <label for="diagNew">New</label>
                                    
                                </div>
                                
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagRetreat">
                                    <label for="diagRetreat">Retreatment</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagNotTreat">
                                    <label for="diagNotTreat">Not treated</label>
                                </div>
                                <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagUnkwn">
                                            <label for="diagUnkwn">Unknown Treatment</label>
                                            <div class="row">  
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagInc">
                                                    <label for="diagInc">Incomplete treatment, now progressive</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagCom">
                                                            <label for="diagCom">Completed First treatment now recurrent</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col border-end border-secondary">
                    <b>Previous diagnosis of cancer:</b>
                    <div class="row">
                        <div class="col">
                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagCancNo">
                            <label for="diagCancNo">NO</label>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagCancYes">
                                    <label for="diagCancYes">YES</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-9">
                    <label for="">if YES:</label>
                    <div class="row">
                        <div class="col">
                            Primary site 
                            <div class="row">
                                <div class="col ">
                                    </b><input type="text" class="inputlabelunderlineName" name="diagCancPrim" value="{{$patients->diagCancPrim}}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            Date of Diagnosis
                            <div class="row">
                                <div class="col">
                                    </b><input type="text" class="inputlabelunderlineName" name="diagCancDate" value="{{$patients->diagCancDate}}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            Treatment recieved
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagCancChemo">
                                    <label for="diagCancChemo">Chemotherapy</label>
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagCancSurg">
                                    <label for="diagCancSurg">Surgery</label>
                                    <div class="row">
                                        <div class="col">
                                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagCancRad">
                                        <label for="diagCancRad">Radiation</label>
                                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagCancHorm">
                                        <label for="diagCancHorm">Hormonal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagCancNone">
                                            <label for="diagCancNone">None</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            Outcome
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagCancRemi">
                                    <label for="diagCancRemi">Remission</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="diagCancProg">
                                    <label for="diagCancProg">Progressive disease</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- PRIMARY CURRENT CANCER SITE panel -->
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col border-top border-bottom border-secondary" id="divLightblue">
                    <b>PRIMARY CURRENT CANCER SITE/DIAGNOSIS</b>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col col-lg-8">
                            <div class="row">
                            <div class="col border-end border-secondary">
                            <div class="row">
                                <div class="col" id="divpeach">
                                    Solid Tumors:
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-lg-7 border-top border-secondary">
                                    <div class="row"> 
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumAnal">
                                            <label for="tumAnal">Anal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumBone">
                                            <label for="tumBone">Bone</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumBreast">
                                            <label for="tumBreast">Breast</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumCerv">
                                            <label for="tumCerv">Cervical</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumCol">
                                            <label for="tumCol">Colon</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumEso">
                                            <label for="tumEso">tumEsophageal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumGas">
                                            <label for="tumGas">Gastric</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumHeadNeck">
                                            <label for="tumHeadNeck">Head and Neck, specify</label>
                                            <input type="text" class="inputlabelunderlineName" name="tumHeadNeck" value="{{$patients->tumHeadNeck}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumHepato">
                                            <label for="tumHepato">Hepatobiliary, specify</label>
                                            <input type="text" class="inputlabelunderlineName" name="tumHepato" value="{{$patients->tumHepato}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumKid">
                                            <label for="tumKid">Kidney</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumNeuro">
                                            <label for="tumNeuro">Neuroendocrine, site</label>
                                            <input type="text" class="inputlabelunderlineName" name="tumNeuro" value="{{$patients->tumNeuro}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumLung">
                                            <label for="tumLung">Lung:</label>
                                            <input type="text" class="inputlabelunderlineShort" name="tumLungNSC" value="{{$patients->tumLungNSC}}">
                                            <label for="tumLungNSC">NSCLC</label>
                                            <input type="text" class="inputlabelunderlineShort" name="tumLungSCL" value="{{$patients->tumLungSCL}}">
                                            <label for="tumLungSCL">SCLC</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col border-start border-top border-secondary">
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumOva">
                                            <label for="tumOva">Ovarian</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumPanc">
                                            <label for="tumPanc">Pancreatic</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumPros">
                                            <label for="tumPros">Prostate</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumRec">
                                            <label for="tumRec">Rectal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumSkin">
                                            <label for="tumSkin">Skin</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumSoftTis">
                                            <label for="tumSoftTis">Soft tissue</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumTes">
                                            <label for="tumTes">Testis</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumThy">
                                            <label for="tumThy">Thyroid</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumBladd">
                                            <label for="tumBladd">Urinary Bladder</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumUter">
                                            <label for="tumUter">Uterine</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tumOther">
                                            <label for="tumOther">Others:</label>
                                            <input type="text" class="inputlabelunderlineShort" name="tumOther" value="{{$patients->tumOther}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col border-bottom border-secondary"id="divpeach">
                                Hematolymphoid malignancies:
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="hemaAll">
                                    <label for="hemaAll">ALL</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="hemaB">
                                    <label for="hemaB">B-cell</label>
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="hemaT">
                                    <label for="hemaT">T-cell</label>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="hemaAML">
                                    <label for="hemaAML">AML</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="hemaBly">
                                    <label for="hemaBly">B-lymphoma ,specify</label>
                                    <input type="text" class="inputlabelunderlineName" name="hemaBlyInput" value="{{$patients->hemaBlyInput}}">
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="hemaHod">
                                    <label for="hemaHod">Hodgkin Lymphoma</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="hemaMDS">
                                    <label for="hemaMDS">MDS ,specify</label>
                                </div>
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" name="hemaCMLinput" value="{{$patients->hemaCMLinput}}">
                                    <label for="hemaMDS">CML</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="inputlabelunderlineShort" name="hemaPVinput" value="{{$patients->hemaPVinput}}">
                                            <label for="hemaMDS">PV</label>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="inputlabelunderlineShort" name="hemaETinput" value="{{$patients->hemaETinput}}">
                                                    <label for="hemaMDS">ET</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="inputlabelunderlineShort" name="hemaMFinput" value="{{$patients->hemaMFinput}}">
                                                            <label for="hemaMDS">MF</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="hemaTlym">
                                    <label for="hemaTlym">T-lymphoma</label>
                                    <input type="text" class="inputlabelunderlineName" name="hemaTinput" value="{{$patients->hemaTinput}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="hemaOthers">
                                    <label for="hemaOthers">Others:</label>
                                    <input type="text" class="inputlabelunderlineName" name="hemaOthersinput" value="{{$patients->hemaOthersinput}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONCURRENT CANCER SITE/DIAGNOSIS (IF APPLICABLE) -->
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col border-top border-bottom border-secondary" id="divLightblue">
                    <b>CONCURRENT CANCER SITE/DIAGNOSIS (IF APPLICABLE)</b>
                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="NA" checked>
                    <label for="NA" ><b>N/A</b> </label>
                </div>
            </div>
            <div class="row" id="NAdiv">
                <div class="col">
                    <div class="row">
                        <div class="col col-lg-8">
                            <div class="row">
                            <div class="col border-end border-secondary">
                            <div class="row">
                                <div class="col" id="divpeach">
                                    Solid Tumors:
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-lg-7 border-top border-secondary">
                                    <div class="row"> 
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumAnal">
                                            <label for="contumAnal">Anal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumBone">
                                            <label for="contumBone">Bone</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumBreast">
                                            <label for="contumBreast">Breast</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumCerv">
                                            <label for="contumCerv">Cervical</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumCol">
                                            <label for="contumCol">Colon</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumEso">
                                            <label for="contumEso">tumEsophageal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumGas">
                                            <label for="contumGas">Gastric</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumHeadNeck">
                                            <label for="contumHeadNeck">Head and Neck, specify</label>
                                            <input type="text" class="inputlabelunderlineName" name="contumHeadNeck" value="{{$patients->contumHeadNeck}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumHepato">
                                            <label for="contumHepato">Hepatobiliary, specify</label>
                                            <input type="text" class="inputlabelunderlineName" name="contumHepato" value="{{$patients->contumHepato}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumKid">
                                            <label for="contumKid">Kidney</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumNeuro">
                                            <label for="contumNeuro">Neuroendocrine, site</label>
                                            <input type="text" class="inputlabelunderlineName" name="contumNeuro" value="{{$patients->contumNeuro}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumLung">
                                            <label for="contumLung">Lung:</label>
                                            <input type="text" class="inputlabelunderlineShort" name="contumLungNSC" value="{{$patients->contumLungNSC}}">
                                            <label for="contumLungNSC">NSCLC</label>
                                            <input type="text" class="inputlabelunderlineShort" name="contumLungSCL" value="{{$patients->contumLungSCL}}">
                                            <label for="contumLungSCL">SCLC</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col border-start border-top border-secondary">
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumOva">
                                            <label for="contumOva">Ovarian</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumPanc">
                                            <label for="contumPanc">Pancreatic</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumPros">
                                            <label for="contumPros">Prostate</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumRec">
                                            <label for="contumRec">Rectal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumSkin">
                                            <label for="contumSkin">Skin</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumSoftTis">
                                            <label for="contumSoftTis">Soft tissue</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumTes">
                                            <label for="contumTes">Testis</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumThy">
                                            <label for="contumThy">Thyroid</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumBladd">
                                            <label for="contumBladd">Urinary Bladder</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumUter">
                                            <label for="contumUter">Uterine</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="contumOther">
                                            <label for="contumOther">Others:</label>
                                            <input type="text" class="inputlabelunderlineShort" name="contumOther" value="{{$patients->contumOther}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col border-bottom border-secondary"id="divpeach">
                                Hematolymphoid malignancies:
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="conhemaAll">
                                    <label for="conhemaAll">ALL</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="conhemaB">
                                    <label for="conhemaB">B-cell</label>
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="conhemaT">
                                    <label for="conhemaT">T-cell</label>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="conhemaAML">
                                    <label for="conhemaAML">AML</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="conhemaBly">
                                    <label for="conhemaBly">B-lymphoma ,specify</label>
                                    <input type="text" class="inputlabelunderlineName" name="conhemaBlyInput" value="{{$patients->conhemaBlyInput}}">
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="conhemaHod">
                                    <label for="conhemaHod">Hodgkin Lymphoma</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="conhemaMDS">
                                    <label for="conhemaMDS">MDS ,specify</label>
                                </div>
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" name="conhemaCMLinput" value="{{$patients->conhemaCMLinput}}">
                                    <label for="conhemaMDS">CML</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="inputlabelunderlineShort" name="conhemaPVinput" value="{{$patients->conhemaPVinput}}">
                                            <label for="conhemaMDS">PV</label>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="inputlabelunderlineShort" name="conhemaETinput" value="{{$patients->conhemaETinput}}">
                                                    <label for="conhemaMDS">ET</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="inputlabelunderlineShort" name="conhemaMFinput" value="{{$patients->conhemaMFinput}}">
                                                            <label for="conhemaMDS">MF</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="conhemaTlym">
                                    <label for="conhemaTlym">T-lymphoma</label>
                                    <input type="text" class="inputlabelunderlineName" name="conhemaTinput" value="{{$patients->conhemaTinput}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="conhemaOthers">
                                    <label for="conhemaOthers">Others:</label>
                                    <input type="text" class="inputlabelunderlineName" name="conhemaOthersinput" value="{{$patients->conhemaOthersinput}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TEST at BASELINE -->
    <div class="row">
        <div class="col">
            <div class="row border-top border-secondary" id="divpink">
                <div class="col">
                    <b>Test at Baseline</b>
                </div>
                <div class="row">
                    <div class="col-auto" >
                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="tabCBC">
                        <label for="tabCBC">CBC</label>
                    </div>
                    <div class="col-auto" >
                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="tabFBS">
                        <label for="tabFBS">FBS</label>
                    </div>
                    <div class="col-auto" >
                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="tabCreat">
                        <label for="tabCreat">CREATININE</label>
                    </div>
                    <div class="col-auto" >
                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="tabAST">
                        <label for="tabAST">AST/ALT</label>
                    </div>
                    <div class="col-auto" >
                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="tabANC">
                        <label for="tabANC">ANC</label>
                    </div>
                    <div class="col-auto" >
                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="tabCXR">
                        <label for="tabCXR">CXR</label>
                    </div>
                    <div class="col-auto" >
                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="tabECG">
                        <label for="tabECG">ECG</label>
                    </div>
                    <div class="col-auto" >
                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="tabUTZ">
                        <label for="tabUTZ">UTZ</label>
                    </div>
                    <div class="col-auto" >
                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="tabCT">
                        <label for="tabCT">CT-SCAN</label>
                    </div>
                    <div class="col-auto" >
                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="tabENDO">
                        <label for="tabENDO">ENDOSCOPY</label>
                    </div>
                    <div class="col-auto" >
                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="tabMRI">
                        <label for="tabMRI">MRI</label>
                    </div>
                    <div class="col-auto" >
                        <input class="form-check-input" type="checkbox" value="" name="cancData" id="tabOthers">
                        <label for="tabOthers">Others:</label>
                        <input type="text" class="inputlabelunderlineShort2" name="tabOthers" value="{{$patients->tabOthers}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col border-top border-secondary">
                    <div class="row">
                        <div class="col col-sm-2 border-end border-secondary">
                            <b>Laterality:</b>
                            <div class="row">
                                <div class="col">
                                   <small>(PLEASE FILL UP COMPLETELY)</small> 
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="latLeft">
                                    <label for="latLeft">Left</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="latRight">
                                    <label for="latRight">Right</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="latMid">
                                    <label for="latMid">Mid</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="latBilat">
                                    <label for="latBilat">Bilateral</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="latUndet">
                                    <label for="latUndet">Undetermined</label>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6 border-end border-secondary">
                            <b>Histology (Morphology)/Biopsy result:</b> <small>(PLEASE FILL UP COMPLETELY)</small>
                            <div class="row">
                                <div class="col-auto">
                                    Biopsy type:  <input class="form-check-input" type="checkbox" value="" name="cancData" id="bioEndo">
                                    <label for="bioEndo">endoscopy</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="bioFNAB">
                                    <label for="bioFNAB">FNAB</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="bioCore">
                                    <label for="bioCore">core biopsy</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="bioExIn">
                                    <label for="bioExIn">excision/incision</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    Tissue biopsied:
                                    <input type="text" class="inputlabelunderlineName" name="bioTis" value="{{$patients->bioTis}}">
                                </div>
                                <div class="col">
                                    Tumor size(cms):
                                    <input type="text" class="inputlabelunderlineShort" name="bioTumSiz" value="{{$patients->bioTumSiz}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    Histopathology:
                                    <input type="text" class="inputlabelunderlineName" name="bioHis" value="{{$patients->bioHis}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    carcinoma type:
                                    <input type="text" class="inputlabelunderlineName" name="bioCarc" value="{{$patients->bioCarc}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    neuroendocrine, tumor and grade:
                                    <input type="text" class="inputlabelunderlineName" name="bioNeuro" value="{{$patients->bioNeuro}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    mesenchymal (sarcoma etc), specify:
                                    <input type="text" class="inputlabelunderlineName" name="bioMes" value="{{$patients->bioMes}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    Others
                                    <input type="text" class="inputlabelunderlineName" name="bioOther" value="{{$patients->bioOther}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    Histologic grade:
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="bioHisWell">
                                    <label for="bioHisWell">well differentiated</label>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="bioHisMod">
                                            <label for="bioHisMod">moderately differentiated</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="bioHisPoor">
                                    <label for="bioHisPoor">poorly differentiated</label>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="bioHisUn">
                                            <label for="bioHisUn">undifferentiated</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    LVI 
                                    <input type="text" class="inputlabelunderlineShort" name="bioLVImin" value="{{$patients->bioLVImin}}">
                                    <label for="bioLVImin">(-)</label>
                                </div>
                                <div class="col">
                                     
                                    <input type="text" class="inputlabelunderlineShort" name="bioLVIplus" value="{{$patients->bioLVIplus}}">
                                    <label for="bioLVIplus">(+)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col border-bottom border-secondary">
                                <b>TNM System</b> <small>PLEASE FILL UP COMPLETELY</small>
                                <div class="row">
                                    <div class="col">
                                        <div class="h3">T <input type="text" class="inputlabelunderline" name="bioLVImin" placeholder="---"></div>
                                    </div>
                                    <div class="col">
                                        <div class="h3">N <input type="text" class="inputlabelunderline" name="bioLVImin" placeholder="---"></div>
                                    </div>
                                    <div class="col">
                                        <div class="h3">M <input type="text" class="inputlabelunderline" name="bioLVImin" placeholder="---"></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <b>Pathologic Stage:</b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="tstage0">
                                    <label for="tstage0">Stage 0</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="tstageIIA">
                                    <label for="tstageIIA">Stage IIA</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="tstageIIIA">
                                    <label for="tstageIIIA">Stage IIIA</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="tstage1A">
                                    <label for="tstage1A">Stage 1A</label>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tstage1B">
                                            <label for="tstage1B">Stage 1B</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="tstageIIB">
                                    <label for="tstageIIB">Stage IIB</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="tstageIIIB">
                                    <label for="tstageIIIB">Stage IIIB</label>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="tstageIIIC">
                                            <label for="tstageIIIC">Stage IIIC</label>
                                            <div class="row">
                                                <div class="col">
                                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="tstageIV">
                                                    <label for="tstageIV">Stage IV</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col border-top border-secondary">
                            <div class="row">
                                <div class="col-auto">
                                    <b>Staging(other than TNM):</b> 
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagIn">
                                    <label for="stagIn">In-Situ</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagLocal">
                                    <label for="stagLocal">Localized</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagDir">
                                    <label for="stagDir">Direct Extension</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagReg">
                                    <label for="stagReg">Regional Lymph Node</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stag34">
                                    <label for="stag34">3+4</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagDis">
                                    <label for="stagDis">Distant Metastasis</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagUn">
                                    <label for="stagUn">Unknown</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                    <div class="col">
                                        <b>Sites of Distant Metastatis:</b>Number of metaststic sites:<input type="text" class="inputlabelunderline" name="stagNoMet" value="{{$patients->stagNoMet}}" placeholder="---">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagNone">
                                    <label for="stagNone">None</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagDisLy">
                                    <label for="stagDisLy">Distant Lymph Nodes</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagBone">
                                    <label for="stagBone">Bone</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagLiver">
                                    <label for="stagLiver">Liver</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagLung">
                                    <label for="stagLung">Lung(Pleura)</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagBrain">
                                    <label for="stagBrain">Brain</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagOvary">
                                    <label for="stagOvary">Ovary</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagSkin">
                                    <label for="stagSkin">Skin</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagOther">
                                    <label for="stagOther">Other:</label>
                                    <input type="text" class="inputlabelunderlineShort" name="stagOther" value="{{$patients->stagOther}}">
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="stagUnk">
                                    <label for="stagUnk">Unknown</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
  </div>


  <div class="tab">
  <div class="container">
    <div class="row">
        <div class="col ">
            <!-- final diagnosis -->
            <div class="row">
                <div class="col border border-secondary border-top-0" id="divyellow">
                    <b>Final Diagnosis (PLEASE FILL UP COMPLETELY, INDICATE STAGE, SITE OF METS, ER, PR, HER2, EGFR etc )</b>
                </div>
            </div>
            <!-- Serum -->
            <div class="row">
                <div class="col border border-secondary border-top-0">
                    <div class="row">
                        <div class="col border-bottom border-secondary" id="divpeach">
                        <b>SERUM BIOMARKER DATA:</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            Serum biomarker
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineName" name="seSerum" value="{{$patients->seSerum}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            Level
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" name="seLvl" value="{{$patients->seLvl}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            Ref range
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" name="seRange" value="{{$patients->seRange}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col border-end border-bottom border-secondary">
                    <div class="row">
                        <div class="col border-bottom border-secondary" id="divpeach">
                        <b>MOLECULAR BIOMARKER DATA:</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            Molecular marker
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineName" name="molMar" value="{{$patients->molMar}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            Level
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" name="molLvl" value="{{$patients->molLvl}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            Ref range
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" name="molRange" value="{{$patients->molRange}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 border-end border-bottom border-secondary">
                    <div class="row">
                        <div class="col border-bottom border-secondary" id="divpeach">
                            <b>FISH/CYTOGENETICS</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="inputlabelunderline" name="fiCyt" value="{{$patients->fiCyt}}" placeholder="---">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col border-top border-secondary border-bottom" id="divpeach">
                            <b>FLOW CYTOMETRY:</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="inputlabelunderline" name="flowCyt" value="{{$patients->flowCyt}}" placeholder="---">
                        </div>
                    </div>
                </div>
            </div>
            <!-- treatment plan -->
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col text-white" id="divIndigo">
                            <b>TREATMENT PLAN</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-4 border border-secondary">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b>Treatment Purpose:</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="treatCurCom">
                                            <label for="treatCurCom">Curative-complete</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="treatCurInc">
                                            <label for="treatCurInc">Curative-incomplete</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="treatPall">
                                            <label for="treatPall">Palliative only</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="treatOther">
                                            <label for="treatOther">Others, specify:</label>
                                            <input type="text" class="inputlabelunderlineShort" name="treatOther" value="{{$patients->treatOther}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b>Primary Treatment in BGH:</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPrimYes">
                                            <label for="trPrimYes">Yes</label>
                                        </div>
                                        <div class="col">
                                            Date:
                                            <input type="date" name="trPrimDate">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPrimNo">
                                            <label for="trPrimNo">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b>Additional/Adjuvant Treatment/s</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trAddSur">
                                                <label for="trAddSur">Surgery</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trAddRad">
                                                <label for="trAddRad">Radiotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trAddChem">
                                                <label for="trAddChem">Chemotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="traAddImm">
                                                <label for="traAddImm">Immunotherapy/Cryotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trAddHormo">
                                                <label for="trAddHormo">Hormonal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trAddUn">
                                                <label for="trAddUn">Unknown</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trAddOth">
                                                <label for="trAddOth">Others, specify:</label>
                                                <input type="text" class="inputlabelunderlineShort" name="trAddOthInput" value="{{$patients->trAddOthInput}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b> Planned other additionalAdditional/Adjuvant Treatment/s</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlAddSur">
                                                <label for="trPlAddSur">Surgery</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlAddRad">
                                                <label for="trPlAddRad">Radiotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlAddChem">
                                                <label for="trPlAddChem">Chemotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlAddImm">
                                                <label for="trPlAddImm">Immunotherapy/Cryotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlAddHormo">
                                                <label for="trPlAddHormo">Hormonal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlAddUn">
                                                <label for="trPlAddUn">Unknown</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlAddOth">
                                                <label for="trPlAddOth">Others, specify:</label>
                                                <input type="text" class="inputlabelunderlineShort" name="trPlAddOthInput" value="{{$patients->trPlAddOthInput}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b>Treatment/s received in other Hospital</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trTrSurg">
                                            <label for="trTrSurg">Surgery</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trTrRad">
                                            <label for="trTrRad">Radiotheraphy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trTrChem">
                                                <label for="trTrChem">Chemotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trTrImm">
                                                <label for="trTrImm">Immunotherapy/Cryotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trTrHormo">
                                                <label for="trTrHormo">Hormonal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trTrUn">
                                                <label for="trTrUn">Unknown</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trTrOth">
                                                <label for="trTrOth">Others, specify:</label>
                                                <input type="text" class="inputlabelunderlineShort" name="trTrOthInput" value="{{$patients->trTrOthInput}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col border border-start-0 border-secondary">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b>Plan:</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <u><i><b>Systemic/Medical:</b></i></u>
                                        </div>
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                                <label for="trPlNeo">Neoadjuvant</label>
                                        </div>
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlAdj">
                                                <label for="trPlAdj">Adjuvant</label>
                                        </div>
                                        <div class="col-auto">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlMeta">
                                                <label for="trPlMeta">Metastatic</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        Protocol:(include inclusive dates)
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        1<sup>st</sup> line
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" class="inputlabelunderlineName" name="proto1st1" value="{{$patients->proto1st1}}">-<input type="text" class="inputlabelunderlineShort" name="proto1stcy1" value="{{$patients->proto1stcy1}}">
                                            # of cycles
                                            <div class="row">
                                                <div class="col">
                                                <input type="text" class="inputlabelunderlineName" name="proto1st2" value="{{$patients->proto1st2}}">-<input type="text" class="inputlabelunderlineShort" name="proto1stcy2" value="{{$patients->proto1stcy2}}">
                                                # of cycles
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">BGH</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">other hosp</label>
                                            <div class="row">
                                                <div class="col">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                                <label for="trPlAdj">BGH</label>
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                                <label for="trPlAdj">other hosp</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">remission</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">stable dse</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">R/R</label>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        2<sup>nd</sup> line
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" class="inputlabelunderlineName" name="proto2nd1" value="{{$patients->proto2nd1}}">-<input type="text" class="inputlabelunderlineShort" name="proto2ndcy1" value="{{$patients->proto2ndcy1}}">
                                            # of cycles
                                            <div class="row">
                                                <div class="col">
                                                <input type="text" class="inputlabelunderlineName" name="proto2nd2" value="{{$patients->proto2nd2}}">-<input type="text" class="inputlabelunderlineShort" name="proto2ndcy2" value="{{$patients->proto2ndcy2}}">
                                                # of cycles
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">BGH</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">other hosp</label>
                                            <div class="row">
                                                <div class="col">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                                <label for="trPlAdj">BGH</label>
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                                <label for="trPlAdj">other hosp</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">remission</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">stable dse</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">R/R</label>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        3<sup>rd</sup> line
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" class="inputlabelunderlineName" name="proto3rd1" value="{{$patients->proto3rd1}}">-<input type="text" class="inputlabelunderlineShort" name="proto3rdcy1" value="{{$patients->proto3rdcy1}}">
                                            # of cycles
                                            <div class="row">
                                                <div class="col">
                                                <input type="text" class="inputlabelunderlineName" name="proto3rd2" value="{{$patients->proto3rd2}}">-<input type="text" class="inputlabelunderlineShort" name="proto3rdcy2" value="{{$patients->proto3rdcy2}}">
                                                # of cycles
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">BGH</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">other hosp</label>
                                            <div class="row">
                                                <div class="col">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                                <label for="trPlAdj">BGH</label>
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                                <label for="trPlAdj">other hosp</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">remission</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">stable dse</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">R/R</label>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        4<sup>th</sup> line
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" class="inputlabelunderlineName" name="proto4th1" value="{{$patients->proto4th1}}">-<input type="text" class="inputlabelunderlineShort" name="proto4thcy1" value="{{$patients->proto4thcy1}}">
                                            # of cycles
                                            <div class="row">
                                                <div class="col">
                                                <input type="text" class="inputlabelunderlineName" name="proto4th2" value="{{$patients->proto4th2}}">-<input type="text" class="inputlabelunderlineShort" name="proto4thcy2" value="{{$patients->proto4thcy2}}">
                                                # of cycles
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">BGH</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">other hosp</label>
                                            <div class="row">
                                                <div class="col">
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                                <label for="trPlAdj">BGH</label>
                                                <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                                <label for="trPlAdj">other hosp</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">remission</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">stable dse</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">R/R</label>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                   <div class="row">
                                       <div class="col">
                                           <b><i><u>Radiation Therapy:</u></i></b>
                                           <input class="form-check-input" type="checkbox" value="" name="cancData" id="radiaThNo">
                                            <label for="radiaThNo">NO</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="radiaThYes">
                                            <label for="radiaThYes">YES</label>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col">
                                           <b>Identify site:</b>
                                           <input type="text" class="inputlabelunderlineName" name="radSite" value="{{$patients->radSite}}">
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col">
                                           Setting: 
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="radiaThPre">
                                            <label for="radiaThPre">Pre-operative</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="radiaThPost">
                                            <label for="radiaThPost">Post-operative</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="radiaThPall">
                                            <label for="radiaThPall">Palliative</label>
                                       </div>
                                   </div>

                                   <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-auto">
                                                    Dose:
                                                </div>
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="checkbox" value="" name="DoseBoost" id="radiaThReg">
                                                    <label for="radiaThReg">Regular</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input class="form-check-input" type="checkbox" value="" name="DoseBoost" id="radiaThbst">
                                                            <label for="radiaThbst">Boost</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    Sites:
                                                    <input type="text" class="inputlabelunderlineName" name="doseRegSite" value="{{$patients->doseRegSite}}">
                                                    <div class="row">
                                                        <div class="col">
                                                            Sites:
                                                            <input type="text" class="inputlabelunderlineName" name="doseBoostSite" value="{{$patients->doseBoostSite}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  

                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b>Surgery </b>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="radiaThSurgNo">
                                            <label for="radiaThSurgNo">NO</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="radiaThSurgYes">
                                            <label for="radiaThSurgYes">YES</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        Date: <input type="date" name="trPrimDate">
                                        </div>
                                        <div class="col">
                                        Surgeon:
                                        <input type="text" class="inputlabelunderlineName" name="surSurgeon" value="{{$patients->surSurgeon}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        Planned Operation:
                                        <input type="text" class="inputlabelunderlineName" name="surPlanOp" value="{{$patients->surPlanOp}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <b><i><u>Hormonal:</u></i></b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="text" class="inputlabelunderlineName" name="surHormone" value="{{$patients->surHormone}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <u>Remarks:</u>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="text" class="inputlabelunderlineName" name="surRemarks" value="{{$patients->surRemarks}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- yearly update -->
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col border border-secondary">
                                            <div class="row">
                                                <div class="col border-bottom border-secondary">
                                                    <b>Year 1</b>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col border-end border-secondary">
                                                    Date
                                                </div>
                                                <div class="col">
                                                    N
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col border border-secondary">
                                            <div class="row">
                                                <div class="col border-bottom border-secondary">
                                                    <b>Year 2</b>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col border-end border-secondary">
                                                    Date
                                                </div>
                                                <div class="col">
                                                    N
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col border border-secondary">
                                            <div class="row">
                                                <div class="col border-bottom border-secondary">
                                                    <b>Year 3</b>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col border-end border-secondary">
                                                    Date
                                                </div>
                                                <div class="col">
                                                    N
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col border border-secondary">
                                            <div class="row">
                                                <div class="col border-bottom border-secondary">
                                                    <b>Year 4</b>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col border-end border-secondary">
                                                    Date
                                                </div>
                                                <div class="col">
                                                    N
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col border border-secondary">
                                            <div class="row">
                                                <div class="col border-bottom border-secondary">
                                                    <b>Year 5</b>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col border-end border-secondary">
                                                    Date
                                                </div>
                                                <div class="col">
                                                    N
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                            <div class="row border-top border-secondary">
                                                <div class="col border-end border-secondary">
                                                --
                                                </div>
                                                <div class="col">
                                                --
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                   <div class="row">
                                       <div class="col">
                                       Others:
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col">
                                            <input type="text" class="inputlabelunderline" name="surOthers" value="{{$patients->surOthers}}" placeholder="---">
                                       </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col text-white" id="divIndigo">
                        <b>FOLLOW UP</b>
                        </div>
                    </div>
                    <div class="row border-end border-secondary">
                        <div class="col col-lg-4 border border-secondary border-bottom-0 border-top-0">
                            <div class="row">
                                <div class="col">
                                    Date:
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    date
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-5 ">
                           <div class="row">
                               <div class="col ">
                                   Status:
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="FUwoDis">
                                    <label for="FUwoDis">Alive without disease</label>
                               </div>
                               <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="FUwDis">
                                    <label for="FUwDis">Alive with disease</label>
                               </div>
                               <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="FUwoDead">
                                    <label for="FUwoDead">Dead</label>
                               </div>
                           </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    Time from last treatment:
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineName" name="timeTreat" value="{{$patients->timeTreat}}">
                                    months
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col border border-secondary">
                            <div class="row">
                                <div class="col col-lg-8 border-end border-secondary">
                                    <div class="row">
                                        <div class="col">
                                            <b>Attending Oncologist</b>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="inputlabelunderlineName" name="oncoLast" value="{{$patients->oncoLast}}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <small>
                                                        Last Name
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="inputlabelunderlineName" name="oncoFirst" value="{{$patients->oncoFirst}}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <small>
                                                        First Name
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="inputlabelunderlineName" name="oncoMiddle" value="{{$patients->oncoMiddle}}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <small>
                                                        Middle Name
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="FUdeptGyne">
                                            <label for="FUdeptGyne">Gyne</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="FUdeptHema">
                                            <label for="FUdeptHema">Hema</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="FUdeptMo">
                                            <label for="FUdeptMo">MO</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="FUdeptPedia">
                                            <label for="FUdeptPedia">Pedia Hema-onco</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="FUdepttrt">
                                            <label for="FUdepttrt">Rad</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  </div>
  <!-- <div style="overflow:auto;"> -->
    <div style="margin-right:40%;margin-top:10px;float:right;">
  <a href="/showID/{{$patients->hpercode}}" class="btn btn-outline-primary ">back</a>

      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  <button type="submit">Save Into</button>
  <select id="status" name="status" class="form-select-sm d-print-none" aria-label=".form-select-sm example">
                                <option value="drafts">Drafts</option>
                                <option value="completeForm">Final Output</option>
                            </select>
  

    </div>
  <!-- </div> -->
  
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
@endforeach
<!-- </form> -->

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display = "none";
  } else {
    document.getElementById("nextBtn").style.display = "inline";
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
//   for (i = 0; i < y.length; i++) {
    // If a field is empty...
    // if (y[i].value == "") {
      // add an "invalid" class to the field:
    //   y[i].className += " invalid";
      // and set the current valid status to false
    //   valid = false;
    // }
//   } 
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>
