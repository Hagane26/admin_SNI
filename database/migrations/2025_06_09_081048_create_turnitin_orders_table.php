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
        Schema::create('turnitin_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('filter1');
            $table->integer('filter2');
            $table->integer('filter3');
            $table->integer('sumber');
            $table->integer('whatsapp');
            $table->integer('jumlah');
            $table->string('file');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnitin_orders');
    }
};
