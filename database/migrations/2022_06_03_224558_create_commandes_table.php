<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->string('ordonance');
            $table->string('adresse');
            $table->unsignedBigInteger('pharmacie_id');
            $table->unsignedBigInteger('epharmauth_id');
            $table->boolean('is_valid')->default(0);
            $table->timestamps();
            $table->foreign('pharmacie_id')->references('id')->on('pharmacies')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('epharmauth_id')->references('id')->on('epharmauths')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
