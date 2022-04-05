@extends('patients.layouts')
@section('content')

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <!-- Propeller CSS -->  
	  <link rel="stylesheet" href="css/propeller.min.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS, then Propeller js -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	  <script type="text/javascript" src="js/propeller.min.js"></script>
	  
  </body>
<style>
body{
padding:0px;
margin:0px;
}
#divpink{
background-color: pink;
}
#divyellow{
background-color: #faf882;
}
</style>
<div class="container-fluid border border-secondary"><!-- start logo header --> 
    <div class="row "> 
        <div class="col-auto border border-secondary">
             <img src="{{ asset('images/bghmc-logo.png') }}" class="rounded float-left align-items-center" alt="..." width="150px" height="150px">
        </div>
        <div class="col">
            <div class="row">
                <div class="col border border-secondary d-flex justify-content-start">
                    
                    <img src="{{ asset('images/bghmc-logo.png') }}" class="rounded float-left" alt="..." width="70px" height="70px">
                    <pre>
                        Republic of the Philippines
                            Department of Health
                  BAUGIO GENERAL HOSPITAL AND MEDICAL CENTER
                                Baguio City
                    </pre>
                </div>
            </div>
            
            <div class="row border border-secondary">
                <div class="col col-lg-8">
                    <center><h6>CANCER CENTER</h6></center>
                <center><i>INTEGRATED PATIENT DATA FILE AND CANCER REGISTRY</i></center> 
                    
                </div>
                <div class="col">
                    <div class="row border border-secondary">
                        <div class="col border border-secondary-right ">
                            doc no.
                        </div>
                        <div class="col col-lg-6 ">
                            
                        </div>
                        
                    </div>
                    <div class="row border border-secondary">
                        <div class="col border border-secondary-right">
                            rev no.
                        </div>
                        <div class="col col-lg-6 ">
                            
                        </div>
                    </div>
                    <div class="row border border-secondary">
                        <div class="col border border-secondary-right">
                            effect date:
                        </div>
                        <div class="col col-lg-6 ">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div><!-- end logo header --> 

<div class="container"><!-- start general data -->
    <div class="row"> 
        
            <div class="col col-lg-2 bg-primary text-white">
                GENERAL DATA
            </div>
            <div class="col-auto  text-black" id="divpink">
                CLASSIFICATION
            </div>
            <div class="col-auto text-black" id="divpink">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    PAY
                </label>
            </div>
            <div class="col-auto text-black" id="divpink">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    CHARITY
                </label>
            </div>
            <div class="col-auto text-black" id="divpink">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    NBB
                </label>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col col-lg-3 border border-bottom-0 border-top-0 border-secondary" id="divpink">
                        CSPMAP
                    </div>  
                    <div class="col col-lg-2 text-black" id="divpink">
                        <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            YES
                        </label>
                    </div>
                    <div class="col text-black" id="divpink">
                        <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            NO
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-lg-3 border border-secondary border-top-0 border-bottom-0" id="divpink">
                        Z-PACKAGE 
                    </div>
                    <div class="col col-lg-2 text-black" id="divpink">
                        <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            YES
                        </label>
                    </div>
                    <div class="col text-black" id="divpink">
                        <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            NO
                        </label>
                    </div>  
                </div>
            </div>
            

    </div>
    
    <div class="row">
        <div class="col col-lg-3 border border-secondary" id="divyellow">
            <p><b>Name of Reporting Health Facility</b></p>
            <p>BAGUIO GENERAL HOSPITAL & MEDICAL CENTER - CANCER CENTER</p>
        </div>
        <div class="col col-lg-4 border border-secondary form-outline" id="divyellow">
            <p><b>Cancer Registry Personnel:</b></p> 

            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                <label for="regularfloating">Regular Input With Floating Label</label>
                <input id="regularfloating" class="form-control" type="text">
            </div>
        </div>
        <div class="col col-lg-3 border border-secondary">
            <p><b>Hospital No:</b></p>
            <p><b>PHILHEALTH NO:</b></p>
        </div>
        <div class="col border border-secondary" id="divyellow">
            <p><b>Type of Patient</b></p>
            <div class="row">
                <div class="col text-black">
                        <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            OPD
                        </label>
                </div>  
            </div>
            <div class="row">  
                <div class="col text-black">
                        <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            In Patient
                        </label>
                </div> 
            </div>
        </div>
            
    </div>

    <div class="row">
        <div class="col col-lg-6 border border-secondary">
            full name
        </div>
        <div class="col col-lg-2 border border-secondary">
            sex
        </div>
        <div class="col border border-secondary">
            civil status
        </div>
    </div>
    <div class="row">
        <div class="col col-lg-9 border border-secondary">
            address
        </div>
        <div class="col">
            <div class="row border border-secondary">
                <div class="col">
                    landline
                </div>
            </div>
            <div class="row border border-secondary">
                <div class="col">
                    email
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col border border-secondary">
            age
        </div>
        <div class="col border border-secondary">
            bday
        </div>
        <div class="col">
            <div class="row">
                <div class="col border border-secondary">
                    religion
                </div>
            </div>
            <div class="row">
                <div class="col border border-secondary">
                    nationality
                </div>
            </div>
        </div>
    </div>
</div> <!-- end general data -->

<div class="container"> <!-- start personal,occupational,medical  -->
    <div class="row border border-secondary">
        <div class="col border border-secondary">
            PERSONAL 
                <div class="row">
                    <div class="col ">
                        personal informations
                    </div>
                </div>
        </div>
        <div class="col border border-secondary">
            OCCUPATION 
                <div class="row">
                    <div class="col">
                       occupational informations
                    </div>
                </div>
        </div>
        <div class="col border border-secondary">
            OTHER MEDICAL
                <div class="row">
                    <div class="col">
                        other medical informations
                    </div>
                </div> 
        </div>
    </div>
</div><!-- end personal,occupational,medical  -->

<div class="container"><!-- start female subj -->
    <div class="row">
        <div class="col col-lg-8 border border-secondary">
            FEMALE SUBJ.
            <div class="row">
                <div class="col border border-secondary">
                    gynecological
                </div>
                <div class="col border border-secondary">
                    OB history
                </div>
            </div>
        </div>
        <div class="col border border-secondary">
            HISTORY OF CANCER.
        </div>
    </div>
</div><!-- end female subj -->
<div class="container">
    <div class="row">
        <div class="col border border-secondary">
            INFECTION
            <div class="row">
                <div class="col border border-secondary">
                    info
                </div>
            </div>
            <div class="row">
                <div class="col border border-secondary">
                    height
                </div>
                <div class="col border border-secondary">
                    weight
                </div>
                <div class="col border border-secondary">
                    bsa
                </div>
            </div>
        </div>
    </div>
</div>
</html>
@endsection