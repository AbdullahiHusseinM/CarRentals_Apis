<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_id');
            $table->integer('identification_number');
            $table->string('id_photo');
            $table->string('passport_photo');
            $table->string('plate_number');
            $table->string('insurance_number');
            $table->string('insurance_certificate');
            $table->string('ntsa_report')->nullable();
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
        Schema::dropIfExists('details');
    }
}
