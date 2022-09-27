<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\vwInjuryList3;
use App\Models\injuryRegistry;
use App\Models\checkboxList;
use App\Models\exportedInjuryRegList;
use App\Models\vwRegionProvinceCityBarangay;
use PhpParser\Node\Expr\AssignOp\Pow;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Carbon\Carbon; // Include Class in COntroller;


// exports
// use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\BulkUsersExport;
use App\Models\finalInputInjuryRegistry;
use App\Providers\RouteServiceProvider;
use ZipArchive;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        return view('patients.index');
    }
    
    public function searchDatefilter(request $request){

        
        $startDate = $request->startDate;
        $endDate = $request->endDate;
        $datePat = DB::table('injuryRegistry')
            ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
            ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed')
            ->whereBetween('injuryRegistry.date_completed',[$startDate, $endDate])
            ->where('injuryRegistry.status','archive')
            ->orderBy('injuryRegistry.date_completed', 'asc')
            ->get();

            return view('patients.searchDatefilter', [
                'datePat'=>$datePat
            ]);

    }
    
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function viewencounter($hpercode){
        // dd($hpercode);
        $patInfo = DB::table('vwInjuryList3')->select('patlast', 'patfirst', 'patmiddle')->where('hpercode',$hpercode)->limit(1)->get();
         $encounters = DB::table('vwInjuryList3')->where('hpercode',$hpercode)->get();
        return view('patients.modal.encounters', compact(
            'patInfo',
            'encounters',
        ));
     }

    public function print($hpercode)
    {
        dd('asdf');
        $patients = DB::table('vwInjuryList3')->select('*')->where('enccode1',$hpercode)->get();
        return view('patients.print')->with('patients', $patients);
    }
    //open Cancer form
    public function createCancerform($hpercode)
    {
        // dd($hpercode);
        $patients = DB::table('vwInjuryList3')->select('*')->where('enccode1',$hpercode)->get();
        return view('patients.createCancer')->with('patients', $patients);
        // return view('patients.createCancer');
    }
    public function createCancerformp2()
    {
        return view('patients.createCancerp2');
    }
    public function createCancerformp3(){
        return view('patients.createCancerp3');
    }

    public function exampleCH(Request $request){
        // 
        // dd($request);
        return view('patients.exampleCH');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request,$enccode)
    {
        //dd($request->plc_regcode);
        // dd($request->account_name);
        
            //  dd($request);
        DB::UPDATE("EXEC registry.dbo.InsertingValuesInto 
            '$enccode',
            '$request->docAdmit',
            '$request->frstAid',
            '$request->abrasion',
            '$request->avulsion',
            '$request->site',
            '$request->concussion',
            '$request->contusion',
            '$request->openType', 
            '$request->closedType',
            
            '$request->wound',
            '$request->traumaticAmputation',
            '$request->others1',
            '$request->bites',
            '$request->others2',
            '$request->chemical',
            '$request->sharp',
            '$request->others3',
            '$request->others4',
            '$request->gunshot',

            '$request->fall',
            '$request->firecracker',
            '$request->others5',
            '$request->others6',
            '$request->others7',
            '$request->others8',
            '$request->withothers',
            '$request->workplaceInput',
            '$request->others9',
            '$request->others10',

            '$request->others11',
            '$request->others12', 
            '$request->patType', 
            '$request->hospPhys',
            '$request->others13',
            '$request->impression',
            '$request->icdNature',
            '$request->icdExternal',
            '$request->treatment',
            '$request->transferred',

            '$request->inPatFinalDiag',
            '$request->inPatOthers',
            '$request->inPatTransfer',
            '$request->inPatNature',
            '$request->inPatExternal',
            '$request->inPatComments',
            '$request->consultant_in_charge_last_name',
            '$request->consultant_in_charge_first_name',
            '$request->consultant_in_charge_middle_name',
            '$request->consultant_in_charge_department',

            '$request->consultant_landline',
            '$request->consultant_mobile',
            '$request->consultant_email',
            '$request->consultant_street_name',
            '$request->consultant_region',
            '$request->consultant_province',
            '$request->consultant_city',
            '$request->consultant_barangay',
            '$request->consultant_zipcode',
            '$request->completedBy_last_name',

            '$request->completedBy_first_name',
            '$request->completedBy_middle_name',
            '$request->completedBy_department',
            '$request->completedBy_landline',
            '$request->completedBy_mobile',
            '$request->completedBy_email',
            '$request->completedBy_street',
            '$request->completedBy_region',
            '$request->completedBy_province',
            '$request->completedBy_City',

            '$request->completedBy_barangay',
            '$request->completedBy_zip',    
            '$request->date_completed',
            '$request->tempreg_no',
            '$request->pat_phil_health_no',
            '$request->pat_facility_no',
            '$request->Pat_Facility_Reg',
            '$request->Pat_Facility_City',
            '$request->Pat_Facility_Prov',
            '$request->Pat_Facility_Bgy',

            '$request->inj_date',
            '$request->inj_time',
            '$request->encounter_date',
            '$request->encounter_time',
            '$request->time_report',
            '$request->date_report',
            '$request->pno',
            '$request->pre_date',
            '$request->status_validation',
            '$request->hosp_reg_no',

            '$request->hosp_cas_no',
            '$request->rstatuscode',
            '$request->temp_regcode',
            '$request->temp_provcode',
            '$request->temp_citycode',
            '$request->ext_expo_nature_sp',
            '$request->reg_no',
            '$request->hosp_no',
            '$request->inj_intent_code',
            '$request->vawcyn',

            '$request->ref_hosp_code',
            '$request->ref_hosp_code_sp',
            '$request->status_code',
            '$request->disp_er_sp_oth',
            '$request->safety_others',
            '$request->disp_inpat_oth',
            '$request->temp_regcodeinput',
            '$request->temp_provcodeinput',
            '$request->temp_ctycodeinput',
            '$request->temp_bgycodeinput',

            '$request->temp_bgycode',
            '$request->plc_regcode',
            '$request->plc_provcode',
            '$request->plc_ctycode',
            '$request->plc_bgycode',
            '$request->plc_bgyname',
            '$request->date_of_birth',
            '$request->status'
            ");
            // 112
            // '$request->temp_regcode',
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
            '$request->ext_expo_nature_sp_ch',
            '$request->risk_noneCh',
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
            '$request->RR4th',
            '$request->chsame',
            '$request->oncoRdo',
            '$request->chemvalRdo'
            ");

            // dd($request);
            $request->session()->flash('alert-success', 'Saved ');
            return $this->search($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getRegion(request $request){
        $regc = $request->post('regc');
        $vwProvname = DB::table('vwRegionProvinceCityBarangay2')  
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
        $vwCtyname = DB::table('vwRegionProvinceCityBarangay2')
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
        $vwBgyname = DB::table('vwRegionProvinceCityBarangay2')
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
    public function getTempRegion(request $request){
        $tregc = $request->post('tregc');
        $vwProvname = DB::table('vwRegionProvinceCityBarangay2')  
        ->select('provname','provcode','regcode')
            ->where('regcode', $tregc)   
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
    public function getTempProv(request $request){
        $tprovc = $request->post('tprovc');
        echo $tprovc;
        $vwCtyname = DB::table('vwRegionProvinceCityBarangay2')
        ->select('ctyname','ctycode','provcode')
        ->where('provcode',$tprovc)
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
    public function getTempCty(request $request){
        $tctyc = $request->post('tctyc');
        echo $tctyc;
        $vwBgyname = DB::table('vwRegionProvinceCityBarangay2')
        ->select('bgyname','bgycode','ctycode')
        ->where('ctycode',$tctyc)
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
    public function getPlcReg(request $request){
        $plcReg = $request->post('plcReg');
        $vwProvname = DB::table('vwRegionProvinceCityBarangay2')  
        ->select('provname','provcode','regcode')
            ->where('regcode', $plcReg)   
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
    public function getPlcProv(request $request){
        $plcProv = $request->post('plcProv');
        echo $plcProv;
        $vwCtyname = DB::table('vwRegionProvinceCityBarangay2')
        ->select('ctyname','ctycode','provcode')
        ->where('provcode',$plcProv)
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
    public function getPlcCty(request $request){
        $plcCty = $request->post('plcCty');
        echo $plcCty;
        $vwBgyname = DB::table('vwRegionProvinceCityBarangay2')
        ->select('bgyname','bgycode','ctycode')
        ->where('ctycode',$plcCty)
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

    public function getStatus(request $request){
        $status = $request->status;
        $all = DB::table('injuryRegistry')
        ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
        ->select('*')
        ->get();
        if($request->ajax()){
            $tableRes = DB::table('injuryRegistry')
            ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
            ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed','injuryRegistry.status')
            ->where('injuryRegistry.status', '=', $status)
            ->get();
            return response()->json(['tableRes'=>$tableRes]);
        }
        
        $tableRes = $all;
        return view('patients.search',compact('all','tableRes'));
    }


    public function show(Request $request,$enccode)
    {
// $info = DB::table('vwInjuryList3')->select('*')->where('enccode1',$enccode)->get();                                  //adsfasdfdsafadsfdsafdsafads<<------------
// dd($request->date_of_birth);
// $date=$info->patlast;
// dd($request);
// $request->date_of_birth = "2000-10-25";
// $age = Carbon::parse($request->date_of_birth)->diff(Carbon::now())->y;
// dd($age. " Years");
        
        if(checkboxList::where('enccode', '=', $enccode)->exists()){
            // $enccode = checkboxList::find($enccode);
            // $enccode->save();
        }
        else
        {
            
            DB::table ('checkboxList')
            ->insert(
                array(
                       'enccode'     =>   $enccode, 
                )
                );
        }
        $info = DB::table('vwInjuryList3')->select('*')->where('enccode1',$enccode)->get();
        $loginId = $request->session()->get('loginId');

        // dd($info);                                    //adsfasdfdsafadsfdsafdsafads<<------------
        $chdatalist = DB::table('checkboxList')->select('*')->where('enccode',$enccode)->get();
        // $vwRegion = vwRegionProvinceCityBarangay::
        $vwProvname = DB::table('vwRegionProvinceCityBarangay2')
        // ->select('regcode','provname','ctyname','bgyname')->distinct()   
        ->select('provname','provcode')
            ->distinct('provname')
            ->orderBy('provname','asc')
            ->get();
            
        $vwRegname = DB::table('vwRegionProvinceCityBarangay2')
        // ->select('regcode','provname','ctyname','bgyname')->distinct()   
        ->select('regname','regcode')
            ->distinct('regname')
            ->orderBy('regname','asc')
            ->get();
            // dd($vwRegname);
        $vwCtyname = DB::table('vwRegionProvinceCityBarangay2')
        // ->select('regcode','provname','ctyname','bgyname')->distinct()   
        ->select('ctyname','ctycode')
            ->distinct('ctyname')
            ->orderBy('ctyname','asc')
            ->get();
        $vwBgyname = DB::table('vwRegionProvinceCityBarangay2')
        // ->select('regcode','provname','ctyname','bgyname')->distinct()   
        ->select('bgyname','bgycode')
            ->distinct('bgyname')
            ->orderBy('bgyname','asc')
            ->get();
        // dd($vwProvname);
        $hosp_code = DB::table('hospital_code')
        ->select()
        ->get();
        // dd($hosp_code);
        $statusTB = DB::table('statusTB')
        ->select()
        ->get();

        return view('patients.show', compact(
            'info',
            'chdatalist',
            'vwProvname',
            'vwRegname',
            'vwCtyname',
            'vwBgyname',
            'loginId',
            'hosp_code',
            'statusTB'
            ));
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
        $patients = Patient::find($id);
        $input = $request->all();
        
        $patients->update($input);
        return view('patients.show')->with('patients', $patients);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::destroy($id);
        return redirect('patientform')->with('flash_message', 'Contact deleted!');  
    }

    public function searchfilter(request $request)
    {
        // dd($request);
            $search_text = $request->input('query');
            // dd($search_text);
               $searchResult = DB::table('vwInjuryList3')->select('*')
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

        $drafts = DB::table('injuryRegistry')
            ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
            ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed','injuryRegistry.status')
            ->where('injuryRegistry.status', '=', 'drafts')
            ->get();
        $loginId = $request->session()->get('loginId');
        $complete = DB::table('injuryRegistry')
            ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
            ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed','injuryRegistry.status')
            ->where('injuryRegistry.status', '=', 'completeForm')
            ->get();
        $next = DB::table('injuryRegistry')->select('*')->get();
        $archive = DB::table('injuryRegistry')
            ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
            ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed','injuryRegistry.status')
            ->where('injuryRegistry.status', '=' ,'archive')
            ->get();

        return view('patients.searchfilter',compact('loginId'))
        // ->with('all',$all)
        ->with('drafts',$drafts)
        ->with('complete',$complete)
        ->with('next',$next)
        ->with('archive',$archive)
        ->with('searchResult',$searchResult)
        ;
            //    return view('patients.searchfilter', compact(
            //        'searchResult',

            //     ));

    }
    public function search(request $request){
        // dd($request);
        // dd($this->getStatus($request))
        // $status = $this->getStatus($request);
        
        $status = $request->status;
        // if($request->ajax()){
        //     $tableRes = DB::table('injuryRegistry')
        //     ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
        //     ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed','injuryRegistry.status')
        //     ->where('injuryRegistry.status', '=', $status)
        //     ->get();
        //     return response()->json(['tableRes'=>$tableRes]);
        // }

        if($request->ajax()){
            $table = DB::table('vwInjurylist3')
            ->leftjoin('injuryRegistry', 'vwInjuryList3.enccode', '=', 'injuryRegistry.enccode')
            ->select('*')
            ->get();
            return ;

        }
        
        // dd($status);
        $all = DB::table('vwInjurylist3')
        // ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
        ->leftjoin('injuryRegistry', 'vwInjuryList3.enccode', '=', 'injuryRegistry.enccode')
        // ->select('injuryRegistry.*', 'vwInjuryList3.*')
        ->select('*')
        // ->get();
        ->paginate(10);
            // dd($all);
        // $tableRes = $all;

        $drafts = DB::table('injuryRegistry')
            ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
            ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed','injuryRegistry.status')
            ->where('injuryRegistry.status', '=', 'drafts')
            ->get();
        $sumDrafts = json_encode(count($drafts));
        
        $loginId = $request->session()->get('loginId');
        $complete = DB::table('injuryRegistry')
            ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
            ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed','injuryRegistry.status')
            ->where('injuryRegistry.status', '=', 'completeForm')
            ->get();
        $sumComplete = json_encode(count($complete));
        $next = DB::table('injuryRegistry')->select('*')->get();
        $archive = DB::table('injuryRegistry')
            ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
            ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed','injuryRegistry.status')
            ->where('injuryRegistry.status', '=' ,'archive')
            ->get();
        $sumArchive = json_encode(count($archive));

        return view('patients.search',compact('loginId','sumDrafts','sumComplete','sumArchive'))
        ->with('all',$all)
        ->with('drafts',$drafts)
        ->with('complete',$complete)
        ->with('next',$next)
        ->with('archive',$archive)
        // ->with('tableRes',$tableRes)
        ;
        // [
        //     'all'=>$all,
        //     'drafts'=>$drafts,
        //     'complete'=>$complete,
        //     'next'=>$next
        // ]);
    }
    public function viewinjuryReg(){
        
        $all = DB::table('injuryRegistry')
            ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
            ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed','injuryRegistry.status')
            ->where('injuryRegistry.status', '=', 'drafts')
            ->get();

            return view('patients.viewinjuryReg', [
                'all'=>$all
            ]);
    }
    public function viewAllinjuryReg(request $request){
        $loginId = $request->session()->get('loginId');
        $all = DB::table('injuryRegistry')
        ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
        ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed','injuryRegistry.status')
        ->where('injuryRegistry.status', '=', 'completeForm')
        ->get();

        $next = DB::table('injuryRegistry')->select('*')->get();

        return view('patients.viewAllinjuryReg',compact('loginId'))
        ->with('all',$all)->with('next',$next);
    }

    public function exportAndProcedure(request $request,$enccode){
        dd('exportAndProcedure');

        DB::UPDATE("EXEC registry.dbo.exportedInjuryRegistry 
        '$enccode',
        '$request->docAdmit',
        '$request->frstAid',
        '$request->abrasion',
        '$request->avulsion',
        '$request->site',
        '$request->concussion',
        '$request->contusion',
        '$request->openType',
        '$request->closedType',
        '$request->wound',
        '$request->traumaticAmputation',
        '$request->others1',
        '$request->bites',
        '$request->others2',
        '$request->chemical',
        '$request->sharp',
        '$request->others3',
        '$request->others4',
        '$request->gunshot',
        '$request->fall',
        '$request->firecracker',
        '$request->others5',
        '$request->others6',
        '$request->others7',
        '$request->others8',
        '$request->withothers',
        '$request->workplaceInput',
        '$request->others9',
        '$request->others10',
        '$request->others11',
        '$request->others12', 
        '$request->hospPhys',
        '$request->others13',
        '$request->impression',
        '$request->icdNature',
        '$request->icdExternal',
        '$request->treatment',
        '$request->transferred',
        '$request->inPatFinalDiag',
        '$request->inPatOthers',
        '$request->inPatTransfer',
        '$request->inPatNature',
        '$request->inPatExternal',
        '$request->inPatComments',
        '$request->inpat_last_nameName',
        '$request->inpat_first_nameName',
        '$request->inPatMiddleName',
        '$request->inPatDept',
        '$request->inPatLandline',
        '$request->inPatMobile',
        '$request->inPatEmail',
        '$request->inPatStreet',
        '$request->inPatRegion',
        '$request->inPatProv',
        '$request->inPatCity',
        '$request->inPatBrngy',
        '$request->inPatZip',
        '$request->inpat_last_nameName2',
        '$request->inpat_first_nameName2',
        '$request->inPatMiddleName2',
        '$request->inPatDept2',
        '$request->inPatLandline2',
        '$request->inPatMobile2',
        '$request->inPatEmail2',
        '$request->inPatStreet2',
        '$request->inPatRegion2',
        '$request->inPatProv2',
        '$request->inPatCity2',
        '$request->inPatBrngy2',
        '$request->inPatZip2',
        '$request->date_completed'
        ");

        return $this->exportbulk($request);

    }
    public function export(request $request,$enccode) 
    {
        // dd($request->sendToExport);
        dd($request);

        DB::UPDATE("EXEC registry.dbo.InsertingValuesInto 
            '$enccode',
            '$request->docAdmit',
            '$request->frstAid',
            '$request->abrasion',
            '$request->avulsion',
            '$request->site',
            '$request->concussion',
            '$request->contusion',
            '$request->openType',
            '$request->closedType',
            '$request->wound',
            '$request->traumaticAmputation',
            '$request->others1',
            '$request->bites',
            '$request->others2',
            '$request->chemical',
            '$request->sharp',
            '$request->others3',
            '$request->others4',
            '$request->gunshot',
            '$request->fall',
            '$request->firecracker',
            '$request->others5',
            '$request->others6',
            '$request->others7',
            '$request->others8',
            '$request->withothers',
            '$request->workplaceInput',
            '$request->others9',
            '$request->others10',
            '$request->others11',
            '$request->others12', 
            '$request->patType', 
            '$request->hospPhys',
            '$request->others13',
            '$request->impression',
            '$request->icdNature',
            '$request->icdExternal',
            '$request->treatment',
            '$request->transferred',
            '$request->inPatFinalDiag',
            '$request->inPatOthers',
            '$request->inPatTransfer',
            '$request->inPatNature',
            '$request->inPatExternal',
            '$request->inPatComments',
            '$request->inpat_last_nameName',
            '$request->inpat_first_nameName',
            '$request->inPatMiddleName',
            '$request->inPatDept',
            '$request->inPatLandline',
            '$request->inPatMobile',
            '$request->inPatEmail',
            '$request->inPatStreet',
            '$request->inPatRegion',
            '$request->inPatProv',
            '$request->inPatCity',
            '$request->inPatBrngy',
            '$request->inPatZip',
            '$request->inpat_last_nameName2',
            '$request->inpat_first_nameName2',
            '$request->inPatMiddleName2',
            '$request->inPatDept2',
            '$request->inPatLandline2',
            '$request->inPatMobile2',
            '$request->inPatEmail2',
            '$request->inPatStreet2',
            '$request->inPatRegion2',
            '$request->inPatProv2',
            '$request->inPatCity2',
            '$request->inPatBrngy2',
            '$request->inPatZip2',
            '$request->date_completed',
            '$request->status'
            ");

        return Excel::download(new UsersExport($request->id), 'Users.xlsx');

    }
    public function infoNext(request $request,$enccode){
    
        // $next = DB::table('finalInputInjuryRegistry')->select('*')->where('enccode1',$enccode)->get();
        $next = DB::table('finalInputInjuryRegistry')->select('*')->where('ENCCODE',$enccode)->get();
        // dd($next);
        // DB::table('finalInputInjuryRegistry')
        // ->select('*')
        // ->insert(['enccode1'     =>   $next, ]);
            // ->insert(array('enccode1'     =>   $enccode,));
        // dd('adsfasdfasdfads');

        DB::UPDATE("EXEC registry.dbo.exportedInjuryRegistry 
        '$enccode',
        '$request->docAdmit',
        '$request->frstAid',
        '$request->abrasion',
        '$request->avulsion',
        '$request->site',
        '$request->concussion',
        '$request->contusion',
        '$request->openType',
        '$request->closedType',
        '$request->wound',
        '$request->traumaticAmputation',
        '$request->others1',
        '$request->bites',
        '$request->others2',
        '$request->chemical',
        '$request->sharp',
        '$request->others3',
        '$request->others4',
        '$request->gunshot',
        '$request->fall',
        '$request->firecracker',
        '$request->others5',
        '$request->others6',
        '$request->others7',
        '$request->others8',
        '$request->withothers',
        '$request->workplaceInput',
        '$request->others9',
        '$request->others10',
        '$request->others11',
        '$request->others12', 
        '$request->hospPhys',
        '$request->others13',
        '$request->impression',
        '$request->icdNature',
        '$request->icdExternal',
        '$request->treatment',
        '$request->transferred',
        '$request->inPatFinalDiag',
        '$request->inPatOthers',
        '$request->inPatTransfer',
        '$request->inPatNature',
        '$request->inPatExternal',
        '$request->inPatComments',
        '$request->inpat_last_nameName',
        '$request->inpat_first_nameName',
        '$request->inPatMiddleName',
        '$request->inPatDept',
        '$request->inPatLandline',
        '$request->inPatMobile',
        '$request->inPatEmail',
        '$request->inPatStreet',
        '$request->inPatRegion',
        '$request->inPatProv',
        '$request->inPatCity',
        '$request->inPatBrngy',
        '$request->inPatZip',
        '$request->inpat_last_nameName2',
        '$request->inpat_first_nameName2',
        '$request->inPatMiddleName2',
        '$request->inPatDept2',
        '$request->inPatLandline2',
        '$request->inPatMobile2',
        '$request->inPatEmail2',
        '$request->inPatStreet2',
        '$request->inPatRegion2',
        '$request->inPatProv2',
        '$request->inPatCity2',
        '$request->inPatBrngy2',
        '$request->inPatZip2',
        '$request->date_completed'
        ");

        return view('patients.infoNext');
    }
    
    public function exportbulk(request $request){
        // dd('exportbulk');
        $encPat = DB::table('injuryRegistry')
        ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
        ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed','injuryRegistry.status')
        ->where('injuryRegistry.status', '=', 'completeForm')
        ->get();
        // dd($request->ENCCODE);
        
            $patEncArr = array();
            foreach($encPat as $s){
             array_push($patEncArr, $s->ENCCODE);
            }
            // dd($patEncArr);
            $patDateArr = array();
            foreach($encPat as $s){
             array_push($patDateArr, $request->date_exported);
            }
            // dd($patDateArr);
            for($i = 0; $i < count($patEncArr);$i++){
                // $insertExcelHistory = [
                    DB::table('registry.dbo.injuryReg_ExportHistory')->insert([
                    'hpercode' =>$patEncArr[$i],
                    'account_name' =>$request->account_name,
                    'date_exported' =>$request->date_exported
                ]); 
            }
            // $excel = Excel::download(new BulkUsersExport($request), 'AllUser.csv');
            // dd('exportbulk');
            // Excel::store(new BulkUsersExport($request), 'invoices.xlsx');
            // return true;
            return Excel::download(new BulkUsersExport($request), 'Injury_list.csv');
            // return $excel;

            //create zip file
            // $zip_file = "C:/Users/ROGIN/Desktop/exported_trauma_list.zip"; //destination and name
            // touch($zip_file);

            // $zip  = new ZipArchive;
            // $this_zip = $zip->open($zip_file);
            
            // // if($this_zip){
            // //      $zip->addFile($excel);
            // // }

            // //create zip file
            // $zip_file = "../file/all-image.zip"; //destination and name
            // touch($zip_file);

            // $zip  = new ZipArchive;
            // $this_zip = $zip->open($zip_file);

            // if($this_zip){
            //     $file_with_path = "../image/1.jpg";
            //     $name="1.zip";
            //     $zip->addFile($file_with_path,$name);
            // }

    }
    public function archive(){
        $all = DB::table('injuryRegistry')
        ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
        ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed','injuryRegistry.status')
        
        ->where('injuryRegistry.status', '=' ,'archive')
        ->get();
        
        // where status = arhive

        $next = DB::table('injuryRegistry')->select('*')->get();

        // return view('patients.archive')->with('all',$all)->with('next',$next);
        return view('patients.archive')->with('all',$all);
    }
    public function setArchive(request $request){
        // dd($enccode);
            // $zip_file = "C:/Users/ROGIN/Desktop/Injury_list.zip"; //destination and name
            // touch($zip_file);

            // $zip  = new ZipArchive;
            // $this_zip = $zip->open($zip_file);
            
            // if($this_zip){
            //     $file_with_path = "C:/Users/ROGIN/Desktop/Injury_list.csv";
            //         $name="Injury_list.csv";
            //         $zip->addFile($file_with_path,$name);
            // }
        DB::table('injuryRegistry')
        ->where('status','completeForm')
        ->update(['status' => 'archive']);

            // return $this->archive();
            return $this->search($request);

    }

    public function logout(request $request){
        // dd($request->session());
        // if($request->session()->has('loginId'));
        // dd(session()->has('loginId'));
        if(session()->has('loginId'))
        {
            session()->pull('loginId');
            // dd(session()->has('loginId'));
            return redirect('/login');
        }

    }
}
