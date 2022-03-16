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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('siege');
            $table->integer('telephone')->unique();
            $table->date('dateCreation');
            $table->string('registre',20)->unique();
            $table->string('adresseWeb')->unique();
            $table->boolean('cotisationSocial')->default(false);
            $table->boolean('organigramme')->default(false);
            $table->boolean('contratFormel')->default(false);
            $table->timestamps();

            $table->unsignedBigInteger('quartier_id');
            $table->foreign('quartier_id')->references('id')->on('quartiers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
};
