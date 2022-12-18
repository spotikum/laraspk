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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_induk');
            $table->string('nama');
            $table->bigInteger('fisika');
            $table->bigInteger('kimia');
            $table->bigInteger('matematika');
            $table->bigInteger('biologi');
            $table->bigInteger('geografi');
            $table->bigInteger('sosiologi');
            $table->bigInteger('antropologi');
            $table->bigInteger('ekonomi');
            $table->string('jurusan');
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
        Schema::dropIfExists('siswas');
    }
};
