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
        Schema::create('charge_p_s', function (Blueprint $table) {
            $table->id();
            $table->date('date_charge');
            $table->integer('montant');
            $table->string('description');
            
        $table->unsignedBigInteger('id_cabinet');
        $table->foreign('id_cabinet')->references('id')->on('cabinets') ->onDelete('cascade');
            $table->unsignedBigInteger('id_paiement');
            $table->foreign('id_paiement')->references('id')->on('paiements') ->onDelete('cascade');
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
        Schema::dropIfExists('charge_p_s');
    }
};
