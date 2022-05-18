<?php

namespace App\Exports;
use App\Http\Controllers\Controller;
use App\Models\finalInputInjuryRegistry;
use App\Models\injuryRegistry;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Illuminate\Support\Facades\DB;



class BulkUsersExport extends Controller implements FromCollection, WithHeadings
{
    protected $selected;

        function __construct($selected) {
                $this->selected = $selected;
        }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return injuryRegistry::
        join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
        ->select('vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode','injuryRegistry.*', 'injuryRegistry.inPatDate','injuryRegistry.status')
        ->select('vwInjuryList3.hpercode','vwInjuryList3.pat_last_name','vwInjuryList3.pat_first_name','vwInjuryList3.pat_middle_name','vwInjuryList3.pat_current_address_region','vwInjuryList3.pat_current_address_province','vwInjuryList3.pat_current_address_city','vwInjuryList3.pat_sex','vwInjuryList3.pat_date_of_birth','vwInjuryList3.age_years','vwInjuryList3.age_months','vwInjuryList3.pat_days','vwInjuryList3.plc_regcode','vwInjuryList3.provcode','vwInjuryList3.plc_ctycode','vwInjuryList3.inj_date','vwInjuryList3.inj_time','vwInjuryList3.encounter_date','vwInjuryList3.encounter_time','vwInjuryList3.inj_inent_code')
        ->where('injuryRegistry.status', '=' ,'completeForm')
        ->get();
        // return finalInputInjuryRegistry::where('ENCCODE',$this->selected)->get();
    }
    public function headings() :array
    {
        return ["id", "ENCCODE", "frstAid","concussion", "contusion", "openType", "closedType", "wound", "traumaticAmputation", "others1", "bites", "others2", "chemical", "sharp", "others3"
        , "others4", "gunshot", "fall", "firecracker", "others5", "others6", "others7", "others8", "withothers", "others9", "others10", "others11","patType", "hospPhys", "impression", "others12", "others13", "treatment"
        , "transferred", "firstName", "middleName", "lName", "docAdmit", "abrasion", "avulsion", "site", "icdNature", "icdExternal", "workplaceInput", "inPatFinalDiag", "inPatOthers", "inPatTransfer", "inPatNature"
        , "inPatExternal", "inPatComments", "inPatLastName", "inPatFirstName", "inPatMiddleName", "inPatDept", "inPatLandline", "inPatMobile", "inPatEmail", "inPatStreet", "inPatRegion", "inPatProv", "inPatCity"
        , "inPatBrngy", "inPatZip", "inPatLastName2", "inPatFirstName2", "inPatMiddleName2", "inPatDept2", "inPatLandline2", "inPatMobile2", "inPatEmail2", "inPatStreet2", "inPatRegion2", "inPatProv2", "inPatCity2"
        , "inPatBrngy2", "inPatZip2", "inPatDate","Status","patfirst","patmiddle","patlast"];
    }
}
 