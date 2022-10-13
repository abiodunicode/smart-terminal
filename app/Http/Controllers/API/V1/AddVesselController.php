<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Requests\AddVessel\AddVesselRequest;
use Illuminate\Support\Facades\DB;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

// use Illuminate\Support\Facades\Mail;

use App\Models\AddVessel;

class AddVesselController extends BaseController
{


    protected $addvessel = '';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(AddVessel $addvessel)
    {
        $this->middleware('auth:api');
        $this->addvessel = $addvessel;
    }

    public function store(Request $request)

    {

        $this->validate($request, [
            'vessel_name' => 'required',
            'voyage_number' => 'required',
        ]);
        $vesselname =  $request['vessel_name'];
        $voyagenumber =  $request['voyage_number'];
        $vessel_name_code = preg_replace('/\s+/', '', $vesselname);
        $name_validation = $vessel_name_code . $voyagenumber;
        $creation_time = date("Y-m-d H:i:s");
        $createdby =  Auth::user()->email;
        $status_field = 'OK';


        $addvessel = $this->addvessel->create([

            'vessel_name' => $vesselname,
            'voyage_number' => $voyagenumber,
            'creation_time' => $creation_time,
            'vessel_created_by' => $createdby,
            'stored_vessel_name' => $vesselname,
            'vsl_namecode' => $vessel_name_code,
            'status_field' => $status_field,
            'name_validation' => $name_validation,
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
        ]);

        return $this->sendResponse($addvessel, ' Created Successfully');
    }


    public function existingvesselname()
    {
        // $vesselsnames = DB::table('addvessels')->pluck('vessel_name');
        // $vesselsnames = AddVessel::latest()->paginate(10);
        // return Schema::getColumnListing($table);

        $vesselsnames = DB::table('addvessels')
            ->select('vessel_name')
            ->get();

        // foreach ($vesselsnames as $vesselsnames) {
        //     //  dd($vesselsnames);
        // }
        return $this->sendResponse($vesselsnames, ' Vessel Names List');
    }

    public function countries()
    {
        // $vesselsnames = DB::table('addvessels')->pluck('vessel_name');
        // $vesselsnames = AddVessel::latest()->paginate(10);
        // return Schema::getColumnListing($table);

        $vesselsnames = DB::table('countries')
            ->select('name')
            ->get();

        // foreach ($vesselsnames as $vesselsnames) {
        //     //  dd($vesselsnames);
        // }
        return $this->sendResponse($vesselsnames, ' Vessel Names List');
    }

    public function portcode()
    {
        // Flight::chunk(200, function ($flights) {
        //     foreach ($flights as $flight) {
        //         //
        //     }
        // });



        $vesselsnames = DB::table('portcode')
            ->select('id')
            ->get();

        // foreach ($vesselsnames as $vesselsnames) {
        //     //  dd($vesselsnames);
        // }
        return $this->sendResponse($vesselsnames, ' Vessel Names List');
    }
}
