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
        Schema::create('lutteurs', function (Blueprint $table) {
            $table->id();
            $table->integer('nom');
            $table->integer('prenom');
            $table->integer('adress');
            $table->integer('dateNaiss');
            $table->integer('lieudeNaiss');
            $table->integer('age');
            $table->integer('categorie');

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
        Schema::dropIfExists('lutteurs');
    }
};
