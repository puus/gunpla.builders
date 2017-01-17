<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGunplaPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gunpla_prices', function (Blueprint $table) {
            $table->increments('gunpla_prices_id');
            $table->integer('gunpla_fk')->unsigned();
            $table->integer('price_fk')->unsigned();
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
        Schema::drop('gunpla_prices');
    }
}
