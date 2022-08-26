<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVesselScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vessel_schedule', function (Blueprint $table) {
            $table->id();
            $table->string('arriving_at');
            $table->string('berth');
            $table->string('stevedoore');
            $table->string('agent');
            $table->string('liner');
            $table->string('arrival_eta');
            $table->string('departure_ets');
            $table->string('namevalidation_key');
            $table->string('public_arrival_date');
            $table->string('public_departure_date');
            $table->string('shipping_line_logo');
            $table->string('rotation number');

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
        Schema::dropIfExists('vessel_schedule');
    }
}
