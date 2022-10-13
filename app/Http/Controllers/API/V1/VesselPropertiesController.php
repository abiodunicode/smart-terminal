<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Requests\AddVessel\AddVesselRequest;
use Illuminate\Support\Facades\DB;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

// use Illuminate\Support\Facades\Mail;

use App\Models\VesselProperties;

class VesselPropertiesController extends BaseController
{


    protected $addvessel = '';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(VesselProperties $vessel_properties)
    {
        $this->middleware('auth:api');
        $this->vessel_properties = $vessel_properties;
    }

    public function store(Request $request)

    {

        $this->validate($request, [
            'ais_type' => 'required',
            'voyage_number' => 'required',
            'imo_number' =>         'required',
            'call_sign' =>          'required',
            'incoming_voyage' =>    'required',
            'outgoing_voyage' =>    'required',
            'ships_loa' =>          'required',
            'ships_draft' =>        'required',
            'vessel_service' =>     'required',
            'vessel_nationality' => 'required',
            'last_port_of_call' =>  'required',
            'vessel_name_voyage' => 'required',
        ]);
        $vesselname =  $request['vessel_name'];
        $voyagenumber =  $request['voyage_number'];
        $vessel_name_code = preg_replace('/\s+/', '', $vesselname);
        $name_validation = $vessel_name_code . $voyagenumber;
        $creation_time = date("Y-m-d H:i:s");
        $createdby =  Auth::user()->email;
        $status_field = 'OK';


        $vessel_properties = $this->vessel_properties->create([

            'ais_type' => $vesselname,
            'ship_type' => $voyagenumber,
            'imo_number' => $creation_time,
            'call_sign' => $createdby,
            'incoming_voyage' => $vesselname,
            'outgoing_voyage' => $vessel_name_code,
            'ships_loa' => $status_field,
            'ships_draft' => $name_validation,
            'vessel_service' => $name_validation,
            'vessel_nationality' => $name_validation,
            'last_port_of_call' => $name_validation,
            'vessel_name_voyage' => $name_validation,


        ]);

        return $this->sendResponse($vessel_properties, ' Created Successfully');
    }


    public function existingvesselname()
    {
        // $vesselsnames = DB::table('addvessels')->pluck('vessel_name');
        // $vesselsnames = AddVessel::latest()->paginate(10);
        // return Schema::getColumnListing($table);

        // $vesselsnames = DB::table('addvessels')
        //     ->select('id', 'vessel_name')
        //     ->get();

        // // foreach ($vesselsnames as $vesselsnames) {
        // //     //  dd($vesselsnames);
        // // }
        // return $this->sendResponse($vesselsnames, ' Vessel Names List');
    }
}
