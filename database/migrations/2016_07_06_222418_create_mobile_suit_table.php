<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileSuitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_suit', function (Blueprint $table) {
            $table->increments('mobile_suit_id');
            $table->string('name');
            $table->string('model');
            $table->integer('mobile_suit_fk')->unsigned();
            $table->integer('manufacturer_fk')->unsigned();
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
        Schema::drop('mobile_suit');
    }
}
