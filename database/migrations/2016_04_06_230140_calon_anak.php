<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CalonAnak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calon_anak', function(Blueprint $table)
        {
            $table->increments('id_anak');
            $table->string('id_donatur',60);
            $table->string('nama_anak',60);
            $table->string('gender_anak',60);
            $table->string('tmpt_lahir',60);
            $table->date('tgl_lahir');    
            $table->string('alamat_anak';
            $table->integer('id_kecamatan',60);
            $table->string('nama_sekolah');
            $table->string('alamat_sekolah');
            $table->string('kelas');
            $table->integer('id_tingkatan',60);
            $table->integer('rapot1',30);
            $table->integer('rapot2',20);
            $table->integer('jml_saudara',60);
            $table->integer('urutan_anak',10);
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('sholat');
            $table->string('ngaji');
            $table->string('kemampuan');
            $table->string('kondisi_rmh');
            $table->string('status_rmh');
            $table->string('status_keluarga');
            $table->date('tgl_daftar');
            //foto anak
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
        Schema::drop('calon_anak');
    }
}
