<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPasien');
            $table->foreign('idPasien')->references('id')->on('pasiens')->onDelete('cascade');

            $table->unsignedBigInteger('idDokter');
            $table->foreign('idDokter')->references('id')->on('dokters')->onDelete('cascade');

            $table->unsignedBigInteger('idKategoris');
            $table->foreign('idKategoris')->references('id')->on('kategoris')->onDelete('cascade');

            $table->date('TanggalPeriksa');
            $table->text('Diagnosa');
            $table->text('HasilPeriksaResep');
            $table->decimal('harga', 10, 2);
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
        Schema::dropIfExists('pemeriksaans');
    }
}
