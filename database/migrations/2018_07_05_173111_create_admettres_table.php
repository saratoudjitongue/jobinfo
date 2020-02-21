<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmettresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admettres', function (Blueprint $table) {
            $table->integer('IdPanier');
            $table->integer('IdProduit');
            $table->foreign('IdPanier')->references('id')->on('Paniers');
            $table->foreign('IdProduit')->references('id')->on('Produits');
            $table->integer('Quantite');
            $table->integer('PrixTotalPanier');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admettres');
    }
}
