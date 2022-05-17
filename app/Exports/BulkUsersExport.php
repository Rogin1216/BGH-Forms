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
        join('vwInjuryList', 'injuryRegistry.enccode', '=', 'vwInjuryList.enccode')
        ->select('vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode','injuryRegistry.*', 'injuryRegistry.inPatDate','injuryRegistry.status')
        ->select('new.reg_no','new.hpercode','new.pat_last_name','new.pat_first_name','new.pat_middle_name','new.pat_current_address_region','new.pat_current_address_province','new.pat_current_address_city','new.pat_sex','new.pat_date_of_birth','new.age_years','new.age_months','new.pat_days','new.plc_regcode','new.provcode','new.plc_ctycode','new.inj_date','new.inj_time','new.encounter_date','new.encounter_time','new.inj_inent_code')
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
 