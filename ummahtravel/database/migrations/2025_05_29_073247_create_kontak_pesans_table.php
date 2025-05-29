<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('kontak_pesans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_perusahaan', 100);
        $table->string('nama_depan', 50);
        $table->string('nama_belakang', 50);
        $table->string('jabatan', 50);
        $table->string('email', 100);
        $table->string('nomor_telepon', 20);
        $table->text('pesan');
        $table->timestamp('tanggal_kirim')->useCurrent();
        $table->timestamps();

        $table->index('email');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontak_pesans');
    }
};
