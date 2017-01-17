<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGunplaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gunpla', function (Blueprint $table) {
            $table->increments('gunpla_id');
            $table->string('name');
            $table->integer('scale_fk')->unsigned();
            $table->integer('grade_fk')->unsigned();
            $table->integer('mobile_suit_fk')->unsigned();
            $table->integer('mobile_suit_variation_fk')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gunpla');
    }
}
