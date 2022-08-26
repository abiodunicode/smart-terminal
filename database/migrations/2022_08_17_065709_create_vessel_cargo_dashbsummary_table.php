<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVesselCargoDashbsummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vessel_cargo_dashbsummary', function (Blueprint $table) {
            $table->id();
            $table->string('select_vessel_voyage');
            $table->string('cargo_types');
            $table->string('containers_teus');
            $table->string('vehicle_units');
            $table->string('gen_cargo_tons');
            $table->string('cargo_onboard');
            $table->string('hidden_remarksholder');
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
        Schema::dropIfExists('vessel_cargo_dashbsummary');
    }
}
