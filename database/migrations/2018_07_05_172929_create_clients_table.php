<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('IdClt');
            $table->string('NomClt',25);
            $table->string('PrenomomCl',35);
            $table->enum('SexeClt', ['M', 'F']);
            $table->date('DateNaissClt');
            $table->string('TelClt',10);
            $table->string('EmailClt',50);
            $table->string('PaysClt',15);
            $table->string('VilleClt',15);
            $table->string('AdresseClt',100);
            $table->integer('id');
            $table->foreign('id')->references('id')->on('users');
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
