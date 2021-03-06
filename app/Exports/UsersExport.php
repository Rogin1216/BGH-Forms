<?php

namespace App\Exports;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vwinjurylist;
use App\Models\injuryRegistry;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UsersExport extends Controller implements FromCollection, WithHeadings
{
    protected $id;

        function __construct($id) {
                $this->id = $id;
        }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // $enccode = Vwinjurylist::select('id', 'patFirst', 'patMiddle', 'patLast')->where('enccode',$enccode)->get();
        // return Vwinjurylist::select('id', 'patFirst', 'patMiddle', 'patLast')->where('enccode','ER702732Jul182017132155')->get();
        
            return injuryRegistry::
            join('vwInjuryList', 'injuryRegistry.enccode', '=', 'vwInjuryList.enccode')
            ->select('injuryRegistry.*', 'vwInjuryList.patfirst', 'vwInjuryList.patmiddle', 'vwInjuryList.patlast', 'vwInjuryList.hpercode', 'vwInjuryList.enccode', 'injuryRegistry.inPatDate','injuryRegistry.status')
            ->where('injuryRegistry.enccode',$this->id)
            ->get();
        
    } 
    public function headings() :array
    {
        return ["id", "ENCCODE", "frstAid","concussion", "contusion", "openType", "closedType", "wound", "traumaticAmputation", "others1", "bites", "others2", "chemical", "sharp", "others3"
        , "others4", "gunshot", "fall", "firecracker", "others5", "others6", "others7", "others8", "withothers", "others9", "others10", "others11","patType", "hospPhys", "impression", "others12", "others13", "treatment"
        , "transferred", "firstName", "middleName", "lName", "docAdmit", "abrasion", "avulsion", "site", "icdNature", "icdExternal", "workplaceInput", "inPatFinalDiag", "inPatOthers", "inPatTransfer", "inPatNature"
        , "inPatExternal", "inPatComments", "inPatLastName", "inPatFirstName", "inPatMiddleName", "inPatDept", "inPatLandline", "inPatMobile", "inPatEmail", "inPatStreet", "inPatRegion", "inPatProv", "inPatCity"
        , "inPatBrngy", "inPatZip", "inPatLastName2", "inPatFirstName2", "inPatMiddleName2", "inPatDept2", "inPatLandline2", "inPatMobile2", "inPatEmail2", "inPatStreet2", "inPatRegion2", "inPatProv2", "inPatCity2"
        , "inPatBrngy2", "inPatZip2", "inPatDate","status"];
    }
}
