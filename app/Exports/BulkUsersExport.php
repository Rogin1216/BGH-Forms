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
        ->join('checkboxList', 'injuryRegistry.enccode', '=', 'checkboxList.enccode')
        ->select(
        'vwInjuryList3.status_validation',
        'vwInjuryList3.rstatuscode',
        'vwInjuryList3.pat_facility_no',
        'vwInjuryList3.date_report',
        'vwInjuryList3.time_report',
        'vwInjuryList3.reg_no',
        'vwInjuryList3.tempreg_no',
        'vwInjuryList3.hosp_no',
        'vwInjuryList3.hosp_reg_no',
        'vwInjuryList3.hosp_cas_no',
        'vwInjuryList3.patType',
        'vwInjuryList3.patlast',
        'vwInjuryList3.patfirst',
        'vwInjuryList3.patmiddle',
        'vwInjuryList3.patsex',
        'vwInjuryList3.pat_date_of_birth',
        'vwInjuryList3.age_years',
        'vwInjuryList3.age_months',
        'vwInjuryList3.age_days',
        'vwInjuryList3.pat_current_address_region_name',
        'vwInjuryList3.pat_current_address_province_name',
        'vwInjuryList3.pat_current_address_city_name',
        'vwInjuryList3.temp_regcode',
        'vwInjuryList3.temp_provcode',
        'vwInjuryList3.temp_citycode',
        'vwInjuryList3.pat_phil_health_no',
        'vwInjuryList3.plc_regcode',
        'vwInjuryList3.plc_provcode',
        'vwInjuryList3.plc_ctycode',
        'vwInjuryList3.inj_date',
        'vwInjuryList3.inj_time',
        'vwInjuryList3.encounter_date',
        'vwInjuryList3.encounter_time',
        'vwInjuryList3.inj_intent_code',
        'vwInjuryList3.vawcyn',
        'checkboxList.rdoAid',
        'vwInjuryList3.frstAid',
        'vwInjuryList3.docAdmit',
        'checkboxList.injryRdo',
        'checkboxList.abrasionCh',
        'vwInjuryList3.abrasion',
        'checkboxList.avulsionCh',
        'vwInjuryList3.avulsion',
        'checkboxList.burnCh',
        'checkboxList.degree_burn1',
        'checkboxList.degree_burn2',
        'checkboxList.degree_burn3',
        'checkboxList.degree_burn4',
        'vwInjuryList3.site',
        'checkboxList.concussionCh',
        'vwInjuryList3.concussion',
        'checkboxList.contusionCh',
        'vwInjuryList3.contusion',
        'checkboxList.closedTypeCh',
        'vwInjuryList3.closedType',
        'checkboxList.openTypeCh',
        'vwInjuryList3.openType',
        'checkboxList.woundCh',
        'vwInjuryList3.wound',
        'checkboxList.traumaCh',
        'vwInjuryList3.traumaticAmputation',
        'checkboxList.others1Ch',
        'vwInjuryList3.others1',
        'checkboxList.bitesCh',
        'vwInjuryList3.bites',
        'checkboxList.burn1Ch',
        'checkboxList.burnRdo',
        'vwInjuryList3.others2',
        'checkboxList.chemicalCh',
        'vwInjuryList3.chemical',
        'checkboxList.sharpCh',
        'vwInjuryList3.sharp',
        'checkboxList.drowningCh',
        'checkboxList.drowningRdo',
        'vwInjuryList3.others3',
        'checkboxList.natureCh',
        'checkboxList.natureRdo',
        'vwInjuryList3.ext_expo_nature_sp',
        'checkboxList.fallCh',
        'vwInjuryList3.fall',
        'checkboxList.firecrackerCh',
	    'checkboxList.firecracker_code',
        'vwInjuryList3.firecracker',
        'checkboxList.assaultCh',
        'checkboxList.gunshotCh',
        'vwInjuryList3.gunshot',
        'checkboxList.hangingCh',
        'checkboxList.maulingCh',
        'checkboxList.transportCh',
	    'checkboxList.areaRdo',
        'checkboxList.collRdo',
        'checkboxList.vehicleRdo',
        'vwInjuryList3.Others6',
	    'checkboxList.otherRdo',
        'vwInjuryList3.others7',
        'checkboxList.posRdo',
        'vwInjuryList3.others8',
        'checkboxList.victimsRdo',
        'vwInjuryList3.withothers',
        'checkboxList.placeRdo',
        'vwInjuryList3.workplaceInput',
        'vwInjuryList3.others9',
        'checkboxList.activityRdo',
        'vwInjuryList3.others10',
        'checkboxList.risk_noneCh',
        'checkboxList.alcoholCh',
        'checkboxList.sleepyCh',
        'checkboxList.smokingCh',
    	'checkboxList.phoneCh',
        'checkboxList.others11Ch',
        'vwInjuryList3.Others11',
        'checkboxList.noneCh',
        'checkboxList.unknown5Ch',
        'checkboxList.airbagCh',
        'checkboxList.helmetCh',
        'checkboxList.childseatCh',
        'checkboxList.seatbeltCh',
        'checkboxList.vestCh',
        'checkboxList.others12Ch',
        'vwInjuryList3.safety_others',
        'checkboxList.transferRdo',
        'checkboxList.referralRdo',
	    'vwInjuryList3.hospPhys',
        'vwInjuryList3.ref_hosp_code',
        'vwInjuryList3.ref_hosp_code_sp',
        'vwInjuryList3.status_code',
        'checkboxList.transpoRdo',
        'vwInjuryList3.others13',
        'vwInjuryList3.impression',
	    'vwInjuryList3.icdNature',
        'vwInjuryList3.icdExternal',
        'checkboxList.dispoRdo',
	    'vwInjuryList3.transferred',
        'vwInjuryList3.disp_er_sp_oth',
        'vwInjuryList3.disp_inpat_oth',
        'checkboxList.outcome',
        'vwInjuryList3.inPatFinalDiag',
        'checkboxList.inPatDispoRdo',
        'vwInjuryList3.inPatOthers',
	    'vwInjuryList3.inPatTransfer',
        'checkboxList.inPatOutcomeRdo',
        'vwInjuryList3.inPatNature',
        'vwInjuryList3.inPatExternal',
	    'vwInjuryList3.inPatComments',
        'vwInjuryList3.Pat_Facility_Reg',
        'vwInjuryList3.Pat_Facility_Prov',
        'vwInjuryList3.Pat_Facility_City',
        'vwInjuryList3.fac_regno',
        'vwInjuryList3.upload',
        'vwInjuryList3.class',
        'vwInjuryList3.pre_date',
        'vwInjuryList3.pno')
        ->where('injuryRegistry.status', '=' ,'completeForm')
        ->get();

        // join('vwInjuryList3', 'injuryRegistry.enccode', '=', 'vwInjuryList3.enccode')
        // ->select('vwInjuryList3.patfirst', 'vwInjuryList3.patmiddle', 'vwInjuryList3.patlast', 'vwInjuryList3.hpercode', 'vwInjuryList3.enccode','injuryRegistry.*', 'injuryRegistry.inPatDate','injuryRegistry.status')
        // ->select('vwInjuryList3.hpercode','vwInjuryList3.pat_last_name','vwInjuryList3.pat_first_name','vwInjuryList3.pat_middle_name','vwInjuryList3.pat_current_address_region','vwInjuryList3.pat_current_address_province','vwInjuryList3.pat_current_address_city','vwInjuryList3.pat_sex','vwInjuryList3.pat_date_of_birth','vwInjuryList3.age_years','vwInjuryList3.age_months','vwInjuryList3.pat_days','vwInjuryList3.plc_regcode','vwInjuryList3.provcode','vwInjuryList3.plc_ctycode','vwInjuryList3.inj_date','vwInjuryList3.inj_time','vwInjuryList3.encounter_date','vwInjuryList3.encounter_time','vwInjuryList3.inj_inent_code')
        // ->where('injuryRegistry.status', '=' ,'completeForm')
        // ->get();
        // return finalInputInjuryRegistry::where('ENCCODE',$this->selected)->get();
    }
    public function headings() :array
    {
        return [
            "Status",
            "rstatuscode",
            "Pat_Facility_No",
            "date_report",
            "time_report",
            "reg_no",
            "tempreg_no",
            "hosp_no",
            "hosp_reg_no",
            "hosp_cas_no",
            "ptype_code",
            "Pat_Last_Name",
            "Pat_First_Name",
            "Pat_Middle_Name",
            "Pat_Sex",
            "Pat_Date_of_Birth",
            "Age_Years",
            "Age_Months",
            "Age_Days",
            "Pat_Current_Address_Region",
            "Pat_Current_Address_Province",
            "Pat_Current_Address_City",
            "temp_regcode",
            "temp_provcode",
            "temp_citycode",
            "Pat_Phil_Health_No",
            "plc_regcode",
            "plc_provcode",
            "plc_ctycode",
            "inj_date",
            "inj_time",
            "Encounter_Date",
            "Encounter_Time",
            "inj_intent_code",
            "vawcyn",
            "first_aid_code",
            "firstaid_others",
            "firstaid_others2",
            "mult_inj",
            "noi_abrasion",
            "noi_abradtl",
            "noi_avulsion",
            "noi_avuldtl",
            "noi_burn_r",
            "degree_burn1",
            "degree_burn2",
            "degree_burn3",
            "degree_burn4",
            "noi_burndtl",
            "noi_concussion",
            "noi_concussiondtl",
            "noi_contusion",
            "noi_contudtl",
            "noi_frac_clo",
            "noi_frcldtl",
            "noi_frac_ope",
            "noi_fropdtl",
            "noi_owound",
            "noi_owoudtl",
            "noi_amp",
            "noi_ampdtl",
            "noi_others",
            "noi_otherinj",
            "ext_bite",
            "ext_bite_sp",
            "ext_burn_r",
            "ref_burn_code",
            "ext_burn_sp",
            "ext_chem",
            "ext_chem_sp",
            "ext_sharp",
            "ext_sharp_sp",
            "ext_drown_r",
            "ref_drowning_cope",
            "ext_drown_sp",
            "ext_expo_nature_r",
            "ref_expnature_code",
            "ext_expo_nature_sp",
            "ext_fall",
            "ext_falldtl",
            "ext_firecracker_r",
            "firecracker_code",
            "ext_firecracker_sp",
            "ext_sexual",
            "ext_gun",
            "ext_gun_sp",
            "ext_hang",
            "ext_maul",
            "ext_transport",
            "vehicle_type_id",
            "ref_veh_acctype_code",
            "vehicle_code",
            "pat_veh_sp",
            "etc_veh",
            "etc_veh_sp",
            "position_code",
            "pos_pat_sp",
            "ext_other",
            "ext_other_sp",
            "place_occ_code",
            "poc_wp_spec",
            "poc_etc_spec",
            "activity_code",
            "act_etc_spec",
            "risk_none",
            "risk_alcliq",
            "risk_sleep",
            "risk_smoke",
            "risk_mobpho",
            "risk_other",
            "risk_etc_spec",
            "safe_none",
            "safe_unkn",
            "safe_airbag",
            "safe_helmet",
            "safe_cseat",
            "safe_sbelt",
            "safe_drown",
            "safe_other",
            "safe_other_sp",
            "trans_ref",
            "trans_ref2",
            "ref_physician",
            "ref_hosp_code",
            "ref_hosp_code_sp",
            "status_code",
            "mode_transport_code",
            "stat_reachdtl",
            "Diagnosis",
            "icd_10_nature_er",
            "icd_10_external_er",
            "disposition_code",
            "disp_er_sp",
            "disp_er_sp_oth",
            "outcome_code",
            "complete_diagnosis",
            "disp_inpat",
            "disp_inpat_oth",
            "disp_inpat_sp",
            "disp_inpat_sp2",
            "outcome_inpat",
            "icd10_nature_inpatient",
            "icd_10_ext_inpatient",
            "comments",
            "Pat_Facility_Reg",
            "Pat_Facility_Prov",
            "Pat_Facility_City",
            "fac_regno",
            "upload",
            "class",
            "pre_date",
            "pno"
        ];
    }
}
 