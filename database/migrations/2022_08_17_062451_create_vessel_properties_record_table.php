<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVesselPropertiesRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vessel_properties_record', function (Blueprint $table) {
            $table->id();
            $table->string('select vessel & voy');
            $table->string('ais_type');
            $table->string('ship_type');
            $table->string('imo number');
            $table->string('call_sign');
            $table->string('incoming_voyage');
            $table->string('outgoing_voyage');
            $table->string('ships_loa');
            $table->string('ships_draft');
            $table->string('vessel service');
            $table->string('vessel_nationality');
            $table->string('vessel_destination');
            $table->string('last_port_of_call');
            $table->string('namevalidation_key');


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
        Schema::dropIfExists('vessel_properties_record');
    }
}
