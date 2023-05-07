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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId("company_id")->constrained("companies");
            $table->foreignId("typeProduct_id")->constrained("type_products");
            $table->string("code");
            $table->string("ivaIncluded");
            $table->string("name");
            $table->string("price");
            $table->foreignId("taxCharge_id")->constrained("tax_charges");
            $table->string("unitOfMeasurement_id");
            $table->string("unitOfMeasurement");
            $table->string("factoryReference");
            $table->string("barcode");
            $table->string("description");
            $table->foreignId("taxClassification_id")->constrained("tax_charges");
            $table->string("withholdingTaxes_id");
            $table->string("valueInpoconsumo");
            $table->string("applyConsumptionTax");
            $table->string("model");
            $table->string("tariffCode");
            $table->string("mark");
            $table->boolean("state")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
