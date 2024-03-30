<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate', function (Blueprint $table) {
            $table->id();
            $table->string('zone');
            $table->string('district');
            $table->tinyInteger('provience');
            $table->string('postal_code');
            $table->string('city');
            $table->integer('ward_no');
            $table->string('tole');
            $table->string('street_no');
            $table->bigInteger('max_rate');
            $table->bigInteger('min_rate');
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
        Schema::dropIfExists('rate');
    }
}
