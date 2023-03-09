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
        Schema::create('_combts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('etat');
            $table->string('nomCombat');
            $table->integer('nomLutteur1');
            $table->integer('nomLutteur2');
            $table->integer('nomPromoteu');
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
        Schema::dropIfExists('_combts');
    }
};
