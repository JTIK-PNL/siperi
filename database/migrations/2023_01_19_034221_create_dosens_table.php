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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nidn', 10)->unique()->nullable();
            $table->string('nip', 18)->unique()->nullable();
            $table->string('nama_lengkap');
            $table->boolean('jenis_kelamin')->default(1);
            $table->string('kelompok_keahlian')->nullable();
            $table->text('bidang_keilmuan')->nullable();
            $table->enum('jabatan_fungsional', ['asisten ahli', 'lektor', 'lektor kepala', 'guru besar'])->default('asisten ahli');
            $table->tinyInteger('kouta_pembimbing_1')->default(0);
            $table->tinyInteger('kouta_pembimbing_2')->default(0);
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
        Schema::dropIfExists('dosens');
    }
};
