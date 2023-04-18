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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('ville');
            $table->enum('sexe', ['Male', 'Female']);
            $table->string('email');
            // $table->string('adresse');
            $table->integer('téléphone')->unique();
            $table->text('adresse');
            $table->date('date_naissance');
            $table->string('antecedents_medicaux');
            $table->string('allergies');
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
        Schema::dropIfExists('patients');
    }
};
