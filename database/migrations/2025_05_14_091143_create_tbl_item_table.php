<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblItemTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_item', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id')->primary();
            $table->string('nama_item', 255);
            $table->text('deskripsi');
            $table->integer('stock')->length(25);
            $table->string('unit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_item');
    }
}
