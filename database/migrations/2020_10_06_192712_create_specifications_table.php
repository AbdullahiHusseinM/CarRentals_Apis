<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specifications', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_id');
            $table->string('number_of_seats');
            $table->string('type_of_seats');
            $table->integer('number_of_doors');
            $table->string('gearbox_type');
            $table->boolean('sunroof')->default(false);
            $table->string('engine_capacity');
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
        Schema::dropIfExists('specifications');
    }
}
