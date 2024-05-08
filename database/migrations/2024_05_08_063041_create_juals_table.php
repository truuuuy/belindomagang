<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('juals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->date('tanggal');
            $table->double('total');
            $table->double('jml_uang');
            $table->double('kembalian');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juals');
    }
};
