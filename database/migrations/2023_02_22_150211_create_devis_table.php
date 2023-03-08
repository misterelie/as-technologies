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
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50)->nullable();
            $table->string('adresse_email', 191)->nullable();
            $table->string('telephone', 50)->nullable();
            $table->string('ville', 191)->nullable();
            $table->string('pays', 191)->nullable();
            $table->foreignId('service_id')->nullable();
            $table->string('specifite_service')->nullable();
            $table->date('delai_livraison')->nullable();
            $table->longText('description_detaillee')->nullable();
            $table->string('fichier_devis')->nullable();
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
        Schema::dropIfExists('devis');
    }
};
