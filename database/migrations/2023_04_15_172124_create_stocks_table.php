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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
        $table->string('nom');
        $table->string('qunatity');
        $table->string('description');
        $table->unsignedBigInteger('id_cabinet');
        $table->foreign('id_cabinet')->references('id')->on('cabinets');
        
        $table->unsignedBigInteger('id_produit');
        $table->foreign('id_produit')->references('id')->on('produits') ->onDelete('cascade');     
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
        Schema::dropIfExists('stocks');
    }
};
