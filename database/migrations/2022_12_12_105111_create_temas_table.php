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
        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('id_tema');
            
            $table->string('nama');
            $table->string('pekerjaan');
            $table->string('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('alamat');
            $table->string('foto');
            // data sosmed
            $table->string('no_wa');
            $table->string('nama_ig');
            $table->string('email');

            // data hobi
            $table->string('hobi1');
            $table->string('hobi2')->nullable();
            $table->string('hobi3')->nullable();

            // data keahlian
            $table->string('keahlian1')->nullable();
            $table->string('persentase1')->nullable();
            $table->string('keahlian2')->nullable();
            $table->string('persentase2')->nullable();
            $table->string('keahlian3')->nullable();
            $table->string('persentase3')->nullable();
            $table->string('keahlian4')->nullable();
            $table->string('persentase4')->nullable();
            $table->string('keahlian5')->nullable();
            $table->string('persentase5')->nullable();

            // pendidikan formal
            $table->string('sd')->nullable();
            $table->string('tahun_sd')->nullable();
            $table->string('smp')->nullable();
            $table->string('tahun_smp')->nullable();
            $table->string('sma')->nullable();
            $table->string('tahun_sma')->nullable();
            $table->string('kuliah')->nullable();
            $table->string('tahun_kuliah')->nullable();

            // organisasi
            $table->string('organisasi1')->nullable();
            $table->string('jabatan1')->nullable();
            $table->string('tahun_menjabat1')->nullable();
            $table->string('organisasi2')->nullable();
            $table->string('jabatan2')->nullable();
            $table->string('tahun_menjabat2')->nullable();
            $table->string('organisasi3')->nullable();
            $table->string('jabatan3')->nullable();
            $table->string('tahun_menjabat3')->nullable();

            // moto hidup
            $table->text('moto')->nullable();
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
        Schema::dropIfExists('temas');
    }
};
