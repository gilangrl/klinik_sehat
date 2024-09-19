<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPemeriksaan');
            $table->foreign('idPemeriksaan')->references('id')->on('pemeriksaans')->onDelete('cascade');
            
            $table->unsignedBigInteger('idObat');
            $table->foreign('idObat')->references('id')->on('obats')->onDelete('cascade');

            $table->integer('jumlah');
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
        Schema::dropIfExists('reseps');
    }
}
