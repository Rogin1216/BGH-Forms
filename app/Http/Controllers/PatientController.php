<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Vwinjurylist;
use App\Models\injuryRegistry;
use App\Models\checkboxList;
use App\Models\exportedInjuryRegList;
use PhpParser\Node\Expr\AssignOp\Pow;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
// exports
// use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\BulkUsersExport;
use App\Models\finalInputInjuryRegistry;

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
            ->join('vwInjuryList', 'injuryRegistry.enccode', '=', 'vwInjuryList.enccode')
            ->select('injuryRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode', 'injuryRegistry.inPatDate')
            ->whereBetween('injuryRegistry.inPatDate',[$startDate, $endDate])
            ->where('injuryRegistry.status','archive')
            ->orderBy('injuryRegistry.inPatDate', 'asc')
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
        $patInfo = DB::table('vwInjuryList')->select('patlast', 'patfirst', 'patmiddle')->where('hpercode',$hpercode)->limit(1)->get();
         $encounters = DB::table('vwInjuryList')->where('hpercode',$hpercode)->get();
        return view('patients.modal.encounters', compact(
            'patInfo',
            'encounters',
        ));
        
     }

    public function print($hpercode)
    {
        $patients = DB::table('vwInjuryList')->select('*')->where('enccode',$hpercode)->get();
        return view('patients.print')->with('patients', $patients);
    }
    //open Cancer form
    public function createCancerform($hpercode)
    {
        // dd($hpercode);
        $patients = DB::table('vwInjuryList')->select('*')->where('enccode',$hpercode)->get();
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
    public function store(Request $request,$enccode)
    {
        // dd($request->status);
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
            '$request->inPatLastName',
            '$request->inPatFirstName',
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
            '$request->inPatLastName2',
            '$request->inPatFirstName2',
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
            '$request->inPatDate',
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
            '$request->inPatOutcomeRdo'
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
        $patients = DB::table('vwInjuryList')->select('*')->where('enccode',$enccode)->get();                                  //adsfasdfdsafadsfdsafdsafads<<------------
        $chdata = DB::table('checkboxList')->select('*')->where('enccode',$enccode)->get();
        return view('patients.show', compact(
            'chdata',
            'patients',
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
               $patient = Vwinjurylist::select('patfirst','patmiddle','patlast', 'hpercode')
            //    $patient = DB::table('vwInjuryList')
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
            ->join('vwInjuryList', 'injuryRegistry.enccode', '=', 'vwInjuryList.enccode')
            ->select('injuryRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode', 'injuryRegistry.inPatDate','injuryRegistry.status')
            ->where('injuryRegistry.status', '=', 'drafts')
            ->get();

            return view('patients.viewinjuryReg', [
                'all'=>$all
            ]);

    }
    public function viewAllinjuryReg(request $request){

        $all = DB::table('injuryRegistry')
        ->join('vwInjuryList', 'injuryRegistry.enccode', '=', 'vwInjuryList.enccode')
        ->select('injuryRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode', 'injuryRegistry.inPatDate','injuryRegistry.status')
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
        '$request->inPatLastName',
        '$request->inPatFirstName',
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
        '$request->inPatLastName2',
        '$request->inPatFirstName2',
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
        '$request->inPatDate'
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
            '$request->inPatLastName',
            '$request->inPatFirstName',
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
            '$request->inPatLastName2',
            '$request->inPatFirstName2',
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
            '$request->inPatDate',
            '$request->status'
            ");

        return Excel::download(new UsersExport($request->id), 'Users.xlsx');

    }
    public function infoNext(request $request,$enccode){
    
        // $next = DB::table('finalInputInjuryRegistry')->select('*')->where('enccode',$enccode)->get();
        $next = DB::table('finalInputInjuryRegistry')->select('*')->where('ENCCODE',$enccode)->get();
        // dd($next);
        // DB::table('finalInputInjuryRegistry')
        // ->select('*')
        // ->insert(['enccode'     =>   $next, ]);
            // ->insert(array('enccode'     =>   $enccode,));
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
        '$request->inPatLastName',
        '$request->inPatFirstName',
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
        '$request->inPatLastName2',
        '$request->inPatFirstName2',
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
        '$request->inPatDate'
        ");

        return view('patients.infoNext');
    }
    
    public function exportbulk(request $request,$enccode){
        // $exportRd = $request->exportRd;

            return Excel::download(new BulkUsersExport($request), 'AllUser.xlsx');


    }
    public function exporttt(request $request){
        // dd("asdfasdfdsa");
        return Excel::download(new BulkUsersExport($request), 'AllUser.xlsx');

        
    }
    public function archive(){
        $all = DB::table('injuryRegistry')
        ->join('vwInjuryList', 'injuryRegistry.enccode', '=', 'vwInjuryList.enccode')
        ->select('injuryRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode', 'injuryRegistry.inPatDate','injuryRegistry.status')
        
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
