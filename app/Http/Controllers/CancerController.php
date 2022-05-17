<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
 
use Illuminate\Http\Request;
use App\Models\Vwinjurylist;
use App\Models\checkboxList;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\BulkUsersExport;
use App\Models\cancerRegistry;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$enccode)
    {
        dd('cancercontroller');
        // dd($patfirst);
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
        '$request->status'
        ");
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

        // dd($request);
        return $this->viewCancerDraft();
    }
    public function viewCancerDraft(){
        $all = DB::table('cancerRegistry')
            ->join('vwInjuryList', 'cancerRegistry.enccode', '=', 'vwInjuryList.enccode')
            ->select('cancerRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode','cancerRegistry.status')
            ->where('cancerRegistry.status', '=', 'drafts')
            ->get();

            return view('patients.viewCancerDraft', [
                'all'=>$all
            ]);
    }
    public function viewCancerComplete(){
        $all = DB::table('cancerRegistry')
            ->join('vwInjuryList', 'cancerRegistry.enccode', '=', 'vwInjuryList.enccode')
            ->select('cancerRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode','cancerRegistry.status')
            ->where('cancerRegistry.status', '=', 'completeForm')
            ->get();

            return view('patients.viewCancerComplete', [
                'all'=>$all
            ]);
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
        // dd($hpercode);
        if(cancerRegistry::where('enccode', '=', $enccode)->exists()){
            // $enccode = checkboxList::find($enccode);
            // $enccode->save();
        }
        else
        {
            DB::table('cancerRegistry')
            ->insert(
                array(
                       'enccode'     =>   $enccode, 
                )
                );
        }

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
        
        $patinfo = DB::table('cancerRegistry')
        ->join('vwInjuryList', 'cancerRegistry.enccode', '=', 'vwInjuryList.enccode')
        ->select('cancerRegistry.*','vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast','vwInjuryList.hpercode', 'vwInjuryList.enccode')
        ->where('cancerRegistry.enccode',$enccode)
        // ->select('cancerRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode', 'cancerForm.status')
        ->get();
        $chdata = DB::table('checkboxList')->select('*')->where('enccode',$enccode)->get();
    // dd($patinfo );
        return view('patients.createCancer',[
            'patinfo'=>$patinfo,
            'chdata'=>$chdata
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
}
