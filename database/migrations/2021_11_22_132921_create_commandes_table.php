<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('nomclient');
            $table->string('prenomclient');
            $table->string('emailclient');
            $table->integer('telephoneclient');
            $table->string('villeclient');
            $table->string('adresseclient');
            $table->foreignId('produit_id')
                   ->constrained()
                   ->onUpdate('cascade')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('commandes');
    }
}
