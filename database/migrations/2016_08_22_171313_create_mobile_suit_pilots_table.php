<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileSuitPilotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_suit_pilots', function (Blueprint $table) {
            $table->increments('mobile_suit_pilots_id');
            $table->integer('mobile_suit_fk')->unsigned();
            $table->integer('pilot_fk')->unsigned();
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
        Schema::drop('mobile_suit_pilots');
    }
}
