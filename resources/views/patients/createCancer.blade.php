@extends('patients.layouts')
@section('content')

<style>body{
padding:0px;
margin:0px;
}
</style>
<div class="container-fluid border border-secondary"><!-- start logo header --> 
    <div class="row "> 
        <div class="col-auto border border-secondary">
            logo
        </div>
        <div class="col">
            <div class="row border border-secondary">
                <div class="col-auto">
                    <p>Republic of the Philippines</p>
                    <p>Republic of the Philippines</p>
                    <p>Republic of the Philippines</p>
                </div>
                
            </div>
            
            <div class="row border border-secondary">
                <div class="col">
                    titleCancer
                </div>
                <div class="col">
                    <div class="row border border-secondary">
                        <div class="col border border-secondary">
                            doc no.
                        </div>
                        <div class="col col-lg-6 ">
                            
                        </div>
                        
                    </div>
                    <div class="row border border-secondary">
                        <div class="col border border-secondary">
                            rev no.
                        </div>
                        <div class="col col-lg-6 ">
                            
                        </div>
                    </div>
                    <div class="row border border-secondary">
                        <div class="col border border-secondary">
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
        <div class="col col-lg-2 border border-secondary">
            GENERAL DATA
        </div>
        <div class="col col-lg-5 border border-secondary">
            CLASSIFICATION
        </div>
        <div class="col col-lg-5 border border-secondary">
            CSPMAP
        </div>
    </div>
    <div class="row">
        <div class="col border border-secondary">
            facility
        </div>
        <div class="col border border-secondary">
            personnel
        </div>
        <div class="col border border-secondary">
            hosp no.
        </div>
        <div class="col border border-secondary">
            type of patient
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
@endsection