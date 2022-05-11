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
</head>
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
#divLightblue{
background-color: #a8e4f0;
}
.inputlabelunderline{
  border: none;
  height: auto;
  width: 100px;
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
  background-color: #f5d69d;
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
.inputlabelunderline,.inputlabelunderlineYel,.inputlabelunderlineName,.inputlabelunderlineShort,.inputlabelunderlineShort1,.inputlabelunderlineShort2:focus:focus{
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

@foreach($patinfo as $patients)

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
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="hemaT">
                                    <label for="hemaT">T-lymphoma</label>
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
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="hemaT">
                                    <label for="hemaT">T-lymphoma</label>
                                    <input type="text" class="inputlabelunderlineName" name="conhemaTinput" value="{{$patients->conhemaTinput}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="hemaOthers">
                                    <label for="hemaOthers">Others:</label>
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
    <br>
    <!-- pagination -->
        <nav aria-label="..." class="float-end">
            <ul class="pagination">
                
                <li class="page-item ">
                <a class="page-link" href="{{url ('/cancerForm') }}">1</a>
                </li>

                <li class="page-item active">
                <a class="page-link" href="{{url ('/cancerFormp2/{{$patients->hpercode}}') }}"><span class="sr-only">2</span></a>
                </li>

                <li class="page-item">
                <a class="page-link" href="{{url ('/cancerFormp3') }}">3</a>
                </li>
                @endforeach

            </ul>
        </nav> 
    </html>

<script>
    
    $(document).ready(function() {
    $('#NA *').prop('disabled', true);
});
</script>

@endsection