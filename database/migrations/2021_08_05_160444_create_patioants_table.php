<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatioantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patioants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_url');
            $table->integer('user_id')->unsigned();
            $table->integer('test_id')->unsigned();
            $table->string('name');
            $table->string('last_name');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->foreign('test_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patioants');
    }
}
