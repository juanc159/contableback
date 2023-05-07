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
        Schema::create('archives_cash_receips', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('archive');
            $table->foreignId('cash_receipt_id')->constrained('cash_receipts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archives_cash_receips');
    }
};
