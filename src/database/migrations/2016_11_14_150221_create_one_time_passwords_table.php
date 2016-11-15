<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOneTimePasswordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('one_time_passwords', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('token')->unsigned();
            $table->string('module');
            $table->string('entity_id');
            $table->timestamp('expires_on');

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
        Schema::drop('one_time_passwords');
    }
}