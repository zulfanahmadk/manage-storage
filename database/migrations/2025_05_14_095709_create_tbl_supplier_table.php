<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('tbl_supplier', function (Blueprint $table) {
            $table->id('supplier_id'); // Primary key dengan auto-increment
            $table->string('nama_supplier'); // Kolom nama dengan tipe VARCHAR
            $table->text('kontak_supplier'); // Kolom kontak dengan tipe TEXT
            $table->text('alamat'); // Kolom alamat dengan tipe TEXT
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_supplier');
    }
}
