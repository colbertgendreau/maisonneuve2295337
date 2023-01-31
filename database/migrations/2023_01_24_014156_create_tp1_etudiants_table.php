<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTp1EtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tp1_etudiants', function (Blueprint $table) {
            $table->id();
            
            $table->string('nom', 50);
            $table->string('adresse', 100);
            $table->string('phone', 20);
            $table->string('email', 100)->unique();
            $table->date('date_de_naissance');
            
            $table->foreignId('ville_id')->constrained('tp1_villes');

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
        Schema::dropIfExists('tp1_etudiants');
    }
}
