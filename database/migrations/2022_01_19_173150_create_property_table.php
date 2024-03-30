<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_id');
            $table->bigInteger('cate_id');
            $table->mediumText('discription');
            $table->string('zone');
            $table->string('district');
            $table->string('provience');
            $table->string('postal_code');
            $table->string('city');
            $table->integer('ward_no');
            $table->string('tole');
            $table->string('street_no');
            $table->string('road_type');
            $table->integer('road_length');
            $table->string('direction_faced');
            $table->float('structure_area');
            $table->integer('room_no');
            $table->float('stories_no');
            $table->integer('structure_age');
            $table->float('area');
            $table->tinyInteger('hypertension')-> default('0');
            $table->tinyInteger('river_side')-> default('0');
            $table->tinyInteger('water_supply')-> default('0');
            $table->tinyInteger('drainage')-> default('0');
            $table->tinyInteger('electricity')-> default('0');
            $table->tinyInteger('p_transport')-> default('0');
            $table->string('image');
            $table->string('selling_rate');
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
        Schema::dropIfExists('property');
    }
}
