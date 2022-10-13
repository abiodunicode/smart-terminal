<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VesselProperties extends Model
{
    //use HasFactory;

    protected $table = 'vessel_properties';

    protected $fillable = [


        'ais_type',
        'ship_type',
        'imo_number',
        'call_sign',
        'incoming_voyage',
        'outgoing_voyage',
        'ships_loa',
        'ships_draft',
        'vessel_service',
        'vessel_nationality', 'vessel_destination', 'last_port_of_call', 'vessel_name_voyage',

    ];
}
