<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodi', function (Blueprint $table){
            $table->increments('id');
            $table->string('nama');
        });

        Schema::create('users', function (Blueprint $table) {
            $table->integer('id_prodi')->unsigned()->nullable();
            $table->foreign('id_prodi')->references('id')->on('prodi')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->string('id')->primary()->unique();
            $table->integer('angkatan')->nullable();
            $table->string('nama');
            $table->string('email')->unique()->nullable();
            $table->string('password');
            $table->string('no_telepon')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->text('alamat_asal')->nullable();
            $table->text('alamat_tinggal')->nullable();
            $table->text('foto')->nullable();
            $table->text('jadwal_mk')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('postings', function (Blueprint $table){
            $table->string('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('keterangan');
            $table->text('dir')->nullable();
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
        Schema::dropIfExists('users');
    }
}
