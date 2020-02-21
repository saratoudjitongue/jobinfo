<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NomProduit',30);
            $table->double('PrixProduit');
            $table->string('ImageProduit',250);
            $table->text('DetailsProduit',200);
            $table->integer('IdTypeProduit');
            $table->foreign('IdTypeProduit')->references('IdTypeProduit')->on('Type_produits');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
