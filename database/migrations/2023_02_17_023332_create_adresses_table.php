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
        Schema::create('adresses', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('email')->unique()->nullable();
            $table->string('adresse')->nullable();
            $table->string('phone')->nullable();
            $table->string('lien_facebook')->nullable();
            $table->string('lien_youtube')->nullable();
            $table->string('lien_linkedin')->nullable();
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
        Schema::dropIfExists('adresses');
    }
};
