<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileSuitAkaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_suit_aka', function (Blueprint $table) {
            $table->increments('mobile_suit_aka_id');
            $table->integer('mobile_suit_id')->unsigned();
            $table->string('aka');
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
        Schema::drop('mobile_suit_aka');
    }
}
