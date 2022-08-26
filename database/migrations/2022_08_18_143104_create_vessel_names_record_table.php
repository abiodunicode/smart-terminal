<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVesselNamesRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vessel_names_record', function (Blueprint $table) {
            $table->id();
            $table->string('vessel_name');
            $table->string('voyage_number');
            $table->string('creation_time');
            $table->string('vessel_created_by');
            $table->string('stored_vessel_name');
            $table->string('vsl_namecode');
            $table->string('name_validation');
            $table->string('status_field');
            $table->string('namevalidation');
            // $table->string('vslproperties_status')->nullable();
            // $table->string('vslcargosummary_status')->nullable();
            // $table->string('vslschedule_status')->nullable();
            // $table->string('vslinstantiation_status')->nullable();
            // $table->string('vessel_manifest_status')->nullable();
            // $table->string('vessel_manifest_splitting')->nullable();
            // $table->string('vessel_comet_invoice_status')->nullable();
            // $table->string('vessel_fsl_invoice_status')->nullable();
            // $table->string('vessel_transfer_request_status')->nullable();
            // $table->string('vessel_bltelex_update_status')->nullable();
            // $table->string('manifest_cargo_type')->nullable();
            // $table->string('manifest_amendment_status')->nullable();
            // $table->string('ent_billing_com_date_5star')->nullable();
            // $table->string('invoice_raised_per_vessel')->nullable();
            // $table->string('telex_vessel')->nullable();
            // $table->string('telex_voy')->nullable();
            // $table->string('telex_map_status')->nullable();
            // $table->string('ent_bill_com_date')->nullable();
            // $table->string('medlog_offdock_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vessel_names_record');
    }
}
