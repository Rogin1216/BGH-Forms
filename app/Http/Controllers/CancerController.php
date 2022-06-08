<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
use App\Models\familyHistoryMembers;
use App\Models\checkboxList;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\BulkUsersExport;
use App\Models\cancerRegistry;
use App\Models\vwRegionProvinceCityBarangay;

class CancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        //
    }
    public function addFamMember(request $request){
        $data = $request->post('data');
        dd($data);
    }

    public function searchCancer(request $request){
        // dd('search');
        $all = DB::SELECT("EXEC registry.dbo.spCancerMasterList");
        
        // dd($all);

        return view('patients.searchCancer', [
            'all'=>$all
        ]);
    }
    public function searchCancerfilter(request $request){
        $search_text = $request->input('query');
            // dd($search_text);
               $patient = DB::table('vwCancerMasterList')->select('patfirst','patmiddle','patlast', 'hpercode')
            //    $patient = vwInjuryList3::select('patfirst','patmiddle','patlast', 'hpercode')
            //    $patient = DB::table('vwInjuryList3')
               ->Where(DB::raw("concat(patfirst, ' ', patmiddle, ' ', patlast)"), 'LIKE', "%".$search_text."%")
               ->orwhere ('patfirst', 'LIKE', $search_text)
               ->orWhere ('patmiddle', 'LIKE', '%'.$search_text.'%')
               ->orWhere ('patlast', 'LIKE', '%'.$search_text.'%')
               ->orWhere ('hpercode', 'LIKE', '%'.$search_text.'%') 
               ->distinct()
               ->orderBy('patlast', 'asc')
               ->get();
                // dd($patient);
               return view('patients.searchCancerfilter', compact(
                   'patient',

                ));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$enccode)
    {
        // dd($request);
        // $famTable = DB::table('familyCancerHistory')
        // ->select('*')
        // ->get();
        // dd($famTable);
        $table1 = DB::table('registry.cancer.familyHistoryMembers')
        ->select('*')
        // ->where('patient_hpercode',$enccode)
        ->get();
        $fam = $request->familyMember;
        // dd($fam);

        $table2=DB::table('registry.cancer.familyHistoryOfCancer')
        ->select('*')
        ->get();
        // dd($table2);

        if (is_null($fam)){
            // dd($fam);
        }
        else{
            foreach($fam as $key=>$insert){
                //INSERT into table familyHistoryMembers
                $addMember = [
                    'familyMember' =>$request->familyMember[$key],
                    'consanguinity' =>$request->consanguinity[$key],
                    'typeOfCancer' =>$request->typeOfCancer[$key],
                    'ageAtDiagnosis' =>$request->ageAtDiagnosis[$key]
                ]; 
                // dd($fam);
                DB::table('registry.cancer.familyHistoryMembers')->insert($addMember);
                // for($x = 0; $x < $arr12;$x++){
                //     $relative = [
                //         'patient_hpercode' => $enccode,
                //         'familyHistoryMembers_id' => $arr12[$x]
                //     ];
                //     DB::table('registry.cancer.familyHistoryOfCancer')->insert($relative);
                // }

                // foreach($arr12 as $i){
                //     $relative = [
                //         'patient_hpercode' => $enccode,
                //         'familyHistoryMembers_id' => $arr12[$i]
                //     ];
                //     DB::table('registry.cancer.familyHistoryOfCancer')->insert($relative);
                // }
                //  $relativeID->each(function ($collection) {
            //     // dd($alphabet, $collection);
            //     $item1 = $collection;
            //     dd($item1);
            //     $relative = [
            //         // 'patient_hpercode' => $enccode,
            //         'familyHistoryMembers_id' => $item1
            //     ];
            //     DB::table('registry.cancer.familyHistoryOfCancer')->insert($relative);
                
            // });

                // $test = (int)$relativeID;
                // dd($test);
                // $id=intval($relativeID);
                // $relative = [
                //     'patient_hpercode' => $enccode,
                //     'familyHistoryMembers_id' => $item1
                // ];
                // DB::table('registry.cancer.familyHistoryOfCancer')->insert($relative);
            }
             //INSERT into table familyHistoryOfCancer
            // dd($fam);
             $relativeID =  DB::table('registry.cancer.familyHistoryMembers')
             ->select('id')
             ->where('familyMember',$fam)
             ->get()
             ->toArray();
             // $arr = array();
             // foreach($relativeID as $s){
             //     array_push($arr, $s->id);
             // }
             dd($relativeID);
             $arr12 = array();
             foreach($relativeID as $s){
                 array_push($arr12, $s->id);
             }
            //  dd($arr12);

             foreach($arr12 as $key=>$insert){
                     $addRelative = [
                         'patient_hpercode' =>$enccode,
                         'familyHistoryMembers_id'=>$arr12[$key]
                     ];
                     DB::table('registry.cancer.familyHistoryOfCancer')->insert($addRelative);
            }
        }


        DB::UPDATE("EXEC registry.dbo.InsertValueToCancerRegistry
        '$enccode',
        '$request->patPackYr', 
        '$request->patDriYr',
        '$request->patNumSex',
        '$request->patAvgInc',
        '$request->patMeansEx',
        '$request->patChemVap',
        '$request->patPestIns',
        '$request->patDyes',
        '$request->patOther1',

        '$request->patLongJob',
        '$request->patDiaMell',
        '$request->patHype',
        '$request->patCarDis',
        '$request->patCerDis',
        '$request->patLivDis',
        '$request->patStd',
        '$request->patOther2',
        '$request->femMenarAge',
        '$request->femMenopAge',

        '$request->femContra',
        '$request->fem1stBirth',
        '$request->femCurPreg',
        '$request->infHuPap',
        '$request->infHepaB',
        '$request->infHeliPy',
        '$request->infOthers',
        '$request->patHeight',
        '$request->patWeight',
        '$request->patBsa',
        '$request->cancRefer',

        '$request->cancRefFac',
        '$request->cancDocProf',
        '$request->cancDateAdm',
        '$request->cancComp',
        '$request->diagDate',
        '$request->diagCancPrim',
        '$request->diagCancDate',
        '$request->tumHeadNeck',
        '$request->tumHepato',
        '$request->tumNeuro',

        '$request->tumLungNSC',
        '$request->tumLungSCL',
        '$request->tumOther',
        '$request->hemaBlyInput',
        '$request->hemaCMLinput',
        '$request->hemaPVinput',
        '$request->hemaETinput',
        '$request->hemaMFinput',
        '$request->hemaTinput',
        '$request->hemaOthersinput',

        '$request->contumHeadNeck',
        '$request->contumHepato',
        '$request->contumNeuro',
        '$request->contumLungNSC',
        '$request->contumLungSCL',
        '$request->contumOther',
        '$request->conhemaBlyInput',
        '$request->conhemaCMLinput',
        '$request->conhemaPVinput',
        '$request->conhemaETinput',

        '$request->conhemaMFinput',
        '$request->conhemaTinput',
        '$request->conhemaOthersinput',
        '$request->tabOthers',
        '$request->bioTis',
        '$request->bioTumSiz',
        '$request->bioHis',
        '$request->bioCarc',
        '$request->bioNeuro',
        '$request->bioMes',

        '$request->bioOther',
        '$request->bioLVImin',
        '$request->bioLVIplus',
        '$request->TNMsystemT',
        '$request->TNMsystemN',
        '$request->TNMsystemM',
        '$request->stagNoMet',
        '$request->stagOther',
        '$request->seSerum',
        '$request->seLvl',

        '$request->seRange',
        '$request->molMar',
        '$request->molLvl',
        '$request->molRange',
        '$request->fiCyt',
        '$request->flowCyt',
        '$request->treatOther',
        '$request->trAddOthInput',
        '$request->trPlAddOthInput',
        '$request->trTrOthInput',

        '$request->proto1st1',
        '$request->proto1stcy1',
        '$request->proto1st2',
        '$request->proto1stcy2',
        '$request->proto2nd1',
        '$request->proto2ndcy1',
        '$request->proto2nd2',
        '$request->proto2ndcy2',
        '$request->proto3rd1',
        '$request->proto3rdcy1',

        '$request->proto3rd2',
        '$request->proto3rdcy2',
        '$request->proto4th1',
        '$request->proto4thcy1',
        '$request->proto4th2',
        '$request->proto4thcy2',
        '$request->radSite',
        '$request->doseRegSite',
        '$request->doseBoostSite',
        '$request->surSurgeon',

        '$request->surPlanOp',
        '$request->surHormone',
        '$request->surRemarks',
        '$request->surOthers',
        '$request->timeTreat',
        '$request->oncoLast',
        '$request->oncoFirst',
        '$request->oncoMiddle',
        '$request->regPersonnel',
        '$request->status',

        '$request->trPrimDate',
        '$request->date_surgery',
        '$request->date_follow_up'

        ");
        // dd($enccode);
            DB::UPDATE("EXEC registry.dbo.InsertChValue
            '$enccode',
            '$request->rdoAid',
            '$request->injryRdo',
            '$request->abrasionCh',
            '$request->avulsionCh',
            '$request->burnCh',
            '$request->degree_burn1',
            '$request->degree_burn2',
            '$request->degree_burn3',
            '$request->degree_burn4',
            '$request->degreeRdoBtn',
            '$request->concussionCh',
            '$request->contusionCh',
            '$request->fractureCh',
            '$request->openTypeCh',
            '$request->closedTypeCh',
            '$request->woundCh',
            '$request->traumaCh',
            '$request->others1Ch',
            '$request->bitesCh',

            '$request->burn1Ch',
            '$request->burnRdo',
            '$request->chemicalCh',
            '$request->sharpCh',
            '$request->drowningCh',
            '$request->drowningRdo',
            '$request->natureCh',
            '$request->natureRdo',
            '$request->gunshotCh',
            '$request->hangingCh',
            '$request->maulingCh',
            '$request->transportCh',
            '$request->fallCh',
            '$request->firecrackerCh',
            '$request->assaultCh',
            '$request->others5Ch',
            '$request->areaRdo',
            '$request->collRdo',
            '$request->severRdo',
            '$request->vehicleRdo',

            '$request->otherRdo',
            '$request->posRdo',
            '$request->victimsRdo',
            '$request->placeRdo',
            '$request->activityRdo',
            '$request->alcoholCh',
            '$request->smokingCh',
            '$request->drugsCh',
            '$request->phoneCh',
            '$request->sleepyCh',
            '$request->others11Ch',
            '$request->noneCh',
            '$request->airbagCh',
            '$request->helmetCh',
            '$request->childseatCh',
            '$request->seatbeltCh',
            '$request->vestCh',
            '$request->others12Ch',
            '$request->unknown5Ch',
            '$request->transferRdo',

            '$request->referralRdo',
            '$request->arrivalRdo',
            '$request->statusRdo',
            '$request->transpoRdo',
            '$request->dispoRdo',
            '$request->outcome',
            '$request->inPatDispoRdo',
            '$request->inPatOutcomeRdo',
            '$request->firecracker_code',
            '$request->payCh',
            '$request->charityCh',
            '$request->nbbCh',
            '$request->cspmapRdo',
            '$request->zpackRdo',
            '$request->ToPRdo',
            '$request->rdoSex',
            '$request->rdoCivStat',
            '$request->civChAnul',
            '$request->civChDiv',
            '$request->smkRdo',

            '$request->smkRdoYes',
            '$request->shsRdo',
            '$request->alcoRdo',
            '$request->alcoRdoYes',
            '$request->sexHisRdo',
            '$request->vacChHep',
            '$request->vacChHPV',
            '$request->occRdo',
            '$request->expChVap',
            '$request->expChPest',
            '$request->expChDye',
            '$request->expChOth',
            '$request->medRdo',
            '$request->medChDiaMell',
            '$request->medChHyper',
            '$request->medChCarDis',
            '$request->medChCerDis',
            '$request->medChLivDis',
            '$request->medChStd',
            '$request->medOth',

            '$request->mensStatus',
            '$request->causeChNat',
            '$request->causeChSurg',
            '$request->causeChRad',
            '$request->causeChMed',
            '$request->contraCh',
            '$request->obHisCh',
            '$request->infHuPapCh',
            '$request->infHepBCh',
            '$request->infHelPyCh',
            '$request->infOthCh',
            '$request->refRdo',
            '$request->ToDRdo',
            '$request->preDiaCancRdo',
            '$request->trChChemo',
            '$request->trChSurg',
            '$request->trChRad',
            '$request->trChHorm',
            '$request->trChNone',
            '$request->outRdo',

            '$request->STchAnal',
            '$request->STchBone',
            '$request->STchBreast',
            '$request->STchCerv',
            '$request->STchColon',
            '$request->STchTumEso',
            '$request->STchGast',
            '$request->STchHead',
            '$request->STchHepa',
            '$request->STchKidney',
            '$request->STchNeuro',
            '$request->STchLung',
            '$request->STchOva',
            '$request->STchPanc',
            '$request->STchPros',
            '$request->STchRect',
            '$request->STchSkin',
            '$request->STchSoftTis',
            '$request->STchTestis',
            '$request->STchThy',

            '$request->STchBlad',
            '$request->STchUterine',
            '$request->STchOther',
            '$request->heMalChAll',
            '$request->heMalChBcell',
            '$request->heMalChTcell',
            '$request->heMaChAML',
            '$request->heMaChBlymp',
            '$request->heMaChHodg',
            '$request->heMaChMDS',
            '$request->heMaChTlymp',
            '$request->heMaChOth',
            '$request->conChNa',
            '$request->conSTchAnal',
            '$request->conSTchBone',
            '$request->conSTchBreast',
            '$request->conSTchCerv',
            '$request->conSTchColon',
            '$request->conSTchTumEso',
            '$request->conSTchGast',

            '$request->conSTchHead',
            '$request->conSTchHepa',
            '$request->conSTchKidney',
            '$request->conSTchNeuro',
            '$request->conSTchLung',
            '$request->conSTchOva',
            '$request->conSTchPanc',
            '$request->conSTchPros',
            '$request->conSTchRect',
            '$request->conSTchSkin',
            '$request->conSTchSoftTis',
            '$request->conSTchTestis',
            '$request->conSTchThy',
            '$request->conSTchBlad',
            '$request->conSTchUterine',
            '$request->conSTchOther',
            '$request->conheMalChAll',
            '$request->conheMalChBcell',
            '$request->conheMalChTcell',
            '$request->conheMaChAML',

            '$request->conheMaChBlymp',
            '$request->conheMaChHodg',
            '$request->conheMaChMDS',
            '$request->conheMaChTlymp',
            '$request->conheMaChOth',
            '$request->TaBchCBC',
            '$request->TaBchFBS',
            '$request->TaBchCreat',
            '$request->TaBchAST',
            '$request->TaBchANC',
            '$request->TaBchCXR',
            '$request->TaBchECG',
            '$request->TaBchUTZ',
            '$request->TaBchCT',
            '$request->TaBchEND',
            '$request->TaBchMRI',
            '$request->TaBchOth',
            '$request->latChLeft',
            '$request->latChRight',
            '$request->latChMid',

            '$request->latChBilat',
            '$request->latChUndet',
            '$request->histoChEndo',
            '$request->histoChFNAB',
            '$request->histoChCore',
            '$request->histoChEx',
            '$request->histoRdoGrd',
            '$request->tstage0',
            '$request->tstageIIA',
            '$request->tstageIIIA',
            '$request->tstage1A',
            '$request->tstage1B',
            '$request->tstageIIB',
            '$request->tstageIIIB',
            '$request->tstageIIIC',
            '$request->tstageIV',
            '$request->stagIn',
            '$request->stagLocal',
            '$request->stagDir',
            '$request->stagReg',

            '$request->stag34',
            '$request->stagDis',
            '$request->stagUn',
            '$request->stagNone',
            '$request->stagDisLy',
            '$request->stagBone',
            '$request->stagLiver',
            '$request->stagLung',
            '$request->stagBrain',
            '$request->stagOvary',
            '$request->stagSkin',
            '$request->stagOther',
            '$request->stagUnk',
            '$request->treatCurCom',
            '$request->primTreat',
            '$request->trAddSur',
            '$request->trAddRad',
            '$request->trAddChem',
            '$request->traAddImm',
            '$request->trAddHormo',

            '$request->trAddUn',
            '$request->trAddOth',
            '$request->trPlAddSur',
            '$request->trPlAddRad',
            '$request->trPlAddChem',
            '$request->trPlAddImm',
            '$request->trPlAddHormo',
            '$request->trPlAddUn',
            '$request->trPlAddOth',
            '$request->trTrSurg',
            '$request->trTrRad',
            '$request->trTrChem',
            '$request->trTrImm',
            '$request->trTrHormo',
            '$request->trTrUn',
            '$request->trTrOth',
            '$request->trPlNeo',
            '$request->trPlAdj',
            '$request->trPlMeta',
            '$request->radTherapy',

            '$request->idSiteSetting',
            '$request->radiaThReg',
            '$request->radiaThbst',
            '$request->radThSurg',
            '$request->ffStat',
            '$request->FUdeptGyne',
            '$request->FUdeptHema',
            '$request->FUdeptMo',
            '$request->FUdeptPedia',
            '$request->FUdepttrt',
            '$request->ext_expo_nature_sp_ch',
            '$request->risk_noneCh',
            '$request->copyCh',
            '$request->inj_intent_code',
            '$request->cancHis',
            '$request->bgh1st1',
            '$request->oth1st1',
            '$request->bgh1st2',
            '$request->oth1st2',
            '$request->rem1st',

            '$request->stable1st',
            '$request->RR1st',
            '$request->bgh2nd1',
            '$request->oth2nd1',
            '$request->bgh2nd2',
            '$request->oth2nd2',
            '$request->rem2nd',
            '$request->stable2nd',
            '$request->RR2nd',
            '$request->bgh3rd1',
            '$request->oth3rd1',
            '$request->bgh3rd2',
            '$request->oth3rd2',
            '$request->rem3rd',
            '$request->stable3rd',
            '$request->RR3rd',
            '$request->bgh4th1',
            '$request->oth4th1',
            '$request->bgh4th2',
            '$request->oth4th2',

            '$request->rem4th',
            '$request->bgh4th2',
            '$request->RR4th'
            ");

        // dd($request);
        return $this->viewCancerDraft();
    }
    public function viewCancerDraft(){
        // $all = DB::table('cancerRegistry2')
        //     ->join('vwInjuryList', 'cancerRegistry2.hpercode', '=', 'vwInjuryList.enccode')
        //     ->select('cancerRegistry2.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode','cancerRegistry2.status')
        //     ->where('cancerRegistry2.status', '=', 'drafts')
        //     ->get();
        
        $all = DB::table('cancerRegistry2')
            ->join('vwCancerMasterList', 'cancerRegistry2.hpercode', '=', 'vwCancerMasterList.hpercode')
            ->select('cancerRegistry2.*', 'vwCancerMasterList.patfirst', 'vwCancerMasterList.patmiddle', 'vwCancerMasterList.patlast', 
                    'vwCancerMasterList.hpercode', 'vwCancerMasterList.hpercode','vwCancerMasterList.tsdesc','cancerRegistry2.status')
            ->where('cancerRegistry2.status', '=', 'drafts')
            ->get();


            return view('patients.viewCancerDraft', [
                'all'=>$all
            ]);
    }
    public function viewCancerComplete(request $request){
        // dd($hpercode);
        // $all = DB::table('cancerRegistry')
        //     ->join('vwInjuryList', 'cancerRegistry.enccode', '=', 'vwInjuryList.enccode')
        //     ->select('cancerRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode','cancerRegistry.status')
        //     ->where('cancerRegistry.status', '=', 'completeForm')
        //     ->get();

        $all = DB::table('cancerRegistry2')
            ->join('vwCancerMasterList', 'cancerRegistry2.hpercode', '=', 'vwCancerMasterList.hpercode')
            ->select('cancerRegistry2.*', 'vwCancerMasterList.patfirst', 'vwCancerMasterList.patmiddle', 'vwCancerMasterList.patlast', 
                    'vwCancerMasterList.hpercode', 'vwCancerMasterList.hpercode','vwCancerMasterList.tsdesc','cancerRegistry2.status')
            ->where('cancerRegistry2.status', '=', 'completeForm')
            ->get();

            return view('patients.viewCancerComplete', [
                'all'=>$all
            ]);
    }
    public function viewCancerForm(request $request, $enccode){
        // dd($hpercode);
    //     $patinfo = DB::table('cancerRegistry2')
    //     ->join('vwCancerMasterList', 'cancerRegistry2.hpercode', '=', 'vwCancerMasterList.hpercode')
    //     // ->select('cancerRegistry.*','vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast','vwInjuryList.hpercode', 'vwInjuryList.enccode')
    //     ->select('cancerRegistry2.*','vwCancerMasterList.*')
    //     ->where('cancerRegistry2.hpercode',$hpercode)
    //     // ->select('cancerRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode', 'cancerForm.status')
    //     ->get();
        
    //     $chdata = DB::table('checkboxList')->select('*')->where('enccode',$hpercode)->get();
    // // dd($patinfo );
    //     return view('patients.viewCancerForm',[
    //         'patinfo'=>$patinfo,
    //         'chdata'=>$chdata
    //     ]);
    

    if(DB::table('cancerRegistry2')->where('hpercode', '=', $enccode)->exists()){
        // $enccode = checkboxList::find($enccode);
        // $enccode->save();
    }else
        {
            DB::table('cancerRegistry2')
            ->insert(
                array(
                    'hpercode'     =>   $enccode, 
                )
                );
        }

    if(checkboxList::where('enccode', '=', $enccode)->exists()){
        // $enccode = checkboxList::find($enccode);
        // $enccode->save();
        // dd('exists');
    }else
        {
            DB::table('checkboxList')
            ->insert(
                array(
                    'enccode'     =>   $enccode, 
                )
                );
        }
    
    // $vw3 = DB::table('vwInjuryList3')
    // ->select('*')
    // ->where('enccode','ER1180068Aug092019210633')
    // ->get();
    // dd($vw3);
    
    
    // $patinfo = DB::table('cancerRegistry2')
    // ->join('vwInjuryList', 'cancerRegistry2.hpercode', '=', 'vwInjuryList.enccode')
    // // ->select('cancerRegistry.*','vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast','vwInjuryList.hpercode', 'vwInjuryList.enccode')
    // ->select('cancerRegistry2.*','vwInjuryList.*')
    // ->where('cancerRegistry2.hpercode',$enccode)
    // // ->select('cancerRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode', 'cancerForm.status')
    // ->get();
    $header = DB::SELECT("EXEC cancer.cancerRegisterHeader 
    '$enccode'");
    $patinfo = DB::table('cancerRegistry2')
    ->select('*')
    ->where('hpercode',$enccode)
    ->get();
    // dd($header);
    $chdata = DB::table('checkboxList')->select('*')->where('enccode',$enccode)->get();
    // dd($patinfo );
    return view('patients.viewCancerForm',[
        'patinfo'=>$patinfo,
        'chdata'=>$chdata,
        'header'=>$header,
    ]);


    }
    public function cancerEnccode($enccode){
// dd('cancerEnccode');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createCancerform(request $request, $enccode){
        // dd($request);
        // FROM [registry].[cancer].[familyHistoryMembers] fm inner join [registry].[cancer].[familyHistoryOfCancer] fh 
        // on fm.id = fh.familyHistoryMembers_id

        $relative = DB::table('registry.cancer.familyHistoryMembers as t1')
        ->join('registry.cancer.familyHistoryOfCancer as t2','t2.familyHistoryMembers_id', '=' , 't1.id')
        ->select('*')
        ->where('t2.patient_hpercode',$enccode)
        ->get();
        // dd($relative);


        // $famHistoryMember = DB::table('registry.cancer.familyHistoryMembers')
        // ->where('hpercode',$enccode)
        // ->get();
        // dd($famHistoryMember);

        if(DB::table('cancerRegistry2')->where('hpercode', '=', $enccode)->exists()){
            // $enccode = checkboxList::find($enccode);
            // $enccode->save();
        }else
            {
                DB::table('cancerRegistry2')
                ->insert(
                    array(
                        'hpercode'     =>   $enccode, 
                    )
                    );
            }

        if(checkboxList::where('enccode', '=', $enccode)->exists()){
            // $enccode = checkboxList::find($enccode);
            // $enccode->save();
            // dd('exists');
        }else
            {
                DB::table('checkboxList')
                ->insert(
                    array(
                        'enccode'     =>   $enccode, 
                    )
                    );
            }
        
        // $vw3 = DB::table('vwInjuryList3')
        // ->select('*')
        // ->where('enccode','ER1180068Aug092019210633')
        // ->get();
        // dd($vw3);
        
        
        // $patinfo = DB::table('cancerRegistry2')
        // ->join('vwInjuryList', 'cancerRegistry2.hpercode', '=', 'vwInjuryList.enccode')
        // // ->select('cancerRegistry.*','vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast','vwInjuryList.hpercode', 'vwInjuryList.enccode')
        // ->select('cancerRegistry2.*','vwInjuryList.*')
        // ->where('cancerRegistry2.hpercode',$enccode)
        // // ->select('cancerRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode', 'cancerForm.status')
        // ->get();
        $header = DB::SELECT("EXEC cancer.cancerRegisterHeader 
        '$enccode'");
        $patinfo = DB::table('cancerRegistry2')
        ->select('*')
        ->where('hpercode',$enccode)
        ->get();
        // dd($header);
        $chdata = DB::table('checkboxList')->select('*')->where('enccode',$enccode)->get();
        // dd($patinfo );
        return view('patients.createCancer',[
            'patinfo'=>$patinfo,
            'chdata'=>$chdata,
            'header'=>$header,
            'relative'=>$relative
        ]);
    }
    public function createCancerformp2(request $request, $hpercode){
        $patinfo = DB::table('cancerRegistry')
        ->join('vwInjuryList', 'cancerRegistry.enccode', '=', 'vwInjuryList.enccode')
        ->select('cancerRegistry.*','vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast','vwInjuryList.hpercode', 'vwInjuryList.enccode')
        // ->select('cancerRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode', 'cancerForm.status')
        ->get();

        return view('patients.createCancerp2',[
            'patinfo'=>$patinfo
        ]);
    }
    public function sampleForm(request $request, $enccode){
        if(cancerRegistry::where('enccode', '=', $enccode)->exists()){
            // $enccode = checkboxList::find($enccode);
            // $enccode->save();
        }
        else
        {
            DB::table('cancerForm')
            ->insert(
                array(
                       'enccode'     =>   $enccode, 
                )
                );
        }

        $patinfo = DB::table('cancerRegistry')
        ->join('vwInjuryList', 'cancerRegistry.enccode', '=', 'vwInjuryList.enccode')
        ->select('cancerRegistry.*','vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast','vwInjuryList.hpercode', 'vwInjuryList.enccode')
        ->where('cancerRegistry.enccode',$enccode)
        // ->select('cancerRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode', 'cancerForm.status')
        ->get();
    // dd($patinfo );
        return view('patients.sampleForm',[
            'patinfo'=>$patinfo
        ]);

        // return view('patients.sampleForm');
    }
    public function getRegion(request $request){
        $regc = $request->post('regc');
        $vwProvname = DB::table('vwRegionProvinceCityBarangay')  
        ->select('provname','provcode','regcode')
            ->where('regcode', $regc)   
            ->distinct('provname')
            ->orderBy('provname','asc')
            ->get();
        $html = '<option value="">Select prov</option>';
        foreach($vwProvname as $list){
            $html.='<option value="'.$list->provcode.'">'
            .$list->provname.'</option>';
        }
        echo $html;
    }
    public function getProv(request $request){
        $provc = $request->post('provc');
        echo $provc;
        $vwCtyname = DB::table('vwRegionProvinceCityBarangay')
        ->select('ctyname','ctycode','provcode')
        ->where('provcode',$provc)
        ->distinct('ctyname')
        ->orderBy('ctyname','asc')
        ->get();
        $html = '<option value="">Select City</option>';
        foreach($vwCtyname as $list){
            $html.='<option value="'.$list->ctycode.'">'
            .$list->ctyname.'</option>';
        }
        echo $html;
    }
    public function getCty(request $request){
        $ctyc = $request->post('ctyc');
        echo $ctyc;
        $vwBgyname = DB::table('vwRegionProvinceCityBarangay')
        ->select('bgyname','bgycode','ctycode')
        ->where('ctycode',$ctyc)
        ->distinct('bgyname')
        ->orderBy('bgyname','asc')
        ->get();
        $html = '<option value="">Select Barangay</option>';
        foreach($vwBgyname as $list){
            $html.='<option value="'.$list->bgycode.'">'
            .$list->bgyname.'</option>';
        }
        echo $html;
    }
}
