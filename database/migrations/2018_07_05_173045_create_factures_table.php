<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->increments('IdFacture');
            $table->date('DateFacture');
            $table->double('PrixTotalFacture');
            $table->boolean('EtatFacture')->default(false);
            $table->integer('IdClt');
            $table->integer('IdCommande');
            $table->foreign('IdClt')->references('IdClt')->on('Clients');
            $table->foreign('IdCommande')->references('id')->on('Commandes');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
}
