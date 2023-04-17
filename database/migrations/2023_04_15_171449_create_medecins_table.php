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
        Schema::create('medecins', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->boolean('sexe');
            // $table->string('adresse');
            $table->string('email')->unique();
            $table->string('téléphone')->unique();
            $table->text('adresse');
            $table->date('date_naissance');
            $table->string('specialite');
            // $table->integer('pays');
            
        $table->unsignedBigInteger('id_cabinet');
        $table->foreign('id_cabinet')->references('id')->on('cabinets') ->onDelete('cascade');
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
        Schema::dropIfExists('medecins');
    }
};
