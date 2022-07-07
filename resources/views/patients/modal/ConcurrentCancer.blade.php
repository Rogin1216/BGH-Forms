<div class="modal fade bd-example-modal-xl" id="PCcancerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CONCURRENT CANCER SITE/DIAGNOSIS (IF APPLICABLE):</h5>
        <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"> -->
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">X</button>

          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <div class="row" >
            <div class="col">
                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Solid Tumor:</label>
                <select id="concCancerSiteST" class="form-select" name="concCancerSiteST" value="">
                    <option></option>
                    @foreach($cancerSite as $a)
                    <option value="{{$a->id}}">{{$a->siteDesc}}</option>
                    @endforeach  
                    </select>
                    <span class="input-group-text" id="inputGroup-sizing-default">Specify:</span>
                    <input type="text" class="form-control" id="concCancerSiteInputST" name="concCancerSiteInputST" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Hematolymphoid malignancies:</label>
                <select id="concCancerSiteHM" class="form-select" name="concCancerSiteHM" value="">
                    <option></option>
                    @foreach($cancerSiteHM as $a)
                    <option value="{{$a->id}}">{{$a->siteDesc}}</option>
                    @endforeach  
                    </select>
                    <span class="input-group-text" id="inputGroup-sizing-default">Specify:</span>
                    <input type="text" class="form-control" id="concCancerSiteInputHM" name="concCancerSiteInputHM" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="button" id="concSaveBtn" class="btn btn-outline-info">insert data</button>
            </div>
        </div>
        <!-- <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Solid Tumor:</label>
                <select id="" class="form-select" name="" value="">
                    @foreach($cancerSite as $a)
                    <option>{{$a->siteDesc}}</option>
                    @endforeach  
                    </select>
            </div>              
            </div>
        </div> -->
      <!-- <div class="row">
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
                                            <input class="form-check-input" type="checkbox" value="1" name="STchAnal" id="tumAnal" {{ ($chdata->STchAnal == '1'? ' checked' : '') }}>
                                            <label for="tumAnal">Anal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchBone" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchBone" id="tumBone" {{ ($chdata->STchBone == '1'? ' checked' : '') }}>
                                            <label for="tumBone">Bone</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchBreast" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchBreast" id="tumBreast" {{ ($chdata->STchBreast == '1'? ' checked' : '') }}>
                                            <label for="tumBreast">Breast</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchCerv" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchCerv" id="tumCerv" {{ ($chdata->STchCerv == '1'? ' checked' : '') }}>
                                            <label for="tumCerv">Cervical</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchColon" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchColon" id="tumCol" {{ ($chdata->STchColon == '1'? ' checked' : '') }}>
                                            <label for="tumCol">Colon</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchTumEso" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchTumEso" id="tumEso" {{ ($chdata->STchTumEso == '1'? ' checked' : '') }}>
                                            <label for="tumEso">tumEsophageal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchGast" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchGast" id="tumGas" {{ ($chdata->STchGast == '1'? ' checked' : '') }}>
                                            <label for="tumGas">Gastric</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchHead" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchHead" id="tumHeadNeck" {{ ($chdata->STchHead == '1'? ' checked' : '') }}>
                                            <label for="tumHeadNeck">Head and Neck, specify</label>
                                            <input type="text" class="inputlabelunderlineName" name="tumHeadNeck" value="{{$patients->tumHeadNeck}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchHepa" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchHepa" id="tumHepato" {{ ($chdata->STchHepa == '1'? ' checked' : '') }}>
                                            <label for="tumHepato">Hepatobiliary, specify</label>
                                            <input type="text" class="inputlabelunderlineName" name="tumHepato" value="{{$patients->tumHepato}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchKidney" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchKidney" id="tumKid" {{ ($chdata->STchKidney == '1'? ' checked' : '') }}>
                                            <label for="tumKid">Kidney</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchNeuro" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchNeuro" id="tumNeuro" {{ ($chdata->STchNeuro == '1'? ' checked' : '') }}>
                                            <label for="tumNeuro">Neuroendocrine, site</label>
                                            <input type="text" class="inputlabelunderlineName" name="tumNeuro" value="{{$patients->tumNeuro}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchLung" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchLung" id="tumLung" {{ ($chdata->STchLung == '1'? ' checked' : '') }}>
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
                                        <input type="hidden" name="STchOva" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchOva" id="tumOva" {{ ($chdata->STchOva == '1'? ' checked' : '') }}>
                                            <label for="tumOva">Ovarian</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchPanc" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchPanc" id="tumPanc" {{ ($chdata->STchPanc == '1'? ' checked' : '') }}>
                                            <label for="tumPanc">Pancreatic</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchPros" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchPros" id="tumPros" {{ ($chdata->STchPros == '1'? ' checked' : '') }}>
                                            <label for="tumPros">Prostate</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchRect" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchRect" id="tumRec" {{ ($chdata->STchRect == '1'? ' checked' : '') }}>
                                            <label for="tumRec">Rectal</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchSkin" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchSkin" id="tumSkin" {{ ($chdata->STchSkin == '1'? ' checked' : '') }}>
                                            <label for="tumSkin">Skin</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchSoftTis" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchSoftTis" id="tumSoftTis" {{ ($chdata->STchSoftTis == '1'? ' checked' : '') }}>
                                            <label for="tumSoftTis">Soft tissue</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchTestis" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchTestis" id="tumTes" {{ ($chdata->STchTestis == '1'? ' checked' : '') }}>
                                            <label for="tumTes">Testis</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchThy" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchThy" id="tumThy" {{ ($chdata->STchThy == '1'? ' checked' : '') }}>
                                            <label for="tumThy">Thyroid</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchBlad" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchBlad" id="tumBladd" {{ ($chdata->STchBlad == '1'? ' checked' : '') }}>
                                            <label for="tumBladd">Urinary Bladder</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchUterine" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchUterine" id="tumUter" {{ ($chdata->STchUterine == '1'? ' checked' : '') }}>
                                            <label for="tumUter">Uterine</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                        <input type="hidden" name="STchOther" value="0">
                                            <input class="form-check-input" type="checkbox" value="1" name="STchOther" id="tumOther" {{ ($chdata->STchOther == '1'? ' checked' : '') }}>
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
                                    <input type="hidden" name="heMalChAll" value="0">
                                    <input class="form-check-input" type="checkbox" value="1" name="heMalChAll" id="hemaAll" {{ ($chdata->heMalChAll == '1'? ' checked' : '') }}>
                                    <label for="hemaAll">ALL</label>
                                </div>
                                <div class="col">
                                    <input type="hidden" name="heMalChBcell" value="0">
                                    <input class="form-check-input" type="checkbox" value="1" name="heMalChBcell" id="hemaB" {{ ($chdata->heMalChBcell == '1'? ' checked' : '') }}>
                                    <label for="hemaB">B-cell</label>
                                    <input type="hidden" name="heMalChTcell" value="0">
                                    <input class="form-check-input" type="checkbox" value="1" name="heMalChTcell" id="hemaT" {{ ($chdata->heMalChTcell == '1'? ' checked' : '') }}>
                                    <label for="hemaT">T-cell</label>
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-auto">
                                <input type="hidden" name="heMaChAML" value="0">
                                    <input class="form-check-input" type="checkbox" value="1" name="heMaChAML" id="hemaAML" {{ ($chdata->heMaChAML == '1'? ' checked' : '') }}>
                                    <label for="hemaAML">AML</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="hidden" name="heMaChBlymp" value="0">
                                    <input class="form-check-input" type="checkbox" value="1" name="heMaChBlymp" id="hemaBly" {{ ($chdata->heMaChBlymp == '1'? ' checked' : '') }}>
                                    <label for="hemaBly">B-lymphoma ,specify</label>
                                    <input type="text" class="inputlabelunderlineName" name="hemaBlyInput" value="{{$patients->hemaBlyInput}}">
                                </div>
                            </div>
                            <div class="row">   
                                <div class="col-auto">
                                <input type="hidden" name="heMaChHodg" value="0">
                                    <input class="form-check-input" type="checkbox" value="1" name="heMaChHodg" id="hemaHod" {{ ($chdata->heMaChHodg == '1'? ' checked' : '') }}>
                                    <label for="hemaHod">Hodgkin Lymphoma</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                <input type="hidden" name="heMaChMDS" value="0">
                                    <input class="form-check-input" type="checkbox" value="1" name="heMaChMDS" id="hemaMDS" {{ ($chdata->heMaChMDS == '1'? ' checked' : '') }}>
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
                                <input type="hidden" name="heMaChTlymp" value="0">
                                    <input class="form-check-input" type="checkbox" value="1" name="heMaChTlymp" id="hemaTlym" {{ ($chdata->heMaChTlymp == '1'? ' checked' : '') }}>
                                    <label for="hemaTlym">T-lymphoma</label>
                                    <input type="text" class="inputlabelunderlineName" name="hemaTinput" value="{{$patients->hemaTinput}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <input type="hidden" name="heMaChOth" value="0">
                                    <input class="form-check-input" type="checkbox" value="1" name="heMaChOth" id="hemaOthers" {{ ($chdata->heMaChOth == '1'? ' checked' : '') }}>
                                    <label for="hemaOthers">Others:</label>
                                    <input type="text" class="inputlabelunderlineName" name="hemaOthersinput" value="{{$patients->hemaOthersinput}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
     
      </div>
      <div class="modal-footer" id="divInfo">
        

      </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
        $('#conc_btn').click(function(){
            var hpercode = $(this).val();
            console.log(hpercode + ' hpercode');
            $('#concSaveBtn').click(function(){
            // console.log('primary cancer added');
            let a=jQuery('#concCancerSiteST').val();
            let b=jQuery('#concCancerSiteInputST').val();
            let c=jQuery('#concCancerSiteHM').val();
            let d=jQuery('#concCancerSiteInputHM').val();

            console.log(a);
            console.log(b);
            console.log(c);
            console.log(d);
            $.ajax({url: "/insertConcData",
                type:"GET",
                data:{"hpercode":hpercode,
                    "concCancerSiteST":a,
                    "concCancerSiteInputST":b,
                    "concCancerSiteHM":c,
                    "concCancerSiteInputHM":d
                },
                success:function(response){
                    console.log('success');
                    $('#concCancerSiteST').val('');
                    $('#concCancerSiteInputST').val('');
                    $('#concCancerSiteHM').val('');
                    $('#concCancerSiteInputHM').val('');
                    $("#conTable").load(" #conTable");
                }
            })
        })
        });
    })
</script>