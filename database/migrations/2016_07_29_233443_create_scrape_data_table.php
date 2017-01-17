<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScrapeDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scrape_data', function (Blueprint $table) {
            $table->increments('scrape_data_id');
            $table->string('title');
            $table->text('data');
            $table->integer('source_fk')->unsigned();
            $table->boolean('parsed');
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
        Schema::drop('scrape_data');
    }
}
