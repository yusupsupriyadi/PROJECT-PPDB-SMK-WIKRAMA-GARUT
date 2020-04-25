<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('no_pendaftaran');
            $table->integer('no_test');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('jenis_kelamin');
            $table->string('ttl');
            $table->string('agama');
            $table->string('cita_cita');
            $table->string('hobby');
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->string('golongan_darah');
            $table->string('foto');
            $table->string('alamat_rumah');
            $table->string('rt');
            $table->string('rw');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('kode_post');
            $table->string('no_hp');
            $table->string('email');
            $table->string('tinggal_dengan');
            $table->string('penyakit');
            $table->string('kapan');
            $table->string('kelainan');
            $table->string('nama_ayah');
            $table->string('ttl_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('pendidikan_ayah');
            $table->string('kewarganegaraan_ayah');
            $table->string('agama_ayah');
            $table->string('no_hp_ayah');
            $table->string('nama_ibu');
            $table->string('ttl_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('pendidikan_ibu');
            $table->string('kewarganegaraan_ibu');
            $table->string('agama_ibu');
            $table->string('no_hp_ibu');
            $table->string('nama_wali');
            $table->string('ttl_wali');
            $table->string('pekerjaan_wali');
            $table->string('pendidikan_wali');
            $table->string('hubungan_wali');
            $table->string('kewarganegaraan_wali');
            $table->string('no_hp_wali');
            $table->string('email_wali');
            $table->integer('kelas7_s1_pai');
            $table->integer('kelas7_s2_pai');
            $table->integer('kelas8_s1_pai');
            $table->integer('kelas8_s2_pai');
            $table->integer('kelas9_s1_pai');
            $table->integer('kelas9_s2_pai');
            $table->integer('kelas7_s1_indonesia');
            $table->integer('kelas7_s2_indonesia');
            $table->integer('kelas8_s1_indonesia');
            $table->integer('kelas8_s2_indonesia');
            $table->integer('kelas9_s1_indonesia');
            $table->integer('kelas9_s2_indonesia');
            $table->integer('kelas7_s1_inggris');
            $table->integer('kelas7_s2_inggris');
            $table->integer('kelas8_s1_inggris');
            $table->integer('kelas8_s2_inggris');
            $table->integer('kelas9_s1_inggris');
            $table->integer('kelas9_s2_inggris');
            $table->integer('kelas7_s1_mtk');
            $table->integer('kelas7_s2_mtk');
            $table->integer('kelas8_s1_mtk');
            $table->integer('kelas8_s2_mtk');
            $table->integer('kelas9_s1_mtk');
            $table->integer('kelas9_s2_mtk');
            $table->integer('kelas7_s1_ipa');
            $table->integer('kelas7_s2_ipa');
            $table->integer('kelas8_s1_ipa');
            $table->integer('kelas8_s2_ipa');
            $table->integer('kelas9_s1_ipa');
            $table->integer('kelas9_s2_ipa');
            $table->integer('kelas7_s1_ips');
            $table->integer('kelas7_s2_ips');
            $table->integer('kelas8_s1_ips');
            $table->integer('kelas8_s2_ips');
            $table->integer('kelas9_s1_ips');
            $table->integer('kelas9_s2_ips');
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
        Schema::dropIfExists('tb_siswa');
    }
}
