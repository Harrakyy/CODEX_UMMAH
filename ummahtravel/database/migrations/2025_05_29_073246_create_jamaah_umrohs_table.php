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
    Schema::create('jamaah_umrohs', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null');
        $table->string('email');
        $table->string('nama');
        $table->string('nomor_telepon', 20);
        $table->date('tanggal_keberangkatan');
        $table->timestamps();

        $table->index('email');
        $table->index('tanggal_keberangkatan');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jamaah_umrohs');
    }
};
