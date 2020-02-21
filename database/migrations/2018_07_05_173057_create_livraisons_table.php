<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livraisons', function (Blueprint $table) {
            $table->increments('IdLivraison');
            $table->date('DateLivraison');
            $table->double('PrixTotalLivraison');
            $table->boolean('EtatLivraison')->default(false);
            $table->string('LieuLivraison',15);
            $table->integer('IdClt');
            $table->integer('IdCommande');
            $table->foreign('IdClt')->references('IdClt')->on('Clients');
            $table->foreign('IdCommande')->references('IdCommande')->on('Commande');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livraisons');
    }
}
