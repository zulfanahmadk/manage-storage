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
            $table->bigIncrements('item_id'); // PK auto-increment
            $table->string('nama_item', 255);
            $table->text('deskripsi')->nullable(); // Optional
            $table->integer('stock')->default(0);
            $table->string('unit', 50);
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
