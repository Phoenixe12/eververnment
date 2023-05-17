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
        Schema::create('information_sups', function (Blueprint $table) {
            $table->id();
            $table->String('titre')->nullable();
            $table->String('infCheckBox')->nullable();
            $table->String('codeInf')->unique()->nullable();
            $table->String('qrCodeInf')->nullable();
            $table->bigInteger('evn_id')->unsigned()->nullable();
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
        Schema::dropIfExists('information_sups');
    }
};