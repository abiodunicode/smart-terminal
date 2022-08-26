<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateVessel\CreateVesselRequest;

use Illuminate\Http\Request;
use App\Models\Create_Vessel;
use Illuminate\Support\Facades\Auth;

class CreateVesselController  extends BaseController
{
    //

    protected $create_vessel = '';


    public function __construct(Create_Vessel $create_vessel)
    {
        $this->middleware('auth:api');
        $this->create_vessel = $create_vessel;
    }

    public function store(Request $request)

    {
        // $vesselname =  $request['vessel_name'];
        // $voyagenumber =  $request['voyage_number'];
        // $vessel_name_code = preg_replace('/\s+/', '', $vesselname);
        // $name_validation = $vessel_name_code . $voyagenumber;
        // $creation_time = date('d-m-y h:i:s');
        // $createdby =  Auth::user()->email;
        // $status_field = 'OK';

        // stored_vessel_name

        //   $create_vessel = $this->create_vessel->create([
        // 'vessel_name' => $request['vessel_name'],
        // 'voyage_number' => $request['voyage_number'],
        // 'creation_time' => $creation_time,
        // 'vessel_created_by' => $createdby,
        // 'stored_vessel_name' => $request['vessel_name'],
        // 'vsl_namecode' => $vessel_name_code,
        // 'vessel_created_by' => $createdby,
        // 'status_field' => $status_field,
        // 'namevalidation' => $request['vessel_name'],

        // 'vessel_name' => $request['vessel_name'],
        // 'voyage_number' => $request['voyage_number'],
        // 'creation_time' => 'MSC',
        // 'vessel_created_by' => 'MSC',
        // 'stored_vessel_name' => 'MSC',
        // 'vsl_namecode' => 'MSC',
        // 'vessel_created_by' => 'MSC',
        // 'status_field' => 'MSC',
        // 'namevalidation' => 'MSC',
        //Nullable
        // 'vslproperties_status' => $request['vslproperties_status'],
        // 'vslcargosummary_status' => $request['vslcargosummary_status'],
        // 'vslschedule_status' => $request['vslschedule_status'],
        // 'vslinstantiation_status' => $request['vslinstantiation_status'],
        // 'vessel_manifest_status' => $request['vessel_manifest_status'],
        // 'vessel_manifest_splitting' => $request['vessel_manifest_splitting'],
        // 'vessel_comet_invoice_status' => $request['vessel_comet_invoice_status'],
        // 'vessel_fsl_invoice_status' => $request['vessel_fsl_invoice_status'],
        // 'vessel_transfer_request_status' => $request['vessel_transfer_request_status'],
        // 'vessel_bltelex_update_status' => $request['vessel_bltelex_update_status'],
        // 'manifest_cargo_type' => $request['manifest_cargo_type'],
        // 'manifest_amendment_status' => $request['manifest_amendment_status'],
        // 'ent_billing_com_date_5star' => $request['ent_billing_com_date_5star'],
        // 'invoice_raised_per_vessel' => $request['invoice_raised_per_vessel'],
        // 'telex_vessel' => $request['telex_vessel'],
        // 'telex_voy' => $request['telex_voy'],
        // 'telex_map_status' => $request['telex_map_status'],
        // 'ent_bill_com_date' => $request['ent_bill_com_date'],
        // 'medlog_offdock_status' => $request['medlog_offdock_status'],

        // ]);


        $a = $request['vessel_name'];
        $b = $request['voyage_number'];
        dd($a . $b);
        //  dd($b);


        // $name =  $request->ri_name;
        // $si_email =  $request->si_email;
        // $region =  $request->si_region;
        // $ri_address =  $request->ri_address;
        // $gi_carrier_ref_no =  $request->gi_carrier_ref_no;
        // $mailto =  $request->ri_email;
        // // $gi_carrier_ref_no = '538429117';
        // //$mailto = 'Lamiebobo@hotmail.com';
        // //  $mailto = 'info@bhlworld.space';

        // Mail::to($mailto)->send(new Welcome($name, $gi_carrier_ref_no, $ri_address, $si_email, $region));


        //  return $this->sendResponse($create_vessel, ' Created Successfully');

        // $request->all();
    }
}
