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
    public function store(Request $request)
    {
        dd('asdfdsaf');
        
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
