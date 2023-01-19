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
        Schema::create('pengajuan_juduls', function (Blueprint $table) {
            $table->id();
            $table->string('judul_1');
            $table->text('referensi_1');
            $table->string('judul_2')->nullable();
            $table->text('referensi_2')->nullable();
            $table->string('judul_3')->nullable();
            $table->text('referensi_3')->nullable();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('dosen_id')->constrained('dosens')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status', ['diajukan', 'diterima', 'ditolak'])->default('diajukan');
            $table->string('catatan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_juduls');
    }
};
