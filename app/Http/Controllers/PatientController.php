<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\vwInjuryList3;
use App\Models\injuryRegistry;
use App\Models\checkboxList;
use App\Models\exportedInjuryRegList;
use PhpParser\Node\Expr\AssignOp\Pow;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use Carbon\Carbon; // Include Class in COntroller

// exports
// use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\BulkUsersExport;
use App\Models\finalInputInjuryRegistry;
use App\Providers\RouteServiceProvider;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $jsonpost =json_decode($post->getStatusCode());

        // dd($request->user());
        // if ($request->user()->hasVerifiedEmail()) {
        //     return redirect()->intended(RouteServiceProvider::HOME);
        // }
        // if(Session::has('loginId')){
        //     dd($request->session());
        // }
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
        // dd('patient contorller');
        // dd($request->patType);

        // $saveTo = $request->saveTo;
            // dd($request->status);
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
            '$request->status'
            ");
            // '$request->tempreg_no',
            // 
            // 
            // 
            // 
            // 
            // 
            // 
            // '$request->ext_expo_nature_sp',
            // '$request->reg_no',
            
            DB::UPDATE("EXEC registry.dbo.InsertChValue
            '$enccode',
            '$request->rdoAid',
            '$request->injryRdo',
            '$request->abrasionCh',
            '$request->avulsionCh',
            '$request->burnCh',
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
            '$request->degree_burn_1',
            '$request->degree_burn_2',
            '$request->degree_burn_3',
            '$request->degree_burn_4',
            '$request->degree_burn_5',
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
            '$request->FUdepttrt'
            ");

            $request->session()->flash('alert-success', 'Saved ');
            return $this->viewinjuryReg();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$enccode)
    {
// $info = DB::table('vwInjuryList3')->select('*')->where('enccode1',$enccode)->get();                                  //adsfasdfdsafadsfdsafdsafads<<------------
// dd($request->date_of_birth);
// $date=$info->patlast;
// dd($request);
// $request->date_of_birth = "2000-10-25";
// $age = Carbon::parse($request->date_of_birth)->diff(Carbon::now())->y;
// dd($age. " Years");
        // dd('adsfdsa');
        if(checkboxList::where('enccode', '=', $enccode)->exists()){
            // $enccode = checkboxList::find($enccode);
            // $enccode->save();
        }
        else
        {
            
            DB::table('checkboxList')
            ->insert(
                array(
                       'enccode'     =>   $enccode, 
                )
                );
        }
        $info = DB::table('vwInjuryList3')->select('*')->where('enccode1',$enccode)->get();                                  //adsfasdfdsafadsfdsafdsafads<<------------
        $chdatalist = DB::table('checkboxList')->select('*')->where('enccode',$enccode)->get();
        // dd($chdata);
        return view('patients.show', compact(
            'info',
            'chdatalist',
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
               $patient = DB::table('vwInjuryList3')->select('patfirst','patmiddle','patlast', 'hpercode')
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
               return view('patients.searchfilter', compact(
                   'patient',

                ));

    }
    public function search(){
        return view('patients.search');
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

        $all = DB::table('injuryRegistry')
        ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
        ->select('injuryRegistry.*', 'vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode', 'injuryRegistry.date_completed','injuryRegistry.status')
        ->where('injuryRegistry.status', '=', 'completeForm')
        ->get();

        $next = DB::table('injuryRegistry')->select('*')->get();

        return view('patients.viewAllinjuryReg')->with('all',$all)->with('next',$next);
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
    
    public function exportbulk(request $request,$enccode){
        // $exportRd = $request->exportRd;
        $all = DB::table('injuryRegistry')
        ->join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
        ->join('checkboxList', 'injuryRegistry.enccode', '=', 'checkboxList.enccode')

        // vwInjuryList3.
        // checkboxList.
        // injuryRegistry.
        ->select('vwInjuryList3.status_validation','vwInjuryList3.rstatuscode','vwInjuryList3.pat_facility_no','vwInjuryList3.date_report','vwInjuryList3.time_report',
        'vwInjuryList3.reg_no','vwInjuryList3.tempreg_no','vwInjuryList3.hosp_no','vwInjuryList3.hosp_reg_no','vwInjuryList3..hosp_cas_no',
        'vwInjuryList3.patType','vwInjuryList3.patlast','vwInjuryList3.patfirst','vwInjuryList3.patmiddle','vwInjuryList3.patsex','vwInjuryList3.pat_date_of_birth',
        'vwInjuryList3.age_years','vwInjuryList3.age_months','vwInjuryList3.age_days','vwInjuryList3.pat_current_address_region_name','vwInjuryList3.pat_current_province_name',
        'vwInjuryList3.pat_current_city_name','vwInjuryList3.tempreg_code','vwInjuryList3.temp_provcode','vwInjuryList3.temp_citycode','vwInjuryList3.pat_phil_health_no',
        'vwInjuryList3.plc_regcode','vwInjuryList3.plc_provcode','vwInjuryList3.plc_ctycode','vwInjuryList3.inj_date','vwInjuryList3.inj_time','vwInjuryList3.encounter_date',
        'vwInjuryList3.encounter_time','vwInjuryList3.inj_intent_code','vwInjuryList3.vawcyn','checkboxList.rdoAid','vwInjuryList3.frstAid','vwInjuryList3.docAdmit',
        'checkboxList.injryRdo','checkboxList.abrasionCh','checkboxList.abrasion','checkboxList.avulsionCh','vwInjuryList3.avulsion','checkboxList.burnCh','checkboxList.degree_burn_1',
        'checkboxList.degree_burn_2','checkboxList.degree_burn_3','checkboxList.degree_burn_4','checkboxList.degree_burn_5','vwInjuryList3.site','checkboxList.concussionCh','vwInjuryList3.concussion',
        'checkboxList.contusionCh','vwInjuryList3.contusion','checkboxList.closedTypeCh','vwInjuryList3.closedType','checkboxList.openTypeCh','vwInjuryList3.openType','checkboxList.woundCh',
        'vwInjuryList3.wound','checkboxList.traumaCh','vwInjuryList3.traumaticAmputation','checkboxList.others1Ch','vwInjuryList3.others1','checkboxList.bitesCh','vwInjuryList3.bites',
        'checkboxList.burn1Ch','checkboxList.burnRdo','vwInjuryList3.others2','chemicalCh','chemical','sharpCh','sharp',
        'drowningCh','drowningRdo','others3','natureCh','natureRdo','ext_expo_nature_sp','fallCh','fall','firecrackerCh','firecracker_code','firecracker','assaultCh','gunshotCh',
        'gunshot','hangingCh','maulingCh','transportCh','areaRdo','collRdo','vehicleRdo','Others6','otherRdo','others7','posRdo','others8','victimsRdo','withothers','placeRdo',
        'workplaceInput','others9','activityRdo','others10','risk_noneCh','alcoholCh','sleepyCh','smokingCh','phoneCh','others11Ch','Others11','noneCh','unknown5Ch','airbagCh',
        'helmetCh','childseatCh','seatbeltCh','vestCh','others12Ch','transferRdo','referralRdo','hospPhys','ref_hosp_code','ref_hosp_code_sp','status_code','transpoRdo',
        'others13','impression','icdNature','icdExternal','dispoRdo','transferred','disp_er_sp_oth','outcome','inPatFinalDiag','inPatDispoRdo','inPatOthers','inPatTransfer',
        'inPatOutcomeRdo','inPatNature','inPatExternal','inPatComments','Pat_Facility_Reg','Pat_Facility_Prov','Pat_Facility_City','fac_regno','upload','class','pre_date','pno')



        // ->select(
        // 'vwInjuryList3.tempreg_no', 'vwInjuryList3.hpercode', 'vwInjuryList3.patlast', 'vwInjuryList3.patfirst','vwInjuryList3.patmiddle',
        // 'vwInjuryList3.pat_current_address_region','vwInjuryList3.pat_current_address_province','vwInjuryList3.pat_current_address_city',
        // 'vwInjuryList3.pat_sex','vwInjuryList3.pat_date_of_birth','vwInjuryList3.age_years','vwInjuryList3.age_months','vwInjuryList3.age_months',
        // 'vwInjuryList3.age_days','vwInjuryList3.plc_regcode','vwInjuryList3.plc_provcode','vwInjuryList3.plc_ctycode','vwInjuryList3.inj_date',
        // 'vwInjuryList3.inj_time','vwInjuryList3.encounter_date','vwInjuryList3.encounter_time','checkboxList.rdoAid','checkboxList.abrasionCh',
        // 'injuryRegistry.abrasion','checkboxList.avulsionCh','injuryRegistry.avulsion','injuryRegistry.site','checkboxList.concussionCh',
        // 'injuryRegistry.concussion','checkboxList.contusionCh','injuryRegistry.contusion','checkboxList.closedTypeCh','injuryRegistry.closedType',
        // 'checkboxList.openTypeCh','injuryRegistry.openType','checkboxList.woundCh','injuryRegistry.wound','checkboxList.traumaCh','injuryRegistry.traumaticAmputation',
        // 'checkboxList.others1Ch','injuryRegistry.others1','checkboxList.bitesCh','injuryRegistry.bites','checkboxList.burnRdo','injuryRegistry.others2',
        // 'checkboxList.chemicalCh','injuryRegistry.others3','checkboxList.sharpCh','injuryRegistry.sharp','checkboxList.drowningRdo','checkboxList.fallCh',
        // 'injuryRegistry.fall','checkboxList.gunshotCh','injuryRegistry.gunshot','checkboxList.hangingCh','checkboxList.maulingCh','checkboxList.transportCh',
        // 'injuryRegistry.others4')


        ->where('injuryRegistry.status', '=' ,'completeForm')
        ->get();


        dd($all);
            return Excel::download(new BulkUsersExport($request), 'AllUser.xlsx');


    }
    public function exporttt(request $request){
        // dd("asdfasdfdsa");
        return Excel::download(new BulkUsersExport($request), 'AllUser.xlsx');

        
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
        DB::table('injuryRegistry')
        ->where('status','completeForm')
        ->update(['status' => 'archive']);

            return $this->archive();

    }
}
