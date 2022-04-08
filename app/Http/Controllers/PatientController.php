<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Vwinjurylist;
use PhpParser\Node\Expr\AssignOp\Pow;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // $enccode = $request->enccode;
        //$id=$request->id;
        // dd(json_decode($request->all));
        $all = Vwinjurylist::select('patfirst','patmiddle','patlast', 'hpercode')
        ->distinct()
        ->paginate(10);
        // dd($all);
        // return Vwinjurylist::get('enccode');

        //$encounters = Vwinjurylist::where('hpercode',$id)->get();
        //$encounters = Vwinjurylist::where('hpercode', '000000000095594' )->get();
        //$encounters = Vwinjurylist::where('hpercode', '000000000702732')->get();
        //dd($request);
         
        //dd(json_decode($encounters));
        //$patenccode = Vwinjurylist::find($enccode);
        //$patients = Patient::all();
        // return view('patients.index');
        return view('patients.index', [
            'all'=>$all,
            //  'enc'=>'',
        ]);
        //->with('i',(request()->input('page', 1)-1)*5);
    }
    
        /*$patients = Patient::where([
            ['firstName', '!=', NULL],
            [function ($query)use($request){
                if(($term=$request->term)){
                    $query->orWhere('firstName','LIKE','%'.$term.'%')->get();
                }
            }]
            

        ])
        ->orderBy("id", "desc")
        ->paginate(11);

        return view('patients.index', compact('patients'))
        ->with('i',(request()->input('page', 1)-1)*5);
        
        $patients = Patient::latest()->paginate(5);

        return view('patients.index', compact('patients'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        
        //$patients = Patient::all();
        //return view ('patients.index')->with('patients',$patients);*/
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function viewencounter($hpercode){
        $patInfo = DB::table('vwInjuryList')->select('patlast', 'patfirst', 'patmiddle')->where('hpercode',$hpercode)->limit(1)->get();
         $encounters = DB::table('vwInjuryList')->where('hpercode',$hpercode)->get();
        return view('patients.modal.encounters', compact(
            'patInfo',
            'encounters',
        ));
      
     }
     //open Injury form
    public function print($hpercode)
    {
        $patients = DB::table('vwInjuryList')->select('*')->where('hpercode',$hpercode)->get();
        // dd($patients);

        //$patients = Vwinjurylist::select("*")->take(10)->distinct()->get();

        return view('patients.print')->with('patients', $patients);
    }
    //open Cancer form
    public function createCancerform()
    {
        return view('patients.createCancer');
    }
    public function createCancerformp2()
    {
        return view('patients.createCancerp2');
    }
    public function createCancerformp3(){
        return view('patients.createCancerp3');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        //$input=$request->all();

        
        //dd($_POST);
        //dd($_POST['transpoRdo1']);
        //dd($request->all());
       /* $arrayTostring = implode(',', $request->input('natureOfInjury'));
        $inputValue['natureOfInjury'] = $arrayTostring;
        $success = Patient::create($inputValue);
        
        Patient::create([
            'firstName'=>$request->firstName,
            'middleName'=>$request->middleName,
            'lName'=>$request->lName,
            'docAdmit'=>$request->docAdmit,
            'abrasion'=>$request->abrasion,
            'frstAid'=>$request->frstAid,
            'natureOfInjury'=>$request->natureOfInjury
            //'natureOfInjury'=> implode (' ', $request->natureOfInjury),
            ]);*/
        // $input['natureofInjury']=$request->input('natureOfInjury');
        // Patient::create($input);
        
    //    DB::table('registry.dbo.patients')->create(["EXEC registry.dbo.AddPatients '$request->abrasion',  '$request->avulsion' "]);
    
            DB::UPDATE("EXEC registry.dbo.InsertingValuesInto '$request->firstName','$request->middleName', '$request->lName',
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
            '$request->transferred'
            ");
            // dd($request);

        return redirect('patientform')->with('flash message','Patient Added');
    
       /* '$request->concussion',
            '$request->contusion', '$request->openType',
            '$request->closedType', '$request->wound',
            '$request->traumaticAmputation', '$request->others1',
            '$request->bites', '$request->others2',
            '$request->chemical', '$request->sharp',
            '$request->others3', '$request->others4',
            '$request->others4', '$request->gunshot',
            '$request->fall', '$request->firecracker',
            '$request->others5', '$request->others6',
            '$request->others7', '$request->others8',
            '$request->withothers', '$request->others9',
            '$request->others10', '$request->others11',
            '$request->hosPhys', '$request->impression',
            '$request->others12', '$request->others13',
            '$request->treatment', '$request->transferred'*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($hpercode)
    {
        // dd($hpercode);
        //$patients = Vwinjurylist::find($enccode);
        //$patients = DB::connection('Vwinjurylist')->select('*');
        // $patients = DB::table('vwInjuryList')->first();
        $patients = DB::table('vwInjuryList')->select('*')->where('enccode',$hpercode)->get();
        // dd($patients);
        //$patients = Vwinjurylist::select("*")->take(10)->distinct()->get();

        return view('patients.show')->with('patients', $patients);
        // return view('patients.show', compact(
        //     'patients',
        // ));
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
            $search_text = $request->input('query');
            // dd($search_text);
               $patient = Vwinjurylist::select('patfirst','patmiddle','patlast', 'hpercode')
            //    $patient = DB::table('vwInjuryList')
               ->where ('patfirst', 'LIKE', '%'.$search_text.'%')
               ->orWhere ('patmiddle', 'LIKE', '%'.$search_text.'%')
               ->orWhere ('patlast', 'LIKE', '%'.$search_text.'%')
               ->orWhere ('hpercode', 'LIKE', '%'.$search_text.'%') 

               ->distinct()
               ->get();
                // dd($patient);
               return view('patients.searchfilter', compact(
                   'patient',

                ));

    }

}
