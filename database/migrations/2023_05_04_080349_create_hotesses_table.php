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
        Schema::create('hotesses', function (Blueprint $table) {
            $table->id();
            $table->String('nomHote');
            $table->String('emailHote');
            $table->String('telephoneHote');
            $table->bigInteger('evn_id')->unsigned();
            $table->foreign('evn_id')->references('id')->on('evenements');

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
        Schema::dropIfExists('hotesses');
    }
};