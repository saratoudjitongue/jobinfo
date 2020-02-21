<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsernersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('conserners', function (Blueprint $table) {
            $table->integer('IdCommande');
            $table->integer('IdProduit');
            $table->foreign('IdCommande')->references('id')->on('Commandes');
            $table->foreign('IdProduit')->references('id')->on('Produits');
            $table->integer('Quantite');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conserners');
    }
}
