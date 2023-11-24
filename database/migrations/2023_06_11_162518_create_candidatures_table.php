<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->string('nomCand')->nullable();
            $table->string('prenomsCand')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('status')->nullable();
            $table->string('curriculum')->nullable();
            $table->bigInteger('nomActivite_id')->unsigned()->nullable();
            $table->foreign('nomActivite_id')->references('id')->on('activites');
            $table->bigInteger('nomEtude_id')->unsigned()->nullable();
            $table->foreign('nomEtude_id')->references('id')->on('etudes');
            $table->bigInteger('nomPays_id')->unsigned()->nullable();
            $table->foreign('nomPays_id')->references('id')->on('pays');
            $table->bigInteger('nomDiplome_id')->unsigned()->nullable();
            $table->foreign('nomDiplome_id')->references('id')->on('diplomes');
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
        Schema::dropIfExists('candidatures');
    }
};
