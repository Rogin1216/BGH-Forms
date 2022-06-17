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
.inputlabelunderlineShort2{
  border: none;
  border-bottom: 1px solid;
  background-color: pink;
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
@foreach($header as $head)
@foreach($chdata as $chdata)
<form action="/store" type="get" >
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
                            <input type="text" class="inputlabelunderline" readonly name="docNo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col border border-secondary border-top-0">
                            Rev no.
                        </div>
                        <div class="col col-lg-6 border-bottom border-secondary ">
                            <input type="text" class="inputlabelunderline" readonly name="revNo">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col border border-secondary border-top-0 border-bottom-0">
                            Effectivity date:
                        </div>
                        <div class="col col-lg-6 ">
                            <input type="date" readonly class="inputlabelunderline" readonly name="effectDate">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div><!-- end logo header --> 

<div class="container"><!-- start general data -->
    <div class="row"> 
        
            <div class="col-auto text-white" id="divIndigo">
                <center>GENERAL DATA</center> 
            </div>
            <div class="col-auto text-black" id="divpink">
                CLASSIFICATION:
            </div>
            <input type="hidden" name="payCh" value="0">
            <div class="col-auto text-black" id="divpink">
                <input class="form-check-input" type="checkbox" onclick="return false;"  value="1" name="payCh" id="pay"{{ ($chdata->payCh == '1'? ' checked' : '') }}>
                <label class="form-check-label" for="pay">
                    PAY
                </label>
            </div>
            <input type="hidden" name="charityCh" value="0">
            <div class="col-auto text-black" id="divpink">
                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="charityCh" id="charity" {{ ($chdata->charityCh == '1'? ' checked' : '') }}>
                <label class="form-check-label" for="charity">
                    CHARITY
                </label>
            </div>
            <input type="hidden" name="nbbCh" value="0">
            <div class="col-auto text-black" id="divpink">
                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="nbbCh" id="nbb" {{ ($chdata->nbbCh == '1'? ' checked' : '') }}>
                <label class="form-check-label" for="nbb">
                    NBB
                </label>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col col-lg-3 border-start border-secondary" id="divpink">
                        CSPMAP
                    </div>  
                    <div class="col col-lg-2 text-black" id="divpink">
                        <input class="form-check-input" type="radio" onclick="return false;" value="Yes" name="cspmapRdo" id="csYes" {{ ($chdata->cspmapRdo == 'Yes'? ' checked' : '') }}>
                        <label class="form-check-label" for="csYes">
                            YES
                        </label>
                    </div>
                    <div class="col text-black border-end border-secondary" id="divpink">
                        <input class="form-check-input" type="radio" onclick="return false;" value="No" name="cspmapRdo"id="csNo" {{ ($chdata->cspmapRdo == 'No'? ' checked' : '') }}>
                        <label class="form-check-label" for="csNo">
                            NO
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-3 border-start border-secondary" id="divpink">
                        Z-PACKAGE 
                    </div>
                    <div class="col col-lg-2 text-black" id="divpink">
                        <input class="form-check-input" type="radio" onclick="return false;" value="Yes" name="zpackRdo" id="zYes" {{ ($chdata->zpackRdo == 'Yes'? ' checked' : '') }}>
                        <label class="form-check-label" for="zYes">
                            YES
                        </label>
                    </div>
                    <div class="col text-black border-end border-secondary" id="divpink">
                        <input class="form-check-input" type="radio" onclick="return false;" value="No" name="zpackRdo" id="zNo" {{ ($chdata->zpackRdo == 'No'? ' checked' : '') }}>
                        <label class="form-check-label" for="zNo">
                            NO
                        </label>
                    </div>  
                </div>
            </div>
            

    </div>
    
    <div class="row">
        <div class="col col-lg-3 border-start border-top border-secondary" id="divyellow">
            <p><b>Name of Reporting Health Facility</b></p>
            <div class="row">
                <div class="col">
                    <p>BAGUIO GENERAL HOSPITAL & MEDICAL CENTER - CANCER CENTER</p>
                </div>
            </div>
            
        </div>
        <div class="col col-lg-4 border border-bottom-0 border-secondary form-outline" id="divyellow">

                <p><b>Cancer Registry Personnel:</b></p>
                <input type="text" class="inputlabelunderlineYel"  name="regPersonnel" value="{{$patients->regPersonnel}}" placeholder="Name here..">

        </div>
            <div class="col-auto border-top border-secondary">
                Hospital No.
                
                <div class="row">
                    <div class="col pt-4">
                        Philhealth No.
                    </div>
                </div>
                
            </div>
            <div class="col border-top border-secondary">
                    <input type="text" class="inputlabelunderline" readonly name="hpNum" placeholder="---">
                    <div class="row">
                        <div class="col pt-4">
                            <input type="text" class="inputlabelunderline" readonly name="patPhilNum" placeholder="---">
                        </div>
                    </div>
            </div>

        <div class="col border border-bottom-0 border-secondary" id="divyellow">
            <p><b>Type of Patient</b></p>
            <div class="row" >
                <div class="col text-black">

                        <input class="form-check-input" type="radio" onclick="return false;" value="OPD" name="ToPRdo" id="opd" {{ ($chdata->ToPRdo == 'OPD'? ' checked' : '') }}>
                        <label class="form-check-label" for="opd">
                            OPD
                        </label>
                </div>  
            </div>
            <div class="row">  
                <div class="col text-black">
                        <input class="form-check-input" type="radio" onclick="return false;"  name="ToPRdo" value="In-Patient" id="pat" {{ ($chdata->ToPRdo == 'In-Patient'? ' checked' : '') }}>
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
                    <input type="text" class="inputlabelunderlineName" readonly name="patLast" value="{{$head->patlast}}" >
                </div>
                <div class="col">
                    <input type="text" class="inputlabelunderlineName" readonly name="patFirst" value="{{$head->patfirst}}" >
                </div>
                <div class="col">
                    <input type="text" class="inputlabelunderlineName" readonly name="patMiddle" value="{{$head->patmiddle}}">
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
            {{$head->patsex}}
            <!-- <div class="row">
                <div class="col">
                        <input class="form-check-input" type="radio" onclick="return false;" value="Female" name="rdoSex" id="female" {{ ($chdata->rdoSex == 'Female'? ' checked' : '') }}>
                        <label class="form-check-label" for="female">
                            Female
                        </label>
                </div>  
            </div>
            <div class="row">
                <div class="col">
                        <input class="form-check-input" type="radio" onclick="return false;" value="male" name="rdoSex" id="male" {{ ($chdata->rdoSex == 'male'? ' checked' : '') }}>
                        <label class="form-check-label" for="male">
                            Male
                        </label>
                </div>  
            </div> -->
        </div>

        <div class="col border border-bottom-0 border-secondary">
            <b>Civil Status:</b>
            <label for="">{{$head->patcstat}}</label>
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-10 border border-secondary">
            <b>Address</b>
            <label for="">{{$head->patAddr}}</label>
            

        </div>
        <div class="col">
            <div class="row border-top border-end border-secondary">
                <div class="col">
                    <b>Landline/Mobile #:</b> 
                </div>
                <div class="row">
                    <div class="col">
                    <label for="">{{$head->pattel}}</label>
                        <!-- <input type="text" class="inputlabelunderline" readonly name="patNum" placeholder="---"> -->
                    </div>
                </div>
            </div>
            <div class="row border border-start-0 border-secondary">
                <div class="col">
                    <b>Email address:</b> 
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" class="inputlabelunderline" readonly name="patEmail" placeholder="---">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-auto border-start border-secondary">
            <b>Current age:</b>
            <div class="row">
                <div class="col">
                    <b>Age at cancer diagnosis</b>
                </div>
            </div>
        </div>
        <div class="col">
        <label for="">{{$head->patAge}} yrs old</label>
            <div class="row">
                <div class="col">
                    <input type="text" width="10px" class="inputlabelunderlineShort" readonly name="patCancAge">years old
                </div>
            </div>
        </div>
        <div class="col border-start border-end border-secondary">
                Birthday:
                {{date('F j,Y',  strtotime($head->patbdate))}}
        </div>
        <div class="col border-end border-secondary">
            <div class="row">
                <div class="col col-lg-4 ">
                    Religion:
                </div>
                <div class="col">
                <label for="">{{$head->reldesc}}</label>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-4">
                    Nationality:
                </div>
                <div class="col">
                <label for="">{{$head->natdesc}}</label>
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
                            <input class="form-check-input" type="radio" onclick="return false;" value="No" name="smkRdo" id="smkNO" {{ ($chdata->smkRdo == 'No'? ' checked' : '') }}>
                            <label class="form-check-label" for="smkNO">
                                NO
                            </label>
                            <div class="row">
                                <div class="col-auto">
                                <input class="form-check-input" type="radio" onclick="return false;" value="Yes" name="smkRdo" id="smkYES" {{ ($chdata->smkRdo == 'Yes'? ' checked' : '') }}>
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
                                            <input class="form-check-input" type="radio" onclick="return false;" value="current" name="smkRdoYes" id="current" {{ ($chdata->smkRdoYes == 'current'? ' checked' : '') }}>
                                            <label class="form-check-label" for="current">
                                                current
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" onclick="return false;" value="stopped" name="smkRdoYes" id="stopped" {{ ($chdata->smkRdoYes == 'stopped'? ' checked' : '') }}>
                                            <label class="form-check-label" for="stopped">
                                                stopped
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="inputlabelunderlineShort" readonly name="patPackYr" placeholder="pack/year" value="{{$patients->patPackYr}}"> 
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
                            <input class="form-check-input" type="radio" onclick="return false;" value="no" name="shsRdo" id="sNo" {{ ($chdata->shsRdo == 'no'? ' checked' : '') }}>
                            <label class="form-check-label" for="sNo">
                                NO
                            </label>
                            <div class="row">
                                <div class="col">
                                <input class="form-check-input" type="radio" onclick="return false;" value="yes" name="shsRdo" id="sYes" {{ ($chdata->shsRdo == 'yes'? ' checked' : '') }}>
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
                            <input class="form-check-input" type="radio" onclick="return false;" value="no" name="alcoRdo" id="alcoNo" {{ ($chdata->alcoRdo == 'no'? ' checked' : '') }}>
                            <label class="form-check-label" for="alcoNo">
                                NO
                            </label>
                            <div class="row">
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" onclick="return false;" value="yes" name="alcoRdo" id="alcoYes" {{ ($chdata->alcoRdo == 'yes'? ' checked' : '') }}>
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
                                    <input class="form-check-input" type="radio" onclick="return false;" value="current" name="alcoRdoYes" id="intakeCur" {{ ($chdata->alcoRdoYes == 'current'? ' checked' : '') }}>
                                    <label class="form-check-label" for="intakeCur">
                                        current
                                    </label>
                                        <div class="col-auto">
                                            <input class="form-check-input" type="radio" onclick="return false;" value="stopped" name="alcoRdoYes" id="intakeStop" {{ ($chdata->alcoRdoYes == 'stopped'? ' checked' : '') }}>
                                            <label class="form-check-label" for="intakeStop">
                                                stopped
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="inputlabelunderlineShort" readonly name="patDriYr" placeholder="drinks/day" value="{{$patients->patDriYr}}"> 
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
                        <input class="form-check-input" type="radio" onclick="return false;" value="no" name="sexHisRdo" id="activeYes" {{ ($chdata->sexHisRdo == 'no'? ' checked' : '') }}>
                        <label class="form-check-label" for="activeYes">
                            NO
                        </label>
                        <input class="form-check-input" type="radio" onclick="return false;" value="yes" name="sexHisRdo" id="activeNo" {{ ($chdata->sexHisRdo == 'yes'? ' checked' : '') }}>
                        <label class="form-check-label" for="activeNo">
                            YES
                        </label>
                        <div class="row">
                            <div class="col">
                                <label for=""># of sexual partners:</label>
                                <input type="text" class="inputlabelunderlineShort" readonly name="patNumSex" value="{{$patients->patNumSex}}"> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <b>Average Monthly Family Income:</b>
                        <input type="text" class="inputlabelunderlineShort" readonly name="patAvgInc" value="{{$patients->patAvgInc}}"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <b>Means of Health Expenditure:</b>
                        <input type="text" class="inputlabelunderlineName" readonly name="patMeansEx" value="{{$patients->patMeansEx}}"> 
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
                        <input type="hidden" name="vacChHep" value="0">
                        <input class="form-check-input" type="checkbox" onclick="return false;" value="hepB" name="vacChHep" id="vacHepB" {{ ($chdata->vacChHep == 'hepB'? ' checked' : '') }}>
                        </div>
                        <div class="col-auto">
                            HPV
                        </div>
                        <div class="col">
                        <input type="hidden" name="vacChHPV" value="0">
                            <input class="form-check-input" type="checkbox" onclick="return false;" value="HPV" name="vacChHPV" id="vacHpv" {{ ($chdata->vacChHPV == 'HPV'? ' checked' : '') }}>
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
                    <input class="form-check-input" type="radio" onclick="return false;" value="no" name="occRdo" id="occNo" {{ ($chdata->occRdo == 'no'? ' checked' : '') }}>
                        <label class="form-check-label" for="occNo">
                            NO
                        </label>
                        <div class="row">
                            <div class="col">
                            <input class="form-check-input" type="radio" onclick="return false;" value="yes" name="occRdo" id="occYes" {{ ($chdata->occRdo == 'yes'? ' checked' : '') }}>
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
                                <input type="hidden" name="expChVap" value="0">
                                <input class="form-check-input" type="checkbox" onclick="return false;" value="chemicals/vapors" name="expChVap" id="vapor" {{ ($chdata->expChVap == 'chemicals/vapors'? ' checked' : '') }}>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="vapor">
                                    Chemicals/vapors
                                    <input type="text" class="inputlabelunderlineShort" readonly name="patChemVap" value="{{$patients->patChemVap}}" placeholder="specify">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input type="hidden" name="expChPest" value="0">
                                <input class="form-check-input" type="checkbox" onclick="return false;" value="Pesticides/Insescticides" name="expChPest" id="pest" {{ ($chdata->expChPest == 'Pesticides/Insescticides'? ' checked' : '') }}>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="pest">
                                    Pesticides/Insescticides
                                    <input type="text" class="inputlabelunderlineShort" readonly name="patPestIns" value="{{$patients->patPestIns}}" placeholder="specify">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input type="hidden" name="expChDye" value="0">
                                <input class="form-check-input" type="checkbox" onclick="return false;" value="Dyes" name="expChDye" id="dyes" {{ ($chdata->expChDye == 'Dyes'? ' checked' : '') }}>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="dyes">
                                    Dyes
                                    <input type="text" class="inputlabelunderlineShort" readonly name="patDyes" value="{{$patients->patDyes}}" placeholder="specify">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input type="hidden" name="expChOth" value="0">
                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="expChOth" id="others1" {{ ($chdata->expChOth == '1'? ' checked' : '') }}>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="others1">
                                    Others:
                                    <input type="text" class="inputlabelunderlineShort" readonly name="patOther1" value="{{$patients->patOther1}}" placeholder="specify">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <b>Longest Job Held:</b>
                                <input type="text" class="inputlabelunderlineName" readonly name="patLongJob" value="{{$patients->patLongJob}}">
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
                    <input class="form-check-input" type="radio" onclick="return false;" value="no" name="medRdo" id="medNo" {{ ($chdata->medRdo == 'no'? ' checked' : '') }}>
                        <label class="form-check-label" for="medNo">
                            NO
                        </label>
                        <div class="row">
                            <div class="col">
                            <input class="form-check-input" type="radio" onclick="return false;" value="yes" name="medRdo" id="medYes" {{ ($chdata->medRdo == 'yes'? ' checked' : '') }}>
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
                                <input type="hidden" name="medChDiaMell" value="0">
                                <input class="form-check-input" type="checkbox" onclick="return false;" value="Diabetes-mellitus " name="medChDiaMell" id="diaMell" {{ ($chdata->medChDiaMell == 'Diabetes-mellitus'? ' checked' : '') }}>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="diaMell">
                                    Diabetes mellitus 
                                    <input type="text" class="inputlabelunderlineShort" readonly name="patDiaMell" value="{{$patients->patDiaMell}}" placeholder="medication">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input type="hidden" name="medChHyper" value="0">
                                <input class="form-check-input" type="checkbox" onclick="return false;" value="Hypertension" name="medChHyper" id="hyTen" {{ ($chdata->medChHyper == 'Hypertension'? ' checked' : '') }}>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="hyTen">
                                    Hypertension
                                    <input type="text" class="inputlabelunderlineShort" readonly name="patHype" value="{{$patients->patHype}}" placeholder="medication">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input type="hidden" name="medChCarDis" value="0">
                                <input class="form-check-input" type="checkbox" onclick="return false;" value="Cardiovascular-Disease" name="medChCarDis" id="carDis" {{ ($chdata->medChCarDis == 'Cardiovascular-Disease'? ' checked' : '') }}>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="carDis">
                                    Cardiovascular Disease
                                    <input type="text" class="inputlabelunderlineShort" readonly name="patCarDis" value="{{$patients->patCarDis}}" placeholder="medication">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input type="hidden" name="medChCerDis" value="0">
                                <input class="form-check-input" type="checkbox" onclick="return false;" value="Cerebrovascular-Disease" name="medChCerDis" id="cerDis" {{ ($chdata->medChCerDis == 'Cerebrovascular-Disease'? ' checked' : '') }}>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="cerDis">
                                    Cerebrovascular Disease
                                    <input type="text" class="inputlabelunderlineShort" readonly name="patCerDis" value="{{$patients->patCerDis}}"  placeholder="medication">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input type="hidden" name="medChLivDis" value="0">
                                <input class="form-check-input" type="checkbox" onclick="return false;" value="Liver/Kidney-Disease" name="medChLivDis" id="likiDis" {{ ($chdata->medChLivDis == 'Liver/Kidney-Disease'? ' checked' : '') }}>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="likiDis">
                                    Liver/Kidney Disease
                                    <input type="text" class="inputlabelunderlineShort" readonly name="patLivDis" value="{{$patients->patLivDis}}" placeholder="medication">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input type="hidden" name="medChStd" value="0">
                                <input class="form-check-input" type="checkbox" onclick="return false;" value="STD" name="medChStd" id="std" {{ ($chdata->medChStd == 'STD'? ' checked' : '') }}>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="std">
                                    STD
                                    <input type="text" class="inputlabelunderlineShort" readonly name="patStd" value="{{$patients->patStd}}" placeholder="medication">
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <input type="hidden" name="medOth" value="0">
                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="medOth" id="others2" {{ ($chdata->medOth == '1'? ' checked' : '') }}>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="others2">
                                    Others:
                                    <input type="text" class="inputlabelunderlineShort" readonly name="patOther2" value="{{$patients->patOther2}}" placeholder="medication">
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
                            Age of menarche:<input type="text" class="inputlabelunderlineShort" readonly name="femMenarAge" value="{{$patients->femMenarAge}}">years old
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                            Menstrual status: 
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="radio" onclick="return false;" value="1" name="mensStatus" id="preMeno" {{ ($chdata->mensChPreMeno == '1'? ' checked' : '') }}>
                                <label for="preMeno">Premenopausal</label> 
                                <div class="row">
                                    <div class="col">
                                    <input class="form-check-input" type="radio" onclick="return false;" value="2" name="mensStatus" id="postMeno" {{ ($chdata->mensChPostMeno == '2'? ' checked' : '') }}>
                                    <label for="postMeno">PostMenopausal</label> 
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        Age of menopause:<input type="text" class="inputlabelunderlineShort" readonly name="femMenopAge" value="{{$patients->femMenopAge}}">
                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                Cause:
                                            </div>
                                            <div class="col">
                                                <input type="hidden" name="causeChNat" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="causeChNat" id="natural" {{ ($chdata->causeChNat == '1'? ' checked' : '') }}>
                                                <label for="natural">Natural</label>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="hidden" name="causeChSurg" value="0">
                                                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="causeChSurg" id="surg" {{ ($chdata->causeChSurg == '1'? ' checked' : '') }}>
                                                        <label for="surg">Surgical</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <input type="hidden" name="causeChRad" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="causeChRad" id="radia" {{ ($chdata->causeChRad == '1'? ' checked' : '') }}>
                                                <label for="radia">Radiation</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="hidden" name="causeChMed" value="0">
                                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="causeChMed" id="mensMed" {{ ($chdata->causeChMed == '1'? ' checked' : '') }}>
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
                                
                                <input class="form-check-input" type="radio" onclick="return false;" value="1" name="contraCh" id="contraNo" {{ ($chdata->contraCh == '1'? ' checked' : '') }}>
                                <label for="contraNo">NO</label>
                            </div>
                            <div class="col">
                                <input class="form-check-input" type="radio" onclick="return false;" value="2" name="contraCh" id="contraYes" {{ ($chdata->contraCh == '2'? ' checked' : '') }}>
                                <label for="contraYes">YES</label>
                                <div class="row">
                                    <div class="col">
                                        If yes, duration of use:
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="inputlabelunderlineShort" readonly name="femContra" value="{{$patients->femContra}}">Months
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <b>OB History:</b>
                        <div class="row">
                            <div class="col">
                                <input class="form-check-input" type="radio" onclick="return false;" value="1" name="obHisCh" id="bioNo" {{ ($chdata->obHisCh == '1'? ' checked' : '') }}>
                                <label for="bioNo">NO Biological Child</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input class="form-check-input" type="radio" onclick="return false;" value="2" name="obHisCh" id="bioYes" {{ ($chdata->obHisCh == '2'? ' checked' : '') }}>
                                <label for="bioYes">With child, if with child:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                Age at 1<sup>st</sup> live birth: <input type="text" class="inputlabelunderlineShort" readonly name="fem1stBirth" value="{{$patients->fem1stBirth}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-auto">
                                <label class="mr-sm-2" for="inputState">if currently pregnant: <label for="" value="{{$patients->femCurPreg}}"> <b>{{$patients->femCurPreg}}</b> </label></label>
                                    <div class="row">
                                        <div class="col">
                                            <select id="inputState" class="custom-select mr-sm-2" name="femCurPreg" value="{{$patients->femCurPreg}}">
                                                <option >1<sup>st</sup> trimester</option>
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
                        <input class="form-check-input" type="radio" onclick="return false;" value="N" name="cancHis" id="cancNo" {{ ($chdata->cancHis == 'N'? ' checked' : '') }}>
                        <label for="cancNo">NO Family history of cancer</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input class="form-check-input" type="radio" onclick="return false;" value="Y" name="cancHis" id="cancYes" {{ ($chdata->cancHis == 'Y'? ' checked' : '') }}>
                        <label for="cancYes">With Family history of cancer, if yes:</label>
                    </div>
                </div>

                
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
                <div class="col-auto border border-secondary-left">
                <table class="table tb-sm table-hover overflow-auto" id="show_item">
                        <thead>
                            <tr>
                                <th>Family Member</th>
                                <th>Consanguinity</th>
                                <th>Type of Cancer</th>
                                <th>Age at Diagnosis</th>
                                <!-- <th>patient_hpercode</th>
                                <th>familyHistoryMembers_id</th> -->
                                <th><button class="btn btn-success add_item_btn">add</button></th>
                            </tr>
                        </thead>
                        <tbody>
                    @foreach($relative as $item)
                        <tr>
                            <!-- <td>{{$item->admdate ?? null ?: '--' }}</td> -->
                            <td>{{$item->familyMember}}</td>
                            <td>{{$item->consanguinity}}</td>
                            <td>{{$item->typeOfCancer}}</td>
                            <td>{{$item->ageAtDiagnosis}}</td>
                            <!-- <td>{{$item->patient_hpercode}}</td>
                            <td>{{$item->familyHistoryMembers_id}}</td> -->
                            
                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                    
                    <script>
                        $(document).ready(function(){
                            $(".add_item_btn").click(function(e){
                                e.preventDefault();
                                $("#show_item").prepend(`<div id="show_item">
                    <div class="row">   
                        <div class="col-auto">
                            <input type="text" name="family" class="form-control">
                        </div>
                        <div class="col-auto">
                            <input type="text" name="consanguinity" class="form-control">
                        </div>
                        <div class="col-auto">
                            <input type="text" name="typeOfCancer" class="form-control">
                        </div>
                        <div class="col-auto">
                            <input type="text" name="ageAtDiagnosis" class="form-control">
                        </div>
                        
                    </div>
                </div>`);
                            });
                        });
                    </script>
                    <div id="show_item">
                    <!-- <div class="row">   
                        <div class="col-auto">
                            <input type="text" name="family" class="form-control">
                        </div>
                        <div class="col-auto">
                            <input type="text" name="consanguinity" class="form-control">
                        </div>
                        <div class="col-auto">
                            <input type="text" name="typeOfCancer" class="form-control">
                        </div>
                        <div class="col-auto">
                            <input type="text" name="ageAtDiagnosis" class="form-control">
                        </div>
                        
                    </div> -->
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
                    <input type="hidden" name="infHuPapCh" value="0">
                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="infHuPapCh" id="huPaViIn" {{ ($chdata->infHuPapCh == '1'? ' checked' : '') }}>
                    <label for="huPaViIn">Human Papilloma Virus Infection</label>
                </div>
                <div class="col">
                    <label for="">Year Examined/Dx:</label>
                    <input type="text" class="inputlabelunderline" readonly name="infHuPap" placeholder="---" value="{{$patients->infHuPap}}">
                </div>
                <div class="col col-md-3">
                    <input type="hidden" name="infHepBCh" value="0">
                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="infHepBCh" id="HepaB" {{ ($chdata->infHepBCh == '1'? ' checked' : '') }}>
                    <label for="HepaB">Hepatitis B Viurs Infection</label>
                </div>
                <div class="col">
                    <label for="">Year Examined/Dx:</label>
                    <input type="text" class="inputlabelunderline" readonly name="infHepaB" placeholder="---" value="{{$patients->infHepaB}}">
                </div>
            </div>
            <div class="row border-top border-secondary">
                <div class="col col-md-3">
                    <input type="hidden" name="infHelPyCh" value="0">
                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="infHelPyCh" id="hePyInf" {{ ($chdata->infHelPyCh == '1'? ' checked' : '') }}>
                    <label for="hePyInf">Helicobacter Pylori Infection</label>
                </div>
                <div class="col">
                    <label for="">Year Examined/Dx:</label>
                    <input type="text" class="inputlabelunderline" readonly name="infHeliPy" placeholder="---" value="{{$patients->infHeliPy}}">
                </div>
                <div class="col col-md-3">
                    <input type="hidden" name="infOthCh" value="0">
                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="infOthCh" id="otherInfect" {{ ($chdata->infOthCh == '1'? ' checked' : '') }}>
                    <label for="otherInfect">Others, specify</label>
                </div>
                <div class="col">
                    <label for="">Year Examined/Dx:</label>
                    <input type="text" class="inputlabelunderline" readonly name="infOthers" placeholder="---" value="{{$patients->infOthers}}"> 
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-4 border-end border-top border-secondary">
                    Height:
                    <input type="text" class="inputlabelunderlineShort" readonly name="patHeight" value="{{$patients->patHeight}}">
                    cms
                </div>
                <div class="col col-lg-4 border-end border-top border-secondary">
                    Weight:
                    <input type="text" class="inputlabelunderlineShort" readonly name="patWeight" value="{{$patients->patWeight}}">
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
                            <input type="text" class="inputlabelunderlineName" readonly name="cancRefer" value="{{$patients->cancRefer}}">
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
                            <input type="text" class="inputlabelunderlineName" readonly name="cancRefFac" value="{{$patients->cancRefFac}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Doctor/Health Care Professional:</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="inputlabelunderlineName" readonly name="cancDocProf" value="{{$patients->cancDocProf}}">
                        </div>
                    </div>
                </div>
                <div class="col col-lg-6 border-start border-secondary">
                    <b>Reason for Referral</b>
                    <div class="row">
                        <div class="col col-lg-5">
                            <input class="form-check-input" type="radio" onclick="return false;" value="1" name="refRdo" id="reasFin" {{ ($chdata->refRdo == '1'? ' checked' : '') }}>
                            <label for="reasFin">Financial Constraint</label>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="radio" onclick="return false;" value="2" name="refRdo" id="reasNoRo" {{ ($chdata->refRdo == '2'? ' checked' : '') }}>
                                    <label for="reasNoRo">No room available</label>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" onclick="return false;" value="3" name="refRdo" id="reasOp" {{ ($chdata->refRdo == '3'? ' checked' : '') }}>
                                            <label for="reasOp">Seek advice/2<sup>nd</sup> opinion</label>
                                            <div class="row">
                                                <div class="col">
                                                    <input class="form-check-input" type="radio" onclick="return false;" value="4" name="refRdo" id="reasEval" {{ ($chdata->refRdo == '4'? ' checked' : '') }}>
                                                    <label for="reasEval">Seek specialized evaluation</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <input class="form-check-input" type="radio" onclick="return false;" value="5" name="refRdo" id="reasNodoc" {{ ($chdata->refRdo == '5'? ' checked' : '') }}>
                            <label for="reasNodoc">No available doctor</label>
                                <div class="row">
                                    <div class="col">
                                        <input class="form-check-input" type="radio" onclick="return false;" value="6" name="refRdo" id="reasNoLab" {{ ($chdata->refRdo == '6'? ' checked' : '') }}>
                                        <label for="reasNoLab">No laboratory available</label>
                                        <div class="row">
                                            <div class="col">
                                                <input class="form-check-input" type="radio" onclick="return false;" value="7" name="refRdo" id="reasSeek" {{ ($chdata->refRdo == '7'? ' checked' : '') }}>
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
                            <input type="date" readonly class="" name="cancDateAdm" value="{{$patients->cancDateAdm}}">
                        </div>
                    </div>
                </div>
                <div class="col border-top border-bottom border-secondary">
                    <b>Chief Complaint:</b>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="inputlabelunderlineName" readonly name="cancComp" value="{{$patients->cancComp}}">
                            </div>
                        </div>
                </div>
                <div class="col col-lg-6 border border-secondary border-end-0">
                     <b>Date of Diagnosis(Clinical or pathologic):</b><input type="text" class="inputlabelunderlineName" readonly name="diagDate" value="{{$patients->diagDate}}">
                    <div class="row">
                        <div class="col">
                            <b>Type of Diagnosis</b>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="radio" onclick="return false;" value="1" name="ToDRdo" id="diagNew" {{ ($chdata->ToDRdo == '1'? ' checked' : '') }}>
                                    <label for="diagNew">New</label>
                                    
                                </div>
                                
                                <div class="col">
                                    <input class="form-check-input" type="radio" onclick="return false;" value="2" name="ToDRdo" id="diagRetreat" {{ ($chdata->ToDRdo == '2'? ' checked' : '') }}>
                                    <label for="diagRetreat">Retreatment</label>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" onclick="return false;" value="3" name="ToDRdo" id="diagNotTreat" {{ ($chdata->ToDRdo == '3'? ' checked' : '') }}>
                                    <label for="diagNotTreat">Not treated</label>
                                </div>
                                <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" onclick="return false;" value="4" name="ToDRdo" id="diagUnkwn" {{ ($chdata->ToDRdo == '4'? ' checked' : '') }}>
                                            <label for="diagUnkwn">Unknown Treatment</label>
                                            <div class="row">  
                                                <div class="col">
                                                    <input class="form-check-input" type="radio" onclick="return false;" value="5" name="ToDRdo" id="diagInc" {{ ($chdata->ToDRdo == '5'? ' checked' : '') }}>
                                                    <label for="diagInc">Incomplete treatment, now progressive</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input class="form-check-input" type="radio" onclick="return false;" value="6" name="ToDRdo" id="diagCom" {{ ($chdata->ToDRdo == '6'? ' checked' : '') }}>
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
                            <input class="form-check-input" type="radio" onclick="return false;" value="N" name="preDiaCancRdo" id="diagCancNo" {{ ($chdata->preDiaCancRdo == 'N'? ' checked' : '') }}>
                            <label for="diagCancNo">NO</label>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="radio" onclick="return false;" value="Y" name="preDiaCancRdo" id="diagCancYes" {{ ($chdata->preDiaCancRdo == 'Y'? ' checked' : '') }}>
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
                                    </b><input type="text" class="inputlabelunderlineName" readonly name="diagCancPrim" value="{{$patients->diagCancPrim}}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            Date of Diagnosis
                            <div class="row">
                                <div class="col">
                                    </b><input type="date" readonly class="" name="diagCancDate" value="{{$patients->diagCancDate}}">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            Treatment recieved
                            <div class="row">
                                <div class="col">
                                    <input type="hidden" name="trChChemo" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trChChemo" id="diagCancChemo" {{ ($chdata->trChChemo == '1'? ' checked' : '') }}>
                                    <label for="diagCancChemo">Chemotherapy</label>
                                    <input type="hidden" name="trChSurg" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trChSurg" id="diagCancSurg" {{ ($chdata->trChChemo == '1'? ' checked' : '') }}>
                                    <label for="diagCancSurg">Surgery</label>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="trChRad" value="0">
                                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trChRad" id="diagCancRad" {{ ($chdata->trChRad == '1'? ' checked' : '') }}>
                                        <label for="diagCancRad">Radiation</label>
                                        <input type="hidden" name="trChHorm" value="0">
                                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trChHorm" id="diagCancHorm" {{ ($chdata->trChHorm == '1'? ' checked' : '') }}>
                                        <label for="diagCancHorm">Hormonal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="hidden" name="trChNone" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trChNone" id="diagCancNone" {{ ($chdata->trChNone == '1'? ' checked' : '') }}>
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
                                    <input class="form-check-input" type="radio" onclick="return false;" value="1" name="outRdo" id="diagCancRemi" {{ ($chdata->outRdo == '1'? ' checked' : '') }}>
                                    <label for="diagCancRemi">Remission</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="radio" onclick="return false;" value="2" name="outRdo" id="diagCancProg" {{ ($chdata->outRdo == '2'? ' checked' : '') }}>
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
                                            <input type="hidden" name="STchAnal" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchAnal" id="tumAnal" {{ ($chdata->STchAnal == '1'? ' checked' : '') }}>
                                            <label for="tumAnal">Anal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchBone" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchBone" id="tumBone" {{ ($chdata->STchBone == '1'? ' checked' : '') }}>
                                            <label for="tumBone">Bone</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchBreast" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchBreast" id="tumBreast" {{ ($chdata->STchBreast == '1'? ' checked' : '') }}>
                                            <label for="tumBreast">Breast</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchCerv" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchCerv" id="tumCerv" {{ ($chdata->STchCerv == '1'? ' checked' : '') }}>
                                            <label for="tumCerv">Cervical</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchColon" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchColon" id="tumCol" {{ ($chdata->STchColon == '1'? ' checked' : '') }}>
                                            <label for="tumCol">Colon</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchTumEso" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchTumEso" id="tumEso" {{ ($chdata->STchTumEso == '1'? ' checked' : '') }}>
                                            <label for="tumEso">tumEsophageal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchGast" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchGast" id="tumGas" {{ ($chdata->STchGast == '1'? ' checked' : '') }}>
                                            <label for="tumGas">Gastric</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchHead" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchHead" id="tumHeadNeck" {{ ($chdata->STchHead == '1'? ' checked' : '') }}>
                                            <label for="tumHeadNeck">Head and Neck, specify</label>
                                            <input type="text" class="inputlabelunderlineName" readonly name="tumHeadNeck" value="{{$patients->tumHeadNeck}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchHepa" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchHepa" id="tumHepato" {{ ($chdata->STchHepa == '1'? ' checked' : '') }}>
                                            <label for="tumHepato">Hepatobiliary, specify</label>
                                            <input type="text" class="inputlabelunderlineName" readonly name="tumHepato" value="{{$patients->tumHepato}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchKidney" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchKidney" id="tumKid" {{ ($chdata->STchKidney == '1'? ' checked' : '') }}>
                                            <label for="tumKid">Kidney</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchNeuro" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchNeuro" id="tumNeuro" {{ ($chdata->STchNeuro == '1'? ' checked' : '') }}>
                                            <label for="tumNeuro">Neuroendocrine, site</label>
                                            <input type="text" class="inputlabelunderlineName" readonly name="tumNeuro" value="{{$patients->tumNeuro}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchLung" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchLung" id="tumLung" {{ ($chdata->STchLung == '1'? ' checked' : '') }}>
                                            <label for="tumLung">Lung:</label>
                                            <input type="text" class="inputlabelunderlineShort" readonly name="tumLungNSC" value="{{$patients->tumLungNSC}}">
                                            <label for="tumLungNSC">NSCLC</label>
                                            <input type="text" class="inputlabelunderlineShort" readonly name="tumLungSCL" value="{{$patients->tumLungSCL}}">
                                            <label for="tumLungSCL">SCLC</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col border-start border-top border-secondary">
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchOva" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchOva" id="tumOva" {{ ($chdata->STchOva == '1'? ' checked' : '') }}>
                                            <label for="tumOva">Ovarian</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchPanc" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchPanc" id="tumPanc" {{ ($chdata->STchPanc == '1'? ' checked' : '') }}>
                                            <label for="tumPanc">Pancreatic</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchPros" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchPros" id="tumPros" {{ ($chdata->STchPros == '1'? ' checked' : '') }}>
                                            <label for="tumPros">Prostate</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchRect" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchRect" id="tumRec" {{ ($chdata->STchRect == '1'? ' checked' : '') }}>
                                            <label for="tumRec">Rectal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchSkin" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchSkin" id="tumSkin" {{ ($chdata->STchSkin == '1'? ' checked' : '') }}>
                                            <label for="tumSkin">Skin</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchSoftTis" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchSoftTis" id="tumSoftTis" {{ ($chdata->STchSoftTis == '1'? ' checked' : '') }}>
                                            <label for="tumSoftTis">Soft tissue</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchTestis" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchTestis" id="tumTes" {{ ($chdata->STchTestis == '1'? ' checked' : '') }}>
                                            <label for="tumTes">Testis</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchThy" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchThy" id="tumThy" {{ ($chdata->STchThy == '1'? ' checked' : '') }}>
                                            <label for="tumThy">Thyroid</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchBlad" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchBlad" id="tumBladd" {{ ($chdata->STchBlad == '1'? ' checked' : '') }}>
                                            <label for="tumBladd">Urinary Bladder</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchUterine" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchUterine" id="tumUter" {{ ($chdata->STchUterine == '1'? ' checked' : '') }}>
                                            <label for="tumUter">Uterine</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchOther" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="STchOther" id="tumOther" {{ ($chdata->STchOther == '1'? ' checked' : '') }}>
                                            <label for="tumOther">Others:</label>
                                            <input type="text" class="inputlabelunderlineShort" readonly name="tumOther" value="{{$patients->tumOther}}">
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
                                    <input type="hidden" name="heMalChAll" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="heMalChAll" id="hemaAll" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                    <label for="hemaAll">ALL</label>
                                </div>
                                <div class="col">
                                    <input type="hidden" name="heMalChBcell" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="heMalChBcell" id="hemaB" {{ ($chdata->heMalChBcell == '1'? ' checked' : '') }}>
                                    <label for="hemaB">B-cell</label>
                                    <input type="hidden" name="heMalChTcell" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="heMalChTcell" id="hemaT" {{ ($chdata->heMalChTcell == '1'? ' checked' : '') }}>
                                    <label for="hemaT">T-cell</label>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-auto">
                                <input type="hidden" name="heMaChAML" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="heMaChAML" id="hemaAML" {{ ($chdata->heMaChAML == '1'? ' checked' : '') }}>
                                    <label for="hemaAML">AML</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="hidden" name="heMaChBlymp" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="heMaChBlymp" id="hemaBly" {{ ($chdata->heMaChBlymp == '1'? ' checked' : '') }}>
                                    <label for="hemaBly">B-lymphoma ,specify</label>
                                    <input type="text" class="inputlabelunderlineName" readonly name="hemaBlyInput" value="{{$patients->hemaBlyInput}}">
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-auto">
                                <input type="hidden" name="heMaChHodg" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="heMaChHodg" id="hemaHod" {{ ($chdata->heMaChHodg == '1'? ' checked' : '') }}>
                                    <label for="hemaHod">Hodgkin Lymphoma</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                <input type="hidden" name="heMaChMDS" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="heMaChMDS" id="hemaMDS" {{ ($chdata->heMaChMDS == '1'? ' checked' : '') }}>
                                    <label for="hemaMDS">MDS ,specify</label>
                                </div>
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="hemaCMLinput" value="{{$patients->hemaCMLinput}}">
                                    <label for="hemaMDS">CML</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="inputlabelunderlineShort" readonly name="hemaPVinput" value="{{$patients->hemaPVinput}}">
                                            <label for="hemaMDS">PV</label>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="inputlabelunderlineShort" readonly name="hemaETinput" value="{{$patients->hemaETinput}}">
                                                    <label for="hemaMDS">ET</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="inputlabelunderlineShort" readonly name="hemaMFinput" value="{{$patients->hemaMFinput}}">
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
                                <input type="hidden" name="heMaChTlymp" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="heMaChTlymp" id="hemaTlym" {{ ($chdata->heMaChTlymp == '1'? ' checked' : '') }}>
                                    <label for="hemaTlym">T-lymphoma</label>
                                    <input type="text" class="inputlabelunderlineName" readonly name="hemaTinput" value="{{$patients->hemaTinput}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="hidden" name="heMaChOth" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="heMaChOth" id="hemaOthers" {{ ($chdata->heMaChOth == '1'? ' checked' : '') }}>
                                    <label for="hemaOthers">Others:</label>
                                    <input type="text" class="inputlabelunderlineName" readonly name="hemaOthersinput" value="{{$patients->hemaOthersinput}}">
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
                    <input type="hidden" name="conChNa" value="0">
                    <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="conChNa" id="NA" checked {{ ($chdata->conChNa == '1'? ' checked' : '') }}>
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
                                        <input type="hidden" name="conSTchAnal" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchAnal" id="contumAnal" {{ ($chdata->conSTchAnal == '1'? ' checked' : '') }}>
                                            <label for="contumAnal">Anal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchBone" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchBone" id="contumBone" {{ ($chdata->conSTchBone == '1'? ' checked' : '') }}>
                                            <label for="contumBone">Bone</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchBreast" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchBreast" id="contumBreast" {{ ($chdata->conSTchBreast == '1'? ' checked' : '') }}> 
                                            <label for="contumBreast">Breast</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchCerv" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchCerv" id="contumCerv" {{ ($chdata->conSTchCerv == '1'? ' checked' : '') }}>
                                            <label for="contumCerv">Cervical</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchColon" id="contumCol" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="contumCol">Colon</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchTumEso" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchTumEso" id="contumEso" {{ ($chdata->conSTchTumEso == '1'? ' checked' : '') }}>
                                            <label for="contumEso">tumEsophageal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchGast" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchGast" id="contumGas" {{ ($chdata->conSTchGast == '1'? ' checked' : '') }}>
                                            <label for="contumGas">Gastric</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchHead" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchHead" id="contumHeadNeck" {{ ($chdata->conSTchHead == '1'? ' checked' : '') }}>
                                            <label for="contumHeadNeck">Head and Neck, specify</label>
                                            <input type="text" class="inputlabelunderlineName" readonly name="contumHeadNeck" value="{{$patients->contumHeadNeck}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchHepa" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchHepa" id="contumHepato" {{ ($chdata->conSTchHepa == '1'? ' checked' : '') }}>
                                            <label for="contumHepato">Hepatobiliary, specify</label>
                                            <input type="text" class="inputlabelunderlineName" readonly name="contumHepato" value="{{$patients->contumHepato}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">      
                                        <input type="hidden" name="conSTchKidney" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchKidney" id="contumKid" {{ ($chdata->conSTchKidney == '1'? ' checked' : '') }}>
                                            <label for="contumKid">Kidney</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchNeuro" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchNeuro" id="contumNeuro" {{ ($chdata->conSTchNeuro == '1'? ' checked' : '') }}>
                                            <label for="contumNeuro">Neuroendocrine, site</label>
                                            <input type="text" class="inputlabelunderlineName" readonly name="contumNeuro" value="{{$patients->contumNeuro}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchLung" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchLung" id="contumLung" {{ ($chdata->conSTchLung == '1'? ' checked' : '') }}>
                                            <label for="contumLung">Lung:</label>
                                            <input type="text" class="inputlabelunderlineShort" readonly name="contumLungNSC" value="{{$patients->contumLungNSC}}">
                                            <label for="contumLungNSC">NSCLC</label>
                                            <input type="text" class="inputlabelunderlineShort" readonly name="contumLungSCL" value="{{$patients->contumLungSCL}}">
                                            <label for="contumLungSCL">SCLC</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col border-start border-top border-secondary">
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchOva" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchOva" id="contumOva" {{ ($chdata->conSTchOva == '1'? ' checked' : '') }}>
                                            <label for="contumOva">Ovarian</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchPanc" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchPanc" id="contumPanc" {{ ($chdata->conSTchPanc == '1'? ' checked' : '') }}>
                                            <label for="contumPanc">Pancreatic</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchPros" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchPros" id="contumPros" {{ ($chdata->conSTchPros == '1'? ' checked' : '') }}>
                                            <label for="contumPros">Prostate</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchRect" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchRect" id="contumRec" {{ ($chdata->conSTchRect == '1'? ' checked' : '') }}>
                                            <label for="contumRec">Rectal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchSkin" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchSkin" id="contumSkin" {{ ($chdata->conSTchSkin == '1'? ' checked' : '') }}>
                                            <label for="contumSkin">Skin</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchSoftTis" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchSoftTis" id="contumSoftTis" {{ ($chdata->conSTchSoftTis == '1'? ' checked' : '') }}>
                                            <label for="contumSoftTis">Soft tissue</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchTestis" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchTestis" id="contumTes" {{ ($chdata->conSTchTestis == '1'? ' checked' : '') }}>
                                            <label for="contumTes">Testis</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchThy" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchThy" id="contumThy" {{ ($chdata->conSTchThy == '1'? ' checked' : '') }}>
                                            <label for="contumThy">Thyroid</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchBlad" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchBlad" id="contumBladd" {{ ($chdata->conSTchBlad == '1'? ' checked' : '') }}>
                                            <label for="contumBladd">Urinary Bladder</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchUterine" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchUterine" id="contumUter" {{ ($chdata->conSTchUterine == '1'? ' checked' : '') }}>
                                            <label for="contumUter">Uterine</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="conSTchOther" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conSTchOther" id="contumOther" {{ ($chdata->conSTchOther == '1'? ' checked' : '') }}>
                                            <label for="contumOther">Others:</label>
                                            <input type="text" class="inputlabelunderlineShort" readonly name="contumOther" value="{{$patients->contumOther}}">
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
                                <input type="hidden" name="conheMalChAll" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conheMalChAll" id="conhemaAll" {{ ($chdata->conheMalChAll == '1'? ' checked' : '') }}>
                                    <label for="conhemaAll">ALL</label>
                                </div>
                                <div class="col">
                                <input type="hidden" name="conheMalChBcell" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conheMalChBcell" id="conhemaB" {{ ($chdata->conheMalChBcell == '1'? ' checked' : '') }}>
                                    <label for="conhemaB">B-cell</label>
                                    <input type="hidden" name="conheMalChTcell" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conheMalChTcell" id="conhemaT" {{ ($chdata->conheMalChTcell == '1'? ' checked' : '') }}>
                                    <label for="conhemaT">T-cell</label>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-auto">
                                <input type="hidden" name="conheMaChAML" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conheMaChAML" id="conhemaAML" {{ ($chdata->conheMaChAML == '1'? ' checked' : '') }}>
                                    <label for="conhemaAML">AML</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="hidden" name="conheMaChBlymp" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conheMaChBlymp" id="conhemaBly" {{ ($chdata->conheMaChBlymp == '1'? ' checked' : '') }}>
                                    <label for="conhemaBly">B-lymphoma ,specify</label>
                                    <input type="text" class="inputlabelunderlineName" readonly name="conhemaBlyInput" value="{{$patients->conhemaBlyInput}}">
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-auto">
                                <input type="hidden" name="conheMaChHodg" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conheMaChHodg" id="conhemaHod" {{ ($chdata->conheMaChHodg == '1'? ' checked' : '') }}>
                                    <label for="conhemaHod">Hodgkin Lymphoma</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                <input type="hidden" name="conheMaChMDS" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conheMaChMDS" id="conhemaMDS" {{ ($chdata->conheMaChMDS == '1'? ' checked' : '') }}>
                                    <label for="conhemaMDS">MDS ,specify</label>
                                </div>
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="conhemaCMLinput" value="{{$patients->conhemaCMLinput}}">
                                    <label for="conhemaMDS">CML</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="inputlabelunderlineShort" readonly name="conhemaPVinput" value="{{$patients->conhemaPVinput}}">
                                            <label for="conhemaMDS">PV</label>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="inputlabelunderlineShort" readonly name="conhemaETinput" value="{{$patients->conhemaETinput}}">
                                                    <label for="conhemaMDS">ET</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="text" class="inputlabelunderlineShort" readonly name="conhemaMFinput" value="{{$patients->conhemaMFinput}}">
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
                                <input type="hidden" name="conheMaChTlymp" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conheMaChTlymp" id="conhemaTlym" {{ ($chdata->conheMaChTlymp == '1'? ' checked' : '') }}>
                                    <label for="conhemaTlym">T-lymphoma</label>
                                    <input type="text" class="inputlabelunderlineName" readonly name="conhemaTinput" value="{{$patients->conhemaTinput}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="hidden" name="conheMaChOth" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="conheMaChOth" id="conhemaOthers" {{ ($chdata->conheMaChOth == '1'? ' checked' : '') }}>
                                    <label for="conhemaOthers">Others:</label>
                                    <input type="text" class="inputlabelunderlineName" readonly name="conhemaOthersinput" value="{{$patients->conhemaOthersinput}}">
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
                    <input type="hidden" name="TaBchCBC" value="0">
                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="TaBchCBC" id="tabCBC" {{ ($chdata->TaBchCBC == '1'? ' checked' : '') }}>
                        <label for="tabCBC">CBC</label>
                    </div>
                    <div class="col-auto" >
                    <input type="hidden" name="TaBchFBS" value="0">
                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="TaBchFBS" id="tabFBS" {{ ($chdata->TaBchFBS == '1'? ' checked' : '') }}>
                        <label for="tabFBS">FBS</label>
                    </div>
                    <div class="col-auto" >
                    <input type="hidden" name="TaBchCreat" value="0">
                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="TaBchCreat" id="tabCreat" {{ ($chdata->TaBchCreat == '1'? ' checked' : '') }}>
                        <label for="tabCreat">CREATININE</label>
                    </div>
                    <div class="col-auto" >
                    <input type="hidden" name="TaBchAST" value="0">
                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="TaBchAST" id="tabAST" {{ ($chdata->TaBchAST == '1'? ' checked' : '') }}>
                        <label for="tabAST">AST/ALT</label>
                    </div>
                    <div class="col-auto" >
                    <input type="hidden" name="TaBchANC" value="0">
                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="TaBchANC" id="tabANC" {{ ($chdata->TaBchANC == '1'? ' checked' : '') }}>
                        <label for="tabANC">ANC</label>
                    </div>
                    <div class="col-auto" >
                    <input type="hidden" name="TaBchCXR" value="0">
                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="TaBchCXR" id="tabCXR" {{ ($chdata->TaBchCXR == '1'? ' checked' : '') }}>
                        <label for="tabCXR">CXR</label>
                    </div>
                    <div class="col-auto" >
                    <input type="hidden" name="TaBchECG" value="0">
                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="TaBchECG" id="tabECG" {{ ($chdata->TaBchECG == '1'? ' checked' : '') }}>
                        <label for="tabECG">ECG</label>
                    </div>
                    <div class="col-auto" >
                    <input type="hidden" name="TaBchUTZ" value="0">
                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="TaBchUTZ" id="tabUTZ" {{ ($chdata->TaBchUTZ == '1'? ' checked' : '') }}>
                        <label for="tabUTZ">UTZ</label>
                    </div>
                    <div class="col-auto" >
                    <input type="hidden" name="TaBchCT" value="0">
                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="TaBchCT" id="tabCT" {{ ($chdata->TaBchCT == '1'? ' checked' : '') }}>
                        <label for="tabCT">CT-SCAN</label>
                    </div>
                    <div class="col-auto" >
                    <input type="hidden" name="TaBchEND" value="0">
                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="TaBchEND" id="tabENDO" {{ ($chdata->TaBchEND == '1'? ' checked' : '') }}>
                        <label for="tabENDO">ENDOSCOPY</label>
                    </div>
                    <div class="col-auto" >
                    <input type="hidden" name="TaBchMRI" value="0">
                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="TaBchMRI" id="tabMRI" {{ ($chdata->TaBchMRI == '1'? ' checked' : '') }}>
                        <label for="tabMRI">MRI</label>
                    </div>
                    <div class="col-auto" >
                    <input type="hidden" name="TaBchOth" value="0">
                        <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="TaBchOth" id="tabOthers" {{ ($chdata->TaBchOth == '1'? ' checked' : '') }}>
                        <label for="tabOthers">Others:</label>
                        <input type="text" class="inputlabelunderlineShort2" readonly name="tabOthers" value="{{$patients->tabOthers}}">
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
                                <input type="hidden" name="latChLeft" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="latChLeft" id="latLeft" {{ ($chdata->latChLeft == '1'? ' checked' : '') }}>
                                    <label for="latLeft">Left</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="hidden" name="latChRight" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="latChRight" id="latRight" {{ ($chdata->latChRight == '1'? ' checked' : '') }}>
                                    <label for="latRight">Right</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="hidden" name="latChMid" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="latChMid" id="latMid" {{ ($chdata->latChMid == '1'? ' checked' : '') }}>
                                    <label for="latMid">Mid</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="hidden" name="latChBilat" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="latChBilat" id="latBilat" {{ ($chdata->latChBilat == '1'? ' checked' : '') }}>
                                    <label for="latBilat">Bilateral</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="hidden" name="latChUndet" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="latChUndet" id="latUndet" {{ ($chdata->latChUndet == '1'? ' checked' : '') }}>
                                    <label for="latUndet">Undetermined</label>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6 border-end border-secondary">
                            <b>Histology (Morphology)/Biopsy result:</b> <small>(PLEASE FILL UP COMPLETELY)</small>
                            <div class="row">
                                <div class="col-auto">
                                <input type="hidden" name="histoChEndo" value="0">
                                    Biopsy type:  <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="histoChEndo" id="bioEndo" {{ ($chdata->histoChEndo == '1'? ' checked' : '') }}>
                                    <label for="bioEndo">endoscopy</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="histoChFNAB" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="histoChFNAB" id="bioFNAB" {{ ($chdata->histoChFNAB == '1'? ' checked' : '') }}>
                                    <label for="bioFNAB">FNAB</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="histoChCore" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="histoChCore" id="bioCore" {{ ($chdata->histoChCore == '1'? ' checked' : '') }}>
                                    <label for="bioCore">core biopsy</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="histoChEx" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="histoChEx" id="bioExIn" {{ ($chdata->histoChEx == '1'? ' checked' : '') }}>
                                    <label for="bioExIn">excision/incision</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    Tissue biopsied:
                                    <input type="text" class="inputlabelunderlineName" readonly name="bioTis" value="{{$patients->bioTis}}">
                                </div>
                                <div class="col">
                                    Tumor size(cms):
                                    <input type="text" class="inputlabelunderlineShort" readonly name="bioTumSiz" value="{{$patients->bioTumSiz}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    Histopathology:
                                    <input type="text" class="inputlabelunderlineName" readonly name="bioHis" value="{{$patients->bioHis}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    carcinoma type:
                                    <input type="text" class="inputlabelunderlineName" readonly name="bioCarc" value="{{$patients->bioCarc}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    neuroendocrine, tumor and grade:
                                    <input type="text" class="inputlabelunderlineName" readonly name="bioNeuro" value="{{$patients->bioNeuro}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    mesenchymal (sarcoma etc), specify:
                                    <input type="text" class="inputlabelunderlineName" readonly name="bioMes" value="{{$patients->bioMes}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    Others
                                    <input type="text" class="inputlabelunderlineName" readonly name="bioOther" value="{{$patients->bioOther}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    Histologic grade:
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" onclick="return false;" value="1" name="histoRdoGrd" id="bioHisWell" {{ ($chdata->histoRdoGrd == '1'? ' checked' : '') }}>
                                    <label for="bioHisWell">well differentiated</label>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" onclick="return false;" value="2" name="histoRdoGrd" id="bioHisMod" {{ ($chdata->histoRdoGrd == '2'? ' checked' : '') }}>
                                            <label for="bioHisMod">moderately differentiated</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" onclick="return false;" value="3" name="histoRdoGrd" id="bioHisPoor" {{ ($chdata->histoRdoGrd == '3'? ' checked' : '') }}>
                                    <label for="bioHisPoor">poorly differentiated</label>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" onclick="return false;" value="4" name="histoRdoGrd" id="bioHisUn" {{ ($chdata->histoRdoGrd == '4'? ' checked' : '') }}>
                                            <label for="bioHisUn">undifferentiated</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    LVI 
                                    <input type="text" class="inputlabelunderlineShort" readonly name="bioLVImin" value="{{$patients->bioLVImin}}">
                                    <label for="bioLVImin">(-)</label>
                                </div>
                                <div class="col">
                                     
                                    <input type="text" class="inputlabelunderlineShort" readonly name="bioLVIplus" value="{{$patients->bioLVIplus}}">
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
                                        <label for="" class="h3">T</label>
                                        <select id="TNMsystemT" disabled class="custom-select mr-sm-2" name="TNMsystemT">
                                                <option selected>{{{$patients->TNMsystemT}}}</option>
                                                <option>---</option>
                                                <option value="X">X</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                    </div>
                                    <div class="col">
                                    <label for="" class="h3">N</label>
                                        <select id="TNMsystemN" disabled class="custom-select mr-sm-2" name="TNMsystemN">
                                                <option selected>{{{$patients->TNMsystemN}}}</option>
                                                <option >---</option>
                                                <option value="X">X</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                    </div>
                                    <div class="col">
                                    <label for="" class="h3">M</label>
                                        <select id="TNMsystemM" disabled class="custom-select mr-sm-2" name="TNMsystemM">
                                                <option selected>{{{$patients->TNMsystemM}}}</option>
                                                <option >---</option>
                                                <option value="X">X</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                            </select>
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
                                <input type="hidden" name="tstage0" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="tstage0" id="tstage0" {{ ($chdata->tstage0 == '1'? ' checked' : '') }}>
                                    <label for="tstage0">Stage 0</label>
                                </div>
                                <div class="col">
                                <input type="hidden" name="tstageIIA" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="tstageIIA" id="tstageIIA" {{ ($chdata->tstageIIA == '1'? ' checked' : '') }}>
                                    <label for="tstageIIA">Stage IIA</label>
                                </div>
                                <div class="col">
                                <input type="hidden" name="tstageIIIA" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="tstageIIIA" id="tstageIIIA" {{ ($chdata->tstageIIIA == '1'? ' checked' : '') }}>
                                    <label for="tstageIIIA">Stage IIIA</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="hidden" name="tstage1A" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="tstage1A" id="tstage1A" {{ ($chdata->tstage1A == '1'? ' checked' : '') }}>
                                    <label for="tstage1A">Stage 1A</label>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="tstage1B" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="tstage1B" id="tstage1B" {{ ($chdata->tstage1B == '1'? ' checked' : '') }}>
                                            <label for="tstage1B">Stage 1B</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                <input type="hidden" name="tstageIIB" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="tstageIIB" id="tstageIIB" {{ ($chdata->tstageIIB == '1'? ' checked' : '') }}>
                                    <label for="tstageIIB">Stage IIB</label>
                                </div>
                                <div class="col">
                                <input type="hidden" name="tstageIIIB" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="tstageIIIB" id="tstageIIIB" {{ ($chdata->tstageIIIB == '1'? ' checked' : '') }}>
                                    <label for="tstageIIIB">Stage IIIB</label>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="tstageIIIC" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="tstageIIIC" id="tstageIIIC" {{ ($chdata->tstageIIIC == '1'? ' checked' : '') }}>
                                            <label for="tstageIIIC">Stage IIIC</label>
                                            <div class="row">
                                                <div class="col">
                                                <input type="hidden" name="tstageIV" value="0">
                                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="tstageIV" id="tstageIV" {{ ($chdata->tstageIV == '1'? ' checked' : '') }}>
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
                                    <input type="hidden" name="stagIn" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagIn" id="stagIn" {{ ($chdata->stagIn == '1'? ' checked' : '') }}>
                                    <label for="stagIn">In-Situ</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagLocal" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagLocal" id="stagLocal" {{ ($chdata->stagLocal == '1'? ' checked' : '') }}>
                                    <label for="stagLocal">Localized</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagDir" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagDir" id="stagDir" {{ ($chdata->stagDir == '1'? ' checked' : '') }}>
                                    <label for="stagDir">Direct Extension</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagReg" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagReg" id="stagReg" {{ ($chdata->stagReg == '1'? ' checked' : '') }}>
                                    <label for="stagReg">Regional Lymph Node</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stag34" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stag34" id="stag34" {{ ($chdata->stag34 == '1'? ' checked' : '') }}>
                                    <label for="stag34">3+4</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagDis" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagDis" id="stagDis" {{ ($chdata->stagDis == '1'? ' checked' : '') }}>
                                    <label for="stagDis">Distant Metastasis</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagUn" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagUn" id="stagUn" {{ ($chdata->stagUn == '1'? ' checked' : '') }}>
                                    <label for="stagUn">Unknown</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                    <div class="col">
                                        <b>Sites of Distant Metastatis:</b>Number of metaststic sites:<input type="text" class="inputlabelunderline" readonly name="stagNoMet" value="{{$patients->stagNoMet}}" placeholder="---">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                <input type="hidden" name="stagNone" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagNone" id="stagNone" {{ ($chdata->stagNone == '1'? ' checked' : '') }}>
                                    <label for="stagNone">None</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagDisLy" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagDisLy" id="stagDisLy" {{ ($chdata->stagDisLy == '1'? ' checked' : '') }}>
                                    <label for="stagDisLy">Distant Lymph Nodes</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagBone" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagBone" id="stagBone" {{ ($chdata->stagBone == '1'? ' checked' : '') }}>
                                    <label for="stagBone">Bone</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagLiver" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagLiver" id="stagLiver" {{ ($chdata->stagLiver == '1'? ' checked' : '') }}>
                                    <label for="stagLiver">Liver</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagLung" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagLung" id="stagLung" {{ ($chdata->stagLung == '1'? ' checked' : '') }}>
                                    <label for="stagLung">Lung(Pleura)</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagBrain" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagBrain" id="stagBrain" {{ ($chdata->stagBrain == '1'? ' checked' : '') }}>
                                    <label for="stagBrain">Brain</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagOvary" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagOvary" id="stagOvary" {{ ($chdata->stagOvary == '1'? ' checked' : '') }}>
                                    <label for="stagOvary">Ovary</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagSkin" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagSkin" id="stagSkin" {{ ($chdata->stagSkin == '1'? ' checked' : '') }}>
                                    <label for="stagSkin">Skin</label>
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagOther" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagOther" id="stagOther" {{ ($chdata->stagOther == '1'? ' checked' : '') }}>
                                    <label for="stagOther">Other:</label>
                                    <input type="text" class="inputlabelunderlineShort" readonly name="stagOther" value="{{$patients->stagOther}}">
                                </div>
                                <div class="col-auto">
                                <input type="hidden" name="stagUnk" value="0">
                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="stagUnk" id="stagUnk" {{ ($chdata->stagUnk == '1'? ' checked' : '') }}>
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
                                    <input type="text" class="inputlabelunderlineName" readonly name="seSerum" value="{{$patients->seSerum}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineName" readonly name="seSerum" value="{{$patients->seSerum}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineName" readonly name="seSerum" value="{{$patients->seSerum}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            Level
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="seLvl" value="{{$patients->seLvl}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="seLvl" value="{{$patients->seLvl}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="seLvl" value="{{$patients->seLvl}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            Ref range
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="seRange" value="{{$patients->seRange}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="seRange" value="{{$patients->seRange}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="seRange" value="{{$patients->seRange}}">
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
                                    <input type="text" class="inputlabelunderlineName" readonly name="molMar" value="{{$patients->molMar}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineName" readonly name="molMar" value="{{$patients->molMar}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineName" readonly name="molMar" value="{{$patients->molMar}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            Level
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="molLvl" value="{{$patients->molLvl}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="molLvl" value="{{$patients->molLvl}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="molLvl" value="{{$patients->molLvl}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            Ref range
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="molRange" value="{{$patients->molRange}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="molRange" value="{{$patients->molRange}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="inputlabelunderlineShort" readonly name="molRange" value="{{$patients->molRange}}">
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
                            <input type="text" class="inputlabelunderline" readonly name="fiCyt" value="{{$patients->fiCyt}}" placeholder="---">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col border-top border-secondary border-bottom" id="divpeach">
                            <b>FLOW CYTOMETRY:</b>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="inputlabelunderline" readonly name="flowCyt" value="{{$patients->flowCyt}}" placeholder="---">
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
                                            <input class="form-check-input" type="radio" onclick="return false;" value="1" name="treatCurCom" id="treatCurCom" {{ ($chdata->treatCurCom == '1'? ' checked' : '') }}>
                                            <label for="treatCurCom">Curative-complete</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" onclick="return false;" value="2" name="treatCurCom" id="treatCurInc" {{ ($chdata->treatCurCom == '2'? ' checked' : '') }}>
                                            <label for="treatCurInc">Curative-incomplete</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" onclick="return false;" value="3" name="treatCurCom" id="treatPall" {{ ($chdata->treatCurCom == '3'? ' checked' : '') }}>
                                            <label for="treatPall">Palliative only</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" onclick="return false;" value="4" name="treatCurCom" id="treatOther" {{ ($chdata->treatCurCom == '4'? ' checked' : '') }}>
                                            <label for="treatOther">Others, specify:</label>
                                            <input type="text" class="inputlabelunderlineShort" readonly name="treatOther" value="{{$patients->treatOther}}">
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
                                            <input class="form-check-input" type="radio" onclick="return false;" value="1" name="primTreat" id="trPrimYes" {{ ($chdata->primTreat == '1'? ' checked' : '') }}>
                                            <label for="trPrimYes">Yes</label>
                                        </div>
                                        <div class="col">
                                            Date:
                                            <input type="date" readonly name="trPrimDate">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="radio" onclick="return false;" value="2" name="primTreat" id="trPrimNo" {{ ($chdata->primTreat == '2'? ' checked' : '') }}>
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
                                        <input type="hidden" name="trAddSur" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trAddSur" id="trAddSur" {{ ($chdata->trAddSur == '1'? ' checked' : '') }}>
                                                <label for="trAddSur">Surgery</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        <input type="hidden" name="trAddRad" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trAddRad" id="trAddRad" {{ ($chdata->trAddRad == '1'? ' checked' : '') }}>
                                                <label for="trAddRad">Radiotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        <input type="hidden" name="trAddChem" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trAddChem" id="trAddChem" {{ ($chdata->trAddChem == '1'? ' checked' : '') }}>
                                                <label for="trAddChem">Chemotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        <input type="hidden" name="traAddImm" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="traAddImm" id="traAddImm" {{ ($chdata->traAddImm == '1'? ' checked' : '') }}>
                                                <label for="traAddImm">Immunotherapy/Cryotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        <input type="hidden" name="trAddHormo" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trAddHormo" id="trAddHormo" {{ ($chdata->trAddHormo == '1'? ' checked' : '') }}>
                                                <label for="trAddHormo">Hormonal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        <input type="hidden" name="trAddUn" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trAddUn" id="trAddUn" {{ ($chdata->trAddUn == '1'? ' checked' : '') }}>
                                                <label for="trAddUn">Unknown</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="trAddOth" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trAddOth" id="trAddOth" {{ ($chdata->trAddOth == '1'? ' checked' : '') }}>
                                                <label for="trAddOth">Others, specify:</label>
                                                <input type="text" class="inputlabelunderlineShort" readonly name="trAddOthInput" value="{{$patients->trAddOthInput}}">
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
                                        <input type="hidden" name="trPlAddSur" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trPlAddSur" id="trPlAddSur" {{ ($chdata->trPlAddSur == '1'? ' checked' : '') }}>
                                                <label for="trPlAddSur">Surgery</label>
                                        </div>
                                    </div>
                                        <div class="col-auto">
                                        <input type="hidden" name="trPlAddRad" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trPlAddRad" id="trPlAddRad" {{ ($chdata->trPlAddRad == '1'? ' checked' : '') }}>
                                                <label for="trPlAddRad">Radiotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        <input type="hidden" name="trPlAddChem" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trPlAddChem" id="trPlAddChem" {{ ($chdata->trPlAddChem == '1'? ' checked' : '') }}>
                                                <label for="trPlAddChem">Chemotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        <input type="hidden" name="trPlAddImm" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trPlAddImm" id="trPlAddImm" {{ ($chdata->trPlAddImm == '1'? ' checked' : '') }}>
                                                <label for="trPlAddImm">Immunotherapy/Cryotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        <input type="hidden" name="trPlAddHormo" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trPlAddHormo" id="trPlAddHormo" {{ ($chdata->trPlAddHormo == '1'? ' checked' : '') }}>
                                                <label for="trPlAddHormo">Hormonal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        <input type="hidden" name="trPlAddUn" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trPlAddUn" id="trPlAddUn" {{ ($chdata->trPlAddUn == '1'? ' checked' : '') }}>
                                                <label for="trPlAddUn">Unknown</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="trPlAddOth" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trPlAddOth" id="trPlAddOth" {{ ($chdata->trPlAddOth == '1'? ' checked' : '') }}>
                                                <label for="trPlAddOth">Others, specify:</label>
                                                <input type="text" class="inputlabelunderlineShort" readonly name="trPlAddOthInput" value="{{$patients->trPlAddOthInput}}">
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
                                        <input type="hidden" name="trTrSurg" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trTrSurg" id="trTrSurg" {{ ($chdata->trTrSurg == '1'? ' checked' : '') }}>
                                            <label for="trTrSurg">Surgery</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="trTrRad" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trTrRad" id="trTrRad" {{ ($chdata->trTrRad == '1'? ' checked' : '') }}>
                                            <label for="trTrRad">Radiotheraphy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        <input type="hidden" name="trTrChem" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trTrChem" id="trTrChem" {{ ($chdata->trTrChem == '1'? ' checked' : '') }}>
                                                <label for="trTrChem">Chemotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        <input type="hidden" name="trTrImm" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trTrImm" id="trTrImm" {{ ($chdata->trTrImm == '1'? ' checked' : '') }}>
                                                <label for="trTrImm">Immunotherapy/Cryotherapy</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        <input type="hidden" name="trTrHormo" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trTrHormo" id="trTrHormo" {{ ($chdata->trTrHormo == '1'? ' checked' : '') }}>
                                                <label for="trTrHormo">Hormonal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        <input type="hidden" name="trTrUn" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trTrUn" id="trTrUn" {{ ($chdata->trTrUn == '1'? ' checked' : '') }}>
                                                <label for="trTrUn">Unknown</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="trTrOth" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trTrOth" id="trTrOth" {{ ($chdata->trTrOth == '1'? ' checked' : '') }}>
                                                <label for="trTrOth">Others, specify:</label>
                                                <input type="text" class="inputlabelunderlineShort" readonly name="trTrOthInput" value="{{$patients->trTrOthInput}}">
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
                                        <input type="hidden" name="trPlNeo" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trPlNeo" id="trPlNeo" {{ ($chdata->trPlNeo == '1'? ' checked' : '') }}>
                                                <label for="trPlNeo">Neoadjuvant</label>
                                        </div>
                                        <div class="col-auto">
                                        <input type="hidden" name="trPlAdj" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trPlAdj" id="trPlAdj" {{ ($chdata->trPlAdj == '1'? ' checked' : '') }}>
                                                <label for="trPlAdj">Adjuvant</label>
                                        </div>
                                        <div class="col-auto">
                                        <input type="hidden" name="trPlMeta" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="trPlMeta" id="trPlMeta" {{ ($chdata->trPlMeta == '1'? ' checked' : '') }}>
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
                                            <input type="text" class="inputlabelunderlineName" readonly name="proto1st1" value="{{$patients->proto1st1}}">-<input type="text" class="inputlabelunderlineShort" readonly name="proto1stcy1" value="{{$patients->proto1stcy1}}">
                                            # of cycles
                                            <div class="row">
                                                <div class="col">
                                                <input type="text" class="inputlabelunderlineName" readonly name="proto1st2" value="{{$patients->proto1st2}}">-<input type="text" class="inputlabelunderlineShort" readonly name="proto1stcy2" value="{{$patients->proto1stcy2}}">
                                                # of cycles
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <input type="hidden" name="trPlNeo" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="trPlbgh" id="trPlNeo" {{ ($chdata->trPlNeo == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">BGH</label>
                                            <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">other hosp</label>
                                            <div class="row">
                                                <div class="col">
                                                <input type="hidden" name="heMalTcell" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                                <label for="trPlAdj">BGH</label>
                                                <input type="hidden" name="heMalTcell" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                                <label for="trPlAdj">other hosp</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}> 
                                            <label for="trPlAdj">remission</label>
                                            <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">stable dse</label>
                                            <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">R/R</label>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        2<sup>nd</sup> line
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" class="inputlabelunderlineName" readonly name="proto2nd1" value="{{$patients->proto2nd1}}">-<input type="text" class="inputlabelunderlineShort" readonly name="proto2ndcy1" value="{{$patients->proto2ndcy1}}">
                                            # of cycles
                                            <div class="row">
                                                <div class="col">
                                                <input type="text" class="inputlabelunderlineName" readonly name="proto2nd2" value="{{$patients->proto2nd2}}">-<input type="text" class="inputlabelunderlineShort" readonly name="proto2ndcy2" value="{{$patients->proto2ndcy2}}">
                                                # of cycles
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">BGH</label>
                                            <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">other hosp</label>
                                            <div class="row">
                                                <div class="col">
                                                <input type="hidden" name="heMalTcell" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                                <label for="trPlAdj">BGH</label>
                                                <input type="hidden" name="heMalTcell" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                                <label for="trPlAdj">other hosp</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">remission</label>
                                            <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">stable dse</label>
                                            <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">R/R</label>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        3<sup>rd</sup> line
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" class="inputlabelunderlineName" readonly name="proto3rd1" value="{{$patients->proto3rd1}}">-<input type="text" class="inputlabelunderlineShort" readonly name="proto3rdcy1" value="{{$patients->proto3rdcy1}}">
                                            # of cycles
                                            <div class="row">
                                                <div class="col">
                                                <input type="text" class="inputlabelunderlineName" readonly name="proto3rd2" value="{{$patients->proto3rd2}}">-<input type="text" class="inputlabelunderlineShort" readonly name="proto3rdcy2" value="{{$patients->proto3rdcy2}}">
                                                # of cycles
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">BGH</label>
                                            <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">other hosp</label>
                                            <div class="row">
                                                <div class="col">
                                                <input type="hidden" name="heMalTcell" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                                <label for="trPlAdj">BGH</label>
                                                <input type="hidden" name="heMalTcell" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                                <label for="trPlAdj">other hosp</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">remission</label>
                                            <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">stable dse</label>
                                            <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">R/R</label>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        4<sup>th</sup> line
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" class="inputlabelunderlineName" readonly name="proto4th1" value="{{$patients->proto4th1}}">-<input type="text" class="inputlabelunderlineShort" readonly name="proto4thcy1" value="{{$patients->proto4thcy1}}">
                                            # of cycles
                                            <div class="row">
                                                <div class="col">
                                                <input type="text" class="inputlabelunderlineName" readonly name="proto4th2" value="{{$patients->proto4th2}}">-<input type="text" class="inputlabelunderlineShort" readonly name="proto4thcy2" value="{{$patients->proto4thcy2}}">
                                                # of cycles
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">BGH</label>
                                            <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">other hosp</label>
                                            <div class="row">
                                                <div class="col">
                                                <input type="hidden" name="heMalTcell" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                                <label for="trPlAdj">BGH</label>
                                                <input type="hidden" name="heMalTcell" value="0">
                                                <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                                <label for="trPlAdj">other hosp</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">remission</label>
                                            <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                            <label for="trPlAdj">stable dse</label>
                                            <input type="hidden" name="heMalTcell" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="" name="cancData" id="trPlNeo" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
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
                                           <input class="form-check-input" type="radio" onclick="return false;" value="1" name="radTherapy" id="radiaThNo" {{ ($chdata->radTherapy == '1'? ' checked' : '') }}>
                                            <label for="radiaThNo">NO</label>
                                            <input class="form-check-input" type="radio" onclick="return false;" value="2" name="radTherapy" id="radiaThYes" {{ ($chdata->radTherapy == '2'? ' checked' : '') }}>
                                            <label for="radiaThYes">YES</label>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col">
                                           <b>Identify site:</b>
                                           <input type="text" class="inputlabelunderlineName" readonly name="radSite" value="{{$patients->radSite}}">
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col">
                                           Setting: 
                                            <input class="form-check-input" type="radio" onclick="return false;" value="1" name="idSiteSetting" id="radiaThPre" {{ ($chdata->idSiteSetting == '1'? ' checked' : '') }}>
                                            <label for="radiaThPre">Pre-operative</label>
                                            <input class="form-check-input" type="radio" onclick="return false;" value="2" name="idSiteSetting" id="radiaThPost" {{ ($chdata->idSiteSetting == '2'? ' checked' : '') }}>
                                            <label for="radiaThPost">Post-operative</label>
                                            <input class="form-check-input" type="radio" onclick="return false;" value="3" name="idSiteSetting" id="radiaThPall" {{ ($chdata->idSiteSetting == '3'? ' checked' : '') }}>
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
                                                <input type="hidden" name="radiaThReg" value="0">
                                                    <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="radiaThReg" id="radiaThReg" {{ ($chdata->radiaThReg == '1'? ' checked' : '') }}>
                                                    <label for="radiaThReg">Regular</label>
                                                    <div class="row">
                                                        <div class="col">
                                                        <input type="hidden" name="radiaThbst" value="0">
                                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="radiaThbst" id="radiaThbst" {{ ($chdata->radiaThbst == '1'? ' checked' : '') }}>
                                                            <label for="radiaThbst">Boost</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    Sites:
                                                    <input type="text" class="inputlabelunderlineName" readonly name="doseRegSite" value="{{$patients->doseRegSite}}">
                                                    <div class="row">
                                                        <div class="col">
                                                            Sites:
                                                            <input type="text" class="inputlabelunderlineName" readonly name="doseBoostSite" value="{{$patients->doseBoostSite}}">
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
                                            <input class="form-check-input" type="radio" onclick="return false;" value="1" name="radThSurg" id="radiaThSurgNo" {{ ($chdata->radThSurg == '1'? ' checked' : '') }}>
                                            <label for="radiaThSurgNo">NO</label>
                                            <input class="form-check-input" type="radio" onclick="return false;" value="2" name="radThSurg" id="radiaThSurgYes" {{ ($chdata->radThSurg == '2'? ' checked' : '') }}>
                                            <label for="radiaThSurgYes">YES</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-auto">
                                        Date: <input type="date" readonly name="trPrimDate">
                                        </div>
                                        <div class="col">
                                        Surgeon:
                                        <input type="text" class="inputlabelunderlineName" readonly name="surSurgeon" value="{{$patients->surSurgeon}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        Planned Operation:
                                        <input type="text" class="inputlabelunderlineName" readonly name="surPlanOp" value="{{$patients->surPlanOp}}">
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
                                        <input type="text" class="inputlabelunderlineName" readonly name="surHormone" value="{{$patients->surHormone}}">
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
                                        <input type="text" class="inputlabelunderlineName" readonly name="surRemarks" value="{{$patients->surRemarks}}">
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
                                            <input type="text" class="inputlabelunderline" readonly name="surOthers" value="{{$patients->surOthers}}" placeholder="---">
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
                                    <input class="form-check-input" type="radio" onclick="return false;" value="1" name="ffStat" id="FUwoDis" {{ ($chdata->ffStat == '1'? ' checked' : '') }}>
                                    <label for="FUwoDis">Alive without disease</label>
                               </div>
                               <div class="col-auto">
                                    <input class="form-check-input" type="radio" onclick="return false;" value="2" name="ffStat" id="FUwDis" {{ ($chdata->ffStat == '2'? ' checked' : '') }}>
                                    <label for="FUwDis">Alive with disease</label>
                               </div>
                               <div class="col-auto">
                                    <input class="form-check-input" type="radio" onclick="return false;" value="3" name="ffStat" id="FUwoDead" {{ ($chdata->ffStat == '3'? ' checked' : '') }}>
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
                                    <input type="text" class="inputlabelunderlineName" readonly name="timeTreat" value="{{$patients->timeTreat}}">
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
                                                    <input type="text" class="inputlabelunderlineName" readonly name="oncoLast" value="{{$patients->oncoLast}}">
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
                                                    <input type="text" class="inputlabelunderlineName" readonly name="oncoFirst" value="{{$patients->oncoFirst}}">
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
                                                    <input type="text" class="inputlabelunderlineName" readonly name="oncoMiddle" value="{{$patients->oncoMiddle}}">
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
                                        <input type="hidden" name="FUdeptGyne" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="FUdeptGyne" id="FUdeptGyne" {{ ($chdata->FUdeptGyne == '1'? ' checked' : '') }}>
                                            <label for="FUdeptGyne">Gyne</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="FUdeptHema" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="FUdeptHema" id="FUdeptHema" {{ ($chdata->FUdeptHema == '1'? ' checked' : '') }}>
                                            <label for="FUdeptHema">Hema</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="FUdeptMo" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="FUdeptMo" id="FUdeptMo" {{ ($chdata->FUdeptMo == '1'? ' checked' : '') }}>
                                            <label for="FUdeptMo">MO</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="FUdeptPedia" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="FUdeptPedia" id="FUdeptPedia" {{ ($chdata->FUdeptPedia == '1'? ' checked' : '') }}>
                                            <label for="FUdeptPedia">Pedia Hema-onco</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="FUdepttrt" value="0">
                                            <input class="form-check-input" type="checkbox" onclick="return false;" value="1" name="FUdepttrt" id="FUdepttrt" {{ ($chdata->FUdepttrt == '1'? ' checked' : '') }}>
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
      <div class="row ">
          <div class="col">
              <div class="row justify-content-md-center">
                  <div class="col-lg-2">
                    <a href="/viewCancerComplete" class="btn btn-outline-primary ">back</a>
                  </div>
                  <div class="col-lg-2">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                  </div>
                  <!-- <div class="col-lg-2">
                  <button type="submit">Save Into</button>
                        <select id="status" name="status" class="form-select-sm d-print-none" aria-label=".form-select-sm example">
                                <option value="drafts">Drafts</option>
                                <option value="completeForm">Final Output</option>
                        </select>
                  </div> -->
              </div>
              <div class="row">
                  
              </div>
          </div>
      </div>

    <div style="margin-right:40%;margin-top:10px;float:right;">
      
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
@endforeach
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

(function(){
    var rdoCivStat = document.getElementById("rdoCivStat");
    rdoCivStat.addEventListener('click', function (){
        if(this.checked){

        }else{
            civChAnul.disabled = 'true';
            civChAnul.checked = '';
            civChAnul.value='';
            civChDiv.disabled = 'true';
            civChDiv.checked = '';
            civChDiv.value = '';
        }
        });
})
</script>

</body>
</html>
