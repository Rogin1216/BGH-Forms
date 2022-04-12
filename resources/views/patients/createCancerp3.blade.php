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
<!-- logo & header -->
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
</div>

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
                                           <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">NO</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">YES</label>
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
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">Pre-operative</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">Post-operative</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">Palliative</label>
                                       </div>
                                   </div>

                                   <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-auto">
                                                    Dose:
                                                </div>
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                                    <label for="trPlAdj">Regular</label>
                                                    <div class="row">
                                                        <div class="col">
                                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                                            <label for="trPlAdj">Boost</label>
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
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">NO</label>
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="trPlNeo">
                                            <label for="trPlAdj">YES</label>
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
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="treatCurInc">
                                    <label for="treatCurInc">Alive without disease</label>
                               </div>
                               <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="treatCurInc">
                                    <label for="treatCurInc">Alive with disease</label>
                               </div>
                               <div class="col-auto">
                                    <input class="form-check-input" type="checkbox" value="" name="cancData" id="treatCurInc">
                                    <label for="treatCurInc">Dead</label>
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
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="treatCurInc">
                                            <label for="treatCurInc">Gyne</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="treatCurInc">
                                            <label for="treatCurInc">Hema</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="treatCurInc">
                                            <label for="treatCurInc">MO</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="treatCurInc">
                                            <label for="treatCurInc">Pedia Hema-onco</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input class="form-check-input" type="checkbox" value="" name="cancData" id="treatCurInc">
                                            <label for="treatCurInc">Rad</label>
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
    <br>
<!-- page -->
<div>
        <nav aria-label="..." class="float-end">
            <ul class="pagination">
                
                <li class="page-item ">
                <a class="page-link" href="{{url ('/cancerForm') }}">1</a>
                </li>

                <li class="page-item ">
                <a class="page-link" href="{{url ('/cancerFormp2') }}">2</span></a>
                </li>

                <li class="page-item active">
                <a class="page-link" href="{{url ('/cancerFormp3') }}"><span class="sr-only">3</a>
                </li>

            </ul>
        </nav> 
</div>

</html>


@endsection