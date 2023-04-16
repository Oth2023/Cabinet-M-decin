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
        Schema::create('ordonnances', function (Blueprint $table) {
            $table->id();
            $table->date('date_ordonnance');
            $table->unsignedBigInteger('id_medecin');
            $table->foreign('id_medecin')->references('id')->on('medecins') ->onDelete('cascade');
            $table->unsignedBigInteger('id_patient');
            $table->foreign('id_patient')->references('id')->on('patients') ->onDelete('cascade');
            $table->string('description');
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
        Schema::dropIfExists('ordonnances');
    }
};
