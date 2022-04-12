@extends('patients.layouts')
@section('content')

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="resources/css/css.css"> -->
    <!--Google Icon Font-->
    <!-- <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	  <!-- Propeller CSS -->  
	  <!-- <link rel="stylesheet" href="css/propeller.min.css"> -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS, then Propeller js -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/propeller.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Convergence&family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
	   -->
  </body>
<style>
body{
padding:0px;
margin:0px;
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
  width: 80px;
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
</head>
@foreach($patients as $patients)

<!-- <form action="{{ url ('/store/$patients->hpercode') }}" type="get"> -->
<div class="container-fluid border border-secondary"><!-- start logo header --> 
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
        
            <div class="col-auto text-white" id="divIndigo">
                <center>GENERAL DATA</center> 
            </div>
            <div class="col-auto text-black" id="divpink">
                CLASSIFICATION:
            </div>
            <div class="col-auto text-black" id="divpink">
                <input class="form-check-input" type="checkbox" value="" name="classification" id="pay">
                <label class="form-check-label" for="pay">
                    PAY
                </label>
            </div>
            <div class="col-auto text-black" id="divpink">
                <input class="form-check-input" type="checkbox" value="" name="classification" id="charity">
                <label class="form-check-label" for="charity">
                    CHARITY
                </label>
            </div>
            <div class="col-auto text-black" id="divpink">
                <input class="form-check-input" type="checkbox" value="" name="classification" id="nbb">
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
                        <input class="form-check-input" type="radio" value="" name="cspmap" id="csYes">
                        <label class="form-check-label" for="csYes">
                            YES
                        </label>
                    </div>
                    <div class="col text-black border-end border-secondary" id="divpink">
                        <input class="form-check-input" type="radio" value="" name="cspmap"id="csNo">
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
                        <input class="form-check-input" type="radio" value="" name="zpack" id="zYes">
                        <label class="form-check-label" for="zYes">
                            YES
                        </label>
                    </div>
                    <div class="col text-black border-end border-secondary" id="divpink">
                        <input class="form-check-input" type="radio" value="" name="zpack" id="zNo">
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
                <input type="text" class="inputlabelunderlineYel" name="regPersonnel" placeholder="Name here..">

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
                    <input type="text" class="inputlabelunderline" name="hpNum" placeholder="---">
                    <div class="row">
                        <div class="col pt-4">
                            <input type="text" class="inputlabelunderline" name="patPhilNum" placeholder="---">
                        </div>
                    </div>
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
            </div>
            <div class="row">  
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
            <input type="text" class="inputlabelunderlineShort" name="patAge" >years old
            <div class="row">
                <div class="col">
                    <input type="text" width="10px" class="inputlabelunderlineShort" name="patCancAge">years old
                </div>
            </div>
        </div>
        <div class="col border-start border-end border-secondary">
                Birthday:
                <input type="date" name="patBday">
        </div>
        <div class="col border-end border-secondary">
            <div class="row">
                <div class="col col-lg-4 ">
                    Religion:
                </div>
                <div class="col">
                    <input type="text" class="inputlabelunderline" name="patRel" placeholder="---">
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-4">
                    Nationality:
                </div>
                <div class="col">
                    <input type="text" class="inputlabelunderline" name="patNat" placeholder="---">
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
@endforeach
    <div>
                                            <!-- </form> -->
        <nav aria-label="..." class="float-end">
            <ul class="pagination">
                
                <li class="page-item active">
                <a class="page-link" href="{{url ('/cancerForm') }}">1</a>
                </li>

                <li class="page-item ">
                <a class="page-link" href="{{url ('/cancerFormp2') }}"><span class="sr-only">2</span></a>
                </li>

                <li class="page-item">
                <a class="page-link" href="{{url ('/cancerFormp3') }}">3</a>
                </li>

            </ul>
        </nav> 
    </div>
</html>
@endsection