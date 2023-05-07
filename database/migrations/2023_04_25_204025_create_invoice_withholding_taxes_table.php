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
        Schema::create('invoice_withholding_taxes', function (Blueprint $table) {
            $table->id();
            $table->foreignId("withholdingTaxe_id")->constrained("withholding_taxes");
            $table->string("name");
            $table->string("value");
            $table->string("iva");
            $table->foreignId("invoice_id")->constrained("invoices");//Factura->reg.general
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_withholding_taxes');
    }
};
