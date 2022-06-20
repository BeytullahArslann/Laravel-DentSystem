<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Orders', function (Blueprint $table) {
            //id
            $table->unsignedInteger('id')->autoIncrement();
            //FK's
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            //Fields
            $table->unsignedSmallInteger('tooth_no');
            $table->integer("quantity",);
            $table->string("type");
            $table->string("color");
            $table->double("unit_price");
            $table->string("offer");
            $table->string("zirkon");
            $table->string("e-max");
            $table->double("loc_sum");
            $table->string("currency");
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
        //
    }
}
