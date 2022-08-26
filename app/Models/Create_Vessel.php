<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Create_Vessel extends Model
{
    use HasFactory;

    protected $table = 'vessel_names_record';

    protected $guarded = [

        ///  Create vessel
        'vessel_name',
        'voyage_number',
        'creation_time',
        'vessel_created_by',
        'stored_vessel_name',
        'vsl_namecode',
        'vessel_created_by',
        'status_field',
        'namevalidation',
        'vslproperties_status', 'vslcargosummary_status', 'vslschedule_status', 'vslinstantiation_status',
        'vessel_manifest_status', 'vessel_manifest_splitting', 'vessel_comet_invoice_status',
        'vessel_fsl_invoice_status', 'vessel_transfer_request_status', 'vessel_bltelex_update_status',
        'manifest_cargo_type', 'manifest_amendment_status', 'ent_billing_com_date_5star', 'invoice_raised_per_vessel',
        'telex_vessel', 'telex_map_status', 'ent_bill_com_date', 'medlog_offdock_status'


    ];
}
