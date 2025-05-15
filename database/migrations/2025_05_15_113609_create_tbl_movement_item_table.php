<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tbl_movement_item', function (Blueprint $table) {
            $table->bigIncrements('movement_id'); // PK auto-increment
            $table->unsignedBigInteger('item_id');
            $table->enum('movement_type', ['in', 'out']); // 'in' for incoming, 'out' for outgoing
            $table->unsignedBigInteger('id'); // User ID
            $table->integer('quantity');
            $table->dateTime('movement_date');
            $table->text('notes')->nullable();
            $table->timestamps();

            // Foreign Keys
            $table->foreign('item_id')->references('item_id')->on('tbl_item')->onDelete('cascade');
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbl_movement_item');
    }
};
