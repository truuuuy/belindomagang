<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;
use function PHPUnit\Framework\once;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_keranjangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('keranjang_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('keranjang_id')->references('id')->on('keranjangs')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_keranjangs', function (Blueprint $table)
        {
            $table->dropForeign(['keranjang_id']);
            $table->dropForeign(['product_id']);
        });
        Schema::dropIfExists('detail_keranjangs');
    }
};
