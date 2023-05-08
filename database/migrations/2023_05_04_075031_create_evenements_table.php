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
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->String('nomEvn');
            $table->String('datetime');
            $table->String('lieu');
            $table->String('codeEvn');
            $table->String('qrCodeEvn');
            $table->bigInteger('org_id')->unsigned();
            $table->foreign('org_id')->references('id')->on('organisateurs');
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
        Schema::dropIfExists('evenements');
    }
};