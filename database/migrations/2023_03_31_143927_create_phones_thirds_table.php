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
        Schema::create('phones_thirds', function (Blueprint $table) {
            $table->id();
            $table->string('indicative')->nullable();
            $table->string('phone')->nullable();
            $table->string('extension')->nullable();
            $table->foreignId("third_id")->constrained("thirds");
            $table->foreignId("company_id")->constrained("companies");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones_thirds');
    }
};
