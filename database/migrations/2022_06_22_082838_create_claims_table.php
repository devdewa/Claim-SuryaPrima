<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->string('tire_brand');
            $table->string('tire_size');
            $table->string('tire_type');
            $table->string('no_series');
            $table->string('ply_rating');
            $table->string('early_flower');
            $table->string('remaining_flower');
            $table->string('damage');
            $table->string('consumer_name');
            $table->string('bid_industry');
            $table->string('road_condition');
            $table->string('vehicle_type');
            $table->string('load_weight');
            $table->string('purchase_date');
            $table->string('image_no_series');
            $table->string('image_no_dot');
            $table->string('image_damage_near');
            $table->string('image_damage_away');
            $table->string('image_remaining_flower');
            $table->string('image_entire_tire');
            $table->string('image_tire_brand');
            $table->string('image_tire_size');
            $table->string('image_lainnya');
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
        Schema::dropIfExists('claims');
    }
}
